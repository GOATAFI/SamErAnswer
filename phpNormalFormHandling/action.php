<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['username']) && isset($_POST['pass']) && isset($_FILES['proPic'])) {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $proPic = $_FILES['proPic'];
        
        $file_upload = $_FILES['file_uplaod']['name'];
        $tmp_file = $_FILES['file_upload']['tmp_name'];
        $file_extension = pathinfo($file_upload,PATHINFO_EXTENSION);

        if($file_extension == 'jpeg'){
            $new_file_name = uniqid() . '.' . $file_extension;
            move_uploaded_file($tmp_file, "upload/".$new_file_name);
            $img_file = $new_file_name;
        }
        echo "All set";
    } else {
        echo "Enter form data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $email ?></p>
    <p><?php echo $pass ?></p>
    <p><?php echo $username ?></p>
    <img src="upload/<?php echo $img_file ?>" alt="">
</body>
</html>