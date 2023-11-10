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
<?php
    if(isset($_POST['submit'])){
        $title = mysqli_real_escape_string($db->link, $_POST['title']);
        $body = mysqli_real_escape_string($db->link, $_POST['body']);
        $category = mysqli_real_escape_string($db->link, $_POST['category']);
        $author = mysqli_real_escape_string($db->link, $_POST['author']);
        $tags = mysqli_real_escape_string($db->link, $_POST['tags']);
        
        if($title == '' || $body == '' || $category == '' || $author == ''){
            echo $error = 'Please fill out all fields!';

        }else{
            $query = "UPDATE posts 
                    SET 
                    title = '$title',
                    body = '$body',
                    category = '$category',
                    author = '$author',
                    tags = '$tags'
                    WHERE id = ".$id;
           
           $update_row = $db->update($query);
        }
    }
?>
<?php
    if(isset($_POST['delete'])){
        $query = "DELETE FROM posts WHERE id = ".$id;
        $delete_row = $db->delete($query);
    }
?>

<form method="post" action="edit_post.php?id=<?php echo $id;?>">
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
            <option value="<?php echo $row['id'];?>" <?php echo $selected; ?>><?php echo $row['name']; ?></option>
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