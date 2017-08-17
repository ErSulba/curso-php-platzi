<?php

include_once '../config.php';


?>
<html>
<head>
	<title>Blog</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1> Blog</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
            <h2> Posts </h2>
            <a class="btn btn-default" href="insert-post.php"> Back</a>
            <form action="insert-post.php" method="post" role="form">
                <legend>BLog Post</legend>

                <div class="form-group">
                    <label for="inputTitle"> Title</label>
                    <input type="text" class="form-control" name="title" id="inputTitle" placeholder="Input...">
                </div>

                <textarea name="content" id="inputContent" class="form-control"  rows="5"></textarea>
                <br>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
		</div>
		<div class="col-md-4">
			Side bar
		</div>
	</div>

<!--    Footer -->
	<div class="row">
		<div class="col-md-12">
			<footer>
				This my motherfoka footer <br>
				<a href="admin/index.php"> Admin Panel</a>
			</footer>
		</div>
	</div>
</div>
</body>
</html>                  