<h1>Editar Usuário</h1>

<?php

$sql = "SELECT * FROM users WHERE id=" . $_REQUEST["id"];
$res = $connection->query($sql);
$row = $res->fetch_object();

?>

<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="edit">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="password" required class="form-control">
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="birth_date" value="<?php print $row->birth_date; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>