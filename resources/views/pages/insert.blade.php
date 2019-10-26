<form action="{{URL::to('addData')}} " method="post">
	@csrf
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" required></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><input type="phone" name="phone" required></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td><input type="email" name="email" required></td>
		</tr>
		<tr>
			<td>Description</td>
			<td><textarea name="description" id="" cols="30" rows="5" required></textarea></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender"value="Male">Male
				<input type="radio" name="gender"value="Female">Female
				<input type="radio" name="gender"value="Others">Others
			</td>
			<tr>
				<td></td>
				<td><input type="submit" value="submit"></td>		
			</tr>
			
		
	</table>
</form>