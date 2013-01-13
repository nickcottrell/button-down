<?
$layout = "default";
$meta_title = "Contact";
$meta_description = "This page is a button-down contact form.";
$meta_keywords = "contact, form, submit";

// required
$needle = $_SERVER['DOCUMENT_ROOT'];
include $needle."/_thread.php";
?>

<?top()?>

<h2>Contact</h2>

<?if($SENT){?>
	<h3>Your message has been sent.</h3>
<?}else{?>
	<h3>Type your message below.</h3>
<?}?>

<form name="form" method="post" action="<?contactsub()?>">
Name<br />
<input name="name" type="text" id="name" size="50"><br /><br />
Email<br />
<input name="email" type="text" id="email" size="50"><br /><br />
Message<br />
<textarea name="message" cols="50" rows="4" id="message"></textarea><br /><br />
<input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset">
</form>


<?bttm()?>

