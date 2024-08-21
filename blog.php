<?php require_once 'header.php'; ?>
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h2 class="mt-4 mb-3">Blog Sayfası</h2>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Blog</li>
    </ol>

    <?php 

      $sql=$db->read("blog",[
        "columns_name" => "blog_order",
        "columns_sort" => "ASC"                      
      ]);
      while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>
    <!-- Blog Post -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <a href="bloglar/<?php echo $row['blog_slug']; ?>">
              <img class="img-fluid rounded" src="nedmin/dimg/blog/<?php echo $row['blog_file'] ?>" alt="">
            </a>
          </div>
          <div class="col-lg-6">
            <h2 class="card-title"><?php echo $row['blog_title'] ?></h2>
            <p class="card-text"><?php echo mb_substr($row['blog_content'], 0,450); ?></p>
            <a href="bloglar/<?php echo $row['blog_slug']; ?>" class="btn btn-primary">Daha Fazla &rarr;</a>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        <?php echo $db->tDate($row['blog_time'],['date'=>TRUE]); ?>
      </div>
    </div>
    <?php } ?>
    <!-- 
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>
    Pagination -->

  </div>

  </div>
  <!-- /.container -->

 <?php require_once 'footer.php'; ?>