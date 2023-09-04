<?php
//WXRADAR: Weather Radar v2.0dev

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link rel="stylesheet" href="css/site.css?rand=<?php echo rand(); ?>" type="text/css" /><!-- DEV: rand added -->		<title>WXRADARv2</title>
	</head>
	<body>
<div class="container1">
	<div class="DataBox RadarBox">
		<div class="RadarImgDEV"><img src="images/states.gif"/></div>
	</div>
	<div class="LeftBox">
		<!-- testing 3 DataBox divs  -->
			<div class="DataBox medium_data">
				<h3>Current:</h3>
				overcast clouds<br />
				58°F<br />
				1mph<br />
				235°<br />
			</div>
			<div class="DataBox">
				sunrise:04:55<br />
				sunset:19:37
			</div>
			<div class="DataBox">
				<h3>Observation:</h3>
				08/08/2021 <br />
				12:34:43z<br />
			</div>
			<div class="DataBox small_data">
				<h3>Forecast:</h3>
				Sun: 54/73:Becoming Sunny<br />
				Mon: 56/74:Mostly Clear<br />
				Tue: 57/75:Mostly Sunny<br />
				Wed: 59/79:Partly Cloudy<br />
				Thu: 61/84:Mostly Sunny<br />
			</div>
			<div class="DataBox">
				Station: KATX<br />
				Camano Island<br />
				48.1946, -122.4957<br />
			</div>
			<div class="SubContainer">
				<div class="DataBox Version">
					v0.92 dev
				</div>
				<div class="DataBox Credits">
					credits
				</div>
			</div>
	</div>

</div>

<!-- Load Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/site.css?random=<?php echo rand(); ?>" type="text/css" />

	</body>
</html>
