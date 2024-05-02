
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="apple-touch-icon" sizes="76x76" href="/vendor/soft_ui/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="favicon.ico">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

	<title>
		Shawn's Bridal Shop
	</title>
	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css">
	<link href="/css/fonts.css" rel="stylesheet" />
	<link href="/vendor/soft_ui/assets/css/nucleo-icons.css" rel="stylesheet" />
	<link href="/vendor/soft_ui/assets/css/nucleo-svg.css" rel="stylesheet" />
	<link href="/vendor/soft_ui/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="/css/modified.css" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet" />

</head>

<body class="" style="overflow:hidden;">
	
	<main class="main-content  mt-0">

		<section>
			<div class="page-header min-vh-75">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
							<div class="card card-plain mt-8">
								<div class="card-header pb-0 text-left bg-transparent">
									<div class="row">
										<div class="col-md-3">
											<img src="/website/images/logo-pink.png" width="150" alt="" style="margin-bottom: -38px">
										</div>
										<div class="col-md-9 pt-3">
											<h4 class="font-weight-bolder bg-pink text-gradient">
									
											</h4>
										</div>
									</div>
									<br><br>
									<p class="mb-0 mt-2">Admin Login</p>
								</div>
								<div class="card-body">
									<form role="form" method="post" action="/login">
										@csrf
										@include('layouts.message')
										<label>Username</label>
										<div class="mb-3">
										<input type="email" name="email"  class="form-control" value="{{old('email')}}" placeholder="Username" aria-label="Username">
										</div>
										<label>Password</label>
										<div class="mb-3">
										<input type="password" name="password"  class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
										</div>
										<div class="mb-3">
											<small><a href="/forgot-password">Forgot password?</a></small>
										</div>
										<div class="text-center">
											<button type="submit" class="btn bg-pink f-black w-100 mb-0">Sign in</button>
										</div>
									</form>
								</div>
								<div class="card-footer text-center pt-0 px-lg-2 px-1">
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
								<div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" 
								style="background-image:url('/vendor/soft_ui/assets/img/curved-images/curved6.jpg')">
								<span class="mask bg-pink opacity-4"></span>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
    <script src="/vendor/soft_ui/assets/js/core/popper.min.js"></script>
    <script src="/vendor/soft_ui/assets/js/core/bootstrap.min.js"></script>
    <script src="/vendor/soft_ui/assets/js/core/jquery.min.js"></script>
    <script src="/vendor/soft_ui/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/vendor/soft_ui/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="/vendor/soft_ui/assets/js/plugins/chartjs.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    {{-- <script async defer src="https://buttons.github.io/buttons.js"></script> --}}
    <script src="/vendor/soft_ui/assets/js/soft-ui-dashboard.min.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>