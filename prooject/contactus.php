<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Contact Form</title>
<link href="contactus.css" rel="stylesheet" />
</head>
<body background="save4.jpg">
<h1>ORDER NOW!</h1>
<form action="contactus.php" method="post">
<div>
<div class="container">
<div class="contact-parent">
<div class="contact-child child1">
<p>
<i class="fas fa-map-marker-alt"></i> Address <br />
<span> 69/a/57/D Butibori, Nagpur, Maharastra 441122
</span>
</p>
<p>
<i class="fas fa-phone-alt"></i> Let's Talk <br />
<span>7267452809</span>
</p>
<p>
<i class=" far fa-envelope"></i> E-mail <br />
<span>desicuisine@gmail.com</span>
</p>
</div>
<div class="contact-child child2">
<div class="inside-contact">
<h2>Contact Us</h2>
<h3>
<span id="confirm">
</h3>
<p><b>Name</p>
<input name="Name" id="Name" type="text" Required="required">
<p>Email</p>
<input name="Email"id="Email" type="text" Required="required">
<p>Phone</p>
<input name="Phone" id="Phone" type="text" Required="required">
<p>Message</p>
<textarea name="Message" id="Message" rows="4" cols="20"
Required="required" ></textarea>
</b>
<b>
  <button id="btn_send" >SUBMIT</button>
</div>
</div>
</div>
</div>
</div>
</form>
<?php
          
          if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $Phone = $_POST['Phone'];
            $Message = $_POST['Message'];
          
          // Connecting to the Database
          $servername = "localhost";
          $username = "root";
          $password = "";
          $database = "project";
    
          // Create a connection
          $conn = mysqli_connect($servername, $username, $password, $database);
          // Die if connection was not successful
          if (!$conn){
              die("Sorry we failed to connect: ". mysqli_connect_error());
          }
          else{ 
            // Submit these to a database
            // Sql query to be executed 
            //$sql = "INSERT INTO `tblstudent` (`name`, `amountpaid`, `address`) VALUES ('$name', '$amount', '$address')";
            $sql = "INSERT INTO `table1`(`Name`, `Email`, `Phone`, `Message`) VALUES ('$Name','$Email','$Phone','$Message')";
            $result = mysqli_query($conn, $sql);
     
            if($result){
              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Success!</strong> Your entry has been submitted successfully!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>';
            }
            else{
                // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"></span>
              </button>
            </div>';
            }
    
          }
    
        }
    

      ?>

</body>
</html>