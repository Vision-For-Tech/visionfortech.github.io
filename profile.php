<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="image" href="bullsye.svg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="header">
    <h2 title="Home"><a href="index.html">LEARNING MANAGEMENT SYSTEM</a></h2>
    <div class="header-right">
      <div class="search-container">
        <input title="search" type="text" id="searchbar" placeholder="Search..." />
        <button type="submit"><i class="fa fa-search"></i></button>
      <div class="login-button">
        <img src="log-in.png" alt="Login" class="login-img" />
        <?php 
            session_start(); 
            if(isset($_SESSION["username"])) {
                echo '<a href="Editprofile.html">'. $_SESSION["username"] .'</a>';
            } else {
                echo '<a href="login.html">Login</a>';
            }
        ?>
      </div>
      </div>
    </div>
  

<div class="navbar">
    <div class="dropdown">
    <a class="menu" href="#" >||| Menu</a>

    <div class="dropdown-content">
      <h3> <a href="index.html"> Home</a></li>
      <h3><a href="About.htm">About</a></li>
      <h3><a href="Contact.html">Contact</a></li>
    </div>
    </div>
    <button title="Home" class="btn"><i class="fa fa-home"></i><a href="index.html"> Home</a></button>
    <!-- Add the home icon here -->
    <!-- Continue with other buttons -->
    <button title="Math" class="btn"><i class="fa fa-calculator"></i><!--<img src="images.jpg" style="width: 100%; height: 100%;" alt="background img">--> <a href="Math.html"> Math</a></button>
    <button title="Biology" class="btn"><i class="fa fa-leaf"></i><a href="index.html"> Biology</a></button>
</div>



    <!--<a href="Math.html">Math</a>
    <a href="Biology.html">Biology</a>!-->
      

<div class="row">
  <div class="side">
    <h2><i>"Unlock a world of knowledge and entertainment at your fingertips with our app. Start your journey today and experience the thrill of learning and fun like never before. Get your copy now and join our vibrant community of learners!"</i></h2>
    <h5><i>"Garcia Alonso"</i></h5>
    <div class="contact">
    <p>You can Learn more about us in the
      <a href="About.htm"> About Us</a> section..</p>
    <h3><img src="phone.png"></h3>
    <h3><a href="Contact.html">Contacts</a></h3>
    <p>.</p>
    </div>
  </div>


  
  <!--<div class="main">
      <h2>Welcome to Smartypants!</h2>
      <svg id="bullseye-svg" width="200" height="190" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
        <!-- Outer circle --
        <circle cx="200" cy="200" r="180" fill="#ff0000" />
        <!-- Middle circle --
        <circle cx="200" cy="200" r="140" fill="#ffffff" />
        <!-- Inner circle --
        <circle cx="200" cy="200" r="100" fill="#0000ff" />
        <circle cx="200" cy="200" r="50"  fill="#000000"/>
        <!-- A+ text --
        <text x="150" y="220" font-size="100" fill="#ffffff" font-family="cursive">A+</text>
      </svg>
      <!-- Rest of your content goes here --
      <div class="slideshow">
        <svg id="slides" width="100" height="50" viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">

          <circle cx="20" cy="50" r="20" fill="#ffffff" />


        </svg>
        <!-- Add more slides as needed --
      </div>
    <!--<div class="fakeimg" style="height:200px; size: 100px;"><img src="magnifying-glass.png" alt=""></div>--
    <p id="OurStory"><a href="OurStory.html"> Our Story..</a></p>
    <p>This is our app made by college high school students aimed at aiding students ace their Cambridge IGCSE exams by providing topic by topic questions............................</p>
    <button class="button"><a href="register.html">Get Started</a></button>
    <div class="options">
      <form action = "">
        <fieldset>
        <label>Email</label>
        <input type = "text"
        id = "txtName" 
        placeholder="example@somehing.com"/>
        <label>Password</label>
        <input type = "password"
        id = "txtAddress"
        placeholder = "secret" />
        <button type = "button" onclick="">
        Login
        </button>
        <button id="google" type = "button" onclick=Say">
          Login with Google
          </button>
          <button type = "button" onclick="">
            Login with Facebook
            </button>
        </fieldset>
        </form>
        </div>
    </div>-->
  
  </div>
</div>


<div class="footer">
  <div class="social-icons">
    <a title="Twitter" href="https:/www.twitter.com/Vision-For-Tech"><i class="fa fa-twitter"></i></a>
    <a title="Facebook" href="https:/www.facebook.com/Vision-For-Tech"><i class="fa fa-facebook"></i></a>
    <a title="Instagram" href="https:/www.instagram.com/Vision-For-Tech"><i class="fa fa-instagram"></i></a>
    </div>
    <form class="newsletter-form">
      <input type="email" placeholder="Enter your email">
      <button type="submit">Subscribe</button>
  <h6><i>@Made by Moses,Garcia,Able and Tsungai</i></h6>

</div>


<link rel="script" href="index.js">
<link rel="php" href="index.php">
</body>
</html>
