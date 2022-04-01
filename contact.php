<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="htmlform";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully";
$fnm=$_POST['firstname'];
$lnm=$_POST['lastname'];
$eml=$_POST['email'];
$pws=$_POST['psw'];
$rept=$_POST['psw_repeat'];
$rolment=$_POST['rol'];
$dept=$_POST['depart'];
$mssa=$_POST['mess'];

 $sql="INSERT INTO userdata (fname,lname,email,passwords,	reppassword,rol,department,	messages)
 VALUES ($fnm,$lnm,$eml,$pws,$rept,$rolment,$dept,$mssa)";
 $rs = mysqli_query($conn, $sql);
 if(!$rs)
 echo "data not inserted correctly";
 else {
     echo "one row is affected";
 }
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="htmlform";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());

}
echo "Connected successfully";
$fnm=$_POST['firstname'];
$lnm=$_POST['lastname'];
$eml=$_POST['email'];
$pws=$_POST['psw'];
$rept=$_POST['psw_repeat'];
$rolment=$_POST['rol'];
$dept=$_POST['depart'];
$mssa=$_POST['mess'];

 $sql="INSERT INTO userdata (fname,lname,email,passwords,	reppassword,rol,department,	messages)
 VALUES ($fnm,$lnm,$eml,$pws,$rept,$rolment,$dept,$mssa)";
 $rs = mysqli_query($sql,$conn);
 if(!$rs)
 echo "data not inserted correctly";
 else {
     echo "one row is affected";
 }
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My contact</title>

        <link rel="stylesheet" type="text/css" href="contactcss.css">
        <link rel="stylesheet" type="text/css" href="serv.css">
        <script type="javascript">

        </script>
    </head>

    <body >
        <section>
        <nav class="nav">

            <ul>
                <li><a class="active" href="Home.html">home</a></li>
                <li><a class="active" href="about.html">About</a></li>
                <li><a href="Hero.html">Hero</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="projects.html">projects</a></li>
                <li><a href="services.html">Service</a></li>
            </ul>
            <a href="#" class="btn">subscribe</a>
        </nav>
        <div class="contact-title">
            <h1>hello</h1>
            <h2>I'am always ready to serve you!</h2>
        </div>
        <hr>
        </section>
        <section class=" formsection">
        <h3 id="h3">Contact Me</h3>

        <div class="container">
            <form method="POST" action="" name="myfor" id="form" onsubmit="validat()">
                <label>First Name :</label><br>
                <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

                <label>Last Name :</label><br>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>
                <label for="email">Email :</label><br>
                <input type="text" placeholder="Enter Email" name="email" id="email" required><br>

                <label>Password :</label><br>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br>

                <label>Repeat Password :</label><br>
                <input type="password" placeholder="Repeat Password" name="psw_repeat" id="pswrepeat" required><br>
                <label>Role:</label><br>
                <input type="radio" value="admin" name="rol"> andmin &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="radio" value="user" name="rol">user <br>
                <label>Department :</label><br>
                <select id="depart" name="depart">
		  <option value="software">software</option>
		  <option value="cs">cs</option>
		  <option value="Is" selected="selected">Is</option>
		  <option value="It">It</option>
		  
		</select><br>

                <label>message :</label><br>
                <textarea id="subject" name="subject" placeholder="Write something.." rows="5"></textarea><br>

                <input type="submit" value="Submit" class="registrationbtn">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <input type="submit" value="reset" class="resetbtn">
            </form>
        </div>
        </section>
        <section class =" icons">
        <a href="#" class="fa fa-facebook"><img src="../photo/other/facebook.jpg" alt=""></a>
        <a href="#" class="fa fa-imo"></a><img src="../photo/other/facebook.jpg" alt=""></a>
        <a href="#" class="fa fa-youtube"></a><img src="../photo/other/youtube.jpg" alt=""></a>
        <a href="#" class="fa fa-twiter"></a><img src="../photo/other/twiter.jpg" alt=""></a>
        <a href="#" class="fa fa-phone"></a><img src="../photo/other/facebook.jpg" alt=""></a>
        <a href="#" class="fa fa-telegram"></a><img src="../photo/other/telegram.jpg" alt=""></a>
        </section>
    </body>

    </html>