<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Driving School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <style>

        </style>
    </head>
    <body>
        <h3>Please upload your .jpg file</h3>
        <form action="/file/store" method="post" enctype="multipart/form-data">
            <label for="fileToUpload">Image File:</label>
            <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
            <input type="submit" value="Upload File">
        </form>
    </body>
</html>
