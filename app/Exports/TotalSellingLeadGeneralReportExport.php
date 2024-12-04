<?php

namespace App\Exports;

use App\Models\Member\Member;
use App\Models\Member\MemberRegistration;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;

class TotalSellingLeadGeneralReportExport implements FromView
{
    public function view(): View
    {
        $fromDate   = Request()->input('fromDate');
        $toDate     = Request()->input('toDate');
        $memberId   = Request()->input('memberId');
        $fcId       = Request()->input('fcId');
        $pdf        = Request()->input('pdf');
        $excel      = Request()->input('excel');

        $member = Member::all();

        if (!$fromDate || !$toDate) {
            $fromDate = NowDate();
            $toDate = NowDate();
        }

        if ($fcId){
            $results = User::select('users.full_name as fc_name', 'member_registrations.fc_id', DB::raw('COUNT(users.id) as fc_total'))
            ->join('member_registrations', 'member_registrations.fc_id', '=', 'users.id')
            ->whereDate('member_registrations.created_at', '>=', $fromDate)
            ->whereDate('member_registrations.created_at', '<=', $toDate)
            // ->where('users.role', '=', 'FC')
            ->where('member_registrations.fc_id', '=', $fcId)
            ->groupBy('users.id', 'users.full_name', 'member_registrations.fc_id')
            ->orderBy('users.full_name', 'asc')
            ->get();
        }else{
            $results = User::select('users.full_name as fc_name', DB::raw('COUNT(users.id) as fc_total'))
            ->join('member_registrations', 'member_registrations.fc_id', '=', 'users.id')
            ->whereDate('member_registrations.created_at', '>=', $fromDate)
            ->whereDate('member_registrations.created_at', '<=', $toDate)
            ->where('users.role', '=', 'FC')
            ->groupBy('users.id', 'users.full_name')
            ->orderBy('users.full_name', 'asc')
            ->get();
        }
        // dd($results);

        return view('admin.gym-report.excel.fc-total-member-selling-report', [
            'result' => $results
        ]);
    }

    public function styles($row): array
    {
        if ($row % 2 == 0) {
            return [
                'font' => ['bold' => true],
                'fill' => [
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'startColor' => ['argb' => 'FFC0C0C0'],
                ]
            ];
        } else {
            return [];
        }
    }
}