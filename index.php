<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to The Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Honk&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <header><a href="#HOW_TO_SELL" <button type="button" class="btn btn-secondary btn-custom">How to Sell</button> </a>
    </header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img id="rolex_icon" src="28122-4-rolex-logo.png" alt="Rolex" height="80">
                The Gallery
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">a
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#Auctions">Auctions</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="#Private">Private Sales </a>
                    </li>
                        </a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#Locations">Locations</a></li>
                                <li><a class="dropdown-item" href="#Careers">Careers</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#Contact_Us">Contact Us</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#" id="cart-dropdown">🛒 Cart (<span id="cart-count">0</span>)</a></li>
                            </ul>
                        </li>
                        
                        <?php session_start(); ?>
<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    User Account
  </a>
  <ul class="dropdown-menu">
    <?php if (isset($_SESSION["username"])): ?>
      <li><a class="dropdown-item" href="logout.php">Logout (<?php echo $_SESSION["username"]; ?>)</a></li>
    <?php else: ?>
      <li><a class="dropdown-item" href="account.html">Login / New Account</a></li>
    <?php endif; ?>
  </ul>
</li>

                        </li>
                    </li>
                    </li>
                </ul>
                <input class="form-control me-2" type="search" placeholder="what are you looking for?"
                    aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        Tune in today at 10am ET to watch The Collection of Sir Elton John: The Day Sale
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="container">
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" src="antique.mp4.mp4"
            type="video/mp4" autoplay loop="loop" width="100%;"> </video>
        <div class="container-sm">
            AUCTION HOUSE! <BR> Buy and Sell Rarest of the Rarest !
            <br> <a href="#About_Us"> <button type="button" class="btn btn-outline-secondary btn-custom">About Us</button> </a>
        </div>
    </div>
    <section id="Auctions">
        <h1>Auctions</h1>
    <div class="container_Auctions">
        <div class="auction-item">
            <img src="image1.jpg" height="300" width="190">
            <button class="add-to-cart" data-name="Painting 1" data-price="200">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="image6.webp" height="300" width="190">
            <button class="add-to-cart" data-name="Painting 2" data-price="350">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="image3.jpg" height="300" width="190">
            <button class="add-to-cart" data-name="Painting 3" data-price="150">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="images4.jpg" height="300" width="190">
            <button class="add-to-cart" data-name="Painting 4" data-price="186">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="image5.jpg" height="300" width="190">
            <button class="add-to-cart" data-name="Painting 5" data-price="256">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="image2.jpg" height="300" width="190">
            <button class="add-to-cart" data-name="Painting 6" data-price="76">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="image7.webp" height="300" width="190">
            <button class="add-to-cart" data-name="Painting 7" data-price="160">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="image8.jpg" height="300" width="190">
            <button class="add-to-cart" data-name="Painting 8" data-price="186">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="image9.jpg" height="300" width="190">
            <button class="add-to-cart" data-name="Painting 9" data-price="199">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="image10.jpg" height="300" width="190">
            <button class="add-to-cart" data-name="Painting 10" data-price="406">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="image11.jpg" height="300" width="190">
            <button class="add-to-cart" data-name="Eye with black frame" data-price="186">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="image13.jpg" height="300" width="190">
            <button class="add-to-cart" data-name="Painting 12" data-price="320">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="image12.jpg" height="300" width="190">
            <button class="add-to-cart" data-name="Painting 13" data-price="186">Add to cart </button>
        </div>
        <div class="auction-item">
            <img src="image14.jpg" height="300" width="190">
            <button class="add-to-cart" data-name="Man with bird" data-price="156">Add to cart </button>
        </div>
        <div class="more-pictures">
            <a href="more_pictures.html">
                <button>More Pictures</button>
            </a>
        </div>
        
    </div>
    <!-- 🛒 Cart Modal -->
<div id="cart-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>🛒 Your Cart</h2>
        <ul id="cart-items"></ul>
        <p id="cart-total">Total: $0</p>
        <button id="checkout">Proceed to Checkout</button>
    </div>
</div>

    <section id="Private">
        <h1> Private Sales</h1>
        <div id="carouselExampleDark" class="carousel carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img id="ej2" 
                    src="EJ2.jpg" class="d-block w-50" height="50%">
                    <div class="text_container">
                        <h2>Sir John Dalton Collection</h2>
                        <p>To celebrate this landmark occasion, <br> a limited-edition catalogue will be published to
                            accompany the Evening and Day auctions.</p>
                        <button type="button" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img id="ej2" src="ej1.jpg" class="d-block w-50" alt="...">
                    <div class="text_container">
                        <h2>Famous Photos and Potraits</h2>
                        p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Debitis alias possimus odio
                        minima. Eum dolorum ex, fuga ad mollitia neque nam quos. </p>
                        <button type="button" class="btn btn-primary">Buy Now</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="EJ.jpg" class="d-block w-50 h-30" alt="...">
                    <div class="text_container1">
                        <h2>Rare of the Rarest !</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>Debitis alias possimus odio
                            minima. Eum dolorum ex, fuga ad mollitia neque nam quos. </p>
                        <button type="button" class="btn btn-primary" id="Buy">Buy Now</button>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>   
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <br>
    <section id="HOW_TO_SELL">
        <div>
            <h1>How to sell your item?</h1><br>

            <div class="card-group">
                <div class="card">
                    <a href="Selling_Guide.html"><img id="sell" src="How to sell.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Selling Guide</h5>
                        <p class="card-text">Step into an awe-inspiring world within our gallery, where every corner
                            invites you to explore the magic of artistry. Our meticulously curated spaces not only
                            showcase the visual elegance of each masterpiece but also weave intricate stories waiting to
                            be discovered. Illuminated with precision, the strategic play of light and shadow transforms
                            each piece into a living entity, breathing life and vibrancy into the gallery. Delve beyond
                            the canvas as our detailed descriptions unravel the artist's inspiration and the tales that
                            lie within each stroke and color. Engage with art in a multi-dimensional way through
                            interactive exhibits that invite touch and connection, transcending the traditional
                            boundaries of appreciation. Experience the gallery as a dynamic entity, where technology
                            meets tradition through immersive installations and digital expressions.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
                <div class="card">
                    <a href="Selling_Guide.html"> <img id="Sell" src="Howtosell0.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">Request an Auction Estimate</h5>
                        <p class="card-text">Navigating the world of art auctions involves an understanding of the
                            auction estimate, a crucial aspect that guides both buyers and sellers. The auction estimate
                            serves as an informed prediction of the artwork's expected selling price, acting as a bridge
                            between the seller's expectations and the buyer's discernment of value. It is a nuanced
                            calculation, considering various factors such as the artist's reputation, the rarity of the
                            piece, its provenance, and the current market trends.</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
    </section>
<section id="Careers">
    <h1> Careers </h1>
    <div class="container">
        <br>
        <h3><strong> Join Us </strong></h3>
        <p>Below are the current openings for the following positions :) </p><br>
        <div class="media">
          <div class="media-left">
            <img src="boy.png" class="media-object" style="width:45px">
          </div>
          <div class="media-body">
            <h4 class="media-heading"><strong > Software Developer </strong><small><i>Posted on February 29, 2024</i></small></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <!-- Nested media object -->
            <div class="media">
              <div class="media-left">
                <img src="profile.png" class="media-object" style="width:45px">
              </div>
              <div class="media-body">
                <h4 class="media-heading"><strong>System Administrator  </strong><small><i>Posted on February 29, 2024</i></small></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <!-- Nested media object -->
                <div class="media">
                  <div class="media-left">
                    <img src="bussiness-man.png" class="media-object" style="width:45px">
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><strong> Network Engineer </strong> <small><i>Posted on February 29, 2024</i></small></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
</section>
<br>
    <section id="About_Us">

        <h1> About Us</h1>
        <br>
        <h2>The Gallery </h2>
        <p> Welcome to The Gallery, the global destination for discerning collectors and enthusiasts of exquisite
            antiques. With a rich history and a reputation that spans the globe, we have established ourselves as the
            premier platform for buying and selling timeless treasures.</p>
        <p>
            <br>
        <h2> Our Story: </h2>
        Founded in 2024 by passionate collector Moksh Sharma, The Gallery was born out of a shared love for the beauty,
        craftsmanship, and history encapsulated in every antique. What started as a modest venture has now evolved into
        a powerhouse in the world of antiques, attracting connoisseurs, experts, and enthusiasts alike.
        </p>
        <br>
        <h2> Global Reach:</h2>
        <p>
            At The Gallery, we take pride in our worldwide influence. Our network spans across continents, connecting
            sellers with buyers from every corner of the globe. Whether you're in search of a rare European artifact, an
            Asian masterpiece, or an American classic, our platform is the meeting point for diverse cultures and
            timeless pieces.
        </p>
        <br>
        <h2> Seamless Buying and Selling: </h2>
        <p>
            At The Gallery, our customers are at the heart of everything we do. We strive to provide a personalized and
            seamless experience, offering expert guidance, secure transactions, and reliable shipping worldwide. Our
            commitment to customer satisfaction has earned us the trust of collectors and sellers alike.
        </p>
        </div>
        <h2>Meet Our Backend Team</h2>
        <p>Our talented backend developers ensure that our platform runs smoothly and securely. Meet the experts behind the scenes.</p>
        <section id="backend-team">
           <div class="team-container" style="display: flex; justify-content: center; gap: 50px;">
                <div class="team-member" style="text-align: center;">
                    <img src="moksh.jpg" alt="Moksh Sharma" style="width: 150px; height: 150px; border-radius: 50%;">
                    <h3>Moksh Sharma</h3>
                    <p>API & Security Expert</p>
                    <div class="social-links" style="display: flex; justify-content: center; gap: 10px;">
                        <a href="https://www.instagram.com/iam_highperhaps/" target="_blank">
                            <img src="instagram-logo.png" alt="Instagram" style="width: 20px; height: 20px;">
                        </a>
                        <a href="https://www.facebook.com/mokshs" target="_blank">
                            <img src="facebook-logo.png" alt="Facebook" style="width: 20px; height: 20px;">
                        </a>
                    </div>
                </div>
                <div class="team-member" style="text-align: center;">
                    <img src="rohit.jpg" alt="Rohit Joshi" style="width: 150px; height: 150px; border-radius: 50%;">
                    <h3>Rohit Joshi</h3>
                    <p>Lead Backend Developer & Database Specialist</p>
                    <div class="social-links" style="display: flex; justify-content: center; gap: 10px;">
                        <a href="https://www.instagram.com/rohiittjoshi/" target="_blank">
                            <img src="instagram-logo.png" alt="Instagram" style="width: 20px; height: 20px;">
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100065968411039" target="_blank">
                            <img src="facebook-logo.png" alt="Facebook" style="width: 20px; height: 20px;">
                        </a>
                    </div>
                </div>
            </div>
        </section> 
        </div>
        <section id="Contact_Us">
            <div>
                <h1>
                    Contact Us
                </h1>
                <div class="row">
                    <form action="process_form.php" method="POST">

                    <div class="col">
                        <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="first_name" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="last_name" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="email" class="form-control" placeholder="Email" aria-label="email" name="email" required>
                        </div>
                        <div class="col">
                            <input type="tel" class="form-control" placeholder="Phone number" aria-label="Phone Number" name="phone" required>
                        </div>
                        <div class="row">
                            <div class="message">
                                <textarea id="message" class="form-control" name="message" placeholder="Type Here" required></textarea><br>
                            </div>
                            <div class="btn">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                    </div>
        </section>
    </section>
    <section class="Background">
</section>
    </section>
    <section id="Locations">
        <h1>
          The Gallery Locations
        </h1>
        <center> 
          <div class="image-container">
            <img src="India.png" alt="Image 1">
            <img src="Canada.jpeg" alt="Image 2">
            <img src="USA.jpg" alt="Image 3">
            <img src="australia.jpeg" alt="Image 4">
          </div>
            </div>
        </center>
          </section>
    </footer>
    </s><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="cart.js"></script>
</body>
</body>
</html>