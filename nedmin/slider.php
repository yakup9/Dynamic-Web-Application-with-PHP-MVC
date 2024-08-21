<?php
require_once 'header.php';
require_once 'sidebar.php';
?>


  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
      <div class="row">

        <?php 

          if (isset($_GET['sliderInsert'])) { ?>
            
        

        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Slider Ekle</h3>
              </div>

              <?php 
                    if (isset($_POST['slider_insert'])) {
                      $sonuc=$db->insert("slider",$_POST,[
                        "form_name"=>"slider_insert",
                        "dir"=>"slider",
                        "file_name"=>"slider_file"
                      ]);
                      if ($sonuc['status']) {?>
                          <div class="alert alert-success">Kayıt Başarılı</div>
                      <?php }else{?>
                          <div class="alert alert-danger">Kayıt Başarısız</div>
                      <?php }
                    }
               ?>
             
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Resim Seç</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="file" name="slider_file" required class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Slider Title</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="slider_title" required class="form-control" placeholder="Slider adını giriniz">
                      </div>
                    </div>
                  </div>
                  
                  <div class="float-right box-footer">
                    <button type="submit" class="btn btn-success" name="slider_insert">Ekle</button>
                  </div>
                </form>
              </div>

            </div>
          </div>

           <?php   }else if (isset($_GET['sliderUpdate'])) { ?>  

            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Slider Düzenle</h3>
              </div>

              <?php 
                    if (isset($_POST['slider_update'])) {
                      $sonuc=$db->update("slider",$_POST,[
                        "form_name"=>"slider_update",
                        "columns"=>"slider_id",
                        "dir"=>"slider",
                        "file_name"=>"slider_file",
                        "file_delete"=>"delete_file"
                      ]);
                      if ($sonuc['status']) {?>
                          <div class="alert alert-success">Kayıt Başarılı</div>
                      <?php }else{?>
                          <div class="alert alert-danger">Kayıt Başarısız</div>
                      <?php }
                    }


                        $sql=$db->wread("slider","slider_id",$_GET['slider_id']);
                        $row=$sql->fetch(PDO::FETCH_ASSOC);

                        
               ?>

            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Resim</label>
                    <div class="row">
                      <div class="col-md-12">
                        <img style="width: 100px;" src="dimg/slider/<?php echo $row['slider_file'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                        <input type="file" name="slider_file" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Slider Title</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="slider_title" required class="form-control" value="<?php echo $row['slider_title'] ?>">
                      </div>
                    </div>
                  </div>

                  <input type="hidden" name="slider_id" value="<?php echo $row['slider_id'] ?>">
                  <input type="hidden" name="delete_file" value="<?php echo $row['slider_file'] ?>">
                  <div class="float-right box-footer">
                    <button type="submit" class="btn btn-success" name="slider_update">Düzenle</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

           <?php } 
           ?>

        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Slider Listele</h3>
                <?php if (isset($_GET['sliderDelete'])) {
                        $sonuc=$db->delete("slider","slider_id",$_GET['slider_id'],$_GET['file_delete']);
                        if ($sonuc['status']) {?>
                          <div class="alert alert-success">Silme Başarılı</div>
                      <?php }else{?>
                          <div class="alert alert-danger">Silme Başarısız</div>
                      <?php } } ?>
                 <a href="?sliderInsert=true"><button class="btn btn-outline-success btn-sm float-right">Yeni Slider</button></a>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th align="text-center" width="5">#</th>
                    <th>Slider Image</th>
                    <th>Slider Title</th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody id="sortable">

                    <?php 

                    $sql=$db->read("slider",[
                      "columns_name" => "slider_order",
                      "columns_sort" => "ASC"                      
                    ]);
                    $say=0;
                    while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { $say++; ?>
                  <tr id="item-<?php echo $row['slider_id'] ?>">
                    <td><?php echo $say; ?></td>
                    <td class="sortable"><img style="width: 100px;" src="dimg/slider/<?php echo $row['slider_file'] ?>"></td>
                    <td><?php echo $row['slider_title'] ?></td>
                    
                    <td align="text-center" width="5"><a href="?sliderUpdate=true&slider_id=<?php echo $row['slider_id'] ?>"><i class="fa fa-edit"></i></a></td>
                    <td align="text-center" width="5"><a href="?sliderDelete=true&slider_id=<?php echo $row['slider_id'] ?>&file_delete=<?php echo $row['slider_file'] ?>"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

      </div>
    </div>
    </section>
  </div>
  <?php require_once 'footer.php'; ?>

<script type="text/javascript">
 
  $(function() {
    $("#sortable").sortable({
      revert:true,
      handle:".sortable",
      stop:function(event,ui) {
        var data=$(this).sortable('serialize');
        console.log(data);
        $.ajax({
          type:"POST",
          dataType:"json",
          data:data,
          url:"netting/order-ajax.php?slider_order=true",
          success:function(msg) {
           alert("Sıralama Başarılı...");
          }
        });
      }
    });
    $("#sortable").disableSelection();
  });
</script>