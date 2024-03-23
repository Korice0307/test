<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nick 教學頁面</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="page-<?= $page; ?>">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link <?= ($page == "php") ? ' active' : '' ?>" href="index.php?page=php">PHP</a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?= ($page == "mysql") ? ' active' : '' ?>" href="index.php?page=mysql">MySQL</a>
        </li>
        <li class="nav-item ml-auto">
            <a class="nav-link" href="index.php?page=login">login</a>
        </li>
    </ul>
    <ul class="nav nav-tabs">
        <?php if(isset($list)) foreach($list as $item): ?>
            <li class="nav-item">
                <a class="nav-link<?= ($item['menu'] == $menu) ? ' active' : '' ?>" aria-current="page" href="index.php?page=<?= $page ?>&menu=<?= $item['menu'] ?>">
                    <?= $item['name'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="mt-5">
                <?= $body; ?>
            </div>
        </div>
    </div>
    <footer class="border-top">
        <div class="py-3 text-center">
            Nick PHP教學頁面 ©<?= date("Y")?>
        </div>
    </footer>
</body>
</html>
