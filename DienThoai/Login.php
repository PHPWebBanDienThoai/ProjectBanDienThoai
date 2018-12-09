<!doctype html>
<?php
    include 'BO/UserBO.php';
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Transparent Login Form</title>
                <link rel="stylesheet" href="assets/css/styleLogin.css">
	</head>
	<body>
<?php
    $userbo = new UserBO; 
    session_start();
    if(isset($_POST['mail']))
    {
        $mail = $_POST['mail'];
        $pass = $_POST['pass'];
        $user = $userbo->checkLogin($mail, $pass);
        if($user!=NULL)
        {
            $_SESSION["username"] = $user->getName();
            header('Location: HOME.php');
        }
            
    }
?>   		
		<div class="loginBox">
                    <img src="assets/img/user.png" class="user">
			<h2>Log In Here</h2>
                        <form action="Login.php" method="POST">
				<p>Email</p>
				<input type="text" name="mail" placeholder="Enter your email">
				<p>Password</p>
				<input type="password" name="pass" placeholder="••••••">
				<input type="submit" name="" value="Sign In">
				<a href="#">Forget Password</a>
			</form>
                        <br>
                        <?php
                        if(isset($_POST['mail'])&&$user==NULL)
                            echo ("<b style='background: #d6e9c6; color: red'>Tên tài khoản hoặc mật khẩu sai</b>");
                        ?>
		</div>
	</body>
</html>
