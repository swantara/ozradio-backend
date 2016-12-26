<!DOCTYPE html>
<html>

<?php
  include 'head.php';
?>

<?php
  include 'sidebar.php';
?>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advertising List
        <small>Daftar iklan yang ada di sistem</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Iklan</th>
                  <th>Status</th>
                  <th style="width: 10px">Act</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Iklan XL</td>
                  <td>Aktif</td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default" onClick="window.location.href='advertising-detail.php'">
                        <div class="pull-left">
                          <i class="fa fa-eye"></i> Detail
                        </div>
                      </button>
                      <button type="button" class="btn btn-danger" onClick="">
                        <div class="pull-left">
                          <i class="fa fa-trash"></i> Delete
                        </div>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Iklan Indosat Oreedoo</td>
                  <td>Tidak Aktif</td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default" onClick="window.location.href='advertising-detail.php'">
                        <div class="pull-left">
                          <i class="fa fa-eye"></i> Detail
                        </div>
                      </button>
                      <button type="button" class="btn btn-danger" onClick="">
                        <div class="pull-left">
                          <i class="fa fa-trash"></i> Delete
                        </div>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Iklan Indomie</td>
                  <td>Aktif</td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default" onClick="window.location.href='advertising-detail.php'">
                        <div class="pull-left">
                          <i class="fa fa-eye"></i> Detail
                        </div>
                      </button>
                      <button type="button" class="btn btn-danger" onClick="">
                        <div class="pull-left">
                          <i class="fa fa-trash"></i> Delete
                        </div>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Iklan Durex</td>
                  <td>Tidak Aktif</td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default" onClick="window.location.href='advertising-detail.php'">
                        <div class="pull-left">
                          <i class="fa fa-eye"></i> Detail
                        </div>
                      </button>
                      <button type="button" class="btn btn-danger" onClick="">
                        <div class="pull-left">
                          <i class="fa fa-trash"></i> Delete
                        </div>
                      </button>
                    </div>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="box-footer">
              <a href="advertising-tambah.php" class="btn btn-default"><i class="fa fa-plus text-green"></i> New Advertising</a>
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

  <!-- DataTables -->
  <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>

<?php
  include 'footer.php'
?>
</html>