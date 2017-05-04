<?php
$access_token = "EAAAAPJmB8ZBwBAHLYwJLxzXyohHb4fyF2KsjjZBdBn7B3tWLf7kGJGwHxp1NDZAPMKMchsJ7nbZAXmgEctfB4IvvkZCin49beaQXllwLV2xRec3iaqIxUP0jN8umzwDmE6lfxuZBhhmuhNIZAHVOMKXm8uOUkIHPndcZCZAvGZBZCFBfRpage7mEmrV"; //tempat sobat naruh access_token
$kelamin  = "female"; //male untuk confirm semua permintaan pertemanan cowok
$me='';


/**
  Copyright :
  ----------
  Tempat Download Script
  unduhscript.blogspot.com 
  ----------
  Edited :
  Kupas Trik Seputar Internet Dan Software
  kupastrik.blogspot.com
  ----------
  NB : Hargailah script kami dengan cara tidak menghapus credits ini 
  ----------
**/


$stat=json_decode(auto('https://graph.facebook.com/me/friendrequests?access_token='.$access_token.'&limit=300'),true);  //ubah limit sesukamu
if(ereg("k"."ha"."r"."is"."ma",$me)){
for($i=1;$i<=count($stat[data]);$i++){
 if($stat[data][$i-1][from][name] != ""){
  $gender=json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=gender&access_token='.$access_token),true);
  if($gender==""){
  }elseif($gender[gender]==$kelamin){
   auto('https://graph.facebook.com/me/friends/'.$stat[data][$i-1][from][id].'?access_token='.$access_token.'&method=post');
   echo "<a href=\"http://m.facebook.com/".$stat[data][$i-1][from][id]."\" target=\"_blank\">".$stat[data][$i-1][from][name]."</a> => sukses diconfirm bro</br>";
  }
 }
}
}

function auto($url){
   $ch=curl_init();
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
   curl_setopt($ch,CURLOPT_URL,$url);
   $cx=curl_exec($ch);
  curl_close($ch);
  return($cx);
  }
?>
