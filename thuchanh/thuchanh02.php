<?php

$users = [
    'sontv8',
    'daipv37',
    'trieunv9',
    'linhdk2'
];
echo '<h1>' . 'Mảng user ban đầu' . '</h1>';
foreach ($users as $item) {
    echo '<pre>';
    echo $item;
    echo '<hr>';
}

function showUser($value)
{
    echo '<h1>' . 'Show User' . '</h1>';
    foreach ($value as $item) {
        echo '<pre>';
        echo $item;
        echo '<hr>';
    }
}
showUser($users);

function addUser($value) {
    echo '<h1>' . 'Đã thêm thành công user DaiDepTrai' . '</h1>';
    $simple_user = 'DaiDepTrai';
    array_push($value, $simple_user);

    foreach ($value as $item) {
        echo '<pre>';
        echo $item;
        echo '<hr>';
    }
}

addUser($users);

function deleteUser($value) {
    echo '<h1>' . 'Đã xoá thành công user DaiDepTrai' . '</h1>';
    $simple_user = 'DaiDepTrai';
    unset($value[$simple_user]);
    foreach ($value as $item) {
        echo '<pre>';
        echo $item;
        echo '<hr>';
    }
}

deleteUser($users);
