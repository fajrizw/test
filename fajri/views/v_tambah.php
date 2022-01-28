<!DOCTYPE html>
<html>
<body>
    <header>
    <td><a href = 'tambah.php'> Tambah Data </a></td>
        <h2> Formulir Pendaftaran Siswa </h2>
</header>

<?php
    $action = 'tambah.php';
    if (!empty($siswa)) $action = 'edit.php';
    
?>
<a href="./index.php">Home</a>
<form action="<?= $action ?>" method="POST">
<fieldset>

    NIS <input type="text" name="nis" value="<?= @$siswa['nis'] ?>"><br>
    Nama Lengkap <input type="text" name="nama_lengkap" value="<?= @$siswa['nama_lengkap'] ?>"><br>
    Jenis Kelamin<br>
    <input type="radio" name="jenis_kelamin" value="L" <?= @$siswa['jenis_kelamin'] == 'L' ? 'checked' : '' ?>>Laki-Laki<br>
    <input type="radio" name="jenis_kelamin" value="P" <?= @$siswa['jenis_kelamin'] == 'P' ? 'checked' : '' ?>>Perempuan<br>
    Kelas<br>
    <select name="id_kelas" class="select1"> 
    <option value="">[ Pilih Kelas ]</option>
        <?php while ($murid = @$dataKelas->fetch_array()) { ?>
        <option value="<?php echo $murid['id_kelas'] ?>" <?php echo @$siswa['id_kelas'] == $murid['id_kelas'] ? 'selected' : '' ?>> <?php echo $murid['nama_kelas'] ?>
        </option>
        <?php } ?>
        
    </select>

        
        <input type="submit" value="Submit">
        </fieldset>
            </form>
</body>
</html>
