<style>
	#active {
		color: orange;
	}
</style>
<!-- header -->
<div class="top-header-area" id="sticker">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 text-center">
				<div class="main-menu-wrap">
					<!-- logo -->
					<div class="site-logo">
						<a href="home.php">
							<img src="../assets/img/logo.png" alt="">
						</a>
					</div>
					<!-- logo -->
					<!-- menu start -->
					<nav class="main-menu">
						<ul>
							<li class="nav-item"> <a class="nav-link active" href="index.php">HOME <span class="sr-only">(current)</span></a> </li>
							<li class="nav-item"> <a class="nav-link active" href="restaurants.php">SHOP<span class="sr-only"></span></a> </li>
							<li class="nav-item"> <a class="nav-link active" href="news.php">NEWS<span class="sr-only"></span></a> </li>
							<li class="nav-item"> <a class="nav-link active" href="restaurants.php">CONTACT<span class="sr-only"></span></a> </li>
							<?php
							if (empty($_SESSION["user_id"])) // if user is not login
							{
								echo '
									<li class="nav-item"><a href="login.php" class="nav-link active">LOGIN</a></li>
									<li class="nav-item"><a href="registration.php" class="nav-link active">REGISTER</a></li>';
							} else {
								echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">CART</a> </li>';
								echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">LOGOUT</a> </li>';
							}
							?>
						</ul>
					</nav>
					<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
					<div class="mobile-menu"></div>
					<!-- menu end -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end header -->