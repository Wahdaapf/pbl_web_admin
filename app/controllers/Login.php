<?php

class Login
{
    use Controller;

    public function index()
    {
        if (isset($_SESSION['user_id'])) {
            header('Location: ' . ROOT . '/home');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->processLogin();
        } else {
            $this->view('login');
        }
    }

    private function processLogin()
    {
        try {
            $email    = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';

            // 🔥 Pakai Model User, bukan $this->connect()
            $userModel = new User();
            $user = $userModel->findByEmail($email);

            // 🔥 Verifikasi password
            if ($user && password_verify($password, $user['password'])) {

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email']   = $user['email'];

                header('Location: ' . ROOT . '/home');
                exit;
            }

            // jika salah
            $_SESSION['error'] = 'Email atau password salah.';
            header('Location: ' . ROOT . '/login');
            exit;

        } catch (PDOException $e) {
            die("Error login: " . $e->getMessage());
        }
    }
}
