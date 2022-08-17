<?php
  require 'vendor/autoload.php';
  use \Mailjet\Resources;
  $mj = new \Mailjet\Client('0ee49270054ed79bbf9db5fcda066350','15c520fe8b9ef5fc6509295c06d186fa',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "abdullatef.trefi98@gmail.com",
          'Name' => "Abdullatif"
        ],
        'To' => [
          [
            'Email' => "abdullatef.trefi98@gmail.com",
            'Name' => "Abdullatif"
          ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
    var_dump($response->getData());
?>
