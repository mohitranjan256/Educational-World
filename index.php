<?php
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $c_num = $_POST['cnum'];
        $w_num = $_POST['wnum'];
        $email = $_POST['email_id'];
        $con = mysqli_connect('localhost','root','','details');

        $query = "INSERT INTO student(fname, lname , c_num , w_num , email ) VALUES ('$fname','$fname','$c_num','$w_num','$email')";

        $check = mysqli_query($con, $query);
        if($check){
            echo "<script>alert('Thank You');</script>";                         //  javascript
        }
        else{
            echo "<script>alert('Server Error: Try again');</script>";          //  javascript
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational World</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="head">
        <div id="header">
            <img src="image/logo.png" alt="">
            <nav>
                <ul>
                    <li><a href="#headDesc">Home</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#registration">Registration</a></li>
                    <li><a href="#aboutus"  >About us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>            
            </nav>
        </div>

        <div id="headDesc">
            <div id="headBox">
                <h1>Welcome To<br> Educational World</h1>
                <p><h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio unde aspernatur ullam maxime ad voluptatem ex nobis pariatur hic neque. Doloremque reprehenderit quo tenetur accusantium labore saepe perferendis iste exercitationem?</h4></p>
                <div id="topButton" ><a href="#aboutus">Read More..</a></div>
            </div>
        </div>
    </section>

    <section id="aboutus">
        <h1 id="know">Know About Us</h1>
        <div id="aboutContainer">
            <div id="content">
                <h1>About Us</h1>            
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate <br>facilis quia nesciunt nihil laudantium et nobis ullam veritatis alias. Minus<br> in harum explicabo aliquid deleniti neque impedit. Laudantium,<br> labore deleniti!Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> facilis quia nesciunt nihil laudantium et nobis ullam veritatis<br> alias. Minus in harum explicabo aliquid deleniti neque impedit.<br> Laudantium, labore deleniti!</p>
            </div>

        </div>
        
    </section>
    <section id="registration">
        <div>
        <h1 id="why">Why You Register Here</h1>
        <div id="aboutregistration">
            <div id="desc">
                <h1>One step in good direction for change.</h1>            
                <p>Educational World is always available for those who really eager to learn<br> and build themselve. We provide the quality of education and you will experience it for sure.</p>
            </div>
        </div>
        </div>
        <div id="form">
            <h1>Enter Your Details</h1>
            <form method="POST">
                <input type="text" name="fname" placeholder="First Name" required>&nbsp;
                <input type="text" name="lname" placeholder="Last Name" required><br>
                <input type="number" name="cnum" placeholder="Contact Number" required>&nbsp;
                <input type="number" name="wnum" placeholder="Whatsup Number" required><br>
                <input id="email" type="email" name="email" placeholder="E-Mail ID" required><br>
                <center><input id="submit" type="submit" name="submit"></center>
                
            </form>
        </div>

    </section>
    <section id="contactus">
        <div id="address"> 
            <h1>Address</h1><br>
            <p> G1,Subala Enclave, Saraidhela Rd,<br> Lohar Kulli, Dhanbad, Jharkhand 828127</p>
        </div>
        <div id="socialmedia">
            <h1>Social Media Platforms</h1><br>
            <img src="image/telegram.png" alt="Telegram">&nbsp;
            <a href="">Telegram Group</a><br>
            <img src="image/facebook.png" alt="FaceBook ">&nbsp;
            <a href="">FaceBook Page</a><br>
            <img src="image/instagram.png" alt="Instagram">&nbsp;
            <a href="">Instagram Page</a><br>

        </div>
        <div id="contactnum">
            <h1 >Contact Number</h1><br>
            Mobile Number : 1234567890<br><br>
            Landline Number : 0330-123455

        </div>
    </section>
    <section id="aboutdeveloper">
        <center>&copy; COPY RIGHT ISSUE <br> This Website is Developed By Mohit Ranjan.</center>
    </section>
</body>
</html>