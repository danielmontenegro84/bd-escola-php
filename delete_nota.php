<?php
include 'conexao.php';
$id_nota = $_GET['id'];
$id_aluno = $_GET['id_aluno'];

$conn->query("DELETE FROM notas WHERE id_nota=$id_nota");
header("Location: notas.php?id=$id_aluno");
?>