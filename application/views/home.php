<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style type="text/css">
	.right{
		float: right;
	}
	.topSection{
		max-width: 300px;
	}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8 topSection">
			<!-- Add a course -->
			<h3>Add a new course</h3>
			<form method="post" action="/courses/add">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="name" class="form-control" autofocus/>
				</div>
				<div class="form-group">
					<label>Description:</label>
					<textarea class="form-control" name="description"></textarea>
				</div>
				<input class="btn btn-success right"type="submit" value="Add">
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h3>Courses</h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>Course Name</td>
						<td>Description</td>
						<td>Date Added</td>
						<td>Actions</td>
					</tr>
				</thead>
<?php 			foreach($allCourses as $course)
				{
?>					<tr>
						<td><?= $course["title"]; ?></td>
						<td><?= $course["description"]; ?></td>
						<td><?= $course["created_at"];?></td>
						<td> <a href="/courses/show/<?= $course['id'] ?>">Delete</a> </td>
					</tr>
<?php			}
?>				</table>
			</div>
		</div>
	</div>
</body>
</html>