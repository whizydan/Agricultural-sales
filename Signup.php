<?php

$conn = mysqli_connect("localhost", "root", "", "shopping");
//Load Composer's autoloader
require 'vendor/autoload.php';
$message = "";


if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['pass']));
    $mobile = mysqli_real_escape_string($conn, md5($_POST['mobile']));

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'")) > 0) {
        $msg = "<div class='alert alert-danger'>{$email} - This email address has been already exists.</div>";
    } else {
        if ($password === $confirm_password) {
            $sql = "INSERT INTO users (name, email, password, code) VALUES ('{$name}', '{$email}', '{$password}', '{$code}')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<div style='display: none;'>";
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'mail.kerberos.co.ke';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'kerberos';                     //SMTP username
                    $mail->Password   = 'meltdown6057';                               //SMTP password
                    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
                    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('support@kerberos.co.ke');
                    $mail->addAddress("$email");

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'no reply';
                    $mail->Body    = 'Here is the verification link <b><a href="http://localhost/login/?verification='.$code.'">http://localhost/login/?verification='.$code.'</a></b>';

                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                echo "</div>";
                $msg = "<div class='alert alert-info'>We've send a verification link on your email address.</div>";
            } else {
                $msg = "<div class='alert alert-danger'>Something wrong went.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match</div>";
        }
    }
}
?>

<html>
<head><title>login</title>
<style>
html
{
	background:no-repeat center center fixed;
	background-size:cover;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	
}
.contact-form input[type="text"],.contact-form input[type="password"] {
	padding: 8px;
	display: block;
	border-radius:30%;
	width:80%;
	background:none;
	border:2px solid #000;
	outline: none;
	color: #330033;
	font-size:14px;
	font-weight:700;
	font-family: Arial, Helvetica, sans-serif;
	-webkit-appearance: none;
}
.contact-form input[type="submit"] {
	font-size:1em;
	padding:10px 15px;
	font-family: 'ambleregular';
	background:#0033FF;
	color: #FFF;
	text-decoration: none;
	outline: 0;
	cursor:pointer;
	-webkit-transition: all 0.5s ease-in-out;
	-moz-transition: all 0.5s ease-in-out;
	-o-transition: all 0.5s ease-in-out;
	transition: all 0.5s ease-in-out;
	position: absolute;
}
.contact-form input[type="submit"]:hover {
	text-shadow: 0px 0px 1px #000;
	background-color:#00F;
}

</style>
</head>
<body background="images/artist-impression.jpg">
<center>
<div class="p" style="font:Tahoma, Geneva, sans-serif; font-size:20px; font-style:bold; color:#F00">&nbsp;&nbsp; Sign up to  </div>
<br><br>
<div  class="contact-form">
<form action="#" method="post" name="prod">
  <table width="622" border="0" cellspacing="10" cellpadding="10">
    <tr>
      <td width="367">&nbsp;<input type="text" name="name" required="required" placeholder="user name"/></td>
    </tr>
    <tr>
     
      <td>&nbsp;<input type="text" name="email" required="required" placeholder="Email id"/></td>
    </tr>
    <tr>
     
      <td>&nbsp;<input type="text" name="mobile" required="required" placeholder="Mobile number"/></td>
    </tr>
    <tr>
      <td>&nbsp;<input type="password" name="pass" placeholder="Password"/></td>
    </tr>
    
    <tr>
      <td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="          submit             " /></td>
    </tr>
    
  </table>
</form>
</div>
</div>
</center>
</body>
</html>