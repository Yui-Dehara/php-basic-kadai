<?php
// 連想配列
$vegetable_list = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

foreach ($vegetable_list as $key => $value) {
echo "{$key}：{$value}<br>";
}
?>