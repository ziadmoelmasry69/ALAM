<?php
ob_start();
$API_KEY = "1859656976:AAHxv8gO_8kRa-KXr8DHXWhOCWUcIB6UyO8"; 
define( API_KEY ,$API_KEY);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER[ SERVER_NAME ] . "" . $_SERVER[ SCRIPT_NAME ]);
function bot($method,$datas=[]){
$ARMOF = http_build_query($datas);
$url = "https://api.telegram.org/bot".API_KEY."/".$method."?$ARMOF";
$marcus8 = file_get_contents($url); 
return json_decode($marcus8);}
$update = json_decode(file_get_contents( php://input ));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$from_id = $message->from->id;
$check_token = file_get_contents("https://api.telegram.org/bot$ text /getWebhookInfo");
$check = json_decode($check_token);
$get_file = file_get_contents( mroan.php );
$get_done = file_get_contents( make/ex.txt );
$name = $message->from->first_name;
$ch = "source_allam" ; 
$admin = "1859656976" ;
$dev = "FACKYOOOOOU";
$dev2 ="FACKYOOOOOU";

if($text ==   صور  or $text ==  الصور    or $text ==  صوره){
    bot(  sendMessage  ,[
     chat_id =>$chat_id,
      text  => "choose the favorite photo
 𖡨
﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎﹎

",
     reply_markup =>json_encode([
     inline_keyboard =>[
[[ text => بوي , callback_data =>"photo1"],[ text => كابلز , callback_data =>"photo2"]],
[[ text => جيرل , callback_data =>"photo3"],[[ text => حزين , callback_data =>"photo4"]],
 [[ "text" =>" dev allam🇪🇬..",   url   =>"https://t.me/FACKYOOOOOU"],[ "text" =>"source_allam 𖤐",    url   =>"t.me/$ch"]],
]
])
]);
}
if($data == "photo1" ){
bot( EditMessageText ,[
 chat_id =>$chat_id2,
 message_id =>$message_id2,
 text => 
اختر صورتك 📸
 ,
  parse_mode =>"markdown", disable_web_page_preview =>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[[ text => بوي , callback_data =>"boy"],[[ text => كابلز , callback_data =>"couples"]],
[[ text => جيرل , callback_data =>"girl"],[[ text => حزين , callback_data =>"sad"]],
 [[ text => dev allam🇪🇬..  , url => t.me/FACKYOOOOOU ]],
[[ text => 𝖇𝖆𝖈𝖐  , callback_data =>"photo"]],
]
])
]);
}
if($data == "lisao" ){
bot( EditMessageText ,[
 chat_id =>$chat_id2,
 message_id =>$message_id2,
 text => 
𓆩 قائمه صور بوي 𓆪
 ,
  parse_mode =>"markdown", disable_web_page_preview =>true,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[[ text =>  بوي , callback_data =>"lisao1"],[ text =>  بوي , callback_data =>"lisao2"]],
[[ text => بوي  , callback_data =>"lisao3"],[ text =>  بوي , callback_data =>"lisao4"]],
[[ text => بوي  , callback_data =>"lisao5"],[ text => بوي , callback_data =>"lisao6"]],
[[ text => بوي , callback_data =>"lisao7"],[ text => بوي , callback_data =>"lisao8"]],
[[ text => 𝖇𝖆𝖈𝖐  , callback_data =>"photo1"]],
]
])
]);
}
if($data == "lisao1"){
bot( sendaudio ,[
  chat_id =>$chat_id2, 
 photo =>"https://t.me/source_allamm/3",
  caption =>"𝖏𝖔𝖎𝖓: @$ch",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lisao2"){
bot( sendaudio ,[
  chat_id =>$chat_id2, 
 photo =>"https://t.me/source_allamm/4",
  caption =>"𝖏𝖔𝖎𝖓: @$ch",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lisao3"){
bot( sendaudio ,[
  chat_id =>$chat_id2, 
 photo =>"https://t.me/source_allamm/5",
  caption =>"𝖏𝖔𝖎𝖓: @$ch",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lisao4"){
bot( sendaudio ,[
  chat_id =>$chat_id2, 
 photo =>"https://t.me/source_allamm/6",
  caption =>"𝖏𝖔𝖎𝖓: @$ch",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lisao5"){
bot( sendaudio ,[
  chat_id =>$chat_id2, 
 photo =>"https://t.me/source_allamm/7",
  caption =>"𝖏𝖔𝖎𝖓: @$ch",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lisao6"){
bot( sendaudio ,[
  chat_id =>$chat_id2, 
 photo =>"https://t.me/source_allamm/8",
  caption =>"𝖏𝖔𝖎𝖓: @$ch",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lisao7"){
bot( sendaudio ,[
  chat_id =>$chat_id2, 
 photo =>"https://t.me/source_allamm/9",
  caption =>"𝖏𝖔𝖎𝖓: @$ch",
 reply_to_message_id =>$message->message_id, 
]);
}
if($data == "lisao8"){
bot( sendaudio ,[
  chat_id =>$chat_id2, 
 photo =>"https://t.me/source_allamm/10",
  caption =>"𝖏𝖔𝖎𝖓: @$ch",
 reply_to_message_id =>$message->message_id, 
]);
}