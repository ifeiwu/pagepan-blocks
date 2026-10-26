<?php
return array(
    'item' => array(
        'list' => helper('tabler/config', ['item',
            [
                'table_insert' => [
                    'title>subtitle' => TABLER_FIELDS['subtitle'],
                ]
            ]
        ]),
        'edit' => helper('former/config', ['item',
            [
                'group_replace' => [
                    'subtitle' => FORMER_FIELDS['subtitle'],
                    'summary' => FORMER_FIELDS['summary'],
                    'image' => FORMER_FIELDS['image'],
                    'image2' => ['label' => '图片（鼠标悬停显示）'] + FORMER_FIELDS['image2']
                ]
            ]
        ])
    ),
    'category' => [
        'list' => helper('tabler/config', ['category']),
        'edit' => helper('former/config', ['category'])
    ]
);