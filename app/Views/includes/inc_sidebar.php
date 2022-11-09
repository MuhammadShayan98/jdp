<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

	<!-- Sidebar mobile toggler -->
	<div class="sidebar-mobile-toggler text-center">
		<a href="#" class="sidebar-mobile-main-toggle">
			<i class="icon-arrow-left8"></i>
		</a>
		Navigation
		<a href="#" class="sidebar-mobile-expand">
			<i class="icon-screen-full"></i>
			<i class="icon-screen-normal"></i>
		</a>
	</div>
	<!-- /sidebar mobile toggler -->


	<!-- Sidebar content -->
	<div class="sidebar-content">

		<!-- User menu -->
		<div class="sidebar-user">
			<div class="card-body">
				<div class="media">
					<div class="mr-3">
						<a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
					</div>

					<div class="media-body">
						<div class="media-title font-weight-semibold">Victoria Baker</div>
						<div class="font-size-xs opacity-50">
							<i class="icon-pin font-size-sm"></i> &nbsp;Santa Ana, CA
						</div>
					</div>

					<div class="ml-3 align-self-center">
						<a href="#" class="text-white"><i class="icon-cog3"></i></a>
					</div>
				</div>
			</div>
		</div>
		<!-- /user menu -->


		<!-- Main navigation -->
		<div class="card card-sidebar-mobile">
			<ul class="nav nav-sidebar" data-nav-type="accordion">

				<!-- Main -->
				<li class="nav-item-header">
					<div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i>
				</li>
				<?php $session = session();
				if($session->get('role_name')=="admin") {?>
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Admin</span></a>

					<ul class="nav nav-group-sub" data-submenu-title="Layouts">
						<li class="nav-item"><a href="" class="nav-link">Dashboard</a></li>
						<li class="nav-item"><a href="" class="nav-link">Indexing agency</a></li>
						<li class="nav-item"><a href="" class="nav-link">Indexing Database</a></li>
					</ul>
				</li>
				<?php }?>
				<?php 
				if($session->get('role_name')=="compliance manager") {?>
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-copy"></i> <span>Compliance Manager</span></a>

					<ul class="nav nav-group-sub" data-submenu-title="Layouts">
						<li class="nav-item"><a href="" class="nav-link">Dashboard</a></li>
						<li class="nav-item"><a href="" class="nav-link">Indexing agency</a></li>
						<li class="nav-item"><a href="" class="nav-link">Indexing Database</a></li>
					</ul>
				</li>
				<?php }?>


				<!-- <li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>Themes</span></a>

					<ul class="nav nav-group-sub" data-submenu-title="Themes">
						<li class="nav-item"><a href="" class="nav-link active">Default</a></li>
						<li class="nav-item"><a href="" class="nav-link">Material</a></li>
						<li class="nav-item"><a href="" class="nav-link disabled">Dark <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
						<li class="nav-item"><a href="" class="nav-link disabled">Clean <span class="badge bg-transparent align-self-center ml-auto">Coming soon</span></a></li>
					</ul>
				</li>
				<li class="nav-item nav-item-submenu">
					<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Starter kit</span></a>

					<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
						<li class="nav-item"><a href="l" class="nav-link">Horizontal navigation</a></li>
						<li class="nav-item"><a href="" class="nav-link">No sidebar</a></li>
						<li class="nav-item"><a href="" class="nav-link">1 sidebar</a></li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">2 sidebars</a>
							<ul class="nav nav-group-sub">
								<li class="nav-item"><a href="" class="nav-link">Secondary sidebar</a></li>
								<li class="nav-item"><a href="" class="nav-link">Right sidebar</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">3 sidebars</a>
							<ul class="nav nav-group-sub">
								<li class="nav-item"><a href="" class="nav-link">Right sidebar hidden</a></li>
								<li class="nav-item"><a href="" class="nav-link">Right sidebar visible</a></li>
							</ul>
						</li>
						<li class="nav-item nav-item-submenu">
							<a href="#" class="nav-link">Content sidebars</a>
							<ul class="nav nav-group-sub">
								<li class="nav-item"><a href="" class="nav-link">Left sidebar</a></li>
								<li class="nav-item"><a href="" class="nav-link">Right sidebar</a></li>
							</ul>
						</li>
						<li class="nav-item"><a href="../seed/layout_boxed.html" class="nav-link">Boxed layout</a></li>
						<li class="nav-item-divider"></li>
						<li class="nav-item"><a href="../seed/navbar_fixed_main.html" class="nav-link">Fixed main navbar</a></li>
						<li class="nav-item"><a href="../seed/navbar_fixed_secondary.html" class="nav-link">Fixed secondary navbar</a></li>
						<li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
						<li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link">Fixed layout</a></li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="changelog.html" class="nav-link">
						<i class="icon-list-unordered"></i>
						<span>Changelog</span>
						<span class="badge bg-blue-400 align-self-center ml-auto">2.0</span>
					</a>
				</li>
				<li class="nav-item"><a href="../../../RTL/default/full/index.html" class="nav-link"><i class="icon-width"></i> <span>RTL version</span></a></li> -->
				<!-- /main -->


				<!-- /page kits -->

			</ul>
		</div>
		<!-- /main navigation -->

	</div>
	<!-- /sidebar content -->

</div>