<?php

require "Connection.php";

/**
 * 
 */
class Vendor extends Connection
{
	public $conn;
	protected $table = 'tb_vendor';
	
	function __construct()
	{
		$this->conn = parent::start();
	}

	function all($field = '*')
	{
		$sql = "SELECT id_vendor, vendor, contact, alamat, jenis_vendor
				FROM tb_vendor
				LEFT JOIN tb_jenis_vendor ON tb_vendor.`id_jenis_vendor`=tb_jenis_vendor.`id_jenis_vendor`";
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

	function buat($payloads)
	{
		$sql = "INSERT INTO ". $this->table. " (id_jenis_vendor, vendor,contact,alamat) VALUES (
			'".$payloads['id_jenis_vendor']."',
			'".$payloads['vendor']."',
			'".$payloads['contact']."',
			'".$payloads['alamat']."'
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

	function delete($id_vendor)
	{
		$sql = "DELETE FROM ". $this->table ." WHERE id_vendor = $id_vendor";
		return $this->conn->query($sql);
	}

	// function login($payloads)
	// {
	// 	$sql = "SELECT * FROM tb_karyawan WHERE username='".$payloads['username']."' OR email ='".$payloads['email']."'";

	// 	return $this->conn->query($sql);
	// }

	function join($id_vendor)
	{
		$sql = "SELECT id_vendor, vendor, contact, alamat, jenis_vendor, tb_jenis_vendor.id_jenis_vendor
				FROM tb_vendor
				LEFT JOIN tb_jenis_vendor ON tb_vendor.`id_jenis_vendor`=tb_jenis_vendor.`id_jenis_vendor`";
		$result = $this->conn->query($sql);
		return $result;
		// return $sql;
	}

	function jenisvendor(){
		$sql="SELECT * FROM tb_jenis_vendor";
		return $this->conn->query($sql);
	}
}


// $user = new Users();
// $payload = [
// 			"username" => 'gdeguna',
// 			"email" => 'gdeguna@gmail.com'
// 		];

// 	$data = $user->login($payload);

// var_dump($data);