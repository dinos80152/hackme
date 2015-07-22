<?php
session_start();

if(!isset($_SESSION['uid'])) {
    header("location:login.php");
    exit;
}

$awards = [
    '1' => [
        "award_id" => 10001,
        "coin" => 50,
    ],
    '2' => [
        "award_id" => 10002,
        "coin" => 100,
    ],
    '3' => [
        "award_id" => 10003,
        "coin" => 200,
    ],
    '4' => [
        "award_id" => 10004,
        "coin" => 300,
    ],
];

$award_id = $_GET['award'];
$uid = $_SESSION['uid'];
$award = $awards[$award_id];

addAward($uid, $award);

echo "兌換成功";


function addAward($uid, $award) {

    $data_source = "exchanges.json";

    $row = [
        'award_id' => $award['award_id'],
        'uid' => $uid,
        'coin' => $award['coin'],
        'created_at' => date('Y-m-d H:i:s')
    ];

    $change_json = file_get_contents($data_source);
    $changes = json_decode($change_json, true);

    array_push($changes, $row);
    file_put_contents($data_source, json_encode($changes));
}
