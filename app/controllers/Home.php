<?php

class Home {

  use Controller;
  
  public function index() {
    Auth::check();

    $this->view('home');
  }
}
