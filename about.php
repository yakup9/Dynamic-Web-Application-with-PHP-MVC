<?php 
require_once 'header.php';

$sql=$db->wread("about","about_slug",$_GET['slug']);
$row=$sql->fetch(PDO::FETCH_ASSOC);

?>

<style type="text/css">
 
 .actives{
  font-weight: bold;
}
</style>
<!-- Page Content -->
<div class="container">

  <ol style="margin-top:35px;" class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="index.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Kurumsal</li>
  </ol>

  <div class="row">
    <!-- Sidebar Column -->
    <div class="col-lg-9 mb-4">
      <h2><?php echo $row['about_title']; ?></h2>
      <p><?php echo $row['about_content'];?></p>
    </div>

    <div class="col-lg-3 mb-4">
      <div class="list-group">
        <?php 

        $sql=$db->read("about",[

          "columns_name"=>"about_order",
          "columns_sort"=>"ASC"

        ]);
        while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>
          <a href="kurumsal/<?php echo $db->seo($row['about_slug']); ?>" class="list-group-item <?php echo $_GET['slug']==$row['about_slug'] ? 'actives' : '' ?>"><?php echo $row['about_title'] ?></a>
        <?php } ?>
      </div>
    </div>
    <!-- Content Column -->
    
  </div>

</div>

</div>
<!-- /.container -->

<?php require_once 'footer.php'; ?>