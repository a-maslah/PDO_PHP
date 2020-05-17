
<?php
require_once './database/constante.php';
require_once './database/database.php';
$database = new database();


$data['id'] = $_GET['id'];
$database->delete($data);





?>