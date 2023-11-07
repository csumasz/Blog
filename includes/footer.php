
</div>
    <div class="col-sm-3 col-sm-offset blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p><?php echo $site_description; ?></p>
        </div>
        <div class="sidebar-module">
            <h4>Categories</h4>
            <?php if($categories) : ?>
            <ol class="list-unstyled">
                <?php while($row = $categories->fetch_assoc()) : ?>
                    <li><a href="posts.php?category=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></li>
                <?php endwhile;?>
                
            </ol>
            <?php else : ?>
                <p>There are no categories yet</p>
            <?php endif; ?>
        </div>
    </div>
    </div>
</main>
<footer class="blog-footer">
        <p>PHPLoversBlog &copy; 2014</p>
        <p >
          <a href="#">Back to top</a>
        </p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <script src="js/bootstrap.js"></script>

    </body>
</html>