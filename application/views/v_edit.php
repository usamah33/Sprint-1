<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	foreach ($rute as $r) { ?>
		<form action="<?php echo base_url("index.php/insert/update_rute"); ?>" method="post">
			<table>
				<tr>
					<td>From</td>
					<input type="hidden" name="ruteid" value="<?php echo $r->ruteid ?>">
					<td><input type="text" name="rute_from" value="<?php echo $r->rute_from ?>"></td>
				</tr>
				<tr>
					<td>To</td>
					<td><input type="text" name="rute_to" value="<?php echo $r->rute_to ?>"></td>
				</tr>
				<tr>
					<td>Departure Date</td>
					<td><input type="text" name="depart_at" value="<?php echo $r->depart_at ?>"></td>
				</tr>
				<tr>
					<td>Price</td>
					<td><input type="text" name="price" value="<?php echo $r->price ?>"></td>
				</tr>
				<tr>
					<td>Transport ID</td>
					<td><input type="text" name="transportid" value="<?php echo $r->transportid ?>"></td>
				</tr>
			</table>

			<input type="submit">
			</form>
			<?php } ?>
</body>
</html>