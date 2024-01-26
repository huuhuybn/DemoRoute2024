<?php

namespace Huuhu\Demo\controllers;

use Huuhu\Demo\base\DBMySQL;
use Huuhu\Demo\models\Student;

class StudentController
{
    public function index()
    {
        // xy ly logic
        // ket noi database
        // hien thi tren view!!!!
        echo 'Hello INDEX';
    }

    public function edit()
    {
        echo 'Hello EDIT Page';
    }

    public function delete()
    {
        echo 'Hello INDEX';
    }

    public function showLogin()
    {
        echo '<form action="/DemoRoute/?url=login" method="post"
 enctype="application/x-www-form-urlencoded">
<input name="username" placeholder="Vui long nhap username...">
<input name="password" type="password" placeholder="Vui long nhap password...">
<button type="submit">Login</button>
</form>';
        if (isset($_GET['error'])) {
            echo urldecode($_GET['error']);
        }
    }

    public function showRegister()
    {
        echo 'RegisterForm';
    }

    public function login()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            if (empty($_POST['username']) | empty($_POST['password'])) {
                $message = urlencode('Vui Lòng nhập đầy đủ thông tin !!!');
                header('Location:/DemoRoute/?url=showLogin&error=' . $message);
            } else {
                $username = $_POST['username'];
                $password = $_POST['password'];
                // truy van database de kiem tra gia tri !!!
                $student = new Student();
                $kq = $student->login($username, $password);
                if (isset($kq)) {
                    $_SESSION['username'] = $username;
                    echo 'Login Thanh Cong';
                } else echo 'Login Khong Thanh Cong';
            }
        } else {
            echo 'Vui long nhap username va password';
        }
    }

    public function register()
    {
        echo 'Register';
    }
}