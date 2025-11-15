<?php
class Logout {
    use Controller;

    public function index() {
        session_destroy();
        header('Location: ' . ROOT . '/login');
        exit;
    }
}
