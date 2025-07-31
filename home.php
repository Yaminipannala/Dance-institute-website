
<?php  
 
include("db.php");  
?>



<!DOCTYPE html>
<html>
<head>
    
<title>www.wedance.com</title>
<link rel="stylesheet" type="text/css" href="main.css">
<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Dancing+Script:wght@500&family=Domine&family=Tinos&display=swap" rel="stylesheet">

<style>
div{

width:1500px;

padding:50px;
margin:20px;
}

img{
float:center;
margin: top 100px;
}
img {
float:center;
}
p2
{
    float:upright;
    margin-bottom:1000px;
    margin-left:350px;
    font-weight:normal ;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    background-color: rgb(187, 183, 183);
}
.box
{
    background:white;
    color:black;

    box-shadow:30px 30px 30px gray,30px 30px 30px pink;

}
p3
{
    float:upright;
   font-weight: normal;
   
   font-family: 'Domine', serif;
   font-size: 25px;
}
p90
{
    float:center;
   font-weight: bold;
   
   font-family: 'Domine', serif;
   font-size: 25px;
   position: center;
   
   
}

h1{

display: block;
font-size: 30px;
color:black;
text-align:center;

}
.divider{
    width: 300px;
    height: 7px;
    background-color: lightblue;
    border-radius: 50%;
    display:inline-flex;
    float: center;
    margin-left:550px ;
    margin-right: 100px;
    margin-top: 10px;
    margin-bottom: 10px;;
}
 
    

h3{
color:black;
text-align:center;
font-size:40px;
}
p{


font-size:15px;

}
figure{
   
    padding-top: 10px;
}
h4{
background-color:gray;
color:white;
text-align:center;
font-size:40px;
 }
h5{
background-color:gray;
font-size: 40px;
color:white;
text-align:center;
}

h6{
    text-align:left;
    margin-bottom:30px;
    margin-right:100px;
  

}
h7{
    text-align:upright;

   float:upright;
   font-weight: bold;
   font-size: 50px;
   margin-right:100px;
   margin-bottom:150 px;



}
p{
font-size:25px;
color:white;
text-align:left;
margin-right:100px;
margin-bottom:50 px;
font-style: italic;


}
p8 {

font-size:28px;
color:black;
text-align:center;
align-items: top;
justify-content:top ;



font-family: 'Tinos', serif;



font-style: italic;
}
p2204
{
    justify-content: center;
    align-items: center;
    position: absolute;
  
    font-size:15px;
color:white;
right:10px;
left:20px;
margin-left: 40%;
}
p9{
    font-size:15px;
color:white;
background-color: gray;


font-style: initial;
}
p0{
    background-color: black;
}
p10{
    font-size:15px;
color:white;
background-color: gray;


font-style: oblique;
}
p11{
    font-size:15px;
color:white;
background-color: gray;


font-style: oblique;


}
.hie
{
    background-color: black;
    height: 270px;
    width: 500px;
    float: center;
}
p90
{
    position: absolute;
    right: 670px;
}
p101{
   
   
  right:100px;

}
p00{
    font-size:15px;
color:white;
background-color: black;


font-style: initial;
}
p00000
{
    color: black;
}
p120

{
    background-color: white;
}
p1502
{
    color:black
}
.dots {
            display: flex;
            justify-content: flex-start; /* Align dots to the left */
            gap: 10px; /* Space between dots */
            margin-top: -25px;
            margin-left: 330px;
        }

        .dots label {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            
            display: block;
            cursor: pointer;
            margin-left: 10px;
        }
ul li {
            margin-left: 40px;
            font-size: 5px;;
        }
        .logo img {
    width: 150px;  
    height: auto;  
}
p37{
    margin-top: -20px;
}
li a{
    font-size: 20px;
    font-weight:normal ;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    margin-right: 10px;

}
yamini
{
height:100vh;
width:cover;

display:flex;
justify-content: center;
align-items: center;
background-color:white;
padding: 0;
margin-left: 10px;



}
.slider
{
    position:relative;
    overflow:hidden;
    width: 100%;
    

}
.images
{
    display:flex;
    width:100%;
    margin-top: 100px;

    

}
.images img {
    height: 600px;
    width:cover;
    transition:all 0.20s ease;
    border-radius: 0px;
    margin-right:60px;
    justify-content: center;
    float:right;
    margin-top: 50px;
    
   

}

.img_deg
{
    float:left;
width: 300px;

}
.dots  {
display:flex;
justify-content:left;
margin: 100px;
margin-bottom: 7px;
margin-top: -60px;
margin-left:500px;


}

.dots label:hover {
    background: black;
}
.pos_cen
{
    position:obsolute;
    width:90.5%;
    height:570;
    right:100%;
    top:20%;
    background-color: bisque;
    
}
p37{
    margin-top: -20px;
}
#image1:checked ~ .m1 {
margin-left: 0;

}
#image2:checked ~ .m2 {
    margin-left: -110%;
    
    }
    #image3:checked ~ .m3 {
        margin-left: -220%;
        
        }
        #image4:checked ~ .m4 {
            margin-left: -330%;
            
            }
p100
{
    font-size: 25px;
    color:white;
    background-color: rgb(226, 8, 8);
}
image1{
    margin-left: 10px;
}

body{
background-color:white;
}
</style>
</head>
<body>
    <nav class="navbar">
    <div class="navdiv">
        
        <p37><img src="logo3.jpg" width="100px" height="90px"></p37>
        <ul>
             
            <li><a href="home.php"target="_parent">HOME</a></li>
            <li> <a href="gallery.php"target="_parent">GALLERY</a></li>
            <li><a href="academics.php"target="_parent">ACADEMICS</a></li>
            
            <li><a href="rolemodel.php"target="_parent">ROLEMODELS</a></li>   
                <li><a href="admissions.php" target="_parent">ADMISSIONS </a></li>
                <li><a href="contact.php" target="_parent">CONTACT</a></li>
                          
            
        </ul>
    </div>
    </nav>
</body>

<body>
<h1>KUCHIPUDI    Dance    Classes    in    HYDERABAD</h1>

<span class="divider"></span>
<div class="container">
    <div class="overlay">
        

<h6> BUILDING BRIGHT DANCERS SINCE 6 YEARS</h6>
<p>Welcome to SriAbhinaya Kuchipudi Kalakshethram.
    SriAbhinaya is the institute established in the year <br>2016 
 which was founded by Ms Sandhya Sivalanka .This is the place where students can learn dance,gestures,movements,expressions,grace and 
 lot more.
 This institute provides both online and offline <br>classes.You can also have access to weekday courses and weekend courses.Go through the website for<br> the details.
Come join us and become a future brilliant classical dancer.</p>
    </div>
    </div>

    <hr>

                                         
            
 
    <pre>
       <a href="gallery.php"><img src="gallery.jpg" width="19%" height="19%" float="center" ></a>          <a href="academics.php"><img src="academics.jpg" width="19%" height="19%" float="center" ></a>          <a href="rolemodel.php"><img src="contacthome.jpg" width="19%" height="19%" float="center" ></a>          <a href="admissions.php"><img src="admissions.jpg" width="19%" height="19%" float="center" ></a>
       <hr>
       </pre> 
        
        
      <div class="box"><pre><h7>KUCHIPUDI</h7></pre>
<pre><p3>Kuchipudi is one of the eight major Indian classical dances.It originates from a village named 
Kuchipudi in the Indian state of Andhra Pradesh. Raditional compositions that have been performed
by Kuchipudi artists, include SrinivasaKalyanam, Rukmini Kalyanam , Sakuntalam Bhamakalpam,
HaraVilasam,Prahlada Charitram , Usha Parinayam, Sasirekha Parinayam,Rama Natakam , Mohini 
Rukmangada,Chamundeswari Sabda,Ardhanareeswaram Sabda and Perini Thandavam</p3></pre> 
</div>  
<pre>                                                                                                                                                                                                                   
                                                                                                                                                                                                            </pre> </body>  
<figure>

    <div class="pos_cen">
        <img class="img_deg" src="guru.jpg"  >
        <pre><p8>   smt. Sandhya Rani Sivalanka Garu is diploma certified .Sheis the one 
  who is behind successful journey of SaiAbhinaya kuchipudi kalakshethram. 
  It was her dream to  teach dance to the future generations and make them
  not to forget our Indian culture.Now since 6 years she is been teaching 
  to 100 students with different batches. she guarantees about the bright 
  futures of all the students joing SaiAbhinaya Kuchipudi Kalakshethram.
                                                                        
        </p8></pre>
        </div>
</figure>


<pre><p120>                                                                                                                                                               
                                                                                                        
    <yamini>
        <div class="slider">
          <div class="images">
             <input type="radio" name="slide" id="image1">
              <input type="radio" name="slide" id="image2">
              <input type="radio" name="slide" id="image3">
              <input type="radio" name="slide" id="image4">
             <img src="image1.jpg" class="m1" alt="image1"  >
               <img src="image2.jpg" class="m2" alt="image2"  >
                  <img src="image3.jpg" class="m3" alt="image3"  > 
                      <img src="image4.jpg" class="m4" alt="image4"  >          
          </div>
<p90><a href="rolemodel.php">View More</a></p90>
<pre>                    
<div class="dots">  
  <label for="image1"></label>
<label for="image2"></label>
  <label for="image3"></label>
 <label for="image4"></label>
          </pre></div>
      </yamini>                                     
                                                                                                                                                                                                                                                                                                                                                 
                                                                                                                                                                            
                                                                                                                                                                            
                                                                                                                                                                            
                                                                                                                                                                            
                                                                                                                                                                            

</p120></pre>






















































































































































































































<pre><p00>
                                                                                 <a href="tel:+919573791400" target="_blank"><img src="fcall.jpg" width="3%" height="3%"></a><a href="https://instagram.com/yaminireddypannala?igshid=YmMyMTA2M2Y=" target="_blank"><img src= "finsta.jpg" width="3%" height="3%" float="upright"></a><a href="mailto:pannalayaminireddy@gmail.com" target="_blank"><img src="fmail.jpg" width="3%" height="3%" float="right"></a>                                                                                               
</p00></pre>
<section>
    <pre><p2204>
SRIABHINAYA KUCHIPUDI Kalakshethram
HYDERABAD,BODUPPAL,MEDIPALLY</p2204>
<PRE><p9>  


CONTACT

<a href="tel:+919573791400" target="_blank">957-379-1400</a>
GMAIL 

<a href="mailto:pannalayaminireddy@gmail.com" target="_blank">pannalayaminireddy@gmail.com</a>
ADMISSIONS
 
<a href="admissions.php" target="_parent">Click here for details</a>
ACADEMICS
     
<a href="academics.php" target="_parent">Syllabus courses and examination details</a>
ROLEMODELS

<a href="rolemodel.php" target="_parent">Get inspired</a>
</p9>
</pre>
</section>
</html>