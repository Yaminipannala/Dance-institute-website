<?php 
session_start(); 
include("db.php");  

if ($_SERVER['REQUEST_METHOD'] == "POST")  
{  
$fullname = $_POST['name'];     
$email = $_POST['email'];   
$message = $_POST['msg']; 
if (!empty($email) && !empty($fullname) && !empty($message)){
$query = "insert into contactus (name, email, msg) values ('$fullname', '$email', '$message')";  
  
  mysqli_query($con, $query);  
  
  header("Location: thankyou.php");
  exit();
}
else {  
    echo "<script type='text/javascript'> alert('Please Enter some Valid Information')</script>";  
}
}
 
?> 

<!DOCTYPE html>
<html>
<head>
    
<title>www.wedance.com</title>
<link rel="stylesheet" type="text/css" href="contact.css">

<style>
    h{
        position: absolute;
        right:210%;
        top:28%;
        color: white;
        font-size: 15px;

    }
    h4{
        position: absolute;
        right:160%;
        top:10%;
        color: white;
        font-size: 15px;

    }
    h2{
        position: absolute;
        right:175%;
        top:10%;
        color: white;
        font-size: 15px;

    }
    h3{
        position: absolute;
        right:190%;
        top:10%;
        color: white;
        font-size: 15px;

    }

</style>
</head>
<body>
 <section>
    <div class="form-box">
        <div class="form-value">
            <form method="POST">
            <h1>Contact us</h1>
            <div class="inputbox">
                <ion-icon name="call-outline"></ion-icon><h><a href="tel:+919573791400" target="_blank">9346277928</a></h>

                <input type="text" name="name" required >
                <label for="">Full Name</label>
            </div>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon><h4><a href="mailto:pannalayaminireddy@gmail.com" target="_blank">pannalayaminireddy@gmail.com</a></h4>
                <input type="email" name="email" required>
                <label for="">Email id</label>
            </div>
            <div class="inputbox">
                
                <ion-icon name="logo-instagram"></ion-icon><h3><a href="https://instagram.com/yaminireddypannala?igshid=YmMyMTA2M2Y=" target="_blank">yaminireddypannala</a></h3>

                <input type="text" name="msg" required>
                <label for="">Message</label>
            </div>
            
            <button>Send</button>
            
            </form>
        </div>

    </div>
 </section>   
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>                                                                                                                                                                                                                                                                              </p2></pre>
</body>
</html>