<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
</head>
<body>
    <form action="/process-edit-book/<?= $books[0]->id; ?>" method="post">
        <h5>Ubah Buku</h5>
        <input type="text" value="<?= $books[0]->book; ?>" name="buku" id="buku" placeholder="Edit nama buku">
        <input type="submit" value="Edit Buku">
    </form>
</body>
</html>