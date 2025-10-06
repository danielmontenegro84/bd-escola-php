<?php
include 'conexao.php';
$id = $_GET['id'];
$conn->query("DELETE FROM alunos WHERE id_aluno=$id");
header("Location: index.php");
?>