<?php


define('HOST','localhost');
define('USER','');
define('PASS','');
define('DBASE','');
define('ENCODING','');

class DB_Check{

function __construction(){

        $db = mysql_connect(HOST,USER,PASS) OR DIE('databasse errore!');
        mysql_select_db(DBASE,$db) OR DIE('wrong databasse');
        mysql_query('SET NAMES',ENCODING, $db) OR DIE('fuck charset');

}

function delet($params)
}

}
?>
