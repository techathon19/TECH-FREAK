<?php

$dbConn = new mysqli("localhost", "root", "", "restaurant");
// mysqli_connect($dbName) or die('Cannot select database. ' . mysqli_error());

function dbQuery($sql)
{
	global $dbConn;
	$result = mysqli_query($dbConn, $sql);
	return $result;
}

function dbAffectedRows()
{
	global $dbConn;
	return mysql_affected_rows($dbConn);
}

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

function dbFetchArray($result, $resultType = MYSQL_NUM) {
	return mysql_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) 
{
	return mysql_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysql_free_result($result);
}

function dbNumRows($result)
{
	return mysqli_num_rows($result);
}

function dbSelect($dbName)
{
	return mysql_select_db($dbName);
}

function dbInsertId()
{
	return mysql_insert_id();
}
?>