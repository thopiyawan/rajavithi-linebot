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
        
        $this->client = new CurlHTTPClient(env('sthhyNpOjACE5tonT5xOsPUJ/kFtra9Fkc4Y38PlTgMh6D8FNisPlumPf9lMvAeYGIlbySeNWH4k52hCcs+NM/zhWbdso+sw7Vwnt8sqaPBy/2ib5ed7RLFQ3FIU+tVq9Y1MT2PmMG6OH+DdqjJMeAdB04t89/1O/w1cDnyilFU='));
        $this->bot = new LINEBot($this->client, ['channelSecret' => env('96503ab7de564a74e4e13c5a7a3e0e40')]);
        
        $response = $this->bot->replyText($replyToken, 'hello!');
        
        if ($response->isSucceeded()) {
            logger("reply success!!");
            return;
        }
    }
}