<?php
include ('../../../connect.php');

$edit = pg_query("update admin set role='C' where username='$_GET[user]'");

if($edit){
	header('location:https://dhindakiflia-tourism.herokuapp.com/index.php');
}
