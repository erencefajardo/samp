<!DOCTYPE html>
<html>
<head>
	<title>Edit Record</title>
</head>
<body>
	<div>
		<h1>Edit Employee Record</h1>
		<form method="post" action="{{url('update-record/'.$emp->id)}}">
			@csrf
		<label>Name:</label>
		<input type="text" name="name" value="{{$emp->name}}">

		<label>Position:</label>
		<select name="position">
			<option></option>
			<option {{$emp->position == 'CP I' ? 'selected': ''}}>CP I</option>
			<option {{$emp->position == 'CP II' ? 'selected': ''}}>CP II</option>
			<option {{$emp->position == 'CP III' ? 'selected': ''}}>CP III</option>
		</select>

		<label>Gender:</label>
		<label><input type="radio" name="gender" value="Male" {{$emp->gender == 'Male' ? 'checked': ''}}>Male</label>
		<label><input type="radio" name="gender" value="Female" {{$emp->gender == 'Female' ? 'checked': ''}}>Female</label>

		<button type="submit">Update</button>
		</form>
	</div>
</body>
</html>