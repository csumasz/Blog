<?php include ('includes/header.php');?>

<form method="post" action="edit_post.php">
    <div class="form-group">
        <label class="form-label">Post Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter Title">
    </div>

    <div class="form-group">
        <label class="form-label">Post Body</label>
        <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
    </div>
    
    <div class="form-group">
        <label class="form-label">Category Select</label>
        <select name="category" class="form-select" aria-label="Default select example">
            <option>News</option>
            <option>Events</option>
            
        </select>
    </div>

    <div class="form-group">
        <label class="form-label">Author</label>
        <input type="text" name="author" class="form-control" placeholder="Enter Author Name">
    </div>
    
    <div class="form-group">
        <label class="form-label">Tags</label>
        <input type="text" name="tags" class="form-control" placeholder="Enter tags">
    </div>

    <input type="submit" name="submit" class="btn btn-secondary" value="Submit">
    <a href="index.php" class="btn btn-default">Cancel</a>
    <input type="submit" name="delete" class="btn btn-danger" value="Delete">
   


</form>

<?php include 'includes/footer.php' ;?>