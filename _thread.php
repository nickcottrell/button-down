<?//================================

/*
        /)                /) 
    _/_(/   __   _  _   _(/  
    (__/ )_/ (__(/_(_(_(_(_ 

*/

$_ENV['pageNameGLOB'] = $pageName;
$_ENV['layoutNameGLOB'] = $layoutName;
$_ENV['pageDescriptionGLOB'] = $pageDescription;
$_ENV['pageKeywordsGLOB'] = $pageKeywords;


function pathext() {
	$var = $_SERVER['PATH_INFO'];
	echo $var;
}

function top() {
	include '_includes/header.php';
}

function bttm() {
	include '_includes/footer.php';
}

function layoutTop() {
	$var = $_ENV['layoutNameGLOB'];
	include "_layouts/$var/top.php";
}

function layoutBttm() {
	$var = $_ENV['layoutNameGLOB'];
	include "_layouts/$var/bttm.php";
}

function navtop() {
	include '_includes/nav.php';
}

function navbttm() {
	include '_includes/navfooter.php';
}

function pagename() {
	$var = $_ENV['pageNameGLOB'];
	echo $var;
}

function pageDescription() {
	$var = $_ENV['pageDescriptionGLOB'];
	echo $var;
}

function pageKeywords() {
	$var = $_ENV['pageKeywordsGLOB'];
	echo $var;
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
	
	$var = $_SERVER['PATH_INFO'];	
	echo ($var.'?sent=yes');
}

function msgstatus() {
	$val = $_GET['sent'];
	
	if ($val == "yes") {
		echo "Your message has been sent."; 
	}
	else {
		echo "Type your message below."; 
	};
}

//=================================?>