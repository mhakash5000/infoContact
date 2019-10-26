<form action="{{URL::to('updateData/'.$edt->id)}} " method="post">
	@csrf
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"value="{{$edt->name}}"  ></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="phone" name="phone" value="{{$edt->phone}}"></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="email" name="email"value="{{$edt->email}}" ></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><textarea name="description" id="" cols="30" rows="5"value="{{$edt->description}}" ></textarea></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender"value="{{$edt->gender}}">Male
				<input type="radio" name="gender"value="{{$edt->gender}}">Female
				<input type="radio" name="gender"value="{{$edt->gender}}">Others
			</td>
			<tr>
				<td></td>
				<td><input type="submit" value="submit"></td>		
			</tr>
			
		
	</table>
</form>