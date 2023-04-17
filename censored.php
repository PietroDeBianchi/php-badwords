<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>CENSORED</title>
</head>
<body>
<h1>Form Result</h1>
<?php
		$paragraph = $_GET['paragraph'];
		$word = $_GET['word'];
		$censored_paragraph = str_ireplace($word, '***', $paragraph);

		echo "<p>Original Paragraph: " . $paragraph . "</p>";
		echo "<p>Length of Original Paragraph: " . strlen($paragraph) . "</p>";
		echo "<p>Censored Paragraph: " . $censored_paragraph . "</p>";
		echo "<p>Length of Censored Paragraph: " . strlen($censored_paragraph) . "</p>";
?>
</body>
</html>

