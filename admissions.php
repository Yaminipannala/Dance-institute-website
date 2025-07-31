<?php  
  
include("db.php");  

if ($_SERVER['REQUEST_METHOD'] == "POST")  
{  
 $firstname = $_POST['fname'];  
$lastname = $_POST['lname'];      
$email = $_POST['email'];  
$contact= $_POST['cont']; 
$dob = $_POST['dob']; 
$faname = $_POST['faname']; 
$fcontact = $_POST['fcont']; 
$maname = $_POST['maname']; 
$mcontact = $_POST['mcont']; 



if (!empty($email) && !empty($firstname) && !empty($lastname) && !empty($contact) && !empty($dob) && !empty($faname) && !empty($fcontact) &&!empty($maname) &&!empty($mcontact) ) {  
    $query = "insert into details (fname, lname, email, cont,dob,faname,fcont,maname,mcont) values ('$firstname', '$lastname', '$email', '$contact', '$dob', '$faname', '$fcontact', '$maname','$mcontact')";  
    
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
<link rel="stylesheet" type="text/css" href="admissions.css">

<style>
    h{
        position: absolute;
        right:210%;
        top:28%;
        color: white;
        font-size: 15px;

    }
    
    hello
    {
position:absolute;
left:60%;
    }
    hie 
    {
        position:absolute;
        right:75%;
        
        font-size: x-small;
        top:80%;
        
        
    }
    P{
        color: white;
        position: absolute;
        bottom:50px;
        top:30px;
        bottom:50%;
        
    }
    P1
    {
        color:white;
        position:absolute;
        right:5px;
        left: 63%;
    
    }
    .form-box{
        height:700px;
    }
    button{
        margin-top: 600px;
        top: 10px;
        align-items: center;
        margin-right: 500px;
        margin-left: 700px;
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
        font-size: 4px;

    }
    h3{
        position: absolute;
        right:190%;
        top:10%;
        color: white;
        font-size: 15px;

    }
    h111{
        font-size: 10px;
        position: absolute;;
        right:50px;
        left:-1%;
        top:50%;
        bottom: 70PX;
        margin: 10PX;
        color: white;
    }
    h1111{
        font-size: 10px;
        position: absolute;;
        right:50px;
        left:-1%;
        top:100%;
        top: 70px;
        margin: 10PX;
        color: white;
    }
    h11111{
        font-size: 10px;
        position: absolute;;
        right:100px;
        left:40%;
        top:100%;
       top:70px;
        margin: 10PX;
        color: white;
    }
    h11{
        font-size: 10px;
        position: absolute;;
        right:60%;
        left:40%;
        top:50%;
        bottom: 70PX;
        margin: 10PX;
        color: white;
    }
    bye
    {
        position:absolute;
       
       
       left:45px;
       bottom:-98px;
    }
    randi
    {
        position:absolute;
     top:72px;
      right:118px
    }
    
    h5{
        position:absolute;
    bottom:100%;
    left:-1px;
    transform: translateY(-50);

    font-size: 1em;
    pointer-events: none;
    transition:.5s;
    color: white;
    top:-30%;
    font-weight: normal;
    right: 40%;
    }
    h6{
        position:absolute;
    bottom:100%;
    left:-1px;
    transform: translateY(-50);

    font-size: 1em;
    pointer-events: none;
    transition:.5s;
    color: white;
    top:50px;
    font-weight: normal;
    right: 40%;
    }
    h1{
    color: white;
    align-items: center;
   justify-content: center;
   font-size: 25px;
    }

</style>
</head>
<body>
 <section>
    <div class="form-box">
        <div class="form-value">
            <form  method="POST">
            <h1>PUT YOUR BELLS ON AND COME JOIN US</h1>
            <div class="inputbox">
                

                <input type="text" name="fname" required  placeholder="First Name">
                <label for="">FIRST Name</label>
            </div>
            <div class="inputbox">
                

                <input type="text" name="lname" required placeholder="Last Name">
                <label for="">LAST Name</label>
            </div>
            <div class="inputbox">
                
                <input type="email" name="email" required  placeholder="example@gmail.com">
                <label for="">Email ID</label>
            </div>
            

            <div class="inputbox">
               
                <input type="number" name="cont" required  placeholder="+**********">
                <label for="">CONTACT NUMBER</label>
            </div>
            <div class="inputbox">
               
                <input type="date" name="dob" required>
                <label for="">DOB</label>
            </div>
            <div class="inputbox">
                
               
                <input type="text" name="faname" required  placeholder="Name">
                <label for="">FATHER'S NAME</label>
            </div>
            <div class="inputbox">
               
                <input type="number" name="fcont" required placeholder="+**********">
                <label for="">FATHER'S CONTACT</label>
            </div>
            <div class="inputbox">
                
               
                <input type="text" name="maname" required  placeholder="Name">
                <label for="">MOTHER'S NAME</label>
            </div>
            <div class="inputbox">
               
                <input type="number" name="mcont" required placeholder="+**********">
                <label for="">MOTHER'S CONTACT</label>
            </div>
            
            
            <div class="inputbox">
                    
                
            </div>
            <button>Submit</button>
            
            </form>
        </div>

    </div>
 </section>   
 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
 <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>                                                                                                                                                                                                                                                                              </p2></pre>
</body>
</html>



