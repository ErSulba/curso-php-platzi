<?php

include_once '../config.php';

$query = $pdo->prepare('SELECT * FROM blog_posts ORDER BY id DESC ');

$query->execute();

$blogPosts = $query->fetchAll(PDO::FETCH_ASSOC);

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
            <a class="btn btn-primary" href="insert-post.php"> new post</a>
			<table class="table">
                <thead>
                <tr>

                    <th>Title</th>
                    <th> Edit</th>
                    <th> Delete</th>

                </tr>
                </thead>
				<?php foreach ($blogPosts as $blogPost): ?>
					<tr>
						<td> <?php echo $blogPost['title']; ?></td>
						<td> Edit</td>
						<td> Delete</td>
					</tr>
				<?php endforeach;?>
			</table>


		</div>
		<div class="col-md-4">
			Side bar
		</div>
	</div>
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