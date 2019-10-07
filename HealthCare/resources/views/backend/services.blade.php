
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<a href="#">Services</a>
	</html><table class="table table-hover">
	<thead>
		<tr>
			<th>STT</th>
			<th>Title</th>
			<th>ID_Title</th>
			<th>Title_con</th>
			<th>Content</th>
			<th>ID_Packages</th>
			<th>Image</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data as $key=>$val): ?>
			<tr>
				<td><?= $key++ ?></td>
				<td><?= $val->title ?></td>
				<td><?= $val->id_title ?></td>
				<td><?php echo $val->title_con ?></td>
				<td style="display: block; width: 500px; 
				overflow: hidden; white-space: nowrap;
				text-overflow: ellipsis;">
					<?= $val->content ?>
						
				</td>
				<td><?= $val->id_packages ?></td>
				<td><?= $val->image ?></td>	
				<td><a href="#" class="btn btn-info">Edit</a></td>
				<td><a href="#" class="btn btn-info">Delete</a></td>
				<td><a href="#" class="btn btn-info">View</a></td>
		</tr>
		<?php endforeach ?>
	</tbody>

</table>

</body>
