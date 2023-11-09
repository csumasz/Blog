<?php include ('includes/header.php');?>

<form method="post" action="edit_category.php">
    <div class="form-group">
        <label class="form-label">Category Name</label>
        <input type="email" name="name" class="form-control" placeholder="Enter Category">
    </div>
    <div>
        <input type="submit" name="submit" class="btn btn-secondary" value="Submit">
        <a href="index.php" class="btn btn-default">Cancel</a>
        <input type="submit" name="delete" class="btn btn-danger" value="Delete">
    </div>
</form>

<?php include 'includes/footer.php' ;?>