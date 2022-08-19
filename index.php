<?php
  require 'vendor/autoload.php';
  use \Mailjet\Resources;
if(isset($_POST['email'])){

  $mj = new \Mailjet\Client('0ee49270054ed79bbf9db5fcda066350','15c520fe8b9ef5fc6509295c06d186fa',true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => $_POST['email'],
          'Name' => $_POST['name']
        ],
        'To' => [
          [
            'Email' => "abdullatef.trefi98@gmail.com",
            'Name' => "Abdullatif"
          ]
        ],
        'Subject' => $_POST['subject'],
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h1>Email: {$_POST['email']}</h1><h1>Name: {$_POST['name']}</h1>".$_POST['message'],
        'CustomID' => "AppGettingStartedTest"
      ]
    ]
  ];
  try{

    $response = $mj->post(Resources::$Email, ['body' => $body]);
    echo ("done");
  }catch(Exception $e){
    $res = json_encode($response->getData());
    echo $res;
  }
}
else{
  echo "ok";
}
?>
