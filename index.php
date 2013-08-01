<?php

// print_r ($_SERVER['REQUEST_URI']);

mysql_pconnect();
mysql_query();

class DB 
{
  
}

//

include 'db.php';
$db = new DB();

/**
 * menu routes
 */
function hello($string) 
{
  global $db;
  $db->query("SELECT * FROM TABLE WHERE $string");
  print $db->result()->fetchArray();
}


$path = $_SERVER['REQUEST_URI'];

if ($path == '/hello/1')
{
  hello(1);
}
