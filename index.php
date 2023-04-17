<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>PHP</title>
</head>
<body>
    	<form action="censored.php" method="get">
        <div>
            <label for="paragraph">Paragraph:</label>
            <textarea name="paragraph" id="paragraph" rows="5" cols="50"></textarea>
        </div>
		<div>
            <label for="word">Word to censor:</label>
		    <input type="text" name="word" id="word">
        </div>
		<input type="submit" value="Submit">
	</form>
</body>
</html>