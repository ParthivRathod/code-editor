<?php session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="icon" href="./../imges/navlogo.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="./../css/codezone.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

     <!--footer-->
     <style>
    body{
        background-color: black;
    }
    .footer {
  background:rgb(0, 0, 0);
  padding: 40px;
  display: flex;
  justify-content: space-between;
  align-items: start;
  
  flex-wrap: wrap;
}
.newsletter {
  max-width: 400px;
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
  color: black;
  text-decoration: none;
}
.links, .contact, .support {
  max-width: 300px;
}
.contact a, .support a {
  color: white;
  text-decoration: none;
}
.support p {
  margin: 5px 0;
}
.copyright {
  text-align: center;
  padding: 20px;
  color: white;
  background:rgb(0, 0, 0);
  font-size: 14px;
}

</style>
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="./../index.php"><img src="./../imges/logo.png" alt=""></a></label>

        <!-- <input type="text" class="search_box" placeholder="Search...">
        <img src="/imges/search.png" alt="" class="search_icon"> -->

        <div class="search-container">
            <input type="text" class="search-box" placeholder="Search...">
            <i class="fas fa-search search-icon"></i>
          </div>
          

        <ul>
            <li><a class="active" href="./../index.php">Home</a></li>
            <li><a href="./../pages/codezone.php"><b>CodeZone</b></a></li>
            <li><a href="./../pages/tutorials.php">Tutorials</a></li>
            <li><a href="./../pages/about.php">About</a></li>
        </ul>
        <!-- <button class="signup_btn signin_style"><a href="" ></a>Sign Up</a></button> -->
        <div class="auth-area">
            <?php if ($username): ?>

                <a href="./../pages/logout.php" class="signup_btn">Sign Out</a>
            <?php else: ?>
                <button class="signup_btn" onclick="window.location.href='./../pages/signin.php'">Sign In</button>
            <?php endif; ?>
        </div>
    </nav>
    <div class="heading">
        <h1>Beyond the Syntax
            <span style="color: #7f5af0;">Real </span>Execution, <span style="color: #7f5af0;">Real
        </span>Results</h1>
        <p class="title">
            "Empowering developers by turning code into reality."
        </p>

    </div>
    <div class="card_container">
        <!-- card11  -->
        <div class="card block">
            <img src="./../imges/html (1).png" alt="">
            <div class="card_content">
                <h3>Forntend</h3>

                <p>Frontend development is the part of web development that focuses on creating the visual elements and
                    user interface (UI) of a website or application. </p>

                <a href="./../pages/fronted.php" class="btn">Run code</a>
            </div>
        </div>
        <!-- card1  -->
        <div class="card block">
            <img src="./../imges/html.png" alt="gym_image">
            <div class="card_content">
                <h3>HTML</h3>


                <p>Other technologies besides
                    HTML (HyperText Markup Language) is the most basic building block of the Web. It defines the meaning
                    and structure of web content.</p>


                <a href="./../pages/html.php" class="btn">Run code</a>
            </div>
        </div>

        <!-- card2  -->
        <div class="card block">
            <img src="./../imges/css-3 (1).png" alt="gym_image">
            <div class="card_content">
                <h3>CSS</h3>
                <p>CSS stands for Cascading Style Sheets. It is a stylesheet language used to style and enhance website
                    presentation.CSS is one of the main three  with HTML and JavaScript.
                </p>


                <a href="./../pages/css.php" class="btn">Run code</a>
            </div>
        </div>

        <!-- card3  -->
        <div class="card block">
            <img src="./../imges/java-script.png" alt="gym_image">
            <div class="card_content">
                <h3>java-script</h3>

                <p>JavaScript is a versatile, dynamically typed programming language used for interactive web
                    applications, </p>

                <a href="./../pages/js.php" class="btn">Run code</a>
            </div>
        </div>
        <!-- card4  -->
        <div class="card block">
            <img src="./../imges/c-.png" alt="gym_image">
            <div class="card_content">
                <h3>C++</h3>

                <p>C++ is a general-purpose, high-performance programming language created by Bjarne Stroustrup in 1979
                    at Bell Labs.</p>


                <a href="#" class="btn">Run code</a>
            </div>
        </div>

        <!-- card5  -->
        <div class="card block">
            <img src="./../imges/c-sharp.png" alt="gym_image">
            <div class="card_content">
                <h3>C#</h3>

                <p>C is a general-purpose, procedural, and imperative programming language designed by Dennis Ritchie in
                    1972 at Bell Labs.</p>


                <a href="#" class="btn">Run code</a>
            </div>
        </div>

        <!-- card6  -->
        <div class="card block">
            <img src="./../imges/letter-c.png" alt="gym_image">
            <div class="card_content">
                <h3>C</h3>

                <p>C# (pronounced C-sharp) is a modern, object-oriented, and type-safe programming language developed by
                    Microsoft as part of the .NET framework.
                </p>


                <a href="#" class="btn">Run code</a>
            </div>
        </div>

        <!-- card7  -->
        <div class="card block">
            <img src="./../imges/java.png" alt="gym_image">
            <div class="card_content">
                <h3>Java</h3>

                <p>Java is a high-level, object-oriented programming language that was created by James Gosling and Mike
                    Sheridan at Sun Microsystems in 1991 and later acquired by Oracle Corporation.</p>



                <a href="#" class="btn">Run code</a>
            </div>
        </div>

        <!-- card8  -->
        <div class="card block">
            <img src="./../imges/python.png" alt="gym_image">
            <div class="card_content">
                <h3>Python</h3>

                <p>Python is a high-level, interpreted, and dynamically typed programming language known for its
                    simplicity, readability, and versatility.</p>


                <a href="#" class="btn">Run code</a>
            </div>
        </div>
        <!-- card9  -->
        <div class="card block">
            <img src="./../imges/php.png" alt="gym_image">
            <div class="card_content">
                <h3>PHP</h3>

                <p>PHP (Hypertext Preprocessor) is a widely-used, open-source server-side scripting language designed
                    primarily for web development but also used as a general-purpose programming language.</p>


                <a href="#" class="btn">Run code</a>
            </div>
        </div>
        <!-- card10  -->
        <div class="card block">
            <img src="./../imges/sql.png">
            <div class="card_content">
                <h3>SQL</h3>

                <p>QL (Structured Query Language) is a domain-specific programming language used for managing and
                    manipulating relational databases. It is the standard language for </p>

                <a href="#" class="btn">Run code</a>
            </div>
        </div>

    </div>
       



    <div class="line-container block">
        <div class="line "></div>
    </div>
    <footer class="footer">
        <div class="newsletter">
            <h3>Subscribe to our newsletter to stay in touch with the latest.</h3>
            <form>
                <input type="email" placeholder="Your email address">
                <button class="subscribe-btn">Subscribe</button>
            </form>
            <div class="social-icons">
                <a href="#"><img src="./../imges/facebook.png" alt="facebook" style="height: 30px;"></a>
                <a href="#"><img src="./../imges/instagram.png" alt="instagram" style="height: 35px;"></a>
                <a href="#"><img src="./../imges/linkedin.png" alt="linkedin" style="height: 30px;"></a>
                <a href="#"><img src="./../imges/twitter.png" alt="twitter" style="height: 30px;"></a>
                <a href="#"><img src="./../imges/github.png" alt="github" style="height: 30px;"></a>
            </div>
        </div>
        <div class="links">
            <h4>Pages</h4>
             <a href="./../index.php"><p>Home</p></a>
            <a href="./tutorials.php"><p>Toturials</p></a>
            <a href="./codezone.php"> <p>CodeZone</p></a>
            <a href="./about.php"> <p>About Us</p></a>
           
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
    </body>
    </html>