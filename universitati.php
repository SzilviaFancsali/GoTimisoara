<?php
	$title = "GoTimișoara - Universități";
	include("includes/header.php");
?>	

	<div class="campus">
	<table id="uniTable">
	<tr>
	<td>
	<img src="images/universitati/uvt.jpg" style="width:100%"></img>
	</td>
	<td class="content_atractii" >

	<div id="mapUVT" style="height:90%; width: 90%;"></div>
	</td>
	</tr>
	<tr>
	<td class="content_atractii" >

	<div id="mapUPT" style="height:90%; width: 90%;"></div>
	</td>
	<td>
	<img src="images/universitati/upt.jpg" style="width:100%"></img>
	</td>
	</tr>
	<tr>
	<td>
	<img src="images/universitati/USAMVB.jpg" style="width:100%"></img>
	</td>
	<td class="content_atractii">
	<div id="mapUSAMVB" style="height:90%; width: 90%;"></div>
	</td>
	</tr>
	<tr>
	<td>

	<div id="mapUMFT" style="height:90%; width: 90%;"></div>
	</td>
	<td>
	<img src="images/universitati/medicina.jpg" style="width:100%"></img>
	</td>
	</tr>
	</table>
	</div>
	<?php include 'map_include_uni.php'; ?>
	<?php
include("includes/footer.php");
?>