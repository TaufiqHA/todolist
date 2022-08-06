<?php 

require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Taufiq");
addTodoList("Hidayah");
addTodoList("Abdullah");

$Number = 2;

if (RemoveTodoList($Number) === false) {
    echo "DATA YANG AKAN ANDA HAPUS TIDAK DITEMUKAN!" . PHP_EOL;
}

var_dump($todoList);

ShowTodoLIst();
