<?php 

require __DIR__ . '/../vendor/autoload.php';

use Testlin\Db\Db;

try {
    $db = new Db('localhost', 'fake_user', 'my_password', 'my_db');
} catch (Exception $e) {
    // 定处理方法
     $return = [
        'time' => date('Y-m-d H:i:s'),
        'exception_class' => get_class($e),
        'file' => $e->getFile(),
        'line' => $e->getLine(),
        'code' => $e->getCode(),
        'message' => $e->getMessage(),
    ];

    var_dump($return);
}

