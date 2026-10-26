<?php
$pagenum = 1;
$perpage = 6;
$total = 100;

$categorys = $this->demodb('item', '*', [['page_id', '=', 1], 'AND', ['type', '=', 2]], ['id' => 'ASC'], [3]);

$items = $this->demodb('item', '*', [['page_id', '=', 1], 'AND', ['type', '=', 1]], ['id' => 'DESC'], [($pagenum - 1) * $perpage, $perpage]);

foreach ($items as $i => $item)
{
    $items[$i]['image'] = $this->assets('photo/9/' . ($i + 1) . '.png');
    $items[$i]['image2'] = $this->assets('photo/9/' . ($i + 1) . '-1.png');
    $items[$i]['ctime'] = strtotime('-' . ($i * 50) . ' days', time());
}