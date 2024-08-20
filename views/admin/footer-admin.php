<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2024 </strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url?>node_modules/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?=base_url?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> 
  
<!-- AdminLTE App -->
<script src="<?=base_url?>node_modules/admin-lte/dist/js/adminlte.min.js"></script>
<script src="<?=base_url?>assets/admin/js/scripts.js"></script>
<!-- Dropzone -->
<script src="<?=base_url?>node_modules/admin-lte/plugins/dropzone/min/dropzone.min.js"></script>
 
<!-- Ocultar alertas -->
<script>
      window.addEventListener('load', function() {
   
    setTimeout(function() {
        var alerts = document.querySelectorAll('.alert');
        alerts.forEach(function(alert) {
            alert.classList.add('hidden');
        });
    }, 5000);
});
    </script>
    <script>
  $(document).ready(function(){
    $('#openModalBtn').click(function(){
      $('#myModal').modal('show');
    });
  });
</script>

</body>
</html>
<?php
ob_end_flush();
?>