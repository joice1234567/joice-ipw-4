<?php
    include '2_trycatch.php';
	
	//query ="insert into teste (nome, email) values ('ThainSSá','thaina.nunes.barbosa@escola.pr')";
	$query ="update teste set nome = 'gracas a deus pai', email= 'receba@luvadepedreiro.com' where id = 2";
	$query = "delete";
	$sql = $conexao->prepare($query);
	$resultado = $sql->execute();
echo 'teste';
?> 