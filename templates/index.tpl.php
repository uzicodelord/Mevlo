<?php session_start(); ?>
<?php if (file_exists('./logicals/' . $find['file'] . '.php')) {
    include("./logicals/{$find['file']}.php");
} ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>
        <?= $pagetitle['title'] . ((isset($pagetitle['motto'])) ? ('|' . $pagetitle['motto']) : '') ?>
    </title>
    <link rel="stylesheet" href="./styles/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php if (file_exists('./styles/' . $find['file'] . '.css')) { ?>
        <link rel="stylesheet" href="./styles/<?= $find['file'] ?>.css" type="text/css">
    <?php } ?>
    <style>
        @media screen and (max-width: 800px) {
        
            footer {
                width: 100%;
                font-size: 10px
            }
        }
    </style>
</head>

<body>
    <aside id="nav">
        <nav style="width:100%;display:flex; justify-content: space-evenly;">
            <ul>
                <?php foreach ($pages as $url => $page) { ?>
                    <?php if (!isset($_SESSION['user']) && $page['menun'][0] || isset($_SESSION['user']) && $page['menun'][1]) { ?>
                        <li<?= (($page == $find) ? ' class="active"' : '') ?>>
                            <a href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
                                <?= $page['text'] ?>
                            </a>
                            </li>
                        <?php } ?>
                    <?php } ?>
            </ul>
        </nav>
    </aside>
    <div id="content">
        <?php include("./templates/pages/{$find['file']}.tpl.php"); ?>
    </div>
    </div>
    <footer style="color:black; text-align: left; position: fixed;">
        <?php if (isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?>
    <?php } ?>
    &nbsp;
    <?php if (isset($footer['firm'])) { ?>
        <?= $footer['firm']; ?>
    <?php } ?>
    </footer>
</body>

</html>