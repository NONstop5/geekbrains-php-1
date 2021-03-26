<?php

$galleryPath = __DIR__ . DIRECTORY_SEPARATOR . 'gallery';
$galleryImagesList = scandir($galleryPath);
$galleryImagesList = array_slice($galleryImagesList, 2);
$uploadedFile = $_FILES['file'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($uploadedFile)) {
    $fileName = $uploadedFile['name'];
    $fileTmpName = $uploadedFile['tmp_name'];
    $fileType = $uploadedFile['type'];
    $fileSize = $uploadedFile['size'];
    $isImage = current(explode('/', $fileType)) === 'image';

    if ($isImage && $fileSize <= 10000000) {
        move_uploaded_file($fileTmpName, $galleryPath . DIRECTORY_SEPARATOR . $fileName);
    }

    header('Location: /lesson-4.php');
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles/fonts.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <title>Index page</title>
</head>
<body>
<div id="gallery" class="gallery">
    <div class="container">
        <h2>Our Gallery</h2>
        <div class="gallery__items">
            <?php
            foreach ($galleryImagesList as $imageItem) {
                ?>
                <div class="gallery__item">
                    <a href="gallery/<?php echo $imageItem ?>" target="_blank">
                        <img src="gallery/<?php echo $imageItem ?>" width="50" alt="">
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<div class="upload-images">
    <div class="container">
        <p class="upload-images__text">Upload new images</p>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="upload-images__form">
                <label class="visually-hidden" for="upload-images__input">Upload new images</label>
                <input
                    id="upload-images__input"
                    type="file"
                    name="file"
                    value=""
                    accept="image/jpeg"
                    placeholder="Choose image fail"
                    required
                >
                <button class="upload-images__button" type="submit" name="upload">Upload</button>
            </div>
        </form>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer__text">
            © 2017 Историческе Игры. Все права защищены
        </div>
    </div>
</div>
</body>
</html>
