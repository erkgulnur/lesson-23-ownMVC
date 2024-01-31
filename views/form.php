<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
</head>
<body>
    <h1><?php echo $this->data['title']; ?></h1>
        <form method="post" action="/upload" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit">Submit</button>
        </form>
</body>
</html>
