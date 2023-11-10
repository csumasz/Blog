<?php include ('includes/header.php');?>
<?php
  $db = new Database;

  $query = "SELECT posts.*, category.name FROM posts
            INNER JOIN  category 
            ON posts.category = category.id
            ORDER BY posts.id DESC";
  $posts = $db->select($query);

   //Create query
   $query = "SELECT * FROM category ORDER BY name DESC";

   //run query
   $categories = $db->select($query);

?>
<!-- Content -->

<table class="table table-striped">
  <tr>
    <th>Post ID#</th>
    <th>Post Title</th>
    <th>Post Category</th>
    <th>Post Author</th>
    <th>Post Date</th>
  </tr>
  <?php while($row = $posts->fetch_assoc()) :?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><a href="edit_post.php?id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['author'];?></td>
      <td><?php echo formatDate($row['date']);?></td>
    </tr>
    <?php endwhile;?>
</table>

<table class="table table-striped">
  <tr>
    <th>Category ID#</th>
    <th>Category Name</th>
  </tr>
  <?php while($row = $categories->fetch_assoc()) :?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><a href="edit_category.php?id=<?php echo $row['id'];?>"><?php echo $row['name'];?></a></td>
    </tr>
    <?php endwhile;?>
</table>

<?php include 'includes/footer.php' ;?>


            