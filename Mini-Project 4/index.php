
<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($server, $username, $password);

if(!$conn){
    die("connection to this database is failed due to ".mysqli_connect_error());
}
// echo "Successfully submitted";

$name = $_POST['name'];
$email = $_POST['email'];
$sub = $_POST['sub'];
$msg = $_POST['msg'];
$sql = "INSERT INTO `music_melody`.`music` (`Name`, `Email`, `Subject`, `Message`, `Dt`) VALUES ('$name', '$email', '$sub', '$msg', current_timestamp());";
// echo "Successfully inserted" ;


if($conn->query($sql) == true){
    // echo "Successfully inserted";
}
else
    echo "ERROR: $sql <br> $conn->error";

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    
  </head>
  <style>
      .container {
      display: grid;
      grid-template-areas:
        "navbar navbar navbar navbar"
        "section section section section";
    }
    nav {
      grid-area: navbar;
    }
    body {
      height: 100%;
      background-image: url("images/project1.png");
      background-repeat: no-repeat;
      background-position: auto;
      background-size: cover;
    }
    .navbar {
      display: flex;
      margin: 0 auto;
      padding: 10px 23px;
      text-align: center;
    }
    .navbar span a {
      font-size: 2rem;
      text-decoration: none;
      color: rgb(255, 255, 255);
      display: block;
      padding: 5px 30px;
      border-radius: 30px;
    }
    .navbar span a:hover {
      font-size: 2rem;
      text-decoration: none;
      color: rgb(0, 0, 0);
      background-color: rgb(255, 255, 255);
      display: block;
      padding: 5px 30px;
      border-radius: 30px;
    }
      body {
         font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen,
         Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
         margin: 30px 30px;
         font-size: medium;
         padding: 8px;
         line-height: normal;
      }
     
     h2,h3 {
        display: block;
      color: white;
      font-size: 2rem;
      text-align: left;
      padding: 10px 10px;
      margin: 15px 15px;
      }
      
      p {
      display: block;
      color: white;
      font-size: 2rem;
      text-align: left;
      
    }
     input[type="text"],
     input[type="email"],
     select,
     textarea {
       width: 90%;
       padding: 8px;
       border: solid rgp(135, 164, 167);
       border-radius: 4px;
       margin: 8px;
     }
       input[type="submit"]:hover {
        background-color: rgb(14, 164, 201);  
        }
        .btn {
          padding: 6px 20px;
          border: 2px solid white;
          border-radius: 10px;
          background-color: whitesmoke;
          color: black;
          font-size: 1.5rem;
          z-index: -1;
          margin: 15px;
          cursor: pointer;
        }
        #btn:hover {
          color: rgba(12, 12, 12, 0.829);
          background-color: rgba(245, 247, 244, 0.74);
          display: block;
          padding: 6px 20px;
          border-radius: 20px;
          text-decoration: none;
          font-family: "Cormorant Garamond", serif;
          font-family: "Zen Antique Soft", serif;
        }
</style>
  <body> 
    <section class="container">
        <nav class="navbar">
          <span class="items"><a href="index.html">Home</a></span>
          <span class="items"><a href="page2i.html">Instruments</a></span>
          <span class="items"><a href="page3a.html">About Us</a></span>
          <span class="items"><a href="page4s.html">Sources</a></span>
          <span class="items"><a href="page5c.html">Contact Us</a></span>
        </nav>
        <div>
    <form class="cform" action="index.php" method="post">
    <h2> Contact Form</h2>
    <h3>Please fill all the texts in the field</h3>
    
     <div>
        <p>
          Your Name:<br /><input type="text" name="name" id="name" required/>
        </p>
        <p>
          Your Email:<br><input type="email" name="email" id="email" required>
        </p>
        <p>
          Subject:<br><input type="text" name="sub" id="sub" required>
        </p>
        <p>
          Your Message:<br><textarea name="msg" id="msg" cols="75" rows="8" required></textarea></p>
        </p>a
       
        <p>
            <button class="btn" id="btn">Send</button>
        </p>
      </div>
    </form>
  </body>
</html>

