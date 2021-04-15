<?php
require '../classes/Database.php';
require '../classes/Entry.php';
session_start();
$db = new Database();
$conn = $db->getConn();
$prev_year = date('Y-01-01');
$yearly_exp_entries = Entry::getExpEntry($conn,$_COOKIE["user"],$prev_year);
?>
<!DOCTYPE html>
<html>
<head>
	<title>YEARLY EXPENSES</title>
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
	<legend><h2 align="center" style="color: #007fff;">YEARLY EXPENSES</h2></legend>
	<?php if (empty($yearly_exp_entries)) : ?>
    	<h2 align="center">NO ENTRIES</h2>
	<?php else : ?>
		<table style="width:60%" border="1" cellpadding="10px" align="center">
			<tr>
				<th>AMOUNT</th>
				<th>BY</th>
				<th>DATE</th>
				<th>REASON</th>
			</tr>
			<?php foreach ($yearly_exp_entries as $entry) : ?>
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