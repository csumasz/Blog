<?php require('includes/header.php');?>
<?php
    $id = $_GET['id'];

    $db = new Database();

    //Create query
    $query = "SELECT * FROM posts WHERE id = ".$id;

    //run query
    $post = $db->select($query)->fetch_assoc();

     //Create query
     $query = "SELECT * FROM category";

     //run query
     $categories = $db->select($query);
?>
<div class="blog-post">
    <h2 class="blog-post-title"><?php echo $post['title'];?></h2>
    <p class="blog-post-meta"> <?php echo formatDate($post['date']);?> by <a href="#"><?php echo $post['author'];?></a></p>  
    <?php echo $post['body'];?>
</div>


<?php include 'includes/footer.php' ;?>