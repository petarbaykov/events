<?php

function getDay($date){
  $timestamp = strtotime($date);
  return date("d",$timestamp);
}

function getMonth($date){
  $timestamp = strtotime($date);
  return date("F",$timestamp);
}
