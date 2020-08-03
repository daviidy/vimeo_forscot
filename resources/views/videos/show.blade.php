<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vidéos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <style type="text/css">
  	body{
  		background-color: #e5eaee;
  		font-family: 'Montserrat', sans-serif;

  	}
  	.video-detail{
  		background-color: #fff; 
  		padding: 15px 55px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  	}

  	.video-detail h3{
  		padding: 35px 0; 
  		text-transform: uppercase;
  	}

  	.video-container iframe{
  		width: 100%; 
  		height: 500px;
  	}

  	.video-description p{
  		padding: 35px 0;
  	}
  	
  	@media only screen and (max-width: 600px) {
		.video-container iframe{
	  		width: 100%; 
	  		height: 100%;
	  	}
	  	.video-detail {
		    background-color: #fff;
		    padding: 15px 10px;
	  	}
	  	.video-description p{
  			padding: 25px 15px;
  		}
	}
  </style>
</head>
<body>

<div class="container">
  <div class="row">
  	<div class="col-md-1"></div>
    <div class="col-md-10 video-detail">
    	<div>
    		<h3>Vidéo title</h3>
    	</div>
    	<div class="video-container">
    		<iframe class="responsive-iframe" width="560" height="315" src="https://www.youtube.com/embed/COhvzD7_kbU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    	</div>
    	<div class="video-description">
    		<p>
    			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    		</p>
    	</div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>

</body>
</html>
