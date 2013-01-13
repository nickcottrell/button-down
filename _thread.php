<?//================================

/*
        /)                /) 
    _/_(/   __   _  _   _(/  
    (__/ )_/ (__(/_(_(_(_(_ 

*/
$LAYOUT = $layout;
global $LAYOUT;

$TITLE = $meta_title;
global $TITLE;

$DESCRIPTION = $meta_description;
global $DESCRIPTION;

$KEYWORDS = $meta_keywords;
global $KEYWORDS;

if ($_REQUEST['sent'] == "yes") {
	global $SENT;
	$SENT = true;
} else {
	//do nothing
}

function top() {
	include '_includes/header.php';
}

function bttm() {
	include '_includes/footer.php';
}

function layoutTop() {
	global $LAYOUT;
	include "_layouts/$LAYOUT/top.php";
}

function layoutBttm() {
	global $LAYOUT;
	include "_layouts/$LAYOUT/bttm.php";
}

function navtop() {
	include '_includes/nav.php';
}

function navbttm() {
	include '_includes/navfooter.php';
}

function metaTitle() {
	global $TITLE;
	echo $TITLE;
}

function metaDescription() {
	global $DESCRIPTION;
	echo $DESCRIPTION;
}

function metaKeywords() {
	global $KEYWORDS;
	echo $KEYWORDS;
}

function contactsub() {
	
	if(isset($_POST['Submit'])) {
		$to = 'nick.a.cottrell@gmail.com' ; 
		$subject = '** from button-down contact form **';
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$message = "Name: ".$_POST['name']."<br />
               		Email: ".$_POST['email']."<br />
               		Message: ".$_POST['message']."<br />" ;
			mail($to, $subject, $message, $headers);

	}
	
	echo ($_SERVER['PATH_INFO'].'?sent=yes');
}

//=================================?>