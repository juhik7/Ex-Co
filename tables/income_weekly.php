<?php
require '../classes/Database.php';
require '../classes/Entry.php';
session_start();
$db = new Database();
$conn = $db->getConn();
$prev_week = date("Y-m-d", strtotime("-7 day"));
$weekly_inc_entries = Entry::getIncEntry($conn,$_COOKIE["user"],$prev_week);
?>
<!DOCTYPE html>
<html>
<head>
	<title>WEEKLY INCOME</title>
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
	<legend><h2 align="center" style="color: #007fff;">WEEKLY INCOME</h2></legend>
	<?php if (empty($weekly_inc_entries)) : ?>
    	<h2 align="center">NO ENTRIES</h2>
	<?php else : ?>
		<table style="width:60%" border="1" cellpadding="10px" align="center">
			<tr>
				<th>AMOUNT</th>
				<th>BY</th>
				<th>DATE</th>
				<th>SOURCE</th>
			</tr>
			<?php foreach ($weekly_inc_entries as $entry) : ?>
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