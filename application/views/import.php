<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Excel in CodeIgniter 3</title>
</head>

<body>

<form action="<?php echo base_url();?>Welcome/importFile" method="post" enctype="multipart/form-data">
    Upload excel file : 
    <input type="file" name="uploadFile" value="" /><br><br>
    <input type="submit" name="submit" value="Upload" />
</form>

</body>

</html>