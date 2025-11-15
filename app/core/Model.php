<?php

class Model
{
    protected $db;   // <-- WAJIB ADA

    public function __construct()
    {
        // connect ke database sekali saja
        $this->db = Database::connect();
    }
}
