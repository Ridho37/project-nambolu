<?php

// config/database.php
// File ini hanya mengembalikan sebuah array berisi konfigurasi database.
// Ini adalah praktik yang baik untuk memisahkan konfigurasi dari logika.

return [
    'host'      => 'localhost',
    'dbname'    => 'nambolu',
    'user'      => 'root',
    'password'  => '',
    'charset'   => 'utf8mb4'
];

/*
Table [biar konsisten]

users (
    id int primary key auto_increment,
    name varchar(100),
    username varchar(50),
    password varchar(255),
    role enum('admin','customer') //optional
    created_at timestamp current_timestamp
)

products(
    id int primary key auto_increment,
    name varchar(50),
    description text,
    price int,
    discount int,
    category_id int foreign key
)

category(
    id int primary key auto_increment,
    name varchar(50)
)

product_log(
    id int primary key auto_increment,
    user_id int,
    user_name varchar(50),
    product_id int,
    product_name varchar(50),
    status //add,update,delete
    created_at timestamp current_timestamp
)

kalo pake transaksi:

transaction(
    id int primary key auto_increment,
    name varchar(50),
    is_paid bool,
    is_sent bool,
    product_id int foreign key,
    user_id int foreign key
    created_at timestamp current_timestamp
)

*/













