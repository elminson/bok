<!-- Top Bar End -->
<div class="page-wrapper-img">
    <div class="page-wrapper-img-inner">
        <div class="sidebar-user media">
			<?php  if (!empty($logged_in_user->picture)) { ?>
            <img src="{{ $logged_in_user->picture }}" alt="user" class="rounded-circle img-thumbnail mb-1">
                <?php }?>
            <span class="online-icon"><i class="mdi mdi-record text-success"></i></span>
            <div class="media-body">
				<?php  if (!empty($logged_in_user->picture)) { ?>
                <h5 class="text-light"> {{ $logged_in_user->name }} </h5>
					<?php }?>
                <ul class="list-unstyled list-inline mb-0 mt-2">
                    <li class="list-inline-item">
                        <a href="{{ route('frontend.user.account') }}" class=""><i class="mdi mdi-account text-light"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{{ route('frontend.auth.settings') }}" class=""><i class="mdi mdi-settings text-light"></i></a>
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
                        <a href="transfer" class="btn btn-info px-4 align-self-center report-btn">Make a Transfer</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
    </div>
</div>