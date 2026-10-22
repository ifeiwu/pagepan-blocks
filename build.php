<?php
$path = __DIR__ . '/' . $_POST['path'];

// 自动创建目录（递归）
if (!is_dir($path)) {
    if (!mkdir($path, 0777, true) && !is_dir($path)) {
        throw new RuntimeException("目录创建失败: {$path}");
    }
}

$block_code = trim($_POST['block_code']);
file_put_contents($path . '/block.php', $block_code);


$webp_file = $path . '/cover.webp';
@unlink($webp_file);
$webp_code = $_POST['webp_code'];
file_put_contents($path . '/cover.webp', $webp_code);