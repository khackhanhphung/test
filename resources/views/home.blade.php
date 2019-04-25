<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Blog 1</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>

	<div class="top-header">
		<div class="container-fluid">
			<div class="row">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				    <a class="navbar-brand" href="#">Blog 1</a>
				    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				        <span class="navbar-toggler-icon"></span>
				    </button>
				    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				        <div class="navbar-nav">
				            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
				            <a class="nav-item nav-link" href="#">Features</a>
				            <a class="nav-item nav-link" href="#">Pricing</a>
				            <a class="nav-item nav-link disabled" href="#">Disabled</a>
				        </div>
				    </div>
				</nav>
			</div>
		</div>
	</div>

	<div class="container main-content">
		<div class="row">
			<div id="features-post" class="features-post carousel">
				<ol class="carousel-indicators">
				    <li data-target="#features-post" data-slide-to="0" class="active"></li>
				    <li data-target="#features-post" data-slide-to="1"></li>
				    <li data-target="#features-post" data-slide-to="2"></li>
				    <li data-target="#features-post" data-slide-to="3"></li>
				</ol>
				<div class="carousel-item active">
				    <img src="{{ asset('images/5.jpg') }}" alt="">
				    <div class="carousel-caption d-none d-md-block">
				        <h5>test</h5>
				        <p>test</p>
				    </div>
				</div>
				<div class="carousel-item">
				    <img src="{{ asset('images/6.jpg') }}" alt="">
				    <div class="carousel-caption d-none d-md-block">
				        <h5>test</h5>
				        <p>test</p>
				    </div>
				</div>
				<div class="carousel-item">
				    <img src="{{ asset('images/7.jpg') }}" alt="">
				    <div class="carousel-caption d-none d-md-block">
				        <h5>test</h5>
				        <p>test</p>
				    </div>
				</div>
				<div class="carousel-item">
				    <img src="{{ asset('images/8.jpg') }}" alt="">
				    <div class="carousel-caption d-none d-md-block">
				        <h5>test</h5>
				        <p>test</p>
				    </div>
				</div>
				<a class="carousel-control-prev" href="#features-post" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#features-post" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="row latest-blog mb-4 mt-5">
			<h3 class="group-title d-block w-100">Bài Đăng Nổi Bật</h3>
	        <div class="col-md-6">
	        	<div class="card flex-md-row mb-4 box-shadow h-md-250">
	            	<div class="card-body d-flex flex-column align-items-start">
	              		<strong class="d-inline-block mb-2 text-primary">World</strong>
	              		<h3 class="mb-0">
	                		<a class="text-dark" href="#">Featured post</a>
	              		</h3>
	              		<div class="mb-1 text-muted">Nov 12</div>
	              		<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
	              		<a href="#">Continue reading</a>
	            	</div>
	            	<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="{{ asset('images/blogs/thumbnail/3.jpg') }}" data-holder-rendered="true">
	          </div>
	        </div>
	        <div class="col-md-6">
	        	<div class="card flex-md-row mb-4 box-shadow h-md-250">
	            	<div class="card-body d-flex flex-column align-items-start">
	              		<strong class="d-inline-block mb-2 text-primary">World</strong>
	              		<h3 class="mb-0">
	                		<a class="text-dark" href="#">Featured post</a>
	              		</h3>
	              		<div class="mb-1 text-muted">Nov 12</div>
	              		<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
	              		<a href="#">Continue reading</a>
	            	</div>
	            	<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="{{ asset('images/blogs/thumbnail/4.jpg') }}" data-holder-rendered="true">
	          </div>
	        </div>
		</div>

		<div class="row other-blogs mb-4 mt-5">
			<h3 class="group-title d-block w-100">Bài Đăng Khác</h3>
	        <div class="col-md-6">
	        	<div class="card flex-md-row mb-4 box-shadow h-md-250">
	            	<div class="card-body d-flex flex-column align-items-start">
	              		<strong class="d-inline-block mb-2 text-primary">World</strong>
	              		<h3 class="mb-0">
	                		<a class="text-dark" href="#">Featured post</a>
	              		</h3>
	              		<div class="mb-1 text-muted">Nov 12</div>
	              		<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
	              		<a href="#">Continue reading</a>
	            	</div>
	            	<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="{{ asset('images/blogs/thumbnail/3.jpg') }}" data-holder-rendered="true">
	          </div>
	        </div>
	        <div class="col-md-6">
	        	<div class="card flex-md-row mb-4 box-shadow h-md-250">
	            	<div class="card-body d-flex flex-column align-items-start">
	              		<strong class="d-inline-block mb-2 text-primary">World</strong>
	              		<h3 class="mb-0">
	                		<a class="text-dark" href="#">Featured post</a>
	              		</h3>
	              		<div class="mb-1 text-muted">Nov 12</div>
	              		<p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
	              		<a href="#">Continue reading</a>
	            	</div>
	            	<img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="{{ asset('images/blogs/thumbnail/4.jpg') }}" data-holder-rendered="true">
	          </div>
	        </div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<script type="text/javascript">
		$('#features-post').carousel()
	</script>
</body>
</html>