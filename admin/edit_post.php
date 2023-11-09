<?php include ('includes/header.php');?>
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

<form method="post" action="edit_post.php">
    <div class="form-group">
        <label class="form-label">Post Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Title" value="<?php echo $post['title']; ?>">
    </div>

    <div class="form-group">
        <label class="form-label">Post Body</label>
        <textarea name="body" class="form-control" placeholder="Enter Post Body" ><?php echo $post['body']; ?></textarea>
    </div>
    
    <div class="form-group">
        <label class="form-label">Category Select</label>
        <select name="category" class="form-select" >
        <?php while($row = $categories->fetch_assoc()) : ?>
            <?php if($row['id'] == $post['category']){
                $selected = "selected"; 
            }else{
                    $selected = "";
                }
            ?>
            <option <?php echo $selected; ?>><?php echo $row['name']; ?></option>
        <?php endwhile;?>
            
        </select>
    </div>

    <div class="form-group">
        <label class="form-label">Author</label>
        <input type="text" name="author" class="form-control" placeholder="Enter Author Name" value="<?php echo $post['author']; ?>">
    </div>
    
    <div class="form-group">
        <label class="form-label">Tags</label>
        <input type="text" name="tags" class="form-control" placeholder="Enter tags" value="<?php echo $post['tags']; ?>">
    </div>

    <input type="submit" name="submit" class="btn btn-secondary" value="Submit">
    <a href="index.php" class="btn btn-default">Cancel</a>
    <input type="submit" name="delete" class="btn btn-danger" value="Delete">
   


</form>

<?php include 'includes/footer.php' ;?>