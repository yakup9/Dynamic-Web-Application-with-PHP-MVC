<?php
require_once 'header.php';
require_once 'sidebar.php';
?>


  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
      <div class="row">

        <?php 

          if (isset($_GET['adminInsert'])) { ?>
            
        

        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Yönetici Ekle</h3>
              </div>

              <?php 
                    if (isset($_POST['admin_insert'])) {
                      $sonuc=$db->insert("admin",$_POST,[
                        "form_name"=>"admin_insert",
                        "dir"=>"admin",
                        "file_name"=>"admin_file",
                        "pass"=>"admin_pass"
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
                        <input type="file" name="admin_file" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Ad Soyad</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="admin_name" required class="form-control" placeholder="Adınızı giriniz">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı Adı</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="admin_username" required class="form-control" placeholder="Kullanıcı adınızı giriniz">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı Şifreniz</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="password" name="admin_pass" required class="form-control" placeholder="Şifrenizi giriniz">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Kullanıcı Durum</label>
                    <div class="row">
                      <div class="col-md-12">
                        <select class="form-control" name="admin_status">
                          <option value="1">Aktif</option>
                          <option value="0">Pasif</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="float-right box-footer">
                    <button type="submit" class="btn btn-success" name="admin_insert">Ekle</button>
                  </div>
                </form>
              </div>

            </div>
          </div>

           <?php   }else if (isset($_GET['adminUpdate'])) { ?>  

            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Yönetici Düzenle</h3>
              </div>

              <?php 
                    if (isset($_POST['admin_update'])) {
                      $sonuc=$db->update("admin",$_POST,[
                        "form_name"=>"admin_update",
                        "columns"=>"admin_id",
                        "dir"=>"admin",
                        "file_name"=>"admin_file",
                        "file_delete"=>"delete_file",
                        "pass"=>"admin_pass"
                      ]);
                      if ($sonuc['status']) {?>
                          <div class="alert alert-success">Kayıt Başarılı</div>
                      <?php }else{?>
                          <div class="alert alert-danger">Kayıt Başarısız</div>
                      <?php }
                    }


                        $sql=$db->wread("admin","admin_id",$_GET['admin_id']);
                        $row=$sql->fetch(PDO::FETCH_ASSOC);

                        
               ?>

            <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label>Resim</label>
                    <div class="row">
                      <div class="col-md-12">
                        <img style="width: 100px;" src="dimg/admin/<?php echo $row['admin_file'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-12">
                        <input type="file" name="admin_file" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Ad Soyad</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="admin_name" required class="form-control" value="<?php echo $row['admin_name'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Kullanıcı Adı</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="text" name="admin_username" required class="form-control" value="<?php echo $row['admin_username'] ?>">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Kullanıcı Şifre</label>
                    <div class="row">
                      <div class="col-md-12">
                        <input type="password" name="admin_pass" class="form-control">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Kullanıcı Durum</label>
                    <div class="row">
                      <div class="col-md-12">
                        <select class="form-control" name="admin_status">
                          <option <?php echo $row['admin_status']==1 ? 'selected' : '' ?> value="1">Active</option>
                          <option <?php echo $row['admin_status']==0 ? 'selected' : '' ?> value="0">Passive</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <input type="hidden" name="admin_id" value="<?php echo $row['admin_id'] ?>">
                  <input type="hidden" name="delete_file" value="<?php echo $row['admin_file'] ?>">
                  <div class="float-right box-footer">
                    <button type="submit" class="btn btn-success" name="admin_update">Düzenle</button>
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
                <h3 class="card-title">Yöneticiler</h3>
                <?php if (isset($_GET['adminDelete'])) {
                        $sonuc=$db->delete("admin","admin_id",$_GET['admin_id'],$_GET['file_delete']);
                        if ($sonuc['status']) {?>
                          <div class="alert alert-success">Silme Başarılı</div>
                      <?php }else{?>
                          <div class="alert alert-danger">Silme Başarısız</div>
                      <?php } } ?>
                 <a href="?adminInsert=true"><button class="btn btn-outline-success btn-sm float-right">Yeni Kullanıcı</button></a>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th align="text-center" width="5">#</th>
                    <th>Kullanıcı Adı</th>
                    <th>Ad Soyad</th>
                    <th>Durum</th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody id="sortable">

                    <?php 

                    $sql=$db->read("admin",[
                      "columns_name" => "admin_order",
                      "columns_sort" => "ASC"                      
                    ]);
                    $say=0;
                    while ($row=$sql->fetch(PDO::FETCH_ASSOC)) { $say++; ?>
                  <tr id="item-<?php echo $row['admin_id'] ?>">
                    <td><?php echo $say; ?></td>
                    <td class="sortable"><?php echo $row['admin_username'] ?></td>
                    <td><?php echo $row['admin_name'] ?></td>
                    <td><?php 
                        if ($row['admin_status']==1) { ?>
                          <span class="badge badge-success">Aktif</span>
                        <?php     }elseif($row['admin_status']==0){  ?>
                          <span class="badge badge-danger">Pasif</span>
                      <?php } ?>
                    </td>
                    <td align="text-center" width="5"><a href="?adminUpdate=true&admin_id=<?php echo $row['admin_id'] ?>"><i class="fa fa-edit"></i></a></td>
                    <td align="text-center" width="5"><a href="?adminDelete=true&admin_id=<?php echo $row['admin_id'] ?>&file_delete=<?php echo $row['admin_file'] ?>"><i class="fa fa-trash"></i></a></td>
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
          url:"netting/order-ajax.php?admin_order=true",
          success:function(msg) {
           alert("Sıralama Başarılı...");
          }
        });
      }
    });
    $("#sortable").disableSelection();
  });
</script>
