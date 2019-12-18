<!DOCTYPE html>
<html>
<head>
	<title> Sistem Pendukung Keputusan </title>
	<style type="text/css">
	.container {
		/*width: 800px;*/
		margin: 0 auto;
	}
		.header {
			background-color: white;
			min-height: 50px; 
			text-align: center;
		}

		
		.content {
			background-color: white;
			min-height: 200px;
			overflow: auto;
		}

		.footer {
			background-color: white;
			width: 100%;
			padding: 5px 5px;
			box-sizing: border-box;
			text-align: center;
		}

		.jumbotron {
			font-family: 'Raleway', sans-serif;
			width: 100%;
			padding: 80px 40px;
			box-sizing: border-box;
			text-align: center;
			color: white; 
			background-color: #aaa;	
			background-image: url("../Uts_web2/background.jpg");
			background-size: cover;
			position: relative;
		}

		.jb {
			font-family: 'Raleway', sans-serif;
			width: 100%;
			padding: 100px 50px;
			box-sizing: border-box;
			text-align: center; 
			color: white; 
			background-color: white;	
			background-size: cover;
			position: relative;
		}

		.jumbotron h2,
		.jumbotron p {
			position: relative;
		}

		.overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: white;
			opacity: 0.1;
		}
		.btn{
		background-color: ##00FFFF	;
		}


	</style>
</head>
<body>
	<div class="container">
	<div class="header">
		<!-- <h1>Logo Produk</h1> -->
		
	

	<div class="jumbotron">
		<div class="overlay"></div>
    	<h2>Sistem Pendukung Keputusan Keluarga Penerima Bantuan</h2>
   			<p>Situs Resmi Dinas Sosial Kota Depok</p>
	</div>

	<div class="jb">
	<table align="center">
	
	<tr>

		<td><form method="post" action="dataditerima.php">
		<button type="submit" style="width:500px; height: 50px; background-color: #F4A460	">Tampilkan Hasil</button>
	</form> </td>
	</tr>
		
	<tr>
	<td><form method="post" action="tampildata.php">
		<button type="submit" style="width: 500px; height: 50px; background-color: #F4A460	">Lihat Data</button>
	</form></td>
	</tr>

	

	</table>

	</div>

	<div class="footer">
	<tr>
	<td><p>copyright 2019 Kelompok 5</p></td>
		
	</tr>
	</div>
	</div>

</body>
</html>