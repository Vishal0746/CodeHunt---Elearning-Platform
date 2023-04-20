<?php 
	 session_start();
	 $username=$_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>CodeHunt</title>
	<link rel="shortcut icon" type="text/css" href="../img/logo.png">
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="mynotes.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">

body::-webkit-scrollbar{
	width: 0 ;
	height: 0;
	overflow-x:hidden;
	overflow-y:hidden;
}

body{
	background-image:url("../5ARz.gif") ;
	background-color: #333;
	color : White;
	background-size: cover;
	
}
		
.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}

.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}



.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}

html
	{
		scroll-behavior: smooth;
	}

	</style>



</head>
<body>


			<!---Navigation Starts	----->

	
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;margin-top: 10px;" id="myhead">CodeHunt</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="/project/index.php">Home</a></li>
					<li> <a href="index.php#myservice_section">Our Service</a></li>
					<li> <a href="index.php#work">Works</a></li>
					<li> <a href="index.php#team_Section">Team</a></li>
					<li> <a href="#footer">About</a></li>
					<li> <a href="logout.php">LogOut</a></li>
					<li> <a href="" id="our-location" class="btn-success" ><?php echo $_SESSION['username']; ?></a></li>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>

<div class="container-fluid  div1">
		
	</div>



 			<!---programming languages Section Start	----->
<br><br><br><br><br>
 			<section class="latest-news-area" id="latest">
 				<div class="container">
 					<div class="row">
 						<div class="col-xs-12">
 							<div class="section-title text-center">
 								<h2 style= "color:white"><b style=" text-transform: uppercase"><?php  echo $username;  ?>'s</b><b> Notes</b></h2>
 								<div class="sub-heading" style= "color:white">
 									Following are the available Notes <br>
 									Created by you
 								</div>
 							</div>
 						</div>
 					</div>
<br>

 					

<?php


			   // session_start();

			$con=mysqli_connect('localhost','root');

			mysqli_select_db($con,'projectdatabase');

			$q="select * from programming_languages";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {

			?>

			<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 25px;">
 								<div class="latest-news-wrap" style="border:3px black solid;">
 									<div class="news-img">
 										<img src=<?php echo $res['language_image']; ?> class="img-responsive">
 										<div class="deat">
 											<span><?php echo $res['language_name']; ?></span>
 										</div>
 									</div>

 									<div class="news-content" style="border:3px white solid; color:white;background-color:#AAAAAA;">
 										<p>
 											<?php echo $res['language_description']; ?>

 										</p><br><br>
										 <span><?php if( $res['language_name']=="JAVA" )
										 {
										  echo '<a href="notes_main_java.php">Notes</a>';
										 }
										 ?>
										 </span>
										 <span><?php if( $res['language_name']=="PYTHON")
										 {
										  echo '<a href="notes_main_python.php">Notes</a>';
										 }
										 ?>
										 </span>
										 <span><?php if( $res['language_name']=="OOP")
										 {
										  echo '<a href="programming/java/mainquiz1.php">Notes</a>';
										 }
										 ?>
										 </span>
										 <span><?php if( $res['language_name']=="C")
										 {
										  echo '<a href="programming/java/mainquiz1.php">Notes</a>';
										 }
										 ?>
										 </span>
										 </span>
										 <span><?php if( $res['language_name']=="JSCRIPT")
										 {
										  echo '<a href="programming/java/mainquiz1.php">Notes</a>';
										 }
										 ?>
										 </span>
										 </span>
										 <span><?php if( $res['language_name']=="ANDROID")
										 {
										  echo '<a href="programming/java/mainquiz1.php">Notes</a>';
										 }
										 ?>
										 </span>
 									</div>
 								</div>
 							</div>

<?php } ?>



 				</div>
 				
 			</section>


 			<!---programming languages Section ends	----->


 			<!---footer Section Start	----->

<br><br><br><br>
		
</body>
</html>

<?php
include('../admin/includes/footer.php');
?>