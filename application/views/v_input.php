<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter</title>
</head>
<body>
	<form action="<?php echo base_url('index.php/insert/tambah') ; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>From</td>
				<td><input type="text" name="rute_from"></td>
			</tr>
			<tr>
				<td>To</td>
				<td><input type="text" name="rute_to"></td>
			</tr>
			<tr>
				<td>Departure Date</td>
				<td><input type="text" name="depart_at"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price"></td>
			</tr>
			<tr>
				<td>Transport ID</td>
				<td><input type="text" name="transportid"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>