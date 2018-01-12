<?php


namespace App\Http\Controllers;




       
use App\Models\sequents as sequents;
use App\Models\document_data as document_data;
use App\Models\sequentsteps as sequentsteps;
use App\Models\document_type as  document_type;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
//////////////////////

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use File;
//////////////////////
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
             // $seqcode = '0000';
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


                // $result = pg_query($dbconn,"SELECT seqcode FROM sequentsteps WHERE sender_id = '$user'");
                // $num = pg_num_rows($result);
                // echo $num;
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


                   // $botDataFolder = 'https://rajavithi-bot.herokuapp.com/document/'; 
                   // $botDataUserFolder = $botDataFolder.'555'; 
              
// File::makeDirectory($path=base_path("public/document/332555.png/"), $mode = 0777, $recursive = true, $force = false);
//           $folder = '55553';
// $path = base_path('resources/promos/' . $folder . '/');
// File::makeDirectory($path, 0777, true, true);
          // File::makeDirectory(public_path('document/'));
          //$path = 'public/document/';
          // File::makeDirectory(public_path().'/'.$path,0777,true);
          // $permissions = intval( config('permissions.directory'), 8 );
          // File::makeDirectory($path, $permissions,0777, true);
            // Storage::MakeDirectory(public_path('/public/document/'));


// $path = public_path().'/documenttest1';
// // File::makeDirectory($path, $mode = 0777, true, true);

//       mkdir($path, 0777, false);

   if(Input::hasFile('image')){
            

                     $file = Input::file('image');

                     $destinationPath = public_path(). '/uploads/';
                        $filename = $file->getClientOriginalName();

                        $file->move($destinationPath, $filename);

                        echo  $filename;
                        //echo '<img src="uploads/'. $filename . '"/>';

                        $user = document_data::create([
                            'document_name' => $filename,
                        ]);
                    }



                   
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
            $user        = $events['events'][0]['source']['userId'];
           // $userMessage = $events['events'][0]['message']['text'];
            $typeMessage = $events['events'][0]['message']['type'];
            $idMessage   = $events['events'][0]['message']['id']; 
            }
            //$userMessage =  $typeMessage;
            // return $this->replymessage($replyToken,$userMessage,$case);
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
      
                $seqcode = $this->seqcode_select($user);
        
//////////////////////////////////////////////////////////////////

if($typeMessage=='text'){
      if(!is_null($events)){
            $userMessage = $events['events'][0]['message']['text'];
            }

        if(is_string($userMessage) !== false &&   $seqcode == '0000'){
               $case = 12;
               $seqcode = '0001_1';
               $nextseqcode = '0002';
            
               $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
               $userMessage = 'สวัสดีค่ะ ต้องการนัดกลืนแร่ไหมคะ';

        }elseif ($userMessage == 'q' || $userMessage == 'Q'){
                  $seqcode = '0000';
                  $nextseqcode = '0000';
                  $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                  $case = 1;
                  $userMessage = 'ออกจากการนัดกลืนแร่เรียบร้อย';

         }elseif(is_string($userMessage) !== false &&   $seqcode== '0001_1'){
                
                if($userMessage == '1'){
                    $case = 2;
                    $seqcode = '0001';
                    $nextseqcode = '0002';
            
                   $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                   $question = $this->sequents_question($seqcode);
                   $userMessage = $question;
                    
                }elseif($userMessage == '2'){
                    $case = 1;
                    $seqcode = '0005';
                    $nextseqcode = '0006';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;

                }else{
                    $case = 1;
                    $userMessage ='กรุณาเลือกต้องการหรือ ไม่ต้องการ';
                }

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
             }elseif(is_string($userMessage) !== false &&   $seqcode== '0003'){
                
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
            
             }elseif(is_string($userMessage) !== false &&  $seqcode == '0007'){
                
                if($userMessage == '1'){
                    $case = 6;
                    $seqcode = '0008';
                    $nextseqcode = '0009';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;
                    //รูป
                    
                }elseif($userMessage == '2'){
                    $case = 4;
                    $seqcode = '0006';
                    $nextseqcode = '0007';
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
                    $userMessage ='กรุณาเลือกใช่,ไม่ใช่ หรือ เอกสารไม่ครบ';
                }

      //*****///
            }elseif(is_string($userMessage) !== false &&  $seqcode == '0008'){
                
                if($userMessage == '1'){
                    $case = 7;
                    $seqcode = '0009';
                    $nextseqcode = '0010';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;
                    
                }elseif($userMessage == '2'){
                    $case = 9;
                    $seqcode = '0011';
                    $nextseqcode = '0012';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;

                }else{
                    $case = 1;
                    $userMessage ='กรุณาเลือกใช่ หรือ ไม่ใช่';
                }
            }elseif(is_string($userMessage) !== false &&  $seqcode == '0010'){
                
                if($userMessage == '1'){
                    $case = 9;
                    $seqcode = '0011';
                    $nextseqcode = '0012';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;
                    //รูป
                    
                }elseif($userMessage == '2'){
                    $case = 4;
                    $seqcode = '0009';
                    $nextseqcode = '0010';
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
                    $userMessage ='กรุณาเลือกใช่,ไม่ใช่ หรือ เอกสารไม่ครบ';
                }


             }elseif(is_string($userMessage) !== false &&  $seqcode == '0012'){
                
                if($userMessage == '1'){
                    $case = 6;
                    $seqcode = '0013';
                    $nextseqcode = '0018';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;
                    //รูป
                    
                }elseif($userMessage == '2'){
                    $case = 9;
                    $seqcode = '0011';
                    $nextseqcode = '0012';
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
                    $userMessage ='กรุณาเลือกใช่,ไม่ใช่ หรือ เอกสารไม่ครบ';
                }

            }elseif(is_string($userMessage) !== false &&  $seqcode == '0013'){
                
                if($userMessage == '1'){
                    $case = 1;
                    $seqcode = '0018';
                    $nextseqcode = '0000';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;
                    
                }elseif($userMessage == '2'){
                    $case = 10;
                    $seqcode = '0014';
                    $nextseqcode = '0015';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;

                }else{
                    $case = 1;
                    $userMessage ='กรุณาเลือกใช่ หรือ ไม่ใช่';
                }

             }elseif(is_string($userMessage) !== false &&  $seqcode == '0015'){
                
                if($userMessage == '1'){
                    $case = 11;
                    $seqcode = '0016';
                    $nextseqcode = '0017';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;
                    //รูป
                    
                }elseif($userMessage == '2'){
                    $case = 10;
                    $seqcode = '0014';
                    $nextseqcode = '0015';
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
                    $userMessage ='กรุณาเลือกใช่,ไม่ใช่ หรือ เอกสารไม่ครบ';
                }

            }elseif(is_string($userMessage) !== false &&  $seqcode == '0017'){
                
                if($userMessage == '1'){
                    $case = 1;
                    $seqcode = '0018';
                    $nextseqcode = '0000';
                    $question = $this->sequents_question($seqcode);
                    $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                    $userMessage =  $question;
                    //รูป
                    
                }elseif($userMessage == '2'){
                    $case = 11;
                    $seqcode = '0016';
                    $nextseqcode = '0017';
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
                    $userMessage ='กรุณาเลือกใช่,ไม่ใช่ หรือ เอกสารไม่ครบ';
                }

            // }elseif (strpos($userMessage, 'hello') !== false || strpos($userMessage, 'สวัสดี') !== false){
            //     $userMessage  = 'สวัสดีค่ะ ';
            //     $case = 1; 
            
            }else{
                $userMessage  = 'ฉันไม่เข้าใจ';
                $case = 1; 
            }     

}elseif($typeMessage=='image'){
        switch ($seqcode) {
            case '0006':
                $seqcode = '0007';
                $nextseqcode = '0008';
                $question = $this->sequents_question($seqcode);
                $userMessage = $question;
                $case = 5; 
                $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);

                $typedoc = '1';


                $response = $bot->getMessageContent($idMessage);
                   if ($response->isSucceeded()) {
                    $dataBinary = $response->getRawBody();
                    $fileType = $response->getHeader('Content-Type'); 
   
                  $pieces = explode("/", $fileType);
                  $ext  = str_replace("","",$pieces[1]);
                  $fileNameSave = time()."-". $typedoc.".".$ext;

                
                }  
                   $botDataFolder = '/'; 
                   $botDataUserFolder = $botDataFolder.$user; 
                 // if(!file_exists($botDataUserFolder)) { // ตรวจสอบถ้ายังไม่มีให้สร้างโฟลเดอร์ userId
                 //      $result = File::makeDirectory($botDataUserFolder, 0775, true);
                 //    }   
                    // $permissions = intval( config('permissions.directory'), 8 );
                    // $filesystem->makeDirectory('document/', $permissions, true);
                   // $result = File::makeDirectory('/document/', 0775, true);
             
                $fileFullSavePath = $botDataUserFolder.'/'.$fileNameSave;
                    //  file_put_contents($fileFullSavePath,$dataBinary); // ทำการบันทึกไฟล์
                // $userMessage =  $fileNameSave;
                    //  $filename = 'ppppp.png';
                    // if($request->hasFile('image'))
                    //     {
                    //         $image = $request->file('image')->store('public/images');
                    //         $filename = $request->file('image')->hashName();
                    //         $post->image = $filename;
                    //     }


                 

            
                break;
            case '0009':
                $seqcode = '0010';
                $nextseqcode = '0011';
                $question = $this->sequents_question($seqcode);
                $userMessage = $question;
                $case = 8; 
                $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                $typedoc = '2-3';
                break;
            case '0011':
                $seqcode = '0012';
                $nextseqcode = '0013';
                $question = $this->sequents_question($seqcode);
                $userMessage = $question;
                $case = 8; 
                $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                $typedoc = '4';
                break;
            case '0014':
                $seqcode = '0015';
                $nextseqcode = '0016';
                $question = $this->sequents_question($seqcode);
                $userMessage = $question;
                $case = 8; 
                $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                $typedoc = '5';
                break;
            case '0016':
                $seqcode = '0017';
                $nextseqcode = '0018';
                $question = $this->sequents_question($seqcode);
                $userMessage = $question;
                $case = 8; 
                $update_sequentsteps = $this->update_sequentsteps($user,$seqcode,$nextseqcode);
                $typedoc = '6';
                break;
            
            
            default:
                 $userMessage  = 'ส่งเพียง1รูป';
                $case = 1; 
                break;
        }
               
             
}else{
      $userMessage  = 'สติ้กเกอร์น่ารักจัง';
                $case = 1; 
             
}


//////////////////////////////////////////

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
             case 5 : 
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
                                          'มีเอกสารไม่ครบ',// ข้อความแสดงในปุ่ม
                                          '3' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                                          )
                                         );

                    $imageUrl = NULL;
                    $textMessageBuilder = new TemplateMessageBuilder('Template',
                     new ButtonTemplateBuilder(
                              $userMessage, // กำหนดหัวเรื่อง
                              'กดเลือกด้านล่างได้เลยค่ะ', // กำหนดรายละเอียด
                               $imageUrl, // กำหนด url รุปภาพ
                               $actionBuilder  // กำหนด action object
                         )
                      ); 

                    break;
               case 6 : 
                    $actionBuilder = array(
                                          new MessageTemplateActionBuilder(
                                          'ใช่',// ข้อความแสดงในปุ่ม
                                          '1' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                                          ),
                                           new MessageTemplateActionBuilder(
                                          'ไม่ใช่',// ข้อความแสดงในปุ่ม
                                          '2' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                                          )
                                         );

                    $imageUrl = NULL;
                    $textMessageBuilder = new TemplateMessageBuilder('Template',
                     new ButtonTemplateBuilder(
                              $userMessage, // กำหนดหัวเรื่อง
                              'กดเลือกด้านล่างได้เลยค่ะ', // กำหนดรายละเอียด
                               $imageUrl, // กำหนด url รุปภาพ
                               $actionBuilder  // กำหนด action object
                         )
                      );    

                    break;
                case 7 : 
                        $textMessage1 = new TextMessageBuilder($userMessage);

                        $picFullSize = 'https://rajavithi-bot.herokuapp.com/images/2-3.png';
                        $picThumbnail = 'https://rajavithi-bot.herokuapp.com/images/2-3.png';
                        $textMessage2 = new ImageMessageBuilder($picFullSize,$picThumbnail);
                      
                  $multiMessage = new MultiMessageBuilder;
                  $multiMessage->add($textMessage1);
                  $multiMessage->add($textMessage2);
                  $textMessageBuilder = $multiMessage; 
                    break;  
                  case 8 : 
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
                                          'มีเอกสารไม่ครบ',// ข้อความแสดงในปุ่ม
                                          '3' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
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
                case 9 : 
                        $textMessage1 = new TextMessageBuilder($userMessage);

                        $picFullSize = 'https://rajavithi-bot.herokuapp.com/images/4.png';
                        $picThumbnail = 'https://rajavithi-bot.herokuapp.com/images/4.png';
                        $textMessage2 = new ImageMessageBuilder($picFullSize,$picThumbnail);
                      
                  $multiMessage = new MultiMessageBuilder;
                  $multiMessage->add($textMessage1);
                  $multiMessage->add($textMessage2);
                  $textMessageBuilder = $multiMessage; 
                    break;  
                case 10 : 
                        $textMessage1 = new TextMessageBuilder($userMessage);

                        $picFullSize = 'https://rajavithi-bot.herokuapp.com/images/5.png';
                        $picThumbnail = 'https://rajavithi-bot.herokuapp.com/images/5.png';
                        $textMessage2 = new ImageMessageBuilder($picFullSize,$picThumbnail);
                      
                  $multiMessage = new MultiMessageBuilder;
                  $multiMessage->add($textMessage1);
                  $multiMessage->add($textMessage2);
                  $textMessageBuilder = $multiMessage; 
                    break;  
                case 11 : 
                        $textMessage1 = new TextMessageBuilder($userMessage);

                        $picFullSize = 'https://rajavithi-bot.herokuapp.com/images/6.png';
                        $picThumbnail = 'https://rajavithi-bot.herokuapp.com/images/6.png';
                        $textMessage2 = new ImageMessageBuilder($picFullSize,$picThumbnail);
                      
                  $multiMessage = new MultiMessageBuilder;
                  $multiMessage->add($textMessage1);
                  $multiMessage->add($textMessage2);
                  $textMessageBuilder = $multiMessage; 
                    break;  
                case 12 : 
                    $actionBuilder = array(
                                          new MessageTemplateActionBuilder(
                                          'ต้องการ',// ข้อความแสดงในปุ่ม
                                          '1' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                                          ),
                                           new MessageTemplateActionBuilder(
                                          'ไม่ต้องการ',// ข้อความแสดงในปุ่ม
                                          '2' // ข้อความที่จะแสดงฝั่งผู้ใช้ เมื่อคลิกเลือก
                                          )
                                         );

                    $imageUrl = NULL;
                    $textMessageBuilder = new TemplateMessageBuilder('Template',
                     new ButtonTemplateBuilder(
                              $userMessage, // กำหนดหัวเรื่อง
                              'กดเลือกด้านล่างได้เลยค่ะ', // กำหนดรายละเอียด
                               $imageUrl, // กำหนด url รุปภาพ
                               $actionBuilder  // กำหนด action object
                         )
                      );    

                    break;
 
              
            }
            $response = $bot->replyMessage($replyToken,$textMessageBuilder); 
    }



   










}
