<?php
$mensagem = "";
if ( isset( $_POST[ "iassunto" ] ) ) {


	$name = utf8_decode( @$_POST[ "inome" ] );
	$mail = utf8_decode( @$_POST[ "iemail" ] );
	$mail = utf8_decode( @$_POST[ "iassunto" ] );
	$mail = utf8_decode( @$_POST[ "ifone" ] );

	$mensa = utf8_decode( @$_POST[ "imensagem" ] );

	//coloque o endereço de e-mail que você quer enviar
	$destino = "adrianadonadi66@gmail.com";
	$ip = getenv( "REMOTE_ADDR" );

	$subject = "Email recebido pelo site:" . $assun;
	$texto2 = "Nome: $name" . "\n";
	$texto2 .= "E-Mail: $mail" . "\n";
	$texto2 .= "Assunto: $mail" . "\n";
	$texto2 .= "Telefone: $mail" . "\n";
	$texto2 .= " " . "\n";
	$texto2 .= "Mensagem: $mensa" . "\n";
	$mensagem = "Mensagem encaminhada com sucesso.<BR><b>Em breve entraremos em contato</b>";
	mail( $destino, $subject, $texto2, "From: " . $mail );
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Exemplo de envio de e-mail</title>
</head>

<body>
	<div id="faleconosco">
		<fieldset>
			<form id="form1" name="form1" method="post" action="fale.php">
				<p>Nome:
					<input name="inome" type="text" required placeholder="Nome Completo"/>
				</p>

				<p> E-Mail:</td>
					<input name="iemail" type="email" placeholder="Digite seu Email" required/>
				</p>

				<p> Telefone:
					<input name="ifone" type="tel" placeholder="ddd+numero" required/>
				</p>

				<p> Assunto:
					<input name="iassunto" type="text" placeholder="Digite o Assunto" required/>
				</p>

				<p>Mensagem:
					<p> <textarea name="imensagem" cols="40" rows="3" required></textarea>
					</p>


					<p> <input name="enviar" type="submit" value="Enviar"/>
					</p>
		</fieldset>
	</div>
	<?php //echo $mensagem; ?>
</body>

</html>