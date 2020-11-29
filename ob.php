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




if($text == "🇺🇿Samarqand" or $text =="🇺🇿Toshkent" or $text =="🇺🇿Buxoro" or $text == "🇺🇿Farg'ona" or $text == "🇺🇿Namangan" or $text == "🇺🇿Jizzax" or $text == "🇺🇿Andijon" or $text == "🇺🇿Nukus" or $text == "🇺🇿Navoiy" or $text == "🇺🇿Guliston" or $text == "🇺🇿Urganch" or $text == "🇺🇿Qarshi" or $text == "🇺🇿Xiva" or $text == "🇺🇿Termiz"){
    sleep("0.5");
$obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/samarqand-viloyati/samarkand/');
$ex = explode('title="Havo harorati"',$obh);
$ex1 = explode('right-container',$ex[1]);
$ubk = str_replace($ex1[1],' ',$ex[1]);
$ubk1 = str_replace('dir="ltr">',' ',$ubk);
$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);
$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);
$ubk4 = str_replace('</div>',' ',$ubk3);
$obhavo = trim("$ubk4");
$vl = str_replace("🇺🇿Samarqand","samarkand",$text);
$vl = str_replace("🇺🇿Toshkent","tashkent",$vl);
$vl = str_replace("🇺🇿Buxoro","bukhara",$vl);
$vl = str_replace("🇺🇿Farg'ona","ferghana",$vl);
$vl = str_replace("🇺🇿Namangan","namangan",$vl);
$vl = str_replace("🇺🇿Jizzax","jizzakh",$vl);
$vl = str_replace("🇺🇿Andijon","andijan",$vl);
$vl = str_replace("🇺🇿Nukus","nukus",$vl);
$vl = str_replace("🇺🇿Navoiy","navoi",$vl);
$vl = str_replace("🇺🇿Guliston","gulistan",$vl);
$vl = str_replace("🇺🇿Urganch","urgench",$vl);
$vl = str_replace("🇺🇿Qarshi","karshi",$vl);
$vl = str_replace("🇺🇿Xiva","khiva",$vl);
$vl = str_replace("🇺🇿Termiz","termez",$vl);
$uz = file_get_contents("http://obhavo.uz/$vl"); 
$ex1=explode("\n",$uz);
$gr1=str_replace('<span><strong>',' ',$ex1[67]);  
$gr1=str_replace('</strong></span>',' ',$gr1); 
$gr1= trim($gr1);
$gr2=str_replace('<span>',' ',$ex1[68]);  $gr2=str_replace('</span>',' ',$gr2); 
$gr2= trim($gr2);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[71]); 
$havo1 = str_replace('&#039;','‘',$havo1);
 $havo1=str_replace('</div>',' ',$havo1); 
$havo1 = trim($havo1);
$tongr=str_replace('<p class="forecast">',' ',$ex1[93]);  
$tongr=str_replace('</p>',' ',$tongr);
 $tongr = trim($tongr);
$kungr=str_replace('<p class="forecast">',' ',$ex1[98]);  
$kungr=str_replace('</p>',' ',$kungr);
$kungr = trim($kungr);
$oqgr=str_replace('<p class="forecast">',' ',$ex1[103]);  
$oqgr=str_replace('</p>',' ',$oqgr);
 $oqgr = trim($oqgr);
$bugun=str_replace('<div class="current-day">',' ',$ex1[61]);  
$bugun=str_replace('</div>',' ',$bugun); 
$bugun = trim($bugun);  
$qch=str_replace('<p>',' ',$ex1[81]);  
$qch=str_replace('</p>',' ',$qch); 
$qch= trim($qch);     
$qb=str_replace('<p>',' ',$ex1[82]);  
$qb=str_replace('</p>',' ',$qb); 
$qb= trim($qb);
$shamol=str_replace('<p>',' ',$ex1[76]);  
$shamol = str_replace('&#039;','‘',$shamol);
$shamol=str_replace('</p>',' ',$shamol); 
$shamol= trim($shamol); 
$bosim=str_replace('<p>',' ',$ex1[77]);  
$bosim=str_replace('</p>',' ',$bosim); 
$bosim= trim($bosim);  
$oy=str_replace('<p>',' ',$ex1[80]);  
$oy = str_replace('&#039;','‘',$oy);
$oy=str_replace('</p>',' ',$oy); 
$oy= trim($oy);    
$nam=str_replace('<p>',' ',$ex1[75]);  
$nam=str_replace('</p>',' ',$nam); 
$nam= trim($nam); 

$ers=str_replace('<div>','',$ex1[146]);
$ers=str_replace('</div>','',$ers);
$ers= trim($ers);
$er1=str_replace('<span class="forecast-day">','',$ex1[156]);
$er1=str_replace('</span>','',$er1);
$er1= trim($er1);
$havo = trim($ex1[160]);
$er2=str_replace('<span class="forecast-night">','',$ex1[157]);
$yog = trim($ex1[163]);
$er2=str_replace('</span>','',$er2);
$er2= trim($er2);

$hf1h=str_replace('<strong>','',$ex1[168]);
$hf1h=str_replace('</strong>','',$hf1h);
$hf1h= trim($hf1h);
   $hf1s=str_replace('<div>','',$ex1[169]);
$hf1s=str_replace('</div>','',$hf1s);
$hf1s= trim($hf1s);
$hf1k=str_replace('<span class="forecast-day">','',$ex1[179]);
$hf1k=str_replace('</span>','',$hf1k);
$hf1k= trim($hf1k);
$hf1hv=str_replace('&#039;','`',$ex1[183]);
$hf1hv = trim($hf1hv);
$hf1t=str_replace('<span class="forecast-night">','',$ex1[180]);
$hf1t=str_replace('</span>','',$hf1t);
$hf1t= trim($hf1t);
$hf1y = trim($ex1[186]);

$hf2h=str_replace('<strong>','',$ex1[191]);
$hf2h=str_replace('</strong>','',$hf2h);
$hf2h= trim($hf2h);
   $hf2s=str_replace('<div>','',$ex1[192]);
$hf2s=str_replace('</div>','',$hf2s);
$hf2s= trim($hf2s);
$hf2k=str_replace('<span class="forecast-day">','',$ex1[202]);
$hf2k=str_replace('</span>','',$hf2k);
$hf2k= trim($hf2k);
$hf2hv=str_replace('&#039;','`',$ex1[206]);
$hf2hv = trim($hf2hv);
$hf2t=str_replace('<span class="forecast-night">','',$ex1[203]);
$hf2t=str_replace('</span>','',$hf2t);
$hf2t= trim($hf2t);
$hf2y = trim($ex1[209]);

$hf6h=str_replace('<strong>','',$ex1[214]);
$hf6h=str_replace('</strong>','',$hf6h);
$hf6h= trim($hf6h);
   $hf6s=str_replace('<div>','',$ex1[215]);
$hf6s=str_replace('</div>','',$hf6s);
$hf6s= trim($hf6s);
$hf6k=str_replace('<span class="forecast-day">','',$ex1[225]);
$hf6k=str_replace('</span>','',$hf6k);
$hf6k= trim($hf6k);
$hf6hv=str_replace('&#039;','`',$ex1[229]);
$hf6hv = trim($hf6hv);
$hf6t=str_replace('<span class="forecast-night">','',$ex1[226]);
$hf6t=str_replace('</span>','',$hf6t);
$hf6t= trim($hf6t);
$hf6y = trim($ex1[232]);

$hf3h=str_replace('<strong>','',$ex1[237]);
$hf3h=str_replace('</strong>','',$hf3h);
$hf3h= trim($hf3h);
   $hf3s=str_replace('<div>','',$ex1[238]);
$hf3s=str_replace('</div>','',$hf3s);
$hf3s= trim($hf3s);
$hf3k=str_replace('<span class="forecast-day">','',$ex1[248]);
$hf3k=str_replace('</span>','',$hf3k);
$hf3k= trim($hf3k);
$hf3hv=str_replace('&#039;','`',$ex1[252]);
$hf3hv = trim($hf3hv);
$hf3t=str_replace('<span class="forecast-night">','',$ex1[249]);
$hf3t=str_replace('</span>','',$hf3t);
$hf3t= trim($hf3t);
$hf3y = trim($ex1[255]);

$hf4h=str_replace('<strong>','',$ex1[260]);
$hf4h=str_replace('</strong>','',$hf4h);
$hf4h= trim($hf4h);
   $hf4s=str_replace('<div>','',$ex1[261]);
$hf4s=str_replace('</div>','',$hf4s);
$hf4s= trim($hf4s);
$hf4k=str_replace('<span class="forecast-day">','',$ex1[271]);
$hf4k=str_replace('</span>','',$hf4k);
$hf4k= trim($hf4k);
$hf4hv=str_replace('&#039;','`',$ex1[275]);
$hf4hv = trim($hf4hv);
$hf4t=str_replace('<span class="forecast-night">','',$ex1[272]);
$hf4t=str_replace('</span>','',$hf4t);
$hf4t= trim($hf4t);
$hf4y = trim($ex1[278]);

$hf5h=str_replace('<strong>','',$ex1[283]);
$hf5h=str_replace('</strong>','',$hf5h);
$hf5h= trim($hf5h);
   $hf5s=str_replace('<div>','',$ex1[284]);
$hf5s=str_replace('</div>','',$hf5s);
$hf5s= trim($hf5s);
$hf5k=str_replace('<span class="forecast-day">','',$ex1[294]);
$hf5k=str_replace('</span>','',$hf5k);
$hf5k= trim($hf5k);
$hf5hv=str_replace('&#039;','`',$ex1[298]);
$hf5hv = trim($hf5hv);
$hf5t=str_replace('<span class="forecast-night">','',$ex1[295]);
$hf5t=str_replace('</span>','',$hf5t);
$hf5t= trim($hf5t);
$hf5y = trim($ex1[301]);

bot("sendmessage",[
'chat_id'=>$chat_id,
//'reply_to_message_id'=>$mid,
'text'=>"🕌 <b>$text
📆 $bugun

🌡 Kunduzi havo harorati: $gr1 
⛅ Tunda havo harorati: $gr2 
🏕 $havo1 </b> bo'lishi kutilmoqda

⛅ Tong : $tongr
☀ Kun : $kungr
🌔 Oqshom : $oqgr

💧 $nam
🌬 $shamol
☁ $bosim

🌙 $oy
☀ $qch
⛅ $qb

➖➖➖➖➖➖➖➖➖➖➖
<b>Haftalik ob havo malumoti:

Ertaga, $ers
⛅ Ob-Havo: $havo </b>

☀ Kun: $er1
🌙 Tun: $er2
🌧 Yo'gingarchilik ehtimoli: $yog
--------------------------
<b>$hf1s, $hf1h
⛅ Ob-Havo: $hf1hv</b>

☀ Kun: $hf1k
🌙 Tun: $hf1t
🌧 Yo'gingarchilik ehtimoli: $hf1y
--------------------------
<b>$hf2s, $hf2h
⛅ Ob-Havo: $hf2hv</b>

☀ Kun: $hf2k
🌙 Tun: $hf2t
🌧 Yo'gingarchilik ehtimoli: $hf2y
--------------------------
<b>$hf6s, $hf6h
⛅ Ob-Havo: $hf6hv</b>

☀ Kun: $hf6k
🌙 Tun: $hf6t
🌧 Yo'gingarchilik ehtimoli: $hf6y
--------------------------
<b> $hf3s, $hf3h
⛅ Ob-Havo: $hf3hv</b>

☀ Kun: $hf3k
🌙 Tun: $hf3t
🌧 Yo'gingarchilik ehtimoli: $hf3y
--------------------------
<b>$hf4s, $hf4h
⛅ Ob-Havo: $hf4hv</b>

☀ Kun: $hf4k
🌙 Tun: $hf4t
🌧 Yo'gingarchilik ehtimoli: $hf4y
--------------------------
<b>$hf5s, $hf5h
⛅ Ob-Havo: $hf5hv</b>

☀ Kun: $hf5k
🌙 Tun: $hf5t
🌧 Yo'gingarchilik ehtimoli: $hf5y
",
'parse_mode'=> 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>$reknamee,'url'=>$reklinke]],
] 
]) 
]);
}