<?php
require_once 'header.php';
require_once 'sidebar.php';
?>


  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
      <div class="row">

        <?php 

          if (isset($_GET['blogInsert'])) { ?>
            
        

        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Blog Ekle</h3>
              </div>

              <?php 
                    if (isset($_POST['blog_insert'])) {
                      $sonuc=$db->insert("blog",$_POST,[
                        "form_name"=>"blog_insert",
                        "slug" => "blog_slug",
                        "title" => "blog_title",
                        "dir"=>"blog",
                        "file_name"=>"blog_file"
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
                        <input type="file" name="blog_file" required class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Blog Title</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="blog_title" required class="form-control" placeholder="blog adını giriniz">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Blog Slug</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="blog_slug"  class="form-control" placeholder="blog slug'nı giriniz">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Blog İçerik</label>
                    <div class="row">
                      <div class="col-md-12">
                        <textarea class="form-control" id="editor" name="blog_content"></textarea>
                      </div>
                    </div>
                  </div>
                  
                  <div class="float-right box-footer">
                    <button type="submit" class="btn btn-success" name="blog_insert">Ekle</button>
                  </div>
                </form>
              </div>

            </div>
          </div>

           <?php   }else if (isset($_GET['blogUpdate'])) { ?>  

            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Blog Düzenle</h3>
              </div>

              <?php 
                    if (isset($_POST['blog_update'])) {
                      $sonuc=$db->update("blog",$_POST,[
                        "form_name"=>"blog_update",
                        "slug" => "blog_slug",
                        "title" => "blog_title",
                        "columns"=>"blog_id",
                        "dir"=>"blog",
                        "file_name"=>"blog_file",
                        "file_delete"=>"delete_file"
                      ]);
                      if ($sonuc['status']) {?>
                          <div class="alert alert-success">Kayıt Başarılı</div>
                      <?php }else{?>
                          <div class="alert alert-danger">Kayıt Başarısız</div>
                      <?php }
                    }


                        $sql=$db->wread("blog","blog_id",$_GET['blog_id']);
                        $row=$sql->fetch(PDO::FETCH_ASSOC);

                        
               ?>

            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Resim</label>
                    <div class="row">
                      <div class="col-md-12">
                        <img style="width: 100px;" src="dimg/blog/<?php echo $row['blog_file'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                        <input type="file" name="blog_file" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Blog Title</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="blog_title" required class="form-control" value="<?php echo $row['blog_title'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Blog Slug</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="blog_slug" class="form-control" value="<?php echo $row['blog_slug'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Blog İçerik</label>
                    <div class="row">
                      <div class="col-md-12">
                        <textarea class="form-control" id="editor" name="blog_content"><?php echo $row['blog_content'] ?></textarea>
                      </div>
                    </div>
                  </div>

                  <input type="hidden" name="blog_id" value="<?php echo $row['blog_id'] ?>">
                  <input type="hidden" name="delete_file" value="<?php echo $row['blog_file'] ?>">
                  <div class="float-right box-footer">
                    <button type="submit" class="btn btn-success" name="blog_update">Düzenle</button>
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
                <h3 class="card-title">Blog Listele</h3>
                <?php if (isset($_GET['blogDelete'])) {
                        $sonuc=$db->delete("blog","blog_id",$_GET['blog_id'],$_GET['file_delete']);
                        if ($sonuc['status']) {?>
                          <div class="alert alert-success">Silme Başarılı</div>
                      <?php }else{?>
                          <div class="alert alert-danger">Silme Başarısız</div>
                      <?php } } ?>
                 <a href="?blogInsert=true"><button class="btn btn-outline-success btn-sm float-right">Yeni blog</button></a>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th align="text-center" width="5">#</th>
                    <th>Blog Title</th>
                    <th width="850">Blog İçerik</th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody id="sortable">

                    <?php 

                    $sql=$db->read("blog",[
                      "columns_name" => "blog_order",
                      "columns_sort" => "ASC"                      
                    ]);
                    $say=0;
                    while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { $say++; ?>
                  <tr id="item-<?php echo $row['blog_id'] ?>">
                    <td><?php echo $say; ?></td>
                    <td class="sortable"><?php echo $row['blog_title'] ?></td>
                    <td><?php echo $row['blog_content'] ?></td>
                    
                    <td align="text-center" width="5"><a href="?blogUpdate=true&blog_id=<?php echo $row['blog_id'] ?>"><i class="fa fa-edit"></i></a></td>
                    <td align="text-center" width="5"><a href="?blogDelete=true&blog_id=<?php echo $row['blog_id'] ?>&file_delete=<?php echo $row['blog_file'] ?>"><i class="fa fa-trash"></i></a></td>
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
          url:"netting/order-ajax.php?blog_order=true",
          success:function(msg) {
           alert("Sıralama Başarılı...");
          }
        });
      }
    });
    $("#sortable").disableSelection();
  });
</script>