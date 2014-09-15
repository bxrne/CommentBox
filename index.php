<!Doctype HTML>
<?php
if ($_POST) {
	$name = $_POST['commentName'];
	$txt = $_POST['commentTXT'];
	$handle = fopen("comments.html","a");
	fwrite($handle, "<b>" . $name . "</b> :<br/>" . $txt . "<br/>");
	fclose($handle);
}
?>
<html>
	<head>
		<title>PHP Comment box</title>
	</head>
	<body>
		<form action="" method="POST">
			Name:<br>
			<input type="text" name="commentName"/><br>
			Comments:<br>
			<textarea rows="10" cols="30" name="commentTXT"></textarea><br>
			<input type="submit" value=":: Post Comment ::">
		</form><br><br>
		<h2>Recent Comments :</h2><br>
		<hr>
				<?php include "comments.html";?>
</html>
