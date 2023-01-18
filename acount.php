<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acount Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="./style.css">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">                    
            <div class="logo">
            <img src="./images/Logo.png" alt="" srcset="">
        </div>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <div class="navbar">
                    <ul>
                        <li><a href="home.php"> Home</a></li>
                        <li><a href="about.php"> About us</a></li>
                        <li><a href="productdetails.php">Product Details</a></li> 
                        <li><a href="contactus.php"> Contact us</a></li>
                                <li><a href="./acount.php"><img src="./images/person.png" alt="" srcset=""></a></li>
                                <img src="./images/more.png" alt="" srcset="">
                        <li> <a href="./cert.php"> <img src="./images/(53) WhatsApp_files/cert.svg" id="nav-svg" alt="" srcset=""> </a></li>
        
        
                            <!-- <i width="50" class="fa fa-shopping-cart" aria-hidden="true"></i> -->
        
                        
                    
                    </ul>
                </div>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner-image.png" class="d-block w-100" alt="images">
                <div class="carousel-caption d-none d-md-block col-lg-4" id="text">
                    <!-- <h5>First slide label</h5> -->
                    <h1>
                        We Help You Make Modern Interior
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consectetur hic alias officiis
                        temporibus! Sequi, cum pariatur! Inventore pariatur, enim, consequuntur maxime quasi sit
                        quibusdam, laudantium atque nemo amet magnam.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banner-image.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block col-lg-4" id="text">
                    <h1>
                        We Help You Make Modern Interior
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consectetur hic alias officiis
                        temporibus! Sequi, cum pariatur! Inventore pariatur, enim, consequuntur maxime quasi sit
                        quibusdam, laudantium atque nemo amet magnam.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banner-image.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block col-lg-4" id="text">
                    <h1>
                        We Help You Make Modern Interior
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consectetur hic alias officiis
                        temporibus! Sequi, cum pariatur! Inventore pariatur, enim, consequuntur maxime quasi sit
                        quibusdam, laudantium atque nemo amet magnam.
                    </p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    </div>
    </section>


    
    <section class="account">
        <div class="container">
            <div class="row">
                <h1 class="heading">My Account</h1>
                <div class="col-md-6">
                    <div class="Section">
                        <h3>Log Into Your Account</h3>
                        <form class="LogIn" action="">
                            <input type="text" placeholder="User Name" />
                            <input type="password" placeholder="Password" />
                            <button>LOGIN</button>
                            <span>
                                <input class="rememberMe" type="checkbox" name="rememberMe" id="rememberMe">
                                <label for="rememberMe">Remember Me</label>
                            </span>
                            <span class="ForgetPass">Forget password?</span>
                            <span class="green">Create Account</span>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="Section">
                        <h3>Register</h3>
                        <form class="register" action="">
                            <input class="W50" type="text" placeholder="First Name" />
                            <input class="W50"type="text" placeholder="Last Name" />
                            <input class="W100"type="text" placeholder="Email" />
                            <input class="W100"type="password" placeholder="Password" />
                            <input class="W100"type="password" placeholder="Retype Password" />
                            <button>CREATE ACCOUNT</button>
                            <span class="agree">By creating an account, I'am agree to your <span>Terms & Conditions</span> </span>
                            <span class="green">Already Registered</span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <footer class="footer">
        <div class="container">
            <!-- <div class="cta d-block d-lg-flex align-items-lg-end px-3">
                <div>
                  <h2>Subscribe Now</h2>
                </div>
                <div class="button4">
                    <a href="#" class="btn"><button> Subscribe Now </button></a>
                  </div>
              </div> -->

            <div class="row">
                <div class="col-lg-3">
                    <div class="footerLogo">

                        <img src="./images/LogoW.png" alt="">
                    </div>
                    <div class="info">
                        <div>
                            <img src="./images/mail.png" alt="">
                            <h6>Lorem ipsum@gmail.com</h6>
                        </div>
                        <div>

                            <img src="./images/call.png" alt="">
                            <h6>(012)2918307</h6>
                        </div>
                        <div>

                            <img src="./images/location.png" alt="">
                            <h6>lorem ipsum ad305 street</h6>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="abc">
                        <h4>lorem ipsum</h4>
                        <h6>Home</h6>
                        <h6>About Us</h6>
                        <h6>Services</h6>
                        <h6>Contact Us</h6>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="abc">
                        <h4>lorem ipsum</h4>
                        <h6>Home</h6>
                        <h6>About Us</h6>
                        <h6>Services</h6>
                        <h6>Contact Us</h6>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="abc">
                        <h4>lorem ipsum</h4>
                        <h6>Home</h6>
                        <h6>About Us</h6>
                        <h6>Services</h6>
                        <h6>Contact Us</h6>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>
</html>