<?php

include __DIR__.'/../includes/includes.php';

$tlg = new Telegram (TOKEN_BOT);

$tlg->sendMessage ([
'chat_id' => '@BlackMetodos',
'text' => "<b>🚀 RECEBA SMS COM NÚMEROS NOVOS PARA CRIAR CONTAS</b>

- PicPay
- Whatsapp
- 99app
- Banqi
- Uber
- IFood
- E muitos outros...

💬 Receba os códigos no nosso bot
@BlackMetodos

🌐 Canal de Referências
@BlackMetodos
📍 Nosso grupo
@BlackMetodos

*Preço e serviço incomparável com os existentes.
*Mais de 4 mil números disponíveis",
'parse_mode' => 'html'
]);
