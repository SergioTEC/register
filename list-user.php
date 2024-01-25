<?php
$sql = "SELECT * FROM users";

$res = $connection->query($sql);

$qty = $res->num_rows;
?>

<h1>Listar Usuários</h1>

<?php if ($qty > 0) { ?>
    <table class='table table-hover table-striped table-bordered'>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-Mail</th>
            <th>Data de Nascimento</th>
            <th>Ações</th>
        </tr>

        <?php while ($row = $res->fetch_object()) { ?>
            <tr>
                <td><?= $row->id ?></td>
                <td><?= $row->name ?></td>
                <td><?= $row->email ?></td>
                <td><?= $row->birth_date ?></td>
                <td>
                    <button onclick="location.href='?page=edit&id=<?= $row->id ?>';" class='btn btn-success'>Editar</button>
                    <button onclick="if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save&action=delete&id=<?= $row->id ?>';}else{false;}" class='btn btn-danger'>Excluir</button>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php } else { ?>
    <p class='alert alert-danger'>Não foi encontrado nenhum resultado!</p>
<?php } ?>