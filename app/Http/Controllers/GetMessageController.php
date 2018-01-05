<?php

namespace App\Http\Controllers;




use App\Models\sequents as sequents;
use App\Models\document_data as document_data;
use App\Models\sequentsteps as sequentsteps;
use App\Models\document_type as  document_type;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
//use LINE\LINEBot\Event;
//use LINE\LINEBot\Event\BaseEvent;
//use LINE\LINEBot\Event\MessageEvent;
use LINE\LINEBot\MessageBuilder;
use LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use LINE\LINEBot\MessageBuilder\StickerMessageBuilder;
use LINE\LINEBot\MessageBuilder\ImageMessageBuilder;
use LINE\LINEBot\MessageBuilder\LocationMessageBuilder;
use LINE\LINEBot\MessageBuilder\AudioMessageBuilder;
use LINE\LINEBot\MessageBuilder\VideoMessageBuilder;
use LINE\LINEBot\ImagemapActionBuilder;
use LINE\LINEBot\ImagemapActionBuilder\AreaBuilder;
use LINE\LINEBot\ImagemapActionBuilder\ImagemapMessageActionBuilder ;
use LINE\LINEBot\ImagemapActionBuilder\ImagemapUriActionBuilder;
use LINE\LINEBot\MessageBuilder\Imagemap\BaseSizeBuilder;
use LINE\LINEBot\MessageBuilder\ImagemapMessageBuilder;
use LINE\LINEBot\MessageBuilder\MultiMessageBuilder;
use LINE\LINEBot\TemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\DatetimePickerTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\PostbackTemplateActionBuilder;
use LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateMessageBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ButtonTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselTemplateBuilder;
use LINE\LINEBot\MessageBuilder\TemplateBuilder\ImageCarouselColumnTemplateBuilder;

class GetMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response



     */

     public function index(){
           $answer = sequents::select('question')
                                ->where('seqcode','0001')
                                ->first();
           $data = iconv("utf-8","tis-620",$answer);
           echo $data ;
                   // return $question->question;

        // $user = 'U2dc636d2cd052e82c29f5284e00f69b9';

           // $users_register = DB::table('users_register')
           //             ->where('sender_id', $user)
           //             ->update(['user_age' => $answer ]);
                     // $answer = DB::table('sequents')
                     // ->select('question')
                     // ->where('seqcode', '0001')
                     // ->first();
                    // $answer = $answer->question;
                    // $users_register = DB::table('users_register')
                    //    ->where('user_id', $user)
                    //    ->update(['email' => $answer ]);

           // $answer = json_decode($answer , true);
         // $code = 200;
         // $data = ['data' => $answer, 'code' => $code];
         // return response()->json($data);

     }
     public function getmessage()
    {         
    
            $httpClient = new CurlHTTPClient('cD31X9SFEuyU6DMIcOcFI+FN0F1FNz7f/367vn5Ca8k8SaKF1zwLiTLfMYFIl8g1GIlbySeNWH4k52hCcs+NM/zhWbdso+sw7Vwnt8sqaPDbFAay60r3CJEdcsC9wUFWJDNTdkc7jnUdKGdoKpdxlAdB04t89/1O/w1cDnyilFU=');
            $bot = new LINEBot($httpClient, array('channelSecret' => '96503ab7de564a74e4e13c5a7a3e0e40'));
            // คำสั่งรอรับการส่งค่ามาของ LINE Messaging API
            $content = file_get_contents('php://input');
            // แปลงข้อความรูปแบบ JSON  ให้อยู่ในโครงสร้างตัวแปร array
            $events = json_decode($content, true);
            if(!is_null($events)){
            // ถ้ามีค่า สร้างตัวแปรเก็บ replyToken ไว้ใช้งาน
            $replyToken  = $events['events'][0]['replyToken'];
            $user = $events['events'][0]['source']['userId'];
            $userMessage = $events['events'][0]['message']['text'];
            }

            // $textMessageBuilder = new TextMessageBuilder($userMessage);
            // $response = $bot->replyMessage($replyToken,$textMessageBuilder); 
            $checkmessage = $this->checkmessage($replyToken,$userMessage,$user);
    }
    public function checkmessage($replyToken,$userMessage,$user)
    {  
         // $sequentsteps =  $this->sequentsteps_seqcode($user);
           //$sequentsteps->seqcode

            if ($userMessage =='ขอนัดกลืนแร่') {
                $case = 1;
                $seqcode = '0001';
                $nextseqcode = '0002';
             //    $u  =   DB::table('sequentsteps')->insert(array(
             // array('sender_id'=>$user ,'seqcode'=>$seqcode ,'answer'=>'NULL','nextseqcode'=>$nextseqcode,),'status'=>'1'));
                $userMessage = DB::table('sequents')
                     ->select('question')
                     ->where('seqcode', '0001')
                     ->first();

                 $userMessage = json_decode($userMessage, true);
                 // $userMessage= $userMessage->question;
                  // $sequentsteps_insert =  $this->sequentsteps_insert($user,$seqcode,$nextseqcode);
            }elseif (strpos($userMessage, 'hello') !== false || strpos($userMessage, 'สวัสดี') !== false){
                $userMessage  = 'สวัสดีค่ะ ';
                $case = 1; 
            }else{
                $userMessage  = 'ฉันไม่เข้าใจ';
                $case = 1; 
            }     
             return $this->replymessage($replyToken,$userMessage,$case);
    }




     public function sequents_question($seqcode)
    {          
                   $question = sequents::select('question')
                                ->where('seqcode',$seqcode)
                                ->first();
                   return $question->question;
    }
    public function replymessage($replyToken,$userMessage,$case)
    {
          $httpClient = new CurlHTTPClient('cD31X9SFEuyU6DMIcOcFI+FN0F1FNz7f/367vn5Ca8k8SaKF1zwLiTLfMYFIl8g1GIlbySeNWH4k52hCcs+NM/zhWbdso+sw7Vwnt8sqaPDbFAay60r3CJEdcsC9wUFWJDNTdkc7jnUdKGdoKpdxlAdB04t89/1O/w1cDnyilFU=');
            $bot = new LINEBot($httpClient, array('channelSecret' => '96503ab7de564a74e4e13c5a7a3e0e40'));
            
            switch($case) {
     
                 case 1 : 
                        $textMessageBuilder = new TextMessageBuilder($userMessage);
                    break;
            }
            $response = $bot->replyMessage($replyToken,$textMessageBuilder); 
    }


}
