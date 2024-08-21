<?php require_once 'header.php'; 
 require_once 'slider.php'; ?>
 
  
  <div class="container">

    <h2 class="mt-4">Bloglar</h2>

    <div class="row">
    <?php 

      $sql=$db->read("blog",[
        "columns_name" => "blog_order",
        "columns_sort" => "DESC",
        "limit" => 6                      
      ]);
      while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>
    
      <div class="col-lg-4 col-sm-6 portfolio-item">
        <div class="card h-100">
          <a href="bloglar/<?php echo $row['blog_slug']; ?>"><img class="card-img-top" src="nedmin/dimg/blog/<?php echo $row['blog_file'] ?>" alt="<?php echo $row['blog_title'] ?>"></a>
          <div class="card-body">
            <h4 class="card-title">
              <a href="bloglar/<?php echo $row['blog_slug']; ?>"><?php echo $row['blog_title'] ?></a>
            </h4>
            <p class="card-text"><?php echo mb_substr($row['blog_content'], 0,200); ?></p>
            <a href="bloglar/<?php echo $row['blog_slug']; ?>" class="btn btn-primary btn-sm">Daha Fazla &rarr;</a>
          </div>
        </div>
      </div>
        <?php } ?>
    </div>
    

    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-6">
        <?php echo $settings['home1'] ?>
      </div>
      <div class="col-lg-6">
        <img class="img-fluid rounded" src="nedmin/dimg/settings/<?php echo $settings['gorsel'] ?>" alt="gorsel">
      </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Call to Action Section -->
    <div class="row mb-4">
      <div class="col-md-8">
        <p><?php echo $settings['slogan'] ?></p>
      </div>
      <div class="col-md-4">
        <a class="btn btn-lg btn-secondary btn-block" href="<?php echo $settings['slogan_url'] ?>">TEST</a>
      </div>
    </div>

  </div>
  <!-- /.container -->

<?php require_once 'footer.php'; ?>
  