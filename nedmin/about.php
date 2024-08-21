<?php
require_once 'header.php';
require_once 'sidebar.php';
?>


  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
      <div class="row">

        <?php 

          if (isset($_GET['aboutInsert'])) { ?>
            
        

        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kurumsal Ekle</h3>
              </div>

              <?php 
                    if (isset($_POST['about_insert'])) {
                      $sonuc=$db->insert("about",$_POST,[
                        "form_name"=>"about_insert",
                        "slug" => "about_slug",
                        "title" => "about_title"
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
                    <label>Kurumsal Title</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="about_title" required class="form-control" placeholder="about adını giriniz">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Kurumsal Slug</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="about_slug"  class="form-control" placeholder="about slug'nı giriniz">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Kurumsal İçerik</label>
                    <div class="row">
                      <div class="col-md-12">
                        <textarea class="form-control" id="editor" name="about_content"></textarea>
                      </div>
                    </div>
                  </div>
                  
                  <div class="float-right box-footer">
                    <button type="submit" class="btn btn-success" name="about_insert">Ekle</button>
                  </div>
                </form>
              </div>

            </div>
          </div>

           <?php   }else if (isset($_GET['aboutUpdate'])) { ?>  

            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kurumsal Düzenle</h3>
              </div>

              <?php 
                    if (isset($_POST['about_update'])) {
                      $sonuc=$db->update("about",$_POST,[
                        "form_name"=>"about_update",
                        "slug" => "about_slug",
                        "title" => "about_title",
                        "columns"=>"about_id"
                      ]);
                      if ($sonuc['status']) {?>
                          <div class="alert alert-success">Kayıt Başarılı</div>
                      <?php }else{?>
                          <div class="alert alert-danger">Kayıt Başarısız</div>
                      <?php }
                    }


                        $sql=$db->wread("about","about_id",$_GET['about_id']);
                        $row=$sql->fetch(PDO::FETCH_ASSOC);

                        
               ?>

            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label>Kurumsal Title</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="about_title" required class="form-control" value="<?php echo $row['about_title'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Kurumsal Slug</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="about_slug" class="form-control" value="<?php echo $row['about_slug'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Kurumsal İçerik</label>
                    <div class="row">
                      <div class="col-md-12">
                        <textarea class="form-control" id="editor" name="about_content"><?php echo $row['about_content'] ?></textarea>
                      </div>
                    </div>
                  </div>

                  <input type="hidden" name="about_id" value="<?php echo $row['about_id'] ?>">
                  <div class="float-right box-footer">
                    <button type="submit" class="btn btn-success" name="about_update">Düzenle</button>
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
                <h3 class="card-title">Kurumsal Listele</h3>
                <?php if (isset($_GET['aboutDelete'])) {
                        $sonuc=$db->delete("about","about_id",$_GET['about_id']);
                        if ($sonuc['status']) {?>
                          <div class="alert alert-success">Silme Başarılı</div>
                      <?php }else{?>
                          <div class="alert alert-danger">Silme Başarısız</div>
                      <?php } } ?>
                 <a href="?aboutInsert=true"><button class="btn btn-outline-success btn-sm float-right">Yeni about</button></a>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th align="text-center" width="5">#</th>
                    <th>Kurumsal Title</th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody id="sortable">

                    <?php 

                    $sql=$db->read("about",[
                      "columns_name" => "about_order",
                      "columns_sort" => "ASC"                      
                    ]);
                    $say=0;
                    while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { $say++; ?>
                  <tr id="item-<?php echo $row['about_id'] ?>">
                    <td><?php echo $say; ?></td>
                    <td class="sortable"><?php echo $row['about_title'] ?></td>
                    
                    <td align="text-center" width="5"><a href="?aboutUpdate=true&about_id=<?php echo $row['about_id'] ?>"><i class="fa fa-edit"></i></a></td>
                    <td align="text-center" width="5"><a href="?aboutDelete=true&about_id=<?php echo $row['about_id'] ?>"><i class="fa fa-trash"></i></a></td>
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
<script>
  $('#editor').summernote({
    placeholder: "Metin Girin",
    height: 100,               
    focus: false,
    codeviewFilter: false,
    codeviewIframeFilter: true,
    toolbar: [
    ['geri', ['undo', 'redo']],
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['fontsize', ['fontsize']],
    ['fontname', ['fontname']],
    ['color', ['forecolor', 'backcolor']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['abc', ['link', 'picture', 'video', 'table']],
    ['codeview', ['codeview']]
    ],
  });
</script>

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
          url:"netting/order-ajax.php?about_order=true",
          success:function(msg) {
           alert("Sıralama Başarılı...");
          }
        });
      }
    });
    $("#sortable").disableSelection();
  });
</script>