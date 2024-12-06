<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;

class ReportFitnessController extends Controller
{
    public function index()
    {
        $data = [
            'title'                 => 'Report GYM Club List',
            'content'               => 'admin/gym-report/index'
        ];

        return view('admin.layouts.wrapper', $data);
    }
}
