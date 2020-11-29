<?php 

ob_start();
$token = "990858867:AAFwUilT7ix-s08YU2lgwClhj5xWVAojMEg"; 
$bot = "@Onashka_bot"; 
$admin = 621617473; //user id admin
$kanal = "-1001439682534";
$kanali = "@dil_sozlarm";
define('API_KEY',$token);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
function joinchat($from){
     global $message_id;
     $gett = bot('getChatMember',[
  'chat_id' =>"-1001439682534",
  'user_id' => $from,
  ]);
  $stat = $gett->result->status;
if($stat=="creator" or $stat=="administrator" or $stat=="member"){
      return true;
         }else{
           bot('deleteMessage',[
'chat_id'=>$from,
'message_id'=>$mid-2,
]);
bot('sendphoto',[
'photo'=>"https://t.me/hacker_progi/53620",
         "chat_id"=>$from,
         "caption"=>"<b>🤖: Men orqali guruhingizni boshqarishingiz mumkin

Foydalanishdan avval quyidagi kanallarga obuna bo'ling aks holda bot ishlamaydi❗️

Agar kanallardan chiqib ketsangiz bot ishlamay qoladi shuning uchun kanalni tark etmang❗</b>",
         'parse_mode'=>'html',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕Azo bo'lish","url"=>"https://t.me/joinchat/AAAAAFXPz-YvGHuj8cwzng"]],
[["text"=>"✅ Tasdiqlash","callback_data"=>"join"]],
]
]),
]);  
 
return false;
}
}



$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);


function MakeKey($data = array(),$c = 2){
  $i = 0;
  foreach($data as $key=>$v){
      $keytype=['text'=>$v];
      $k[floor($i/$c)][$i%$c]=$keytype;
      $i++;
  }
  return json_encode(array('keyboard'=>$k,'resize_keyboard'=>true));
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$text1 = $message->text;
$chat_id = $update->message->chat->id;
$cid = $update->message->chat->id;
$from_id = $message->from->id;
$mid = $message->message_id;
$edname = $editm ->from->first_name;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$username = $message->from->username;
$is_bot = $message->new_chat_member->is_bot;
$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$is_bot = $message->new_chat_member->is_bot;
 
$chan  = $update->channel_post;
$ch_text = $chan->text;
$ch_photo = $chan->photo;
$ch_mid = $chan->message_id;
$ch_cid = $chan->chat->id;

$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;

$data = $update->callback_query->data;
$type = $message->chat->type;
$name = $message->from->first_name;
$data = $update->callback_query->data;
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$ch_user2 = $update->callback_query->message->chat->username;
$message_id2 = $update->callback_query->message->message_id;
$fadmin2 = $update->callback_query->from->id;

$name2 = $update->callback_query->from->first_name;
$username2 = $update->callback_query->from->username;
$about2 = $update->callback_query->from->about;
$lname2 = $update->callback_query->from->last_name;
$title = $message->chat->title;

$replytx = $message->reply_to_message->text;
$url = $message->entities[0]->type;
$user =  $message->entities[1]->type;
$msgs = json_decode(file_get_contents('msgs.json'),true);

$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
$kanallar = file_get_contents("stat/kanal.list");

//1
$reknamee = file_get_contents("rek/RekNamee.matn");
$reklinke = file_get_contents("rek/RekLinke.matn");

$step = file_get_contents("rek/$chat_id.step");
$capt = $message->caption;
$newid = $message->new_chat_member->id;
$is_bot = $message->new_chat_member->is_bot;
$performer = $message->performer;
$forward_ch = $message->forward_from_chat;
$forward = $message->forward_from;
$user_id = $update->message->from->id;

$reply = $message->reply_to_message->text;

$mybot="@Onashka_bot";
$adminkanal="-1001449102359";
$newid = $message->new_chat_member->id;

$mem = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$azo = $mem->result;
$good = $json->ok;
$chatuser = $message->chat->username;

mkdir("stat");

if($data=="join"){
$check1 = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$kanal&user_id=$chat_id2"))->result->status;
if($check1 != "member" && $check1 != "creator" && $check1 != "administrator"){
  bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"🚫Kechirasiz ,

Siz Kanalimizga azo bolmadingiz",
'show_alert'=>true
]);
}else{
        bot('answerCallbackQuery',[
'callback_query_id'=>$cqid,
'text'=>"✅Urraaaa,
Siz kanalimizga azo boldingiz",
'show_alert'=>true
]);
bot('deletemessage',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
]);
bot('sendmessage',[
'photo'=>"https://t.me/hacker_progi620",
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
	    'text'=>"👇",
    'parse_mode'=>'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'keyboard'=>[   
   [['text'=>"🛠 Buyruqlar"],['text'=>"📋 Malumot"]],
   [['text'=>"📚 Qiziqarli bo'limlar"],['text'=>"📊 Statistika"]],
   [['text'=>"Mening Lichkam😍"]],
]
]),
    ]);
bot('sendmessage', [
'chat_id' => $chat_id2,
'message_id' =>$message_id2,
'text'=>"[@Onashka_bot] *Salom👋
Man o'zbekcha va arabcha reklamalarni, ssilkalani guruhlarda o'chirib beraman👨‍✈

Man ishlashim uchun guruhizga qo'shib admin berishiz kerak😄*",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"👥Guruhga qo'shish🚀", "url"=>"https://telegram.me/onashka_bot?startgroup=new"]], 
       ] 
       ]),
]);
}
}

if($text=="/doc"){
bot("senddocument",[
"chat_id"=>$message->chat->id,
"document"=>new CURLFile("msgs.json")
]);
}

$isbot = $message->from->is_bot;
$user = $message->from->username;
$id = $message->from->username;

if ($isbot != false){
$get = bot('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $id
])->result->status;
if ($get == "member"){
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$id
]);
}
}


if(isset($chpmesid) and (strtolower($chuser) == strtolower(str_replace("@","",$kanali)))){
unlink("stat/news.dat");
file_put_contents("stat/news.txt",$chpmesid);
$chm = file_get_contents("stat/news.txt");
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$kanali,
'message_id'=>$chm,
]);
}

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
   [['text'=>"🛠 Buyruqlar"],['text'=>"📋 Malumot"]],
   [['text'=>"📚 Qiziqarli bo'limlar"],['text'=>"📊 Statistika"]],
   [['text'=>"Mening Lichkam😍"]],
]
]);

$orqa = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🔙Orqaga"],],
]
]);

$ob = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
   [['text'=>"🇺🇿Samarqand"],['text'=>"🇺🇿Toshkent"],['text'=>"🇺🇿Buxoro"]],
   [['text'=>"🇺🇿Farg'ona"],['text'=>"🇺🇿Namangan"],['text'=>"🇺🇿Jizzax"]],
   [['text'=>"🇺🇿Andijon"],['text'=>"🇺🇿Nukus"],['text'=>"🇺🇿Navoiy"]],
   [['text'=>"🇺🇿Guliston"],['text'=>"🇺🇿Urganch"],['text'=>"🇺🇿Qarshi"]],
   [['text'=>"🇺🇿Xiva"],['text'=>"🇺🇿Termiz"]],
  [['text'=>"📚 Qiziqarli bo'limlar"],['text'=>"🏠Bosh menu"],],
]
]);



$qiziq = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
   [['text'=>"📚𝙄𝙨𝙢 𝙈𝙖'𝙣𝙤𝙨𝙞📚"],['text'=>"𝑪𝒐𝒓𝒐𝒏𝒂𝑽𝒊𝒓𝒖𝒔🦠"]],
 [['text'=>"👳‍♂️Namoz vaqtlari🔔"],['text'=>"⛅Ob-havo🌩"]],
[['text'=>"🔙Orqaga"]],
]
]);


if($text== "🔙Orqaga" or $text == "🏠Bosh menu" ){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"⤵ Bosh menuga qaytingiz!",
'reply_markup'=>$key,
]);
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"[@Onashka_bot] *👥Guruhlarni reklamalardan tezkor tozolovchi bot! 

🤖Botni guruhingiz qo'shing va 
Admin qiling bas!*",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"👥Guruhga qo'shish🚀", "url"=>"https://telegram.me/onashka_bot?startgroup=new"]], 
       ] 
       ]),
]);
}

if ($text== "/start" or $text1 == "/start@Onashka_bot"){
	if(joinchat($from_id)=="true"){
if($type=="private"){
$chm = file_get_contents("stat/news.txt");
bot('forwardMessage', [
'chat_id'=>$chat_id,
'from_chat_id'=>$kanali,
'message_id'=>$chm,
]);
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
bot('sendmessage',[ 
  'chat_id' => $chat_id,
'photo' =>"https://t.me/hacker_pri/53620",
'text'=>"👇",
'parse_mode'=>"html", 
'disable_web_page_preview'=>true,
  'reply_markup'=>$key,
]);
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"[@Onashka_bot ]*Salom👋
Man o'zbekcha va arabcha reklamalarni, ssilkalani guruhlarda o'chirib beraman👨‍✈

Man ishlashim uchun guruhizga qo'shib admin berishiz kerak😄*",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"👥Guruhga qo'shish🚀", "url"=>"https://telegram.me/onashka_bot?startgroup=new"]], 
       ] 
       ]),
]);
}
}
}

if($text == "🛠 Buyruqlar"){
if(joinchat($from_id)=="true"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"‎🛠 /panel *Yozib Guruhizni Sozlab Oling
➖➖➖➖➖➖
⚠️ Bot guruhizga admin bo'magan bo'lsa xoziroq admin qiling bo'lmasa afsuski bot ishlamaydi!*
➖➖➖➖➖➖
Man *O'zbekcha va Arabcha reklamalarni, Ssilkalani, har qanday Reklamani * guruhlarda ochirib beraman👨‍✈ 

*Man ishlashim uchun guruhizga qoshib admin berishiz kerak❗*

📃 Bot Yangiliklari - [SSILKA](http://t.me/bot_yangiliklar)
",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"👥Guruhga qo'shish🚀", "url"=>"https://telegram.me/onashka_bot?startgroup=new"]], 
       ] 
       ]),
]);
}
}
if($text == "📋 Malumot"){
if(joinchat($from_id)=="true"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"*⚠️ Qo'lanmani diqqat bilan o'qib chiqing iltimos,
 Tushinib oling va Botni to'liq ishlating!
👇 Qo'lanmani o'qish uchun pasdagi KNOPKAGA bosing!*",
'message_id'=>$mid,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"🔰Qo`llanma", "url"=>"https://telegra.ph/Onashka-bot-11-01-2"]], 
       ] 
       ]),
]);
}
}

if($text=="👳‍♂️Namoz vaqtlari🔔" ){
	$keys = array("👳‍♂️Samarqand","👳‍♂️Toshkent","👳‍♂️Namangan","👳‍♂️Jizzax","👳‍♂️Nukus","👳‍♂️Navoiy","👳‍♂️Qarshi","👳‍♂️Xorazm","👳‍♂️Termiz","🔙Orqaga");
$keyboard = MakeKey($keys,3);
  bot('Sendmessage',[ 
'chat_id'=>$chat_id,
'text'=>"Qaysi viloyat malumoti kerak",
   'parse_mode' => 'html',
'reply_markup'=>$keyboard,
  ]);
}


if($text == "📚 Qiziqarli bo'limlar"){
if(joinchat($from_id)=="true"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>" *📚 Siz Qiziqarli bolim menusidasiz!
  📂 Marhamat kerakli bo'limni tanlang!*",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>$qiziq,
]);
}
}
if($text == "Mening Lichkam😍"){
if(joinchat($from_id)=="true"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>" *Qani kettik lichkamga😍*",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"Lichkam😍", "url"=>"https://t.me/joinchat/AAAAAFXPz-YvGHuj8cwzng"]], 
       ] 
       ]),
]);
}
}


if($text == "📊 Statistika"){
if(joinchat($from_id)=="true"){
$sana = date('d-M Y',strtotime('2 hour'));
$soat = date('H:i', strtotime('2 hour'));
$dat = file_get_contents("stat/user.dat");
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$kn = substr_count($dat,"\n");
$obsh = $gr + $us + $kn;
     bot('sendMessage',[
     'chat_id'=>$chat_id,
    'text'=> "
┌ *Botimiz natijalari📊*
├ *👤A`zolar*:   $us *dona*
├ *👥Guruhlar*: $gr *dona*
├*📣Kanallar*:  $kn *dona*
└ *♼Hammasi bo'lib*: $obsh *dona* 

➖➖➖➖➖➖➖
📆 *Bugun sana:* $sana
⏰ *Hozir soat*: $soat ",
     'parse_mode'=>'markdown',
     ]);
     }
} 





if(isset($text)){
$guruhlar = file_get_contents("stat/group.list");
if($type == "group" or $type == "supergroup"){
if(strpos($guruhlar,"$chat_id") !==false){
}else{
file_put_contents("stat/group.list","$guruhlar\n$chat_id");
}
} 
}
if(isset($text)){
$userlar = file_get_contents("stat/user.list");
if($type=="private"){
if(strpos($userlar,"$chat_id") !==false){
}else{
file_put_contents("stat/user.list","$userlar\n$chat_id");
}
} 
}

if(isset($update->message->new_chat_member) or isset($update->message->new_chat_photo) or isset($update->message->new_chat_title) or isset($update->message->left_chat_member) or isset($update->message->pinned_message)){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
}


if($new_chat_members == bot('getMe')->result->id){
    $get = bot('getChatMembersCount', ['chat_id' => $chat_id])->result;
    if ($get <= 10) {
        bot('sendMessage', [
            'chat_id' =>$chat_id,
            'text' => "Meni Guruhingizga qo'shishingiz uchun 20 kishidan koproq odam bolish kere🙁🖤",
        ]);
        bot('leaveChat', [
            'chat_id' => $chat_id
        ]);
    } else {
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "🙋Salom barchaga endi men $title guruhi uchun xizmat qilaman
🤖Meni guruhingizga to'liq ishlashim uchun* Admin* qiling

🛠 /panel *Yozib Guruhizni Sozlab Oling
➖➖➖➖➖➖
⚠️ Bot guruhizga admin bo'magan bo'lsa xoziroq admin qiling bo'lmasa afsuski bot ishlamaydi!*
➖➖➖➖➖➖
💎Bosh homiy: [@Tik_Topuz]
",
         'parse_mode' => 'markdown',
     'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>$reknamee,'url'=>$reklinke]],
   ]
        ]),
]);
    }
}

if($new_chat_members == bot('getMe')->result->id){
    $get = bot('getChatMembersCount', ['chat_id' => $chat_id])->result;
$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;
    if ($get <= 50) {
          $input = array("💁 Gruppada aholi soni $count ta ekan, muncha kamchilimiza☹️","💁 Gruppada aholi soni $count ta ekan, o'ziyam chirigan gruppaga kirib qommanu 😆","💁 Gruppada aholi soni $count ta ekan, itam yo'ku gruppada😂");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"$soz",
   'parse_mode'=> 'markdown'
        ]));
    } else {
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "",
        ]);
    }
}


if($ch_cid){
$dat = file_get_contents("stat/user.dat");
if(mb_stripos($dat,$ch_cid) !== false){
}else{
file_put_contents("stat/user.dat", "$dat\n$ch_cid");
}
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

if ($type == "supergroup" or $type == "group"){
if((isset($message->forward_from) or isset($message->forward_from_chat)!==false) or (stripos($text,"@") !==false)  or (stripos($text,"t.me")!==false) or (stripos($performer,"http")!==false)  or (stripos($text,"telegram.me")!==false) or (stripos($text,"http://")!==false) or (stripos($text,"https://")!==false) or (stripos($capt,"http://telegram.me")!==false) or (stripos($capt,"https://t.me")!==false) or (stripos($text,"telegram.dog")!==false) or (stripos($capt,"telegram.dog")!==false)  or (stripos($capt,"telegram.me")!==false) or (stripos($capt,"t.me")!==false) or (stripos($capt,"@")!==false) or (stripos($capt,"@")!==false) or (stripos($capt,"@")!==false) or (stripos($text,"@")!==false)){
 $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $user_id,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
bot('deletemessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
bot ('SendMessage',[
"chat_id"=> $chat_id,
'text'=>"‼️<a href='tg://user?id=$from_id'>$name</a>
 <b>🇺🇿Reklama tarqatmang!

🇷🇺 Не делитесь рекламой!</b> ",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],
] 
]) 
]);
}}}





$turi = $update->message->chat->type;
$nom = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;


$ent = $message->entities;
$ent1 = $message->entities;
$ent2 = $message->entities;

$typ1 = $update->edited_message->chat->type;
$chat_idd = $update->edited_message->chat->id;
$fedit = $update->edited_message->from->id;
$nomed = $update->edited_message->from->first_name;
$midd = $update->edited_message->message_id;
$enti = $update->edited_message->entities;
$enti1 = $update->edited_message->entities;
$enti2 = $update->edited_message->entities;

foreach ($enti as $rek1){
$type1 = $rek1->type;
$b1 = bot('getChatMember', [
'chat_id'=>$chat_idd,
'user_id'=>$fedit,
]); 
$b2 = $b1->result->status;
if($b2 =="member"){
if($type1=="text_link" or $type1 == "url"){
bot('deletemessage',[
'chat_id'=>$chat_idd,
'message_id'=>$midd,
]);
bot('SendMessage',[
"chat_id"=>$chat_idd,
'text'=>"‼️<a href='tg://user?id=$fedit'>$nomed</a> 
<b>Reklama tarqatmang!

🇷🇺 Не делитесь рекламой!</b> ",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],
] 
]) 
]);
} } } 


foreach ($enti2 as $rek3){
$type3 = $rek3->type;
$b1 = bot('getChatMember', [
'chat_id'=>$chat_idd,
'user_id'=>$fedit,
]); 
$b2 = $b1->result->status;
if($b2 =="member"){
if($type3=="mention"){
bot('deletemessage',[
'chat_id'=>$chat_idd,
'message_id'=>$midd,
]);
bot('SendMessage',[
"chat_id"=>$chat_idd,
'text'=>"‼️<a href='tg://user?id=$fedit'>$nomed</a> 
<b>Reklama tarqatmang!

🇷🇺 Не делитесь рекламой!</b> ",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],                
] 
]) 
]);
} } } 

if((stripos($text,"dalbayop")!==false)  or (stripos($text,"oneni")!==false)  or (stripos($text,"skaman")!==false) or (stripos($text,"sikaman")!==false) or (stripos($text,"Axmoq")!==false) or (stripos($text,"chumo")!==false)  or  (stripos($text,"dalbayob")!==false) or  (stripos($text,"skay")!==false) or (stripos($text,"seks")!==false) or (stripos($text,"dalban")!==false) or (stripos($text,"yiban")!==false) or (stripos($text,"jalab")!==false) or (stripos($text,"скаман")!==false) or (stripos($text,"qanjiq")!==false) or (stripos($text,"чумо")!==false)  or  (stripos($text,"далбаёб")!==false) or  (stripos($text,"скай")!==false) or (stripos($text,"секс")!==false) or (stripos($text,"далбан")!==false) or (stripos($text,"йибан")!==false) or (stripos($text,"haqorat")!==false) or (stripos($text,"жалаб")!==false) or (stripos($text,"кутинга")!==false) or (stripos($text,"kotinga")!==false) or  (stripos($text,"куток")!==false)  or  (stripos($text,"qotoq")!==false) or  (stripos($text,"naxuy")!==false) or (stripos($text,"хуй")!==false) or (stripos($text,"сучка")!==false) or (stripos($text,"suchka")!==false) or (stripos($text,"омини")!==false) or (stripos($text,"омнга")!==false) or  (stripos($text,"сикаман")!==false)  or  (stripos($text,"гандон")!==false) or  (stripos($text,"сука")!==false) or (stripos($text,"жопа")!==false) or (stripos($text,"omingni")!==false) or (stripos($text,"ominga")!==false) or (stripos($text,"gandon")!==false) and $fadmin !== $admin){
if($type == "group" or $type == "supergroup"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $from_id,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
$id = $update->message->from->id;
$minut = strtotime("+05 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('SendMessage',[
"chat_id"=>$chat_id,
'text'=>"‼️<a href='tg://user?id=$from_id'>$name</a> <b> siz 5 minutga Read only rejimiga tushdingiz.
⚠ Sabab: Haqarot qildi (So'kindi)!</b> ",
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
if(stristr($text,"ض") or stristr($text, 'ص') or stristr($text, 'ث') or stristr($text, 'ق') or stristr($text, 'ف') or stristr($text, 'غ') or stristr($text, 'ع') or stristr($text, 'ه') or stristr($text, 'خ') or stristr($text, 'ح') or stristr($text, 'ج') or stristr($text, 'ش') or stristr($text, 'س') or stristr($text, 'ي') or stristr($text, 'ب') or stristr($text, 'ل') or stristr($text, 'ا') or stristr($text, 'ت') or stristr($text, 'ن') or stristr($text, 'م') or stristr($text, 'ك') or stristr($text, 'ط') or stristr($text, 'ذ') or stristr($text, 'ء') or stristr($text, 'ؤ') or stristr($text, 'ر') or stristr($text, 'ى') or stristr($text, 'ئ') or stristr($text, 'ة') or stristr($text, 'و') or stristr($text, 'ز') or stristr($text, 'ظ') or stristr($text, 'د') or stristr($text, 'أ') or stristr($text, 'إ') or stristr($text, 'آ')){
if($type == "group" or $type == "supergroup"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $from_id,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
      ]);
$id = $update->message->from->id;
$minut = strtotime("+05 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('SendMessage',[
"chat_id"=>$chat_id,
'text'=>"‼️<a href='tg://user?id=$from_id'>$name</a> <b> siz 5 minutga Read only rejimiga tushdingiz.
⚠ Sabab: Habarida arab so'zlari qatnashgam!!</b> ",
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


$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
if($chatuser){
$result = "@$chatuser";
}else{
$result = "$getlinkde";
}
if(mb_stripos($text,"/start")!==false){
bot('forwardMessage', [ 
'chat_id'=>$chat_id,
'from_chat_id'=>$kana,
'message_id'=>$chm,
    ]); 
} 
if ($newid == "990858867"){
bot ('SendMessage', [
'chat_id'=>$adminkanal,
'text'=>"✅$mybot <b>Guruhga qo'shishdi:</b>

🔵 <b>Qo'shgan odam:</b> <a href='tg://user?id=$from_id'>$name</a>
🔸<i>Guruh nomi:</i> <b>$title</b>
👥<i>Guruh a'zolar soni:</i> <b>$azo ta</b>
▫️<i>Guruh:</i> $result",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
]);
}



$ismi = $message->new_chat_member->first_name;

$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id
]);
$count = $us->result;
$yangilar = file_get_contents("stat/yangilar.txt");

if ($new_chat_members) {
if (mb_stripos($yangilar, $new_chat_members)!==false){
$sennd = bot ('SendMessage', [
'chat_id'=> $chat_id,
'parse_mode'=>"html",
'text'=>"😊Eski qadrdonimiz <a href='tg://user?id=$new_chat_members'>$ismi</a> safimizga <b>Likilab</b> qaytib keldi😂
",
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>$reknamee,'url'=>$reklinke]],                
]
])
]);
    }else{
$up = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
	  $owner2 = $result[$key]['user']['first_name'];
    }
    }
file_put_contents("stat/yangilar.txt","$yangilar\n $new_chat_members");
     $send = bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>"<b>👋Assalomu alekum</b> <a href='tg://user?id=$new_chat_members'>$ismi</a> 
🙂<b>$title</b> guruhimizga xush kelibsiz!\n
<b>👨‍🎓Guruh yaratuvchisi:</b> <a href='tg://user?id=$owner'>$owner2</a>
👥<b>Guruh a'zolari soni:</b> <b>$count</b>
",
'disable_web_page_preview'=>true,
       'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>$reknamee,'url'=>$reklinke]],
]
])
]);
}
    }
    

include ("qosh.php");
include ("ob.php");
include ("send.php");
include ("panel.php");

$mid = $message->message_id;
$rname = $message->from->first_name;
$rusername = $message->from->username;
$fromid = $message->from->id;

if(!$rusername){
$text = "
<a href='tg://user?id=$fromid'>$rname</a>
<b>Bu Guruhda  🔞Uyatli Rasimlarni Guruhda Taqiqlangan
Boshqa Qaytarilmasin</b>";
}elseif($rusername){
$text = "
<a href='tg://user?id=$fromid'>$rname</a>
<b>Bu Guruhda  🔞Uyatli Rasimlarni Guruhda Taqiqlangan
Boshqa Qaytarilmasin</b>";
}

if($message->photo){
$file = $message->photo[count($message->photo)-1]->file_id;
$get = bot('getfile',['file_id'=>$file]);
$patch = $get->result->file_path;
$url = "https://api.telegram.org/file/bot".API_KEY."/$patch"; 
$Api = json_decode(file_get_contents("https://forhassan.ml/my_ip/ImageInfo.php?url=".$url),true);
if($Api['ok']["Info"] == "Indecent"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
    'disable_web_page_preview'=>true,
       'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard' => [
[['text'=>$reknamee,'url'=>$reklinke]],                
]
])
]);
}
}