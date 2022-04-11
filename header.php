<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="description" content="サイトキャプションを入力">
    <meta name="keywords" content="サイトキーワードを,で区切って入力">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <?php if(is_category() or is_search()): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/category.css">
    <?php elseif(is_single()): ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/single.css">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mystyle.css">
    <?php endif; ?>
    <script src="https://kit.fontawesome.com/38f9c31fea.js" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body>
    <header class="text-center">
        <h1 class="h1"><img src="<?php echo get_template_directory_uri(); ?>/images/test-logo.png" width="50px"/></h1>
    </header>