<?php
include("libs/db.php");
date_default_timezone_set('Asia/Kolkata');
if (isset($_POST['submit'])) {
    $file = $_FILES['thumb'];

    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileName = $file['name'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('img', 'jpeg', 'jpg', 'png');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 1000000) {
                $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                $fileDestination = 'img/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
            } else {
                echo "file size is too large";
            }
        } else {
            echo "there was an error uploading the file";
        }
    } else {
        echo "invalid file type.";
    }

    $author = mysqli_real_escape_string($dataBase, $_POST['name']);
    $pCategory = mysqli_real_escape_string($dataBase, $_POST['category']);
    $blogTitle = mysqli_real_escape_string($dataBase, $_POST['title']);
    $content = mysqli_real_escape_string($dataBase, $_POST['content']);
    $fbLink = mysqli_real_escape_string($dataBase, $_POST['fb']);
    $instaLink = mysqli_real_escape_string($dataBase, $_POST['ig']);
    $twiLink = mysqli_real_escape_string($dataBase, $_POST['twitter']);

    $insertQuery = "INSERT INTO `post` (`post_id`, `category`, `blog_title`, `blog_content`, `author_name`, `thumbnail`, `blog_date`, `fb_link`, `insta_link`, `twit_link`) VALUES (NULL, '$pCategory', ' $blogTitle', '$content', '$author', '$fileNameNew', '" . date("Y-m-d H:i:s") . "', '$fbLink', '$instaLink', '$twiLink')";
    $dataBase->query($insertQuery);
    header("Location: index.php?PostUploaded");
}
