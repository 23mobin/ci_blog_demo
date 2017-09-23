<?php

if(!function_exists('readmore'))
{
  function readmore($word_2_show,$the_string){
      $post_content = explode(" ",$the_string);
      $show_less = array_slice($post_content,0,$word_2_show);
      echo implode(" ",$show_less);
    }
}

if(!function_exists('getwords'))
{
  function getwords($word_2_show,$the_string){
      $post_content = explode(" ",$the_string);
      $show_less = array_slice($post_content,0,$word_2_show);
      return implode(" ",$show_less);
    }
}



if(!function_exists('flash_red'))
{
  function flash_red($exc){
      echo '<h4 class="text-danger text-center bg-danger">'.$exc.'</h4>';

    }
}

if(!function_exists('flash_green_big'))
{
  function flash_green_big($msg){
      echo '<h1 class="text-success text-center bg-success">'.$msg.'</h1>';

    }
}
if(!function_exists('flash_red_big'))
{
  function flash_red_big($msg){
      echo '<h1 class="text-danger text-center bg-danger">'.$msg.'</h1>';

    }
}



if(!function_exists('flash_green'))
{
  function flash_green($msg){
      echo '<h4 class="text-success text-center bg-success">'.$msg.'</h4>';

    }
}


if(!function_exists('sanitize'))
{
  function sanitize($dirty){
    return htmlentities($dirty,ENT_QUOTES,"UTF-8");
  }
}


if(!function_exists('pretty_date'))
{
function pretty_date($date){
   return date("d M Y, h:i a",strtotime($date));
 }
}


?>
