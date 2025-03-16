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
        <div class="card">
            <img src="./../imges/html (1).png" alt="">
            <div class="card_content">
                <h3>Forntend</h3>

                <p>Frontend development is the part of web development that focuses on creating the visual elements and
                    user interface (UI) of a website or application. </p>

                <a href="./../pages/fronted.php" class="btn">Run code</a>
            </div>
        </div>
        <!-- card1  -->
        <div class="card">
            <img src="./../imges/html.png" alt="gym_image">
            <div class="card_content">
                <h3>HTML</h3>


                <p>Other technologies besides
                    HTML (HyperText Markup Language) is the most basic building block of the Web. It defines the meaning
                    and structure of web content.</p>


                <a href="https://youtu.be/d7ec5Xv_o2w?si=4yuOgfdlUzijFMcC" class="btn">Run code</a>
            </div>
        </div>

        <!-- card2  -->
        <div class="card">
            <img src="./../imges/css-3 (1).png" alt="gym_image">
            <div class="card_content">
                <h3>CSS</h3>
                <p>CSS stands for Cascading Style Sheets. It is a stylesheet language used to style and enhance website
                    presentation.CSS is one of the main three  with HTML and JavaScript.
                </p>


                <a href="#" class="btn">Run code</a>
            </div>
        </div>

        <!-- card3  -->
        <div class="card">
            <img src="./../imges/java-script.png" alt="gym_image">
            <div class="card_content">
                <h3>java-script</h3>

                <p>JavaScript is a versatile, dynamically typed programming language used for interactive web
                    applications, </p>

                <a href="#" class="btn">Run code</a>
            </div>
        </div>
        <!-- card4  -->
        <div class="card">
            <img src="./../imges/c-.png" alt="gym_image">
            <div class="card_content">
                <h3>C++</h3>

                <p>C++ is a general-purpose, high-performance programming language created by Bjarne Stroustrup in 1979
                    at Bell Labs.</p>


                <a href="#" class="btn">Run code</a>
            </div>
        </div>

        <!-- card5  -->
        <div class="card">
            <img src="./../imges/c-sharp.png" alt="gym_image">
            <div class="card_content">
                <h3>C#</h3>

                <p>C is a general-purpose, procedural, and imperative programming language designed by Dennis Ritchie in
                    1972 at Bell Labs.</p>


                <a href="#" class="btn">Run code</a>
            </div>
        </div>

        <!-- card6  -->
        <div class="card">
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
        <div class="card">
            <img src="./../imges/java.png" alt="gym_image">
            <div class="card_content">
                <h3>Java</h3>

                <p>Java is a high-level, object-oriented programming language that was created by James Gosling and Mike
                    Sheridan at Sun Microsystems in 1991 and later acquired by Oracle Corporation.</p>



                <a href="#" class="btn">Run code</a>
            </div>
        </div>

        <!-- card8  -->
        <div class="card">
            <img src="./../imges/python.png" alt="gym_image">
            <div class="card_content">
                <h3>Python</h3>

                <p>Python is a high-level, interpreted, and dynamically typed programming language known for its
                    simplicity, readability, and versatility.</p>


                <a href="#" class="btn">Run code</a>
            </div>
        </div>
        <!-- card9  -->
        <div class="card">
            <img src="./../imges/php.png" alt="gym_image">
            <div class="card_content">
                <h3>PHP</h3>

                <p>PHP (Hypertext Preprocessor) is a widely-used, open-source server-side scripting language designed
                    primarily for web development but also used as a general-purpose programming language.</p>


                <a href="#" class="btn">Run code</a>
            </div>
        </div>
        <!-- card10  -->
        <div class="card">
            <img src="./../imges/sql.png">
            <div class="card_content">
                <h3>SQL</h3>

                <p>QL (Structured Query Language) is a domain-specific programming language used for managing and
                    manipulating relational databases. It is the standard language for </p>

                <a href="#" class="btn">Run code</a>
            </div>
        </div>

    </div>




    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Your Company. All rights reserved.</p>
            <p>
                <a href="contract .html" class="text-white mx-2">Privacy Policy</a> |
                <a href="contract .html" class="text-white mx-2">Terms & Conditions</a> |
                <a href="contract .html" class="text-white mx-2">Contact Us</a>
            </p>

        </div>
    </footer>
    </body>
    </html>