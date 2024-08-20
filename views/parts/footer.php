<footer class="container-fluid">
      COPYRIGHT 2024
    </footer>
    <!-- Bootstrap -->
    <script src="<?=base_url?>node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> 
    <!-- Archivos javascript -->
    <script src="<?=base_url?>assets/public/js/scripts.js"></script>
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
</body>
</html>
<?php
ob_end_flush();
?>