<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
   <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   
	<title>@YourService</title>
	
</head>
<body>

 <!------header------------->
<?php include('templates/header.php') ?>

<!------------header end-------------->

<main class="content">
  

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">

    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">

    <div class="carousel-item active">

      <img  src="assets/h.jpg" alt="First slide">
        <div class="carousel-caption ">
       <a href="tel:9113175436"><div class="btn" id="call"><span class="fa fa-phone"></span>

        CALL
       </div></a>
       <a href="#ser"><div class="btn" id="book">
        BOOK
       </div></a>
  </div>
    </div>
    <div class="carousel-item">
      <img  src="assets/new.jpg" alt="Second slide">
       <div class="carousel-caption">
       <a href="tel:9113175436"><div class="btn" id="call"><span class="fa fa-phone"></span>

        CALL
       </div></a>
       <a href="#ser"><div class="btn" id="book">
        BOOK
       </div></a>
  </div>
    </div>
    <div class="carousel-item">
      <img  src="assets/i.jpg" alt="Third slide">
       <div class="carousel-caption">
       <a href="tel:9113175436"><div class="btn" id="call"><span class="fa fa-phone"></span>

        CALL
       </div></a>
       <a href="#ser"><div class="btn" id="book">
        BOOK
       </div></a>
  </div>

    </div>

  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  

	<div class="xop-section">
  <ul class="xop-grid">
    
    <li>
      <div class="xop-box xop-img-2">
        <a href="#">
        </a>
      </div>
    </li>
    <li>
      <div class="xop-box xop-img-3">
        <a href="#">
        </a>
      </div>
    </li>
    
  </ul>
</div>





<!-----------product------------------>
<?php include('templates/product.php') ?>
<!---------------product end---------->

  <div class="what">
    <p><i class="fa fa-whatsapp" aria-hidden="true"></i> 9113175436</p>


  </div>
  <div class="space">
  </div>
  <section id="help">
<div class="container text-center wow animated zoomIn" data-wow-delay="0.100ms">
<div class="row section-title ">
<div class="col-sm-12" style="margin-top: 70px;">
<h2>HOW TO GET HELP FROM US.</h2>
<hr class="title-border">
</div>
<div class="row marketing">
<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 ">
<i class="fa fa-mobile fa-5x"></i>
<h4 style="color: rgba(168,168,168);">HIRE US.</h4>
<p>Let's start by requesting service! Book us on our website or call us.</p>
</div>
<div class=" col-md-4  col-lg-4 col-sm-12 col-xs-12">
<i class="fa fa-handshake-o fa-5x"></i>
<h4 style="color:rgba(168,168,168);">WE'LL HANDLE IT FROM HERE</h4>
<p>We'll handle it from here! Have us come out and we will take care of the rest. Be it installing, repairing, finishing your project, or making your home smarter.</p>
</div>
<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 ">
<i class="fa fa-thumbs-o-up fa-5x"></i>
<h4 style="color: rgba(168,168,168);">LIKE US! SPREAD THE WORD!</h4>
<p>Like us? Well spread the word! Let your friends' neighbors and more importantly us how well things got done. Or follow us on our social medias for scoop on the latest gadgets, elegant appliances, funnies, and pictures of us...doing</br> things.</p>
</div>
</div>
</div>
</section>


</main>

<!------footer------------------------>
<?php include('templates/footer.php') ?>
<!------------footer-end------------>

<!--------------popusp--------------->
<?php include('templates/popup1.php') ?>


	<!-- jQuery first, then Popper.js, then Bootstrap JS. -->
    <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/particles.js"></script>
     <script src="js/app.js"></script>

</body>
</html>