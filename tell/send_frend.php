<?php 
#--- Send mails to
$_to = '"Administrator" <shafeekali@sesameindia.com>';
$_formpage = 'tell.html';
$Appname = 'movinbuilders.com/';
#--- Now Code
$_message = 'Sorry, there was an unexpected error!<br>Please try again later.';
//new captcha
session_start();
if( $_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'] ) ) {
	
	if(!empty($_POST['Email'])){
	  
	  
	$name				= $_POST['Name'];
	$fname				= $_POST['Friends_Name'];
	$email				= $_POST['Email'];
	$femail			= $_POST['Friends_Email']  ;
	$fmsg				= $_POST['Message'];
	//$purl				= $_REQUEST['purl'];
	$sub				= "Please visit   ".$Appname;
	$site				= $Appname;
	$default_message	= "";
	  
	  
	  
	  $body = "Dear <strong>{$fname}</strong>,<br />";
		$body .= "<p>Your friend <b>'{$name}'</b> has invited you to go through the link <strong> <a href=\"http://$site/\">$site</a> </strong> with the following message.</p>";  
		$body .= "<p>{$default_message}</p>";
		$body .= "<p>{$fmsg}</p>";
		$body .= "<br /><br />Regards,<br /><b>$name</b><br />{$email}"; 
	  
//	die($body);
	#--- Prepare Headers for the Mail
	  $_header  = "MIME-Version: 1.0\r\n";
	  $_header .= "Content-type: text/html; charset=iso-8859-1\r\n";
	  $_header .= "From: {$name} <{$email}>\r\n";
	  $_header .= "Reply-To: \"{$name}\" <{$email}>\r\n";
	  $_header .= "Return-Path: \"{$name}\" <{$email}>\r\n";
	  $_header .= "X-Mailer: PHP v".phpversion();
	  $header .= 'Bcc:rahul.v@sesameindia.com' . "\r\n";
	
	#--- Send the mail and Output the result
	  $_i = @mail( $femail  , $sub, '<p align="justify">'.$body.'</p>', $_header);
	  if($_i){
		$_message = "<br /><br /><br /> Thank you <strong> {$_POST['Name']} !</strong> <br />Your message has been send to <strong> {$_POST['Friends_Email']} </strong> <br />";
	  }
	  else{
		$_message = '<p align="center" >Sorry, there was an unexpected error!<br>Please try again later.</p>';
	  }
	}
}
else
{
	// Insert your code for showing an error message here
	$_message = "Sorry, The captcha you entered is invalid..";
}
#---
ob_start();
require_once($_formpage);
$page = ob_get_clean();
$_message = "{$_message}<br><a  href=\"{$_formpage}\" class ='link2' style=\"text-align:center\">Back</a>";
echo eregi_replace("<form[^>]*>(.*)</form>", $_message, $page);
#---
?>