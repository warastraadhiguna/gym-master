<div class="row">
    <div class="col-xl-12">
        @if (isset($fromDate))
            <div class="col-xl-12">
                <div class="page-title flex-wrap justify-content-start">
                    <div class="col-3 d-flex flex-nowrap align-items-center">
                        <input type="date" id="fromDate" class="form-control" value="{{ $fromDate }}">
                        <span class="mx-1">to</span>
                        <input type="date" id="toDate" class="form-control" value="{{ $toDate }}">
                    </div>
                    <div class="col-2 d-flex flex-nowrap align-items-center mx-2">
                        <select id="ptId" class="form-control single-select">
                            <option value="">All PT</option>
                            @foreach($pt as $item)
                            <option value="{{ $item->id }}" {{ $item->id == $ptId ? 'selected' : '' }}>
                                {{ $item->full_name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <button type="button" onclick="reloadPage()" class="btn btn-info mx-1" data-bs-toggle="modal">
                        Filter
                    </button>
                    <button type="button" onclick="reloadPage(1)" class="btn btn-outline-info" data-bs-toggle="modal">
                        Download Excel
                    </button>
                </div>
            </div>
        @endif
        <div class="row">
            
            <!--column-->
            <div class="col-xl-12 wow fadeInUp" data-wow-delay="1.5s">
                <div class="table-responsive full-data">
                    <table class="table table-bordered" border="1" style="text-align: center;" height="2px"
                        width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>PT Name</th>
                                <th>Member Name</th>
                                <th>LO Start</th>
                                <th>LO End</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($result as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        {{ $item->pt_name }}
                                    </td>
                                    <td>
                                        {{ $item->member_name }}
                                    </td>
                                    <td>
                                        {{ DateFormat($item->lo_start_date, 'DD MMMM YYYY, H:mm:ss') }}
                                    </td>
                                    <td>
                                        {{ DateFormat($item->lo_end, 'DD MMMM YYYY, H:mm:ss') }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/column-->
        </div>
    </div>
</div>


<script>
    function reloadPage(excel = 0) {
        var fromDate = document.getElementById("fromDate").value;
        var toDate = document.getElementById("toDate").value;
        var ptId = document.getElementById("ptId").value;
        // alert(window.location.host );
        // window.open(window.location.pathname + '?fromDate=' + fromDate + '&toDate=' + toDate + '&pdf=' + pdf +
        //     "&date=" + new Date().toISOString(), '_self');
        window.open(window.location.pathname + '?fromDate=' + fromDate + '&toDate=' + toDate + '&ptId=' + ptId +
            '&excel=' + excel +
            "&date=" + new Date().toISOString(), '_self');
    }
</script>