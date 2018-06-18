<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2018 All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Kontrol Kabupaten -->
<script type="text/javascript">
          $(document).ready(function(){
              $('#provinsi').change(function(){
                  var id=$(this).val();
                  $.ajax({
                      url : "<?php echo base_url();?>home/get_kabupaten",
                      method : "POST",
                      data : {id: id},
                      async : false,
                      dataType : 'json',
                      success: function(data){
                          var html = '';
                          var i;
                          for(i=0; i<data.length; i++){
                              //html += '<option>'+data[i].nama_kabupaten+'</option>';
                              html += '<option value='+data[i].id_kabupaten+'>'+data[i].nama_kabupaten+'</option>';
                          }
                          $('.kabupaten').html(html);

                      }
                  });
              });
          });
      </script>
<!--Kontrol Menu-->
<script type="text/javascript">
  $(function() {
    $('#nav a[href~="' + location.href + '"]').parents('li').addClass('active');
  });
</script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Baca File Gambar -->
<script type="text/javascript">
  function bacaGambar(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
 
      reader.onload = function (e) {
          $('#gambar_nodin').attr('src', e.target.result);
      }
 
      reader.readAsDataURL(input.files[0]);
   }
  }
  $("#preview_gambar").change(function(){
     bacaGambar(this);
  });
</script>
<!-- Penghitung Jumlah Karakter -->
<script type="text/javascript">
  $(document).ready(function(){
      var left = 500
      $('#text_counter').text('Characters left: ' + left);
     
        $('#textarea').keyup(function () {
     
        left = 500 - $(this).val().length;
     
        if(left < 0){
          $('#text_counter').addClass("overlimit");
           $('#posting').attr("disabled", true);
        }
        else{
          $('#text_counter').removeClass("overlimit");
          $('posting').attr("disabled", false);
        }
     
        $('#text_counter').text('Characters left: ' + left);
      });
    });     
</script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>assets/dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>assets/dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dashboard/dist/js/adminlte.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url() ?>assets/dashboard/plugins/iCheck/icheck.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/dashboard/bower_components/select2/dist/js/select2.full.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  //Initialize Select2 Elements
    $('.select2').select2()
  //Date picker
     $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd',
    })
    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd',
    })
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })
</script>
<!-- Select2 -->
</body>
</html>