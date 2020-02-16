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
		$sql = "SELECT id_barang, nama_barang, jenis_barang, merek, vendor, lokasi, tanggal_pembelian, jumlah, harga ,tb_barang.id_merek, tb_vendor.id_vendor, tb_lokasi.id_lokasi, tb_jenis_barang.id_jenis_barang 
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
		$sql = "SELECT * FROM ". $this->table. "  
				WHERE id_barang = $id_barang";
		$result = $this->conn->query($sql);
		return $result;
		// return $sql;
	}

	function create($payloads)
	{
		$sql = "INSERT INTO tb_barang (nama_barang, id_jenis_barang, id_merek, id_vendor, id_lokasi, tanggal_pembelian, jumlah, harga) VALUES (
			'".$payloads['nama_barang']."',
			'".$payloads['id_jenis_barang']."',
			'".$payloads['id_merek']."',
			'".$payloads['id_vendor']."',
			'".$payloads['id_lokasi']."',
			'".$payloads['tanggal_pembelian']."',
			'".$payloads['jumlah']."',
			'".$payloads['harga']."'
		)";	

		return $this->conn->query($sql);
				// return $sql;
	}

	function update($id_barang, $payloads)
	{
		$sql = "UPDATE tb_barang SET ".
			"nama_barang = '". $payloads['nama_barang'] ."',
			id_jenis_barang = '". $payloads['id_jenis_barang'] ."',
			id_merek = '". $payloads['id_merek'] ."',
			id_vendor = '". $payloads['id_vendor'] ."',
			id_lokasi = '". $payloads['id_lokasi'] ."',
			tanggal_pembelian = '". $payloads['tanggal_pembelian'] ."',
			jumlah ='". $payloads['jumlah'] ."',
			harga = ". $payloads['harga']
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

	function merk(){
		$sql="SELECT * FROM tb_merek";
		return $this->conn->query($sql);
	}

	function vendor(){
		$sql="SELECT * FROM tb_vendor";
		return $this->conn->query($sql);
	}

	function jenisbarang(){
		$sql="SELECT * FROM tb_jenis_barang";
		return $this->conn->query($sql);
	}

	function lokasi(){
		$sql="SELECT * FROM tb_lokasi";
		return $this->conn->query($sql);
	}

	function join($id_barang)
	{
		$sql = "SELECT id_barang, nama_barang, jenis_barang, merek, vendor, lokasi, tanggal_pembelian, jumlah, harga ,tb_barang.id_merek, tb_vendor.id_vendor, tb_lokasi.id_lokasi, tb_jenis_barang.id_jenis_barang
			FROM tb_barang
			LEFT JOIN tb_jenis_barang ON tb_barang.`id_jenis_barang`=tb_jenis_barang.`id_jenis_barang`
			LEFT JOIN tb_vendor ON tb_barang.`id_vendor`=tb_vendor.`id_vendor`
			LEFT JOIN tb_merek ON tb_barang.`id_merek`=tb_merek.`id_merek`
			LEFT JOIN tb_lokasi ON tb_barang.`id_lokasi`=tb_lokasi.`id_lokasi` WHERE id_barang = $id_barang";
		$result = $this->conn->query($sql);
		return $result;
		// return $sql;
	}

	function jumlahbarang()
	{
		$sql = "SELECT
			    COUNT(id_barang) total
				FROM
			    tb_barang;";
		$result = $this->conn->query($sql);
		return $result;
	}
}


// $barang = new Barang();
// $payload = [
// 			"username" => 'gdeguna',
// 			"email" => 'gdeguna@gmail.com'
// 		];

// 	$data = $barang->all($payload);

// var_dump($data);

// $barang = new Barang();
// $payload = [
// 	'nama_barang' => 'Komputer',
// 	'id_jenis_barang'=> '1',
// 	'id_merek'=> '1',
// 	'id_vendor'=> '1',
// 	'id_lokasi'=> '1',
// 	'tanggal_pembelian'=> '',
// 	'jumlah'=> '5',
// 	'harga'=> '6'
// ];

// $create = $barang->update(7,$payload);

// var_dump($create);