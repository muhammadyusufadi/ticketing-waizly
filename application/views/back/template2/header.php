<!--**********************************
            Nav header start
        ***********************************-->
<div class="nav-header">
	<div class="brand-logo">
		<a href="">
			<b class="logo-abbr"><img src="<?php base_url() ?>../../assets/template/images/logo.png" alt=""> </b>
			<span class="logo-compact"><img src="<?php base_url() ?>../../assets/template/./images/logo-compact.png" alt=""></span>
			<span class="brand-title">
				<img src="<?php base_url() ?>../../assets/template/images/logo-text.png" alt="">
			</span>
		</a>
	</div>
</div>
<!--**********************************
            Nav header end
        ***********************************-->

<!--**********************************
            Header start
        ***********************************-->
<div class="header">
	<div class="header-content clearfix">

		<div class="nav-control">
			<div class="hamburger">
				<span class="toggle-icon"><i class="icon-menu"></i></span>
			</div>
		</div>

		<div class="header-right">
			<ul class="clearfix">

				<li class="icons dropdown">
					<?= $this->session->username; ?>
					<div class="user-img c-pointer position-relative" data-toggle="dropdown">
						<span class="activity active"></span>
						<img src="<?php base_url() ?>../../assets/template/images/user/1.png" height="40" width="40" alt="">
					</div>
					<div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
						<div class="dropdown-content-body">
							<ul>
								<li>
									<a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
								</li>

								<hr class="my-2">
								<li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
							</ul>


						</div>
					</div>
				</li>
			</ul>


		</div>
	</div>
</div>
<!--**********************************



            Header end ti-comment-alt











































        ***********************************-->