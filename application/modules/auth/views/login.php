<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<title>Login | Politeknik Harapan Bersama</title>

	<meta name="description" content="Politeknik Harapan Bersama">
	<meta name="author" content="@PHB_dev">
	<meta name="robots" content="noindex, nofollow">

	<!-- Open Graph Meta -->
	<meta property="og:title" content="Politeknik Harapan Bersama">
	<meta property="og:site_name" content="Politeknik Harapan Bersama">
	<meta property="og:description" content="Politeknik Harapan Bersama">
	<meta property="og:type" content="website">
	<meta property="og:url" content="">
	<meta property="og:image" content="">

	<!-- Icons -->
	<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/media/favicons/phb.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url('assets/backend'); ?>/media/favicons/phb.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/backend'); ?>/media/favicons/phb.png">
	<!-- END Icons -->

	<!-- Stylesheets -->
	<!-- Fonts and OneUI framework -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
	<link rel="stylesheet" id="css-main" href="<?php echo base_url('assets/backend'); ?>/css/oneui.min.css">

	<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
	<!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/amethyst.min.css"> -->
	<!-- END Stylesheets -->
</head>

<body>
	<!-- Page Container -->
	<!--
        Available classes for #page-container:

    GENERIC

      'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                  - Theme helper buttons [data-toggle="theme"],
                                                  - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                  - ..and/or One.layout('dark_mode_[on/off/toggle]')

    SIDEBAR & SIDE OVERLAY

      'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
      'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
      'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
      'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
      'sidebar-dark'                              Dark themed sidebar

      'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
      'side-overlay-o'                            Visible Side Overlay by default

      'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

      'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

    HEADER

      ''                                          Static Header if no class is added
      'page-header-fixed'                         Fixed Header

    HEADER STYLE

      ''                                          Light themed Header
      'page-header-dark'                          Dark themed Header

    MAIN CONTENT LAYOUT

      ''                                          Full width Main Content if no class is added
      'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
      'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

    DARK MODE

      'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
	<div id="page-container">

		<!-- Main Container -->
		<main id="main-container">

			<!-- Page Content -->
			<div class="bg-image" style="background-image: url('<?php echo base_url('assets/backend'); ?>/media/photos/photo28@2x.jpg');">
				<div class="row g-0 bg-primary-dark-op">
					<!-- Meta Info Section -->
					<div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
						<div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
							<div class="w-100">
								<a class="link-fx fw-semibold fs-2 text-white" href="index.html">
									One<span class="fw-normal">UI</span>
								</a>
								<p class="text-white-75 me-xl-8 mt-2">
									Welcome to your amazing app. Feel free to login and start managing your projects and clients.
								</p>
							</div>
						</div>
						<div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
							<p class="fw-medium text-white-50 mb-0">
								<strong>OneUI 5.1</strong> &copy; <span data-toggle="year-copy"></span>
							</p>
							<ul class="list list-inline mb-0 py-2">
								<li class="list-inline-item">
									<a class="text-white-75 fw-medium" href="javascript:void(0)">Legal</a>
								</li>
								<li class="list-inline-item">
									<a class="text-white-75 fw-medium" href="javascript:void(0)">Contact</a>
								</li>
								<li class="list-inline-item">
									<a class="text-white-75 fw-medium" href="javascript:void(0)">Terms</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- END Meta Info Section -->

					<!-- Main Section -->
					<div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-light">
						<div class="p-3 w-100 d-lg-none text-center">
							<a class="link-fx fw-semibold fs-3 text-dark" href="index.html">
								One<span class="fw-normal">UI</span>
							</a>
						</div>
						<div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
							<div class="w-100">
								<!-- Header -->
								<div class="text-center mb-5">
									<p class="mb-3">
										<img src="<?php echo base_url('assets/backend'); ?>/media/favicons/phb.png" width="80">
									</p>
									<h1 class="fw-bold mb-2">
										Sign In
									</h1>
									<p class="fw-medium text-muted">
										Welcome, please login or <a href="op_auth_signup3.html">sign up</a> for a new account.
									</p>
								</div>
								<!-- END Header -->

								<!-- Sign In Form -->
								<!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
								<!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
								<div class="row g-0 justify-content-center">
									<div class="col-sm-8 col-xl-4">
										<?php if ($this->session->flashdata('notifikasi')){ ?>
										<div class="alert alert-danger alert-dismissible" role="alert">
											<p class="mb-0 small"><?php echo $this->session->flashdata('notifikasi'); ?></p>
											<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
										</div>
										<?php } ?>
										
										<form class="js-validation-signin" action="auth/proses" method="POST">
											<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
											
											<div class="mb-4">
												<input type="text" class="form-control form-control-lg form-control-alt py-3" id="login-username" name="username" placeholder="Username" required>
											</div>
											
											<div class="mb-4">
												<input type="password" class="form-control form-control-lg form-control-alt py-3" id="login-password" name="password" placeholder="Password" required>
											</div>
											
											<div class="d-flex justify-content-between align-items-center mb-4">
												<button type="submit" class="btn btn-lg btn-alt-primary">
													<i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Sign In
												</button>
											</div>
										</form>
									</div>
								</div>
								<!-- END Sign In Form -->
							</div>
						</div>
						<div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
							<p class="fw-medium text-black-50 py-2 mb-0">
								<strong>OneUI 5.1</strong> &copy; <span data-toggle="year-copy"></span>
							</p>
							<ul class="list list-inline py-2 mb-0">
								<li class="list-inline-item">
									<a class="text-muted fw-medium" href="javascript:void(0)">Legal</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted fw-medium" href="javascript:void(0)">Contact</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted fw-medium" href="javascript:void(0)">Terms</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- END Main Section -->
				</div>
			</div>
			<!-- END Page Content -->
		</main>
		<!-- END Main Container -->
	</div>
	<!-- END Page Container -->

	<!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
	<script src="<?php echo base_url('assets/backend'); ?>/js/oneui.app.min.js"></script>

	<!-- jQuery (required for jQuery Validation plugin) -->
	<script src="<?php echo base_url('assets/backend'); ?>/js/lib/jquery.min.js"></script>

	<!-- Page JS Plugins -->
	<script src="<?php echo base_url('assets/backend'); ?>/js/plugins/jquery-validation/jquery.validate.min.js"></script>

	<!-- Page JS Code -->
	<script src="<?php echo base_url('assets/backend'); ?>/js/pages/op_auth_signin.min.js"></script>
</body>

</html>