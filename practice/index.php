<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	 <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
<!--<style>
    	@import url("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
        
	</style>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.js"></script>-->
</head>
<body>
    
     <section id="cover">
        <div id="cover-caption">
            <div id="container">
                <div class="col-sm-10 col-offset-1">
                   <h1 class="display-1">Welcome to Bade palace</h1>
                    <p>just like other plae bade emerites is one of the best and has alot of historys that cant be told in a nutshell</p>
                        <form action="login" class="form-inline">
                        <?php 
                        $name=$_GET['name'];
                        if (isset($_post['sub']))
                        {
                        	if($name=="abu")
                        	{
                        		print("hello");
                        	}
                        }
                        ?>
                            <div class="form-group">
                            <label class="sr-only">Name</label>
                                <input type="text" class="form-control form-control-lg" name='name' placeholder="abubakar">
                            </div>
                            <div class="form-group">
                            <label class="sr-only">Email</label>
                                <input type="text" class="form-control form-control-lg" placeholder="abubakar.saleh@example.com">
                            </div>
                         <button type="submit" name="sub" class="btn btn-success btn-lg">okay, go</button>
                        </form>
                        <br>
                        <a href="#nav-main" class="btn btn-secondary-outline btn-sm" role="button">&darr;</a>
                   
                </div>
            </div>
        </div>
    </section>
        <nav class="navbar navbar-dark bg-inverse navber-full" id="nav-main"><!-- navbar-dark bg-faded-->
         <a class="navbar-brand" href="#">logo</a>
         <ul class="nav navbar-nav block">
             <li class="nav-item active">
                 <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#" >Features</a>
             </li>
             <li class="nav-item">
                 <a href="#" class="nav-link">Pricing</a>
             </li>
             <li class="nav-item">
                 <a href="#" class="nav-link">About</a>
             </li>
         </ul>
         <form class="form-inline pull-xs-right">
             <input class="form-control" type="text" placeholder="search">
             <button class="btn btn success-outline" type="submit">search</button>
         </form>
        </nav>
        <section id="carousel">
        <div id="carousel-home" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/woman-camera.jpg" alt="woman taking photo">
              <div class="carousel-caption">
                  <h3>a woman taking a photo</h3>
                  <p>maybe taking a photo</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/spiderweb.jpg" alt="spiderweb">
              <div class="carousel-caption">
                  <h3>a woman taking a photo</h3>
                  <p>maybe taking a photo</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/hearthand.jpg" alt="hands making heart">
            </div>
            <div class="carousel-caption">
                  <h3>a woman taking a photo</h3>
                  <p>maybe taking a photo</p>
              </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-home" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        </section>
        <div class="card-group">
              <div class="card">
                <img class="card-img-top" src="img/chalkboard.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/working.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/programming.jpg" alt="Card image cap">
                <div class="card-block">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
</body>
</html>