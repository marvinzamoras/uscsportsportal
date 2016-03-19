
 <!-- Footer Section -->
    <footer>
        <div class="container">
            <div ><p style="text-align:center" class="copyright">© 2014  - All Rights Reserved </p></div>
        </div>
        
        </div>
    </footer>

    <!-- Libs -->

    <script type='text/javascript' src='<?php echo base_url('/assets/js/libs/jquery.flexslider-min.js');?>'></script>

    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script src="<?php echo base_url('/assets/js/jquery.bxslider.min.js');?>"></script>

    <!-- Custom -->
    <script src="<?php echo base_url('/assets/js/scripts.js');?>"></script>
    <script>
            $(document).ready(function() {
        $('#example').DataTable();
} );
        </script>
        <script>
            $(document).ready(function() {
    $('#example1').DataTable( {
        "order": [[ 1, "dsc" ]]
    } );
} );
        </script>
        <script>
            $(document).ready(function() {
    $('#example2').DataTable( {
        "order": [[ 1, "dsc" ]]
    } );
} );
        </script>
        <script>
            $(document).ready(function() {
    $('#example3').DataTable( {
        "order": [[ 1, "asc" ]]
    } );
} );
        </script>

        <script>
            $(document).ready(function() {
    $('#example4').DataTable( {
        "order": [[ 3, "dsc" ]]
    } );
} );
        </script>

         <script>
            $(document).ready(function() {
    $('#example5').DataTable( {
        "order": [[ 3, "asc" ]]
    } );
} );
        </script>

        <script>
            $(document).ready(function() {
                $('#example9').DataTable( {
                    "order": [[ 1, "asc" ]]
                } );
            } );
        </script>



</body>
</html>