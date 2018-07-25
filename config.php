<?php

return [
    'database' => [
        'dbname' => 'ToDoList',
        'username' => 'root',
        'password' => '123456',
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ],
    'DEBUG' => true,
];
