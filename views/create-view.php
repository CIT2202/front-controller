<!DOCTYPE HTML>
<html>
<head>
<title>Add new film</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<ul>
<li><a href="create.php">Create</a></li>
<li><a href="browseable-list.php">Read</a></li>
</ul>
<h1>Add a new film</h1>
<form action="save.php" method="post">
<div>
<label for="title">Title:</label>
<input type="text" id="title" name="title">
</div>
<div>
<label for="year">Year:</label>
<input type="text" id="year" name="year">
</div>
<div>
<label for="duration">Duration:</label>
<input type="text" id="duration" name="duration">
</div>
<div>
<p>Please enter an id number for the certificate. (1 = U, 2 = PG, 3 = 12, 4 = 15, 5 = 18). We will look at a better way of doing this later in the course.</p>
<label for="certificate">Certificate:</label>
<input type="text" id="certificate" name="certificate" placeholder=" e.g. 2 for PG">
</div>
<input type="submit" name="submitBtn" value="Add Film">
</form>
</body>
</html>
