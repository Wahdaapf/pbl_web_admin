<?php

class Dash {

  use Controller;
  
  public function index() {

    $data['username'] = empty($_SESSION['USER']) ? '' : $_SESSION['USER']->email;
    
    $this->view('dash/dash', $data);
  }
}
