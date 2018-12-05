<?php
	
	function insertData($sql)
	{
		$con = mysqli_connect("localhost", "root", "", "pfw");

		$result = mysqli_query($con, $sql);
		return $result;
	}

	function viewData($sql)
	{
		$con = mysqli_connect("localhost", "root", "", "pfw");

		$result = mysqli_query($con, $sql);

		return $result;
	}

	function dml($sql)
	{
		$con = mysqli_connect("localhost","root","","pfw");
		
		$result = mysqli_query($con, $sql);
		}
		
	function ddl($sql)
	{
		$con = mysqli_connect("localhost","root","","pfw");
		
		$result = mysqli_query($con, $sql);
		return $result;
		}
		
		function singleData($sql)
	{
		$con = mysqli_connect("localhost","root","","pfw");
		
		$result = mysqli_query($con, $sql);
		$hasil = mysqli_fetch_row($result);
		return $hasil[0];
		}
?>