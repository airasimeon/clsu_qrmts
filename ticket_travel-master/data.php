<?php
include "conn.php";
ob_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Green Wheels a Travel Category Flat Bootstrap Responsive Website Template | Bus :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Green Wheels Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="admin/dist/css/skins/_all-skins.min.css">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<!-- top-header -->
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li>
				
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol">Toll Number : 123-4568790</li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.html">Green <span>Wheels</span></a>	
		</div>
		<div class="bus wow fadeInUp animated" data-wow-delay=".5s">
            <a href="index.html" class="buses active">BUSES</a>
            <a href="hotels.html">HOTELS</a>
        </div>
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp; SECURE<br> ONLINE PAYMENTS</div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="about.html">About</a></li>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="apps.html">Apps</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="travels.html">Travels</a></li>
								<li><a href="privacy.html">Privacy Policy</a></li>
								<li><a href="agent.html">Agent Registration</a></li>
								<li><a href="terms.html">Terms of Use</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>
								<div class="clearfix"></div>
						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-btm ---->
<!--- banner-1 ---->

<div class="details">
	<div class="container">

	<div class="container">
		<div class="details-top">
			<div class="col-md-8 details-middle wow fadeInUp animated" data-wow-delay=".5s">
              <?php
              	$kode = $_GET['kode'];
              	$getkuota = $_GET['kuota'];
                    $sql = mysqli_query($conn, "SELECT DISTINCT rute.id,rute.id_pesawat, rute.depart,rute.depart_time,rute.arrived_time, rute.id_kota, rute.id_ktujuan, rute.harga, pesawat.maskapai,pesawat.kuota, asal.kota as dari, tujuan.kota as ke, asal.bandara as ban_dari, tujuan.bandara as ban_ke, costumer.token FROM rute INNER JOIN pesawat on rute.id_pesawat = pesawat.id INNER JOIN costumer on rute.id = costumer.id_rute LEFT JOIN kota as asal on rute.id_kota = asal.id LEFT JOIN kota as tujuan on rute.id_ktujuan = tujuan.id WHERE costumer.token='$kode' ");
                     while($row = mysqli_fetch_assoc($sql)){
                     	$jumlah = $row['harga']*$getkuota;
                     	$kuota = $row['kuota'];
                     ?>
            		<div class="box box-default">
						<div class="box-header with-border">
							<h3 class="box-title"><?php echo $row['dari'] ?>(<?php echo $row['ban_dari'] ?>) <span style="margin-left:8px;margin-right:8px;" class="glyphicon glyphicon-arrow-right"></span> <?php echo $row['ke'] ?>(<?php echo $row['ban_ke'] ?>)</h3>
						</div>
						<p style="margin-left:10px;margin:10px;font-size:16px;"><?php echo date('D, d M Y', strtotime($row['depart'])); ?></p>
						<h4 style="margin-left:10px;"><?php echo $row['maskapai']; ?></h4>
						<p style="margin-left:10px;margin:10px;font-size:16px;"><?php echo $row['depart_time'] ?><span style="margin-left:20px;margin-right:20px;" class="glyphicon glyphicon-arrow-right" ></span><?php echo $row['arrived_time']; ?></p>

					</div>
			</div>
		</div>

		<div class="details-top" >
			<div class="col-md-4 details-middle wow fadeInUp animated" data-wow-delay=".5s">
				<div class="box box-default">
					<div class="box-header with-border">
						<h3 class="box-title">Detail Harga</h3>
					</div>
					<div class="price" style="margin:10px;">
						<div class="harga">Harga <div class="a" style="float:right"><?php echo number_format($row['harga'],2) ?></div></div>
						<div class="penumpang">Jumlah Penumpang <div class="e" style="float:right"><?php echo $getkuota ?></div></div>
					</div>
					<?php
                  	}
                  ?>
	                <div class="box-footer">
	                <div class="bayar">Total Pembayaran <div class="s" style="float:right"><?php echo number_format($jumlah,2) ?></div> </div>
	              	</div>
				</div>
			</div>
		</div>
		<div class="details-top">
			<div class="col-md-8 details-middle wow fadeInUp animated" data-wow-delay=".5s">
              <?php
              	$kode = $_GET['kode'];
              	$getkuota = $_GET['kuota'];
              	$no = 1;
              		$sqll = mysqli_query($conn,"SELECT DISTINCT nama,phone,email FROM costumer WHERE token='$kode'");
              			while($data=mysqli_fetch_assoc($sqll)){
              			?>
              		<div class="box box-default">
              				<div class="box-footer">
							<div class="box-header with-border">
								<h3 class="box-title">Kotak</h3>
							</div>
							</div>
								<h4 style="margin-left:20px;">Nama : <?php echo $data['nama'] ?></h4>
								<h4 style="margin-left:20px;">Telephon :<?php echo $data['phone'] ?></h4>
								<h4 style="margin-left:20px;">Email :<?php echo $data['email'] ?></h4>
								
              		<?php	
              			}

                    $sql = mysqli_query($conn, "SELECT * FROM costumer WHERE token='$kode' ");
                     while($row = mysqli_fetch_assoc($sql)){
                     ?>
                     	<div class="box-footer">
						<div class="box-header with-border">
							<h3 class="box-title"> Penumpang <?php echo $no++ ?></h3>
						</div>
						</div>
						<h4 style="margin-left:20px;">Nama : <?php echo $row['penumpang'] ?></h4>
						<h4 style="margin-left:20px;">Kursi : <?php echo $row['kursi'] ?></h4>
						<?php
						}
					?>
					</div>
					
			</div>
		</div><div class="clearfix"></div>
		<div class="details-top">
			<div class="col-md-8 details-middle wow fadeInUp animated" data-wow-delay=".5s">
			<input type="submit" class="btn btn-primary" value="Lanjut Pemesanan" style="float:right;">
			</div>
		</div>
	</div>
	</div>
</div>
<!--- /bus-midd ---->
<!--- footer-top ---->
<div class="footer-top">
	<div class="container">
		<div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Bus Operators</h3>
				<ul>
					<li><a href="bus.html">New York  Charter </a></li>
					<li><a href="bus.html">Washington Charter</a></li>
					<li><a href="bus.html">Los Angeles Charter</a></li>
					<li><a href="bus.html">Chicago Charter</a></li>
					<li><a href="bus.html">Orlando Charter</a></li>
					<li><a href="bus.html">New Orleans Charter</a></li>
					<li><a href="bus.html">Houston Charter</a></li>
					<li><a href="bus.html">Nashville Charter</a></li>
					<li><a href="bus.html">Charlotte Charter</a></li>
					<li><a href="bus.html">Toronto Charter</a></li>
					<li><a href="bus.html">Washington Charter</a></li>
					<li><a href="bus.html">Los Angeles Charter</a></li>
					<li><a href="bus.html">Chicago Charter</a></li>
					<li><a href="bus.html">Orlando Charter</a></li>
					<li><a href="bus.html">New Orleans Charter</a></li>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
			<h3>Bus Routes</h3>
				<ul>
					<li><a href="travels.html">Alabama-California</a></li>
					<li><a href="travels.html">Alaska-Colorado</a></li>
					<li><a href="travels.html">Arizona-Delaware</a></li>
					<li><a href="travels.html">Arkansas-Florida</a></li>
					<li><a href="travels.html">Kansas-Georgia</a></li>
					<li><a href="travels.html">Iowa-Hawaii</a></li>
					<li><a href="travels.html">Indiana-Illinois</a></li>
					<li><a href="travels.html">Illinois-Florida</a></li>
					<li><a href="travels.html">Idaho-Indiana</a></li>
					<li><a href="travels.html">Hawaii-Iowa</a></li>
					<li><a href="travels.html">Georgia-Kansas</a></li>
					<li><a href="travels.html">Florida-Arkansas</a></li>
					<li><a href="travels.html">Delaware-Arizona</a></li>
					<li><a href="travels.html">Colorado-Alaska</a></li>
					<li><a href="travels.html">California-Alabama</a></li>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-top ---->
<!---copy-right ---->
<div class="copy-right">
	<div class="container">
	
		<div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<ul>
				<li><a class="facebook" href="#"><span>Facebook</span></a></li>
				<li><a class="twitter" href="#"><span>Twitter</span></a></li>
				<li><a class="flickr" href="#"><span>Flickr</span></a></li>
				<li><a class="googleplus" href="#"><span>Google+</span></a></li>
				<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
			</ul>
		</div>
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2016 Green Wheels . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	</div>
</div>
<!--- /copy-right ---->
<!-- sign -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-left">
												<ul>
													<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
													<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
												</ul>
											</div>
											<div class="login-right">
												<form>
													<h3>Create your account </h3>
													<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
													<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
													<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
													<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
													<input type="submit" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
											<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //sign -->
<!-- signin -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
										</ul>
									</div>
									<div class="login-right">
										<form>
											<h3>Signin with your account </h3>
											<input type="text" value="Enter your mobile number or Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#">Forgot password</a></h4>
											<div class="single-bottom">
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" value="SIGNIN">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //signin -->
<!-- write us -->
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="writ">
										<h4>HOW CAN WE HELP YOU</h4>
											<ul>
												<li class="na-me">
													<input class="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
												</li>
												<li class="na-me">
													<input class="Email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
												</li>
												<li class="na-me">
													<input class="number" type="text" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required="">
												</li>
												<li class="na-me">
													<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
														<option value="null">Select Issue</option> 		
														<option value="null">Booking Issues</option>
														<option value="null">Bus Cancellation</option>
														<option value="null">Refund</option>
														<option value="null">Wallet</option>														
													</select>
												</li>
												<li class="na-me">
													<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
														<option value="null">Select Issue</option> 		
														<option value="null">Booking Issues</option>
														<option value="null">Bus Cancellation</option>
														<option value="null">Refund</option>
														<option value="null">Wallet</option>														
													</select>
												</li>
												<li class="descrip">
													<input class="special" type="text" value="Write Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Write Description';}" required="">
												</li>
													<div class="clearfix"></div>
											</ul>
											<div class="sub-bn">
												<form>
													<button class="subbtn">Submit</button>
												</form>
											</div>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //write us -->
</body>
</html>