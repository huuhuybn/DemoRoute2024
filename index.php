<html>

<head>
    <title>Welcome to my Site!!!</title>
</head>

<body>
<h1>Welcome to my Website</h1>
<a href="/home">Home</a>
<a href="/news">News</a>
<a href="/products">Products</a>
<a href="/DemoRoute/?showLogin">Show Login Form</a>
<a href="/DemoRoute/?showRegister">Show Register Form</a>
<?php
require './vendor/autoload.php';
use Huuhu\Demo\controllers\Router;
use Huuhu\Demo\controllers\StudentController;
// dinh nghia đâu là file sẽ hướng mọi request vào !!!!! rewrite path/ url!!!

$router = new Router();
//    /DemoRoute/index.php
$router->get('/DemoRoute/index.php',[new StudentController(), 'index']);
$router->get('/DemoRoute/?showLogin',[new StudentController(),'showLogin']);
$router->get('/DemoRoute/?showRegister',[new StudentController(),'showRegister']);
$router->post('/DemoRoute/?login',[new StudentController(),'login']);
$router->post('/DemoRoute/?register',[new StudentController(),'register']);
// lấy ra đường dẫn - địa chỉ gửi lên
$url = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
echo $url . ' -- ' . $method;
// nạp địa chỉ vào route để route điều hướng
$router->handleRoute($url,$method);
?>


</body>


</html>
