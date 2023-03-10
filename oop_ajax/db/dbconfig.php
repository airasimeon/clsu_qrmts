<?php
class myDB{
	private $servername="localhost";
	private $username="root";
	private $password="";
	private $dbname="oop_crud";
	public $res;

	public function __construct(){
	$this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
	}

	public function insert($table,$data){
		$table_columns = implode(',',array_keys($data));
		$table_value = implode("','",$data);

		$sql = "INSERT INTO $table($table_columns) VALUES ('$table_value')";

		$this->res = $this->mysqli->query($sql);
	}

	public function select($table,$row="*",$where=null){
		if($where!=null){
			$sql = "SELECT $row FROM $table WHERE $where";
		}else{
			$sql = "SELECT $row FROM $table";
		}

		$this->res = $this->mysqli->query($sql);
	}

	public function select_record($table,$where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value){
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		$sql .= "SELECT * FROM ".$table." WHERE ".$condition;
		$query = mysqli_query($this->mysqli,$sql);
		$row = mysqli_fetch_array($query);
		return $row;
	}

	public function update_record($table,$where,$fields){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value){
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		foreach ($fields as $key => $value){
			$sql .= $key . "='".$value."', ";
		}
		$sql = substr($sql, 0,-2);
		$sql = "UPDATE ".$table." SET ".$sql." WHERE ".$condition;
		if(mysqli_query($this->mysqli,$sql)){
			return true;
		}
	}

	public function delete_record($table,$where){
		$sql = "";
		$condition = "";
		foreach ($where as $key => $value){
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		$sql = "DELETE FROM ".$table." WHERE ".$condition;
		if(mysqli_query($this->mysqli,$sql)){
			return true;
		}
	}

	public function __destruct(){
		$this->mysqli->close();
	}
}
?>