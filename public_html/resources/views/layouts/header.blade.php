<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm">
					<a class="opacity-5 text-dark" href="javascript:;">Pages</a>
				</li>
				@include('layouts.crumb')
            </ol>
            @include('layouts.title')
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
			<div class="ms-md-auto pe-md-3 d-flex align-items-center">
				
			</div>
			<ul class="navbar-nav  justify-content-end">
				<li class="nav-item d-xl-none ps-3 d-flex align-items-center" style="margin-right: 20px !important;">
					<a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
					<div class="sidenav-toggler-inner">
						<i class="sidenav-toggler-line"></i>
						<i class="sidenav-toggler-line"></i>
						<i class="sidenav-toggler-line"></i>
					</div>
					</a>
				</li>
				
				<li class="nav-item dropdown ml-2 pe-2 ml-2 d-flex align-items-center">
				<a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-user cursor-pointer"></i>
				</a>
				<ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
					<li class="mb-0">
						<a class="dropdown-item border-radius-md" href="/edit-profile">
							<div class="d-flex py-1">
								<div class="my-auto">
									<img src="/images/profile-icon2.png" class="avatar avatar-xs me-3 ">
								</div>
								<div class="d-flex flex-column justify-content-center">
									<h6 class="text-sm font-weight-normal mb-0">
									<span class="font-weight-bold">
										{{Auth::user()->full_name}}
									</span>
									</h6>
								</div>
							</div>
						</a>
					</li>
					<li class="mb-2">
						<a class="dropdown-item border-radius-md" href="/change-password">
							<center>
								<span class="">
									Change password
								</span>
							</center>
						</a>
					</li>
					<li class="mb-2">
						<a class="dropdown-item border-radius-md" data-toggle="modal" data-target="#logout_modal">
							<center>
								<span class="bg-pink text-gradient">
									Logout
								</span>
							</center>
						</a>
					</li>
				</ul>
				</li>
			</ul>
        </div>
    </div>
</nav>

<div class="modal fade" role="dialog"  id="logout_modal">
    <div class="modal-dialog modal-dialog-top" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <b class="modal-title bg-pink text-gradient"><i class="fa fa-power-off mr-5"></i> Logout</b>
                <a class="close text-secondary" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </a>
            </div>
            <div class="modal-body">
                <div class="row"> 
                    <div class="col-md-12 mt-2">
						<center>
							{{-- <img src="/images/coffee.gif" alt="" class="mb-3" width="200" style="border-radius: 50%"> --}}
							<h5>Having a break {{Auth::user()->full_name}} ?</h5>
							{{-- <span class="text-danger destroy-label"></span><br> --}}
							<label class="text-muted"> Do you really want to logout? 
							</label>
						</center>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn bg-gradient-dark" data-dismiss="modal">Close</a>
                <a type="button" href="/logout" class="btn bg-pink f-black">Logout</a>
            </div>
        </div>
    </div>
</div>