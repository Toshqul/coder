<?php

if($text == 'PHPni olish📥' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile(__FILE__),
'caption'=>"@Onashka_bot <b>code</b>",
'parse_mode'=>"html",
'reply_to_message_id'=>$mid,
]);
}


mkdir("soat");
mkdir("soat/rasm");


$usernam = $update->message->chat->username;
$cty = $message->chat->type;
$cqid = $update->callback_query->id;
$sticker = $message->sticker;
$audio = $message->audio;
$voice = $message->voice;
$video = $message->video;
$caption = $message->caption;
$performer = $message->performer;
$gif = $message->animation;
$doc = $message->document;
$photo = $message->photo;
$selfi1 = $message->video_note;

mkdir("panel");

if(isset($text)){
$get = file_get_contents("panel/$chat_id");
if($get){
}else{
$baza = [
"chats"=>"true",
"stiker"=>"true",
"audio"=>"true",
"voice"=>"true",
"photo"=>"true",
"video"=>"true",
"fayl"=>"true",
"kirish"=>"true",
"giflar"=>"true",
"bots"=>"true",
"selfi"=>"true",
"soat"=>"true",
];
file_put_contents("panel/$chat_id",json_encode($baza));
}
}

$baza = json_decode(file_get_contents("panel/$chat_id"),true);
$Schats = $baza["chats"];
$Sstiker = $baza["stiker"];
$Saudio  = $baza["audio"];
$Svoice = $baza["voice"];
$Svideo = $baza["video"];
$Skirish = $baza["kirish"];
$Sphoto = $baza["photo"];
$Sfayl = $baza["fayl"];
$Sgif = $baza["giflar"];
$Sbots = $baza["bots"];
$Sselfi = $baza["selfi"];
$Ssoat = $baza["soat"];


$fadmin = $message->from->id;
$imid = $callback->inline_message_id;
if($text == "/panel" or $text == "/panel@Onashka_bot"){
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=> $mid,
]);
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;
if ($count >= 10){
$baza = json_decode(file_get_contents("panel/$chat_id"),true);
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑️Taqiqlangan";
}else{
$chats = "✅Ruhsat etilgan";
}
$stiker = $baza["stiker"];
if($stiker == "false"){
$stiker = "☑️Taqiqlangan";
}else{
$stiker = "✅Ruhsat etilgan";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑️Taqiqlangan";
}else{
$audio = "✅Ruhsat etilgan";
}
$voice = $baza["voice"];
if($voice == "false"){
$voice = "☑️Taqiqlangan";
}else{
$voice = "✅Ruhsat etilgan";
}
$photo = $baza["photo"];
if($photo == "false"){
$photo = "☑️Taqiqlangan";
}else{
$photo = "✅Ruhsat etilgan";
}
$video = $baza["video"];
if($video == "false"){
$video = "☑️Taqiqlangan";
}else{
$video = "✅Ruhsat etilgan";
}
$fayl = $baza["fayl"];
if($fayl == "true"){
$fayl = "☑️Taqiqlangan";
}else{
$fayl = "✅Ruhsat etilgan";
}
$kirish = $baza["kirish"];
if($kirish == "true"){
$kirish = "☑️Taqiqlangan";
}else{
$kirish = "✅Ruhsat etilgan";
}
$gif = $baza["giflar"];
if($gif == "false"){
$gif = "☑️Taqiqlangan";
}else{
$gif = "✅Ruhsat etilgan";
}
$bots = $baza["bots"];
if($bots == "true"){
$bots = "☑️Taqiqlangan";
}else{
$bots = "✅Ruhsat etilgan";
}
$selfi = $baza["selfi"];
if($selfi == "false"){
$selfi = "☑️Taqiqlangan";
}else{
$selfi = "✅Ruhsat etilgan";
}

$soat = $baza["soat"];
if($soat == "false"){
$soat = "🔔Soat qo'yadi";
}else{
$soat = "🔕Soat qo'ymaydi";
}
file_put_contents("sozlama/$fadmin.lch","$chat_id");
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"<a href='https://t.me/$usernam'>$title</a> <b>guruhini sozlash uchun quyidagi tugmalardan foydalaning:👇</b>
✅<b>Ruhsat etilgan
☑Taqiqlangan</b>",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"null","text"=>"📂Fayllar"],["callback_data"=>"M()fayl","text"=>"$fayl"],],
[["callback_data"=>"null","text"=>"💭Suhbatlashish"],["callback_data"=>"M()chats","text"=>"$chats"],],
[["callback_data"=>"null","text"=>"✨Rasmlar"],["callback_data"=>"M()photo","text"=>"$photo"],],
[["callback_data"=>"null","text"=>"⛺Giflar"],["callback_data"=>"M()giflar","text"=>"$gif"],],
[["callback_data"=>"null","text"=>"🎧Musiqalar"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"null","text"=>"🎤Goloslar"],["callback_data"=>"M()voice","text"=>"$voice"],],
[["callback_data"=>"null","text"=>"🎥Videolar"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"null","text"=>"🎭Stickerlar"],["callback_data"=>"M()stiker","text"=>"$stiker"],],
[["callback_data"=>"null","text"=>"🚶Kirdi-Chiqdilar"],["callback_data"=>"M()kirish","text"=>"$kirish"],],
[["callback_data"=>"null","text"=>"👷Botlar"],["callback_data"=>"M()bots","text"=>"$bots"],],
[["callback_data"=>"null","text"=>"📹Video selfi"],["callback_data"=>"M()selfi","text"=>"$selfi"],],
[["callback_data"=>"null","text"=>"⏱Bio`ga soat"],["callback_data"=>"M()soat","text"=>"$soat"],],
[['text'=>"🗑Menu yopish",'callback_data'=>"exit"]]
]
]),
]);
}else{
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"*📛Kechirasiz ushbu buyruqdan foydalanish uchun guruhda kamida 10 ta a'zo bo'lishi kerak iltimos xatoni to'g'irlab qayta urunib ko'ring!*",
'parse_mode'=>"markdown",
]);
}
}
}


$callback = $update->callback_query;
$dataa = $callback->data;
$dataa = explode("()",$dataa);
if($dataa[0] == "M"){
$cid = $callback->from->id;
$mid = $callback->message->message_id;
$imid = $callback->inline_message_id;
$gett2 = bot('getChatMember', [
'chat_id'=> $chat_id2,
'user_id'=> $fadmin2,
]);
$get2 = $gett2->result->status;
if($get2 =="administrator" or $get2 == "creator"){
$gets = bot("getChat",[
"chat_id"=>"$chat_id2",
]);
$title = $gets->result->title;
$baza = json_decode(file_get_contents("panel/$chat_id2"),true);
if($baza["$dataa[1]"] == "true"){
$input = "false";
}else{
$input = "true";
}
$baza["$dataa[1]"] = $input;
file_put_contents("panel/$chat_id2",json_encode($baza));
$baza = json_decode(file_get_contents("panel/$chat_id2"),true);
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑️Taqiqlangan";
}else{
$chats = "✅Ruhsat etilgan";
}
$stiker = $baza["stiker"];
if($stiker == "false"){
$stiker = "☑️Taqiqlangan";
}else{
$stiker = "✅Ruhsat etilgan";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑️Taqiqlangan";
}else{
$audio = "✅Ruhsat etilgan";
}
$voice = $baza["voice"];
if($voice == "false"){
$voice = "☑️Taqiqlangan";
}else{
$voice = "✅Ruhsat etilgan";
}
$photo = $baza["photo"];
if($photo == "false"){
$photo = "☑️Taqiqlangan";
}else{
$photo = "✅Ruhsat etilgan";
}
$video = $baza["video"];
if($video == "false"){
$video = "☑️Taqiqlangan";
}else{
$video = "✅Ruhsat etilgan";
}
$fayl = $baza["fayl"];
if($fayl == "true"){
$fayl = "☑️Taqiqlangan";
}else{
$fayl = "✅Ruhsat etilgan";
}
$kirish = $baza["kirish"];
if($kirish == "true"){
$kirish = "☑️Taqiqlangan";
}else{
$kirish = "✅Ruhsat etilgan";
}
$gif = $baza["giflar"];
if($gif == "false"){
$gif = "☑️Taqiqlangan";
}else{
$gif = "✅Ruhsat etilgan";
}
$bots = $baza["bots"];
if($bots == "true"){
$bots = "☑️Taqiqlangan";
}else{
$bots = "✅Ruhsat etilgan";
}
$selfi = $baza["selfi"];
if($selfi == "false"){
$selfi = "☑️Taqiqlangan";
}else{
$selfi = "✅Ruhsat etilgan";
}
$soat = $baza["soat"];
if($soat == "false"){
$soat = "🔔Soat qo'yadi";
}else{
$soat = "🔕Soat qo'ymaydi";
file_put_contents("soat/$chat_id2.soat",$chat_id2);
}

bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"<a href='https://t.me/$usernam'>$title</a> <b>guruhini sozlash uchun quyidagi tugmalardan foydalaning:👇</b>
✅<b>Ruhsat etilgan
☑Taqiqlangan</b>",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'inline_message_id'=>$imid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"null","text"=>"📂Fayllar"],["callback_data"=>"M()fayl","text"=>"$fayl"],],
[["callback_data"=>"null","text"=>"💭Suhbatlashish"],["callback_data"=>"M()chats","text"=>"$chats"],],
[["callback_data"=>"null","text"=>"✨Rasmlar"],["callback_data"=>"M()photo","text"=>"$photo"],],
[["callback_data"=>"null","text"=>"⛺Giflar"],["callback_data"=>"M()giflar","text"=>"$gif"],],
[["callback_data"=>"null","text"=>"🎧Musiqalar"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"null","text"=>"🎤Goloslar"],["callback_data"=>"M()voice","text"=>"$voice"],],
[["callback_data"=>"null","text"=>"🎥Videolar"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"null","text"=>"🎭Stickerlar"],["callback_data"=>"M()stiker","text"=>"$stiker"],],
[["callback_data"=>"null","text"=>"🚶Kirdi-Chiqdilar"],["callback_data"=>"M()kirish","text"=>"$kirish"],],
[["callback_data"=>"null","text"=>"👷Botlar"],["callback_data"=>"M()bots","text"=>"$bots"],],
[["callback_data"=>"null","text"=>"📹Video selfi"],["callback_data"=>"M()selfi","text"=>"$selfi"],],
[["callback_data"=>"null","text"=>"⏱Bio`ga soat"],["callback_data"=>"M()soat","text"=>"$soat"],],
[['text'=>"🗑Menu yopish",'callback_data'=>"exit"]]
]
]),
]);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"👷Faqat adminlar uchun",
'show_alert'=>true,
]);
}
}


if(isset($update) and $Skirish == "true"){
if($update->message->new_chat_member or $update->message->new_chat_photo or $update->message->new_chat_title or $update->message->left_chat_member or $update->message->pinned_message){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
}
}

if(isset($update) and $Sbots == "true"){
    if (($new_chat_members != NUll)&&($is_bot!=false)) {
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
   $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>🇺🇿👷Guruhga faqat adminlar bot qo'shishi mumkin!

🇷🇺Только админы могут добавлять ботов в группу!</b>",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],             
] 
]) 
]);
}
}
}



if(isset($update) and $Sselfi == "false"){
if (isset($selfi1)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"⚠<a href='tg://user?id=$from_id'>$name</a>
  <b>🇺🇿Kechirasiz bu guruhda 🤳Video selfi tashlash mumkin emas.

🇷🇺Извините, вы не можете накинуть 🤳Видео селфи в этой группе.</b>",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],             
] 
]) 
]);
}
}
}

if(isset($update) and $Saudio == "false"){
if (isset($audio)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"⚠<a href='tg://user?id=$from_id'>$name</a> 
<b>🇺🇿Kechirasiz bu guruhda 🎶Musiqa tashlash mumkin emas.

🇷🇺Извините, вы не можете накинуть 🎶Музыка в этой группе.</b>",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],             
] 
]) 
]);
}
}
}

if(isset($update) and $Svoice == "false"){
if (isset($voice)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"⚠<a href='tg://user?id=$from_id'>$name</a>
 <b>🇺🇿Kechirasiz bu guruhda 🎙Ovozli xabar tashlash mumkin emas.

🇷🇺Извините, вы не можете накинуть 🎙Голосовое сообщение в этой группе.</b>",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],             
] 
]) 
]);
}
}
}

if(isset($update) and $Svideo == "false"){
if (isset($video)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"⚠<a href='tg://user?id=$from_id'>$name</a> 
<b>🇺🇿Kechirasiz bu guruhda 📽Video tashlash mumkin emas.

🇷🇺Извините, вы не можете накинуть 📽Видео в этой группе.</b>",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],             
] 
]) 
]);
}
}
}

if(isset($update) and $Sphoto == "false"){
if (isset($photo)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"⚠<a href='tg://user?id=$from_id'>$name</a> 
<b>🇺🇿Kechirasiz bu guruhda 📸Rasm yuborish mumkin emas.

🇷🇺Извините, вы не можете накинуть 📸Фото в этой группе.</b>",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],             
] 
]) 
]);
}
}
}
if(isset($update) and $Sstiker == "false"){
if (isset($sticker)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"⚠<a href='tg://user?id=$from_id'>$name</a>
 <b>🇺🇿Kechirasiz bu guruhda 👻Stiker tashlash mumkin emas.

🇷🇺Извините, вы не можете накинуть 👻Стикер в этой группе.</b>",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],             
] 
]) 
]);
}
}
}

if(isset($update) and $Sgif == "false"){
if (isset($gif)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"⚠<a href='tg://user?id=$from_id'>$name</a> 
<b>🇺🇿Kechirasiz bu guruhda 💿Gif tashlash mumkin emas.

🇷🇺Извините, вы не можете накинуть 💿Гиф в этой группе.</b>",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],             
] 
]) 
]);
}
}
}

if(isset($update) and $Sfayl == "true"){
if (isset($doc)!==false){
$gett = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=> $chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=> $chat_id,
'text'=>"⚠<a href='tg://user?id=$from_id'>$name</a>
<b> 🇺🇿Kechirasiz bu guruhda 📂Fayl tashlash mumkin emas.

🇷🇺Извините, вы не можете накинуть 📂Документы в этой группе.</b>",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],             
] 
]) 
]);
}
}
}



if ($data == "null"){
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=> "❎Bu bo'lim o'zgarmaydi.!",
'show_alert'=>false,
]);
}
if($data=="exit" ){
$gett = bot('getChatMember', [
'chat_id' => $chat_id2,
'user_id' => $fadmin2,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
 ]);
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🗑Menu yopildi",
]);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"👷Faqat adminlar uchun",
'show_alert'=>true,
]);
}
}



if(isset($update) and $Schats == "true"){
if($type=="supergroup" or $type=="group"){
    $ex = $msgs[$text];
$ex = explode("|",$ex);
    $txt = $ex[rand(0,count($ex)-1)];
bot("sendmessage",[
	'chat_id'=>$message->chat->id,
	'text'=>"$txt",
	'reply_to_message_id'=>$mid
	]);
}
}

if($replytx){
    if($type=="supergroup"  or $type=="group"){
   	$replytx = $message->reply_to_message->text;
   	      	if(strpos($msgs[$replytx],"$text") !==false){
   	}else{
		$msgs[$replytx] ="$text|$msgs[$replytx]";
		file_put_contents('msgs.json', json_encode($msgs));
	}
	
}
}


// Obu Havo kodi
$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;
$sana = date('d-M Y',strtotime('2 hour'));
$soa = date('H:i', strtotime('2 hour'));
$kun3 = date('N',strtotime('2 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma  muborak🌸5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$tedadmsg = $update->message->message_id;
$oynomi = date('F',strtotime('2 hour'));
$buoy = date('t',strtotime('2 hour'));

if(isset($update) and $Ssoat == "false"){
if(true){
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>"
┌👋Guruhimizga xush kelibsiz!
├🗓Bugun: $sana-yil
├⌚️Soat: $soa
├🔵Hafta kuni: $hafta1
├🌎Hozir $oynomi oyi
├ 📅Bu oy $buoy kundan iborat
├👥Guruh a'zolari: $count
└📡Bosh homiy: @Tik_TopUZ",
]);
}
}

/*
$grsoat = file_get_contents("soat/$chat_id.soat");
if(isset($update) and $Ssoat == "false"){
if(true){
header('Content-Type: image/jpg');
$img = imagecreatefromjpeg('font/photo.jpg');
$color = imagecolorallocate($img, 253, 244, 0);
$time = date('H:i', strtotime('2 hour'));
$grsoat = file_get_contents("soat/$chat_id.soat");
$font = "font/1.ttf";
$text = "$time";
$len = strlen($text);
if($len>10){
	$size = 180-($len-9)*8;
	}else{
		$size = 180;
}

// determine the size of the text so we can center it
$box = imagettfbbox($size, 0, $font, $text);
$text_width = abs($box[2]) - abs($box[0]);
$text_height = abs($box[5]) - abs($box[3]);
$image_width = imagesx($img);
$image_height = imagesy($img);
$x = ($image_width - $text_width) / 2;
$y = ($image_height + $text_height) / 2;
// add text
imagettftext($img, $size, 0, $x, $y, $color, $font, $text);
if(imagejpeg($img,"soat/rasm/$chat_id.jpg")){
$setphoto = bot('setChatPhoto',[
    'chat_id'=>"$grsoat",
    'photo'=>new CURLFile("soat/rasm/$chat_id.jpg"),
]);
}
}
}
*/

if(isset($update->message->new_chat_photo)){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
}