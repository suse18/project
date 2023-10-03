<?php

include("config.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];
    $cpwd=$_POST['cpwd'];

    $ins_qry=$conn->query("insert into user_tbl(name,email,pwd,cpwd) values('$name','$email','$pwd','$cpwd')");

    if($ins_qry){
        echo "<script>alert('Registration Successfully....!!')</script>";
    }
    else{
        echo "<script>alert('Registration Failed....!!')</script>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
     
<h1>registration Form</h1>
<div class="info"><a href="https://www.grandvincent-marion.fr" target="_blank"><p> Made with <i class="fa fa-heart"></i> by Nisar sh </p></a></div>

<div class="content">
<div class="container">
    <img class="bg-img" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/bg.jpg" alt="">
        <div class="menu">
            <a href="login.php" class="btn-connexion"><h2>SIGN IN</h2></a>
        </div>
        
        <div class="enregistrer ">
            <div class="contact-form">
                <form method="post">
                <label>USERNAME</label>
                <input name="name" placeholder="" type="text">
                
                <label>E-MAIL</label>
                <input name="email" placeholder="" type="email">	
                
                <label>PASSWORD</label>
                <input name="pwd" placeholder="" type="password">
                
                <label>CONFIRM PASSWORD</label>
                <input name="cpwd" placeholder="" type="password">
                
                <div class="check">
                    <label>				
                        <input id="check" type="checkbox" class="checkbox">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
                                <path class="path-back"  d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
                                <path class="path-moving" d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
                            </svg>
                    </label>
                    <h3>I agree</h3>
                </div>
                
                <input class="submit" name="submit" value="SIGN UP" type="submit">	
                </form>    
            </div>
        </div>
        
</div>

</div>




</body>
</html>