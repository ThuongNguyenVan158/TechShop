<?php

class DB{

    public $con;
    public $error;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "techshop";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        if(!$this->con){
			$this->error = "Connection failed".mysqli_connect_error();
			return false;
		}
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }

    public function select($query)
	{
		$result = $this->con->query($query);
		if($result->num_rows > 0){
			return $result;
		}
		return false;
	}

    public function insert($query){
        $insert_row = $this->con->query($query);
		if($insert_row){
			return $insert_row;
		}
		return false;
    }

    public function multi_insert($query){
        $insert_row = $this->con->multi_query($query);
		if($insert_row){
			return $insert_row;
		}
		return false;
    }

    public function update($query)
	{
		$update_row = $this->con->query($query);
		if($update_row){
			return $update_row;
		}
		return false;
	}

	public function delete($query)
	{
		$delete_row = $this->con->query($query);
		if($delete_row){
			return $delete_row;
		}
		return false;
	}

    public function procedure($query)
	{
		$stmt = $this->con->query($query);
		if($stmt){
			return $stmt;
		}
		return false;
	}

}

?>