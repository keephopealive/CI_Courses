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
	.center{
		text-align: center;
	}
	.inline{
		display: inline;
	}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<div class="center">
					<h3>Are you sure you want to delete the following course?</h3>
					<label>Name: </label>
					<p><?= $oneCourse['title'] ?></p>
					<label>Description</label>
					<p><?= $oneCourse['description'] ?></p>
					<p>
						<a href="/"><button class="inline btn">No</button></a>
						<a href="/courses/delete/<?= $oneCourse['id']; ?>" class='inline btn btn-danger'>Yes! I want to delete this</a>
					</p>
				</div>
			</div>
			<div class="col-md-2">
			</div>
		</div>
	</div>
</body>
</html>

