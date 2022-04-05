<?php
include "config.php";
if(isset($_REQUEST['id'])){
$statement = $pdo->prepare("SELECT * FROM dproperties WHERE id=?");
$statement->execute(array($_REQUEST['id']));
$result = $statement->fetch(PDO::FETCH_ASSOC);
echo $result['Property_Ref_No'];

?>


<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title Tag  -->
		<title>Bizwheel - Multipurpose Business & Digital Agency Html5 Template</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="img/favicon.png">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
		
		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/cubeportfolio.min.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="css/magnific-popup.min.css">
		<link rel="stylesheet" href="css/owl-carousel.min.css">
		<link rel="stylesheet" href="css/slicknav.min.css">

		<!-- Bizwheel Stylesheet -->  
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/responsive.css">
		
		
	</head>
	<body id="bg">
	
		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout"> 
		
		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->
	
		<!-- Header -->
		<header class="header">
			
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo">
												<a href="index.html">
													<img src="img/logo.png" alt="#">
												</a>
											</div>
										</div>								
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">	
													<div class="nav-inner">	
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="">Home</a></li>
																<li><a href="">Contact Us</a></li>
																<li><a href="">العربية</a></li>
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				
		</header>
		
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="mail-title">
						<h3><?php echo $result['Property_Title']; ?></h3>
					</div>
					<div class="hero-slider style1">

						<div class="home-slider">
							<?php
								$statement = $pdo->prepare("SELECT * FROM dproperties_images WHERE Property_Ref_No=?");
								$statement->execute(array($result['Property_Ref_No']));
								$total = $statement->rowCount();
								$result1 = $statement->fetchAll(PDO::FETCH_ASSOC);
								foreach($result1 as $resimg)
								{
								?>
								<div class="single-slider">
									<img src="<?php echo $resimg['value'] ?>" alt="">
								</div>

								<?php	
								}
							?>
						</div>
				   </div>
				</div>
				<div class="col-md-4">
					<div class="mail-title text-right">
						<button class="btn btn-primary">GENERATE PDF</button>
					</div>
					<div class="single-feature text-center">
						<img src="img/dlogo.png">
						<p>Noor Al Fajr Real Estate Brokerage Agent: <?php echo $result['Listing_Agent']; ?></p>
						<table class="table table-sm">
						  <tbody>
						    <tr class="table-active">
						       <th scope="row">Email:</th>
						      <td>><?php echo $result['Listing_Agent_Email']; ?></td>
						    </tr>
						    <tr class="table-primary">
						      <th scope="row">Primary:</th>
						      <td><?php echo $result['Listing_Agent_Phone']; ?></td>
						    </tr>
						    <tr class="table-active">
						       <th scope="row">Work:</th>
						      <td>+971-4-5466113</td>
						    </tr>
						    <tr class="table-primary">
						      <th scope="row">Address:</th>
						      <td>Office 36, Ground floor, Emarat Atrium Building, Sheikh Zayed Road</td>
						    </tr>
						  </tbody>
						</table>
						<div class="button">
							<a href="service-single.html" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- Features Area -->
		<section class="features-area section-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="single-feature">
									<table class="table table-sm">
									  <tbody>
									    <tr class="table-active">
									       <th scope="row">Area</th>
									       <td><?php echo $result['Property_Size']; ?>
									       	<?php echo $result['Property_Size_Unit']; ?>
									       </td>
									    </tr>
									    <tr class="table-primary">
									      <th scope="row">Beds</th>
									      <td><?php echo $result['Bedrooms']; ?></td>
									    </tr>
									    <tr class="table-active">
									       <th scope="row">Baths</th>
									      <td><?php echo $result['Bathroom']; ?></td>
									    </tr>
									    <tr class="table-primary">
									      <th scope="row">Parking</th>
									      <td>2</td>
									    </tr>
									  </tbody>
									</table>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="single-feature">
									<table class="table table-sm">
									  <tbody>
									    <tr class="table-active">
									       <th scope="row">Ref. No.</th>
									      <td><?php echo $result['Property_Ref_No'] ?></td>
									    </tr>
									    <tr class="table-primary">
									      <th scope="row">Permit No</th>
									      <td><?php echo $result['Permit_Number'] ?></td>
									    </tr>
									    <tr class="table-active">
									       <th scope="row">Price</th>
									      <td><?php echo $result['Price'] ?></td>
									    </tr>
									    <tr class="table-primary">
									      <th scope="row">Location</th>
									      <td><?php echo $result['Tower_Name'] ?> , <?php echo $result['City'] ?></td>
									    </tr>
									  </tbody>
									</table>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-feature text-left">
									<h4><a href="">DESCRIPTION</a></h4>
									<p><?php echo $result['Property_Description'] ?></p>
									<div class="button">
										<a href="service-single.html" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="single-feature text-left">
									<h4><a href="">PROPERTY FEATURES</a></h4>
									<table class="table table-sm">
									  <tbody>
									    <tr class="table-active">
									      <th scope="row">Building</th>
									      <td>Balcony or Terrace (Yes)</td>
									      <td>Lobby in Building (Yes)</td>
									      <td>Prayer Room (Yes)</td>
									      <td>Reception/Waiting Room (Yes)</td>
									    </tr>
									    <tr class="table-primary">
									      <th scope="row">Recreation and Family</th>
									      <td>Barbeque Area (Yes)</td>
									      <td>Kids Play Area (Yes)</td>
									      <td>Lawn or Garden (Yes)</td>
									      <td></td>
									    </tr>
									    <tr class="table-active">
									      <th scope="row">Features</th>
									      <td>Centrally Air-Conditioned (Yes)</br>Parking Spaces (2)</td>
									      <td>Central Heating (Yes) </br>Storage Areas (Yes)</td>
									      <td>Electricity Backup (Yes)</br> Study Room (Yes)</td>
									      <td>Furnished (Yes)</td>
									    </tr>
									    <tr class="table-primary">
									      <th scope="row">Cleaning and Maintenance</th>
									      <td>Waste Disposal (Yes)</td>
									      <td>Maintenance Staff (Yes)</td>
									      <td></td>
									      <td></td>
									    </tr>
									    <tr class="table-active">
									      <th scope="row">Health and Fitness</th>
									      <td>First Aid Medical Center (Yes)</br>Steam Room (Yes)</td>
									      <td>Gym or Health Club (Yes)</br>Swimming Pool (Yes)</td>
									      <td>Jacuzzi (Yes)</br> Facilities for Disabled (Yes)</td>
									      <td>Sauna (Yes)</td>
									    </tr>
									    <tr class="table-primary">
									      <th scope="row">Cleaning and Maintenance</th>
									      <td>Waste Disposal (Yes)</td>
									      <td>Maintenance Staff (Yes)</td>
									      <td></td>
									      <td></td>
									    </tr>
									  </tbody>
									</table>
									<div class="button">
										<a href="service-single.html" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="single-feature active">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7227.639718886128!2d55.34814537240964!3d25.074094053597754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f65807c0f8d1d%3A0xe3a61893b91c1618!2sLa%20Violetta!5e0!3m2!1sen!2sbd!4v1648283898396!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
					
					
				</div>
			</div>
		</section>
		<!--/ End Features Area -->
		
	
		
		<!-- Footer -->
		<footer class="footer" style="background-image:url('img/map.png')">
			
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copyright-content">
								<!-- Copyright Text -->
								<p>© Copyright <a href="#">Bizwheel</a>. Design &amp; Development By <a target="_blank" href="#">ThemeLamp</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		
		<!-- Jquery JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Modernizr JS -->
		<script src="js/modernizr.min.js"></script>
		<!-- ScrollUp JS -->
		<script src="js/scrollup.js"></script>
		<!-- FacnyBox JS -->
		<script src="js/jquery-fancybox.min.js"></script>
		<!-- Cube Portfolio JS -->
		<script src="js/cubeportfolio.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- Slick Slider JS -->
		<script src="js/owl-carousel.min.js"></script>
		<!-- Easing JS -->
		<script src="js/easing.js"></script>
		<!-- Magnipic Popup JS -->
		<script src="js/magnific-popup.min.js"></script>
		<!-- Active JS -->
		<script src="js/active.js"></script>
	</body>
</html>

<?php
}
?>