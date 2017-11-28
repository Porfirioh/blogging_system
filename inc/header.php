<?php include 'config/config.php'; ?>
<?php include 'lib/Database.php'; ?>
<?php include 'helpers/format.php'; ?>

<?Php
	$db=new Database();
	$fm=new format();

 ?>

<!DOCTYPE html>
<html>
<head>

<?php
	if(isset($_GET['pageid'])){
		$pagetitleid=$_GET['pageid'];
		$query="SELECT * form tbl_page where id='$pagetitleid' ";
		$pages=$db->SELECT($query);
		if($pages){
			while($result=$pages->fetch_assoc()){  ?>

			<title><?php echo $result['name'];?> - <?php echo TITLE;?></title>
		
		<?php		} }	} else { ?>

			<title><?php echo "Home"?>-<?php echo TITLE;?></title>

			<?php } ?>



	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
	<meta name="keywords" content="blog,cms blog">
	<meta name="author" content="Delowar">
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>



</head>

<body>
	<div class="headersection templete clear">
		<a href="index.php">
			<div class="logo">
				<img src="images/logo.png" alt="Logo"/>
				<h2>Antohin</h2>
				<p>A Technology Blog</p>
			</div>
		</a>
		<div class="social clear">

      	<div class="icon clear">




		<?php 
		
		$query="SELECT * FROM tbl_social WHERE id='1'";
		$socialmedia=$db->SELECT($query);
		if($socialmedia){
		    while($result=$socialmedia->fetch_assoc()){


		?>


				<a href="<?php echo $result['fb'];?>" target="_blank"><i class="fa fa-facebook"></i></a>

				<a href="<?php echo $result['tw'];?>" target="_blank"><i class="fa fa-twitter"></i></a>

				<a href="<?php echo $result['ln'];?>" target="_blank"><i class="fa fa-linkedin"></i></a>

				<a href="<?php echo $result['gp'];?>" target="_blank"><i class="fa fa-google-plus"></i></a>
<?php } } ?>	



			</div>
			<div class="searchbtn clear">
			<form action="search.php" method="get">
				<input type="text" name="search" placeholder="Search here..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
	</div>





<div class="navsection templete">
	<ul>
		<li><a id="active" href="index.php">Home</a></li>


		<li><a href="about.php">About</a></li>
		<li><a href="contact.php">Contact</a></li>


	</ul>
</div>
