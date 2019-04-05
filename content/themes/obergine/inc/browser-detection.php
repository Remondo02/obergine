<?php

// Browser Detection

if(preg_match('/Chrome/i',$_SERVER['HTTP_USER_AGENT'])){
            
    $nav = 'chrome-nav';
    $nav2 = 'span';
 } else {
     $nav = 'other-nav';
     $nav2 = 'span-show';
 }

