<?php
require_once 'header.php';
require_once 'sidebar.php';
?>


  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
      <div class="row">

       <?php 


function sifre($uzunluk=10){

$karakterler="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";

$olustur=substr( str_shuffle($karakterler),0, $uzunluk );

return $olustur;
}

echo sifre(8);

?>
<!--
        <div class="col-md-12">
                        <textarea id="editor" class="ckeditor">Classic CKEditor Working Fine</textarea>
                    <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
                  <script>
                        ClassicEditor
                        .create( document.querySelector( '#editor' ) ).catch( error => {console.error( error );} );
                    </script>
                </div>-->


      </div>
    </div>
    </section>
  </div>
  <?php require_once 'footer.php'; ?>
