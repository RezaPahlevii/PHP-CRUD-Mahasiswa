<?php
//koneksi
include "koneksi.php";
//jika tombol simpan di klik
if(isset($_POST['bsimpan'])){
    //persiapan simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO tmhs (nim, nama, alamat, jenis_kelamin, prodi)
                                    VALUES ('$_POST[tnim]',
                                            '$_POST[tnama]',
                                            '$_POST[talamat]',
                                            '$_POST[tjk]',
                                            '$_POST[tprodi]')");
    //jika simpan sukses
    if($simpan){
        echo "<script> alert('Simpan data sukses');
        document.location='index.php';
        </script>";    
    } else {
        echo "<script> alert('Simpan data gagal');
        document.location='index.php';
        </script>";  
    }
}
//jika tombol ubah di klik
if(isset($_POST['bubah'])){
    //persiapan ubah data 
    $ubah = mysqli_query($koneksi, "UPDATE tmhs SET 
                            nim = '$_POST[tnim]',
                            nama = '$_POST[tnama]',
                            alamat = '$_POST[talamat]',
                            jenis_kelamin = '$_POST[tjk]',
                            prodi = '$_POST[tprodi]'
                            WHERE id_mhs = '$_POST[id_mhs]'
                            ");
    //jika Ubah sukses
    if($ubah){
        echo "<script> alert('Ubah data sukses');
        document.location='index.php';
        </script>";    
    } else {
        echo "<script> alert('Ubah data gagal');
        document.location='index.php';
        </script>";  
    }
}

//jika tombol Hapus di klik
if(isset($_POST['bhapus'])){
    //persiapan Hapus data 
    $hapus = mysqli_query($koneksi, "DELETE FROM tmhs WHERE id_mhs = '$_POST[id_mhs]' ");
    //jika Hapus sukses
    if($hapus){
        echo "<script> alert('Hapus data sukses');
        document.location='index.php';
        </script>";    
    } else {
        echo "<script> alert('Hapus data gagal');
        document.location='index.php';
        </script>";  
    }
}

?>