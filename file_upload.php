<?php

if(isset($_FILES) && isset($_FILES['image'])) {

    $name = time() . '_' . $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    
    move_uploaded_file($tmp_name, 'images/'.$name);

}



?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        div{
            margin: 10px;
        }
    </style>
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">

        <div>
            <input type="file" name="image">
        </div>

        <div>
        <button>Upload</button>
        </div>
    
    </form>
    
</body>
</html>