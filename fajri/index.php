<?php
        include 'lib/library.php';

        $success = flash('success');
        $error = flash('error');
        
        cek_login();
        
        $sql = 'SELECT * FROM siswa INNER JOIN kelas ON(siswa.id_kelas = kelas.id_kelas)';

        $data = $mysqli->query($sql) or die($mysqli->error);
        
        $search = @$_GET['search'];
        if (!empty($search)) $sql .= " WHERE nis LIKE '%$search%' OR nama_lengkap LIKE '%$search%'";

$order_field = @$_GET['sort'];
$order_mode = @$_GET['order'];

        if (!empty($order_field) && !empty($order_mode)) $sql .= " ORDER BY $order_field $order_mode";
        
        $listSiswa = $mysqli->query($sql);

        include 'views/v_index.php';
        ?>