<?php
require '../classes/Database.php';
require '../classes/Entry.php';
session_start();
$db = new Database();
$conn = $db->getConn();
$prev_month = date('Y-m-01');
$monthly_inc_entries = Entry::getIncEntry($conn,$_COOKIE["user"],$prev_month);
?>
<!DOCTYPE html>
<html>
<head>
	<title>MONTHLY INCOME</title>
	<style>
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		th{
		  padding: 5px;
		  text-align: center;    
		}
		td {
		  padding: 5px;
		  text-align: center;    
		}
	</style>
</head>
<body>
<fieldset>
	<legend><h2 align="center" style="color: #007fff;">MONTHLY INCOME</h2></legend>
	<?php if (empty($monthly_inc_entries)) : ?>
    	<h2 align="center">NO ENTRIES</h2>
	<?php else : ?>
		<table style="width:60%" border="1" cellpadding="10px" align="center">
			<tr>
				<th>AMOUNT</th>
				<th>BY</th>
				<th>DATE</th>
				<th>SOURCE</th>
			</tr>
			<?php foreach ($monthly_inc_entries as $entry) : ?>
			<tr>
				<td><?php echo $entry['amount'] ?></td>
				<td><?php echo $entry['username'] ?></td>
				<td><?php echo $entry['tran_date'] ?></td>
				<td><?php echo $entry['source'] ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	<?php endif; ?>
</fieldset>
</body>
</html>