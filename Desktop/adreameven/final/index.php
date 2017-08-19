<?php
$page_title = "User Authentication - Homepage";
include_once 'partials/headers.php';
?>
<html>
<body>
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/grid.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/animate.css">
        <link rel="stylesheet" type="text/css" href="resource/">
          <meta name="msapplication-config" content="/partials/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/love-min.jpg" alt="New York" width="1200" height="700">
          <div class="carousel-caption">
            <h3>New York</h3>
            <p>The atmosphere in New York is lorem ipsum.</p>
          </div>
        </div>

        <div class="item">
          <img src="img/Rives.jpg" alt="Chicago" width="1200" height="700">
          <div class="carousel-caption">
            <h3>Chicago</h3>
            <p>Thank you, Chicago - A night we won't forget.</p>
          </div>
        </div>

        <div class="item">
          <img src="img/pexels.jpeg" alt="Los Angeles" width="1200" height="700">
          <div class="carousel-caption">
            <h3>LA</h3>
            <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
          </div>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

  <section class="container text-center" id="cities">
             <div class="row">
                 <h2>FIND UNIQUE EXPERIENCE IN YOUR CITY</h2>
             </div>
                 <div class="column span-1-of-4 box">
                     <img src="img/lisbon-3.jpg" alt="Lisbon">
                     <h5>New York</h5>

                     <div class="city-feature">
                         <i class="ion-ios-star icon-small"></i>
                         160+ Events
                     </div>
                     <div class="city-feature">
                         <i class="ion-social-twitter icon-small"></i>
                         <a href="#">@adream_NY</a>
                     </div>
                 </div>
              
         <div class="column span-1-of-4 box">
                    <img src="img/san-francisco.jpg" alt="San Francisco">
                    <h5>New Jersey</h5>
                    <div class="city-feature">
                        <i class="ion-ios-person icon-small"></i>
                        370+ Events
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@adream_NJ</a>
                    </div>
                </div>
                <div class="column span-1-of-4 box">
                    <img src="img/berlin.jpg" alt="Berlin">
                    <h5>Delaware</h5>
                
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        110+ Events
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@adream_DW</a>
                    </div>
                </div>
                
                  <div class="column span-1-of-4 box">
                    <img src="img/london.jpg" alt="London">
                    <h5>Philadelphia</h5>
                   
                    <div class="city-feature">
                        <i class="ion-ios-star icon-small"></i>
                        150+ Events
                    </div>
                    <div class="city-feature">
                        <i class="ion-social-twitter icon-small"></i>
                        <a href="#">@adream_philly</a>
                    </div>
                </div>
         </section>
         
         <section class="container-features js--container-features" id="features">
            <div class="row">
                <h2>Top Categories</h2>
            </div>
        
        <section class="container-meals">
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="img/1.jpg" alt="Party"> 
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/2.jpg" alt="Music">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/3.jpg" alt="Networking">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/4.jpg" alt="Art">
                    </figure>
                </li>
            </ul>
            <ul class="meals-showcase clearfix">
                <li>
                    <figure class="meal-photo">
                        <img src="img/5.jpg" alt="classes">
                        
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/6.jpg" alt="Health & Fitness">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/7.jpg" alt="Food & Drinks">
                    </figure>
                </li>
                <li>
                    <figure class="meal-photo">
                        <img src="img/8.jpg" alt="Weddings">
                    </figure>
                </li>
            </ul>
        </section>
    </section>
    
    <div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">POPULAR</h3>
    <p class="text-center">Find your next experience.<br> Remember to book your tickets!</p>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/two.jpg" alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Friday 27 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/two.jpg" alt="New York" width="400" height="300">
          <p><strong>New York</strong></p>
          <p>Saturday 28 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/two.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/two.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/two.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="img/two.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit"  class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit"  class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="about%20us.php">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>


<?php include_once 'partials/footers.php'; ?>
</body>
</html>
