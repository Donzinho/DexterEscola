<?php 

require_once 'conexao.php';

function insere_periodo($descricao){
	$con = conecta();

	$sql = "INSERT INTO tb_periodo (descricao) VALUES ('{$descricao}')";

	pg_query($con, $sql);
	
	desconecta($con);
}

function lista_periodos(){

	$con = conecta();

	$sql = "SELECT * FROM tb_periodo";

    $result = pg_query($con, $sql);
    $found = pg_fetch_all($result);

    desconecta($con);

    return $found;

}

function lista_periodo_por_id($id){
	$con = conecta();

	$sql = "SELECT * FROM tb_periodo WHERE id = {$id}";

    $result = pg_query($con, $sql);
    $found = pg_fetch_assoc($result);

    desconecta($con);

    return $found;
}

function edita_periodo($periodo){
	$con = conecta();

	$sql = "UPDATE periodo SET descricao = '{$periodo['descricao']}' WHERE id = {$periodo['id']}";

	pg_query($con, $sql);
	
	desconecta($con);
}

function exclui_periodo($id){
	$con = conecta();

	$sql = "DELETE FROM tb_periodo WHERE id = {$id}";

	pg_query($con, $sql);

	desconecta($con);

}

// echo "<pre>";
// // insere_periodo('noturno');
// // exclui_periodo(3);

// $periodo = ['id' => 1, 'descricao' => 'matutino'];
// edita_periodo($periodo);

// $periodos = lista_periodos();

// var_dump($periodos);