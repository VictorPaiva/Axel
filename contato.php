<?php
$mensagem = "";
$esconde = 0;
if ( isset( $_POST[ 'enviar' ] ) ) {

	$name = utf8_decode( @$_POST[ "inome" ] );
	$mail = utf8_decode( @$_POST[ "iemail" ] );
	$assun = utf8_decode( @$_POST[ "iassunto" ] );
	$fone = utf8_decode( @$_POST[ "ifone" ] );

	$mensa = utf8_decode( @$_POST[ "imensagem" ] );

	//coloque o endereço de e-mail que você quer enviar
	$destino = "viniciusfveras@hotmail.com";
	$ip = getenv( "REMOTE_ADDR" );

	$subject = "Email recebido pelo site:" . $assun;
	$texto2 = "Nome: $name" . "\n";
	$texto2 .= "E-Mail: $mail" . "\n";
	$texto2 .= "Assunto: $fone" . "\n";
	$texto2 .= " " . "\n";
	$texto2 .= "Mensagem: $mensa" . "\n";
	$mensagem = "Mensagem encaminhada com sucesso.<BR><b>Em breve entraremos em contato</b>";
	$esconde = 1;
	mail( $destino, $subject, $texto2, "From: " . $mail );
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Donadi Propriedade Industrial</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/home.css" type="text/css">
	<link rel="shortcut icon" href="imagens/icones/simb.png" type="image/x-png"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Registro de marcas e patentes com Adriana Donadi e José Guilherme Donadi,na Donadi"/>
	<meta name="keywords" content="marca,patentes,softwares,notificações,extrajudicial,marca e patente presidente prudente,cartório,direito,direito autoral,INPI,exclusividade,registro de marcas , registro de patentes em presidente prudente, registro de software,notificação extrajudicial,propriedade industrial, jurídico, Donadi, proteção,registro de programa de computador,patentear,presidente prudente,ideia">
	<meta name="autor" content="Isabela Cardoso de Paiva,Manoela Moreno Donadi,Vinicius Ferreira Veras, Vitor Prando Paiva">
</head>

<body>
	<header>
		<nav id="menu1">
			<div class="logo-principal"></div>
			<div class="menu-container">
				<ul class="menu clearfix">
					<li><img class="logo-menu" src="imagens/icones/home.png" alt="HOME" title="Página inicial"/><a href="index.html">Página inicial</a>
					</li>
					<li><img class="logo-menu" src="imagens/icones/empresa.png" alt="Empresa" title="Empresa"/><a href="empresa.html">A empresa</a> </li>
					<li><img class="logo-menu" src="imagens/icones/serviços.png" alt="Serviços" title="Serviços"/><a href="#">Serviços</a>
						<ul class="sub-menu clearfix">
							<li><a href="notificacoes.html">Notificação Extrajudicial</a>
							</li>
							<li><a href="software.html">Registro de Softwares</a>
							</li>
							<li><a href="patente.html">Registro de Patentes</a>
							</li>
							<li><a href="marca.html">Registro de marcas</a>
							</li>
						</ul>
					</li>
					<li><img class="logo-menu" src="imagens/icones/contatos.png" alt="Contatos" title="Contatos"/><a href="contato.html">Contato</a>
					</li>
				</ul>
			</div>
		</nav>
		<nav id="menu2">
			<!-- Simulate a smartphone / tablet -->
			<div class="mobile-container">

				<!-- Top Navigation Menu -->
				<div class="topnav">
					<a href="index.html" class="active">Logo</a>
					<div id="myLinks">
						<a href="index.html">Página Inicial</a>
						<a href="empresa.html">A empresa</a>
						<a href="notificacoes.html">Notificação Extrajudical</a>
						<a href="software.html">Registro de Software</a>
						<a href="patente.html">Registro de Patente</a>
						<a href="marca.html">Registro de Marca</a>
						<a href="contato.php">Contato</a>


					</div>
					<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
				
				</div>
			</div>
		</nav>
	</header>
	<main id="contatos">
		<div id="faleconosco">

			<?php 
	if(isset($_POST['enviar'])){
		echo("<h1>".$mensagem."</h1>");
	}
	
	
	if($esconde == 0){
	?>

			<fieldset>
				<form id="form1" name="form1" method="post" action="#">
					<p>Nome:<input name="inome" type="text" required placeholder="Nome Completo"/>
					</p>
					<p> E-Mail:<input name="iemail" type="email" placeholder="Digite seu Email" required/>
					</p>
					<p> Telefone:<input name="ifone" type="tel" placeholder="ddd+numero" required/>
					</p>
					<p> Assunto:<input name="iassunto" type="text" placeholder="Digite o Assunto" required/>
					</p>
					<p>Mensagem:
						<p><textarea name="imensagem" cols="40" rows="3" required></textarea>
						</p>
						<p><input name="enviar" type="submit" value="Enviar"/>
						</p>
			</fieldset>
			<?php
			}
			?>
		</div>
	</main>
	<footer id="desktop">
  <section id="ico">
    <div class="icone"><a href="https://www.facebook.com/donadipropriedadeindustrial" target="_blank"><img class="icones" src="imagens/icones/facebook.png"></a>
      <p class="coisinha"><a class="sla" href="https://www.facebook.com/donadipropriedadeindustrial" target="_blank">Adriana Donadi</a> <a class="sla2"  href="https://www.facebook.com/donadipropriedadeindustrial" target="_blank">Guilherme Donadi</a> </p>
    </div>
    <div class="icone"><a href="https://api.whatsapp.com/send?phone=5518981734346" target="_blank"><img class="icones" src="imagens/icones/whats.png"></a>
      <p class="pzao">(18)98173-4346 </p>
      <p class="pzao2">(18)98173-4486</p>
    </div>
    <div class="icone"><a href="https://www.instagram.com/adridonadi/" target="_blank"><img class="icones" src="imagens/icones/instagram.png"></a>
      <p class="coisinha"><a class="sla" href="https://www.instagram.com/adridonadi/">Adriana Donadi</a> <a class="sla2"  href="https://www.instagram.com/jguilhermedonadi/">Guilherme Donadi</a> </p>
    </div>
    <div class="icone"><a href="https://www.google.com/maps/place/R.+dos+Pracinhas,+83+-+Jardim+Everest,+Pres.+Prudente+-+SP,+19066-160/@-22.1063968,-51.4355806,17z/data=!3m1!4b1!4m5!3m4!1s0x9493f154f70f65f9:0xd11c1347dc4652a3!8m2!3d-22.1063968!4d-51.4333919" target="_blank"><img class="icones" src="imagens/icones/localização.png"></a>
      <p class="coisinha"><a class="ola" href="https://www.google.com/maps/place/R.+dos+Pracinhas,+83+-+Jardim+Everest,+Pres.+Prudente+-+SP,+19066-160/@-22.1063968,-51.4355806,17z/data=!3m1!4b1!4m5!3m4!1s0x9493f154f70f65f9:0xd11c1347dc4652a3!8m2!3d-22.1063968!4d-51.4333919" target="_blank">Rua dos pracinhas</a></p>
    </div>
  </section>
  <section id="desen">
    <p id="nomes">Desenvolvido por &copy;Square Web</p>
  </section>
</footer>

	<script src="js/java.js"></script>
</body>
</html>