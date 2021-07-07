<?php

$tlg->sendMessage ([
	'chat_id' => $tlg->ChatID (),
	'text' => "😀 <b>Olá ".htmlentities ($tlg->FirstName ())."</b>, aqui você poderá gerar o seu número temporario para receber SMS, use os comandos abaixo:\n\n/servicos - <u>Serviços disponíveis</u>\n\n/saldo - <b>Seu saldo disponível</b>\n\n/sobre - <b>Mais Informações</b>\n\n/recarregar - <b>Adicionar saldo na conta</b>\n\n/paises - <b>Pais dos números</b>\n\n/afiliados - <b>Indique e ganhe saldo</b>\n\n/codigo - <b>Código fonte do bot</b>",
	'parse_mode' => 'html',
	'reply_markup' => $tlg->buildKeyBoard ([
		[$tlg->buildInlineKeyboardButton ('🔥 Comprar'), $tlg->buildInlineKeyboardButton ('👥 Informações')],
		[$tlg->buildInlineKeyboardButton ('👤 Meu Saldo'), $tlg->buildInlineKeyboardButton ('💴 Depositar')]
	], true, true)
]);

// afiliados
if (isset ($complemento) && is_numeric ($complemento) && STATUS_AFILIADO){

	$ref = $tlg->getUsuarioTlg ($complemento);

	// se usuario existir e não tiver entrado no bot por indicação de alguem e tambem não pode ser ele mesmo
	if (isset ($ref ['id']) && $bd_tlg->checkReferencia ($tlg->UserID ()) == false && $complemento != $tlg->UserID ()){

		// salva usuario atual como referencia do dono do link
		$bd_tlg->setReferencia ($complemento, $tlg->UserID ());

	}

}