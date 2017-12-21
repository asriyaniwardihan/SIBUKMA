<?php
class Database {
	private $result;
	private $db = array(
		"host"=>"localhost",
		"user"=>"root",
		"pass"=>"acci",
		"dbname"=>"sibukma",
	);
	
	function __construct(){
		$con = mysql_connect($this->db['host'],$this->db['user'],$this->db['pass']) or die(mysql_error());
		mysql_select_db($this->db['dbname'], $con) or die(mysql_error());
	}
	
	function psql($sql, $field, $table, $where=NULL, $order=NULL, $group=NULL){
	  switch($sql){
		case 'SHOW':
		  $sql = "SELECT $field FROM $table";
		  if(!empty($where)) 
			$sql .= " WHERE ".$where;
		  if(!empty($order)) 
			$sql .= " ORDER BY ".$order;
		  if(!empty($order)) 
			$sql .= " GROUP BY ".$group;
		  $query = mysql_query($sql);
		  /**/
		  while($row=mysql_fetch_assoc($query)){
			$this->result[] = $row;
		  }
		  //echo $sql;
		  /**/
		  //return $sql;
		  return $this->result;
		  break;
		case 'ADD':
		  $query = mysql_query("INSERT INTO $table SET $field");
		  return $query;
		  break;
		case 'UPD':
		  $query = mysql_query("UPDATE $table SET $field WHERE $where");
		  return $query;
		  break;
		case 'DEL':
		  $query = mysql_query("DELETE FROM $table WHERE $field");
		  return $query;
		  break;
		}
	}
	
	//fungsi mengambil nilai dari attribut name 
	function buatStringNilai($data){
		$nilainya='';
		for($i = 0;$i < count($data); $i++){
		$tempnilai = $data[$i];
			if (trim($tempnilai) != '')
				$nilainya .= "'".$tempnilai."',";
			else 
				$nilainya .= "null,";
		}
		$nilainya = substr($nilainya,0,strlen($nilainya) - 1);
		return $nilainya;
	}
	
	//update
	//fungsi mengambil name yang juga merupakan nama kolom 
	function buatStringKolom($data){
		$nilainya='';
		for($i = 0;$i < count($data); $i++){
			$nilainya .="".$data[$i].",";
		}
		$nilainya = substr($nilainya,0,strlen($nilainya) - 1);
		return $nilainya;
	}
	//fungsi mengambil kolom dan nilanya beserta klausa dan primary juga diupdate
	function buatStringSet($primary,$nama,$nilai,$oldprimary){
		$hasil= '';
		for($i = 0; $i < count($nama); $i++){
		$tempnilai = $nilai[$i];
			if($nama[$i] == $primary) {
				$nama_id = $nama[$i]; 
				if(empty($oldprimary)) $nilai_id = $tempnilai;
				else $nilai_id = $oldprimary; 
			}
			if (trim($tempnilai) != '')
				$hasil .= $nama[$i]."= '".$tempnilai."',";
			else 
				$hasil .= $nama[$i]."= null,";
		}
		$hasil = substr($hasil,0,strlen($hasil) - 1);
		$hasil .=" where ".$nama_id."= '".$nilai_id."'";	
		return $hasil;
	}
}
?>