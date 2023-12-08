<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSS</title>
    <style>
        .btn{
            margin-top: 10px;
            text-decoration: none;
            color: #000;
            border-radius: 5px;
            border: 1px solid #cdcdcd;
            background-color: #cdcdcd;
            padding: 5px;
        }
    </style>
</head>
<body>
    <a class="btn mb" href="/add-book">Tambah Buku</a>
    <table style="margin-top: 30px;" border="1">
        <tr>
            <td>No</td>
            <td>Nama Buku</td>
            <td>Aksi</td>
        </tr>
        <?php
        $nomor = 1;
        foreach ($books as $key => $book) :
        ?>
        <tr>
            <td><?= $nomor; ?></td>
            <td><?= $book->book; ?></td>
            <td><a class="btn mb" href="<?= '/edit-book/'.$book->id; ?>">Ubah</a> <button class="btn mb" onclick="hapus(<?= $book->id; ?>)">Hapus</button></td>
        </tr>
        <?php
            $nomor++;
        endforeach;
        ?>
    </table>
    <script>
        function hapus(e) {
            var result = confirm("Anda yakin ingin menghapus data ini?");
            if (result) {
                // console.log(e);
                var xhr = new XMLHttpRequest();
                var url = "/remove-book/"+e;
                xhr.onreadystatechange = function(){
                    if(this.readyState == 4 && this.status == 200){
                        location.reload();
                    }
                };
                xhr.open("DELETE", url, true);
                xhr.send();
            }
        }
    </script>
</body>
</html>