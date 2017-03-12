<?php
require "twitteroauth-master/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
include ("twitteroauth-master/src/TwitterOAuth.php") ;  
$apikey="tKmoXYkdjZzQih4htOn6ETDEb";
$apisecret="eu02Ggfi4Jt9VTsgSyhsKH3vHIn6pjEywnFIvxHp0jlhp2HoDn";
$accesstoken="840563825166315522-wmN4J3yyxNwFg2BfRjIDKseo2FewZ6M";
$accesssecret="m2j93TB9fT3lTkOO6Zk4QWGvU1jWLfmSCUbZROWG0YvkK";

$connection= new TwitterOAuth($apikey,$apisecret,$accesstoken,$accesssecret);

$content = $connection->get("account/verify_credentials");

$tweets = $connection->get("statuses/home_timeline", ["count" => 5, "exclude_replies" => true]);

$test = $connection->post("statuses/update", ["status" => "this is twitter api test"]);



foreach ($tweets as $tweet)
{
    $example = $tweet->text;
    echo '<div  class="container">';
      echo '<div class="panel">';
          echo '<div style="width:600px; margin:50px auto; margin-bottom:10px;" class="panel-heading panelprofile ">';
                echo '<div class="panel-body">';
                    echo '<div class="row">';
                        echo '<div class="col-md-3">';
    echo '<h3 style= "font-weight:600;" class="panel-title "> '.$tweet->user->name.'</h3>';
                            echo '<img class="thumbnail" src="'.$tweet->user->profile_image_url.'"/> ';
    
                        echo '</div>';
                        echo '<div class="col-md-9">';
                        
    echo '<span class="label label-info">Friends: '.$tweet->user->friends_count.'</span>';
    echo '<span class="label label-warning">Followers: '.$tweet->user->followers_count.'</span>';
    echo '<br />'; echo '<br />'; 
echo '<strong>'.$tweet->text.'</strong>';
    
    echo '<span class="label label-info">'.$tweet->user->created_at.'</span>';
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
        echo '</div>';
    echo '</div>';
 echo '</div>';
  
   echo '</div>';  
    
}

?>

<html>
<head>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
</head>
<body>

</body>
</html>