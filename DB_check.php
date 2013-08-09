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

<<<<<<< HEAD
function delet($params)
=======
function delet($num)
>>>>>>> 548b02d52160a0e4319d51c7a02f652b3f20925a
}

}
?>
