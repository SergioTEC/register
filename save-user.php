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
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $birth_date = $_POST["birth_date"];

        $sql = "UPDATE users SET name='{$name}', email='{$email}', password='{$password}', birth_date='{$birth_date}' WHERE id=" . $_REQUEST["id"];

        $res = $connection->query($sql);

        if ($res == true) {
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=list';</script>";
        } else {
            print "<script>alert('Não foi possivel editar o cadastro!');</script>";
            print "<script>location.href='?page=list';</script>";
        }
        break;

    case 'delete';
        $sql = "DELETE FROM users WHERE id=" . $_REQUEST["id"];

        $res = $connection->query($sql);

        if ($res == true) {
            print "<script>alert('Excluído com sucesso!');</script>";
            print "<script>location.href='?page=list';</script>";
        } else {
            print "<script>alert('Não foi possivel excluir o cadastro!');</script>";
            print "<script>location.href='?page=list';</script>";
        }
        break;
}
