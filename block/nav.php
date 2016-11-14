	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">EMC Software Systems</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><span>Hệ Thống Phần Mềm EMC</span></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $_SESSION["ten"];?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#" class="profile" data-toggle="modal" data-target="#myProfile" data-id="<?php echo $_SESSION["id_nv"];?>"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Thông tin</a></li>
							<li><a href="ChangePassword.php"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Đổi mật khẩu</a></li>
							<li><a href="block/logout.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Thoát</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>