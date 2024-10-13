<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Оконешников Эрхан Егорович
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="row">
                <div class="col-3 nav_logo">

                </div>
                <div class="col-9">
                    <div class="nav_text">
                        топ любимые сериалы оконешникова эрхана:
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>
                    Действие сериала происходит в 1883 году.
                    Главные герои — члены семьи Даттонов,
                    которые вместе с караваном немецких переселенцев, охраняемым агентами Пинкертонов,
                    направляются через Великие равнины на Запад
                </h2>
            </div>
            <div class="col-4">
                <div class="row dutton1883">
                </div>
                <div class="row">
                    <p class="title_photo">
                        1883
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>
                    Сериал повествует о поколении семейства Даттонов в 1923 году
                    и о трудностях, которые им пришлось преодолеть.
                    Владельцы ранчо пытаются выжить в США времен Великой депрессии, 
                    сухого закона и участившихся краж скота.
                </h2>
            </div>
            <div class="col-4">
                <div class="row dutton1923">
                </div>
                <div class="row">
                    <p class="title_photo">
                        1923
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>
                    сериал «Йеллоустон» рассказывает историю семьи Даттонов, 
                    которые владеют одним из самых больших ранчо в США. 
                    Однако на эту территорию одновременно претендуют те, кто граничит с ней, 
                    — крупные застройщики, соседние города, 
                    а также живущее в расположенной по соседству индейской резервации племя Брокен-Рок, 
                    вождь которой считает Йеллоустон «своей землёй».
                </h2>
            </div>
            <div class="col-4">
                <div class="row duttonnow">
                </div>
                <div class="row">
                    <p class="title_photo">
                        yellowstone
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class=" button_js col-12">
                <button id="mybutton">
                    click me
                </button>
                <p id="demo">

                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <div class="col-12">
                <form method="POST" action="profile.php" enctype="multipart/form-data" name="upload">
                    <input type="text" class="form" type="text" name="title" placeholder="Заголовок вашего поста">
                    <textarea name="text" cols="30" rows="10" placeholder="Введите текст вашего поста..."></textarea>
                    <input type="file" name="file" /> <br>
                    <button type="submit" class="mybutton" id="mybutton" name="submit"> сохранить пост!</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/button.js"></script>

</body>

</html>

<?php

require_once('db.php');

$link = mysqli_connect('127.0.0.1', 'root','kali','first');

if (isset($_POST['submit'])) {

    $title=$_POST['title'];
    $main_text=$_POST['text'];

    if(!$title || !$main_text) die("заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title','$main_text')";

    if(!mysqli_query($link, $sql)) die("не удалось добавить пост");
}

if(!empty($_FILES["file"])) {
        if (((@$_FILES["file"]["type"] == "image/gif") || (@$_FILES["file"]["type"] == "image/jpeg")
        || (@$_FILES["file"]["type"] == "image/jpg") || (@$_FILES["file"]["type"] == "image/pjpeg")
        || (@$_FILES["file"]["type"] == "image/x-png") || (@$_FILES["file"]["type"] == "image/png"))
        && (@$_FILES["file"]["size"] < 4000000))
        {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "Load in:  " . "upload/" . $_FILES["file"]["name"];
        }
        else
        {
            echo "upload failed!";
        }
}


?>
