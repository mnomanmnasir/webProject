<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cert Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php"> About us</a></li>
                        <li><a href="productdetails.php">Product Details</a></li> 
                        <li><a href="contactus.php"> Contact us</a></li>
                        <li><a href="./acount.php"><img src="./images/person.png" alt="" srcset=""></a></li>
                        <img src="./images/more.png" alt="" srcset="">
                <li> <a href="./cert.php"> <img src="./images/(53) WhatsApp_files/cert.svg" id="nav-svg" alt="" srcset=""> </a></li>


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

    
    <!-- cert page -->
    <section class="certItems">
        <div class="container">
            <h1>My Cert</h1>
            <div class="row">
                <div class="col-md-9">
                    
                    <div class="items">
                        <div class="row tableHeading">
                            <div class="col-lg-5">
                                <h2 class="itemDetails">Items</h2>
                            </div>
                            <div class="col-lg-2">
                                <h2 class="itemDetails">Quantity</h2>
                            </div>
                            <div class="col-lg-2">
                                <h2 class="itemDetails">Unit Price</h2>
                            </div>
                            <div class="col-lg-2">
                                <h2 class="itemDetails">Sub Price</h2>

                            </div>
                            <div class="col-lg-1">

                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-lg-5">
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="itemImg">
                                            <img src="./images/product1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h4>PRODUCT NAME HERE</h4>
                                        <h6>26 REVIEWS</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="ItemQuentity">
                                    <h2>1 Update Cart</h2>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="ItemPrice">
                                    <h4>$123</h4>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="ItemPrice">
                                    <h4>$123</h4>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="cancel">
                                    <span>x</span>

                                </div>
                            </div>
                        </div>
                        <div class="row item">
                            <div class="col-lg-5">
                                <div class="row ">
                                    <div class="col-md-4">
                                        <div class="itemImg">
                                            <img src="./images/product9.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h4>PRODUCT NAME HERE</h4>
                                        <h6>26 REVIEWS</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="ItemQuentity">
                                <h2>1 Update Cart</h2>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="ItemPrice">
                                    <h4>$123</h4>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="ItemPrice">
                                    <h4>$123</h4>
                                </div>
                            </div>
                            <div class="col-lg-1">
                                <div class="cancel">
                                    <span>x</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="exploreMore">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-5">
                                <h5> Continue Shopping</h5>
                            </div>
                            <div class="col-md-5">
                                <a href="./checkout.php"><h4>Proceed To Checkout</h4></a>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sum">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="billAttributes">
                                    <h5>Sub Total</h5>
                                    <h5>Discount</h5>
                                    <h5>Shipping</h5>
                                    <h2>TOTAL</h2>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="billValue">
                                    <h5>$246.00</h5>
                                    <br>
                                    <h5>$10</h5>
                                    <br>
                                    <h5>$15</h5>
                                    <h3>$246.00</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="courier">
                        <div class="billValue">
                            <h5>Shopping</h5>
                            <h6>Corier</h6>
                            <h5>Estimate For</h5>
                            <h6>Lorem, ipsum.</h6>
                        </div>
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