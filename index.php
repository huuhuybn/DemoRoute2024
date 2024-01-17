<html>

<head>
    <title>Welcome to my Site!!!</title>
</head>

<body>
<h1>Welcome to my Website</h1>
<a href="/home">Home</a>
<a href="/news">News</a>
<a href="/products">Products</a>
<?php
require './vendor/autoload.php';
use Huuhu\Demo\controllers\Router;
use Huuhu\Demo\controllers\StudentController;
// dinh nghia đâu là file sẽ hướng mọi request vào !!!!! rewrite path/ url!!!

$router = new Router();
$router->setRoute('/DemoRoute/index.php',function (){
 echo 'HELLO HELLO <br>';
});
$router->setRoute('/DemoRoute/?news',function (){
    echo 'news news news <br>';
});
$router->setRoute('/DemoRoute/?students',[new StudentController(), 'index']);

// lấy ra đường dẫn - địa chỉ gửi lên
$url = $_SERVER['REQUEST_URI'];
echo $url;
// nạp địa chỉ vào route để route điều hướng
$router->handleRoute($url);

?>


</body>


</html>
