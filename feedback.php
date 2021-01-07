<?php 
// ------------- CONFIGURABLE SECTION ------------------------

$mailto = 'info@cirrusspark.com' ;
$subject = "Feedback Form" ;
$formurl = "BookNow.php" ;
$thankyouurl = "" ;
$errorurl = "h" ;
$want_tel_field = 0;
$want_addr_field = 0;

$email_is_required = 1;
$name_is_required = 1;
$comments_is_required = 1;
$uself = 0;
$use_envsender = 0;
$use_sendmailfrom = 0;
$smtp_server_win = '' ;
$use_webmaster_email_for_from = 0;
$my_recaptcha_private_key = '' ;

// -------------------- END OF CONFIGURABLE SECTION ---------------

define( 'MAX_LINE_LENGTH', 998 );
define( 'CONTENT_TYPE', 'Content-Type: text/plain; charset="utf-8"' );
$linesep = $uself ? "\n" : "\r\n" ;
if ($use_sendmailfrom) {
	ini_set( 'sendmail_from', $mailto );
}
if (strlen($smtp_server_win)) {
	ini_set( 'SMTP', $smtp_server_win );
}

$envsender = "-f$mailto" ;
$fullname = trim($_POST['fullname']) ;
$email = trim($_POST['email']) ;
$comments = $uself ? preg_replace( '/\r\n/', "\n", $_POST['comments'] ) : $_POST['comments'] ;
$http_referrer = getenv( "HTTP_REFERER" );

if (!isset($_POST['email'])) {
	header( "Location: $formurl" );
	exit ;
}
if (($email_is_required && (empty($email) || (substr_count($email,'@') != 1))) || (strlen($email) > 254) || preg_match("/[\s<>,;'\"]/", $email) ||
	($name_is_required && empty($fullname)) || (strlen($fullname) > 729) || preg_match("/[\r\n@<>,;\"]/", $fullname) ||
	($comments_is_required && empty($comments))) {
	header( "Location: $errorurl" );
	exit ;
}

if (empty($email)) {
	$email = $mailto ;
}
$fromemail = $use_webmaster_email_for_from ? $mailto : $email ;
if (function_exists( 'get_magic_quotes_gpc' ) && get_magic_quotes_gpc()) {
	$comments = stripslashes( $comments );
}
$opt_flds = $want_addr_field ? "Address: " . $_POST['addr'] . $linesep : '' ;
$opt_flds .= $want_tel_field ? "Telephone: " . $_POST['tel'] . $linesep : '' ;
$messageproper =
	"This message was sent from:" . $linesep .
	"www.cirrusspark.com" . $linesep .
	"------------------------------------------------------------" . $linesep .
	"Name: $fullname" . $linesep .
	"Email: $email" . $linesep .
	$opt_flds .
	"------------------------- COMMENTS -------------------------" . $linesep . $linesep .
	$comments . $linesep . $linesep .
	"------------------------------------------------------------" . $linesep ;
$messageproper = wordwrap( $messageproper, MAX_LINE_LENGTH, $linesep, true ) ;

$headers =
	"From: \"$fullname\" <$fromemail>" . $linesep . "Reply-To: \"$fullname\" <$email>" . $linesep . "X-Mailer: chfeedback.php 2.20.2" .
	$linesep . 'MIME-Version: 1.0' . $linesep . CONTENT_TYPE ;

if ($use_envsender && !ini_get('safe_mode')) {
	mail($mailto, $subject, $messageproper, $headers, $envsender );
}
else {
	mail($mailto, $subject, $messageproper, $headers );
}
header( "Location: " );
exit ;

?>
