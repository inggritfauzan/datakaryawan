<table>
<form action="prosesubah.php" method="get" >
    <tr>
        <td>id</td>
        <td><input type="text" name="id" value="<?php echo $_GET['id']; ?>" readonly="true" />
        </td>
    </tr>
    <tr>
        <td>nama</td>
        <td><input type="text" name="nm" value="<?php echo $_GET['nm']; ?>" 
            />
        </td>
    </tr>
    <tr>
        <td>tanggal_lahir</td>
        <td><input type="text" name="tgl" value="<?php echo $_GET['tgl']; ?>"
            /></td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><input type="text" name="almt" value="<?php echo $_GET['almt']; ?>"
            /></td>
    </tr>
    <tr>
        <td>jenis_kelamin</td>
        <td><input type="text" name="jk" value="<?php echo $_GET['jk']; ?>"
            /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="ubah" value="Ubah" /></td>
    </tr>
</form>
</table>