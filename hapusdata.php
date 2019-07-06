<table>
<form action="proseshapus.php" method="get" >
    <tr>
        <td>id</td>
        <td><input type="text" name="id" value="<?php echo $_GET['id']; ?>"
             readonly="true"/>
        </td>
    </tr>
    <tr>
        <td>nama</td>
        <td><input type="text" name="nama" value="<?php echo $_GET['nm']; ?>"
             readonly="true"/>
        </td>
    </tr>
    <tr>
        <td>tanggal_lahir</td>
        <td><input type="text" name="tgl" value="<?php echo $_GET['tgl']; ?>"
             readonly="true"/>
        </td>
    </tr>
    <tr>
        <td>alamat</td>
        <td><input type="text" name="almt" value="<?php echo $_GET['almt']; ?>"
             readonly="true"/>
        </td>
    </tr>
    <tr>
        <td>jenis_kelamin</td>
        <td><input type="text" name="jk" value="<?php echo $_GET['jk']; ?>"
             readonly="true"/>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="hapus" value="Hapus" /></td>
    </tr>
</form>
</table>