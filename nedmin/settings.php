<?php
require_once 'header.php';
require_once 'sidebar.php';
?>


  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
      <div class="row">

        <?php 

          if (isset($_GET['settingsInsert'])) { ?>
            
        
<!--
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Yönetici Ekle</h3>
              </div>

              <?php 
                    if (isset($_POST['settings_insert'])) {
                      $sonuc=$db->insert("settings",$_POST,[
                        "form_name"=>"settings_insert",
                        "dir"=>"settings",
                        "file_name"=>"settings_file",
                        "pass"=>"settings_pass"
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
                        <input type="file" name="settings_file" required class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Ad Soyad</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="settings_name" required class="form-control" placeholder="Adınızı giriniz">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı Adı</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="settings_username" required class="form-control" placeholder="Kullanıcı adınızı giriniz">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı Şifreniz</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="password" name="settings_pass" required class="form-control" placeholder="Şifrenizi giriniz">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı Durum</label>
                    <div class="row">
                      <div class="col-md-12">
                        <select class="form-control" name="settings_status">
                          <option value="1">Aktif</option>
                          <option value="0">Pasif</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="float-right box-footer">
                    <button type="submit" class="btn btn-success" name="settings_insert">Ekle</button>
                  </div>
                </form>
              </div>

            </div>
          </div> -->

           <?php   }else if (isset($_GET['settingsUpdate'])) { ?>  

            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ayar Düzenle</h3>
              </div>

              <?php 
                    if (isset($_POST['settings_update'])) {
                      $sonuc=$db->update("settings",$_POST,[
                        "form_name"=>"settings_update",
                        "columns"=>"settings_id",
                        "dir"=>"settings",
                        "file_name"=>"settings_value",
                        "file_delete"=>"delete_file"
                      ]);
                      if ($sonuc['status']) {?>
                          <div class="alert alert-success">Kayıt Başarılı</div>
                      <?php }else{?>
                          <div class="alert alert-danger">Kayıt Başarısız</div>
                      <?php }
                    }


                        $sql=$db->wread("settings","settings_id",$_GET['settings_id']);
                        $row=$sql->fetch(PDO::FETCH_ASSOC);

                        
               ?>

            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label>Açıklama</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="settings_description" readonly class="form-control" value="<?php echo $row['settings_description'] ?>">
                      </div>
                    </div>
                  </div>

                  <?php 

                  if ($row['settings_type']=="file") {?>
                  
                  <div class="form-group">
                    <label>Resim</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="file" name="settings_value" class="form-control">
                      </div>
                    </div>
                  </div>
                  <?php } ?>

                  <div class="form-group">
                    <label>İçerik</label>
                    <div class="row">
                      <div class="col-md-12">

                        <?php 
                          if ($row['settings_type']=="text") {?>
                            <input type="text" name="settings_value" class="form-control" value="<?php echo $row['settings_value'] ?>">
                        <?php  } else if ($row['settings_type']=="textarea") {?>
                            <textarea class="form-control" name="settings_value"><?php echo $row['settings_value'] ?></textarea>
                        <?php  }else if ($row['settings_type']=="editor") {?>
                            <textarea class="form-control" id="editor" name="settings_value"><?php echo $row['settings_value'] ?></textarea>
                        <?php  }else if ($row['settings_type']=="file") {?>
                            <a href="<?php echo $row['settings_value'] ?>" target="_blank"><img width="100" src="dimg/settings/<?php echo $row['settings_value'] ?>"></a>
                        <?php  } ?>
                        

                      </div>
                    </div>
                  </div>

                  <input type="hidden" name="delete_file" value="<?php echo $row['settings_value'] ?>">
                  <input type="hidden" name="settings_id" value="<?php echo $row['settings_id']; ?>">
                  <div class="float-right box-footer">
                    <button type="submit" class="btn btn-success" name="settings_update">Düzenle</button>
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
                <h3 class="card-title">Ayarlar</h3>
                <?php if (isset($_GET['settingsDelete'])) {
                        $sonuc=$db->delete("settings","settings_id",$_GET['settings_id'],$_GET['file_delete']);
                        if ($sonuc['status']) {?>
                          <div class="alert alert-success">Silme Başarılı</div>
                      <?php }else{?>
                          <div class="alert alert-danger">Silme Başarısız</div>
                      <?php } } ?>
                 <!--<a href="?settingsInsert=true"><button class="btn btn-outline-success btn-sm float-right">Yeni Kullanıcı</button></a>-->
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Ad</th>
                    <th>İçerik</th>
                    <th>Key</th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody id="sortable">

                    <?php 

                    $sql=$db->read("settings",[
                      "columns_name" => "settings_order",
                      "columns_sort" => "ASC"                      
                    ]);
                    while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { ?>
                  <tr id="item-<?php echo $row['settings_id'] ?>">
                    <td class="sortable"><?php echo $row['settings_description'] ?></td>
                    <td><?php 

                    if ($row['settings_type']=="file") { ?>
                      <img width="100" src="dimg/settings/<?php echo $row['settings_value'] ?>">
                    <?php }else{
                       echo $row['settings_value']; 
                    }                   

                  ?></td>
                    <td><?php echo $row['settings_key'] ?></td>
                    <td align="text-center" width="5"><a href="?settingsUpdate=true&settings_id=<?php echo $row['settings_id'] ?>"><i class="fa fa-edit"></i></a></td>
                    <td align="text-center" width="5"><a href="?settingsDelete=true&settings_id=<?php echo $row['settings_id'] ?>&file_delete=<?php $a=$row['settings_value']; if($a=="file"){ echo $row['settings_value'];} ?>"><i class="fa fa-trash alert-danger"></i></a></td>
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
          url:"netting/order-ajax.php?settings_order=true",
          success:function(msg) {
           alert("Sıralama Başarılı...");
          }
        });
      }
    });
    $("#sortable").disableSelection();
  });
</script>
