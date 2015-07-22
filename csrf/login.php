<?php
session_start();

$account = filter_input(INPUT_POST, 'account', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRIPPED);

$user_info = [
    'account' => $account,
    'password' => $password
];

$user_id = getUserIdByUserInfo($user_info);

$_SESSION['uid'] = $user_id;

header("location: index.php");
exit;

function getUserIdByUserInfo($user_info)
{
    $users_json = file_get_contents("users.json");
    $users = json_decode($users_json, true);

    foreach($users as $user) {
        if($user['account'] === $user_info['account'] && $user['password'] === $user_info['password']) {
            return $user['id'];
        }
    }
    return false;
}