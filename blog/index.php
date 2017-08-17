<?php

include_once 'config.php';

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
			<?php foreach ($blogPosts as $blogPost): ?>
                <div class="blog-post">
                    <h2><?php echo $blogPost['title'] ?></h2>
                    <p>Jan 1,2020 by <a href="" title="">Ms</a></p>

                    <div class="blog-post-image">
                        <img src="images/keyboard.jpg" alt="">
                    </div>

                    <div class="blog-post-content">
						<?php echo $blogPost['content'] ?>
                    </div>
                </div>
			<?php endforeach?>

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