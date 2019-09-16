<!doctype html>
<html>
<head>
	<title>Lecture Two</title>
</head>
<body>

<form name="Lecture Two" method="POST">
<!--HTML Basics-->
<label>Name: </label><input type="text" placeholder="Enter your Name" required/><br>
<label>Password: </label><input type="password" placeholder="Enter your Password" required/><br>
<label>Upload Photo: </label><input type="file"/>
<br>
<br>
<label>Gender</label>
<input type="radio" name="GenderRadioBtn"/><label>Male</label>
<input type="radio" name="GenderRadioBtn"/><label>Female</label>
<br>
<br>
<label>What do yuo want to receive?</label><br>
<input type="checkbox"/><label>Mobile Phone</label><br>
<input type="checkbox"/><label>Tablet</label><br>
<input type="checkbox"/><label>Laptop</label><br>
<input type="checkbox"/><label>Digital Camera</label><br><br>

<label>Civil Status</label><br>
<select>
	<option>Single</option>
	<option>Married</option>
	<option>Widow/Widower</option>
	<option>Others</option>
</select>
<br>
<br>

<label>Select a Date</label>
<input type="date"/>
<label>Select a Time</label>
<input type="time"/>
<label>Select a  Color</label>
<input type="month"/>
<br><br>
<input type="number" min=1 max=100 step=100/>
<input type="submit"/>
<input type="reset" />

</form>

</body>
</html>