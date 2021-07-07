<?php

include __DIR__.'/../includes/includes.php';

$tlg = new Telegram ('519568936:AAGn495DHqKoLusyyBhzI7yMi4ggMslLUjo');

print_r ($tlg->sendDocument ([
	'chat_id' => -1001437886425,
	'caption' => "Backup\n@recebersmsbot\n".date ('d/m/Y H:i:s'),
	'document' => curl_file_create (__DIR__.'/../recebersmsbot.db')
]));