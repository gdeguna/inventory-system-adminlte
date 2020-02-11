<?php

require "Connection.php";

/**
 * 
 */
class Barang extends Connection
{
	public $conn;
	protected $table = 'tb_barang';
	
	function __construct()
	{
		$this->conn = parent::start();
	}

	function all($field = '*')
	{
		$sql = "SELECT id_barang, nama_barang, jenis_barang, merek, vendor, lokasi, tanggal_pembelian, jumlah, harga 
			FROM tb_barang
			LEFT JOIN tb_jenis_barang ON tb_barang.`id_jenis_barang`=tb_jenis_barang.`id_jenis_barang`
			LEFT JOIN tb_vendor ON tb_barang.`id_vendor`=tb_vendor.`id_vendor`
			LEFT JOIN tb_merek ON tb_barang.`id_merek`=tb_merek.`id_merek`
			LEFT JOIN tb_lokasi ON tb_barang.`id_lokasi`=tb_lokasi.`id_lokasi`";
		$result = $this->conn->query($sql);
		return $result;
		// return $sql;
	}

	function find($id_barang)
	{
		$sql = "SELECT * FROM ". $this->table. " WHERE id_barang = $id_barang";
		$result = $this->conn->query($sql);
		return $result;
		// return $sql;
	}

	function create($payloads)
	{

		$password = password_hash($payloads['password'], PASSWORD_DEFAULT);

		$sql = "INSERT INTO ". $this->table. " (nama_karyawan, no_tlp, email, username, password) VALUES (
			'".$payloads['nama_karyawan']."',
			'".$payloads['no_tlp']."',
			'".$payloads['email']."',
			'".$payloads['username']."',
			'".$password."'
		)";	

		return $this->conn->query($sql);
				// return $sql;
	}

	function update($id_barang, $payloads)
	{
		$sql = "UPDATE ". $this->table ." SET ".
			"nama_barang = '". $payloads['nama_barang'] ."',
			jenis_barang = '". $payloads['jenis_barang'] ."',
			vendor = '". $payloads['vendor'] ."',
			merek = '". $payloads['merek'] ."',
			lokasi = '". $payloads['lokasi'] ."',
			tanggal_pembelian = '". $payloads['tanggal_pembelian'] ."',
			harga_beli = ". $payloads['harga_beli']
		." WHERE id_barang = $id_barang";

		return $this->conn->query($sql);
	}

	function delete($id_barang)
	{
		$sql = "DELETE FROM ". $this->table ." WHERE id_barang = $id_barang";
		return $this->conn->query($sql);
	}

	function login($payloads)
	{
		$sql = "SELECT * FROM tb_karyawan WHERE username='".$payloads['username']."' OR email ='".$payloads['email']."'";

		return $this->conn->query($sql);
	}
}


// $barang = new Barang();
// $payload = [
// 			"username" => 'gdeguna',
// 			"email" => 'gdeguna@gmail.com'
// 		];

// 	$data = $barang->all($payload);

// var_dump($data);