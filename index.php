<?php include 'includes/book.php'; ?>
<?php 
// Reduce the quantity of The Hunger Games to 0
while ($hungerGames->quantity > 0) {
    $hungerGames->buy();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Lab 9: The Bookworm Store</title>
		<link rel="stylesheet" href="css/bookworm-style.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>
		<header>
			<h1>THE BOOKWORM STORE</h1>
			<nav>
				<a href="index.php">HOME</a>
			</nav>
    	</header>

    	<section>
      		<div>
		        <h2>The BookWorm Store</h2>
		        <h4>I'm not a <span class="emphasized">bookworm</span>, I'm an <span class="emphasized">escape artist</span>.</h4>
  			</div>

  			<h4 class="decorated"><span><span class="emphasized">The Hunger Games</span></span></h4>

	  		<div id="content">
	  			<div class="row">

	  				<div class="column">
	  					<img src="images/hunger-games.jpeg" style="width:60%">
	  					<h5><?php echo $hungerGames->title; ?></h5>
	  					<h5>by <?php echo $hungerGames->author; ?></h5>
						<?php echo $hungerGames->showRatingStars(); ?>
	  					<h5><span class="emphasized"><?php echo $hungerGames->checkInStock(); ?></span></h5>
                        <h5>$<?php echo $hungerGames->price; ?></h5>
	  				</div>

	  				<div class="column">
	  					<img src="images/catching-fire.jpeg" style="width:60%">
	  					<h5><?php echo $catchingFire->title; ?></h5>
	  					<h5>by <?php echo $catchingFire->author; ?></h5>
					    <?php echo $catchingFire->showRatingStars(); ?>
	  					<h5><span class="emphasized"><?php echo $catchingFire->checkInStock(); ?></span></h5>
						<h5>$<?php echo $catchingFire->price; ?></h5>
	  				</div>

	  				<div class="column">
	  					<img src="images/mockingjay.jpeg" style="width:60%">
	  					<h5><?php echo $mockingjay->title; ?></h5>
	  					<h5>by <?php echo $mockingjay->author; ?></h5>
						<?php echo $mockingjay->showRatingStars(); ?>
	  					<h5><span class="emphasized"><?php echo $mockingjay->checkInStock(); ?></span></h5>
						<h5>$<?php echo $mockingjay->price; ?></h5>
	  				</div>
				</div>
			</div>
    	</section>
	</body>
</html>