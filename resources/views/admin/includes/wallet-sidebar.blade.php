<!--****
  Wallet Sidebar
  ****-->
<div class="wallet-bar wow fadeInRight dlab-scroll active" id="wallet-bar" data-wow-delay="0.7s">
    <div class="row ">
        {{-- Recent Member --}}
        <div class="col-xl-12">
            <div class="card bg-transparent mb-1">
                <div class="card-header border-0 px-3">
                    <div>
                        <h2 class="heading mb-0">Recent Members</h2>
                        <span>You have <span class="font-w600">{{ $totalMember }}</span> Members</span>
                    </div>
                </div>
                <div class="card-body height450 dlab-scroll loadmore-content recent-activity-wrapper p-3 pt-2"
                    id="RecentActivityContent">
                    <!--student-->
                    <div class="d-flex align-items-center student">
                        <div class="user-info">
                            @foreach ($members as $item)
                                <h6 class="name mt-1">
                                    <a href="#">{{ $item->full_name }}</a>
                                </h6>
                                {{-- <span class="fs-14 font-w400 text-wrap">{{ $item->full_name }}</span><br /> --}}
                            @endforeach
                        </div>
                    </div>
                    <!--/student-->
                </div>
                <div class="card-footer text-center border-0 pt-0 px-3 pb-0">
                    <a href="{{ route('member.index') }}" class="btn btn-block btn-primary light btn-rounded">View
                        More</a>
                </div>
            </div>
        </div>
        {{-- Recent Trainer --}}
        <div class="col-xl-12">
            <div class="card bg-transparent mb-1">
                <div class="card-header border-0 px-3">
                    <div>
                        <h2 class="heading mb-0">Recent Trainers</h2>
                        <span>You have <span class="font-w600">{{ $totalPersonalTrainers }}</span> Trainers</span>
                    </div>
                </div>
                <div class="card-body height450 dlab-scroll loadmore-content recent-activity-wrapper p-3 pt-2"
                    id="RecentActivityContent">
                    <!--student-->
                    <div class="d-flex align-items-center student">
                        <div class="user-info">
                            @foreach ($trainers as $item)
                                <h6 class="name mt-3">
                                    <a href="#">{{ $item->full_name }}</a>
                                </h6>
                            @endforeach
                        </div>
                    </div>
                    <!--/student-->
                </div>
                <div class="card-footer text-center border-0 pt-0 px-3 pb-0">
                    <a href="{{ route('personal-trainer.index') }}"
                        class="btn btn-block btn-primary light btn-rounded">View
                        More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wallet-bar-close"></div>
