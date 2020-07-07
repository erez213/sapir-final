<!-- Erez Aton - 311530539 -->
<!-- Rephael Khanokayev - 312064041 -->

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">

    <title>OnlineStore Admin</title>
  </head>
  <body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		  <a class="navbar-brand" href="index.php">OnlineStore Admin</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				  <li class="nav-item active">
					<a class="nav-link" href="#" data-toggle="modal" data-target="#newModal">Add New Product</a>
				  </li>
			</ul>
		  </div>
		</nav>
	</header>
	
	<div class="alert alert-secondary" role="alert">
		Last time active: <?=date('d/m/Y H:i',$lastActive) ?>
	</div>
	
	<section class="container">
		<div class="jumbotron">
		  <h1 class="display-4">Welcome!</h1>
		  <p class="lead">Here you can manage the inventory of the products for our lovely store. Enjoy!</p>
		  <hr class="my-4">
		  <a class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#newModal">Create Product</a>
		</div>
	</section>