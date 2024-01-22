<?php

namespace Huuhu\Demo\controllers;

class StudentController
{
    public function index(){
        // xy ly logic
        // ket noi database
        // hien thi tren view!!!!
        echo 'Hello INDEX';
    }
    public function edit(){
        echo 'Hello EDIT Page';
    }
    public function delete(){
        echo 'Hello INDEX';
    }

    public function showLogin(){
        echo '<form action="/DemoRoute/?login" method="post"
 enctype="application/x-www-form-urlencoded">
<input name="username" placeholder="Vui long nhap username...">
<input name="password" type="password" placeholder="Vui long nhap password...">
<button type="submit">Login</button>
</form>';
    }
    public function showRegister(){
        echo 'RegisterForm';
    }
    public function login(){
        if (isset($_POST['username']) && isset($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            // truy van database de kiem tra gia tri !!!
            echo "Dang nhap thanh cong";
        }else {
            echo 'Vui long nhap username va password';
        }
    }
    public function register(){
        echo 'Register';
    }
}