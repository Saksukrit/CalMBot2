<?php
//
require_once ('./LINEBot.php');
require_once ('./LINEBotTiny.php');
//
//
$channelAccessToken = '8RNNBRGbDOu0y/MAr0BnuajV46/YU3MVzA0rA4m4t6F1orO6PHx6b913ABPg3bR7TEvQO99XihXnZaPKVO/4VsQXLqs8LQZdmskXuwncFHyyQ824y7XOt9GLFJOgodw9zUS5/9qgrff265ZoTF3e9QdB04t89/1O/w1cDnyilFU=';
$channelSecret = 'b91e6eae48175204fe5811365eda9c19';
//
$client = new LINEBotTiny($channelAccessToken, $channelSecret);
//
$access_token = '8RNNBRGbDOu0y/MAr0BnuajV46/YU3MVzA0rA4m4t6F1orO6PHx6b913ABPg3bR7TEvQO99XihXnZaPKVO/4VsQXLqs8LQZdmskXuwncFHyyQ824y7XOt9GLFJOgodw9zUS5/9qgrff265ZoTF3e9QdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
//
//

if (!is_null($events['events']))
{

  foreach ($events['events'] as $event)
  {

    if (($event['type'] == 'message')&& ($event['message']['type'] == 'text')) {
                  // Get text sent
      $text = $event['message']['text'];
                  // Get replyToken
      $replyToken = $event['replyToken'];
      //
      //


      $messages = [
      'type' => 'text',
      'text' => 'ด้วยความยินดี'];

      $client->replyMessage(
        array(
          'replyToken' => $event['replyToken'],
          'messages' => [$messages,$messages]
          )
        );

      //
      //
    }
  }
}

//
//
echo "cal 2 OK";
?>
