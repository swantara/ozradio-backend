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
        Schedule
        <small>Daftar schedule yang ada di sistem</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <!-- /.box-header -->
            <div class="box-header">
              <a href="schedule-tambah.php" class="btn btn-default"><i class="fa fa-plus text-green"></i> Tambah Schedule</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 10px">No</th>
                  <th>Ponggawa</th>
                  <th>On Air</th>
                  <th>Off Air</th>
                  <th style="width: 10px">Act</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Meong</td>
                  <td>senin-selasa</td>
                  <td>
                    rabu
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default" onClick="window.location.href='program-detail.php'">
                        <div class="pull-left">
                          <i class="fa fa-eye"></i> Detail
                        </div>
                      </button>
                      <button type="button" class="btn btn-default" onClick="">
                        <div class="pull-left">
                          <i class="fa fa-power-off text-green"></i> Aktifkan
                        </div>
                      </button>
                      <button type="button" class="btn btn-default" onClick="">
                        <div class="pull-left">
                          <i class="fa fa-power-off text-red"></i> Non-aktifkan
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
                  <td>Kuluk Monk</td>
                  <td>senin-selasa</td>
                  <td>
                    rabu
                  </td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default" onClick="window.location.href='schedule-detail.php'">
                        <div class="pull-left">
                          <i class="fa fa-eye"></i> Detail
                        </div>
                      </button>
                      <button type="button" class="btn btn-default" onClick="">
                        <div class="pull-left">
                          <i class="fa fa-power-off text-green"></i> Aktifkan
                        </div>
                      </button>
                      <button type="button" class="btn btn-default" onClick="">
                        <div class="pull-left">
                          <i class="fa fa-power-off text-red"></i> Non-aktifkan
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
        "lengthChange": false,
        "searching": false,
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