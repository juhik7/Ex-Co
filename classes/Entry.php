<?php

class Entry
{
    public $tran_id;
	public $username;
	public $amount;
	public $tran_date;
    public $source;
    public $remark;
	public $errors = [];
    public static function getIncEntry($conn,$name,$d){
        $sql = "SELECT *
                FROM income
                WHERE username = '$name' AND
                tran_date >= '$d'";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getTotal($entries){
        $total = 0;
        foreach ($entries as $entry) {
            $total = $total + $entry['amount'];
        }
        return $total;
    }
    public static function getExpEntry($conn,$name,$d){
        $sql = "SELECT *
                FROM expense
                WHERE username = '$name' AND
                tran_date >= '$d'";

        $results = $conn->query($sql);

        return $results->fetchAll(PDO::FETCH_ASSOC);
    }
    protected function validate()
    {
        if ($this->username == '') {
            $this->errors[] = 'Username is required';
        }
        if ($this->amount == '') {
            $this->errors[] = 'Amount is required';
        }
        if ($this->source == '') {
            $this->errors[] = 'Source is required';
        }
        if ($this->tran_date == '') {
            $this->errors[] = 'Date is required';
        }
        if($this->tran_date != ''){
            $prev_week = date("Y-m-d", strtotime("-7 day"));
            $tommorow = date("Y-m-d", strtotime("+1 day"));
            if ($this->tran_date<=$prev_week) {
                $this->errors[]= 'Only last 7 days data can be entered';
            }else if($this->tran_date>=$tommorow){
                $this->errors[]= 'You Cannot Enter Future Data';
            }

        }
        return empty($this->errors);
    }

    public function createInc($conn)
    {
        if ($this->validate()) {
        	try{
	            $sql = "INSERT INTO income (username, amount, tran_date, source, remark)
	                    VALUES (:username, :amount, :tran_date, :source, :remark )";
	            $stmt = $conn->prepare($sql);
	            $stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
                $stmt->bindValue(':amount', $this->amount, PDO::PARAM_INT);
	            $stmt->bindValue(':tran_date', $this->tran_date, PDO::PARAM_STR);
	            $stmt->bindValue(':source', $this->source, PDO::PARAM_STR);
                if ($this->remark == '') {
                    $stmt->bindValue(':remark', null, PDO::PARAM_NULL);
                } else {
                    $stmt->bindValue(':remark', $this->remark, PDO::PARAM_STR);
                }
	            if ($stmt->execute()) {
	                return true;
	            }else{
	            	return false;
	            }
        	}catch (PDOException $e) {
        		$this->errors[] = 'Error Found';
			}

        } else {
            return false;
        }
    }

    public function createExp($conn)
    {
        if ($this->validate()) {
            try{
                $sql = "INSERT INTO expense (username, amount, tran_date, source, remark)
                        VALUES (:username, :amount, :tran_date, :source, :remark )";

                $stmt = $conn->prepare($sql);
                $stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
                $stmt->bindValue(':amount', $this->amount, PDO::PARAM_INT);
                $stmt->bindValue(':tran_date', $this->tran_date, PDO::PARAM_STR);
                $stmt->bindValue(':source', $this->source, PDO::PARAM_STR);
                if ($this->remark == '') {
                    $stmt->bindValue(':remark', null, PDO::PARAM_NULL);
                } else {
                    $stmt->bindValue(':remark', $this->remark, PDO::PARAM_STR);
                }
                if ($stmt->execute()) {
                    return true;
                }else{
                    return false;
                }
            }catch (PDOException $e) {
                $this->errors[] = 'Error Found';
            }

        } else {
            return false;
        }
    }
}
