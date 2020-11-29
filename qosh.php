<?php


$covidmenu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🌍𝘿𝙪𝙣𝙮𝙤📊"],],
[['text'=>"📊O'ᴢʙᴇᴋɪꜱᴛᴏɴ🇺🇿"],],
[['text'=>"📶𝗧𝗼𝗽 𝗦𝘁𝗮𝘁𝗶𝘀𝘁𝗶𝗸𝗮📊"],],
[['text'=>"🔙Orqaga"],],
]
]);

$bot = "Onashka_bot";
//CoronaVirus 
if($text=="𝑪𝒐𝒓𝒐𝒏𝒂𝑽𝒊𝒓𝒖𝒔🦠"){
bot('sendPhoto',[
'photo'=>"https://t.me/hacker_progi/53654",
'chat_id'=>$chat_id,
'caption'=>"🦠CoronaVirus Statistika Menusiga Kirdingiz!

Kerakli 📊Statistika📊 ni bosing!⬇️
",
'reply_markup'=>$covidmenu,
]);
}
if($text=="🌍𝘿𝙪𝙣𝙮𝙤📊"){
$covid19 = file_get_contents("http://u1093.xvest.ru/perser/covid19.php?text=$text");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$covid19

➖➖➖➖➖➖➖➖
Ma'lumotlar @$bot Tomonidan Taqdim Etildi!
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],
] 
]) 
]);
} 
if($text=="📊O'ᴢʙᴇᴋɪꜱᴛᴏɴ🇺🇿"){
$coviduzb = file_get_contents("http://u1093.xvest.ru/perser/covid19uzb.php?text=");

bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$coviduzb

➖➖➖➖➖➖➖➖
Ma'lumotlar @$bot Tomonidan Taqdim Etildi!
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],
] 
]) 
]);
}
if($text=="📶𝗧𝗼𝗽 𝗦𝘁𝗮𝘁𝗶𝘀𝘁𝗶𝗸𝗮📊"){
$topcovid=file_get_contents("http://u1093.xvest.ru/perser/dcovid.php?text=");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$topcovid

➖➖➖➖➖➖➖➖
Ma'lumotlar @$bot Tomonidan Taqdim Etildi!
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],
] 
]) 
]);
}
//covid tugadi





if($text=="⛅Ob-havo🌩"){
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"🌤 Siz Ob-Havo bo'limida siz!
📂 Marhamat kerakli Viloyatni tanlang!",
'reply_markup'=>$ob
]);
}


if($text == 'PHPni olish📥' and $chat_id == $admin){
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile(__FILE__),
'caption'=>"@Onashka_bot <b>code</b>",
'parse_mode'=>"html",
'reply_to_message_id'=>$mid,
]);
}



if($text == "📚𝙄𝙨𝙢 𝙈𝙖'𝙣𝙤𝙨𝙞📚"){
if(joinchat($from_id)=="true"){
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"<b>Ismingiz manosini bilish uchun 
O'zingizga kerakli bo'limni tanlang:</b> 🔻",
"parse_mode"=>"html",
"reply_markup"=>json_encode([
"resize_keyboard"=>true,
"keyboard"=>[
[["text"=>"👨‍💼Yigitlar Uchun"],["text"=>"👩‍💼Qizlar Uchun"],],
[["text"=>"🔙Orqaga"],],
]
])
]);
unlink("multik/step/$chat_id.ism");
}
}


if($text=="👨‍💼Yigitlar Uchun"){
if(joinchat($from_id)=="true"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💼Ismingizni Yozing!",
'reply_markup'=>$rpl,
]);
}
}
if($reply=="👨‍💼Ismingizni Yozing!"){ 
$nom = file_get_contents("https://ismlar.com/search/$text");
  $exp = explode('<p class="text-size-5">',$nom);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('&#039;','`',$ismn);
  $ismm = trim("$ismk");
  bot ('sendphoto', [
'chat_id'=>$chat_id,
'photo'=>"http://u1093.xvest.ru/multik/apila/ismbola.php?text=$text",
'caption'=>"<b>📚Ismingiz Ma'nosi📚</b>

<b>🔍Ismingiz:</b>  <i>$text</i>

📑 <b>Manosi:</b> <i>$ismm</i>!",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],
] 
]) 
]);
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"*Foydali buyruqlar*👇",
'parse_mode'=>"markdown", 
'disable_web_page_preview'=>true,
  'reply_markup'=>$qiziq,
]);
unlink("multik/api/tayyor/tayyor.png");
unlink("multik/step/$chat_id.ism");
}

if($text=="👩‍💼Qizlar Uchun"){
if(joinchat($from_id)=="true"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"👩‍💼Ismingizni Yozing!",
'reply_markup'=>$rpl,
]);
}
}
if($reply=="👩‍💼Ismingizni Yozing!"){ 
$nom = file_get_contents("https://ismlar.com/search/$text");
  $exp = explode('<p class="text-size-5">',$nom);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('&#039;','`',$ismn);
  $ismm = trim("$ismk");
  bot ('sendphoto', [
'chat_id'=>$chat_id,
'photo'=>"http://u1093.xvest.ru/multik/apila/ismqiz.php?text=$text",
'caption'=>"<b>📚Ismingiz Ma'nosi📚</b>

<b>🔍Ismingiz:</b>  <i>$text</i>

📑 <b>Manosi:</b> <i>$ismm</i>!",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],
] 
]) 
]);
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"*Foydali buyruqlar*👇",
'parse_mode'=>"markdown", 
'disable_web_page_preview'=>true,
  'reply_markup'=>$qiziq,
]);
unlink("multik/api/tayyor/tayyor.png");
unlink("multik/step/$chat_id.ism");
}



 
if($text == "👳‍♂️Samarqand" or $text =="👳‍♂️Toshkent" or  $text == "👳‍♂️Namangan" or $text == "👳‍♂️Jizzax" or $text == "👳‍♂️Nukus" or $text == "👳‍♂️Navoiy" or  $text == "👳‍♂️Qarshi" or $text == "👳‍♂️Xorazm" or $text == "👳‍♂️Termiz"){
$namoz = file_get_contents("https://u1093.xvest.ru/perser/namoz.php?text=$text");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$namoz

➖➖➖➖➖➖➖➖
Ma'lumotlar @$bot Tomonidan Taqdim Etildi!
",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],
] 
]) 
]);
}


