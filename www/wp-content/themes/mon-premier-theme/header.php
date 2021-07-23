<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head()?>
</head>
<body <?php body_class(); ?>>
<?php if (is_front_page()): ?>
    <?= get_template_part('parts/headers/home') ?>
<?php else: ?>
    <?= get_template_part('parts/headers/default') ?>
<?php endif; ?>


