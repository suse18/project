<?php
include("config.php");

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $pwd=$_POST['pwd'];

    $lg_qry=$conn->query("select * from user_tbl where email='$email' and pwd='$pwd'");

    if($lg_qry->rowCount()==1){
        $lg_qry_arr=$lg_qry->fetch();
        $utyp=$lg_qry_arr['utyp'];

        if($utyp==1){
        header("location:admin.php");
        }
        elseif($utyp==0){
        header("location:dashboard.php");
        }
        else{
        echo "<script>alert('Login Failed....!!')</script>";
        }
}
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
     
<h1>Login Form</h1>
<div class="info"><a href="https://www.grandvincent-marion.fr" target="_blank"><p> Made with <i class="fa fa-heart"></i> by Nisar sh </p></a></div>

<div class="content">
<div class="container">
    <img class="bg-img" src="https://mariongrandvincent.github.io/HTML-Personal-website/img-codePen/bg.jpg" alt="">
        <div class="menu">
            <a href="index.php" class="btn-connexion"><h2>SIGN UP</h2></a>
        </div>
        <div class="connexion">
            <div class="contact-form">
                <form method="post">
                <label>EMAIL</label>
                <input placeholder="" name="email" type="email">
                
                <label>PASSWORD</label>
                <input placeholder="" name="pwd" type="password">
                
                <div class="check">
                    <label>				
                        <input id="check" type="checkbox" class="checkbox">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26px" height="23px">
                                <path class="path-back"  d="M1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
                                <path class="path-moving" d="M24.192,3.813L11.818,16.188L1.5,6.021V2.451C1.5,2.009,1.646,1.5,2.3,1.5h18.4c0.442,0,0.8,0.358,0.8,0.801v18.398c0,0.442-0.357,0.801-0.8,0.801H2.3c-0.442,0-0.8-0.358-0.8-0.801V6"/>
                            </svg>
                    </label>
                    <h3>Keep me signed in</h3>
                </div>
                
                <input class="submit" name="login" value="SIGN IN" type="submit">
            </div>
            
            <hr>
            <a href="https://www.grandvincent-marion.fr/" target="_blank"><h4>Forgot password?</h4></a>
        </div>
        </form>
        
        
        
</div>

</div>




</body>
</html>