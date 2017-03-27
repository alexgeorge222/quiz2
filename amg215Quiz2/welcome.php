<?php
session_start();
$firstName = echo $_COOKIE["FirstNameCookie"];
$lastname = echo $_COOKIE["LastNameCookie"];
$email = echo $_COOKIE["EmailCookie"];

if($firstName != NULL && $lastname != NULL && $email != NULL){
	
	$visability = 'hidden';
	$welcome = 'Hi, %s, you recently signed up with the email address: %s, thank you!'
	echo sprintf($welcome,$firstName,$email);
}





?>





<!DOCTYPE html>
<html>
<head>
	<title>Alex George Quiz 2</title>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="~/Scripts/jqueryMobile/jquery.mobile-1.4.5.css" />
    <link rel="stylesheet" href="~/Style/cssStyle.css">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="~/Scripts/jqueryMobile/jquery.mobile-1.4.5.js"></script>
    <script src="~/Scripts/jqueryMobile/jquery.mobile-1.4.5.min.js"></script>

</head>
	<body>
		<div data-role="page" data-theme="b" class="register">
        <div data-role="header" class="head">
            <h1><b>Login Thing Amajig</b></h1>
        </div>
		 <div data-role="content" action="register.php">
            <form method="post" visability:<?php echo  $visabilityCheck ?>>
                <label for="inputfName">First Name</label>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset ui-input-has-clear">
                    <input type="text"  id="inputfName" name="inputfName" placeholder="Insert First Name">
                   
                </div>
                <label for="inputlName">Last Name</label>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset ui-input-has-clear">
                    <input type="text"  id="inputlName" name="inputlName" placeholder="Insert Last Name">
                   
                </div>
				<label for="InsertEmail">Email</label>
                <div class="ui-input-text ui-body-inherit ui-corner-all ui-shadow-inset ui-input-has-clear">
                    <input type="text"  id="InsertEmail" name="InsertEmail" placeholder="Insert Email">
                   
                </div>
                <input type="submit" value="Register" >
            </form>
            <p style="text-align:center"><?php echo  $welcome ?></p>


        </div>

	
	
	
	</body>
</html>