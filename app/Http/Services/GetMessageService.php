<?php
namespace App\Http\Services;
use LINE\LINEBot;
use LINE\LINEBot\HTTPClient\CurlHTTPClient;
class GetMessageService
{
    /**
     * @var LINEBot
     */
    private $bot;
    /**
     * @var HTTPClient
     */
    private $client;
    
    
    public function replySend($formData)
    {
        $replyToken = $formData['events']['0']['replyToken'];
        
        $this->client = new CurlHTTPClient(env('2/XlHiSAW8x3WbCF60jSXzIKyLzTyP7Mdi5nVa9QfPSLthIQtdFXo4qbTAS4mIXoGIlbySeNWH4k52hCcs+NM/zhWbdso+sw7Vwnt8sqaPD4BYAnfPnZyAtDQL43J/JgoGUoThMn7IskKhUHxpXbSQdB04t89/1O/w1cDnyilFU=
'));
        $this->bot = new LINEBot($this->client, ['channelSecret' => env('96503ab7de564a74e4e13c5a7a3e0e40')]);
        
        $response = $this->bot->replyText($replyToken, 'hello!');
        
        if ($response->isSucceeded()) {
            logger("reply success!!");
            return;
        }
    }
}