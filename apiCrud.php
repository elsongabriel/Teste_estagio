<?php

include_once 'dbConn.php';

if (isset($_POST['submit'])) {
    $nome      = $_POST['name'];
    $email     = $_POST['email'];
    $phone     = $_POST['phone'];
    $profissao = $_POST['occupation'];
    $money     = $_POST['investment_money'];
    $city      = $_POST['city'];
    $bairro    = $_POST['neighborhood'];
    $message   = $_POST['message'];

    //print_r(array($nome, $email, $phone, $profissao, $money, $city, $bairro, $message));
    if (dbInsert($nome, $email, $phone, $profissao, $money, $city, $bairro, $message)) {
        header("Location: index.php?msg=inseridocomsucesso");
    } else {
        header("Location: index.php?msg=erro");
    }

    //dbDelete(1); //TODO: Porque essa função de deletar, logo após inserir um registro?

    $table = dbRead(); //TODO: O que você faz com essa $table? Porque no caso, ele não chega nem aqui  :)
}

//TODO: Digamos que esta parte aqui é o lado DAO, ser usado somente para o crud.
// Coloquei as respectivas assinaturas dos métodos.

/**
 * @param $nome
 * @param $email
 * @param $phone
 * @param $profissao
 * @param $money
 * @param $city
 * @param $bairro
 * @param $message
 * @return bool
 */
function dbInsert($nome, $email, $phone, $profissao, $money, $city, $bairro, $message)
{
    global $conn;
    $query = 'INSERT INTO contatos(nome, email, telefone, profissao, capital_de_investimento, cidade, bairro, mensagem) 
    VALUES (:nome, :email, :telefone, :profissao, :capital, :cidade, :bairro, :mensagem)';
    $stmt = $conn->prepare($query);
    return (boolean)$stmt->execute(array(':nome' => $nome, ':email' => $email, ':telefone' => $phone, ':profissao' => $profissao, ':capital' => $money, ':cidade' => $city, ':bairro' => $bairro, ':mensagem' => $message));
    //header("Location: index.php?inseridocomsucesso");
    //TODO: Você poderia ter feito aqui: (index.php?msg=inseridocomsucesso) e no index você pegava o $_GET['msg']
    // fazendo as validações necessárias, e exibir a mensagem que o formulário foi enviado.  :)
    // Fiz um exemplo, retornando a resposta da açãop como boolean e colocando no "controller".
}

/**
 * @param $id
 */
function dbDelete($id)
{
    global $conn;
    $query = 'DELETE FROM contatos WHERE id = :id';
    $stmt  = $conn->prepare($query);
    $stmt->execute(array(':id' => $id));
}

/**
 * @return mixed
 */
function dbRead()
{
    global $conn;
    $query = 'SELECT * FROM contatos';
    $stmt  = $conn->query($query);
    return $stmt->fetch();
}
