<?php
 include('header.php');
?>
 <!-- little introduction -->
 <?php
 include('aboutus1.php');
 ?>
<!--  main content -->
<br>
<div class="w3-row-padding">
		<div class="col-md-12  bgcolo">
			<h2 style="text-align: center;">Our Menu</h2>
			<br>
		</div>

	<div class="w3-col m3">
		<div class="w3-card-4 w3-border w3-topbar w3-border-black w3-black" style="font-size:px;">
			<br>
			<a href="" style=" text-decoration: none; text-decoration-color: white; padding-left: 20px">&nbsp;&nbsp;Our Market</a>
			<hr class="w3-white">
			<!-- <a href="" style=" text-decoration: none; text-decoration-color: white">&nbsp;&nbsp;Adelokhe Farms</a> -->
			<div class="w3-container">
				<button onclick="myFunction('Demo1')" id="btn1" class="w3-button w3-block w3-left-align glyphicon glyphicon-plus font-weight-30" title="click to view options" onmouseout ="myFunc()">
				Adelokhe Farms</button>
				<div id="Demo1" class="w3-hide">
				  <a class="w3-button w3-block w3-left-align" href="#">Fish Production</a>
				  <a class="w3-button w3-block w3-left-align" href="#">Poultry</a>
				  <a class="w3-button w3-block w3-left-align" href="#">Snail Production</a>
				  <a class="w3-button w3-block w3-left-align" href="#">Grasscutter Production</a>
				</div>
			</div>
<script type="text/javascript" src="bootstrap/js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
function myFunc(){
	var y = document.getElementById('btn1');
	y.className.replace("glyphicon-plus","glyphicon-minus")
}
</script>

			<hr class="w3-white">
			<a href="" style=" text-decoration: none; text-decoration-color: white; padding-left: 20px">&nbsp;&nbsp;Adelokhe Foods</a>
			<hr class="w3-white">
			<a href="" style=" text-decoration: none; text-decoration-color: white; padding-left: 20px">&nbsp;&nbsp;Delivery</a>
			<hr class="w3-white">
			<a href="" style=" text-decoration: none; text-decoration-color: white; padding-left: 20px">&nbsp;&nbsp;ICT login</a>
			<hr class="w3-white">
			<!-- <div class="w3-col w3-card-4 w3-border w3-topbar w3-border-black w3-light-green w3-center w3-margin-top" style="height: 180px; padding-top: 10px;"> -->
			<a href="" style=" text-decoration: none;"><img src="images/feedback2.png"></a>
			<hr class="w3-white">
			<!-- </div> -->
		</div>
	</div>
		<div class="row">
				
		<!-- </div> -->
		<!-- <div class="row"> -->
			<!-- <div class="w3-dropdown-hover"> -->
				<div class="col-md-2 image">
					<img src="images/cake.jpg">
					<h2 class="center">Cakes</h2>
				</div>
			
			<div class="col-md-2 image">
				<img src="images/smallchops.png">
				<h2 class="center">Small Chops</h2>
			</div>
			<div class="col-md-2 img-responsive">
				<img src="images/snacks.png">
				<h2 class="center">Snacks</h2>
			</div>
			<div class="col-md-2 img-responsive">
				<img src="images/whiterice.png">
				<h2 class="center">White Rice</h2>
			</div>
			<div class="col-md-2 img-responsive">
				<img src="images/salad.png">
				<h2 class="center">Salad</h2>
			</div>
			<div class="col-md-2 img-responsive">
				<img src="images/semovita.png">
				<h2 class="center">Semovita</h2>
			</div>	
			<div class="col-md-2 img-responsive">
				<img src="images/nativesoup.png">
				<h2 class="center">Native Soup</h2>
			</div>
			<div class="col-md-2 img-responsive">
				<img src="images/friedplantain.png">
				<h2 class="center">Fried Plantain</h2>
			</div>
			<div class="col-md-2 img-responsive">
				<img src="images/egusi.png">
				<h2 class="center">Egusi soup</h2>
			</div>
			
		</div>	
</div>
<!-- newsletter section -->
<div class="w3-bar w3-green" style="margin-top: 40px; padding: 30px; padding-bottom: 30px">
			<div class="text-uppercase glyphicon glyphicon-envelope w3-bar-item" id="newslettersize">&nbsp;Subscribe to our newsletter
			</div>
			<input type="email" name="text" class="w3-bar-item w3-input w3-white" placeholder="Your email..." size="30px" value="">
			<button type="submit" class="w3-button w3-bar-item w3-black">
      		Subscribe</button>
</div>
<?php
include('footer.php');
?>