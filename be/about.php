<!DOCTYPE html>
<html>

<?php
  include 'head.php';
?>

<?php
  include 'sidebar.php';
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          About
          <small>Detail About</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <!-- About Me Box -->
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-quote-right margin-r-5"></i> Deskripsi</h3>
                <button type="button" class="btn btn-default pull-right" onClick="window.location.href='about-edit.php'">
                <i class="fa fa-edit text-yellow margin-r-5"></i> Edit
                </button>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <strong>Alamat</strong>
                <p>Alamatnya Oz</p>
                <hr/>
                <strong>Telepon</strong>
                <p>(0361)888888</p>
                <hr/>
                <strong>Email</strong>
                <p>oz@oz-bali.com</p>
                <hr/>
                <strong>Instagram</strong>
                <p>OZ Radio Bali</p>
                <hr/>
                <strong>Facebook</strong>
                <p>OZ Radio Bali</p>
                <hr/>
                <strong>Twitter</strong>
                <p>OZ Radio Bali</p>
                <hr/>
                <strong>Youtube</strong>
                <p>OZ Radio Bali</p>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </section>
      <!-- /.content -->
    </div>

<?php
  include 'footer.php'
?>
</html>