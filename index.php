<?php
include 'conexao.php';
$result = $conn->query("SELECT * FROM alunos");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Alunos</title>
</head>
<body>
    <h1>Lista de Alunos</h1>
    <a href="add_aluno.php">Adicionar Aluno</a>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th><th>Nome</th><th>Ações</th>
        </tr>
        <?php while($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id_aluno'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td>
                <a href="notas.php?id=<?= $row['id_aluno'] ?>">Notas</a> | 
                <a href="delete_aluno.php?id=<?= $row['id_aluno'] ?>">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>