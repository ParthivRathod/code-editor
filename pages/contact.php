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
        <label class="logo"><a href="./../index.php"><img src="./../imges/logo.png" alt=""></a></label>

        <!-- <input type="text" class="search_box" placeholder="Search...">
        <img src="/imges/search.png" alt="" class="search_icon"> -->

        <div class="search-container">
            <input type="text" class="search-box" placeholder="Search...">
            <i class="fas fa-search search-icon"></i>
          </div>
          

        <ul>
            <li><a class="active" href="./../index.php">Home</a></li>
            <li><a href="./codezone.php">CodeZone</a></li>
            <li><a href="./tutorials.php">Tutorials</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./contact.php"><b>Contact</b></a></li>
        </ul>
        <div class="auth-area">
            <?php if ($username): ?>

                <a href="./../pages/logout.php" class="signup_btn">Sign Out</a>
            <?php else: ?>
                <button class="signup_btn" onclick="window.location.href='./../pages/signin.php'">Sign In</button>
            <?php endif; ?>
        </div>
    </nav>

    <div class="containerpara">

        <h2 class="contactus block">Contact Us</h2> <hr>

     <div class="card-container block">
     <div class="contact-card">
            <img class="contactimg" src="./../imges/user.png" alt="contact">
            <p class="contact-card-data">Akshay Meshram<br>Student</p>
            <div class='user-social'>
                <a href="https://www.linkedin.com/in/akshay-meshram-016808271/"> <img src="./../imges/linkedin.png" alt="LinkedIn"></a>
                 <a href="https://www.instagram.com/"> <img src="./../imges/instagram.png" alt="Instagram"></a>
         <a href="https://www.facebook.com/"><img src="./../imges/facebook.png" alt="Facebook"></a>
               </div>
        </div>
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
        

    </div>


    <div class="containerpara">
        <h2 class="subheading">🙎‍♂️ Member Details </h2> <hr>
    <p class="para-content">Project Overview: <br>
        The team is developing a web-based code compiler that allows users to write and execute HTML, CSS, and JavaScript code in real time. The compiler will provide a live preview of the output, enabling users to test and refine their code interactively.</p>
    <p class="para-content"> Parthiv Rathod, Govind Jadhav, Shubham Bhavanipethkar, Gaurav Putale, and Akshay Meshram are worked on a code compiler for HTML, CSS, and JavaScript and Many more. We all collaborated on different parts together.🚀</p></div>
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
             <a href="./../index.php" class="home-link"><p>Home</p></a>
            <a href="./tutorials.php" class="home-link"><p>Toturials</p></a>
            <a href="./codezone.php" class="home-link"> <p>CodeZone</p></a>
            <a href="./about.php" class="home-link"> <p>About Us</p></a>
           
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