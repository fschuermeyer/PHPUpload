<?php require($_SERVER['DOCUMENT_ROOT'] . '/upload.class.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload File | Index</title>
    <?php uploadFiles::beforeUpload(); ?>
</head>
<body>
    
</body>
</html>



<form enctype="multipart/form-data" action="upload.php" method="POST">

<input type="file" multiple name="Datein[]" id="files"> 
<label for="files">File Upload</label>

<button>Senden</button>

</form>