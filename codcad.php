<?php
 
// inclui o arquivo de inicialização
require 'init.php';
 
// resgata variáveis do formulário
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
 
if (empty($email) || empty($password) || empty($name) || empty($phone))
{
    echo "Informe email e senha";
    exit;
}
 
// cria o hash da senha
$passwordHash = make_hash($password);
 
$PDO = db_connect();
 
$sql = "INSERT INTO user (iduser, name, email, password, phone, address_idaddress) VALUES (NULL, :name, :email, :password, :phone, NULL)";
//INSERT INTO user (iduser, name, email, password, phone, address_idaddress) VALUES (NULL, ':name', ':email', ':password', ':phone', NULL)
$stmt = $PDO->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $passwordHash);
$stmt->bindParam(':phone', $phone);
 
$stmt->execute();
 
/*$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
if (count($users) <= 0)
{
    echo "Email ou senha incorretos";
    exit;
}*/
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['iduser'];
$_SESSION['user_name'] = $user['name'];
 
header('Location: index.php');