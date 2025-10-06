<?php
include 'conexao.php';
$id_aluno = $_GET['id'];

$aluno = $conn->query("SELECT * FROM alunos WHERE id_aluno=$id_aluno")->fetch_assoc();
$notas = $conn->query("SELECT * FROM notas WHERE id_aluno=$id_aluno");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Notas de <?= $aluno['nome'] ?></title>
</head>
<body>
    <h1>Notas de <?= $aluno['nome'] ?></h1>
    <a href="index.php">Voltar</a>
    <form action="add_nota.php" method="POST">
        <input type="hidden" name="id_aluno" value="<?= $id_aluno ?>">
        Nota: <input type="text" name="nota" required>
        <button type="submit">Adicionar</button>
    </form>

    <table border="1" cellpadding="5">
        <tr><th>ID Nota</th><th>Nota</th><th>Ação</th></tr>
        <?php while($n = $notas->fetch_assoc()) { ?>
        <tr>
            <td><?= $n['id_nota'] ?></td>
            <td><?= $n['nota'] ?></td>
            <td><a href="delete_nota.php?id=<?= $n['id_nota'] ?>&id_aluno=<?= $id_aluno ?>">Excluir</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>