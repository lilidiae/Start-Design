<?php
session_start();
include "../conexao.php";

#Redireciona par ao login, caso nao esteja logado
if (!isset($_SESSION['email']) || $_SESSION['email'] == "") {
	Header("Location:../index.php");
}


#se estou salvando um novo
if ($_POST['id'] == "") {
	
	$titulo = $_POST['titulo'];
	$descricao 	= $_POST['descricao'];
	$foto    = "../uploads/".$_FILES['foto']['name'];
	$arquivo    = "../uploads/".$_FILES['arquivo']['name'];
	
	#salva o arquivo na pasta de uploads
	move_uploaded_file($_FILES['foto']['tmp_name'], $foto );
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo);


	$sql = "INSERT INTO slides(titulo,descricao,foto,arquivo,usuario_id)
			VALUES (:titulo,:descricao,:foto,:arquivo,:usuario_id)";


	$stmt = $con->prepare($sql);
	$stmt->bindValue(':titulo', $titulo);
	$stmt->bindValue(':descricao', $descricao);
	$stmt->bindValue(':foto', $foto);
	$stmt->bindValue(':arquivo', $arquivo);
	$stmt->bindValue(':usuario_id', $_SESSION['id']);
	$stmt->execute();
	$id = $con->lastInsertId(); #pegando a id do ultimo inserido

	header("Location:../postar/index.php?id=$id");
} else {
	
	
	$dadosNovos = [
		":id" 		=> $_POST['id'],
		":titulo" 	=> $_POST['titulo'],
		":descricao" 	=> $_POST['descricao'],
		":foto" 	=> $_POST['foto'],
		":arquivo" 		=> $_POST['arquivo']
	];
	
	
	if ($_FILES['arquivo']['name'] != ""){
		#atualiza o arquivo
		$arquivo    = "../uploads/".$_FILES['arquivo']['name'];
		#salva o arquivo novo na pasta de uploads
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo);
		
		#acrescenta o update do arquivo no sql
		$sqlUpdateArquivo = ",arquivo = :arquivo";
		
		#inclui o arquivo no array de valores para o sql
		$dadosNovos[":arquivo"] =  $arquivo;
	} else {
		$sqlUpdateArquivo = "";
	}

	if ($_FILES['foto']['name'] != ""){
		#atualiza o arquivo
		$foto    = "../uploads/".$_FILES['foto']['name'];
		#salva o arquivo novo na pasta de uploads
		move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
		
		#acrescenta o update do arquivo no sql
		$sqlUpdateFoto = ",foto = :foto";
		
		#inclui o arquivo no array de valores para o sql
		$dadosNovos[":foto"] =  $foto;
	} else {
		$sqlUpdateFoto = "";
	}

	


	#SE EU ESTOU ATUALIZANDO/EDITANDO ALGU??M
	#eu fa??o apenas uma UPDATE 

	$sql = "UPDATE slides SET 
					titulo = :titulo,
					descricao = :descricao,
					$sqlUpdatefoto
					$sqlUpdateArquivo
				WHERE id = :id";
	
	
	$stmt = $con->prepare($sql);
	$stmt->execute($dadosNovos);
	header("Location:../postar/index.php?id={$_POST['id']}");
}

