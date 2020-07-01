<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SanberBook</title>
</head>
<body>
	<h1>Buat Account Baru!</h1>

	<h4>Sign Up Form</h4>
	<form action="{{url('welcome')}}" method="post">
		@csrf
		<label>First name:</label> <br>
		<input type="text" name="f_name"> <br>
		<br>

		<label>Last name:</label> <br>
		<input type="text" name="l_name"> <br>
		<br>

		<label>Gender:</label> <br>
		<input type="radio" name="gender" value="1"> Male <br>
		<input type="radio" name="gender" value="2"> Female <br>
		<input type="radio" name="gender" value="0"> Other <br>
		<br>

		<label>Nationality:</label> <br>
		<select name="nationality"> 
			<option value="1">Indonesian</option>
			<option value="2">Outdenesian</option>
		</select><br>
		<br>

		<label>Language Spoken:</label> <br>
		<input type="checkbox" name="language[]" value="1"> Bahasa Indonesia <br>
		<input type="checkbox" name="language[]" value="2"> English <br>
		<input type="checkbox" name="language[]" value="3"> Other <br>
		<br>

		<label>Bio:</label><br>
		<textarea name="bio" cols="30" rows="10"></textarea><br>
		<br>

		<button>Sign Up</button>
	</form>
</body>
</html>