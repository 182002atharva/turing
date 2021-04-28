<?php
$tape = array();
$i= 0;
$table = array
 (
 "b"=>array("symbol"=>null, "operations"=>"P0,R", "final m-config"=>"c"),
 "c"=>array("symbol"=>null, "operations"=>"R", "final m-config"=>"k"),
 "k"=>array("symbol"=>null, "operations"=>"P1,R", "final m-config"=>"e"),
 "e"=>array("symbol"=>null, "operations"=>"R", "final m-config"=>"b"),
 );
echo"<pre>";
$Turingstate = "b";
$i=0;
while(true)
{
  $tape[$i] = null;
  $operations = $table[$Turingstate]["operations"];
  $symbol = $table[$Turingstate]["symbol"];
  if($symbol === $tape[$i])
  {
     $operation = explode(",",$operations);
     foreach($operation as $value){
       switch ($value) {
         case "P0":
           $tape[$i]=0;
           break;
         case "P1":
           $tape[$i]=1;
           break;
         case "R":
           $tape[$i+1] = null;
           break;
        case "L":
           $tape[$i+1];
           break;
       }
     }
  }
  print_r($tape);
 $i++;
 $Turingstate = $table[$Turingstate]["final m-config"];
}

?>