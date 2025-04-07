
<?php session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Code Editor</title>
    <link rel="stylesheet" href="./../css/style.css">
    
    <link rel="icon" href="./../imges/navlogo.png">
    <link rel="stylesheet" href="./../css/fronted.css">
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
            <li><a href="./../pages/codezone.php">CodeZone</a></li>
            <li><a href="./../pages/tutorials.php">Tutorials</a></li>
            <li><a href="./../pages/about.php">About</a></li>
            <li><a href="./contact.php">Contact</a></li>
        </ul>
        <div class="auth-area">
            <?php if ($username): ?>

                <a href="./../pages/logout.php" class="signup_btn">Sign Out</a>
            <?php else: ?>
                <button class="signup_btn" onclick="window.location.href='./../pages/signin.php'">Sign In</button>
            <?php endif; ?>
        </div>
    </nav>
    
    <center>
    <h2>CODE VERSE <img src="./../imges/startup (1).png " style="height: 30px;"></h2>
    <div class="editor-container">
      <div class="editor-labels">
          <span >  <img src="./../imges/html-5.png" style="height: 20px;"> HTML </span>
          <span class="css">  <img src="./../imges/css-3.png" style="height: 20px;">CSS</span>
          <span class="js">  <img src="./../imges/js.png" style="height: 20px; border-radius:5px;">&nbsp;JS</span>
          
    </div>
    <div class="editor">
  
        <textarea id="html"  placeholder="Write HTML here"></textarea>
      
        <textarea id="css" placeholder="Write CSS here"></textarea>
    
        <textarea id="js" placeholder="Write JavaScript here"></textarea>
       
        </div>
        <button class="refresh-btn" onclick="updateOutput()">Update & Run</button>
    </div>
    <div class="output-container">
        <div class="output-placeholder">Output Preview</div>
        <iframe id="output"></iframe>
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
    
    <script>
        function updateOutput() {
            const html = document.getElementById("html").value;
            const css = `<style>${document.getElementById("css").value}</style>`;
            const js = `<script>${document.getElementById("js").value}\x3C/script>`; 
            const iframe = document.getElementById("output").contentWindow.document;
            iframe.open();
            iframe.write(`${html}${css}${js}`);
            iframe.close();
        }
    </script>
    </center>
</body>
</html>