<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homeStyle.css">
</head>

<body>

    <div id="bodyy">
        <header>
        <nav class="navigation">
            <div class="dropDown">
                <div class="lines"></div>
                <div class="lines"></div>
                <div class="lines"></div>
                <div class="DDbox">
                    <a href="./Home (1).php">
                        <div class="DDboxContent">Home</div>
                    </a>
                    <a href="./Rooms.php">
                        <div class="DDboxContent">Rooms</div>
                    </a>
                    <a href="./galleryy.php">
                        <div class="DDboxContent">Gallery</div>
                    </a>
                    <a href="./amenities.php">
                        <div class="DDboxContent">Amenities</div>
                    </a>
                    <a href="./aboutus.php">
                        <div class="DDboxContent">About</div>
                    </a>
                    <a href="./contact.php">
                        <div class="DDboxContent">Contact</div>
                    </a>
                </div>
            </div>
            <!-- <div class="logo">
                <img src="bliss logo.png" alt="img">
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
            $Name = $_POST['Name'];
            $Mobile = $_POST['Mobile'];
            $Email = $_POST['Email'];
            $indate = $_POST['indate'];
            $outdate = $_POST['outdate'];
            $room = $_POST['room'];
            $noofroom = $_POST['noofroom'];
            $noofguest = $_POST['noofguest'];
            $aadhar = $_POST['aadhar'];
            
          
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
            $sql = "INSERT INTO `booking` (`Name`, `Mobile`, `Email`, `indate`, `outdate`, `room`, `noofroom`, `noofguest`, `aadhar`) VALUES ('$Name', '$Mobile', '$Email', '$indate','$outdate', '$room', '$noofroom', '$noofguest','$aadhar')";
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
            <h1>HOTEL BLISS</h1>
            <p>Welcome to Hotel Bliss
                we take immense pleasure in providing comfortable stay to all our guests. whether you are looking for
                midscale business or leisure time with
                family,social events, corporate function or business conference, we with our 60 elegant, spacious and
                thoughtfully designed rooms, 2 restaurants and
                2 banquet halls offer a wide array of options at best value of your money.
            </p>
        </section>
        <!-- <a class="BBlink" href="/Rooms.html">
            <div class="bookBtn">Book Now</div>
        </a> -->
    </header>
    <div id="booking">
        <div class="box" id="checkin">
            <label for="">Check In</label><br>
            <input type="date" id="datein" placeholder="dd/mm/yyyy">
        </div>
        <div class="box" id="checkout">
            <label for="">Check Out</label><br>
            <input type="date" id="dateout" placeholder="dd/mm/yyyy">
        </div>
        <div class="box" id="rooms">
            <label for="">Rooms</label><br>
            <select name="" id="typeroom">
                <option value="Delux-Room" >Delux room</option>
                <option value="Super-Delux-Room">Super-Delux room</option>
                <option value="Suite Room" >Suite room</option>
                <option value="Staycation room">Staycation room</option>
                <option value="Plunge Pool room" >Plunge Pool room</option>
                <option value="Delux  twin  room">Delux  twin  room</option>
            </select>
        </div>
        <div class="box" id="guests">
            <label for="">Guests</label> <br>
            <input type="number" id="nguest">
        </div>
       <!--  <div class="box" id="no.ofrooms">
            <label for="">No.Of Rooms</label> <br>
            <input type="number" id="rooms">
        </div> -->
        <div class="box" id="availability">
            <input type="button" name="Book Now" id="book" value="Book Now">
        </div>
    </div>


    <div class="services">
        <div id="serviceHead">
            <h4>UNWIND SERVICES</h4>
            <h1>Explore Our Hotel Services</h1>
        </div>
        <div id="service">
            <div class="box">
                <img class="serviceSign" src="./wifi.png" alt="">
                <h3>Free Wifi</h3>
            </div>
            <div class="box">
                <img class="serviceSign" src="./booking.png" alt="">
                <h3>Easy Booking</h3>
            </div>
            <div class="box">
                <img class="serviceSign" src="./cooking.png" alt="">
                <h3>Restaurant</h3>
            </div>
            <div class="box">
                <img class="serviceSign" src="./swimming-pool.png" alt="">
                <h3>Swimming Pool</h3>
            </div>
            <div class="box">
                <img class="serviceSign" src="./peeling.png" alt="">
                <h3>Beauty & Health</h3>
            </div>
            <div class="box">
                <img class="serviceSign" src="./help-desk.png" alt="">
                <h3>Help & Support</h3>
            </div>
        </div>
    </div>


    <div class="roomBox">
        <div class="roomHead">
            <h3>OUR ROOMS</h3>
            <h1>Featured Rooms</h1>
        </div>
        <div class="roomSlide">
            <div class="rooms">
                <div class="roomTypes">
                    <h1>Suite Room</h1>
                    <p>A living room connected with one or two more bedroom and a separate living area.It is an apartment made up of connected rooms.
                    </p>
                    <img src="./suite-room.webp" alt="">
                    <h3>1000rs/Night</h3>
                    <input type="button" value="Book Now">
                </div>
                <div class="roomTypes" id="famroom">
                    <h1>Family Room</h1>
                    <p>Family Rooms are a space to both gather in large groups and relax individually,layout,furniture options need to have good variety</p>
                    <img src="./family-room.webp" alt="">
                    <h3>1000rs/Night</h3>
                    <input type="button" value="Book Now">
                </div>
                <div class="roomTypes">
                    <h1>Delux Room</h1>
                    <p>Deluxe rooms with sofa bed, are totally soundproofed and equipped with tech comforts high speed internet access,room cleaning touch system</p>
                    <img src="./delux-room.webp" alt="">
                    <h3>1000rs/Night</h3>
                    <input type="button" value="Book Now">
                </div>
            </div>
        </div>
        <div class="explore">
            <div class="exploreTxt">
                <h1>Find The Best Room Of Your Choice</h1>
            </div>
            <div>
                <a href="/Rooms.html"><input type="button" value="Explore More"></a>
            </div>
        </div>
    </div>

    <div class="hotelVideo">
        <iframe style="width:100%; height:100%;" src="https://www.youtube.com/embed/SE5FDKnafy8"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
        <!-- <h1>This is a video</h1> -->
    </div>

    <div class="guestReview">
        <div class="reviewHead">
            <h3>Testimonial</h3>
            <h1>Happy Guests</h1>
        </div>
        <div class="guestSlide">
            <div class="review">
                <div class="persons">
                    <div class="img">
                        <img src="https://www.freeiconspng.com/thumbs/person-icon/name-people-person-user-icon--icon-search-engine-1.png"
                            alt="img" height="50px" width="50px">
                    </div>
                    <h2>Karan Patel</h2>
                    <p>Its a very nice and clean hotel.Location was beautiful and view from room is too good.Service is
                        excellent. All the staff are professional and served us very well.</p>
                </div>
                <div class="persons">
                    <div class="img">
                        <img src="https://www.freeiconspng.com/thumbs/person-icon/name-people-person-user-icon--icon-search-engine-1.png"
                            alt="img" height="50px" width=50px">
                    </div>
                    <h2>Zoya Oberoi</h2>
                    <p>The service is exceptional. The rooms aree beautiful and clean. They are genuinely care about the
                        quality of their customer,service ,food ,rooms,everything.</p>
                </div>
                <div class="persons">
                    <div class="img">
                        <img src="https://www.freeiconspng.com/thumbs/person-icon/name-people-person-user-icon--icon-search-engine-1.png"
                            alt="img" height="50px" width="50px">
                    </div>
                    <h2>Manik Malhotra</h2>
                    <p>This is the best hotel I have ever stayed.The Locationis fantastic. The staff are so friendly and
                        always attentive.services is excellent.</p>
                </div>
            </div>
        </div>

        <div class="about">
            <h1>About us</h1>
            <p>Three star Hotel offers a full variety of distinct services and amenities to meet your needs as you
                travel on business or leisure so you can feel at Home. India has a history of hospitality that spans
                over 5,000 years. A people that have for millennia understood the honor of having a guest in the house.
                The responsibility of making sure the guest is treated better than they would treat themselves.</p>
            <a href="/aboutus.html"><input type="button" value="Know More"></a>
        </div>
        <div class="socials">
            <div>
                <h1>Follow On</h1>
            </div>
            <div class="socialLinks" id="facebook"></div>
            <div class="socialLinks" id="insta"></div>
            <div class="socialLinks" id="twitter"></div>
            <div class="socialLinks" id="linkedin"></div>
            <div class="socialLinks" id="printerest"></div>
        </div>

    </div>

    <footer>
        <p>@copyright</p>
    </footer>
    </div>
    



    <form action="/vscode/Home (1).php" method="post" id="formm" onsubmit="return validateform()" name = "myform">
       <center> <table s align="center" cellpadding="10" cellspacing="0" bordercolor="black" width="80%" >
            <caption><b>
                    <font size="5">REGISTRATION APPLICATION FORM FOR HOTEL BOOKING</font>
                </b></caption>
            <tr>
                <th colspan="2" bgcolor="black" align="center">
                    <font color="white"> Registration Form</font>
                </th>
            </tr>

            <tr>

                <td>Applicant's full name </td>
                <td><select>
                        <option>--select--</option>
                        <option>Mr.</option>
                        <option>Ms.</option>
                    </select><input type="text" name="Name" id="Name" value=""></td>
            </tr>
            <tr>

                <td>Mobile Number</td>
                <td><input type="number" name="Mobile" id="Mobile" required></td>
            </tr>
            <tr>

                <td>Email ID</td>
                <td><input type="mail" name="Email" id="Email" required></td>
            </tr>
            <tr>

                <td> Check-In</td>
                <td><input type="date" name="indate" id="indate" value=""></td>
            </tr>
            <tr>

                <td>Check-Out</td>
                <td><input type="date" name="outdate" id="outdate" value=""></td>
            </tr>
            <tr>

                <td>Rooms</td>
                <td>
                    <input type="text" name="room" id="room">
                </td>
                
            </tr>
            <tr>
                <td>No. of Rooms</td>
                <td><input type="number" name="noofroom" id="noofroom"></td>
            </tr>
            <tr>

                <td>No. of Guests</td>
                <td><input type="number" name="noofguest" id="noofguest"></td>
                
            </tr>
            <tr>
                <td>Aadhar Card Number</td>
                <td><input type="number" name="aadhar" id="aadhar"></td>
            </tr>
           <!--  <tr>
                <td>showL</td>
                <td><input type="button" name="show" id="show">
            </tr>
             <tr>
                <td>TOTAL</td>
                <td><input type="number" name="total" id="total"></td>
            </tr> -->
        </table>
    </center>
    <center><div class="submit" >
        <input type="submit" value="Proceed" name="savedata">
    </div></center>

    
         <script type="text/javascript">
            document.getElementById("book").onclick = function()
            {
                var roomm;
                document.getElementById("bodyy").style.display="none";
                document.getElementById("formm").style.display="block";
                document.getElementById("indate").value = document.getElementById("datein").value;
                document.getElementById("outdate").value = document.getElementById("dateout").value;
                document.getElementById("room").value = document.getElementById("typeroom").value;
                document.getElementById("noofguest").value = document.getElementById("nguest").value;
                


            }
            function validateform()
            { 
                var name=document.myform.Name.value;
                var number = document.myform.Mobile.value;
                var aadhar = document.myform.aadhar.value;
                var guests = document.myform.noofguest.value;
                var rooms = document.myform.noofroom.value;
                if ( name.length<3)
                {  
                    alert("Enter the name greater than 3 characters");  
                    return false;  
                }
                else if(number.length<10)
                {
                    alert("Number is not valid");
                    return false;
                }
                else if(number.length>10)
                {
                    alert("Number is not valid");
                    return false;
                }
                else if(aadhar.length<12)
                {
                    alert("aadhar number not valid");
                    return false;
                }
                else if(aadhar.length>12)
                {
                    alert("aadhar number not valid");
                    return false;
                }
                else if(guests==0)
                {
                    alert("No. of Guests are ZERO");
                    return false;
                }
                else if(guests<0)
                {
                    alert("No. of Guests cannot be negative");
                    return false;
                }
                else if(rooms==0)
                {
                    alert("No. of rooms are ZERO");
                    return false;
                }
                else if(rooms<0)
                {
                    alert("No. of rooms cannot be negative");
                    return false;
                }
                else
                {
                    alert("Your details have been submitted");
                }
            }
             

        </script>
       
    </form>

</body>

</html>