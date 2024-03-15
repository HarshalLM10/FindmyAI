
<?php
$insert = false;
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "findmyai";  // Replace with your actual database name

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("Connection to this database failed due to " . mysqli_connect_error());
    }

    // Select the database
    if (!mysqli_select_db($con, $dbname)) {
        die("Database selection failed: " . mysqli_error($con));
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback_desc = $_POST['desc'];  // Change 'desc' to 'feedback_desc' or any suitable name

    $sql = "INSERT INTO feedback (`Name`, `email`, `feedback`, `Timestam`) VALUES ('$name', '$email', '$feedback_desc', current_timestamp())";

    if ($con->query($sql) == true) {
        $insert = true;
    } else {
        // Handle the error if needed
    }

    $con->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css"
    integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Suggestions </title>
    <style> 
    body{
        background-color: black;
        color: white;
    }
    .bn {
        height: 100vh; 
        width: 100%; 
        margin-bottom : 30px;
    }
    h1{
        color: white;
        text-align: center;
        padding-top: 50px;
    }
    .Submitmsg{
    color: white;
    font-size: 25px;
}
    </style>
</head>
<body>
<?php
                if ($insert == true){
                echo "<p class='Submitmsg'>Thanks for yoyr valuable feedback.</p>";
                }
        ?>
    <div class="container-fluid bn">
        <div class="container text-center mx-auto" id="otherpageh2">
            <h2>Feedback </h2>
          </div><br>
        <div class="container su">

            
          <form action="Feedback.php" method="post" id="feedbackForm">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Feedback"></textarea>
            <button type="submit" class="btn" >Submit</button>
        </form>
        </div>
    </div>


    <hr>
    <!-- ------------------Footer----------- -->

  <div class="footer">
    <div class="containerz">
        <div class="rowk">
            <div class="footer-col-1">
                <h3> Download our app</h3>
                <p>Download our app for android and ios mobile phone</p>
                <div class="app-logo">
                    <img src="pics/play-store.png" >
                </div>
            </div>
            <div class="footer-col-2">
                <img src="pics/" >
                <p>Our purpose is to sustainably make the pleasure and benefits of sports accessible to many.</p>
            </div>
            <div class="footer-col-3">
                <h3> Useful links</h3>
                <ul>
                    <li>Copouns</li>
                    <li>Blog post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>                        
                </ul>
            </div>
            <div class="footer-col-4">
                <h3> Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>instagram</li>
                    <li>Youtube</li>                        
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright"> Copyright 2023 - Harshal</p>
    </div>
 </div>


 <script src="https://www.gstatic.com/firebasejs/9.3.1/firebase-app.js"></script>
 <script src="https://www.gstatic.com/firebasejs/9.3.1/firebase-database.js"></script>
 <script src="mail.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>


</body>
</html>