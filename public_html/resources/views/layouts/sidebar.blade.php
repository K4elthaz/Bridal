<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#"  style="text-align: center !important; margin-top -15px !important">
            <img src="/website/images/logo-pink.png" class="navbar-brand-img h-100" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
		<ul class="navbar-nav">

			<li class="nav-item">
				<a class="nav-link {{($page['name'] == "Dashboard") ? 'active' : ''}}" href="/dashboard">
					<div class="icon icon-shape icon-sm shadow border-radius-md bg-pink text-center me-2 pb-3 d-flex align-items-center justify-content-center">
						<i class="fa fa-chart-area f-black"></i>
					</div>
					<span class="nav-link-text ms-1">Dashboard</span>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link {{($page['name'] == "Transactions") ? 'active' : ''}}" href="/transactions">
					<div class="icon icon-shape icon-sm shadow border-radius-md bg-pink text-center me-2 pb-3 d-flex align-items-center justify-content-center">
						<i class="fa fa-file f-black"></i>
					</div>
					<span class="nav-link-text ms-1">Transactions</span>
				</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link {{($page['name'] == "Rental") ? 'active' : ''}}" href="/rental">
					<div class="icon icon-shape icon-sm shadow border-radius-md bg-pink text-center me-2 pb-3 d-flex align-items-center justify-content-center">
						<i class="fa fa-file f-black"></i>
					</div>
					<span class="nav-link-text ms-1">Rental</span>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link {{($page['name'] == "Products") ? 'active' : ''}}" href="/products">
					<div class="icon icon-shape icon-sm shadow border-radius-md bg-pink text-center me-2 pb-3 d-flex align-items-center justify-content-center">
						<i class="fa fa-tshirt f-black"></i>
					</div>
					<span class="nav-link-text ms-1">Products</span>
				</a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link {{($page['name'] == "Reports") ? 'active' : ''}}" href="/reports">
					<div class="icon icon-shape icon-sm shadow border-radius-md bg-pink text-center me-2 pb-3 d-flex align-items-center justify-content-center">
						<i class="fa fa-file f-black"></i>
					</div>
					<span class="nav-link-text ms-1">Reports</span>
				</a>
			</li>

			<li class="nav-item">
				<a class="nav-link {{($page['name'] == "Customers") ? 'active' : ''}}" href="/customers">
					<div class="icon icon-shape icon-sm shadow border-radius-md bg-pink text-center me-2 pb-3 d-flex align-items-center justify-content-center">
						<i class="fa fa-users f-black"></i>
					</div>
					<span class="nav-link-text ms-1">Customers</span>
				</a>
			</li>

			@if(Auth::user()->classification_id == 1)
				<li class="nav-item">
					<a class="nav-link {{($page['name'] == "Website") ? 'active' : ''}}" href="/website-information">
						<div class="icon icon-shape icon-sm shadow border-radius-md bg-pink text-center me-2 pb-3 d-flex align-items-center justify-content-center">
							<i class="fa fa-desktop f-black"></i>
						</div>
						<span class="nav-link-text ms-1">Website Info</span>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link {{($page['name'] == "Users") ? 'active' : ''}}" href="/users">
						<div class="icon icon-shape icon-sm shadow border-radius-md bg-pink text-center me-2 pb-3 d-flex align-items-center justify-content-center">
							<i class="fa fa-lock f-black"></i>
						</div>
						<span class="nav-link-text ms-1">System Users</span>
					</a>
				</li>
			@endif
			
		</ul>
    </div>
    {{-- <div class="sidenav-footer mx-3 mt-5">
		<div class="card card-background shadow-none bg-pink" id="sidenavCard">
			<div class="full-background" >
				<span class="mask" style="border-radius: 12px"></span>
			</div>
			<div class="card-body text-start p-3 w-100">
				<img src="/images/laguna_logo.png" class="navbar-brand-img mb-3" alt="main_logo" aria-hidden="true" id="sidenavCardIcon">

				<div class="docs-info">
					<p class="text-white up mb-0">Copyright 2023</p>
					<p class="text-xs">All Rigts Reserved.</p>
					<a href="https://laguna.gov.ph" target="_blank" class="btn btn-white btn-sm w-100 mb-0">PGL-MISO</a>
				</div>
			</div>
		</div>
    </div> --}}

	<div class="sidenav-footer mx-3 ">
		<div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
			<div class="full-background" style="background-image: url('/vendor/soft_ui/assets/img/curved-images/curved1.jpg')"></div>
			<div class="card-body text-start p-3 w-100">
				<div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
					<img src="/website/images/logo-black.png" width="20px">
				</div>
				<div class="docs-info">
					<p class="text-white up mb-0">Copyright 2023</p>
					<p class="text-xs">All Rigts Reserved.</p>
					<a href="#" class="btn btn-white f-black btn-sm w-100 mb-0">SHAWN'S BRIDAL SHOP</a>
				</div>
			</div>
		</div>
	</div>
</aside>