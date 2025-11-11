<?php

class User {
  
  use Model;

  protected $table = 'users';

  protected $allowedColumns = [
    'name',
    'age',
    'email',
    'password',
  ];

  public function validate($data) {
    $this->errors = [];

    if(empty($data['name'])) {
      $this->errors['name'] = "Name is required";
    } elseif(empty($data['email'])) {
      $this->errors['email'] = "Email is required";
    } elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
      $this->errors['email'] = "Email is not valid";
    } elseif(empty($data['password'])) {
      $this->errors['password'] = "Password is required";
    } elseif(empty($data['terms'])) {
      $this->errors['terms'] = "Please, accept the Terms";
    }

    if(empty($this->errors)) {
      return true;
    }

    return false;
  }
}