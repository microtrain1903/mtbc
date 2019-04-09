<?php

$items = array(
  'for',
  'foreach',
  'while',
  'do-while'
);

echo 'PHP Suppports ' . count($items) . ' of loops.';

$li ='';
foreach($items as $item){
    $li .= "<li>{$item}</li>";
  }
  
  echo "<ul>{$li}</ul>";