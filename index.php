<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Anton Sementsov - make a website!</title>

	<!-- Bootstrap -->



	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body>
	<div class="container">
		<?php include 'include/header.php'; ?>

		<main>
			<div class="jumbotron">
				<h1>Hello, world!</h1>
				<p>I am Anton and my hobby is to make websites and to learn new web technologies. Currently I am looking for a job as a IT-Project Manager. Here you will find my CV and contact details.</p>
				<p><a class="btn btn-primary btn-lg" href="#" role="button">Read more about Anton</a></p>
			</div>
			<br/><br/>

			<!-- Slider with bootstrap -->

			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/1.jpg" alt="...">
						<div class="carousel-caption">
							...
						</div>
					</div>
					<div class="item">
						<img src="img/2.jpg" alt="...">
						<div class="carousel-caption">
							...
						</div>
					</div>

					<div class="item">
						<img src="img/3.jpg" alt="...">
						<div class="carousel-caption">
							...
						</div>
					</div>



				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>

		</div>

			<!-- end of slider -->





		</main>
		<div class="clearFixShort">

		</div>



		<?php include 'include/footer.php'; ?>
	</div> <!-- End #container -->


</body>
</html>
