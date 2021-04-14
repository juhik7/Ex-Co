<?php

class User
{
	public $id;
	public $username;
	public $password;
	public $email;
	public $age;
	public $errors = [];
    public static function authenticate($conn, $email, $password)
    {
        $sql = "SELECT *
                FROM users
                WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
        $stmt->execute();

        if ($user = $stmt->fetch()) {
        	$_SESSION['user'] = $user->username;
        	return password_verify($password, $user->password);
        }
    }
    
    protected function validate()
    {

        if ($this->username == '') {
            $this->errors[] = 'Username is required';
        }
        if ($this->password == '') {
            $this->errors[] = 'Password is required';
        }
        if ($this->email == '') {
            $this->errors[] = 'E-Mail is required';
        }
        if ($this->age == '') {
            $this->errors[] = 'Age is required';
        }
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)){
        	$this->errors[] = 'Invalid E-Mail Format';
        }

        return empty($this->errors);
    }

    public function create($conn)
    {
        if ($this->validate()) {
        	try{
	            $sql = "INSERT INTO users (username, password, email, age)
	                    VALUES (:username, :password, :email, :age)";
	            $stmt = $conn->prepare($sql);
	            $stmt->bindValue(':username', $this->username, PDO::PARAM_STR);
	            $stmt->bindValue(':password', $this->password, PDO::PARAM_STR);
	            $stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
	            $stmt->bindValue(':age', $this->age, PDO::PARAM_INT);

	            $user_check_query = "SELECT * FROM  users WHERE name = :username or email = :email LIMIT 1";
	            if ($stmt->execute()) {
	                $this->id = $conn->lastInsertId();
	                return true;
	            }else{
	            	return false;
	            }
        	}catch (PDOException $e) {
        		$this->errors[] = 'E-Mail Id/Username Already Registered';
			}

        } else {
            return false;
        }
    }

}
