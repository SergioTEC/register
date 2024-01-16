<?php
switch ($_REQUEST["action"]) {
    case 'register';
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $birth_date = $_POST["birth_date"];

        $sql = "INSERT INTO users (name, email, password, birth_date) VALUES ('{$name}', '{$email}', '{$password}', '{$birth_date}')";

        $res = $connection->query($sql);

        if ($res == true) {
            print "<script>alert('Cadastrado com sucesso!');</script>";
            print "<script>location.href='?page=list';</script>";
        } else {
            print "<script>alert('Não foi possivel efetuar o cadastro!');</script>";
            print "<script>location.href='?page=list';</script>";
        }
        break;

    case 'edit';
        // code
        break;

    case 'delete';
        // code
        break;
}
