<?php session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="imges/navlogo.png">
    <script src="javascript/index.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
   <!--footer-->
   <style>
    .footer {
  background:rgb(0, 0, 0);
  padding: 40px;
  display: flex;
  justify-content: space-between;
  align-items: start;
  color: white;
  flex-wrap: wrap;
}
.newsletter {
  max-width: 400px;
  color: white;
}
.newsletter form {
  display: flex;
  gap: 10px;
  align-items: center;
}
.newsletter input {
  flex: 1;
  padding: 10px;
  border-radius: 20px;
  border: none;
}
.subscribe-btn {
  padding: 10px 20px;
  border: none;
  border-radius: 20px;
  background-color: rgb(255, 61, 0);
    color: black;
    font-weight: bold;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}
.subscribe-btn:hover {
  background-color: #e65c00;
}
.social-icons {
  display: flex;
  gap: 18px;
  margin-top: 18px;
}
.social-icons a {
  width: 30px;
  height: 30px;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  background: white;
  color: white;
  text-decoration: none;

}
.links, .contact, .support {
  max-width: 300px;
  color: white;
  text-decoration: none;
}
.contact a, .support a {
  color: white;
  text-decoration: none;
  color: white;
}
.support p {
  margin: 5px 0;
  color: white;
  color: white;
}
.copyright {
  text-align: center;
  padding: 20px;
  color: white;
  background:rgb(0, 0, 0);
  font-size: 14px;
  
}
.home-link{
  text-decoration: none;
  color: white;
}
</style>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <!-- <label class="logo"><a href="/index.html"><img src="/imges/logo.png" alt=""></a></label> -->
        <!-- <label class="logo"><a href="/index.html"><img src="code-editor/imges/logo.png" alt=""></a></label> -->
        <label class="logo">
  <a href="index.php">
    <img src="imges/logo.png" alt="Logo">
  </a>
</label>

        <!-- <input type="text" class="search_box" placeholder="Search...">
        <img src="/imges/search.png" alt="" class="search_icon"> -->

        <div class="search-container">
            <input type="text" class="search-box" placeholder="Search...">
            <i class="fas fa-search search-icon"></i>
        </div>


        <ul>
            <li><a class="active" href="index.php"><b>Home</b></a></li>
            <li><a href="pages/codezone.php">CodeZone</a></li>
            <li><a href="pages/tutorials.php">Tutorials</a></li>
            <li><a href="pages/about.php">About</a></li>
            <li><a href="pages/contact.php">Contact</a></li>
        </ul>
        <div class="auth-area">
            <?php if ($username): ?>

                <a href="pages/logout.php" class="signup_btn">Sign Out</a>
            <?php else: ?>
                <button class="signup_btn" onclick="window.location.href='./pages/signin.php'">Sign In</button>
            <?php endif; ?>
        </div>
    </nav>
      

    <div>
        <img src="imges/poster.jpg" alt="" class="home_poster">
    </div>

  

    <div class="view">
        <h1 class="main-heading block">World-class editor for tech
            enthusiastic.</h1>
    </div>
    <div class="line-container block">
        <div class="line "></div>
    </div>
    <!-- card -->
    <div class="container block">
        <div class="card-content html-content">
            <img src="imges/html-card-image.png" alt="image" class="main-product-image block" id="main-product-image">

            <div class="text-container">
                <h1 class="heading-card">HTML</h1>
                <h2 class="heading">First Language for Learning Web Designing</h2>
                <p class="para">HTML (HyperText Markup Language) is the foundation of every webpage. It structures
                    content using elements like headings, paragraphs, images, and links.</p>

                <div class="btn-container">
                    <button type="button" class="btn-card btn-start" onclick="goToPage('pages/fronted.php')"> Start
                    </button>
                    <button type="button" class="btn-card btn-tutotrial" onclick="goToPage('pages/tutorials.php')">
                        Tutorials </button>
                    <button type="button" class="btn-card btn-about" onclick="goToPage('pages/about.php')"> About
                    </button>
                    <button type="button" class="btn-card btn-more" onclick="goToPage('pages/codezone.php')"> More
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="line-container block">
        <div class="line "></div>
    </div>
    <div class="container block">
        <div class="card-content css-content">
            <img src="imges/css-card-image.png" alt="image" class="main-product-image block" id="main-product-image">

            <div class="text-container">
                <h1 class="heading-card">CSS</h1>
                <h2 class="heading"> Second Language for Learning Web Designing</h2>
                <p class="para">CSS (Cascading Style Sheets) is used to style and design web pages. It controls the
                    layout, colors, fonts, and responsiveness of a website.</p>

                <div class="btn-container">
                    <button type="button" class="btn-card btn-start" onclick="goToPage('pages/fronted.php')"> Start
                    </button>
                    <button type="button" class="btn-card btn-tutotrial" onclick="goToPage('pages/tutorials.php')">
                        Tutorials </button>
                    <button type="button" class="btn-card btn-about" onclick="goToPage('pages/about.php')"> About
                    </button>
                    <button type="button" class="btn-card btn-more" onclick="goToPage('pages/codezone.php')"> More
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="line-container block">
        <div class="line "></div>
    </div>
    <div class="container block">
        <div class="card-content js-content">
            <img src="imges/js-card-image.png" alt="image" class="main-product-image block" id="main-product-image">

            <div class="text-container">
                <h1 class="heading-card">JAVASCRIPT</h1>
                <h2 class="heading">Third Language for Learning Web Designing</h2>
                <p class="para">JavaScript (JS) is a programming language that adds interactivity and dynamic behavior
                    to web pages, It enables features like animations.</p>

                <div class="btn-container">
                    <button type="button" class="btn-card btn-start" onclick="goToPage('pages/fronted.php')"> Start
                    </button>
                    <button type="button" class="btn-card btn-tutotrial" onclick="goToPage('pages/tutorials.php')">
                        Tutorials </button>
                    <button type="button" class="btn-card btn-about" onclick="goToPage('pages/about.php')"> About
                    </button>
                    <button type="button" class="btn-card btn-more" onclick="goToPage('pages/codezone.php')"> More
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div class="line-container block">
        <div class="line "></div>
    </div>
    <!-- marquee -->
    <div class="marquee-wrapper">
        <div class="marquee-container">
            <div class="marquee-content">
                <!-- Original Images -->
                <img src="imges/html-5.png" alt="HTML">
                <img src="imges/css-3.png" alt="CSS">
                <img src="imges/c-.png" alt="C">
                <img src="imges/java.png" alt="Java">
                <img src="imges/js.png" alt="JavaScript">
                <img src="imges/php.png" alt="PHP">
                <img src="imges/ruby.png" alt="Ruby">
                <img src="imges/sass.png" alt="SASS">
                <img src="imges/c-sharp.png" alt="C#">
                <img src="imges/sql.png" alt="SQL">
                <img src="imges/physics.png" alt="Physics">
                <img src="imges/html-5.png" alt="HTML">
                <img src="imges/css-3.png" alt="CSS">
                <img src="imges/c-.png" alt="C">
                <img src="imges/java.png" alt="Java">
                <img src="imges/js.png" alt="JavaScript">
                <img src="imges/php.png" alt="PHP">
                <img src="imges/ruby.png" alt="Ruby">
                <img src="imges/sass.png" alt="SASS">
                <img src="imges/c-sharp.png" alt="C#">
                <img src="imges/sql.png" alt="SQL">
                <img src="imges/physics.png" alt="Physics">
                <img src="imges/html-5.png" alt="HTML">
                <img src="imges/css-3.png" alt="CSS">
                <img src="imges/c-.png" alt="C">
                <img src="imges/java.png" alt="Java">
                <img src="imges/js.png" alt="JavaScript">
                <img src="imges/php.png" alt="PHP">
                <img src="imges/ruby.png" alt="Ruby">
                <img src="imges/sass.png" alt="SASS">
                <img src="imges/c-sharp.png" alt="C#">
                <img src="imges/sql.png" alt="SQL">
                <img src="imges/physics.png" alt="Physics">
                <img src="imges/html-5.png" alt="HTML">
                <img src="imges/css-3.png" alt="CSS">
                <img src="imges/c-.png" alt="C">
                <img src="imges/java.png" alt="Java">
                <img src="imges/js.png" alt="JavaScript">
                <img src="imges/php.png" alt="PHP">
                <img src="imges/ruby.png" alt="Ruby">
                <img src="imges/sass.png" alt="SASS">
                <img src="imges/c-sharp.png" alt="C#">
                <img src="imges/sql.png" alt="SQL">
                <img src="imges/physics.png" alt="Physics">
                <img src="imges/html-5.png" alt="HTML">
                <img src="imges/css-3.png" alt="CSS">
                <img src="imges/c-.png" alt="C">
                <img src="imges/java.png" alt="Java">
                <img src="imges/js.png" alt="JavaScript">
                <img src="imges/php.png" alt="PHP">
                <img src="imges/ruby.png" alt="Ruby">
                <img src="imges/sass.png" alt="SASS">
                <img src="imges/c-sharp.png" alt="C#">
                <img src="imges/sql.png" alt="SQL">
                <img src="imges/physics.png" alt="Physics">

                
              
            </div>
        </div>

        <!-- Left & Right Shadows -->
        <div class="shadow left-shadow"></div>
        <div class="shadow right-shadow"></div>
    </div>


    <div class="line-container block">
        <div class="line "></div>
    </div>


    <div class="card-content-conatiner">
        <div class="content-conatiner">
        </div>
    </div>
     
    

    <!-- why -->
     <div class="why-container block">
    <h2 class="features-heading">Why choose <span class="highlight-text">Codeverse</span>?</h2>

    <div class="features-grid">
        <div class="feature-card block">
            <img class="feature-icon" src="https://cdn-icons-png.flaticon.com/128/18085/18085766.png" alt="Affordable Pricing">
            <h3 class="feature-title">Easy To Use</h3>
            <p class="feature-description">Write, Edit & Run Code Instantly</strong> with a seamless interface.</p>
        </div>

        <div class="feature-card block">
            <img class="feature-icon" src="https://cdn-icons-png.flaticon.com/128/6062/6062646.png" alt="Live Classes">
            <h3 class="feature-title">Multi-Language Support</h3>
            <p class="feature-description">Write & Execute Code in 10+ Languages, Like | Python |  Java |  C++ |  JavaScript |  TypeScript |</p>
        </div>

        <div class="feature-card block">
            <img class="feature-icon" src="https://cdn-icons-png.flaticon.com/128/7909/7909932.png" alt="Recorded Videos">
            <h3 class="feature-title">Customizable Editor</h3>
            <p class="feature-description">Tailor Your Coding Experience! Choose themes, shortcuts, and layouts that match your workflow.</p>
        </div>

        <div class="feature-card block">
            <img class="feature-icon" src="https://cdn-icons-png.flaticon.com/128/4310/4310234.png" alt="Doubt Resolution">
            <h3 class="feature-title">Fast & Lightweight </h3>
            <p class="feature-description">Enjoy a blazing-fast performance with minimal system resource usage, ensuring smooth coding on any device.</p>
        </div>

        <div class="feature-card block">
            <img class="feature-icon" src="https://cdn-icons-png.flaticon.com/128/8421/8421869.png" alt="Language Support">
            <h3 class="feature-title">Built-in Debugging</h3>
            <p class="feature-description">Find and fix bugs faster with an integrated debugger, error highlighting, and smart suggestions.</p>
        </div>

        <div class="feature-card block">
            <img class="feature-icon" src="https://cdn-icons-png.flaticon.com/128/9436/9436966.png" alt="Lifetime Notes">
            <h3 class="feature-title">Web Development Preview</h3>
            <p class="feature-description">Instantly preview your HTML, CSS, and JavaScript projects in a live browser environment.</p>
        </div>
    </div>

</div>




    <!-- start building  -->
    <div class="start-container block">
        <h1>Start building websites <br> people <span class="highlight">can't ignore</span></h1>

        <div class="button-container">
            <a href="pages/signin.php" class="btn-start signup-start">Sign Up</a>
            <a href="pages/about.php" class="btn-start about-start">About</a>
            
        </div>
    </div>

   

    <!-- love-container -->
    <div class="love-container">
        <h1 class="block">Loved by world-class devs</h1>
        <p class="block">Engineers all around the world reach for our Code Editor by choice.</p>
    </div>

    <div class="line-container block">
        <div class="line "></div>
    </div>
    <!-- review -->
   
    <div class="review-container">
    <div class="testimonials-wrapper">
        <div class="testimonial-box block">
          <div class="testimonial-text">"An absolute game-changer! Codverse offers a clean, distraction-free coding environment with powerful debugging tools."</div>
          <div class="testimonial-bottom">
            <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="User 1">
            <div class="testimonial-user-info">
              <div class="testimonial-name">Rohan Mehta</div>
              <div class="testimonial-role">UI/UX Designer</div>
            </div>
          </div>
        </div>
        
        <div class="testimonial-box block">
          <div class="testimonial-text">"Codverse Code Editor is a must-have for every designer working with front-end code. Its intuitive interface and smart suggestions streamline."</div>
          <div class="testimonial-bottom">
            <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="User 2">
            <div class="testimonial-user-info">
              <div class="testimonial-name">Priya Sharma</div>
              <div class="testimonial-role">Frontend Developer</div>
            </div>
          </div>
        </div>
        <div class="testimonial-box block">
          <div class="testimonial-text">"The best code editor I’ve used so far! Codverse provides seamless autocompletion, Git integration, and a blazing-fast experience."</div>
          <div class="testimonial-bottom">
            <img src="https://i.pravatar.cc/150?img=54" alt="User 2">
            <div class="testimonial-user-info">
              <div class="testimonial-name">Amit Verma </div>
              <div class="testimonial-role">Software Engineer</div>
            </div>
          </div>
        </div>
        <div class="testimonial-box block">
          <div class="testimonial-text">"Codverse is an incredible asset for full-stack development. Its lightweight yet powerful features ensure that I can efficiently manage."</div>
          <div class="testimonial-bottom">
            <img src="https://i.pravatar.cc/150?img=52" alt="User 2">
            <div class="testimonial-user-info">
              <div class="testimonial-name">Rahul Gupta </div>
              <div class="testimonial-role">Full Stack Developer</div>
            </div>
          </div>
        </div>

        <div class="testimonial-box block">
          <div class="testimonial-text">"From HTML to JavaScript, Codverse makes web development effortless. The built-in terminal and extensions make it a complete package for any developer."</div>
          <div class="testimonial-bottom">
            <img src="https://i.pravatar.cc/150?img=48" alt="User 2">
            <div class="testimonial-user-info">
              <div class="testimonial-name">Neha Reddy</div>
              <div class="testimonial-role">Web Developer</div>
            </div>
          </div>
        </div>
        <div class="testimonial-box block">
          <div class="testimonial-text">"Even as a designer, I love using Codverse for coding animations and interactions. The dark theme and smooth interface make it a pleasure to work with."</div>
          <div class="testimonial-bottom">
            <img src="https://i.pravatar.cc/150?img=42" alt="User 2">
            <div class="testimonial-user-info">
              <div class="testimonial-name">Sneha Nair</div>
              <div class="testimonial-role">Graphic Designer & Developer</div>
            </div>
          </div>
        </div>
        <div class="testimonial-box block">
          <div class="testimonial-text">"A powerful and flexible code editor! Codverse supports a vast range of extensions, making it adaptable to any project’s needs."</div>
          <div class="testimonial-bottom">
            <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="User 2">
            <div class="testimonial-user-info">
              <div class="testimonial-name">Siddharth Joshi </div>
              <div class="testimonial-role">Tech Lead</div>
            </div>
          </div>
        </div>
    
        <div class="testimonial-box block">
          <div class="testimonial-text">"Even as a backend developer, I find Codverse’s syntax highlighting, intelligent autocomplete, and debugging tools indispensable."</div>
          <div class="testimonial-bottom">
            <img src="https://i.pravatar.cc/150?img=45" alt="User 3">
            <div class="testimonial-user-info">
              <div class="testimonial-name">Meera Iyer </div>
              <div class="testimonial-role">Backend Developer</div>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div class="line-container block">
        <div class="line "></div>
    </div>
    <footer class="footer ">
        <div class="newsletter">
            <h3>Subscribe to our newsletter to stay in touch with the latest.</h3>
            <form>
                <input type="email" placeholder="Your email address">
                <button class="subscribe-btn">Subscribe</button>
            </form>
            <div class="social-icons">
                <a href="#"><img src="imges/facebook.png" alt="facebook" style="height: 30px;"></a>
                <a href="#"><img src="imges/instagram.png" alt="instagram" style="height: 35px;"></a>
                <a href="#"><img src="imges/linkedin.png" alt="linkedin" style="height: 30px;"></a>
                <a href="#"><img src="imges/twitter.png" alt="twitter" style="height: 30px;"></a>
                <a href="#"><img src="imges/github.png" alt="github" style="height: 30px;"></a>
            </div>
        </div>
        <div class="links">
            <h4>Pages</h4>
             <a href="index.php" class="home-link"><p>Home</p></a>
            <a href="pages/tutorials.php" class="home-link"><p>Toturials</p></a>
            <a href="pages/codezone.php" class="home-link"> <p>CodeZone</p></a>
            <a href="pages/about.php" class="home-link"> <p>About Us</p></a>
           
        </div>
        <div class="contact">
            <h4>Drop Us a Line</h4>
            <p><a href="mailto:inquiry@halo-lab.com">inquiry@halo-lab.com</a></p>
            <h4>Call Us</h4>
            <p><a href="tel:+12133378573">+1 (213) 337-8573</a></p>
        </div>
        <div class="support">
            <h4>Support</h4>
            <p>Help Center</p>
            <p>Community Forum</p>
            <p>Report a Problem</p>
        </div>
    </footer>
    <div class="copyright">© 2025 Your Company. All rights reserved.</div>

    


    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
</body>

</html>