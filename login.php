<?php
    session_start();

    if(empty($_POST) or (empty($_POST["cpf"]) or (empty($_POST["senha"])))) {
        print "<script>location.href='index.php';</script>";
    }

    include ('config.php');

    $cpf = $_POST ['cpf'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios
            WHERE cpf = '{$cpf}'
            AND senha = '{$senha}'";
    
    $res = $conn->query($sql) or die($conn->error);
    
    $row = $res->fetch_object();
    
    $qnt = $res->num_rows;

    if($qnt>0){
    $_SESSION ["cpf"] = $cpf;   
    $_SESSION ["nome"] = $row->nome;
    $_SESSION ["tipo"] = $row->tipo;  
    echo "<script>location.href='dashboard.php';</script>";

    }else{
        print "<script>alert('CPF e/ou Senha Incorreto(s)')</script>";
        print "<script>location.href='index.php'</script>";
    }
?>