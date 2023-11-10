<?php include ('includes/header.php');?>
<?php
    $id = $_GET['id'];

    $db = new Database();

    //Create query
    $query = "SELECT * FROM category WHERE id = ".$id;

    //run query
    $category = $db->select($query)->fetch_assoc();

     //Create query
     $query = "SELECT * FROM category";

     //run query
     $categories = $db->select($query);
?>
<?php
    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($db->link, $_POST['name']);
       
        
        if($name == '' ){
            echo $error = 'Please fill out all fields!';

        }else{
            $query = "UPDATE category 
                    SET 
                    name = '$name'
                    WHERE id = ".$id;
           
           $update_row = $db->update($query);
        }
    }
?>
<?php
    if(isset($_POST['delete'])){
        $query = "DELETE FROM category WHERE id = ".$id;
        $delete_row = $db->delete($query);
    }
?>
<form method="post" action="edit_category.php?id=<?php echo $id;?>">
    <div class="form-group">
        <label class="form-label">Category Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Category" value="<?php echo $category['name']; ?>">
    </div>
    <div>
        <input type="submit" name="submit" class="btn btn-secondary" value="Submit">
        <a href="index.php" class="btn btn-default">Cancel</a>
        <input type="submit" name="delete" class="btn btn-danger" value="Delete">
    </div>
</form>

<?php include 'includes/footer.php' ;?>