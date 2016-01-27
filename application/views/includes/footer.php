
 <!-- Footer Section -->
    <footer>
		<div class="container">
			<div class="col-2"><a href="index.html"><img src="<?php echo base_url('/assets/css/images/footer-logo.png');?>" alt=""/></a></div>
			<div class="col-6">
				<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as </p>
			<div class="col-4">
				<div class="social-icon">
					<ul id="social">
						<li><a href="#"><img src="<?php echo base_url('/assets/css/images/soc-twitter.png');?>" alt=""/></a></li>
						<li><a href="#"><img src="<?php echo base_url('/assets/css/images/soc-facebook.png');?>" alt=""/></a></li>
						<li><a href="#"><img src="<?php echo base_url('/assets/css/images/soc-g.png');?>" alt=""/></a></li>
						<li><a href="#"><img src="<?php echo base_url('/assets/css/images/soc-play.png');?>" alt=""/></a></li>
					</ul>
				</div>
			</div><div class="col-6"><p class="copyright">© 2014  - All Rights Reserved </p></div>
			</div>
			<div class="col-2">
			<h3>Information</h3>
				<ul >
					<li><a href="club.html">About club</a></li>
					<li><a href="team.html">Our team</a></li>
					<li><a href="#">Registration</a></li>
					<li><a href="#">Features</a></li>
					<li><a href="#">404 page</a></li>

				</ul>
			</div>
			<div class="col-2">
			<h3>Support</h3>
				<ul>
					<li><a href="#">Terms of Service</a></li>
					<li><a href="#">Security</a></li>
					<li><a href="#">Privacy PolicyHomepage</a></li>
					<li><a href="#">Sitemap</a></li>
					<li><a href="#">FAQ</a></li>
				</ul>
			</div>
		</div>
    </footer>

    <!-- Libs -->
    <
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
</body>
</html>