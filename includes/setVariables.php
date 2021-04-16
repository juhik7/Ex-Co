<?php
require 'classes/Database.php';
require 'classes/Entry.php';
function setVar(){
	$today = date("Y-m-d");
	$prev_week = date("Y-m-d", strtotime("-7 day"));
	$prev_month = date('Y-m-01');
	$prev_year = date('Y-01-01');
	$vprv_year = date("Y-m-d", strtotime("-50 year"));
	$first_day_this_month = date('Y-m-01');
	$db = new Database();
	$conn = $db->getConn();
	//INCOME ENTRIES
	$today_inc_entries = Entry::getIncEntry($conn,$_SESSION['user'],$today);
	$weekly_inc_entries = Entry::getIncEntry($conn,$_SESSION['user'],$prev_week);
	$monthly_inc_entries = Entry::getIncEntry($conn,$_SESSION['user'],$prev_month);
	$yearly_inc_entries = Entry::getIncEntry($conn,$_SESSION['user'],$prev_year);
	//INCOME TOTAL
	$today_inc_total = Entry::getTotal($today_inc_entries);
	$_SESSION["inc_t"] = $today_inc_total;
	$weekly_inc_total = Entry::getTotal($weekly_inc_entries);
	$_SESSION["inc_w"] = $weekly_inc_total;
	$monthly_inc_total = Entry::getTotal($monthly_inc_entries);
	$_SESSION["inc_m"] = $monthly_inc_total;
	$yearly_inc_total = Entry::getTotal($yearly_inc_entries);
	$_SESSION["inc_y"] = $yearly_inc_total;
	//EXPENSE ENTRIES
	$today_exp_entries = Entry::getExpEntry($conn,$_SESSION['user'],$today);
	$weekly_exp_entries = Entry::getExpEntry($conn,$_SESSION['user'],$prev_week);
	$monthly_exp_entries = Entry::getExpEntry($conn,$_SESSION['user'],$prev_month);
	$yearly_exp_entries = Entry::getExpEntry($conn,$_SESSION['user'],$prev_year);
	//EXPENSE TOTAL
	$today_exp_total = Entry::getTotal($today_exp_entries);
	$_SESSION["exp_t"] = $today_exp_total;
	$weekly_exp_total = Entry::getTotal($weekly_exp_entries);
	$_SESSION["exp_w"] = $weekly_exp_total;
	$monthly_exp_total = Entry::getTotal($monthly_exp_entries);
	$_SESSION["exp_m"] = $monthly_exp_total;
	$yearly_exp_total = Entry::getTotal($yearly_exp_entries);
	$_SESSION["exp_y"] = $yearly_exp_total;

	//SAVINGS TOTAL
	$today_sav_total = $today_inc_total - $today_exp_total;
	$_SESSION["sav_t"] = $today_sav_total;
	$weekly_sav_total = $weekly_inc_total - $weekly_exp_total;
	$_SESSION["sav_w"] = $weekly_sav_total;
	$monthly_sav_total = $monthly_inc_total - $monthly_exp_total;
	$_SESSION["sav_m"] = $monthly_sav_total;
	$yearly_sav_total = $yearly_inc_total - $yearly_exp_total;
	$_SESSION["sav_y"] = $yearly_sav_total;

	//BUDGET CALCULATION
	$all_inc_entries = Entry::getIncEntry($conn,$_SESSION['user'],$vprv_year);
	$all_exp_entries = Entry::getExpEntry($conn,$_SESSION['user'],$vprv_year);
	$all_inc_total = Entry::getTotal($all_inc_entries);
	$all_exp_total = Entry::getTotal($all_exp_entries);
	$all_sav_total = $all_inc_total-$all_exp_total;
	$budget = round(($all_sav_total-$monthly_sav_total)/12);
	$budget = round($budget+$monthly_sav_total);
	$_SESSION["bud_t"] = round($budget/28);
	$_SESSION["bud_m"] = $budget;
	$_SESSION["bud_w"] = round($budget/4);
	$_SESSION["bud_y"] = $budget*12;
}

?>