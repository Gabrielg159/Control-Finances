<?php

$titulo_site	= 'Control Finances';
$sistema 		= 'Ctrl Finances';
$versao 		= '1';

/*DADOS DO BOLETO*/

$email_remetente_cobranca = 'xxx@gmail.com';
$nome_remetende_cobranca = 'Control Finances';
$tel_remetende_cobranca = '(41) 99108-4058 / (41) 99108-4058';
$end_remetende_cobranca = 'Rua Visconde de Nacar';
$cidade_remetende_cobranca = 'Campo Largo - PR';

$servidor_smtp = 'smtp.gmail.com';
$usuario_smtp = 'psaholky@gmail.com';
$senha_smtp = 'teste@321';

$recebimentos_ativos = 'Boleto Bancário';

$servidor_conexao = $_SERVER['SERVER_NAME'];


	$urlsistema = '';
	$bd_serv = '127.0.0.1';
	$bd_user = 'root';
	$bd_pass = '';
	$bd_banc = 'sistema_financeiro';


	try{
		$link = new mysqli($bd_serv, $bd_user, $bd_pass, $bd_banc);
	}
	catch(Error $e){
	    echo "Error. Não foi possível conectar com a base de dados " . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

?>
