<h1>Listar Usuários</h1>
<?php
$sql = "SELECT * FROM users";

$res = $connection->query($sql);

$qty = $res->num_rows;

if ($qty > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";

    print "<tr>";
    print "<th>ID</th>";
    print "<th>Nome</th>";
    print "<th>E-Mail</th>";
    print "<th>Data de Nascimento</th>";
    print "<th>Ações</th>";
    print "</tr>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id . "</td>";
        print "<td>" . $row->name . "</td>";
        print "<td>" . $row->email . "</td>";
        print "<td>" . $row->birth_date . "</td>";
        print "<td>
            <button class='btn btn-success'>Editar</button>
            <button class='btn btn-danger'>Excluir</button>
            </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não encontrou nenhum resultado!</p>";
}
?>