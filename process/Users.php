<?php

require "Connection.php";

/**
 * 
 */
class Users extends Connection
{
	public $conn;
	protected $table = 'tb_karyawan';
	
	function __construct()
	{
		$this->conn = parent::start();
	}

	function all($field = '*')
	{
		$sql = "SELECT $field FROM ".$this->table;
		$result = $this->conn->query($sql);
		return $result;
		// return $sql;
	}

	function find($id_karyawan)
	{
		$sql = "SELECT * FROM ". $this->table. " WHERE id_karyawan = $id_karyawan";
		$result = $this->conn->query($sql);
		return $result;
		// return $sql;
	}

	function create($payloads)
	{

		$password = password_hash($payloads['password'], PASSWORD_DEFAULT);

		$sql = "INSERT INTO ". $this->table. " (nama_karyawan, no_tlp, email, username, password, levels) VALUES (
			'".$payloads['nama_karyawan']."',
			'".$payloads['no_tlp']."',
			'".$payloads['email']."',
			'".$payloads['username']."',
			'".$password."',
			'Karyawan'
			
		)";	

		return $this->conn->query($sql);
				// return $sql;
	}

	function update($id_karyawan, $payloads)
	{
		$sql = "UPDATE ". $this->table ." SET ".
			"nama_karyawan = '". $payloads['nama_karyawan'] ."',
			no_tlp = '". $payloads['no_tlp'] ."',
			levels = '". $payloads['levels'] ."'
			WHERE id_karyawan = $id_karyawan";

		return $this->conn->query($sql);
	}

	function delete($id_karyawan)
	{
		$sql = "DELETE FROM ". $this->table ." WHERE id_karyawan = $id_karyawan";
		return $this->conn->query($sql);
	}

	function login($payloads)
	{
		$sql = "SELECT * FROM tb_karyawan WHERE username='".$payloads['username']."' OR email ='".$payloads['email']."'";

		return $this->conn->query($sql);
	}

	function jumlahkar()
	{
		$sql = "SELECT
			    COUNT(id_karyawan) totalkar
				FROM
			    tb_karyawan;";
		$result = $this->conn->query($sql);
		return $result;
	}

	function logLogin($payloads)
	{
		$sql = "INSERT INTO log (id_karyawan, notes) VALUES ('".$payloads['username']."', 'Melakukan Login')";
		$result = $this->conn->query($sql);

	}
}


// $user = new Users();
// $payload = [
// 			"username" => 'gdeguna',
// 			"email" => 'gdeguna@gmail.com'
// 		];

// 	$data = $user->login($payload);

// var_dump($data);