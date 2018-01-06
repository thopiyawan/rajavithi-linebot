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

        $conn_string = "host=ec2-54-227-247-225.compute-1.amazonaws.com port=5432 dbname=d6sqa1kjuhkplb user=kdhscmqukijgmf password=69ed8377f66479ac6222f469c6fa6cd2b2318b0ce23fd6a3f0cd7b94f18606ca";
        $dbconn = pg_pconnect($conn_string);
            
          $user = 'U2dc636d2cd052e82c29f5284e00f69b9';
           // $answer = sequents::select('question')
           //                      ->where('seqcode','0001')
           //                      ->first();
             // $seqcode = '0001';
             //  $result = pg_query($dbconn,"SELECT seqcode,question FROM sequents WHERE seqcode = '$seqcode'");
             //    while ($row = pg_fetch_row($result)) {
             //      echo $seqcode =  $row[0];
             //      echo $question = $row[1];
             //    }   

              $q = pg_exec($dbconn, "INSERT INTO sequentsteps(sender_id,seqcode,answer,nextseqcode,status,created_at,updated_at )VALUES('{$user}','0006','','0007','0',NOW(),NOW())") or die(pg_errormessage());
               
         
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
    
            $httpClient = new CurlHTTPClient('Vf5/E8YVJGtBLdDKO0KKypasAfw+x3BjBCXG18D602yuJsY5Jp+r/fS8jS54THIgGIlbySeNWH4k52hCcs+NM/zhWbdso+sw7Vwnt8sqaPBtze3kBiiQUNI4BI/oy+b5j5WlZnsV8yxL8ozCHMQUXwdB04t89/1O/w1cDnyilFU=');
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
    $conn_string = "host=ec2-54-227-247-225.compute-1.amazonaws.com port=5432 dbname=d6sqa1kjuhkplb user=kdhscmqukijgmf password=69ed8377f66479ac6222f469c6fa6cd2b2318b0ce23fd6a3f0cd7b94f18606ca";
    $dbconn = pg_pconnect($conn_string);

        // $result = pg_query($dbconn,"SELECT seqcode FROM sequentsteps WHERE sender_id = '$user' , status = '1'");
                while ($row = pg_fetch_row($result)) {
                  echo $seqcode =  $row[0];
                  //echo $question = $row[1];
                }   

            if ($userMessage =='ขอนัดกลืนแร่') {
                $case = 2;
                $seqcode = '0001';
                $nextseqcode = '0002';
             
               $question = $this->sequents_question($seqcode);
               $insert_sequentsteps = $this->insert_sequentsteps($user,$seqcode,$nextseqcode);
               $userMessage =  $question;
            }elseif(is_numeric($userMessage) !== false &&  $seqcode == '0001'){
                
                if($userMessage == '1'){
                    $case = 1;
                    $seqcode = '0006';
                    $nextseqcode = '0007';
                    $question = $this->sequents_question($seqcode);
                    $insert_sequentsteps = $this->insert_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;
                    //รูป
                    
                }elseif($userMessage == '2'){
                    $case = 3;
                    $seqcode = '0003';
                    $nextseqcode = '0004';
                    $question = $this->sequents_question($seqcode);
                    $insert_sequentsteps = $this->insert_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;


                }elseif($userMessage == '3'){
                    $case = 1;
                    $seqcode = '0005';
                    $nextseqcode = '0006';
                    $question = $this->sequents_question($seqcode);
                    $insert_sequentsteps = $this->insert_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;

                }else{
                    $case = 1;
                    $userMessage ='กรุณาเลือกใช่,ไม่ใช่ หรือ ไม่แน่ใจ';
                }
             }elseif(is_numeric($userMessage) !== false &&  $seqcode == '0003'){
                
                if($userMessage == '1'){
                    $case = 1;
                    $seqcode = '0004';
                    $nextseqcode = '0005';
                    $question = $this->sequents_question($seqcode);
                    $insert_sequentsteps = $this->insert_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;
                    //รูป
                    
                }elseif($userMessage == '2'){
                    $case = 3;
                    $seqcode = '0005';
                    $nextseqcode = '0006';
                    $question = $this->sequents_question($seqcode);
                    $insert_sequentsteps = $this->insert_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;

                }else{
                    $case = 1;
                    $userMessage ='กรุณาเลือกตกลง หรือ มีปัญหาการคุมกำเนิด';
                }
             
               $question = $this->sequents_question($seqcode);
               // $insert_sequentsteps = $this->insert_sequentsteps($user);
               $userMessage =  $question;
 

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
                   // $question = sequents::select('question')
                   //              ->where('seqcode',$seqcode)
                   //              ->first();
        $conn_string = "host=ec2-54-227-247-225.compute-1.amazonaws.com port=5432 dbname=d6sqa1kjuhkplb user=kdhscmqukijgmf password=69ed8377f66479ac6222f469c6fa6cd2b2318b0ce23fd6a3f0cd7b94f18606ca";
        $dbconn = pg_pconnect($conn_string);
                $result = pg_query($dbconn,"SELECT question FROM sequents WHERE seqcode = '$seqcode'");
                while ($row = pg_fetch_row($result)) {
                     $question = $row[0];
                }  
                   return $question;
    }
     public function insert_sequentsteps($user,$seqcode,$nextseqcode)
    {          
         $conn_string = "host=ec2-54-227-247-225.compute-1.amazonaws.com port=5432 dbname=d6sqa1kjuhkplb user=kdhscmqukijgmf password=69ed8377f66479ac6222f469c6fa6cd2b2318b0ce23fd6a3f0cd7b94f18606ca";
        $dbconn = pg_pconnect($conn_string);

        $q1 = pg_exec($dbconn, "UPDATE users SET  status = '0' WHERE user_id = '{$user_id}' ") or die(pg_errormessage());  

        $insert_sequentsteps = pg_exec($dbconn, "INSERT INTO sequentsteps(sender_id,seqcode,answer,nextseqcode,status,created_at,updated_at )VALUES('{$user}','{$seqcode}','','{$nextseqcode}','1',NOW(),NOW())") or die(pg_errormessage());
        return $insert_sequentsteps;
    }
    public function replymessage($replyToken,$userMessage,$case)
    {
          $httpClient = new CurlHTTPClient('Vf5/E8YVJGtBLdDKO0KKypasAfw+x3BjBCXG18D602yuJsY5Jp+r/fS8jS54THIgGIlbySeNWH4k52hCcs+NM/zhWbdso+sw7Vwnt8sqaPBtze3kBiiQUNI4BI/oy+b5j5WlZnsV8yxL8ozCHMQUXwdB04t89/1O/w1cDnyilFU=');
            $bot = new LINEBot($httpClient, array('channelSecret' => '96503ab7de564a74e4e13c5a7a3e0e40'));
            
            switch($case) {
     
                case 1 : 
                        $textMessageBuilder = new TextMessageBuilder($userMessage);
                    break;
                case 2 : 
                        $textMessage1 = new TextMessageBuilder($userMessage);
                        $actionBuilder = array(
                                          new MessageTemplateActionBuilder(
                                          'ใช่',// ข้อความแสดงในปุ่ม
                                          '1' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                                          ),
                                           new MessageTemplateActionBuilder(
                                          'ไม่ใช่',// ข้อความแสดงในปุ่ม
                                          '2' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                                          ),
                                           new MessageTemplateActionBuilder(
                                          'ไม่แน่ใจ',// ข้อความแสดงในปุ่ม
                                          '3' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                                          ) 
                                         );

                    $imageUrl = NULL;
                    $textMessage2 = new TemplateMessageBuilder('Template',
                     new ButtonTemplateBuilder(
                              'ผู้ป่วยเป็นผู้ชายหรือผู้หญิงวัยหมดประจำเดือนหรือ', // กำหนดหัวเรื่อง
                              'ได้คุมกำเนิดด้วยวิธีทำหมัน, ฉีดยาคุม, ฝังยาคุมหรือใส่ห่วงอนามัยแล้วใช่หรือไม่?', // กำหนดรายละเอียด
                               $imageUrl, // กำหนด url รุปภาพ
                               $actionBuilder  // กำหนด action object
                         )
                      );    

                 $multiMessage = new MultiMessageBuilder;
                  $multiMessage->add($textMessage1);
                  $multiMessage->add($textMessage2);
                  $textMessageBuilder = $multiMessage; 
                    break;
                  case 3 : 
                        $textMessage1 = new TextMessageBuilder($userMessage);
                        $actionBuilder = array(
                                          new MessageTemplateActionBuilder(
                                          'ตกลง',// ข้อความแสดงในปุ่ม
                                          '1' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                                          ),
                                           new MessageTemplateActionBuilder(
                                          'มีปัญหาการคุมกำเนิด',// ข้อความแสดงในปุ่ม
                                          '2' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                                          )
                                         );

                    $imageUrl = NULL;
                    $textMessage2 = new TemplateMessageBuilder('Template',
                     new ButtonTemplateBuilder(
                              'โปรดอ่านข้างบนก่อน', // กำหนดหัวเรื่อง
                              'กดเลือกด้านล่างได้เลยค่ะ', // กำหนดรายละเอียด
                               $imageUrl, // กำหนด url รุปภาพ
                               $actionBuilder  // กำหนด action object
                         )
                      );    

                 $multiMessage = new MultiMessageBuilder;
                  $multiMessage->add($textMessage1);
                  $multiMessage->add($textMessage2);
                  $textMessageBuilder = $multiMessage; 
                    break;
            }
            $response = $bot->replyMessage($replyToken,$textMessageBuilder); 
    }


}
