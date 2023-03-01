<!--**********************************
            Sidebar start
        ***********************************-->
<div class="nk-sidebar">
	<div class="nk-nav-scroll">
		<ul class="metismenu" id="menu">
			<!-- <li class="nav-label">Dashboard</li> -->
			<li>
				<a class="" href="<?= base_url('dashboard') ?>" aria-expanded="false">
					<i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
				</a>
			</li>
			<li class="nav-label"><b>DATA MASTER</b></li>
			<li>
				<a class="has-arrow" href="widgets.html" aria-expanded="false">
					<i class="fa fa-users"></i><span class="nav-text">Master Karyawan</span>
					<!-- <i class="fa-solid fa-users-secret"></i> -->
				</a>

				<ul aria-expanded="false">
					<li><a href="<?= base_url('jabatan') ?>">
							<!-- <i class="fa fa-regular fa-circle"></i> -->
							Data Jabatan
						</a></li>
					<li><a href="./layout-blank.html">
							<!-- <i class="fa fa-regular fa-circle"></i> -->
							Data Department
						</a></li>
					<li><a href="./layout-two-column.html">
							<!-- <i class="fa fa-regular fa-circle"></i> -->
							Data Karyawan
						</a></li>
				</ul>
			</li>
			<li>
				<a class="has-arrow" href="widgets.html" aria-expanded="false">
					<i class="fa fa-ticket"></i><span class="nav-text">Master Ticket</span>
					<!-- <i class="fa-solid fa-users-secret"></i> -->
				</a>

				<ul aria-expanded="false">
					<li><a href="./layout-blank.html">
							<!-- <i class="fa-regular fa-circle"></i> -->
							Data Ticket
						</a></li>
				</ul>
			</li>
			<li class="nav-label"><b>LAPORAN TICKET</b></li>
			<li>
				<a class="" href="widgets.html" aria-expanded="false">
					<i class="fa fa-table"></i><span class="nav-text">Laporan</span>
					<!-- <i class="fa-solid fa-users-secret"></i> -->
				</a>
			</li>
			<li class="nav-label"><b>PROFIL SAYA</b></li>
			<li>
				<a class="" href="widgets.html" aria-expanded="false">
					<i class="fa fa-regular fa-user"></i><span class="nav-text">Profil User</span>
					<!-- <i class="fa-solid fa-users-secret"></i> -->
				</a>
			</li>
			<li>
				<a class="" href="widgets.html" aria-expanded="false">
					<!-- <i class="fa-regular fa-power-off"></i> -->
					<i class="fa fa-power-off"></i><span class="nav-text">Logout</span>

				</a>
			</li>
		</ul>
	</div>
</div>
<!--**********************************
            Sidebar end
        ***********************************-->