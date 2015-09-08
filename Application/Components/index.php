<?php
/**
 * 演示DEMO
 * @author Flc <2015-08-27 22:52:22>
 */

require_once "kugou.class.php";

$kugou = new kugou();
$lists = $kugou->getList('儿歌');

echo '<pre>';
print_r($lists);
echo '</pre>';
$music = $kugou->getMusic('2dc67062d830de3b60b7e4b09820e062');
print_r($music);
print_r($music['url']);
?>