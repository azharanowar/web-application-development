<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div align="center">
        <br>
        <?php foreach ($categories as $category) { ?>
            <a href="#"><?php echo $category['name']; ?></a> ||
        <?php } ?>
        <br>
        <br>
    </div>
    <hr>
    <div align="center">
        <br>
        <br>
        <br>
        <?php foreach ($blogs as $blog) { ?>
            <img src="assets/images/<?php echo $blog['image']; ?>">
            <a href="#"><h2><?php echo $blog['title']; ?></h2></a>
            <p><?php echo $blog['description']?></p>
            <hr>
            <br>
            <br>
        <?php } ?>
    </div>
</body>
</html>