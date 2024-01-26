<html>

<head>
    <title>Welcome to my Site!!!</title>
</head>

<body>
<h1>Welcome to my Website</h1>
<a href="/?url=home">Home</a>
<a href="/?url=news">News</a>
<a href="/?url=products">Products</a>
<a href="/DemoRoute/?url=showLogin">Show Login Form</a>
<a href="/DemoRoute/?url=showRegister">Show Register Form</a>
<?php
require './vendor/autoload.php';
use Huuhu\Demo\controllers\Router;
use Huuhu\Demo\controllers\StudentController;
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

session_start();
// dinh nghia đâu là file sẽ hướng mọi request vào !!!!! rewrite path/ url!!!
if (isset($_SESSION['username'])){
    echo 'Xin chao : ' .$_SESSION['username'] . '</br>';
}else echo 'Login';
$router = new Router();
//    /DemoRoute/index.php
$router->get('/',[new StudentController(), 'index']);
$router->get('showLogin',[new StudentController(),'showLogin']);
$router->get('showRegister',[new StudentController(),'showRegister']);
$router->post('login',[new StudentController(),'login']);
$router->post('register',[new StudentController(),'register']);
// lấy ra đường dẫn - địa chỉ gửi lên
if (isset($_GET['url']))
$url = $_GET['url'];
else $url = '/';
$method = $_SERVER['REQUEST_METHOD'];
echo ' -- ' . $url . ' -- ' . $method;
$router->handleRoute($url,$method);
?>
</body>


</html>
