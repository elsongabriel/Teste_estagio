<?php 

include_once 'dbConn.php';

if(isset($_POST['submit'])){
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $profissao = $_POST['occupation'];
    $money = $_POST['investment_money'];
    $city = $_POST['city'];
    $bairro = $_POST['neighborhood'];
    $message = $_POST['message'];

    // print_r(array($nome, $email, $phone, $profissao, $money, $city, $bairro, $message));
}

function dbInsert($nome, $email, $phone, $profissao, $money, $city, $bairro, $message){
    global $conn;
    $query = 'INSERT INTO contatos(nome, email, telefone, profissao, capital_de_investimento, cidade, bairro, mensagem) 
    VALUES (:nome, :email, :telefone, :profissao, :capital, :cidade, :bairro, :mensagem)';
    $stmt = $conn->prepare($query);
    $stmt->execute(array(':nome'=>$nome, ':email'=>$email, ':telefone'=> $phone,':profissao' => $profissao,':capital' => $money,':cidade' => $city, ':bairro' => $bairro, ':mensagem' => $message));
    header("Location: index.php?inseridocomsucesso");
}

function dbDelete($id){
    global $conn;
    $query = 'DELETE FROM contatos WHERE id = :id';
    $stmt = $conn->prepare($query);
    $stmt->execute(array(':id'=>$id));
}

function dbRead(){
    global $conn;
    $query = 'SELECT * FROM contatos';
    $stmt = $conn->query($query);
    return $stmt->fetch();
}