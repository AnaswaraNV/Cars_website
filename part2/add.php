<?php

// load the values into variables: host, username, passwd, database
 $host="db-mysql.zenit"; // Host name.
 $db_user="uli705_173a13"; // MySQL username.
 $db_password="ngHQ7357"; // MySQL password.
 $database="uli705_173a13"; // Database name.
 
// Connect to database server.
 mysql_connect($host,$db_user,$db_password);
 
// select a specific database to access
 mysql_select_db($database);
 
// Get values from the web form
 $record=$_POST['data'];
 
// The id field is auto increment. You don't have to insert any value
 mysql_query("insert into products(id, Name, Qty, Price) values('$record')");
 echo "Added this record successfully!";
?>