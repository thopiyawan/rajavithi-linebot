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
             $seqcode = '0000';
             //  $result = pg_query($dbconn,"SELECT seqcode,question FROM sequents WHERE seqcode = '$seqcode'");
             //    while ($row = pg_fetch_row($result)) {
             //      echo $seqcode =  $row[0];
             //      echo $question = $row[1];
             //    }   
              // $result = pg_query($dbconn,"SELECT seqcode FROM sequentsteps WHERE sender_id = '$user'");
              //   while ($row = pg_fetch_row($result)) {
              //     return $seqcode =  $row[0];
              //     //echo $question = $row[1];
              //   }   

          // $result = pg_query($dbconn,"SELECT seqcode FROM sequentsteps WHERE sender_id = '$user'");
          //       while ($row = pg_fetch_object($result)) {
            
          //          echo  $row->seqcode;
          //       } 


                $result = pg_query($dbconn,"SELECT seqcode FROM sequentsteps WHERE sender_id = '$user'");
                $num = pg_num_rows($result);
                echo $num;
                 //    if($num==0)         
                 // {  
                 //     $seqcode = '0000';
                 //     $nextseqcode = '0000';             
                 //     $insert_sequentsteps = $this->insert_sequentsteps($user,$seqcode,$nextseqcode);
                 // }


              // $q = pg_exec($dbconn, "INSERT INTO sequentsteps(sender_id,seqcode,answer,nextseqcode,status,created_at,updated_at )VALUES('{$user}','0006','','0007','0',NOW(),NOW())") or die(pg_errormessage());
         //       $seqcode = '5000';
         //       $nextseqcode = '0000';

         // $update_sequentsteps = pg_exec($dbconn, "UPDATE sequentsteps SET  seqcode = '{$seqcode}', nextseqcode = '{$nextseqcode}' WHERE sender_id = '{$user}' ") or die(pg_errormessage());  
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
            $typeMessage = $events['events'][0]['message']['type'];
            $idMessage = $events['events'][0]['message']['id']; 
            }

            // $case = 1;
            // return $this->replymessage($replyToken,$userMessage,$case);
                $conn_string = "host=ec2-54-227-247-225.compute-1.amazonaws.com port=5432 dbname=d6sqa1kjuhkplb user=kdhscmqukijgmf password=69ed8377f66479ac6222f469c6fa6cd2b2318b0ce23fd6a3f0cd7b94f18606ca";
                $dbconn = pg_pconnect($conn_string);

                $result = pg_query($dbconn,"SELECT seqcode FROM sequentsteps WHERE sender_id = '$user'");
                $num = pg_num_rows($result);
                    if($num==0)         
                 {  
                     $seqcode = '0000';
                     $nextseqcode = '0000';             
                     $insert_sequentsteps = $this->insert_sequentsteps($user,$seqcode,$nextseqcode);
                 }
        switch ($typeMessage){
            case 'text':
                switch ($userMessage) {
                    case "p":
           
                            // ดึงค่ามาแบบเป็น JSON String โดยใช้คำสั่ง getRawBody() กรณีเป้นข้อความ text
                            $textReplyMessage = 'pppppppppp'; // return string            
                            $userMessage = new TextMessageBuilder($textReplyMessage);         
                            break;              
                    
                     
                        break;              
                    case "สวัสดี":
                        // เรียกดูข้อมูลโพรไฟล์ของ Line user โดยส่งค่า userID ของผู้ใช้ LINE ไปดึงข้อมูล
                   
                            $textReplyMessage = 'สวัสดีครับ คุณ ';             
                            $userMessage = new TextMessageBuilder($textReplyMessage);         
                            break;              
             
                        break;                                                                                                                                                                                                                                          
                    default:
                        $textReplyMessage = " คุณไม่ได้พิมพ์ ค่า ตามที่กำหนด";
                        $userMessage = new TextMessageBuilder($textReplyMessage);         
                        break;                                      
                }
                break;      
            case 'image' :
                 
           
                            // ดึงค่ามาแบบเป็น JSON String โดยใช้คำสั่ง getRawBody() กรณีเป้นข้อความ text
                            $textReplyMessage = 'pic'; // return string            
                            $userMessage = new TextMessageBuilder($textReplyMessage);         
                                       
                    
                     
                        break;              

        }
            $response = $bot->replyMessage($replyToken, $userMessage); 
            //$checkmessage = $this->checkmessage($replyToken,$userMessage,$user,$idMessage,$typeMessage);
    }
    public function checkmessage($replyToken,$userMessage,$user,$idMessage,$typeMessage)
    {  

              $seqcode = $this->seqcode_select($user);
                  
            if ($userMessage =='ขอนัดกลืนแร่' ) {
                $case = 2;
                $seqcode = '0001';
                $nextseqcode = '0002';
            
               $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
               $question = $this->sequents_question($seqcode);
               $userMessage = $question;
            }elseif(is_numeric($userMessage) !== false &&  $seqcode == '0001'){
                
                if($userMessage == '1'){
                    $case = 4;
                    $seqcode = '0006';
                    $nextseqcode = '0007';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;
                    //รูป
                    
                }elseif($userMessage == '2'){
                    $case = 3;
                    $seqcode = '0003';
                    $nextseqcode = '0004';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;


                }elseif($userMessage == '3'){
                    $case = 1;
                    $seqcode = '0005';
                    $nextseqcode = '0006';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;

                }else{
                    $case = 1;
                    $userMessage ='กรุณาเลือกใช่,ไม่ใช่ หรือ ไม่แน่ใจ';
                }
             }elseif( $typeMessage == 'image' && $seqcode == '0006'){


                $case = 1;
                $userMessage = '555555555';
                // $response = $bot->getMessageContent($idMessage);
                // if ($response->isSucceeded()) {
                //     // คำสั่ง getRawBody() ในกรณีนี้ จะได้ข้อมูลส่งกลับมาเป็น binary 
                //     // เราสามารถเอาข้อมูลไปบันทึกเป็นไฟล์ได้
                //     $dataBinary = $response->getRawBody(); // return binary
                //     // ดึงข้อมูลประเภทของไฟล์ จาก header
                //     $fileType = $response->getHeader('Content-Type');    
                //     switch ($fileType){
                //         case ($fileType  == 'image'):
                //             list($typeFile,$ext) = explode("/",$fileType);
                //             $ext = ($ext=='jpeg' || $ext=='jpg')?"jpg":$ext;
                //             $fileNameSave = time().".".$ext;
                //             break;
                //         // case (preg_match('/^audio/',$fileType) ? true : false):
                //         //     list($typeFile,$ext) = explode("/",$fileType);
                //         //     $fileNameSave = time().".".$ext;                        
                //         //     break;
                //         // case (preg_match('/^video/',$fileType) ? true : false):
                //         //     list($typeFile,$ext) = explode("/",$fileType);
                //         //     $fileNameSave = time().".".$ext;                                
                //         //     break;                                                      
                //     }
                //     $botDataFolder = 'document_images/'; // โฟลเดอร์หลักที่จะบันทึกไฟล์
                //     $botDataUserFolder = $botDataFolder.$userID; // มีโฟลเดอร์ด้านในเป็น userId อีกขั้น
                //     if(!file_exists($botDataUserFolder)) { // ตรวจสอบถ้ายังไม่มีให้สร้างโฟลเดอร์ userId
                //         mkdir($botDataUserFolder, 0777, true);
                //     }   
                //     // กำหนด path ของไฟล์ที่จะบันทึก
                //     $fileFullSavePath = $botDataUserFolder.'/'.$fileNameSave;
                //     file_put_contents($fileFullSavePath,$dataBinary); // ทำการบันทึกไฟล์
                //     $case=1;
                //     $textReplyMessage = "บันทึกไฟล์เรียบร้อยแล้ว $fileNameSave";
                //     $userMessage = new TextMessageBuilder($textReplyMessage);
                //     break;
                // }
                // $failMessage = json_encode($idMessage.' '.$response->getHTTPStatus() . ' ' . $response->getRawBody());
                // $case=1;
                // $userMessage = new TextMessageBuilder($failMessage);  

             }elseif(is_numeric($userMessage) !== false &&   $seqcode== '0003'){
                
                if($userMessage == '1'){
                    $case = 1;
                    $seqcode = '0004';
                    $nextseqcode = '0005';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;
                    //รูป
                    
                }elseif($userMessage == '2'){
                    $case = 1;
                    $seqcode = '0005';
                    $nextseqcode = '0006';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;

                }else{
                    $case = 1;
                    $userMessage ='กรุณาเลือกตกลง หรือ มีปัญหาการคุมกำเนิด';
                }
             
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
                while ($row = pg_fetch_object($result)) {
                   return  $row->question;
                }  
                 
    }
     public function insert_sequentsteps($user,$seqcode,$nextseqcode)
    {          
        $conn_string = "host=ec2-54-227-247-225.compute-1.amazonaws.com port=5432 dbname=d6sqa1kjuhkplb user=kdhscmqukijgmf password=69ed8377f66479ac6222f469c6fa6cd2b2318b0ce23fd6a3f0cd7b94f18606ca";
        $dbconn = pg_pconnect($conn_string);  

        $insert_sequentsteps = pg_exec($dbconn, "INSERT INTO sequentsteps(sender_id,seqcode,answer,nextseqcode,status,created_at,updated_at )VALUES('{$user}','{$seqcode}','','{$nextseqcode}','1',NOW(),NOW())") or die(pg_errormessage());
        return $insert_sequentsteps;
    }
     public function update_sequentsteps($user,$seqcode,$nextseqcode)
    {          
        $conn_string = "host=ec2-54-227-247-225.compute-1.amazonaws.com port=5432 dbname=d6sqa1kjuhkplb user=kdhscmqukijgmf password=69ed8377f66479ac6222f469c6fa6cd2b2318b0ce23fd6a3f0cd7b94f18606ca";
        $dbconn = pg_pconnect($conn_string);  

        $update_sequentsteps = pg_exec($dbconn, "UPDATE sequentsteps SET  seqcode = '{$seqcode}', nextseqcode = '{$nextseqcode}' WHERE sender_id = '{$user}' ") or die(pg_errormessage());  
        return $update_sequentsteps;
    }
    public function seqcode_select($user){
        $conn_string = "host=ec2-54-227-247-225.compute-1.amazonaws.com port=5432 dbname=d6sqa1kjuhkplb user=kdhscmqukijgmf password=69ed8377f66479ac6222f469c6fa6cd2b2318b0ce23fd6a3f0cd7b94f18606ca";
        $dbconn = pg_pconnect($conn_string);  
      
       $result = pg_query($dbconn,"SELECT seqcode FROM sequentsteps WHERE sender_id = '$user'");
                while ($row = pg_fetch_object($result)) {
            
                   return $row->seqcode;
                } 

 

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
             case 4 : 
                        $textMessage1 = new TextMessageBuilder($userMessage);

                        $picFullSize = 'https://rajavithi-bot.herokuapp.com/images/1.png';
                        $picThumbnail = 'https://rajavithi-bot.herokuapp.com/images/1.png';
                        $textMessage2 = new ImageMessageBuilder($picFullSize,$picThumbnail);
                      
                  $multiMessage = new MultiMessageBuilder;
                  $multiMessage->add($textMessage1);
                  $multiMessage->add($textMessage2);
                  $textMessageBuilder = $multiMessage; 
                    break;
            }
            $response = $bot->replyMessage($replyToken,$textMessageBuilder); 
    }


}
