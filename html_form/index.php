<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Form</title>
</head>

<body>
    <h1>HTML Form</h1>
    <form method="POST">
        <label for="nama_depan">Nama Depan</label>
        <input id="nama_depan" type="text" name="nama_depan" placeholder="Nama Depan Anda"> <br>
        <label for="nama_belakang">Nama Belakang</label>
        <input id="nama_belakang" type="text" name="nama_belakang" placeholder="Nama Belakang Anda"><br>
        <input type="submit" value="Submit">
    </form>
    <p> Hallo <?php echo $_POST["nama_depan"]; ?> </p>
    <form action="">

        <input type="radio" name="input_radio" id="input_radio" value="input radio">
        <label for="input_radio">input radio</label> <br>
        <input type="radio" name="man" id="input_radio" value="man">
        <label for="input_radio">man</label> <br>
        <input type="radio" name="woman " id="input_radio" value="woman">
        <label for="input_radio">woman</label> <br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>