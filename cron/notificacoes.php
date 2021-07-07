<?php

include __DIR__.'/../includes/includes.php';

$tlg = new Telegram (TOKEN_BOT);
$bd_tlg = new bdTelegram (__DIR__.'/../recebersmsbot.db');

foreach ($bd_tlg->todosUsuarios () as $usuario){

	$msg = @$tlg->sendMessage ([
		'chat_id' => $usuario ['id_telegram'],
		'text' => "🚀 <b>Gere Números Para Receber SMS no Seu Serviço Preferido, Novos Numeros IFood e TikTok Adcionados Entre Outros, Kwai, PicPay, Whatsapp, Telegram, BanQi...</b>\n\n💠 É Facíl, Apenas Recarregue Sua Conta Com o Comando /recarregar e Use o Saldo Para Comprar Números, Não Se Preocupe Você Só Paga Depois Que Recebe o Sms!\n\n🎃 O Mais Barato e Melhor Do Telegram. Nosso Grupo De Consultas Gratis. https://t.me/Blackmetodos",
		'parse_mode' => 'html'
	]);

	/*$msg = $tlg->forwardMessage ([
	 	'chat_id' => $usuario ['id_telegram'],
	 	'from_chat_id' => '@recebersms',
	 	'message_id' => 42
	 ]);*/

	/* $msg = @$tlg->sendMessage ([
	 	'chat_id' => $usuario ['id_telegram'],
	 	'text' => "✨ Use o comando /totaladicionados para saber a quantidade de usuários que você adicionou no nosso grupo @chatrecebersms\n\n<u>Adicionando ".MINIMO_ADICAO." usuários você ganha R\$".number_format (BONUS_ADICAO, 2)." de saldo no bot</u>",
	 	'parse_mode' => 'html'
	 ]);*/

	if ($msg ['ok']){

		$nome = $msg ['result']['chat']['first_name'] ?? $usuario ['id'];
		echo "{$nome} enviada\n";

	}

}
