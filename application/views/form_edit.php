<?php 
/**
	*@author Kristovel Adi Sucipto
	*@date 27/02/2021
	*@time 6.48 PM
	*/
?>
<!DOCTYPE html>
<html>

<head>
    <title>Form Edit Data</title>
</head>

<body>
    <h1>Form Edit</h1>
    <form action="<?php echo base_url('Welcome/Action_Edit') ?>" method="post">
        <table>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td>
                    <input type="text" value="<?php echo $data_mhs->npm ?>" disabled>
                    <input type="hidden" name="npm">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $data_mhs->nama ?>"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value="<?php echo $data_mhs->kelas ?>"></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input type="text" name="jurusan" value="<?php echo $data_mhs->jurusan ?>"></td>
            </tr>
            <tr>
                <td>Asal Kota</td>
                <td>:</td>
                <td><input type="text" name="kota" value="<?php echo $data_mhs->kota ?>"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="submit_input" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>