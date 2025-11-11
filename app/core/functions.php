<?php

function show($stuff) {
  echo "<pre>";
    print_r($stuff);
  echo "</pre>";
}


function real_escape($str) {
  global $con;
  return mysqli_real_escape_string($con, trim($str));
}

function escape_special_char($str) {
  return htmlspecialchars($str);
}

function escape_htmlentities($str) {
  return htmlentities($str, ENT_QUOTES, 'UTF-8');
}


function set_message($msg) {
  if(!empty($msg)) {
    $_SESSION['message'] = $msg;
  } else {
    $msg = "";
  }
}

function redirect($path) {
  header("Location: ".ROOT."/".$path);
  die;
}


// main menu logic
function one_menu_item($url, $fullUrl, $second_fullUrl, $text, $icon){
  global $cur_page;
  $auth_pages = ['login', 'signup', 'forgot'];
  
  echo "
    <a href='".ROOT."/$url' class='load-page'
      hx-get='".ROOT."/$fullUrl'
      hx-target='".(in_array($url, $auth_pages) ? "#main_container" : "#page_content_container")."'
      hx-swap='outerHTML'
      hx-push-url='".ROOT."/$url'
      hx-indicator='#loading'>

      <div class='one_menu_item ".(($cur_page==$fullUrl) || ($text!="Postes" && $cur_page=="") || ($cur_page==$second_fullUrl) ?"active":"")."'>
        <div class='icon'>
          ".$icon."
        </div>
        <div class='text'>
          ".$text."
        </div>
      </div>
    </a>
  ";
}