<!DOCTYPE html>
<html>
    <head>
        <title>Multiupload Gambar</title>
    </head>
    <body>
        <h2>Unggah Gambar</h2>
        <form action="proses_uploadGambar.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple" accept="jpg, jpeg, png, gif">
            <input type="submit" value="Unggah" />
        </form>
    </body>
</html>