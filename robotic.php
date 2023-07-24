<?php
include"database.php";

if(isset($_POST['submit'] ))
{
    
    // print_r($_POST);
    // die('kkkkkkkkkkkkkkkkkkk');
    $FullName  = $_POST['FullName'];
    $LastName   = $_POST['LastName'];
    $MobileNumber   = $_POST['MobileNumber'];
    $Email      = $_POST['Email'];
    $Address   = $_POST['Address'];
    $sql="INSERT INTO abc (FullName,LastName,MobileNumber,Email,Address)  VALUES('$FullName','$LastName','$MobileNumber','$Email','$Address')";
    $con->query($sql);
    //  die($sql);
{

    echo "Data entered successfully";
    
    header('location:/NEWTHEAM/robotic.php');
    exit;

  }
mysqli_close($con);

}
 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="robotic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>CROBOT Theam</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg py-3 navbar-light bg-light fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><h2 style="color:#0d6efd;">CROBOT</h2></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

       <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white">We bring robots to life.</h1>
                    <p class="text-white my-3">Crobot Robotics is an AI and robotics company dedicated to creating socially intelligent machines that enrich the quality of our lives.!</p>
                    <a href="#" class="btn me-2 btn-primary">Get Started</a>
                    <a href="#" class="btn btn-outline-light">My Portfolio</a>
                </div>
            </div>
        </div>
    </div><!-- //HERO -->
     <!-- PROJECTS -->
     <section id="portfolio">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">PROJECTS</h6>
                    <h1>Why human-like robots?</h1>
                    <p>Robots will soon be everywhere. How can we nurture them to be our friends and useful collaborators? Robots with good aesthetic design, rich personalities, and social cognitive intelligence can potentially connect deeply and meaningfully with humans.</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="./robot/h1.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Robotic Tech</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="./robot/h2.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Humanoid Robot</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="./robot/h3.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Robotic Lession</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="./robot/h4.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Robotic Picture</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="./robot/h5.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Human Robot</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="./robot/h6.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">aI Robot</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- PROJECTS -->

    <!-- FEATURES -->
    <section class="row w-100 py-0 bg-light" id="features">
        <div class="col-lg-6 col-img"></div>
        <div class="col-lg-6 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h6 class="text-primary">Crobot AI</h6>
                        <h1>Developing Meaningful AI Interactions</h1>
                        <p>Crobot AI develops cognitive architecture and AI-based tools that enable our robots to simulate human personalities, have meaningful interactions with people and evolve from those interactions. Our team of renowned AI scientists conducts advanced research to build the most compelling robotics and AI platform for research, media, and service applications.</p>

                        <div class="feature d-flex mt-5">
                           
                            <div>
                                <h5>Crobot AI develops</h5>
                                <p>Hanson AI brings our robots to life as simulated lifeforms through characters that truly engage people. While robots like Sophia today might simulate life, our ongoing research adds increasing capabilities to our robots, with the ultimate aspiration to bring robots to life, quite literally </p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            
                            <div>
                                <h5>Crobot AI Framework</h5>
                                <p>The Crobot AI framework includes symbolic reasoning and a hypergraph knowledge database, combined with various in-depth learning tools and numerous machine perception technologies, within a unified platform for both R&D and products. </p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section><!-- FEATURES -->

     <!-- PRICING -->
     <section id="pricing" class="bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">PRICING</h6>
                    <h1>Our Fair & Simple Pricing</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>STARTER</h6>
                        <h1>$99</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Premium support</li>
                            <li><i class='bx bxs-check-circle'></i>
                                30+ Webmaster Tools</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Drag & Drop Builder</li>
                            <li><i class='bx bxs-check-circle'></i>
                                eCommerce Store</li>
                            <li><i class='bx bxs-check-circle'></i>Wordpress plugins</li>
                        </ul>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>STARTER</h6>
                        <h1>$199</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Premium support</li>
                            <li><i class='bx bxs-check-circle'></i>
                                30+ Webmaster Tools</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Drag & Drop Builder</li>
                            <li><i class='bx bxs-check-circle'></i>
                                eCommerce Store</li>
                            <li><i class='bx bxs-check-circle'></i>Wordpress plugins</li>
                        </ul>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>STARTER</h6>
                        <h1>$299</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Premium support</li>
                            <li><i class='bx bxs-check-circle'></i>
                                30+ Webmaster Tools</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Drag & Drop Builder</li>
                            <li><i class='bx bxs-check-circle'></i>
                                eCommerce Store</li>
                            <li><i class='bx bxs-check-circle'></i>Wordpress plugins</li>
                        </ul>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>STARTER</h6>
                        <h1>$399</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Premium support</li>
                            <li><i class='bx bxs-check-circle'></i>
                                30+ Webmaster Tools</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Drag & Drop Builder</li>
                            <li><i class='bx bxs-check-circle'></i>
                                eCommerce Store</li>
                            <li><i class='bx bxs-check-circle'></i>Wordpress plugins</li>
                        </ul>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- PRICING -->
     <!-- TEAM -->
     <section id="team">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">TEAM</h6>
                    <h1>Meet Our Crew Members</h1>
                    <p>Hanson Robotics is at the forefront of technology showcasing the fascinating intersection between robots and humans.  Our science and research team focus on broad</p>
                </div>
            </div>
            <div class="row text-center g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="./robot/s1.jpg" alt="">
                        <h5 class="mb-0 mt-4">Sharbat Khan</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="./robot/s2.jpg" alt="">
                        <h5 class="mb-0 mt-4">Sharbat Khan</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="./robot/s3.jpg" alt="">
                        <h5 class="mb-0 mt-4">Sharbat Khan</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="./robot/s4.jpg" alt="">
                        <h5 class="mb-0 mt-4">Sharbat Khan</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- TEAM -->

    <!-- BLOG -->
    <section id="blog" class="bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">BLOG</h6>
                    <h1>Latest News From The Blog</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="blog-post card-effect">
                        <img src="./robot/s4.jpg" alt="">
                        <h5 class="mt-4"><a href="#">harum vitae debitis sapiente praesentium aperiam au</a></h5>
                        <p>Lorem ipsum dolor sit amet consectetur  </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post card-effect">
                        <img src="./robot/r6.jpg" alt="">
                        <h5 class="mt-4"><a href="#">harum vitae debitis sapiente praesentium aperiam au</a></h5>
                        <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post card-effect">
                        <img src="./robot/h5.jpg" alt="">
                        <h5 class="mt-4"><a href="#">harum vitae debitis sapiente praesentium aperiam au</a></h5>
                        <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- BLOG -->

    <!-- CONTACT -->
  
    <section id="contact">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">CONTACT</h6>
                    <h1>Get In Touch</h1>
                    <p>For Sophia event appearances (virtual or live), sponsorship inquiries or questions about research robot sales, press or careers, please submit this form, or scroll down for direct email contact information.  Thank you!</p>
                </div>
            </div>

            <form action="" class="row col align-self-center" method='post' enctype="multipart/form-data">
                <div class="col col-lg-10 my-4">
                <input name='FullName' type="text" class="form-control" id="validationDefault02" placeholder="Full Name" required>
                </div>
                <div class="col col-lg-10 my-4">
                <input name='LastName' type="text" class="form-control" id="validationDefaultUsername" placeholder="Last Name" aria-describedby="inputGroupPrepend2" required>
                </div>
                <div class="col col-lg-10 my-4">
                <input name='Email' type="Email" class="form-control" id="inputEmail4" placeholder="Email" required>
                </div>
                <div class="col col-lg-10 my-4">
                <input name='MobileNumber' type="Number" class="form-control" id="inputMobileNumber4" placeholder="Mobile Number" required>
                </div>
                <div class="col col-lg-10 my-4">
                    <!-- <textarea name="" id="" cols="30" rows="5" class="form-control"
                        placeholder="Enter Comments"></textarea> -->
                        <textarea name='Address' type="text" class="form-control" id="validationDefault03" cols="30" rows="5" placeholder="Address" required></textarea>
                </div>
                <div class="col-md-10 d-grid">
                <button href='robotic.php' class="btn btn-primary" name="submit"  value="submit" type="submit">Submit form</button>
                </div>
            </form>

        </div>
    </section><!-- CONTACT -->

    <footer>
   
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <img class="logo" src="./robot/bbb3.webp" alt="">
                    </div>
                    <div class="col-lg-2">
                        <h5 class="text-white">Brand</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <h5 class="text-white">More</h5>
                        <ul class="list-unstyled">
                            <li><a href="#">FAQ's</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Warranty</a></li>
                            <li><a href="#">Shipment</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <h5 class="text-white">Contact</h5>
                        <ul class="list-unstyled">
                            <li>Address: 2715 Ash Dr. San Jose, South Dakota 83475</li>
                            <li>Email: jackson.graham@example.com</li>
                            <li>Phone: (603) 555-0123</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
    </footer>



    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 
  </body>
</html>