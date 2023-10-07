<?php

function eurodollar($euro,$rate_euro_dollar){
  return $euro * $rate_euro_dollar;
}

function dollareuro($dollar,$rate_euro_dollar){
    return $dollar / $rate_euro_dollar;
}
function eurodirham($euro,$rate_euro_dirham){
  return $euro * $rate_euro_dirham;
}
function dirhameuro($dirham,$rate_euro_dirham){
  return $dirham / $rate_euro_dirham;
}
function euroyen($euro,$rate_euro_yen){
  return $euro * $rate_euro_yen;
}
function yeneuro($yen,$rate_euro_yen){
  return $yen / $rate_euro_yen;
}
function euroron($euro,$rate_euro_ron){
  return $euro * $rate_euro_ron;
}
function roneuro($ron,$rate_euro_ron){
  return $ron / $rate_euro_ron;
} 
function europounds($euro,$rate_euro_pounds){
  return $euro * $rate_euro_pounds;
}
 function poundseuro($pounds,$rate_euro_pounds){
  return $pounds / $rate_euro_pounds;
 }

 function eurofranc($euro,$rate_euro_franc){
  return $euro * $rate_euro_franc;
 }
 function franceuro($franc,$rate_euro_franc){
  return $franc / $rate_euro_franc;
 }
?>