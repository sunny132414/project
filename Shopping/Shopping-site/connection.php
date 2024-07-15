<?php
$username="root";
$password="";
$host="localhost";
$db="cart";
$connect=mysqli_connect($host,$username,$password,$db);
/*
if($connect)
{
	echo "Connection is successfull";
	echo "<br>";

}
else
{
	echo "Connection is n't successfull";
}
//Creating Database.
/*
$sql="CREATE DATABASE cart";
$exec=mysqli_query($connect,$sql);
if($exec)
{
	echo "Database is created";
}
else
{
	echo "database is n't connected";
}*/

//Creating Tables.
/*$sql="CREATE TABLE carts(p_id int primary key not null auto_increment, p_name varchar(20), p_price int not null, p_size varchar(20) not null, p_quantity int not null)";
$exec=mysqli_query($connect,$sql);
if($exec)
{
	echo "Table is created";
}
else
{
	echo "Table is n't created".mysqli_error($connect);
}*/
/*
$sql="CREATE TABLE contact_form_info (name varchar(20) not null, email varchar(20) not null, phone int not null, comments varchar(50))";
$exec=mysqli_query($connect,$sql);
if($exec)
{
	echo "Table is created";
}
else
{
	echo "Table is n't created";
}*/
?>