<?php
require 'classes/Database.php';
require 'classes/Entry.php';
session_start();
$today = date("Y-m-d");
$yesterday = date("Y-m-d", strtotime("-1 day"));
$tommorow = date("Y-m-d", strtotime("+1 day"));
$prev_week = date("Y-m-d", strtotime("-1 month"));
$prev_year = date("Y-m-d", strtotime("-1 year"));
$now = time();
$your_date = strtotime($prev_week);
$datediff = floor(($now - $your_date)/(60 * 60 * 24));
echo "$today <br />";
echo "$tommorow <br />";
echo "$yesterday <br />";
echo "$prev_week <br />";
echo "$prev_year <br />";
$db = new Database();
$conn = $db->getConn();
$entries = Entry::getExpEntry($conn,$_COOKIE["user"],$prev_year);
$entries_2 = Entry::getExpEntry($conn,$_COOKIE["user"],$prev_week);
$total_1 = Entry::getTotal($entries);
$total_2 = Entry::getTotal($entries_2);
$first_day_this_month = date('Y-m-01');
$today_perc = min(abs(round(($_SESSION["inc_t"]/$_SESSION["bud"])*100)),100);
$weekly_perc = min(abs(round(($_SESSION["inc_w"]/$_SESSION["bud"])*100)),100);
$month_perc = min(abs(round(($_SESSION["inc_m"]/$_SESSION["bud"])*100)),100);
$yearly_perc = min(abs(round(($_SESSION["inc_y"]/$_SESSION["bud"])*100)),100);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo $_SESSION["bud"]."<br>" ?>
<?php echo $today_perc."<br>" ?>
<?php echo $weekly_perc."<br>" ?>
<?php echo $yearly_perc."<br>" ?>
</body>
</html>
