<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/html; charset=UTF-8');

$bdados = "lucianolopes15_obras";
$host = "robb0217.publiccloud.com.br";
$user = "lucia_obras";
$senha = "obras212116//**";

$conn = mysql_connect($host,$user,$senha) or die("Não pude conectar: " . mysql_error());
$db = mysql_select_db($bdados,$conn);
$sql = mysql_query("select id, nome from construtora order by nome");

$arr = array();
while ($d = mysql_fetch_assoc($sql)){
   $arr[] = array('id' => $d['id'], 'name' => utf8_encode($d['nome']));
}

echo json_encode($arr);
?>