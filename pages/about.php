<?php session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="./../css/style.css">
    <link rel="stylesheet" href="./../css/about.css">
    <link rel="icon" href="./../imges/navlogo.png">
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
            <li><a href="./../pages/codezone.html">CodeZone</a></li>
            <li><a href="./../pages/tutorials.html">Tutorials</a></li>
            <li><a href="./../pages/about.html"><b>About</b></a></li>
        </ul>
        <div class="auth-area">
            <?php if ($username): ?>

                <a href="./../pages/logout.php" class="signup_btn">Sign Out</a>
            <?php else: ?>
                <button class="signup_btn" onclick="window.location.href='./../pages/signin.php'">Sign In</button>
            <?php endif; ?>
        </div>
    </nav>
    <div class="content block">
        <h1 class="heading">About Us</h1>
        <div class="containerpara">
            <h2 class="subheading">About CodeVerse</h2> <hr>
        <p class="aboutcodeversapara">Welcome to CodeVerse, CodeVerse is an open-source, cloud-based coding platform that enables developers to write, execute, and test code in multiple programming languages—all within a powerful and user-friendly interface. Built for learners, hobbyists, and professionals, CodeVersa serves as a comprehensive hub for coding, debugging, and collaboration.the ultimate open-source coding platform where you can write, execute, and explore code seamlessly. Whether you're a beginner learning the basics or an experienced developer working on advanced projects, CodeVersa provides a robust environment to bring your ideas to life.</p></div>

        
       <div class="containerpara"><h2 class="subheading" >Why CodeVerse?</h2> <hr><li class="para-content" style="color:rgb(64, 224, 109)">Write & Execute Code Instantly: Run your code in multiple programming languages without any setup.</li>

        <li class="para-content" style="color:violet">Open-Source & Community-Driven: Contribute, collaborate, and improve CodeVersa with the power of open-source development.</li>

        <li class="para-content" style="color:tomato">Interactive Tutorials & Learning Hub: Access high-quality tutorials and coding guides to level up your skills.</li>

        <li class="para-content" style="color:tan">Seamless Collaboration: Share your code, work on projects together, and build innovative solutions.</li></div>


       
        <div class="containerpara">
            <h2 class="subheading">🚀 Key Features</h2> <hr>
        <p style="font-size: 20px; color: white; margin-left: 50px;">🖥️ Multi-Language Support</p>
        <p class="para-content">CodeVerse provides an execution environment for multiple programming languages, including:</p>

        <li class="para-content"> <img src="./../imges/python.png" alt="pythonimg" height="20px"> Python (for data science, automation, AI/ML)</li>

        <li class="para-content"><img src="./../imges/java-script.png" alt="jsimg" height="20px">
            JavaScript & 
            <img src="./../imges/typescript.png" alt="tsimg" height="20px">
            TypeScript (for web development and Node.js applications)</li>

        <li class="para-content"><img src="./../imges/c-.png" alt="pythonimg" height="20px">
             C,<img src="./../imges/c-sharp.png" alt="pythonimg" height="20px">C++,
             <img src="./../imges/java.png" alt="pythonimg" height="20px">
             Java (for competitive programming and software development)</li>

        <li class="para-content"><img src="./../imges/swift.png" alt="pythonimg" height="20px">
            Swift,<img src="./../imges/rust.png" alt="pythonimg" height="20px">
             Rust (for high-performance applications)</li>

        <li class="para-content"><img src="./../imges/sql-server.png" alt="pythonimg" height="20px">
            SQL (for database management and queries)</li>

        <li class="para-content"><img src="./../imges/shellscripting.png" alt="" height="20px">Shell Scripting &<img src="./../imges/devops.png" alt="pythonimg" height="20px"> DevOps Tools (for automation and cloud computing)</li></div>

        
        <div class="containerpara">
            <h2 class="subheading">🔥 Our Mission</h2> <hr>
        <p class="para-content">At CodeVerse, we aim to democratize coding by providing an open, scalable, and efficient coding environment for everyone—from students to professionals. <br> Our mission is to:</p>
        <p class="para-content">✅ Make coding accessible and barrier-free <br> ✅ Provide an all-in-one development and learning ecosystem <br> ✅ Empower developers with cutting-edge tools for innovation</p></div>
    </div>

    <div class="containerpara">

        <h2 class="contactus block">Contact Us</h2> <hr>

     <div class="card-container block">

        <div class="contact-card">
            <img class="contactimg" src="./../imges/user.png" alt="contact">
            <p class="contact-card-data">Parthiv Rathod<br>Student</p>
            <div class='user-social'>
                <a href="https://www.linkedin.com/in/parthiv-rathod-78a5522b4/"> <img src="./../imges/linkedin.png" alt="LinkedIn"></a>
                 <a href="https://www.instagram.com/"> <img src="./../imges/instagram.png" alt="Instagram"></a>
         <a href="https://www.facebook.com/"><img src="./../imges/facebook.png" alt="Facebook"></a>
               </div>
        </div>

        <div class="contact-card">
            <img class="contactimg" src="./../imges/user.png" alt="contact">
            <p class="contact-card-data">Govind Jadhav<br>Student</p>
            <div class='user-social'>
                <a href="https://www.linkedin.com/in/govind-jadhav-561235235/"> <img src="./../imges/linkedin.png" alt="LinkedIn"></a>
                 <a href="https://www.instagram.com/"> <img src="./../imges/instagram.png" alt="Instagram"></a>
         <a href="https://www.facebook.com/"><img src="./../imges/facebook.png" alt="Facebook"></a>
               </div>
        </div>
        <div class="contact-card">
            <img class="contactimg" src="./../imges/user.png" alt="contact">
            <p class="contact-card-data">Shubham Bhavanipethkar<br>Student</p>
            <div class='user-social'>
                <a href="https://www.linkedin.com/in/shubham-bhavanipethkar-b9a06a217/"> <img src="./../imges/linkedin.png" alt="LinkedIn"></a>
                 <a href="https://www.instagram.com/"> <img src="./../imges/instagram.png" alt="Instagram"></a>
         <a href="https://www.facebook.com/"><img src="./../imges/facebook.png" alt="Facebook"></a>
               </div>
        </div>
        <div class="contact-card">
            <img class="contactimg" src="./../imges/user.png" alt="contact">
            <p class="contact-card-data">Gaurav Putale<br>Student</p>
            <div class='user-social'>
                <a href="https://www.linkedin.com/in/gaurav-putale-70a984252/"> <img src="./../imges/linkedin.png" alt="LinkedIn"></a>
                 <a href="https://www.instagram.com/"> <img src="./../imges/instagram.png" alt="Instagram"></a>
         <a href="https://www.facebook.com/"><img src="./../imges/facebook.png" alt="Facebook"></a>
               </div>
        </div>
        <div class="contact-card">
            <img class="contactimg" src="./../imges/user.png" alt="contact">
            <p class="contact-card-data">Akshay Meshram<br>Student</p>
            <div class='user-social'>
                <a href="https://www.linkedin.com/in/akshay-meshram-016808271/"> <img src="./../imges/linkedin.png" alt="LinkedIn"></a>
                 <a href="https://www.instagram.com/"> <img src="./../imges/instagram.png" alt="Instagram"></a>
         <a href="https://www.facebook.com/"><img src="./../imges/facebook.png" alt="Facebook"></a>
               </div>
        </div>

    </div>







    <div class="containerpara">
        <h2 class="subheading">🙎‍♂️ Member Details </h2> <hr>
    <p class="para-content">Project Overview: <br>
        The team is developing a web-based code compiler that allows users to write and execute HTML, CSS, and JavaScript code in real time. The compiler will provide a live preview of the output, enabling users to test and refine their code interactively.</p>
    <p class="para-content"> Parthiv Rathod, Govind Jadhav, Shubham Bhavanipethkar, Gaurav Putale, and Akshay Meshram are worked on a code compiler for HTML, CSS, and JavaScript and Many more. We all collaborated on different parts together.🚀</p></div>
</div>


    
    <!-- <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Your Company. All rights reserved.</p>
            <p>
                <a href="contract .html" class="text-white mx-2">Privacy Policy</a> |
                <a href="contract .html" class="text-white mx-2">Terms & Conditions</a> |
                <a href="contract .html" class="text-white mx-2">Contact Us</a>
            </p>
        </div>
    </footer> -->
</body>
</html>