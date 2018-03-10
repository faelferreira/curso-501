<?php
//$dbMysql = new PDO( "mysql:localhost;dbname=aula04","rafael","123");

$dbPostgres = new pdo( "pgsql:host=localhost;dbname=aula03","rafael","123");
+ribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


//var_dump($dbMysql);
var_dump($dbPostgres);


/*create user nome password 123
alter database aula03 owner to nome
\q
exit
exit
psql -h localhost -U nome aula03
*/

