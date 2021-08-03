<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home page!</title>
</head>
<body>

	<h1>Home</h1>
	<h2>Converter Site</h2>
	<script type="valid.js"></script>
	<button onclick="changeText()">Home!</button>
	<a href="home.php">Show Home</a
	<br><br>
	<button onclick="changeText()">Conversion!</button>
	<a href="history.php">Conversion Rate</a
	<br><br>
	<button onclick="changeText()">History!</button>
	<a href="conversion.php">History</a
	<br><br>
	<br><br>
<form action="home.php" method="POST">
<h1 align=center><font color=blue><ins>LENGTH CONVERSION</ins></font></h1>
	<tr>
<table align=center>
<tr>
<td>Enter Value </td>
<td><input type=text name=val></td>
</tr>
<tr>
<td>From</td>
<td>
<select name="from">
            <option value=0>--select--</option>
            <option value=1>Centimeter</option>
            <option value=2>Meter</option>
            <option value=3>Kilometer</option>
            <option value=4>Feet</option>
            <option value=5>Inch</option>
</select>
<a href="../history.php">Results</a></font></h1>
</td>
</tr>
</form>
<br><br>

</body>
</html>