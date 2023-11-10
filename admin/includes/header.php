<?php include ('../config/config.php');?>
<?php include ('../libraries/database.php');?>
<?php include ('../helpers/format_helper.php');?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area</title>
    
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
   
   
  </head>
  <body>

    <div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
        <a class="blog-nav-item active" href="index.php">Dashboard</a>
        <a class="blog-nav-item" href="add_post.php">Add post</a>
        <a class="blog-nav-item" href="add_category.php">Category</a>
        <a class="blog-nav-item pull-right" href="Http:://localhost/phpLoversBlog">Visit Blog</a>
        </nav>
    </div>
    </div>

    <main class="container">
        <div class="blog-header">
            <h2>Admin Area</h2>
        </div>
        <div class="clear"></div>
        <div class="row ">
            <div class="col-sm-12 blog-main">
              <?php if(isset($_GET['msg'])) : ?>
                <div class="alert alert-success">
                  <?php echo htmlentities($_GET['msg']); ?>
                </div>
              <?php endif;?>
              