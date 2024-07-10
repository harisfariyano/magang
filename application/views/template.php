<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

	<title>Politeknik Harapan Bersama</title>

	<meta name="description" content="Politeknik Harapan Bersama">
	<meta name="author" content="@PHBDev">
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
	<link rel="stylesheet" href="<?php echo base_url('assets/backend'); ?>/js/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/backend'); ?>/css/oneui.css" id="css-main">
	<link rel="stylesheet" href="<?php echo base_url('assets/backend'); ?>/css/custom.css">

	<!-- Page JS Plugins CSS -->
	<link rel="stylesheet" href="<?php echo base_url('assets/backend'); ?>/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
	<link rel="stylesheet" href="<?php echo base_url('assets/backend'); ?>/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">

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
	<div id="page-container" class="sidebar-o sidebar-mini sidebar-dark side-scroll page-header-fixed remember-theme">
		<!-- Sidebar -->
		<!--
          Sidebar Mini Mode - Display Helper classes

          Adding 'smini-hide' class to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
          Adding 'smini-show' class to an element will make it visible (opacity: 1) when the sidebar is in mini mode
              If you would like to disable the transition animation, make sure to also add the 'no-transition' class to your element

          Adding 'smini-hidden' to an element will hide it when the sidebar is in mini mode
          Adding 'smini-visible' to an element will show it (display: inline-block) only when the sidebar is in mini mode
          Adding 'smini-visible-block' to an element will show it (display: block) only when the sidebar is in mini mode
		-->
		<nav id="sidebar" aria-label="Main Navigation">
			<!-- Side Header -->
			<div class="content-header">
				<!-- Logo -->
				<span class="fw-semibold text-dual">
					<span class="smini-visible">
						<i class="fa fa-circle-notch text-primary"></i>
					</span>
					<span class="smini-hide fs-5 tracking-wider">PHB<span class="fw-normal">UI</span></span>
				</span>
				<!-- END Logo -->

				<!-- Extra -->
				<div>
					<!-- Dark Mode -->
					<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
					<button type="button" class="btn btn-sm btn-alt-secondary" data-toggle="layout" data-action="dark_mode_toggle">
						<i class="far fa-moon"></i>
					</button>
					<!-- END Dark Mode -->

					<!-- Options -->
					<div class="dropdown d-inline-block ms-1">
						<button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="far fa-circle"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown">
							<!-- Color Themes -->
							<!-- Layout API, functionality initialized in Template._uiHandleTheme() -->
							<a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default" href="#">
								<span>Default</span>
								<i class="fa fa-circle text-default"></i>
							</a>
							<a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="<?php echo base_url('assets/backend'); ?>/css/themes/amethyst.min.css" href="#">
								<span>Amethyst</span>
								<i class="fa fa-circle text-amethyst"></i>
							</a>
							<a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="<?php echo base_url('assets/backend'); ?>/css/themes/city.min.css" href="#">
								<span>City</span>
								<i class="fa fa-circle text-city"></i>
							</a>
							<a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="<?php echo base_url('assets/backend'); ?>/css/themes/flat.min.css" href="#">
								<span>Flat</span>
								<i class="fa fa-circle text-flat"></i>
							</a>
							<a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="<?php echo base_url('assets/backend'); ?>/css/themes/modern.min.css" href="#">
								<span>Modern</span>
								<i class="fa fa-circle text-modern"></i>
							</a>
							<a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="<?php echo base_url('assets/backend'); ?>/css/themes/smooth.min.css" href="#">
								<span>Smooth</span>
								<i class="fa fa-circle text-smooth"></i>
							</a>
							<!-- END Color Themes -->

							<div class="dropdown-divider"></div>

							<!-- Sidebar Styles -->
							<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
							<a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_light" href="javascript:void(0)">
								<span>Sidebar Light</span>
							</a>
							<a class="dropdown-item fw-medium" data-toggle="layout" data-action="sidebar_style_dark" href="javascript:void(0)">
								<span>Sidebar Dark</span>
							</a>
							<!-- END Sidebar Styles -->

							<div class="dropdown-divider"></div>

							<!-- Header Styles -->
							<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
							<a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_light" href="javascript:void(0)">
								<span>Header Light</span>
							</a>
							<a class="dropdown-item fw-medium" data-toggle="layout" data-action="header_style_dark" href="javascript:void(0)">
								<span>Header Dark</span>
							</a>
							<!-- END Header Styles -->
						</div>
					</div>
					<!-- END Options -->

					<!-- Close Sidebar, Visible only on mobile screens -->
					<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
					<a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
						<i class="fa fa-fw fa-times"></i>
					</a>
					<!-- END Close Sidebar -->
				</div>
				<!-- END Extra -->
			</div>
			<!-- END Side Header -->

			<!-- Sidebar Scrolling -->
			<div class="js-sidebar-scroll">
				<!-- Side Navigation -->
				<div class="content-side">
					<ul class="nav-main">
						<li class="nav-main-item">
							<a class="nav-main-link <?php menu_aktif($halaman, "dasbor", "menu"); ?>" href="<?php echo base_url(); ?>">
								<i class="nav-main-link-icon si si-speedometer"></i>
								<span class="nav-main-link-name">Dashboard</span>
							</a>
						</li>
						<!-- <li class="nav-main-item">
							<a class="nav-main-link <?php menu_aktif($halaman, "answer", "menu"); ?>" href="<?php echo base_url("answer"); ?>">
								<i class="nav-main-link-icon si si-note"></i>
								<span class="nav-main-link-name">Form</span>
							</a>
						</li> -->
						<li class="nav-main-item <?php menu_aktif($halaman, "link1|link2", "parent"); ?>">
							<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
								<i class="nav-main-link-icon si si-note"></i>
								<span class="nav-main-link-name">Form</span>
							</a>
							<ul class="nav-main-submenu">
								<li class="nav-main-item">
									<a class="nav-main-link" href="<?php echo site_url('answer/1'); ?>">
										<span class="nav-main-link-name">Sarana dan Prasarana</span>
									</a>
								</li>
								<li class="nav-main-item">
									<a class="nav-main-link" href="<?php echo site_url('answer/2'); ?>">
										<span class="nav-main-link-name">Tenaga Pendidikan</span>
									</a>
								</li>
								<li class="nav-main-item">
									<a class="nav-main-link" href="<?php echo site_url('answer/3'); ?>">
										<span class="nav-main-link-name">Evaluasi Pengelolaan</span>
									</a>
								</li>
								<li class="nav-main-item">
									<a class="nav-main-link" href="<?php echo site_url('answer/4'); ?>">
										<span class="nav-main-link-name">EDOM</span>
									</a>
								</li>
							</ul>
						</li>
						<!-- <li class="nav-main-item">
							<a class="nav-main-link <?php menu_aktif($halaman, "quest", "menu"); ?>" href="<?php echo base_url("quest"); ?>">
								<i class="nav-main-link-icon si si-puzzle"></i>
								<span class="nav-main-link-name">Quest List</span>
							</a>
						</li> -->
						<li class="nav-main-item">
							<a class="nav-main-link <?php menu_aktif($halaman, "report", "menu"); ?>" href="<?php echo base_url("report"); ?>">
								<i class="nav-main-link-icon fa fa-print"></i>
								<span class="nav-main-link-name">Reports</span>
							</a>
						</li>
						<li class="nav-main-item <?php menu_aktif($halaman, "link1|link2", "parent"); ?>">
							<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
								<i class="nav-main-link-icon fa fa-print"></i>
								<span class="nav-main-link-name">Report</span>
							</a>
							<ul class="nav-main-submenu">
								<li class="nav-main-item">
									<a class="nav-main-link" href="<?php echo site_url('report_test/1'); ?>">
										<span class="nav-main-link-name">Sarpras</span>
									</a>
								</li>
								<li class="nav-main-item">
									<a class="nav-main-link" href="<?php echo site_url('report_test/2'); ?>">
										<span class="nav-main-link-name">Tendik</span>
									</a>
								</li>
								<li class="nav-main-item">
									<a class="nav-main-link" href="<?php echo site_url('report_test/3'); ?>">
										<span class="nav-main-link-name">Eval</span>
									</a>
								</li>
								<li class="nav-main-item">
									<a class="nav-main-link" href="<?php echo site_url('report_test/4'); ?>">
										<span class="nav-main-link-name">EDOM</span>
									</a>
								</li>
							</ul>
						</li>
						<!-- <li class="nav-main-item">
							<a class="nav-main-link <?php menu_aktif($halaman, "sub quest", "menu"); ?>" href="<?php echo base_url("spmi"); ?>">
								<i class="nav-main-link-icon si si-note"></i>
								<span class="nav-main-link-name">Sub Questionnaire</span>
							</a>
						</li> -->
						<li class="nav-main-item <?php menu_aktif($halaman, "link1|link2", "parent"); ?>">
							<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
								<i class="nav-main-link-icon si si-puzzle"></i>
								<span class="nav-main-link-name">Questionnaire</span>
							</a>
							<ul class="nav-main-submenu">
								<li class="nav-main-item">
									<a class="nav-main-link" href="<?php echo site_url('jenis_quest'); ?>">
										<span class="nav-main-link-name">Jenis Quest</span>
									</a>
								</li>
								<li class="nav-main-item">
									<a class="nav-main-link" href="<?php echo site_url('subquest'); ?>">
										<span class="nav-main-link-name">Sub Quest</span>
									</a>
								</li>
								<li class="nav-main-item">
									<a class="nav-main-link" href="<?php echo site_url('quest'); ?>">
										<span class="nav-main-link-name">Quest</span>
									</a>
								</li>
							</ul>
						</li>
						<!-- <li class="nav-main-item <?php menu_aktif($halaman, "link1|link2", "parent"); ?>">
							<a class="nav-main-link <?php menu_aktif($halaman, "sub quest", "menu"); ?>" href="<?php echo base_url("spmi"); ?>">
								<i class="nav-main-link-icon si si-note"></i>
								<span class="nav-main-link-name">Sub Questionnaire</span>
							</a>
						</li>
						<li class="nav-main-item <?php menu_aktif($halaman, "link1|link2", "parent"); ?>">
							<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
								<i class="nav-main-link-icon si si-puzzle"></i>
								<span class="nav-main-link-name">Multi Level Menu</span>
							</a>
							<ul class="nav-main-submenu">
								<li class="nav-main-item">
									<a class="nav-main-link" href="user">
										<span class="nav-main-link-name">Link 1-1</span>
									</a>
								</li>
								<li class="nav-main-item">
									<a class="nav-main-link" href="#">
										<span class="nav-main-link-name">Link 1-2</span>
									</a>
								</li>
								<li class="nav-main-item">
									<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
										<span class="nav-main-link-name">Sub Level 2</span>
									</a>
									<ul class="nav-main-submenu">
										<li class="nav-main-item">
											<a class="nav-main-link" href="#">
												<span class="nav-main-link-name">Link 2-1</span>
											</a>
										</li>
										<li class="nav-main-item">
											<a class="nav-main-link" href="#">
												<span class="nav-main-link-name">Link 2-2</span>
											</a>
										</li>
										<li class="nav-main-item">
											<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
												<span class="nav-main-link-name">Sub Level 3</span>
											</a>
											<ul class="nav-main-submenu">
												<li class="nav-main-item">
													<a class="nav-main-link" href="#">
														<span class="nav-main-link-name">Link 3-1</span>
													</a>
												</li>
												<li class="nav-main-item">
													<a class="nav-main-link" href="#">
														<span class="nav-main-link-name">Link 3-2</span>
													</a>
												</li>
												<li class="nav-main-item">
													<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
														<span class="nav-main-link-name">Sub Level 4</span>
													</a>
													<ul class="nav-main-submenu">
														<li class="nav-main-item">
															<a class="nav-main-link" href="#">
																<span class="nav-main-link-name">Link 4-1</span>
															</a>
														</li>
														<li class="nav-main-item">
															<a class="nav-main-link" href="#">
																<span class="nav-main-link-name">Link 4-2</span>
															</a>
														</li>
														<li class="nav-main-item">
															<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
																<span class="nav-main-link-name">Sub Level 5</span>
															</a>
															<ul class="nav-main-submenu">
																<li class="nav-main-item">
																	<a class="nav-main-link" href="#">
																		<span class="nav-main-link-name">Link 5-1</span>
																	</a>
																</li>
																<li class="nav-main-item">
																	<a class="nav-main-link" href="#">
																		<span class="nav-main-link-name">Link 5-2</span>
																	</a>
																</li>
																<li class="nav-main-item">
																	<a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
																		<span class="nav-main-link-name">Sub Level 6</span>
																	</a>
																	<ul class="nav-main-submenu">
																		<li class="nav-main-item">
																			<a class="nav-main-link" href="#">
																				<span class="nav-main-link-name">Link 6-1</span>
																			</a>
																		</li>
																		<li class="nav-main-item">
																			<a class="nav-main-link" href="#">
																				<span class="nav-main-link-name">Link 6-2</span>
																			</a>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li> -->
						<li class="nav-main-heading">Master Data</li>
						<li class="nav-main-item">
							<a class="nav-main-link <?php menu_aktif($halaman, "user", "menu"); ?>" href="<?php echo base_url('user'); ?>">
								<i class="nav-main-link-icon si si-user"></i>
								<span class="nav-main-link-name">User</span>
							</a>
						</li>
					</ul>
				</div>
				<!-- END Side Navigation -->
			</div>
			<!-- END Sidebar Scrolling -->
		</nav>
		<!-- END Sidebar -->

		<!-- Header -->
		<header id="page-header">
			<!-- Header Content -->
			<div class="content-header">
				<!-- Left Section -->
				<div class="d-flex align-items-center">
					<!-- Toggle Sidebar -->
					<!-- Layout API, functionality initialized in Template._uiApiLayout()-->
					<button type="button" class="btn btn-sm btn-alt-secondary me-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
						<i class="fa fa-fw fa-bars"></i>
					</button>
					<!-- END Toggle Sidebar -->

					<!-- Toggle Mini Sidebar -->
					<!-- Layout API, functionality initialized in Template._uiApiLayout()-->
					<button type="button" class="btn btn-sm btn-alt-secondary me-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
						<i class="fa fa-fw fa-ellipsis-v"></i>
					</button>
					<!-- END Toggle Mini Sidebar -->

					<!-- Open Search Section (visible on smaller screens) -->
					<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
					<button type="button" class="btn btn-sm btn-alt-secondary d-md-none" data-toggle="layout" data-action="header_search_on">
						<i class="fa fa-fw fa-search"></i>
					</button>
					<!-- END Open Search Section -->

					<!-- Search Form (visible on larger screens) -->
					<form class="d-none d-md-inline-block" action="be_pages_generic_search.html" method="POST">
						<div class="input-group input-group-sm">
							<input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
							<span class="input-group-text border-0">
								<i class="fa fa-fw fa-search"></i>
							</span>
						</div>
					</form>
					<!-- END Search Form -->
				</div>
				<!-- END Left Section -->

				<!-- Right Section -->
				<div class="d-flex align-items-center">
					<!-- Notifications Dropdown -->
					<div class="dropdown d-inline-block ms-2">
						<button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-fw fa-bell"></i>
							<span class="text-primary">•</span>
						</button>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0 fs-sm" aria-labelledby="page-header-notifications-dropdown">
							<div class="p-2 bg-body-light border-bottom text-center rounded-top">
								<h5 class="dropdown-header text-uppercase">Notifications</h5>
							</div>
							<ul class="nav-items mb-0">
								<li>
									<a class="text-dark d-flex py-2" href="javascript:void(0)">
										<div class="flex-shrink-0 me-2 ms-3">
											<i class="fa fa-fw fa-check-circle text-success"></i>
										</div>
										<div class="flex-grow-1 pe-2">
											<div class="fw-semibold">You have a new follower</div>
											<span class="fw-medium text-muted">15 min ago</span>
										</div>
									</a>
								</li>
								<li>
									<a class="text-dark d-flex py-2" href="javascript:void(0)">
										<div class="flex-shrink-0 me-2 ms-3">
											<i class="fa fa-fw fa-plus-circle text-primary"></i>
										</div>
										<div class="flex-grow-1 pe-2">
											<div class="fw-semibold">1 new sale, keep it up</div>
											<span class="fw-medium text-muted">22 min ago</span>
										</div>
									</a>
								</li>
								<li>
									<a class="text-dark d-flex py-2" href="javascript:void(0)">
										<div class="flex-shrink-0 me-2 ms-3">
											<i class="fa fa-fw fa-times-circle text-danger"></i>
										</div>
										<div class="flex-grow-1 pe-2">
											<div class="fw-semibold">Update failed, restart server</div>
											<span class="fw-medium text-muted">26 min ago</span>
										</div>
									</a>
								</li>
								<li>
									<a class="text-dark d-flex py-2" href="javascript:void(0)">
										<div class="flex-shrink-0 me-2 ms-3">
											<i class="fa fa-fw fa-plus-circle text-primary"></i>
										</div>
										<div class="flex-grow-1 pe-2">
											<div class="fw-semibold">2 new sales, keep it up</div>
											<span class="fw-medium text-muted">33 min ago</span>
										</div>
									</a>
								</li>
								<li>
									<a class="text-dark d-flex py-2" href="javascript:void(0)">
										<div class="flex-shrink-0 me-2 ms-3">
											<i class="fa fa-fw fa-user-plus text-success"></i>
										</div>
										<div class="flex-grow-1 pe-2">
											<div class="fw-semibold">You have a new subscriber</div>
											<span class="fw-medium text-muted">41 min ago</span>
										</div>
									</a>
								</li>
								<li>
									<a class="text-dark d-flex py-2" href="javascript:void(0)">
										<div class="flex-shrink-0 me-2 ms-3">
											<i class="fa fa-fw fa-check-circle text-success"></i>
										</div>
										<div class="flex-grow-1 pe-2">
											<div class="fw-semibold">You have a new follower</div>
											<span class="fw-medium text-muted">42 min ago</span>
										</div>
									</a>
								</li>
							</ul>
							<div class="p-2 border-top text-center">
								<a class="d-inline-block fw-medium" href="javascript:void(0)">
									<i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Load More..
								</a>
							</div>
						</div>
					</div>
					<!-- END Notifications Dropdown -->

					<!-- User Dropdown -->
					<div class="dropdown d-inline-block ms-2">
						<button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="rounded-circle" src="<?php echo base_url('assets/backend'); ?>/media/avatars/avatar10.jpg" alt="Header Avatar" style="width: 21px;">
							<span class="d-none d-sm-inline-block ms-2"><?php echo $this->user_nama; ?></span>
							<i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1 mt-1"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
							<div class="p-3 text-center bg-body-light border-bottom rounded-top">
								<img class="img-avatar img-avatar48 img-avatar-thumb" src="<?php echo base_url('assets/backend'); ?>/media/avatars/avatar10.jpg" alt="">
								<p class="mt-2 mb-0 fw-medium"><?php echo $this->session->userdata('log_admin')['user_namalengkap']; ?></p>
								<p class="mb-0 text-muted fs-sm fw-medium"><?php echo level_user($this->session->userdata('log_admin')['user_level']); ?></p>
							</div>
							<div class="p-2">
								<a class="dropdown-item d-flex align-items-center justify-content-between" href="<?php echo base_url('profil'); ?>">
									<span class="fs-sm fw-medium">Edit Profil</span>
								</a>
							</div>
							<div role="separator" class="dropdown-divider m-0"></div>
							<div class="p-2">
								<a class="dropdown-item d-flex align-items-center justify-content-between" href="<?php echo base_url('logout'); ?>">
									<span class="fs-sm fw-medium">Log Out</span>
								</a>
							</div>
						</div>
					</div>
					<!-- END User Dropdown -->
				</div>
				<!-- END Right Section -->
			</div>
			<!-- END Header Content -->

			<!-- Header Search -->
			<div id="page-header-search" class="overlay-header bg-body-extra-light">
				<div class="content-header">
					<form class="w-100" action="be_pages_generic_search.html" method="POST">
						<div class="input-group">
							<!-- Layout API, functionality initialized in Template._uiApiLayout() -->
							<button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off">
								<i class="fa fa-fw fa-times-circle"></i>
							</button>
							<input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
						</div>
					</form>
				</div>
			</div>
			<!-- END Header Search -->

			<!-- Header Loader -->
			<!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
			<div id="page-header-loader" class="overlay-header bg-body-extra-light">
				<div class="content-header">
					<div class="w-100 text-center">
						<i class="fa fa-fw fa-circle-notch fa-spin"></i>
					</div>
				</div>
			</div>
			<!-- END Header Loader -->
		</header>
		<!-- END Header -->

		<!-- Main Container -->
		<main id="main-container">
			<!-- Hero -->
			<!-- <div class="bg-body-light">
				<div class="content content-full">
					<div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center py-2">
						<div class="flex-grow-1">
							<h1 class="h3 fw-bold mb-2"><?php echo $judul; ?></h1>
							<h2 class="fs-base lh-base fw-medium text-muted mb-0"><?php echo $keterangan; ?></h2>
						</div>

						<?php if ($breadcrumb) { ?>
							<nav class="flex-shrink-0 mt-3 mt-sm-0 ms-sm-3" aria-label="breadcrumb">
								<ol class="breadcrumb breadcrumb-alt">
									<?php foreach (explode('|', $breadcrumb) as $bc) { ?>
										<li class="breadcrumb-item">
											<?php echo $bc; ?>
										</li>
									<?php } ?>
								</ol>
							</nav>
						<?php } ?>
					</div>
				</div>
			</div> -->
			<!-- END Hero -->

			<!-- Page Content -->
			<?php $this->load->view($view); ?>
			<!-- END Page Content -->
		</main>
		<!-- END Main Container -->

		<!-- Footer -->
		<!-- <footer id="page-footer" class="bg-body-light">
			<div class="content py-3">
				<div class="row fs-sm">
					<div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
						Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
					</div>
					<div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
						<a class="fw-semibold" href="https://1.envato.market/AVD6j" target="_blank">OneUI 5.1</a> &copy; <span data-toggle="year-copy"></span>
					</div>
				</div>
			</div>
		</footer> -->
		<!-- END Footer -->
	</div>
	<!-- END Page Container -->

	<!--
        OneUI JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->

	<script src="<?php echo base_url('assets/backend'); ?>/js/oneui.app.min.js"></script>
	<script src="<?php echo base_url('assets/backend'); ?>/js/lib/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/backend'); ?>/js/plugins/select2/js/select2.full.min.js"></script>
	<script src="<?php echo base_url('assets/backend'); ?>/js/plugins/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- Page JS Plugins -->
	<script src="<?php echo base_url('assets/backend'); ?>/js/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url('assets/backend'); ?>/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
	<script src="<?php echo base_url('assets/backend'); ?>/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url('assets/backend'); ?>/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
	<script src="<?php echo base_url('assets/backend'); ?>/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
	<script src="<?php echo base_url('assets/backend'); ?>/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
	<script src="<?php echo base_url('assets/backend'); ?>/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
	<script src="<?php echo base_url('assets/backend'); ?>/js/plugins/datatables-buttons/buttons.print.min.js"></script>
	<script src="<?php echo base_url('assets/backend'); ?>/js/plugins/datatables-buttons/buttons.html5.min.js"></script>

	<!-- Page JS Code -->
	<script src="<?php echo base_url('assets/backend'); ?>/js/pages/be_tables_datatables.min.js"></script>


	<script>
		$(document).ready(function() {
			$('.select2').select2();
		});
	</script>

	<?php echo $this->session->flashdata('notifikasi'); ?>
</body>

</html>