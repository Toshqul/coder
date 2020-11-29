<?php
ob_start();
define('API_KEY','888141727:AAECVND8gXuVvIB_QEFi9daIoUcTFv07zH0');
$adminkanal = "-1001449102359";
$admin = 621617473; //user id admin
$mybot="@Nazoratuzb_bot";
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



function  top($chatid, $va){
$text = "👥 <b>TOP $va' ta eng ko'p odam qo'shgan foydalanuvchilar:</b>\n\n";
$files = glob("odam/$chatid/*.db");
foreach ($files as $user) {
$id = str_replace(["odam/$chatid/", ".db"], ["",""],$user);
$data[$id] = file_get_contents($user);
}
arsort($data);
$i = 1;
foreach ($data as $id=>$son) {
if ($i > $va)break;
$us = bot ('getChatMember', [
'chat_id'=>$chatid,
'user_id'=>$id,
]);
$res = $us->result->user->first_name;
$text .= "<b>$i)</b> <a href='tg://user?id=$id'>$res</a> <b>- [$son]</b>\n";
$i++;
}
return $text;
}

//method

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$token = "1455400165:AAHPlfhtfMJP0GvgxnPW6-n_GkBuk9i79r0";
$title = $message->chat->title;
$chat_id = $message->chat->id;
$mid = $message->message_id;
$type = $message->chat->type;
$fadmin = $update->message->from->id;
$from_id = $message->from->id;
$forward = $update->message->forward_from;
$is_bot = $message->new_chat_member->is_bot;
$new_chat_members = $message->new_chat_member->id;
$name = str_replace(["[","]","(",")","*","_","`"],["","","","","","",""],$message->from->first_name);

 mkdir("odam");
mkdir("kanal");
mkdir("odam/$chat_id");
 mkdir("stat");
mkdir('data');

$capt = $message->caption;
$newid = $message->new_chat_member->id;
$rekname = file_get_contents("stat/RekName.matn");
$reklink = file_get_contents("stat/RekLink.matn");
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
$capt = $message->caption;
$performer = $message->performer;
$forward_ch = $message->forward_from_chat;
$forward = $message->forward_from;
$user_id = $update->message->from->id;

$good = $json->ok;
$mem = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$azo = $mem->result;

$vaqt=date('H:i', strtotime('2 hour'));
$bugun = date('d-M Y', strtotime('2 hour'));
$kanal = "@Tik_Topuz";

$chatuser = $message->chat->username;

$user = $message->from->username;
$soni = file_get_contents("odam/$chat_id/$from_id.db");
$user = file_get_contents("stat/user.list");

if ($soni == false){$soni = 0;}
$new = $message->new_chat_member;
$new_id = $new->id;
$new_name = $new->first_name;
$left = $message->left_chat_member;

if ($new and $new_id != $uid){
$soni = file_get_contents("odam/$chat_id/$from_id.db");
$son = $soni + 1;
file_put_contents("odam/$chat_id/$from_id.db",$son);
}
if (isset($left)){
$leftid = $message->left_chat_member->id;
unlink("odam/$chat_id/$leftid.db");
}


$call = $update->callback_query;
$mes = $call->message;
$data = $call->data;
$qid = $call->id;
$callcid = $mes->chat->id;
$callmid = $mes->message_id;
$callfrid = $call->from->id;
$calluser = $mes->chat->username;
$callfname = $call->from->first_name;

$reply= $message->reply_to_message->text;
$replyid = $message->reply_to_message->from->id;
$replyname = $message->reply_to_message->from->first_name;


//<---------A'zolatni ro'yhatga olish------->//
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


//<----------Asosiy bo'lim---------->//

$key = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📤Send Forward"],['text'=>"📤Guruh Forward"]],
[['text'=>"📮Reklama"],['text'=>"📊 Statistika"],],
[['text'=>"Bekor qilish⛔"],['text'=>"PHPni olish📥"],],
]
]);

if((mb_stripos($text,"/start $chat_id")!==false) or (mb_stripos($text,"/start")!==false)){
if($type=="private"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$mid,
]);
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"*Salom*👋
*Man o'zbekcha va arabcha reklamalarni, ssilkalani, so'kinganlarni va uyatsiz rasmlarni* guruhlarda o'chirib beraman👨‍✈

*Man ishlashim uchun guruhizga qo'shib admin berishiz kerak😄*

*Guruhda ishlaydigan buyruqlar* /help *buyrug'i ostida*

📃 *Bot Yangiliklari *- [@Bot_Yangiliklar]",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"👥Guruhga qo'shish🚀", "url"=>"https://telegram.me/nazoratuzb_bot?startgroup=new"]], 
       ] 
       ]),
]);
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
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"*Salom*👋
*Man o'zbekcha va arabcha reklamalarni, ssilkalani, so'kinganlarni va uyatsiz rasmlarni* guruhlarda o'chirib beraman👨‍✈

Man ishlashim uchun *ADMIN *huquqini berishiz kerak😄

📃 *Bot Yangiliklari *- [@Bot_Yangiliklar]",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"Botni admin qiling👮", "url"=>"https://telegra.ph/Onashka-bot-11-01-2"]], 
       ] 
       ]),
]);
} 
if ($newid == "1455400165"){
bot ('SendMessage', [
'chat_id'=>$adminkanal,
'text'=>"✅$mybot <b>Guruhga qo'shishdi:</b>

🔵 <b>Qo'shgan odam:</b> <a href='tg://user?id=$from_id'>$name</a>
🔸<i>Guruh nomi:</i> <b>$title</b>
👥<i>Guruh a'zolar soni:</i> <b>$azo ta</b>
▫️<i>Guruh:</i> $result",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"Nazoratuzb_bot", "url"=>"https://telegram.me/nazoratuzb_bot"]], 
       ] 
       ]),
]);
}


if ($text == "/help"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🌐 _Bu bot guruhga kim qancha odam qo'shganligini aytib beruvchi va kanalga a'zo bo'lmasa guruhda yoza olmaslikni ta'minlaydigan robot. Botni admin qilib tayinlashni unutmang!_

/top *- Bu buyruq guruhidagi TOP 20'ta odam qo'shuvchi obunachilarni chiqarib beradi.*
/mymembers *- Guruhga nechta odam qo'shganingizni aytib beradi.*
/setchannel *- Majburiy a'zolik tizimini sozlash. Bu tizim orqali guruh a'zolari siz istagan kanalga a'zo bo'lishmasa guruhda yoza olishmaydi.*
/channel *- Majburiy a'zolik tizimidagi kanalni ko‘rsatadi*
/unlink *- Majburiy a'zolik tizimidagi kanalni uchiradi*

_Shuning dek top odam qoshuvchilarni xoxlagancha blankasini olishingiz mumkin!._

*Masalan: /top 3 40 ...*

📛 *Eslatma:* Botni guruhga admin qilmasangiz ishlata olmaysiz!",
'parse_mode'=>"markdown",
]);
}





if ($text == "/mymembers" or $text == "/mymembers@Nazoratuzb_bot"){
if ($type == "supergroup"){
if (!$replyid){
bot ('sendmessage', [
'chat_id'=> $chat_id,
'text'=>"🇺🇿 <a href='tg://user?id=$from_id'>$name</a> <b>siz shu kungacha guruhga</b>  <code>$soni</code><b> ta odam qo'shgansiz!</b>",
'parse_mode'=>"html",
'reply_to_message_id'=> $mid,
]);
}else{
$rsoni = file_get_contents("odam/$chat_id/$replyid.db");
if ($rsoni == false){$rsoni = 0;}
bot ('sendmessage', [
'chat_id'=> $chat_id,
'text'=>"🇺🇿 <a href='tg://user?id=$replyid'>$replyname</a> <b>shu kungacha guruhga</b>  <code>$rsoni</code><b> ta odam qo'shgan!</b>",
'parse_mode'=>"html",
'reply_to_message_id'=> $mid
]);
}
}
}
if(mb_stripos($text,"/top")!==false) {
 if ($type == "supergroup"){
$hf = explode(" ", $text);
$hg=$hf[1];
if($hg==NULL){$hg=20;}
$reyting = top($chat_id, $hg);
bot ('sendmessage', [
'chat_id'=> $chat_id,
'parse_mode'=>"html",
'text'=> $reyting,
'reply_to_message_id'=> $mid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"♻️ Yangilash", 'callback_data'=>"update_".$hg]]
]
])
]);
}
}
if(mb_stripos($data,"update_")!==false) {
$hf1 = explode("_", $data);
$hg1=$hf1[1];
$reyting = top($callcid, $hg1);
bot ('editmessagetext', [
'chat_id'=> $callcid,
'message_id'=>$callmid,
'parse_mode'=>"html",
'text'=> $reyting,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"♻️ Yangilash", 'callback_data'=>"update_".$hg1]]
]
])
]);
}

if ($text == "/unlink" or $text == "/unlink@Nazoratuzb_bot"){
$us = bot ('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$res = $us->result->status;
if ($res == "administrator" or $res == "creator"){
bot ('sendmessage', [
'chat_id'=> $chat_id,
'parse_mode'=>"html",
'text'=>"<b> Malumotlar tozlandi! </b>✅",
'reply_to_message_id'=> $mid,
]);
unlink("kanal/$chat_id.db");
}
}
if ($text == "/channel" or $text == "/channel@Nazoratuzb_bot"){
$us = bot ('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $from_id,
]);
$res = $us->result->status;
if ($res == "administrator" or $res == "creator"){
$geth = file_get_contents("kanal/$chat_id.db");
if ($geth == null){
$geth = "📢Kanal O'rnatilmagan";
}
bot ('sendmessage', [
'chat_id'=> $chat_id,
'parse_mode'=>"html",
'text'=>"<b> Majburiy azolikdagi kanal:</b>

<b> $geth </b>✅",
'reply_to_message_id'=> $mid,
]);
}
}


if ((mb_stripos($text,"/setchannel")!==false) and (strlen($text) > 11)){
if ($type == "supergroup"){
$ex = explode(" ", $text);
$us = bot ('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin
]);
$res = $us->result->status;
if ($res == "administrator" or $res == "creator"){
$gett= bot ('getChatMember', [
'chat_id'=> $ex[1],
'user_id'=> $fadmin
]);
$get = $gett->result->status;
if ($get == "administrator" or $get == "creator"){
bot ('sendmessage', [
'chat_id'=> $chat_id,
'parse_mode'=>"html",
'text'=>"✅ <b>Kanal sozlandi. Endi guruh a'zolari</b> $ex[1] <b>kanaliga a'zo bo'lmaguncha guruhda yoza olishmaydi.</b>",
'reply_to_message_id'=> $mid
]);
file_put_contents("kanal/$chat_id.db", $ex[1]);
}else{
bot ('sendmessage', [
'chat_id'=> $chat_id,
'parse_mode'=>"markdown",
'text'=>"📛 *Bot yoki siz kanalda admin emas. Xatolikni to'g'irlab qayta urunib ko'ring!*",
'reply_to_message_id'=> $mid
]);
}
}
}
}


$chan = file_get_contents("kanal/$chat_id.db");
if(isset($chan)){
if($type == "supergroup"){
if (isset($text) and $from_id != 1455400165){
$us = bot('getchat', [
'chat_id'=>$chan
]);
$user = $us->result->username;
$tit = $us->result->title;
$us = bot('getChatMember', [
'chat_id'=> $chan,
'user_id'=> $from_id,
]);
$get = $us->result->status;
if ($get =="administrator" or $get =="creator" or $get == "member"){
}else{
bot('restrictChatMember',[
'user_id'=>$from_id,   
'chat_id'=>$chat_id,
'can_post_messages'=>false,
]);
  bot('deleteMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid,
    ]);
bot('SendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>🔵 Kechirasiz, </b> <a href='tg://user?id=$from_id'>$name</a> <code>$title</code> <b>guruhida yozish uchun
</b> @$user  <b>kanaliga a'zo bo'ling va pastdagi ✅ Tekshirish tugmasini bosing! </b>",
'parse_mode'=>"html",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>$tit, 'url'=>"https://t.me/".$user]],
[['text'=>"✅Tekshirish", 'callback_data'=>"tek_".$from_id]]
]
])
]);
} 
}
}
}

if ($text == "/setchannel" and (strlen($text) == 11)){
$us = bot ('getChatMember', [
'chat_id'=> $chat_id,
'user_id'=> $fadmin,
]);
$res = $us->result->status;
if ($res == "administrator" or $res == "creator"){
bot ('sendmessage', [
'chat_id'=> $chat_id,
'parse_mode'=>"html",
'text'=>"🔵 <b>Ushbu buyruqdan foydalanish quyidagicha:</b>

✅<b>Namuna:</b>
<code>/setchannel @Tik_Topuz</code>",
'reply_to_message_id'=> $mid,
]);
}
}

if ($text == "/setchannel" or $text == "/start" or $text == "/setchannel@Nazoratuzb_bot" or $text == "/stat"){
if ($type == "supergroup"){
$us = bot ('getChatMember', [
'chat_id'=> $chan,
'user_id'=> $fadmin,
]);
$get = $us->result->status;
if ($get == "member"){
bot ('deleteMessage', ['chat_id'=> $cid,'message_id'=> $mid]);
}
}
}



$cllchatid = $update->callback_query->message->chat->id;
$cllmsegid = $update->callback_query->message->message_id;
$cllfor = $update->callback_query->from->id;
$callfname = $update->callback_query->from->first_name;  
if(mb_stripos($data,"tek") !== false){ 
$b = explode("_",$data);
$kk = $b[1];
if($cllfor == $kk){
$kchan = file_get_contents("kanal/$cllchatid.db");
$ush = bot('getchat', [
'chat_id'=>$kchan
]);
$kuser = $ush->result->username;
$uus = bot('getChatMember', [
'chat_id'=> $kchan,
'user_id'=> $kk,
]);
$gget = $uus->result->status;
if ($gget =="administrator" or $gget =="creator" or $gget == "member"){
	bot('restrictChatMember',[
    'chat_id'=>$cllchatid,
    'user_id'=>$kk,
'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
]);
bot('deleteMessage',[
    'chat_id'=>$cllchatid,
    'message_id'=>$cllmsegid,
    ]);
  bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"😉Yaxshi, $callfname 
Endi bemol guruxda yozishingiz mumkin!",
        'show_alert'=>true
        ]);
}else{
		bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"📛Kechirasiz, $callfname
@$kuser kanaliga a'zo bo'ling va  ✅ Tekshirish tugmasini bosing!",
        'show_alert'=>true
        ]);
}
}else{
		bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
    'url'=>"https://t.me/nazoratuzb_bot?start=1455400165",
        'show_alert'=>true
        ]);
}
}


if($text == "/panel" and $from_id==$admin){
 bot('SendMessage',[ 
'chat_id'=>$chat_id,
'message_id'=>$mid,
'text'=>"🔹Siz adminsiz kerakli bo'limni tanlang:",
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
'caption'=>"$mybot php code! n 🕜Olingan vaqti $bugun $vaqt",
]);
bot('sendDocument',[
'chat_id'=>$chat_id,
'document'=>new CURLFile("stat/user.list"),
'caption'=>"$mybot id toplami! n 🕜Olingan vaqti $bugun $vaqt",
]);
}

if($text=="📊 Statistika" and $user_id==$admin){
      $sana = date('d-M Y',strtotime('2 hour'));
$soat = date('H:i', strtotime('2 hour'));
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
     bot('sendMessage',[
     'chat_id'=>$chat_id,
    'text'=> "
┌ *Botimiz natijalari📊*
├ *👤A`zolar*:   $us *dona*
├ *👥Guruhlar*: $gr *dona*
└ *♼Hammasi bo'lib*: $obsh *dona* 

➖➖➖➖➖➖➖
📆 *Bugun sana:* $sana
⏰ *Hozir soat*: $soat ",
     'parse_mode'=>'markdown',
    ]); 
} 

if($text == "📮Reklama" and $chat_id == $admin){
bot('sendMessage',[
'chat_id'=>$chat_id,
'parse_mode'=>"markdown",
'text'=>"❇️* Reklamasi Matnini yuboring!*",
]);
file_put_contents("stat/$chat_id.step","rekname");
}

if($step == "rekname" and $chat_id == $admin){
file_put_contents("stat/$chat_id.step","RekLink");
file_put_contents("stat/RekName.matn",$text);
bot('sendmessage',[
'chat_id'=>$admin,
'parse_mode'=>"markdown",
'text'=>"✅*Reklama Matni saqlani! Endi linkni yuboring!*",
]);      
}
if($step == "RekLink" and $chat_id == $admin){
file_put_contents("stat/RekLink.matn",$text);
bot('sendmessage',[
'chat_id'=>$admin,
'parse_mode'=>"markdown",
'text'=>"✅*Reklama Linki va Matni o'rnatildi!*
[$rekname]($reklink)",
'disable_web_page_preview' => true,
]);      
unlink("stat/$chat_id.step");
}

if(isset($update->message->new_chat_member) or isset($update->message->new_chat_photo) or isset($update->message->new_chat_title) or isset($update->message->left_chat_member) or isset($update->message->pinned_message)){
    bot('deleteMessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$mid,
    ]);
}


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
[['text'=>$rekname,'url'=>$reklink]],
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
[['text'=>$rekname,'url'=>$reklink]],                
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
[['text'=>$rekname,'url'=>$reklink]],
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
[['text'=>$rekname,'url'=>$reklink]],                
] 
]) 
]);
  }
}
}
if ($type == "supergroup" or $type == "group"){
if((isset($message->forward_from) or isset($message->forward_from_chat)!==false) or (stripos($text,"@") !==false)  or (stripos($text,"t.me")!==false) or (stripos($performer,"http")!==false)  or (stripos($text,"telegram.me")!==false) or (stripos($text,"http://")!==false) or (stripos($text,"https://")!==false) or (stripos($capt,"http://telegram.me")!==false) or (stripos($capt,"https://t.me")!==false) or (stripos($text,"telegram.dog")!==false) or (stripos($capt,"telegram.dog")!==false)  or (stripos($capt,"telegram.me")!==false) or (stripos($capt,"t.me")!==false) or (stripos($capt,"@")!==false) or (stripos($capt,"http")!==false) or (stripos($capt,"https")!==false) or (stripos($text,"@")!==false)){
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
"chat_id"=>$chat_id,
'text'=>"‼️<a href='tg://user?id=$from_id'>$name</a>
 <b>🇺🇿Reklama tarqatmang!

🇷🇺 Не делитесь рекламой!</b> ",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$rekname,'url'=>$reklink]],
] 
]) 
]);
}}}

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
[['text'=>$rekname,'url'=>$reklink]],                
]
])
]);
}
}
