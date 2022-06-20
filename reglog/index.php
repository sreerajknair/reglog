
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>My Application</title>
  <!-- slider -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <!-- bootstrap 4 cdn -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles  -->
  <link rel="stylesheet" href="css/style.css"  /> 
  <script>
    function newFunction(){
       var test= document.getElementById("p1").innerHTML;
       alert(test)
    
    }
  </script>
</head>
<body>
    <div class="main_area">
      <!-- header section begins -->
        <header class="header_section">
          <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
              <a class="navbar-brand" href="#">
                <span>
                  Astala-vista
                </span>
              </a>
    
              <div class="navbar-collapse" id="">
                <div class="d-none d-lg-flex ml-auto flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav ">
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        <img src="images/login.png" alt="" />
                        <span>Login</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="registration.php">
                        <img src="images/signup.png" alt="" />
                        <span>Student registration</span>
                      </a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 mb-3 mb-lg-0 mr-5">
                    <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                  </form>
                </div>
    
                <div class="custom_menu-btn">
                  <button onclick="openNavigation()">
                    <span class="s-1">
    
                    </span>
                    <span class="s-2">
    
                    </span>
                    <span class="s-3">
    
                    </span>
                  </button>
                </div>
                <div id="myNav" class="overlay">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <div class="overlay-content">
                    <a href="index.html">HOME</a>
                    <a href="index.html">TEAM</a>
                    <a href="index.html">PORTFOLIO</a>
    
                    <a href="index.html">CONTACT US</a>
    
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </header>
        <!-- header section ends -->
        <!-- slider -->
        <section class=" courosel_section ">

          <div id="carousel-begins" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-begins" data-slide-to="0" class="active">01</li>
              <li data-target="#carousel-begins" data-slide-to="1">02</li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-3 offset-md-2">
                    <div class="courosel_detail">
                      <h1>
                        SOFTWARE
                        <span>
                          SOLUTIONS
                        </span>
                      </h1>
                      <p id="p1">
                        We find the best solutions for you, we redesign your home and work places.
                        Discover why over 5,100 home owners trust initiative
                      </p>
                      <div>
                        <button id="btn1" type="submit" onclick="newFunction()">find more</button>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="courosel_img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-3 offset-md-2">
                    <div class="courosel_detail">
                      <h1>
                        JUST TECHNOLOGICAL
                        <span>
                          THINGS
                        </span>
                      </h1>
                      <ul>
                        <li>Television</li>
                        <li>Computers</li>
                        <li>Mobile Phones</li>
                        <li>Artificial Intelligence</li>
                      </ul>  
                      <div>
                        <a href="">
                          Find More
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-7">
                    <div class="courosel_img-box">
                      <img src="images/slider-img.png" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel_btn-container">
              <a class="carousel-control-prev" href="#carousel-begins" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-begins" role="button" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
    
        </section>
    
    </div> 
       <!--  slider section ends -->
      <!--  details section -->
        <section class="detail_section layout_padding" >
          <div class="container">
            <h2>
              WHY INITIATIVE COMPANY
            </h2>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at
              its layout. The point of using Lorem
            </p>
          </div>
      
          <div class="container">
            <div class="about_card-container">
              <div class="about_card">
                <div class="about-detail">
                  <div class="about_img-box">
                    <img src="images/card-img-1.png" alt="">
                  </div>
                  <div class="card_detail-ox">
                    <h4>
                      10 YEARS EXPERIENCE
                    </h4>
                    <p>
                      The only way to get this right, at scale, is to connect the data points of all 100 million customers and map them back to an individual customer journey. To do this, companies must master the three essentials of the customer journey.
                    </p>
                  </div>
                </div>
                <div>
                  <a href="" class="about_btn">
                    Find More
                  </a>
                </div>
              </div>
              <div class="about_card">
                <div class="about-detail">
                  <div class="about_img-box">
                    <img src="images/card-img-2.png" alt="">
                  </div>
                  <div class="card_detail-ox">
                    <h4>
                      A PRO ARCHITECTS TEAM
                    </h4>
                    <p>
                      The only way to get this right, at scale, is to connect the data points of all 100 million customers and map them back to an individual customer journey. To do this, companies must master the three essentials of the customer journey.
                    </p>
                  </div>
                </div>
                <div>
                  <a href="" class="about_btn">
                    Find More
                  </a>
                </div>
              </div>
              <div class="about_card">
                <div class="about-detail">
                  <div class="about_img-box">
                    <img src="images/card-img-3.png" alt="">
                  </div>
                  <div class="card_detail-ox">
                    <h4>
                      1000+ HAPPY CUSTOMERS
                    </h4>
                    <p>
                      The only way to get this right, at scale, is to connect the data points of all 100 million customers and map them back to an individual customer journey. To do this, companies must master the three essentials of the customer journey.
                    </p>
                  </div>
                </div>
                <div>
                  <a href="" class="about_btn">
                    Find More
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--  detail section ends -->
        <!--  portfolio section -->
        <section class="portfolio_section layout_padding">
          <div class="container">
            <h2>
              OUR PORTFOLIO
            </h2>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at
              its layout. The point of using Lorem
            </p>
          </div>
          <div class="container layout_padding ">
            <div class="row">
              <div class="col-md-8">
                <div class="portfolio_img-box">
                  <img src="images/portfolio-img-1.png" alt="">
                </div>
              </div>
              <div class="col-md-4">
                <div class="portfolio_img-box">
                  <img src="images/portfolio-img-2.jpg" alt="">
                </div>
              </div>
              <div class="col-md-4">
                <div class="portfolio_img-box">
                  <img src="images/portfolio-img-3.png" alt="">
                </div>
              </div>
              <div class="col-md-8">
                <div class="portfolio_img-box">
                  <img src="images/portfolio-img-4.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>
      <!--  portfolio section ends -->
        <!-- team section  -->
  <section class="team_section layout_padding">
    <div class="container">
      <h2>
        OUR TEAM
      </h2>
      <p>
        It is a long established fact that a reader will be distracted by the readable
      </p>
    </div>
    <div class="container">
      <div class="team_card-container layout_padding">
        <div class="team_card">
          <div class="team_img-box">
            <img src="images/team-1.png" alt="">
          </div>
          <div class="team_detail-box">
            <h5>
              SREERAJ K NAIR
            </h5>
            <p>
              CEO - DEVELOPMENT
            </p>
            <div class="team_follow">
              <h6>
                Follow On
              </h6>
              <div class="team_social">
                <div>
                  <a href="">
                    <img src="images/facebook-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src=" images/twitter-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/linkedin.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/instagram.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="team_card">
          <div class="team_img-box">
            <img src="images/team-2.png" alt="">
          </div>
          <div class="team_detail-box">
            <h5>
              HARIKRISHNAN E
            </h5>
            <p>
              HR - MANAGER
            </p>
            <div class="team_follow">
              <h6>
                Follow On
              </h6>
              <div class="team_social">
                <div>
                  <a href="">
                    <img src="images/facebook-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src=" images/twitter-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/linkedin.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/instagram.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="team_card">
          <div class="team_img-box">
            <img src="images/team-3.png" alt="">
          </div>
          <div class="team_detail-box">
            <h5>
              ROSHY-JOHN
            </h5>
            <p>
              DEVELOPER
            </p>
            <div class="team_follow">
              <h6>
                Follow On
              </h6>
              <div class="team_social">
                <div>
                  <a href="">
                    <img src="images/facebook-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src=" images/twitter-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/linkedin.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/instagram.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="team_card">
          <div class="team_img-box">
            <img src="images/team-4.png" alt="">
          </div>
          <div class="team_detail-box">
            <h5>
              RASHIK AHAMMED
            </h5>
            <p>
             DESIGHNER
            </p>
            <div class="team_follow">
              <h6>
                Follow On
              </h6>
              <div class="team_social">
                <div>
                  <a href="">
                    <img src="images/facebook-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src=" images/twitter-logo-button.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/linkedin.png" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="images/instagram.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!--  team section ends-->
        
   <!-- contact section -->
   <section class="contact_section layout_padding">
    <div class="container">
      <p>
        Come and Ask
      </p>
      <h2 class="">
        FREE CONSULTATION
      </h2>
    </div>
    <div class="container">

      <div class="row">
        <div class="col-md-6 ">
          <form action="">
            <div class="contact_form-container">
              <div>
                <div>
                  <label>
                    Name
                    <input type="text" placeholder="name" />
                  </label>
                </div>
                <div>
                  <label>
                    Email
                    <input type="email" placeholder="email" />
                  </label>
                </div>

                <div>
                  <label>
                    Phone Number
                    <input type="text" placeholder="phone number" />
                  </label>
                </div>

                <div>
                  <label>
                    Message
                    <textarea name="" id="" cols="30" rows="10" placeholder="write any message"></textarea>
                  </label>
                </div>
                <div class="mt-5">
                  <button type="submit">
                    Send
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="contact_img-box">
            <img src="images/form-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--  contact section ends -->
  
 
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>        
  
 
</body>
</html>