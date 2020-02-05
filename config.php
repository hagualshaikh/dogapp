<?php
/* Connexion a la base de donnée - On prepare les credentials*/
define('DB_SERVER', 'ec2-54-246-89-234.eu-west-1.compute.amazonaws.com');
define('DB_USERNAME', 'pdajnvgzagmvar');
define('DB_PASSWORD', 'a5897ad12ebcb1f84b801acc618b7cd77bfc635cbc524878a10aa5e920b28fd8');
define('DB_NAME', 'd7m1q2t4dp3612');

/* Connection a la BDD MySQL */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

/* Verification de la connection */
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
