<?php

//send buyruqlari
$step = file_get_contents("stat/$chat_id.step");
$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📤Send oddiy"],['text'=>"📤Send Forward"]],
[['text'=>"📤Guruh oddiy"],['text'=>"📤Guruh Forward"]],
[['text'=>"📮Reklama"],['text'=>""]],
[['text'=>"Bekor qilish⛔"],['text'=>"PHPni olish📥"],],
]
]);
 
$rek = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
   [['text'=>"1⃣ Reklama"],['text'=>"2⃣ Reklama"],],
[['text'=>"◀Orqaga"],],
]
]);

if($text == "/xabar" and $chat_id==$admin){
 bot('SendMessage',[ 
'chat_id'=>$chat_id,
'message_id'=>$mid,
'parse_mode'=>'markdown',
'text'=>"🔹*Siz adminsiz kerakli bo'limni tanlang:*",
'reply_markup'=>$key,
]);
}
 

if($text == "◀Orqaga" and $from_id==$admin){
 bot('SendMessage',[ 
'chat_id'=>$chat_id,
'message_id'=>$mid,
'parse_mode'=>'markdown',
'text'=>"🔹*Siz adminsiz kerakli bo'limni tanlang:*",
'reply_markup'=>$key,
]);
}


if($text == "Bekor qilish⛔"&&$from_id==$admin){
      bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"Xabar yuborish Bekor qilindi!",
'parse_mode'=>"html",
'reply_markup'=>$key,
]);
unlink("stat/$chat_id.step");
      unlink("stat/send.ok");
      unlink("stat/send.no");
unlink("rek/$chat_id.step");
      }
    
    if ($text == "📤Send oddiy" && $chat_id == $admin ){
        file_put_contents("stat/$chat_id.step", "send");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "Xabaringizni yuboring",
            'reply_to_message_id'=>$mid,
            'reply_markup'=>$key
        ]);
    } 
if ($step== "send") {
     file_put_contents("stat/$chat_id.step", "no");
        $fp = fopen("stat/user.list", 'r');
        while (!feof($fp)) {
            $ckar = fgets($fp);
            bot('sendMessage', [
'chat_id'=>$ckar,
'text'=>$text,
]);
        }
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "Xabar muofaqiyatli yuborildi",
            'reply_to_message_id'=>$mid,
            'reply_markup' => $key
        ]);
    } 
if ($text == "📤Send Forward" && $chat_id == $admin){
        file_put_contents("stat/$chat_id.step", "fwd");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "Xabaringizni yuboring",
            'reply_to_message_id'=>$mid,
            'reply_markup'=>$key
        ]);
    } 
if ($step == 'fwd') {
     file_put_contents("stat/$chat_id.step", "no");
        $forp = fopen("stat/user.list", 'r');
        while (!feof($forp)) {
            $fakar = fgets($forp);
            bot('forwardMessage', [
'chat_id'=>$fakar,
'from_chat_id'=>$chat_id,
'message_id'=>$mid,
]);
        }
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "Xabar yuborildi",
            'reply_to_message_id'=>$mid,
            'reply_markup' => $key
        ]);
    } 

    if ($text == "📤Guruh oddiy" && $chat_id == $admin ){      file_put_contents("stat/$chat_id.step", "snd");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "Xabaringizni yuboring",
            'reply_to_message_id'=>$mid,
            'reply_markup'=>$key
        ]);
    } 
if ($step== "snd") {
        file_put_contents("stat/$chat_id.step", "no");
        $fp = fopen("stat/group.list", 'r');
        while (!feof($fp)) {
            $ckar = fgets($fp);
            bot('sendMessage', [
'chat_id'=>$ckar,
'text'=>$text,
]);
        }
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "Xabar muofaqiyatli yuborildi",
            'reply_to_message_id'=>$mid,
            'reply_markup' => $key
        ]);
    } 
if ($text == "📤Guruh Forward" && $chat_id == $admin){
     file_put_contents("stat/$chat_id.step", "fd");
        bot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "Xabaringizni yuboring",
            'reply_to_message_id'=>$mid,
            'reply_markup'=>$key
        ]);
    } 
if ($step == 'fd') {
     file_put_contents("stat/$chat_id.step", "no");
        $forp = fopen("stat/group.list", 'r');
        while (!feof($forp)) {
            $fakar = fgets($forp);
            bot('forwardMessage', [
'chat_id'=>$fakar,
'from_chat_id'=>$chat_id,
'message_id'=>$mid,
]);
        }
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "Xabar yuborildi",
            'reply_to_message_id'=>$mid,
            'reply_markup' => $key
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

//1
$reknamee = file_get_contents("rek/RekNamee.matn");
$reklinke = file_get_contents("rek/RekLinke.matn");
//2


$rek = file_get_contents("rek/$chat_id.step");



if($text == "📮Reklama" and $chat_id == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"markdown",
'text'=>"❇️* 1⃣➖ Reklamasi Matnini yuboring!*",
]);
file_put_contents("rek/$chat_id.step","reknamee");
}

if($rek == "reknamee" and $chat_id == $admin){
file_put_contents("rek/$chat_id.step","RekLinke");
file_put_contents("rek/RekNamee.matn",$text);
bot('sendmessage',[
'chat_id'=>$admin,
'parse_mode'=>"markdown",
'text'=>"✅*Reklama Matni saqlani! Endi linkni yuboring!*",
]);      
}
if($rek == "RekLinke" and $chat_id == $admin){
file_put_contents("rek/RekLinke.matn",$text);
bot('sendmessage',[
'chat_id'=>$admin,
'parse_mode'=>"markdown",
'text'=>"✅*Reklama Linki va Matni o'rnatildi!*
[$reknamee]($reklinke)",
'disable_web_page_preview' => true,
]);      
unlink("rek/$chat_id.step");
}