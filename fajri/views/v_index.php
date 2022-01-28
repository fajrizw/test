<table id="table">
<thead>
    <title>v_index</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <body>
        <header>
            <h1>Data Siswa</h1>
            <button><a href = 'tambah.php'> Tambah Data </a></button>

            <form method="GET" action ="index.php">
                Cari Berdasarkan NIS/Nama
                <input type="text" name="search" value="<?= @$search ?>">
                <button type="submit">Cari</button>

                <button type="button"><a href="logout.php">Logout</button> 
                
</form>

        </header>
      
      <tr class="center">
        <th>#</th>
        <th>NIS
        <a href ="index.php?sort=nis&order=asc">▲</a>  
        <a href ="index.php?sort=nis&order=desc">▼</a>  
        </th>
        <th>Nama Lengkap
        <a href ="index.php?sort=nama_lengkap&order=asc">▲</a>  
        <a href ="index.php?sort=nama_lengkap&order=desc">▼</a>  
        </th>
        <th>Jenis Kelamin</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th colspan="6" >Aksi
         </th>
        
     </tr>
     
     
   </thead>


<tbody>
    <?php
        $i = 1;
        while($siswa = $listSiswa->fetch_array()) {
            ?>
           <tr>

               <td><?= $i++ ?></td>
               <td><?= $siswa['nis']?></td>
               <td><?= $siswa['nama_lengkap']?></td>
               <td><?= $siswa['jenis_kelamin']?></td>
               <td><?= $siswa['nama_kelas']?></td>
               <td><?= $siswa['jurusan']?></td>
               
               
               <td>
                   <button><a href="edit.php?nis=<?= $siswa['nis'] ?>">Edit</a></button>
        </td>
        <td>
            <button><a href="hapus.php?nis=<?= $siswa['nis'] ?>">Hapus</a></button>
        </td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
        </body>
