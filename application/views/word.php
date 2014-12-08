<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The word</title>
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
	<div id="wrapper">
	<label>Random word (attempt # <?= $this->session->userdata['attempt'] ?>)</label>
	<div id="container"><?= $this->session->userdata['word'] ?></div>
	<form id="generate" action="/strings/randomize">
		<input type="submit" value="generate">
	</form>
	</div>
</body>
</html>