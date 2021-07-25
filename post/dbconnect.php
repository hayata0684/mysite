<?php
try {
    $db = new PDO('mysql:dbname=mini_bbs;port8889;charset=utf8', 'root','root');
} catch (PDOException $e) {
    echo 'DB接続エラー： ' . $_e->getMessage();
}
?>