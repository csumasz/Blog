<?php include ('includes/header.php');?>
<?php
    $db = new Database();

    //Check URL for category
    if(isset($_GET['category'])){
        $category = $_GET['category'];
        //Create query
        $query = "SELECT * FROM posts WHERE category = "
                .$category. " ORDER BY id DESC" ;

        //run query
        $posts = $db->select($query);
    }else{
        //Create query
        $query = "SELECT * FROM posts ORDER BY id DESC";

        //run query
        $posts = $db->select($query);
    }
  

     //Create query
     $query = "SELECT * FROM category";

     //run query
     $categories = $db->select($query);
?>
<?php if($posts) :?>
<?php while($row = $posts ->fetch_assoc()) : ?>
<div class="blog-post">
    <h2 class="blog-post-title"><?php echo $row['title'];?></h2>
    <p class="blog-post-meta"> <?php echo formatDate($row['date']);?><a href="#"><?php echo $row['author'];?></a></p>  
    <p><?php echo shortenText($row['body']);?></p>
    <a href="post.php?id=<?php echo urlencode($row['id']);?>" class="readmore">Read More</a>
</div>
<?php endwhile; ?>

<?php else : ?>
    <p>There are no posts yet</p>    
<?php endif; ?>
<?php include 'includes/footer.php' ;?>