<?php
require_once ('classes/reg_form.php');  // Подключение скрипта записи в БД
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="style/main.css" rel="stylesheet" type="text/css">
    <title>Тест формы</title>

</head>
<body>

<div id="page_allign" class="b3radius">
    <div class="form_block">    <!-- Блок для формы-->
        <header>
            <h1>Добавить новую</h1>

        </header>

        <form method="post" enctype=multipart/form-data>
            <div class="form_block">
                <input type="text" name="namec" value=<?php echo $name;?>>
                <div><b>Введите текст: </b><br>
                    <textarea name="text_content" cols="60" rows="10"><?php echo $textContent;?></textarea>
                    <input type="file" name="uploadfile" value="Картинка" >
                    <input type="submit" name="reg" value="Готово"></div>

            </div>
            <p class='error_check'><?php echo $error_x;?></p>
        </form>
    </div>