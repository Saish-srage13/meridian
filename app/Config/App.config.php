<?php

$config = [
    "db" => [
        "host" => "localhost",
        "username" => "root",
        "password" => "<YOUR_DB_PASSWORD>",
        "dbname" => "<YOUR_DB_NAME>",
        "charset" => "utf8mb4",
    ],
    "baseURL" => getenv("app.baseURL")
];