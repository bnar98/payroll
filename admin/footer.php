</section>
<script>function myFunction() {
			var sidebar = document.getElementById("sidebar");
			var employeeName = document.getElementById("employee-name");
			var emploeeIcon = document.getElementById("employee-icon");
			var userName = document.getElementById("user-name");
			var userIcon = document.getElementById("user-icon");
			var locName = document.getElementById("loc-name");
			var locIcon = document.getElementById("loc-icon");
			var persName = document.getElementById("pers-name");
			var persIcon = document.getElementById("pers-icon");

			var employeeLi = document.getElementById("employee-li");
			var userLi = document.getElementById("user-li");
			var locLi = document.getElementById("loc-li");
			var persLi = document.getElementById("pers-li");

			
			if (employeeName.style.display === "none") {
			
				sidebar.style.width="300px";
				employeeName.style.display="inline";
			   emploeeIcon.style.fontSize="20px";
			   userName.style.display="inline";
			   userIcon.style.fontSize="20px";
			   
			 employeeLi.style.marginRight="0px";
			 userLi.style.marginRight="0px";
			 locLi.style.marginRight="0px";
			 persLi.style.marginRight="0px";

			 locName.style.display="inline";
			 locIcon.style.fontSize="20px";
			 persName.style.display="inline";
			   userIcon.style.fontSize="20px";

			  

			} else {
				sidebar.style.width="80px";
				employeeName.style.display="none";
				userIcon.style.fontSize="25px";
				persName.style.display="none";
				emploeeIcon.style.fontSize="25px";
				employeeLi.style.marginRight="-50px";
				userLi.style.marginRight="-50px";
				locLi.style.marginRight="-50px";
				persLi.style.marginRight="-50px";

			locName.style.display="none";
			locIcon.style.fontSize="25px";
			 userName.style.display="none";
			 persIcon.style.fontSize="25px";


			 
			}
		  }</script>
		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="assets/vendor/jquery-appear/jquery.appear.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
		<script src="assets/vendor/flot/jquery.flot.js"></script>
		<script src="assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
		<script src="assets/vendor/raphael/raphael.js"></script>
		<script src="assets/vendor/morris/morris.js"></script>
		<script src="assets/vendor/gauge/gauge.js"></script>
		<script src="assets/vendor/snap-svg/snap.svg.js"></script>
		<script src="assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="assets/javascripts/dashboard/examples.dashboard.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
          <script type="text/javascript" src="js/index.js"></script>
	</body>
</html>