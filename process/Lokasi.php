<?php

require "Connection.php";

/**
 * 
 */
class Lokasi extends Connection
{
	public $conn;
	protected $table = 'tb_lokasi';
	
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

	// function find($id)
	// {
	// 	$sql = "SELECT * FROM ". $this->table. " WHERE id = $id";
	// 	$result = $this->conn->query($sql);
	// 	return $result;
	// 	// return $sql;
	// }

	function create($payloads)
	{
		$sql = "INSERT INTO ". $this->table. " (lokasi) VALUES (
			'".$payloads['lokasi']."'
		)";	

		return $this->conn->query($sql);
				// return $sql;
	}

	// function update($id_barang, $payloads)
	// {
	// 	$sql = "UPDATE ". $this->table ." SET ".
	// 		"nama_barang = '". $payloads['nama_barang'] ."',
	// 		jenis_barang = '". $payloads['jenis_barang'] ."',
	// 		vendor = '". $payloads['vendor'] ."',
	// 		merek = '". $payloads['merek'] ."',
	// 		lokasi = '". $payloads['lokasi'] ."',
	// 		tanggal_pembelian = '". $payloads['tanggal_pembelian'] ."',
	// 		harga_beli = ". $payloads['harga_beli']
	// 	." WHERE id_barang = $id_barang";

	// 	return $this->conn->query($sql);
	// }

	function delete($id_lokasi)
	{
		$sql = "DELETE FROM ". $this->table ." WHERE id_lokasi = $id_lokasi";
		return $this->conn->query($sql);
	}

	// function login($payloads)
	// {
	// 	$sql = "SELECT * FROM tb_karyawan WHERE username='".$payloads['username']."' OR email ='".$payloads['email']."'";

	// 	return $this->conn->query($sql);
	// }
}


// $user = new Users();
// $payload = [
// 			"username" => 'gdeguna',
// 			"email" => 'gdeguna@gmail.com'
// 		];

// 	$data = $user->login($payload);

// var_dump($data);