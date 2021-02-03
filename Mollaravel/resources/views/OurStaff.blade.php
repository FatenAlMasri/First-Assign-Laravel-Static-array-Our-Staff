<!DOCTYPE html>
<html>
<head>
	<title>Our Staff</title>
</head>
<body>
	<div class="jumbotron">
  <center><h3 class="display-4">Ministry Of Labour</h3></center>

  <hr class="my-4">
  
</div>

	<center><table class="table table-borderless">
       <th colspan="4" class="line">Our Staff</th>
		<tbody>
			@foreach($Staff as $staff)
				<tr>
					<td >{{$staff['Emp_name']}}</td>
					<td>{{$staff['Emp_img']}}</td>
					<td>{{$staff['Age']}}</td>
					<td><a href="{{$staff['Github']}}"  target="_blank">View</a></td>
				</tr>
			@endForeach
		</tbody>

		
      
</table></center>
</body>
</html>