<!DOCTYPE html>
<html>
<head>
	<title>View Record</title>
</head>
<body>
	<div>
		<h1>View Employee Record</h1>
		<label>Name:</label>
		{{$emp->name}}<br>

		<label>Position:</label>
		{{$emp->position}}<br>

		<label>Gender:</label>
		{{$emp->gender}}

	</div>
</body>
</html>