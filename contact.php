<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contactStyle.css">
</head>
<body>
    <header>
        <nav class="navigation">
            <div class="dropDown">
                <div class="lines"></div>
                <div class="lines"></div>
                <div class="lines"></div>
                <div class="DDbox">
                    <a href="./Home (1).php"><div class="DDboxContent">Home</div></a>
                    <a href="./Rooms.php"><div class="DDboxContent">Rooms</div></a>
                    <a href="./galleryy.php"><div class="DDboxContent">Gallery</div></a>
                    <a href="./amenities.php"><div class="DDboxContent">Amenities</div></a>
                    <a href="./aboutus.php"><div class="DDboxContent">About</div></a>
                    <a href="./contact.php"><div class="DDboxContent">Contact</div></a>
                </div>
            </div>
            <!-- <div class="logo">
                <img src="" alt="img">
            </div> -->
            <ul>
                <li><a href="./Home (1).php">Home</a></li>
                <li><a href="./Rooms.php">Rooms</a></li>
                <li><a href="./galleryy.php">Gallery</a></li>
                <li><a href="./amenities.php">Amenities</a></li>
                <li><a href="./aboutus.php">About</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $enquiry = $_POST['enquiry'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $remark = $_POST['remark'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "1_try";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `contactus` (`enquiry`, `contact`, `email`, `remark`) VALUES ('$enquiry', '$contact', '$email', '$remark')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }

    } 
?>

        <section>
            <h1 >Contact Us</h1>     
        </section>
        <a class="BBlink" href="/Rooms.html"><div class="bookBtn">Book Now</div></a>

        <div class="details">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe  id="gmap_canvas" src="https://maps.google.com/maps?q=skit&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;}</style><a href="https://www.embedgooglemap.net">how to embed google maps</a>
                </div>
            </div>
            <div class="HCD">   <!--HCD = Hotel Contact Details-->
                <table id="table1">
                    <th colspan="3">Contact Us</th>
                    <tr>
                        <td id="imgg"><img src="./pin.png" alt=""> </td>
                        <td>ADDRESS</td>
                        <td>SKIT , CALIFORNIA</td>
                    </tr>
                    <tr>
                        <td id="imgg" ><img src="./telephone.png" alt=""> </td>
                        <td>PHONE</td>
                        <td>1234567890</td>
                    </tr>
                    <tr>
                        <td id="imgg"><img src="./gmail.png" alt=""></td>
                        <td> EMAIL</td>
                        <td><a href="">kardemail@gmail.com</a></td>
                    </tr>
                    <tr>
                        <td id="imgg"><img src="./map.png" alt=""></td>
                        <td>GPS</td>
                        <td><a href="">Get Directions</a></td>
                    </tr>
                </table>

                <table id="table2">
                    <th colspan="3">Social Media</th>
                    <tr>
                        <td><a href=""><img src="./facebook.png" alt=""> Facebook</a></td>
                        <td><a href=""><img src="./instagram.png" alt=""> Instagram</a></td>
                        <td><a href=""><img src="./twitter.png" alt=""> Twitter</a></td>
                    </tr>
                </table>
            </div>
        </div>

        <form action="/vscode/contact.php" method="post">
            <div class="formHead box" >
                <h1>Contact Form</h1>
            </div>
            <div class="query box" >
                <label for="enquiry">Submit Your Enquiry</label><br>
                <input type="text" name="enquiry" id="enquiry" placeholder="How can we help ?">
            </div>
            <div class="contact" >
                <div class="number">
                    <label for="contact">Contact Number</label><br>
                    <input type="number" name="contact" id="contact" value="">
                </div>
                <div class="email" >
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email">
                </div>
            </div>
            <div class="remark box" >
                <label for="remark">Remark</label><br>
                <input type="text" name="remark" id="remark" placeholder="Any suggestions ?">
            </div>
            <div class="submit" >
                <input type="submit" value="Submit Your Query">
            </div>
        </form>

        <div class="socials">
            <div><h1>Follow On</h1></div>
            <div class="socialLinks" id="facebook"></div>
            <div class="socialLinks" id="insta"></div>
            <div class="socialLinks" id="twitter"></div>
            <div class="socialLinks" id="linkedin"></div>
            <div class="socialLinks" id="printerest"></div>
        </div>

        <footer>
            <p>@copyright</p>
        </footer>
</body>
</html>