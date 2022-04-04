<?php
$data_head = file_get_contents("templates/head.tpl"); //tartalmat akarunk olvasni
$data_nav = file_get_contents("templates/nav.tpl");
$data_foot = file_get_contents("templates/foot.tpl");
$data_product = file_get_contents("templates/products.tpl");

echo $data_head;
echo $data_nav;
echo $data_foot;
echo $data_product;
