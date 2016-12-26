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
        Song Chart
        <small>Daftar lagu yang ada di sistem</small>
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
                  <th style="width: 10px">Posisi</th>
                  <th>Judul</th>
                  <th>Artis</th>
                  <th>Rilis</th>
                  <th style="width: 10px">Act</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>Ten Kayun Nyentana</td>
                  <td>Agus D. Nugraha</td>
                  <td>2016</td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default" onClick="window.location.href='chart-detail.php'">
                        <div class="pull-left">
                          <i class="fa fa-eye"></i> Detail
                        </div>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>7</td>
                  <td>2 Istri Cukup</td>
                  <td>Putu Krisna D.</td>
                  <td>2016</td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default" onClick="window.location.href='chart-detail.php'">
                        <div class="pull-left">
                          <i class="fa fa-eye"></i> Detail
                        </div>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>6</td>
                  <td>Aku Siap Berkomitmen</td>
                  <td>Novarolista Banunaek</td>
                  <td>2016</td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default" onClick="window.location.href='chart-detail.php'">
                        <div class="pull-left">
                          <i class="fa fa-eye"></i> Detail
                        </div>
                      </button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>15</td>
                  <td>Menunggu Dia Putus</td>
                  <td>Nyoman</td>
                  <td>2016</td>
                  <td>
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default" onClick="window.location.href='chart-detail.php'">
                        <div class="pull-left">
                          <i class="fa fa-eye"></i> Detail
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