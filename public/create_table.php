<?php
require_once 'db.php';

$pdo = getConnection();

$sql = "

create table users (
    id INT not NULL primary key auto_increment,
    login varchar(255) not null,
    password varchar(1024) not null,
    email varchar(255) not null,
    is_admin tinyint(1) not null default 0
);

create table attachments (
    id INT not NULL primary key auto_increment,
    path varchar(255) not null,
    real_name varchar(255) not null,
    name varchar(255) null,
    ext varchar(255) not null 
);

create table attachmentable (
    user_id INT not null,
    attachment_id int not null 
);
";

$pdo->query($sql);