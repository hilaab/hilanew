<?php
$serverName = "MEWL7505\\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"store1");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
	 	 die(print_r(sqlsrv_errors(),true));

}
?>