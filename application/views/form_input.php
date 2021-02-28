<?php 
/**
	*@author Kristovel Adi Sucipto
	*@date 25/02/2021
	*@time 7.46 PM
	*/
?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Input</title>
</head>

<body>
    <h1>Form Input</h1>
    <form action="<?php echo base_url('Welcome/Action_Input') ?>" method="post">
        <table>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td><input type="text" name="npm" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" required></td>
            </tr>
            <tr>
                <td>Asal Kota</td>
                <td>:</td>
                <td><input type="text" name="kota" required></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="submit_input" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>