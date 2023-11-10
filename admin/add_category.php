<?php include ('includes/header.php');?>
<?php 
    $db = new Database();

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($db->link, $_POST['name']);
       
        
        if($name == ''){
            echo $error = 'Please fill out all fields!';

        }else{
            $query = "INSERT INTO category (name) VALUES ('$name')";
           
           $update_row = $db->update($query);
        }
    }
?>
<form method="post" action="add_category.php">
    <div class="form-group">
        <label class="form-label">Category Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Category">
    </div>
    <div>
        <input type="submit" name="submit" class="btn btn-secondary" value="Submit">
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>

<?php include 'includes/footer.php' ;?>