<div data-block-id="p1b1" data-block-setting='{"repo.path":"ifeiwu/pagepan-blocks","gridview.name":"001"}' data-block-type="php">
    <?php
    $db = db();
    $items = $db->table('dataset_item_3')->get();
    $setting = $config['setting'];
    $this->component($setting['repo.path'], "gridview/{$setting['gridview.name']}", ['items' => $items]);
    ?>
</div>