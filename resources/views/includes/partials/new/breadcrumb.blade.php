<div class="page-wrapper-img">
    <div class="page-wrapper-img-inner">
        <div class="sidebar-user media">
            <img src="assets/images/users/user-1.jpg" alt="user" class="rounded-circle img-thumbnail mb-1">
            <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
            <div class="media-body">
                <h5 class="text-light">Mr. Michael Hill </h5>
                <ul class="list-unstyled list-inline mb-0 mt-2">
                    <li class="list-inline-item">
                        <a href="{{ route('frontend.user.account') }}" class=""><i class="mdi mdi-account text-light"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('frontend.user.dashboard') }}" class=""><i class="mdi mdi-settings text-light"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('frontend.auth.logout') }}" class=""><i class="mdi mdi-power text-danger"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="float-right align-item-center mt-2">
                        <button class="btn btn-info px-4 align-self-center report-btn">Creat Report</button>
                    </div>
                    <h4 class="page-title mb-2"><i class="mdi mdi-monitor mr-2"></i>Dashboard</h4>
                    <div class="">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Frogetor</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
                            <li class="breadcrumb-item active">Dashboard 1</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
    </div>
</div>