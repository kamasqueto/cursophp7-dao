<?php 

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

// Carrega um usuário 
/*$root = new Usuarios();
$root->loadById(7);
echo $root;*/

//Carrega uma lista de usuários
//$lista = Usuarios::getList();
//echo json_encode($lista);


// Carrega uma lista de usuarios buscando pelo login
//$busca = Usuarios::search("ka");
//echo json_encode($busca);	

//Carrega um usuario usando login e a senha
$usuario = new Usuarios();
$usuario->login("kamas", "kaique20");
echo $usuario;
 ?>