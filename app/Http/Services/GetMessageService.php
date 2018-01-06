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
        
        $this->client = new CurlHTTPClient(env('7DdGm6HIorfFbWu6lAvz4kgc+6h2dPy0wlJfgGikgbsp+Akd0CCi+IUn/ufWCiyzGIlbySeNWH4k52hCcs+NM/zhWbdso+sw7Vwnt8sqaPBL2T8ztuQpc3GS/CjcaIK3glSo2UTEhlnsnNMf/+7qRgdB04t89/1O/w1cDnyilFU='));
        $this->bot = new LINEBot($this->client, ['channelSecret' => env('96503ab7de564a74e4e13c5a7a3e0e40')]);
        
        $response = $this->bot->replyText($replyToken, 'hello!');
        
        if ($response->isSucceeded()) {
            logger("reply success!!");
            return;
        }
    }
}