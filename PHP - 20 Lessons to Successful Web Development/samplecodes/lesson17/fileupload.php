<!DOCTYPE html>
<html>
  <head>
    <title>File Upload</title>
  </head>
  <body>
    <form method='post' action='fileupload.php'
        enctype='multipart/form-data'>
      Choose File: <input type='file' name='filename' size='27'>
      <input type='submit' value='Upload'>
    </form>
<?php
  if ($_FILES)
  {
    $name = strtolower(preg_replace('/[^\w.-]/', '',
      $_FILES['filename']['name']));
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    echo "Uploaded image '$name'<br><br><img src='$name'>";
  }
?>
  </body>
</html>