<?php 
echo "I am a PHP page running on four containers: NginX + PHP-PFM + MariaDB + Redis!";
$link = mysql_connect('mysql', 'php', 'php');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
printf("MySQL server version: %s\n", mysql_get_server_info());
phpinfo(); ?>
