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
          Program
          <small>Tambah Program</small>
        </h1>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
        <form action"" method="post" enctype="multipart/form-data">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="box box-warning">
              <div class="box-body box-profile">
                <lavel>Preview</lavel>
                <img class="img-responsive" src="../dist/img/no-image.png" alt="Program Picture">
                <hr>
                <lavel>Browse Foto :</lavel>
                <input required name="foto" type="file" id="fotoArtikel">
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <!-- About Me Box -->
            <div class="box box-warning">
              <div class="box-header with-border">
                <h3 class="box-title"><i class="fa fa-plus margin-r-5"></i>Required Data</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div class="form-group">
                  <label>Pilih Jenis Program</label>
                  <select required name="jenis" class="form-control" id="jenis" onchange="myFunction()">
                    <option value="" disabled selected hidden>Pilih Jenis Program</option>
                    <option value="mingguan" >Mingguan</option>
                    <option value="spesial" selected>Spesial</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pilih Program</label>
                  <select required name="nama" class="form-control">
                    <option value="" disabled selected hidden>Pilih Program</option>
                    <option>Meong</option>
                    <option>Bungut</option>
                    <option>7 Hari 7 Malam</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pilih Crew</label>
                  <select required name="nama" class="form-control">
                    <option value="" disabled selected hidden>Pilih Crew</option>
                    <option>Meong</option>
                    <option>Kuluk Monk</option>
                  </select>

                </div>

                <!-- dinamic -->
                <div class="form-group" id="change">
                  
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="schedule.php" class="btn btn-default"><i class="fa fa-close"></i> Cancel</a>
                <button type="submit" class="btn btn-default pull-right"><i class="fa fa-check text-green"></i> Submit</button>
              </div>
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </form>
        </div>
      </section>
      <!-- /.content -->
    </div>

<!-- bootstrap datepicker -->
<script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
  function myFunction() {
      var x = document.getElementById("jenis");
      var mingguan = "<label>Ne Yen Program Mingguan</label><br>" + 
                  "<select required name='hari' class='form-control'>" +
                  "<option value='' disabled selected hidden>Pilih Hari</option>" +
                  "<option>Senin</option>" +
                  "<option>Selasa</option>" +
                  "<option>Rabu</option>" +
                  "<option>Kamis</option>" +
                  "<option>Jumat</option>" +
                  "<option>Sabtu</option>" +
                  "<option>Minggu</option>" +
                  "</select>";

      var spesial = "<label>Ne Yen Program Special</label><br>" +
                    "<div class='input-group date'>" +
                    "<div class='input-group-addon'>" +
                    "<i class='fa fa-calendar'></i>" +
                    "</div>" +
                    "<input type='text' class='form-control pull-right' id='datepicker'>" +
                    "</div>";

      if (x.value == 'mingguan') {
        document.getElementById("change").innerHTML = mingguan;
      }else {
        document.getElementById("change").innerHTML = spesial;
      }
      
      
    $('#datepicker').datepicker({
        autoclose: true
      });      
  } 

  $(function (){
    myFunction();
  });
</script>
<?php
  include 'footer.php'
?>
</html>