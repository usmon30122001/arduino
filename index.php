<?php
ob_start();
define('API_KEY','1025271263:AAFNPMUS31X07Jbhcl-8fj_3iRLpzJJOpQg');
$admin = "1110975952"; 

   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
} 

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
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$cqid = $update->callback_query->id;
$mtext = $message->text;
$capt = $message->caption;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$step=file_get_contents("data/$fadmin/name.txt");
//bu yerni o'zgartirishingiz mumkin.

$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;

$anb8 = file_get_contents('http://obhavo.uz/'); $ex1=explode("\n",$anb8);
$obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/samarqand-viloyati/samarqand/');
$ex = explode('title="Havo harorati"',$obh);
$exi = explode('right-container',$ex[1]);
$ubk = str_replace($exi[1],' ',$ex[1]);
$ubk1 = str_replace('dir="ltr">',' ',$ubk);
$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);
$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);
$ubk4 = str_replace('</div>',' ',$ubk3);
$obhavo = trim("$ubk4");
$gr2=str_replace('<span>',' ',$ex1[75]);  $gr2=str_replace('</span>',' ',$gr2); $gr2= trim($gr2);
$gr1=str_replace('<span><strong>',' ',$ex1[74]);  $gr1=str_replace('</strong></span>',' ',$gr1); $gr1= trim($gr1);
$havo1=str_replace('<div class="current-forecast-desc">',' ',$ex1[78]);  $havo1=str_replace('</div>',' ',$havo1); $havo1 = trim($havo1);
$kungr=str_replace('<p class="forecast">',' ',$ex1[105]);  $kungr=str_replace('</p>',' ',$kungr);$oqgr=str_replace('<p class="forecast">',' ',$ex1[110]);  $oqgr=str_replace('</p>',' ',$oqgr);
 $tongr=str_replace('<p class="forecast">',' ',$ex1[100]);  $tongr=str_replace('</p>',' ',$tongr);
 $bugun=str_replace('<div class="current-day">',' ',$ex1[68]);  $bugun=str_replace('</div>',' ',$bugun); $bugun = trim($bugun); $tongr = trim($tongr); $oqgr = trim($oqgr); $kungr = trim($kungr);

$sana = date('d-M Y',strtotime('2 hour'));
$soat = date('H:i:s', strtotime('2 hour'));
$kun3 = date('N',strtotime('2 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$kun1 = date('z ',strtotime('2 hour')); 
$a = 153;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;

if(true){
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>"👋 Guruhimizga xush kelibsiz!
😊Kuningiz xayrli va Barokatli o'tsin!
☺️Eslatib O'tamiz: 
🗓Bugun: $sana-
⌚️Soat: $soat
🔵Hafta kuni: $hafta1
⛅Havo harorati: $obhavo °C
⏱Bu oy 30 kundan iborat
👥Guruh a'zolari: $count
",
]);
}

$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="Qitmrxonrobot";
$NetKod = date('H:i:s', strtotime('2 hour'));
$NetKoders = date('D-M Y', strtotime('2 hour'));
$sana2 = date('z',strtotime('5 hour'));
$gmt = date('O',strtotime('5 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$iNetXack = $message->chat->username;
$fadmin = $message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;
//Yangi odam id si
$phpbotgroup = $message->new_chat_member->id;
$chat_id = $message->chat->id;
$fadmin = $message->from->id;
$uzphpkod = $message->new_chat_member->is_bot;
$from_first_name = $message->from->first_name;

$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
mkdir("warn");
mkdir("stat");
mkdir("groups");
mkdir("groups/$cid");
$xabarchi = file_get_contents("$cid.admin.txt");
$m = file_get_contents("$chat_id.txt");
$sudo = '1110975952';
$m = file_get_contents("$chat_id.txt");
if (!is_dir('co')) {
	mkdir('co');
}


        if (($phpbotgroup != NUll)&&($uzphpkod!=true)) {
$netkod = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $netkod->result->status;
if($get =="member"){
$balltop=file_get_contents("ball.dat");
$baling="$balltop\n$chat_id=$user_id";
file_put_contents("ball.dat",$baling);
$balltop=file_get_contents("ball.dat");
$ballsoni="$chat_id=$user_id";
$ballstr=substr_count($balltop,"$ballsoni");
if($ballstr=="100"){
$admok = bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$fadmin,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
if($admok->ok){  
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$from_first_name](tg://user?id=$fadmin) *Jami Ballaringiz Soni 100 ga Yetgani Uchun, Endi Siz Guruh Adminisiz*,\n👏Tabriklaymiz!",
        'parse_mode'=>'markdown',
    ]);
}
}elseif($ballstr<"100"){
    bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"[$from_first_name](tg://user?id=$fadmin) Sizga *+1 BALL*, Berildi Ballaringiz Soni 100 Ball Bo'lganda Avtomatik Admin Bo'lasiz!💎\n*Jami Ballaringiz Soni: $ballstr~100*",
        'parse_mode'=>'markdown',
    ]);
}
}
}


if(isset($text1)){
  if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/group.list","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/user.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/user.list","$userlar\n$chat_id");
   }
  }
 }
  
 


    if (($phpbotgroup != NUll)&&($is_bot!=false)) {
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
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "💝<b>Guruhga faqat adminlar bot qo'shi mumkin!</b>",
      'parse_mode' => 'html'
  ]);
}
}


if($text1 == "/start" or $text1 == "/start@Booooooolakayyybot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
$start = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "💝Salom ,mening ismim <b>Eshimmat</b>.Do'stlarim esa Eshim  deb chaqirishadi!\n\n💝 Men guruh infosiga soat ham qoyaman. Yana guruhlarda gaplasha olaman va  guruh adminlari uchun qulay bo‘lgan  buyruqlar orqali guruhni boshqarishga ko‘maklashaman!\n🛎Botni /panel buyrug'i orqali guruhingizga sozlashingiz mumkin
♻️Funksiyalar qo'shilishda davom etadi\n💝,
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'📣Buyruqlar', 'callback_data' => "stat"],['text'=>'💣Foydali Bolim','callback_data'=>'qoshm']], 
[['text'=>'📊Statistika', 'callback_data' => "stat1"],['text'=>'📡Kanalimiz','url'=>'telegram.me/MuzTv_chart']],
[['text'=>'👥Gruhimiz','url'=>'telegram.me/MuzTv_chat'],['text'=>'Roboto taxnika haqidagi kanalimiz','url'=>'telegram.me/Arduino_uzbek']],
[['text'=>'👮Creator','url'=>'telegram.me/Usmon_Abduraxmanov'],['text'=>'💡Loyihalar', 'callback_data'=> "botlarimiz"]],
          [['text'=>'➕Guruhga Qo‘shish','url'=>'telegram.me/@Booooooolakayyybot?startgroup=new']]
]   
]),
]);
}
}

if($text1 == "Lg"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
    ]);
}


if($text1 == "Lu"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
    ]);
}
if($data=="qoshm"){
   bot('editMessageText',[
   'chat_id'=>$cid2,
    'message_id'=>$message_id2,
        'text'=> "📲*Siz Foydali Bo'limdasiz*",
        'parse_mode' => 'markdown',
'reply_markup'=>json_encode([
'inline_keyboard' =>[
[['text'=>'📋Tezkor Yangiliklar🌐','callback_data'=>"yan"]],
[['text'=>'⌚Vaqt Mintaqasi⚖','callback_data'=>"vaqt"]],
[['text'=>'⛄Yangi yilga qolgan vaqt🤗','callback_data'=>"new"]],
[['text'=>'📮Convertor📨','callback_data'=>"convertor"]],
[['text'=>'🔙Orqaga','callback_data'=>'back']],
] 
]) 
]);
}
$url = 'https://daryo.uz/feed/';
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
    $line = $item->title;
    break;
}  
if($data == 'yan'){
bot('editMessageText',[
'chat_id'=>$cid2,
'message_id'=>$mid2, 
'text'=>"📰 Daryo.uz saytida eng so'ngi yangiliklar:
〰〰〰〰〰〰〰〰〰〰〰〰
📮<i> $line </i>
〰〰〰〰〰〰〰〰〰〰〰〰
⌚Soat: $NetKod  📆Sana: $NetKoders",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard' =>[
[['text'=>'🔙Orqaga','callback_data'=>"back"]],
]
]) 
]);
    }
if($data=="convertor"){
	bot('editMessageText',[
	'chat_id'=>$cid2, 
	'message_id'=>$message_id2,
       'text'=> "📮*Siz Convertor Bo'limidasiz*\nNimani O'zgartirishni Tanlang👇", 
'parse_mode'=>'markdown' ,
    'reply_markup'=> json_encode([
    'inline_keyboard'=>[
    [['text'=>'📷Rasm','callback_data'=>"photoconv"]], 
    [['text'=>'📹Video','callback_data'=>"videoconv"]],
    [['text'=>'🎵Musiqa','callback_data'=>"musiconv"]], 
[['text'=>'🔙Orqaga','callback_data'=>"allqulay"]],
   ] 
  ]) 
 ]);
} 
if($data=="photoconv") {
	bot('editMessageText',[
		'chat_id'=>$cid2,
		'message_id'=>$message_id2,
		'text'=>"Rasmlarni O`zingizga Qulay Tarzda Konvertlab Olishingiz Mumkun\nKerakli Bo`limni Tanlang👇",
		'reply_markup'=>json_encode([
			'inline_keyboard'=>[
				[['text'=>'💥Stikerni➡️Rasmga Aylantirish📷','callback_data'=>"sticktophoto"]], 
[['text'=>'📷Rasmni➡️Stickerga Aylantirish💥','callback_data'=>"phototostick"]],
[['text'=>'🔙Orqaga','callback_data'=>"convertor"]],
			]
		])
	]);
}

if($data=="sticktophoto") {
	bot('sendMessage',[
		'chat_id'=>$chat_id2,
		'text'=>'📷Rasmga Aylantirish🔄Uchun 💥Sticker Jo`nating',
	]);
	file_put_contents("$chat_id2.txt", "sti->pho");
}
if ($message->sticker and $m == 'sti->pho') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'Tayyor✅'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->sticker->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.jpg",file_get_contents($file));
	    bot('sendphoto',[
	    	'chat_id'=>$chat_id,
	    	'photo'=>new CURLFile("co/$chat_id.jpg")
	    ]);
	    unlink("co/$chat_id.jpg");
}

if($data=="phototostick") {
	bot('sendMessage',[
		'chat_id'=>$cid2,
		'text'=>'💥Stickerga🔄Aylantirish🔄Uchun 📷Rasm Jo`nating',
	]);
	file_put_contents("$chat_id2.txt", "pho->sti");
}
if ($message->photo and $m == 'pho->sti') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'Tayyor✅'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->photo[1]->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.png",file_get_contents($file));
	    bot('sendsticker',[
	    	'chat_id'=>$chat_id,
	    	'sticker'=>new CURLFile("co/$chat_id.png")
	    ]);
	    unlink("co/$chat_id.png");
}

if ($data=="videoconv") {
	bot('editMessageText',[
		'chat_id'=>$chat_id2,
		'message_id'=>$mid2, 
		'text'=>"Videolarga O`zingizga Qulay Tarzda Konvertlab Olishingiz Mumkun\nKerakli Bo`limni Tanlang",
		'reply_markup'=>json_encode([
			'inline_keyboard'=>[
				[['text'=>'📹Videoni➡️Mp3 Qilish🎧','callback_data'=>"videotomp"]],
[['text'=>'📹Videoni➡️Zapis Qilish🎙','callback_data'=>"videotozap"]],
				[['text'=>'⭕Yumaloq➡️Video📹','callback_data'=>"videoyumal"]],
				[['text'=>'🔙Orqaga','callback_data'=>"convertor"]],
			] 
		  ]) 
	]);
}

if ($data=="videoyumal") {
	bot('sendMessage',[
		'chat_id'=>$chat_id2,
		'text'=>'⭕Yumaloq🎥Videoga 🔄Aylantirish Uchun Video Jo`nating', 
	]);
	file_put_contents("$chat_id2.txt", "mp4->not");
}
if ($message->video and $m == 'mp4->not') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'Tayyor✅'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.mp4",file_get_contents($file));
	    bot('sendVideoNote',[
	    	'chat_id'=>$chat_id,
	    	'video_note'=>new CURLFile("co/$chat_id.mp4")
	    ]);
	    unlink("co/$chat_id.mp4");
}

if ($data=="videotozap") {
	bot('sendMessage',[
		'chat_id'=>$chat_id2,
		'text'=>'Audio🎵Zapisga 🔄Aylantirish Uchun Video Jo`nating',
	]);
	file_put_contents("$chat_id2.txt", "mp4->ogg");
}
if ($message->video and $m == 'mp4->ogg') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'Tayyor✅'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.ogg",file_get_contents($file));
	    bot('sendvoice',[
	    	'chat_id'=>$chat_id,
	    	'voice'=>new CURLFile("co/$chat_id.ogg")
	    ]);
	    unlink("co/$chat_id.ogg");
}

if ($data=="videotomp") {
	bot('sendMessage',[
		'chat_id'=>$chat_id2,
		'text'=>'🎧Mp3 ga 🔄Aylantirish Uchun 📹Video Jo`nating',
	]);
	file_put_contents("$chat_id2.txt", "mp4->mp3");
}
if ($message->video and $m == 'mp4->mp3') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'Tayyor✅'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->video->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.mp3",file_get_contents($file));
	    bot('sendaudio',[
	    	'chat_id'=>$chat_id,
	    	'audio'=>new CURLFile("co/$chat_id.mp3")
	    ]);
	    unlink("co/$chat_id.mp3");
}

if ($data=="musiconv") {
	bot('editMessageText',[
		'chat_id'=>$chat_id2,
		'message_id'=>$mid2, 
		'text'=>'🎵Musiqalarni O`zingizga Qulay Tarzda Konvertlab Olishingiz Mumkun\nKerakli Bo`limni Tanlang👇',
		'reply_markup'=>json_encode([
			'inline_keyboard'=>[
				[['text'=>'🎧Mp3ni➡️Zapis Qilish📼','callback_data'=>"mptozap"]],
				[['text'=>'📼Zapisni➡️Video Qilish','callback_data'=>"zaptovideo"]],
[['text'=>'🎧Mp3ni➡️Video Qilish📹','callback_data'=>"mptovideo"]],
			[['text'=>'🔙Orqaga','callback_data'=>"convertor"]],
]
		])
	]);
}

if ($data=="mptovideo") {
	bot('sendMessage',[
		'chat_id'=>$chat_id2,
		'text'=>'📹Videoga 🔄Aylantirish Uchun 🎧Mp3 Jo`nating',
	]);
	file_put_contents("$chat_id2.txt", "mp3->not");
}
if ($message->audio and $m == 'mp3->not') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'Tayyor✅'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->audio->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.mp4",file_get_contents($file));
	    bot('sendVideoNote',[
	    	'chat_id'=>$chat_id,
	    	'video_note'=>new CURLFile("co/$chat_id.mp4")
	    ]);
	    unlink("co/$chat_id.mp4");
}

if ($data=="zaptovideo") {
	bot('sendMessage',[
		'chat_id'=>$chat_id2,
		'text'=>'📹Videoga 🔄Aylantirish Uchun 📼Zapis Jo`nating',
	]);
	file_put_contents("$chat_id2.txt", "ogg->not");
}
if ($message->voice and $m == 'ogg->not') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'Tayyor✅'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->voice->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.mp4",file_get_contents($file));
	    bot('sendVideoNote',[
	    	'chat_id'=>$chat_id,
	    	'video_note'=>new CURLFile("co/$chat_id.mp4")
	    ]);
	    unlink("co/$chat_id.mp4");
}

if ($data=="mptozap") {
	bot('sendMessage',[
		'chat_id'=>$chat_id2,
		'text'=>'📼Zapisga 🔄Aylantirish Uchun 🎧Mp3 Jo`nating',
	]);
	file_put_contents("$chat_id2.txt", "mp3->ogg");
}
if ($message->audio and $m == 'mp3->ogg') {
	bot('sendMessage',[
		'chat_id'=>$chat_id,
		'text'=>'Tayyor✅'
	]);
	$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$message->audio->file_id])->result->file_path;
	    file_put_contents("co/$chat_id.ogg",file_get_contents($file));
	    bot('sendvoice',[
	    	'chat_id'=>$chat_id,
	    	'voice'=>new CURLFile("co/$chat_id.ogg")
	    ]);
	    unlink("co/$chat_id.ogg");
}
if($data=="allqulay"){
   bot('editMessageText',[
   'chat_id'=>$cid2,
    'message_id'=>$message_id2,
        'text'=> "*📮Siz Convertor Bo'limidasiz*\nNimani O'zgartirishni Tanlang👇",
        'parse_mode' => 'markdown',
'reply_markup'=>json_encode([
'inline_keyboard' =>[
  [['text'=>'📷Rasm','callback_data'=>"photoconv"]], 
    [['text'=>'📹Video','callback_data'=>"videoconv"]],
    [['text'=>'🎵Musiqa','callback_data'=>"musiconv"]], 
[['text'=>'🔙Orqaga','callback_data'=>"allqulay"]],
   ] 
  ]) 
 ]);
} 


$kun1 = date('z ',strtotime('2 hour')); 
$a = 364;
$c2 = $a-$kun1;
$d = date('L ',strtotime('2 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('2 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('2 hour')); 
$a3 = 58;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('2 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;

if($data == 'new'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"☃️⏳Yangi yilga: $b kun, $b2 soat, $b3 minut, $b4 sekund qoldi!🤗",
'show_alert'=>true
]);
    }

if($data == "vaqt"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "📆Bugun: $NetKoders-yil
⌚Soat: $NetKod
🌙Oy nomi: $oynomi
✨Yilning: $sana2-kuni
⏳Vaqt mintaqasi: $gmt
🌠Bu oy $buoy kundan iborat",
       'show_alert'=>true
        ]);
    }
    

if($data=="botlarimiz"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "♻Siz botlarimiz bo'limidasiz",
      'show_alert'=>true
        ]);
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "*Salom, biz yaratgan botlarimiz bilan tanishib chiqing. Sizlarga ham botlar kerak bo‘lsa, bizga murojaat qiling!*\n*Creator:* [@Usmon_Abduraxmanov]",
'parse_mode' => 'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'Eshimmat', 'url'=>'https://t.me/@Booooooolakayyybot']],
[['text'=>'Arduino_uzbek', 'url'=>'https://t.me/Arduino_uzbek_bot']], 
  [['text'=>'Orqaga↩', 'callback_data' => "back"]],
]
]),
]);
}



if($data=="stat1"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
 $soat = date('H:i', strtotime('5 hour'));
$bugun = date('d-M Y',strtotime('5 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "💝<b>Bot statistikasi:</b>\n\n👤A'zolar: <b>$us</b>\n👥Guruhlar: <b>$gr</b>\n📣Umumiy: <b>$obsh</b>\n\n$bugun $soat",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'🔄Yangilash', 'callback_data' => "stat1"]],
[['text'=>'Orqaga↩', 'callback_data' => "back"]],
  [['text'=>'➕Guruhga Qo‘shish','url'=>'telegram.me/@Booooooolakayyybot?startgroup=new']]
]
]),
]);
}

if((stripos($mtext,"1001")!==false) and $fadmin==$admin){
      $lx=explode("\n",$mtext);
      $idsi = $lx[0];
  $lin  = bot('exportchatinvitelink',[
       'chat_id'=>"-$idsi",
       ]);
  $link = $lin->result;
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"$link",
     ]);
}
     
if($data=="stat"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "💝<b>Guruh adminlari ishlatishi mumkin bo‘lgan buyruqlar:</b>

<b>Ro</b> - Guruh a‘zosini “read only” rejimiga tushuradi;
<b>Unro</b> - Guruh a‘zosidan cheklovni oladi;
<b>Kick</b> - Guruh a‘zosini guruhdan chiqaradi;
<b>Warn</b> - Guruh a‘zosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;
<b>Unwarn</b> - Guruh a‘zosidagi  ogohlantirishlarni olib tashlaydi;
<b>Ban</b>  - Guruh a‘zosini  guruhdan chiqaradi,boshqa qaytib kira  olmaydi;
<b>Unban</b> - Bandan oladi;
<b>Pin</b> - Xabarni yuqoriga qistiradi;
<b>Adadmin</b> - Guruh a‘zosini guruhga admin qiladi;
<b>Deladmin</b> - Adminlikdan oladi.

-🤖 Bot guruh yangi a‘zolari bilan salomlashadi.Guruh a‘zosi guruhga reklama <b>ssilkalarini</b> tashlasa yoki <b>haqoratli</b> so‘z yozsa,bot xabarni o‘chirib foydalanuvchiga cheklov beradi.\n\n<b>Yaratuvchi🛠:</b>  <a href='tg://user?id=1110975953'>Usmon_Abduraxmanov</a>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'Orqaga↩', 'callback_data' => "back"]],
[['url' => 'https://telegram.me/@Booooooolakayyybot?startgroup=new', 'text' => "➕Guruhga Qo‘shish"],],
]
]),
]);
}

if($text1 == "/buyruqlar" or $text1 == "/buyruqlar@@Booooooolakayyybot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$bs = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
  $bss = $bs->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$bss,
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "💝<b>Guruh adminlari ishlatishi mumkin bo‘lgan buyruqlar:</b>

<b>Ro</b> - Guruh a‘zosini “read only” rejimiga tushuradi;
<b>Unro</b> - Guruh a‘zosidan cheklovni oladi;
<b>Kick</b> - Guruh a‘zosini guruhdan chiqaradi;
<b>Warn</b> - Guruh a‘zosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;
<b>Unwarn</b> - Guruh a‘zosidagi  ogohlantirishlarni olib tashlaydi;
<b>Ban</b>  - Guruh a‘zosini  guruhdan chiqaradi,boshqa qaytib kira  olmaydi;
<b>Unban</b> - Bandan oladi;
<b>Pin</b> - Xabarni yuqoriga qistiradi;
<b>Addpm</b> - Guruh a‘zosini guruhga admin qiladi;
<b>Delpm</b> - Adminlikdan oladi.

-🤖 Bot guruh yangi a‘zolari bilan salomlashadi.Guruh a‘zosi guruhga reklama <b>ssilkalarini</b> tashlasa yoki <b>haqoratli</b> so‘z yozsa,bot xabarni o‘chirib foydalanuvchiga cheklov beradi.\n\n<b>Yaratuvchi🛠:</b>  <a href='tg://user?id=1110975952'>Usmon_Abduraxmanov</a>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'Orqaga↩', 'callback_data' => "back"]],
[['url' => 'https://telegram.me/@Booooooolakayyybot?startgroup=new', 'text' => "➕Guruhga Qo‘shish"],],
]
]),
]);
}
}

  


    if($text1 == "Admin"){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"💝Pastdagi tugmani bosing",
        'reply_markup'=>json_encode([   
        'inline_keyboard'=>[   
            [['text'=>'Shu yerni bosing', 'callback_data' => "admin"]]
]   
]),
]);
}

    if($data == "admin"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "😙Bot admini @Usmon_Abduraxmanov",
       'show_alert'=>true
        ]);
    }


if((stripos($mtext,"latifa")!==false) or (stripos($mtext,"латифа")!==false)){
    $latif = file_get_contents("latifa.txt");
  $latifa = explode("✅",$latif);
  $soz = $latifa[rand(0,count($latifa)-1)];
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

		if(stripos($mtext,"soat") !== false){
		$NetKod = date('H:i:s', strtotime('2 hour'));
  $text = "⌚Hozir soat: *$NetKod*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}

		if(stripos($mtext,"sana") !== false){
        $NetKoders = date('d-M Y',strtotime('2 hour'));
  $text = "📆Bugungi sana: *$NetKoders*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/id") !== false){
  $text = "*🆔Sizning idingiz:* $fadmin";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/gid") !== false){
  $text = "*🆔Guruh idsi:* $chat_id";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(isset($doc) or isset($gif)){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]));
}

if((stripos($mtext,"Zo‘r") !== false) or (stripos($mtext,"yaxshi")!==false) or (stripos($mtext,"Zor")!==false) or (stripos($mtext,"Zo'r")!==false)){
  $name = $message->from->first_name;
  $input = array("Qayerdansiz asalim?","Juda  yaxshi asalim😁","Hm qales endi","Ok asalim.","Qaysi viloyatdansiz asalim?", "Nima uchun asalim","Har doim shunday bo'lsin asalim.","Qayerliksiz asalim?");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Toshkent")!==false) or (stripos($mtext,"Andijon")!==false) or (stripos($mtext,"Fargona")!==false) or (stripos($mtext,"Farg'ona")!==false)  or  (stripos($mtext,"Namangan")!==false) or  (stripos($mtext,"Sirdaryo")!==false) or (stripos($mtext,"Jizzax")!==false) or (stripos($mtext,"Qashqadaryo")!==false) or (stripos($mtext,"Surxondaryo")!==false) or (stripos($mtext,"Buxoro")!==false) or (stripos($mtext,"Xorazim")!==false) or (stripos($mtext,"Nukus")!==false) or (stripos($mtext,"Qoraqalpoqgiston")!==false)  or  (stripos($mtext,"Qarshidan")!==false) or  (stripos($mtext,"Guliston")!==false) or (stripos($mtext,"Qoqon")!==false) or (stripos($mtext,"qo‘qonl")!==false) or (stripos($mtext,"Qo'qon")!==false) or (stripos($mtext,"Kattakorgon")!==false) or (stripos($mtext,"Chilonzor")!==false)){
$input = array("Qayeridan?","Zo'rku👍","Hmm,Chiroyli shahar","Yaxshi,lekin biz tomondan ancha uzoq ekan.","O‘zidanmi?", "Yoge,zorku.","Qayeridan.","Hm,u yerda chiroyli joylar ko‘p deb eshitganman.");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"hmm") !== false) or (stripos($mtext,"xmm")!==false) or (stripos($mtext,"mmm")!==false)){
  $name = $message->from->first_name;
  $input = array("Nega  hmm deysiz gapiring asalim","Hmmmmmmmmmm","Nima hmm?","😂","Zeriktizmi asalim?","Negadur zerikdim", "Tinchlikmi?","Mb kam qoldimi deyman😁","Qayerliksiz?");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"tinchlikmi") !== false)){
  $name = $message->from->first_name;
  $input = array("Ha tinchlik","Nima edi?","O'zizdan so'rasak");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"rostdanmi") !== false) or (stripos($mtext,"rostanmi")!==false) or (stripos($mtext,"rostmi")!==false)){
  $name = $message->from->first_name;
  $input = array("Ha rost","Bilmadim","Ha","Men qayerdan bilay ","Yolg'ondan :)");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"ozidan") !== false) or (stripos($mtext,"o'zidan")!==false) or (stripos($mtext,"o‘zidan")!==false) or (stripos($mtext,"sentridan")!==false)){
  $name = $message->from->first_name;
  $input = array("Ha yaxshi","Shahardanmisiz?","Zo'rku");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Beruniy")!==false)){
$input = array("Wow,men ham Beruniylik","Hamshahar  ekanmiz☺","Men ham Beruniylikman😊","Qayeridan?","Bitta joydan ekanmiz");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"yoge")!==false) or (stripos($mtext,"rostanmi")!==false)  or (stripos($mtext,"rostdanmi")!==false)  or (stripos($mtext,"yog'e")!==false)){
$input = array("Ha","Ha shunaqa","Hm shunday","Haye.","Ha rost");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

  if((stripos($mtext,"Salom") !== false) or (stripos($mtext,"салом")!==false)){
 if($fadmin==$admin){
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"Vay mana meni yaratgan inson keldilar 😊 @Usmon_Abduraxmanov  akam😉.",
      ]);
  }else{
  $name = $message->from->first_name;
  $input = array("Assalom","Salom $name ,guruhimiz sizga yoqtimi?","Salom, ismiz nima?","Assaalomu alaykum","Привет, как дело?","Qaleysiz?","Sizga ham salom","Salom.", "Salom qaleysiz?","Vaalaykum salom,baxtli bo‘ling😊.","Yaxshimisiz $name,namuncha ko‘rinmay ketdiz?", "Juda sersalom ekansiz☺", "Assalomu aleykum.", "Salom $name.", "Iye keling,endi sizni eslab turgandik","Ana,yana bittasi keldi😂","Salom meni tanidizmi?","Salom bergan kishini...Xudo o‘nglar ishini.","Namuncha salom beruras","Salomim so‘lim-so‘lim  kitobdadur o‘ng  qo‘lim.Tringlab hech qoymagan telegramda chap qo‘lim🤣🤣🤣","Sizni ko‘radigan kun ham  bor ekanu!","Salom,yaxshimisiz?","Qaleysiz?","Asssalomu alekooom boy ota.Ishlar qaley?","Sava","Привет ","Hello $name,qaleysiz?","Salom.Nik daxshatu a?","Ehe keb qoling, anu gap nima bo'ldi?","Yuragizni sevgi muhabbat qoplagan vaqda to‘g‘ri shu yerga kelevering,ok?","Garov  o‘ynaymizmi  kimnidur sevib qolgansiz?Agar adashayotgan bo‘lsam,garov haqida unuting😆","Bolla, qizla bitta fikr bor!","Keling,sizni ham ko‘radigan  kun  bor ekanu");
  $rand=rand(0,32);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}
  }

if(stripos($mtext,"kimni") !== false){
  $input  = array("Bilmasam?","Anavi nasibani","Bugun havo zoru a?","Men bilmayman");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}


if(stripos($mtext,"qanaqa") !== false){
  $input  = array("Man qayerdan bilay?","Hech qanaqa😆","Shunaqa","Bilmasam");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

if((stripos($mtext,"qalay") !== false) or (stripos($mtext,"qoloy")!==false)  or (stripos($mtext,"qali")!==false) or (stripos($mtext,"qalisan")!==false)  or  (stripos($mtext,"qaloy")!==false)){
  $input = array("Chotki😁","Zo‘y.", "Zo‘r,o‘zizchi?","Kechagidan  yaxshi😁","Yaxshi,so‘raganingiz uchun rahmat!", "Norm.", "Zo‘y,o‘zizchi?", "Chidasa bo‘ladi👌");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Eshimmat") !== false) or (stripos($mtext,"Eshim") !== false) or (stripos($mtext,"Eshshi") !== false) or (stripos($mtext,"Admin")!==false)){
  $input = array("Haaaa?","Ayt dardingdi","Ne gapla","Yoqlab qopsama","Aytajaq gapingdi cho‘zilmay nozlanmay ayt tez ishim ko‘p","Zaybal blaaa chqariavirmanglardo","Shottaman???","Nega tinmay chaqirovrasilar", "Men shu yerdaman.", "Hov", "Aytavir", "Nima?", "Menda ishiz bormi?", "Hozir kimdur meni esladimi?","Tinchgina “ужин” qilishga ham qoyishmaydiye bular","Qulog‘im  sizda!","Labbay!","Eshitaman","Hozi kelaman mb kam qopti","Salom  biror nima kerakmi?","Shu ismni qayerdadur eshitganmanda🤔","Ana kapitan");
  $rand=rand(0,14);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if((stripos($mtext,"rahmat")!==false) or (stripos($mtext,"raxmat")!== false)){
  $input = array("😊Arzimaydi","Arziysiz","😊","Rahmatga hojat yo‘q☺");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}



if(stripos($mtext,"men kimman") !== false){
  $name = $message->from->first_name;
  $input = array("$name bo‘lsangiz kerak yana bilmadim.","O‘ziz  bilmasaiz men qayerdan bilay?!","Betakrorsiz","Ajinagul...degan sinfdoshim esimga tushib ketdi😢","N1","Kapitan","Ponchik","Kunfu panda","Babniksiz?","Kim bo‘lsangiz  ham  avvalo inson bo’ling!","Bruslini  quritilgani😂","Boyvacha","Eng zo‘risiz","Man  qayerdan bilay");
  $rand=rand(0,13);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"kimsan")!== false){
  $name = $message->from->first_name;
  $input = array("Ammangni òģliman😂","Poxxuy emasmi 😂.","Hazilkash robotcha!","kim deb o‘ylaysiz?","@MuzTv_chart Kanali admini Eshimmat man😜","Kapitan Telegram","Eshimmatman, yana boshqasi bilan adashtirib yubormeng😂","Sirliman🎩","O‘zing kimsan?","Har doim shu savolni  beruvirib charchamadizmi?","Tinchlikmi kimligim bilan qiziqib qolibsiz!?","Menmi?","Nima edi😡...Vux qo‘rqib ketdiza?","Sening dadangman 😆,","Aytsam seni oldirishga togri keladi");
  $rand=rand(0,13);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if((mb_stripos($mtext,"Usmon") !== false)){ 
bot('SendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'text'=>"Xabaringiz adminga yetkazildi!",
]);
}
if((mb_stripos($mtext,"Usmon") !== false) or (mb_stripos($mtext,"Yaratuvchi")!==false) or (stripos($mtext,"MuzTv")!==false) or (mb_stripos($mtext,"Xakkerlar")!==false) or (mb_stripos($mtext,"Arduino")!==false) or (mb_stripos($mtext,"Usmon aka")!==false)){ 
bot('SendMessage',[
'chat_id'=>$admin,
'parse_mode'=>'html',
'text'=>"✉<b>$title(</b> <a href='https://t.me/$iNetXack'>$title</a>  <b>) guruhida sizni eslashdi:</b>\n<code>$mtext</code>\n  <b>Xabarchi  haqida  ma'lumotlar: </b>
👤<b>Ismi:</b>  <a href='tg://user?id=$fadmin'>$first_name</a>
🆔<b>ID</b>si: $fadmin
🔅<b>Usernamesi:</b> @$username ", null, false
      ]);
   }



  if((stripos($mtext,"reo")!==false) and $fadmin == $admin){
      $sx=explode("\n",$mtext);
      $useid = $sx[2];
      $chatidsi  = $sx[1];
      $vaqti = $sx[3];
      $minut = strtotime("+$vaqti minutes");
   bot('restrictChatMember', [
      'chat_id' => "-$chatidsi",
      'user_id' => $useid,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "💝 <a href='tg://user?id=$useid'>Foydalanuvchi</a> -$chatidsi guruhida <b>$vaqti</b> ga <b>Read only</b> rejimiga tushdirildi!",
      'parse_mode' => 'html'
  ]);
}

  if($text1 == "Ok" or  $text1 == "ok" or $text1 == "OK" or $text1 == "oK"){
  $input = array("Ok!!!","Nok🍐","Sok","👌","Tok⚡","😏","☺","👍","Ok");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if($text1 == "ro" or $text1 == "Ro" or $text1 == "RO" or $text1 == "rO"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $minut = strtotime("+99999999999999 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "💝 <a href='tg://user?id=$id'>$from_user_first_name</a> siz <b>Read only</b> rejimiga tushirildingiz!",
      'parse_mode' => 'html'
  ]);
}
}

    if($text1 == "Kick"  or  $text1 == "kick"  or $text1 == "/kick"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $vaqti = strtotime("+1 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date'=> $vaqti,
  ]);
  bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "💝 <a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>Kick</b> bo‘ldi!",
      'parse_mode' => 'html'
  ]);
}
}

if($text1 =="Banan" or $text1 == "Xayr"&&$fadmin==$admin){
       $vaqti = strtotime("+10800000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "💝 <a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> bo‘ldiz!",
        'parse_mode'=>'html'
    ]);
  }

  if((stripos($capt,"https://")!==false)  or (stripos($capt,"http://")!==false) or (stripos($capt,"@")!==false) or (stripos($capt,"bot?start=")!==false)  or (stripos($mtext,"bot?start=")!==false)  or  (stripos($mtext,"http://") !==false) or  (stripos($mtext,"https://")!==false)){
  if((stripos($capt,"☣")!==false) or (stripos($mtext,"☣")!==false)){
  }else{
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
    $minut = strtotime("+10 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mid,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "💝 <a href='tg://user?id=$fadmin'>$first_name</a> siz <b>10 minut</b>ga <b>Read only</b> rejimiga tushdingiz.\n⚠ <b>Sabab:</b> <i>Reklama!</i> ",
        'parse_mode' => 'html'
    ]);
}
}
  }

    if((stripos($mtext,"dalbayop")!==false)  or (stripos($mtext,"oneni")!==false)  or (stripos($mtext,"skaman")!==false) or (stripos($mtext,"sikaman")!==false) or (stripos($mtext,"opongning ommi")!==false) or (stripos($mtext,"chumo")!==false)  or  (stripos($mtext,"dalbayob")!==false) or  (stripos($mtext,"skay")!==false) or (stripos($mtext,"seks")!==false) or (stripos($mtext,"dalban")!==false) or (stripos($mtext,"yiban")!==false) or (stripos($mtext,"jalab")!==false) or (stripos($mtext,"скаман")!==false) or (stripos($mtext,"qanjiq")!==false) or (stripos($mtext,"чумо")!==false)  or  (stripos($mtext,"далбаёб")!==false) or  (stripos($mtext,"скай")!==false) or (stripos($mtext,"секс")!==false) or (stripos($mtext,"далбан")!==false) or (stripos($mtext,"йибан")!==false) or (stripos($mtext,"haqorat")!==false) or (stripos($mtext,"жалаб")!==false) or (stripos($mtext,"кутинга")!==false) or (stripos($mtext,"kotinga")!==false) or  (stripos($mtext,"куток")!==false)  or  (stripos($mtext,"qotoq")!==false) or  (stripos($mtext,"naxuy")!==false) or (stripos($mtext,"хуй")!==false) or (stripos($mtext,"сучка")!==false) or (stripos($mtext,"suchka")!==false) or (stripos($mtext,"омини")!==false) or (stripos($mtext,"омнга")!==false) or  (stripos($mtext,"сикаман")!==false)  or  (stripos($mtext,"гандон")!==false) or  (stripos($mtext,"сука")!==false) or (stripos($mtext,"жопа")!==false) or (stripos($mtext,"omingni")!==false) or (stripos($mtext,"ominga")!==false) or (stripos($mtext,"gandon")!==false) and $fadmin !== $admin){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
     $minut = strtotime("+10800 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mid
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "💝 <a href='tg://user?id=$fadmin'>$first_name</a> <b>3 kun</b>ga <b>Read only</b> rejimiga tushdirildi.\n⚠ <b>Sabab:</b> <i>Haqorat qildi!</i> ",
        'parse_mode' => 'html'
    ]);
}
}

 if($text1 == "Adadmin" or $text1 == "adadmin"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> sizni tabriklayman , siz guruh <b>adminstratorisiz❗️</b>",
    'parse_mode'=>'html'
  ]);
}
}

   if($text1 == "Deladmin" or $text1 == "deladmin"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get == "administrator" or $get == "creator"){
bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>false,
    'can_invite_users'=>false,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> siz endi guruh adminstratori <b>emassiz</b>❗️",
    'parse_mode'=>'html'
  ]);
}
}

  if($text1 == "Unro" or $text1 == "UNRO" or $text1 == "unro"){
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> sizdan cheklov olindi, guruhda <b>yozishingiz mumkin!</b>\nEndi qoidani <b>buzmaysiz</b> degan umiddaman❗️",
    'parse_mode'=>'html'
  ]);
}
}

if($text1=="Pmadd"&&$fadmin==$admin) {
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> sizni tabriklayman , siz guruh <b>adminstratorisiz❗️</b>",
    'parse_mode'=>'html'
  ]);
}

if($text1=="Pmme"&&$fadmin==$admin) {
    bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$admin,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  $ms = bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅",
    'parse_mode'=>'html'
  ]);
    $nat = $ms->result->message_id;
    bot('deleteMessage', [
    'chat_id' => $chat_id,
    'message_id' => $nat,
  ]);
    bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}

if($text1=="Pmu"&&$fadmin==$admin) {
    bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  $ms = bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅",
    'parse_mode'=>'html'
  ]);
    $nat = $ms->result->message_id;
    bot('deleteMessage', [
    'chat_id' => $chat_id,
    'message_id' => $nat,
  ]);
    bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}

if ($text1=='Del'&&$fadmin==$admin) {
   bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
  }

if($text1 == "pin" or $text1 == "Pin" or $text1 == "PIn" or $text1 == "PIN" or $text1 == "piN" or $text1 == "pIN" or $text1 == "pIn" or $text1 == "pIN"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
}
}

if($text1=="bye"&&$fadmin==$admin) {
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>Ho‘p xo‘jayin</b>.",
      'parse_mode' => 'html'
  ]);
  bot('leaveChat',[
    'chat_id'=>$chat_id
  ]);
}

if((stripos($mtext,"Sw")!==false) and $fadmin == $admin){
      $sx=explode("\n",$text1);
      $matn = $sx[2];
      $idsi  = $sx[1];
  bot('sendMessage',[
       'chat_id'=>$idsi,
       'text'=>$matn,
       'parse_mode'=>'markdown',
       'disable_web_page_preview' => true,
       ]);
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"✅",
       ]);
  }

 if($text1 == "ban" or $text1 == "Ban" or $text1== "/Ban" or  $text1 == "/ban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
       $vaqti = strtotime("+108000000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "💝 <a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> bo‘ldi!",
        'parse_mode'=>'html'
    ]);
  }
  }

 if($text1 == "Unban"  or  $text1 == "/unban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
    bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "💝 <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ban</b>dan olindi!",
        'parse_mode'=>'html'
    ]);
}
}

if($text1 == "warn" or $text1 == "Warn" or $text1 == "/warn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$warn = file_get_contents("warn/$chat_id&$id.dat");
if($warn){
$warn +=1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
if($warn !=3){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$oldi = bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}else{
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
 bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> shu vaqtgacha unga berilgan ogohlantirishlarga <b>befarq bo‘ldi</b>, jazo sifatida esa guruhdan <b>chetlatiladi!</b>",
  'parse_mode'=>'html'
  ]);
 $vaqti = strtotime("+10800000 minutes");
  bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
 $warn = 0;
file_put_contents("warn/$chat_id&$id.dat","$warn");
}
}else{
$warn = 1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}
}
}

  if($text1 == "unwarn" or $text1 == "Unwarn" or $text1 == "/unwarn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
 $warn = 0;
 file_put_contents("warn/$chat_id&$id.dat","$warn");
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> dan barcha <b>ogohlantirishlar</b> olib tashlandi.\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
} 
}
  
$replyik = $message->reply_to_message->text;
    $yubbi = "📨Yuboriladigan xabar matnini kiriting. Xabar turi markdown";

    if($text1 == "/sendu" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text1,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Userlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
      
       if($text1 == "/sendg" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $chat_id == $admin){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text1,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }

      mkdir("sozlama");
$text1 = $message->text;
if(isset($text1)){
$get = file_get_contents("sozlama/$chat_id");
if($get){}else{
$baza = [
"stiker"=>"true",
"link"=>"true",
"audio"=>"true",
"video"=>"true",
"fayl"=>"true",
"rasm"=>"true",
"forward"=>"true",
"gif"=>"true",
"golos"=>"true",
"contact"=>" true",
"user"=>" true",
"hashtag"=>" true",
 "location"=>"true",
  "video_note"=>"true",
  
];
file_put_contents("sozlama/$chat_id",json_encode($baza));
}
}

$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;
$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$Sstiker = $baza["stiker"];
$Slink = $baza["link"];
$Saudio = $baza["audio"];
$Svideo = $baza["video"];
$Sfayl = $baza["fayl"];
$Sforward = $baza["forward"];
$Sgif = $baza["gif"];
$Srasm = $baza["rasm"];
$Sgolos = $baza["golos"];
$Scontact = $baza["contact"];
$Suser = $baza["user"];
$Shashtag = $baza["hashtag"];
$Slocation = $baza["location"];
$Svideo_note = $baza["video_note"];

if($text1 == "/panel" or $text1 == "/panel@UzGuard_Bot"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$stiker = $baza["stiker"];
if($stiker == "false"){
$stiker = "❎";
}else{
$stiker = "✅";
}
$link = $baza["link"];
if($link == "false"){
$link = "❎";
}else{
$link = "✅";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "❎";
}else{
$audio = "✅";
}
$video = $baza["video"];
if($video == "false"){
$video  = "❎";
}else{
$video = "✅";
}
$fayl = $baza["fayl"];
if($fayl == "false"){
$fayl  = "❎";
}else{
$fayl = "✅";
}
$forward1 = $baza["forward"];
if($forward1 == "false"){
$forward1  = "❎";
}else{
$forward1 = "✅";
}
$gif = $baza["gif"];
if($gif == "false"){
$gif  = "❎";
}else{
$gif = "✅";
}
$rasm = $baza["rasm"];
if($rasm == "false"){
$rasm  = "❎";
}else{
$rasm = "✅";
}
$golos = $baza["golos"];
if($golos == "false"){
$golos  = "❎";
}else{
$golos = "✅";
}
$contact = $baza["contact"];
if($contact == "false"){
$contact = "❎";
}else{
$contact = "✅";
}
$user = $baza["user"];
if($user == "false"){
$user = "❎";
}else{
$user = "✅";
}
$hashtag = $baza["hashtag"];
if($hashtag == "false"){
$hashtag = "❎";
}else{
$hashtag = "✅";
}
 $location = $baza["location"];
if($location == "false"){
$location = "❎";
}else{
$location = "✅";
}
$video_note = $baza["video_note"];
if($video_note == "false"){
$video_note  = "❎";
}else{
$video_note = "✅";
}

file_put_contents("sozlama/$fadmin.lch","$chat_id");
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"<b>$title Gruh Sozlamalrini Lichkangizga yubordim!</b>",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$fadmin,
'text'=>"$title <b>guruhi sozlamalari!</b>\n\n<b>✅Ruhsat etilgan fayllar</b>\n<b>❎Taqiqlangan fayllar</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"rasm","text"=>"📷Rasm"],["callback_data"=>"M()rasm","text"=>"$rasm"],],
[["callback_data"=>"link","text"=>"📡Link"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"stiker","text"=>"🎭Stiker"],["callback_data"=>"M()stiker","text"=>"$stiker"],],
[["callback_data"=>"fayl","text"=>"📁Fayl"],["callback_data"=>"M()fayl","text"=>"$fayl"],],
[["callback_data"=>"video","text"=>"🎬 Video"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"audio","text"=>"🎶 Musiqa"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"forward","text"=>"➡ Forward"],["callback_data"=>"M()forward","text"=>"$forward1"],],
[["callback_data"=>"gif","text"=>"💾Gif"],["callback_data"=>"M()gif","text"=>"$gif"],],
[["callback_data"=>"golos","text"=>"🎤Golos"],["callback_data"=>"M()golos","text"=>"$golos"],],
[["callback_data"=>"contact","text"=>"👤Kontakt"],["callback_data"=>"M()contact","text"=>"$contact"],],
[["callback_data"=>"user","text"=>"📧Userlar"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"hashtag","text"=>"#⃣HashTag"],["callback_data"=>"M()hashtag","text"=>"$hashtag"],],
[["callback_data"=>"location","text"=>"🏠Manzil"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"video_note","text"=>"📹Yumoloq video"],["callback_data"=>"M()video_note","text"=>"$video_note"],],
]
]),
]);
}
}

$callback = $update->callback_query;
$dataa = $callback->data;
$dataa = explode("()",$dataa);
if($dataa[0] == "M"){
$cid = $callback->from->id;
$mid = $callback->message->message_id;
$imid = $callback->inline_message_id;
$idd = file_get_contents("sozlama/$cid.lch");
$gets = bot("getChat",[
"chat_id"=>"$idd",
]);
$title = $gets->result->title;
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
if($baza["$dataa[1]"] == "true"){
$input = "false";
}else{
$input = "true";
}
$baza["$dataa[1]"] = $input;
file_put_contents("sozlama/$idd",json_encode($baza));
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
$stiker = $baza["stiker"];
if($stiker == "false"){
$stiker = "❎";
}else{
$stiker = "✅";
}
$link = $baza["link"];
if($link == "false"){
$link = "❎";
}else{
$link = "✅";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "❎";
}else{
$audio = "✅";
}
$video = $baza["video"];
if($video == "false"){
$video  = "❎";
}else{
$video = "✅";
}
$fayl = $baza["fayl"];
if($fayl == "false"){
$fayl  = "❎";
}else{
$fayl = "✅";
}
$forward1 = $baza["forward"];
if($forward1 == "false"){
$forward1  = "❎";
}else{
$forward1 = "✅";
}
$gif = $baza["gif"];
if($gif == "false"){
$gif  = "❎";
}else{
$gif = "✅";
}
$rasm = $baza["rasm"];
if($rasm == "false"){
$rasm  = "❎";
}else{
$rasm = "✅";
}
$golos = $baza["golos"];
if($golos == "false"){
$golos  = "❎";
}else{
$golos = "✅";
}
$contact = $baza["contact"];
if($contact == "false"){
$contact = "❎";
}else{
$contact = "✅";
}
$user = $baza["user"];
if($user == "false"){
$user = "❎";
}else{
$user = "✅";
}
$hashtag = $baza["hashtag"];
if($hashtag == "false"){
$hashtag = "❎";
}else{
$hashtag = "✅";
}
 $location = $baza["location"];
if($location == "false"){
$location = "❎";
}else{
$location = "✅";
}
$video_note = $baza["video_note"];
if($video_note == "false"){
$video_note  = "❎";
}else{
$video_note = "✅";
}
bot('editMessageText', [
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"$title <b>guruhi sozlamalari!</b>\n\n<b>✅Ruhsat etilgan fayllar</b>\n<b>❎Taqiqlangan fayllar</b>",
'parse_mode'=>'html',
'inline_message_id'=>$imid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"rasm","text"=>"📷Rasm"],["callback_data"=>"M()rasm","text"=>"$rasm"],],
[["callback_data"=>"link","text"=>"📡Link"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"stiker","text"=>"🎭Stiker"],["callback_data"=>"M()stiker","text"=>"$stiker"],],
[["callback_data"=>"fayl","text"=>"📁Fayl"],["callback_data"=>"M()fayl","text"=>"$fayl"],],
[["callback_data"=>"video","text"=>"🎬 Video"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"audio","text"=>"🎶 Musiqa"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"forward","text"=>"➡ Forward"],["callback_data"=>"M()forward","text"=>"$forward1"],],
[["callback_data"=>"gif","text"=>"💾Gif"],["callback_data"=>"M()gif","text"=>"$gif"],],
[["callback_data"=>"golos","text"=>"🎤Golos"],["callback_data"=>"M()golos","text"=>"$golos"],],
[["callback_data"=>"contact","text"=>"👤Kontakt"],["callback_data"=>"M()contact","text"=>"$contact"],],
[["callback_data"=>"user","text"=>"📧Userlar"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"hashtag","text"=>"#⃣HashTag"],["callback_data"=>"M()hashtag","text"=>"$hashtag"],],
[["callback_data"=>"location","text"=>"🏠Manzil"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"video_note","text"=>"📹Yumoloq video"],["callback_data"=>"M()video_note","text"=>"$video_note"],],
]
]),
]);
}

if(isset($update) and $Sgif == "false"){
if(isset($message->animation)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id) *Kechirasiz bu guruhda Gif tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Scontact == "false"){
if(isset($message->contact)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id)  *Kechirasiz bu guruhda 👤 Kontakt tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Srasm == "false"){
if(isset($message->photo)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id) *Kechirasiz bu guruhda 🌅 Rasm tashlash mumkin emas!*",
'parse_mode'=>"markdown"
]);
}
}

if(isset($update) and $Sstiker == "false"){
if(isset($message->sticker)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id) *Kechirasiz bu guruhda 🗿Sticker tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Svideo == "false"){
if(isset($message->video)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"💝 [$ufname $uname](tg://user?id=$user_id)  *Kechirasiz bu guruhda 📽 Video tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Saudio == "false"){
if(isset($message->audio)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id) *Kechirasiz bu guruhda 🎵 Musiqa tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Sfayl == "false"){
if(isset($message->document)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id) *Kechirasiz bu guruhda 💾 Document tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Sforward == "false"){
if(isset($message->forward)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id) *Kechirasiz bu guruhga ⏬ Forward tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Sgolos == "false"){
if(isset($message->voice)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id) *Kechirasiz bu guruhda 🎙 Ovozli xabar tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and$Slink == "false"){
if((mb_stripos($mtext,"http") !==false) or (stripos($capt,"http://")!==false) or (stripos($capt,"telegram.me")!==false) or (stripos($mtext,"https")!==false) or (stripos($mtext,"https://")!==false)){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id) *Kechirasiz bu guruhda ❌ Reklama tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}
if(isset($update) and$Suser == "false"){
if((mb_stripos($mtext,"@") !==false) or (stripos($capt,"@")!==false) or (stripos($capt,"@")!==false) or (stripos($mtext,"@")!==false)){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id) *Kechirasiz bu guruhda 📧User yuborish mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}
if(isset($update) and$Shashtag == "false"){
if((mb_stripos($mtext,"#") !==false) or (stripos($capt,"#")!==false) or (stripos($capt,"#")!==false) or (stripos($mtext,"#")!==false)){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot ('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id) *Kechirasiz bu guruhda #⃣ HashTag tashlash mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}
if(isset($update) and $Slocation == "false"){
if(isset($message->location)!==false){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[$ufname $uname](tg://user?id=$user_id) *Kechirasiz bu guruhda 🏠Manzil yuborish mumkin emas!*",
'parse_mode'=>"markdown",
]);
}
}

if(isset($update) and $Svideo_note == "false"){
if(isset($message->video_note)!==false){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mid,
]);
bot('SendMessage', [
'chat_id'=>$chat_id,
'text'=>"[Foydalanuvchi](tg://user?id=$user_id)😡*Kechirasiz bu guruhda 📹Yumoloq video tashlash mumkin emas!*",
'parse_mode'=>"markdown"
]);
}
}
