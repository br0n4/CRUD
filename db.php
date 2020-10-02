<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM cursos";
$consulta_cursos = mysqli_query($conexao, $query);

$query = "SELECT * FROM alunos";
$consulta_alunos = mysqli_query($conexao, $query);

$query = "SELECT alunos_cursos.id, alunos.nome, cursos.nome_curso
            FROM alunos, cursos, alunos_cursos
            WHERE alunos_cursos.id_aluno = alunos.id 
            AND alunos_cursos.id_curso = cursos.id_curso";
$consulta_matriculas = mysqli_query($conexao, $query);