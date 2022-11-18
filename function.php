<?php

// Open Koneksi DB
$c = mysqli_connect('localhost','root','','db_rumahsakit');
// Close Koneksi DB

// =========================================================

// Open Data Pasien
// Insert Pasien
if(isset ($_POST['tambahpasien'])) {
    $kode_pasien = $_POST ['kode_pasien'];
    $nama_pasien = $_POST ['nama_pasien']; 
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $tgl_lahir = $_POST ['tgl_lahir'];
    $alamat_pasien = $_POST ['alamat_pasien'];
    $no_telp = $_POST ['no_telp'];

    $insert = mysqli_query($c,"INSERT INTO tbl_pasien (kode_pasien, nama_pasien, jenis_kelamin, tgl_lahir, alamat_pasien, no_telp) values('$kode_pasien', '$nama_pasien', '$jenis_kelamin', '$tgl_lahir', '$alamat_pasien', '$no_telp')");

    if($insert) {
        header('location:pasien.php');
    } else {
        header('location:index.php');
    }
}
// Edit Pasien
if(isset ($_POST['editpasien'])){
    $idp = $_POST ['kode_pasien'];
    $nama_pasien = $_POST ['nama_pasien']; 
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $tgl_lahir = $_POST ['tgl_lahir'];
    $alamat_pasien = $_POST ['alamat_pasien'];
    $no_telp = $_POST ['no_telp'];

    $edit = mysqli_query($c, "UPDATE tbl_pasien SET nama_pasien='$nama_pasien', jenis_kelamin='$jenis_kelamin', tgl_lahir='$tgl_lahir', alamat_pasien='$alamat_pasien', no_telp='$no_telp' WHERE kode_pasien = '$idp'");

    if($edit) {
        header('location:pasien.php');
    } else {
        header('location:index.php');
    }
}
// Delete Pasien
if(isset($_POST['hapuspasien'])) {
    $idp = $_POST ['idp'];

    $hapus = mysqli_query($c, "DELETE FROM tbl_pasien WHERE kode_pasien ='$idp'");
    if($hapus) {
        header('location:pasien.php');
    } else {
        header('location:index.php');
    }
}
// Close Data Pasien

// =========================================================

// Open Data Dokter
// Insert Dokter
if(isset ($_POST['tambahdokter'])) {
    $kode_dokter = $_POST ['kode_dokter'];
    $nama_dokter = $_POST ['nama_dokter'];
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $alamat = $_POST ['alamat'];
    $no_tlp = $_POST ['no_tlp'];
    $spesialis = $_POST ['spesialis'];
    
    $insert = mysqli_query($c,"INSERT INTO tbl_dokter (kode_dokter, nama_dokter, jenis_kelamin, spesialis, alamat, no_tlp) values('$kode_dokter', '$nama_dokter', '$jenis_kelamin', '$spesialis', '$alamat', '$no_tlp')");

    if($insert) {
        header('location:dokter.php');
    } else {
        header('location:index.php');
    }
}
// Edit Dokter
if(isset ($_POST['editdokter'])){
    $idd = $_POST ['kode_dokter'];
    $nama_dokter = $_POST ['nama_dokter'];
    $jenis_kelamin = $_POST ['jenis_kelamin'];
    $alamat = $_POST ['alamat'];
    $no_tlp = $_POST ['no_tlp'];
    $spesialis = $_POST ['spesialis'];

    $edit = mysqli_query($c, "UPDATE tbl_dokter SET nama_dokter='$nama_dokter', jenis_kelamin='$jenis_kelamin', spesialis='$spesialis', alamat='$alamat', no_tlp='$no_tlp' WHERE kode_dokter = '$idd'");

    if($edit) {
        header('location:dokter.php');
    } else {
        header('location:index.php');
    }
}
// Delete Dokter
if(isset($_POST['hapusdokter'])) {
    $idd = $_POST ['idd'];

    $hapus = mysqli_query($c, "DELETE FROM tbl_dokter WHERE kode_dokter ='$idd'");
    if($hapus) {
        header('location:dokter.php');
    } else {
        header('location:index.php');
    }
}
// Close Data Dokter

// =========================================================

// Open Data Obat
// Insert Obat
if(isset ($_POST['tambahobat'])) {
    $kode_obat = $_POST ['kode_obat'];
    $nama_obat = $_POST ['nama_obat'];
    $stok_obat = $_POST ['stok_obat'];
    $jenis_obat = $_POST ['jenis_obat'];
    $harga_obat = $_POST ['harga_obat'];
    
    $insert = mysqli_query($c,"INSERT INTO tbl_obat (kode_obat, nama_obat, stok_obat, jenis_obat, harga_obat) values('$kode_obat', '$nama_obat', '$stok_obat', '$jenis_obat', '$harga_obat')");

    if($insert) {
        header('location:obat.php');
    } else {
        header('location:index.php');
    }
}
// Edit Obat
if(isset ($_POST['editobat'])){
    $ido = $_POST ['kode_obat'];
    $nama_obat = $_POST ['nama_obat'];
    $stok_obat = $_POST ['stok_obat'];
    $jenis_obat = $_POST ['jenis_obat'];
    $harga_obat = $_POST ['harga_obat'];

    $edit = mysqli_query($c, "UPDATE tbl_obat SET nama_obat='$nama_obat', stok_obat='$stok_obat', jenis_obat='$jenis_obat', harga_obat='$harga_obat' WHERE kode_obat = '$ido'");

    if($edit) {
        header('location:obat.php');
    } else {
        header('location:index.php');
    }
}
// Delete Obat
if(isset($_POST['hapusobat'])) {
    $ido = $_POST ['ido'];

    $hapus = mysqli_query($c, "DELETE FROM tbl_obat WHERE kode_obat ='$ido'");
    if($hapus) {
        header('location:obat.php');
    } else {
        header('location:index.php');
    }
}
// Close Data Obat

// =========================================================

// Open Data Jadwal
// Insert Jadwal
if(isset($_POST['tambahjadwal'])){
    $kode_jadwal = $_POST ['kode_jadwal'];
    $nama_jadwal = $_POST ['nama_jadwal'];
    $kode_dokter = $_POST ['kode_dokter'];
    $hari = $_POST ['hari'];
    $jam = $_POST ['jam'];

    $insert = mysqli_query($c, "INSERT INTO tbl_jadwal (kode_jadwal, nama_jadwal, kode_dokter, hari, jam) values ('$kode_jadwal', '$nama_jadwal', '$kode_dokter', '$hari', '$jam')");

    if($insert) {
        header('location:jadwal.php');
    } else {
        header('location:index.php');
    }
}
// Edit Jadwal
if(isset ($_POST['editjadwal'])){
    $idj = $_POST ['kode_jadwal'];
    $nama_jadwal = $_POST ['nama_jadwal'];
    $kode_dokter = $_POST ['kode_dokter'];
    $hari = $_POST ['hari'];
    $jam = $_POST ['jam'];

    $edit = mysqli_query($c, "UPDATE tbl_jadwal SET nama_jadwal='$nama_jadwal', kode_dokter='$kode_dokter', hari='$hari', jam='$jam' WHERE kode_jadwal = '$idj'");

    if($edit) {
        header('location:jadwal.php');
    } else {
        header('location:index.php');
    }
}
// Delete Jadwal
if(isset($_POST['hapusjadwal'])) {
    $idj = $_POST ['idj'];

    $hapus = mysqli_query($c, "DELETE FROM tbl_jadwal WHERE kode_jadwal ='$idj'");
    if($hapus) {
        header('location:jadwal.php');
    } else {
        header('location:index.php');
    }
}
// Close Data Jadwal

// =========================================================

// Open Data Rekam Medis
// Insert Rekam Medis
if(isset ($_POST['tambahrekam'])){
    $kode_rekam_medis = $_POST ['kode_rekam_medis'];
    $tgl_rekam_medis = $_POST ['tgl_rekam_medis'];
    $kode_pasien = $_POST ['kode_pasien'];
    $kode_jadwal = $_POST ['kode_jadwal'];
    $diagnosa = $_POST ['diagnosa'];
    $resep_obat = $_POST ['resep_obat'];

    $insert = mysqli_query($c, "INSERT INTO tbl_rekammedis (kode_rekam_medis, tgl_rekam_medis, kode_pasien, kode_jadwal, diagnosa, resep_obat) values ('$kode_rekam_medis', '$tgl_rekam_medis', '$kode_pasien', '$kode_jadwal', '$diagnosa', '$resep_obat')");

    if($insert){
        header('location:rekam_medis.php');
    } else {
        header('location:index.php');
    }
}
// Edit Rekam Medis
if(isset ($_POST['editrekam'])){
    $idr = $_POST ['idr'];
    $tgl_rekam_medis = $_POST ['tgl_rekam_medis'];
    $kode_pasien = $_POST ['kode_pasien'];
    $kode_jadwal = $_POST ['kode_jadwal'];
    $diagnosa = $_POST ['diagnosa'];
    $resep_obat = $_POST ['resep_obat'];

    $edit = mysqli_query($c, "UPDATE tbl_rekammedis SET tgl_rekam_medis='$tgl_rekam_medis', kode_pasien='$kode_pasien', kode_jadwal='$kode_jadwal', diagnosa='$diagnosa', resep_obat='$resep_obat' WHERE kode_rekam_medis='$idr'");

    if($edit){
        header('location:rekam_medis.php');
    } else {
        header('location:index.php');
    }

}
// if(isset ($_POST['editrekammedis'])){
//     $idr = $_POST ['kode_rekam_medis'];
//     $tgl_rekam_medis = $_POST ['kode_rekam_medis'];
//     $kode_pasien = $_POST ['kode_pasien'];
//     $kode_jadwal = $_POST ['kode_jadwal'];
//     $diagnosa = $_POST ['diagnosa'];
//     $resep_obat = $_POST ['resep_obat'];

//     $edit = mysqli_query($c, "UPDATE tbl_rekammedis SET kode_pasien='$kode_pasien', kode_jadwal='$kode_jadwal', diagnosa='$diagnosa', resep_obat='$resep_obat' WHERE kode_rekam_medis = '$idr'");

//     if($edit) {
//         header('location:rekam_medis.php');
//     } else {
//         header('location:index.php');
//     }
// }
// Delete Rekam Medis
if(isset($_POST['hapusrekam'])) {
    $idr = $_POST ['idr'];

    $hapus = mysqli_query($c, "DELETE FROM tbl_rekammedis WHERE kode_rekam_medis ='$idr'");
    if($hapus) {
        header('location:rekam_medis.php');
    } else {
        header('location:index.php');
    }
}
// Close Data Rekam Medis

// =========================================================

// Open Data Transaksi
// Insert Transaksi
if(isset ($_POST['tambahtransaksi'])){
    $kode_transaksi = $_POST ['kode_transaksi'];
    $tgl_transaksi = $_POST ['tgl_transaksi'];
    $kode_pasien = $_POST ['kode_pasien'];

    $insert = mysqli_query($c,"INSERT INTO tbl_transaksi (kode_transaksi, tgl_transaksi, kode_pasien) values('$kode_transaksi', '$tgl_transaksi', '$kode_pasien')");

    if($insert) {
        header('location:transaksi_detail.php?idt='.$kode_transaksi);
    } else {
        header('location:index.php');
    }
}
// Edit Transaksi

// Delete Transaksi
if(isset($_POST['hapustransaksi'])) {
    $idt = $_POST ['idt'];
    $kode_detail = $_POST ['kode_detail'];

    $cekdata = mysqli_query($c, "SELECT * FROM tbl_transaksi t, tbl_detail_transaksi d WHERE t.kode_transaksi = d.kode_transaksi AND d.kode_transaksi ='$idt'");

    while($ok = mysqli_fetch_array($cekdata)){
        // Kembalikan stok
        $jumlah_obat = $ok ['jumlah_obat'];
        $kode_obat = $ok ['kode_obat'];
        $kode_detail = $ok ['kode_detail'];

        // Hitung Stok
        $ceks1 = mysqli_query($c, "SELECT * FROM tbl_obat WHERE kode_obat = '$kode_obat' ");
        $ceks2 = mysqli_fetch_array($ceks1);
        $cekstokskg = $ceks2['stok_obat'];

        $newstok = $cekstokskg + $jumlah_obat;
        $queryupdate = mysqli_query($c, "UPDATE tbl_obat SET stok_obat = '$newstok' WHERE kode_obat = '$kode_obat'");

        // Hapus Data
        $querydelete = mysqli_query($c, "DELETE FROM tbl_detail_transaksi WHERE kode_detail = '$kode_detail'");
    }

    $hapus = mysqli_query($c, "DELETE FROM tbl_transaksi WHERE kode_transaksi ='$idt'");
    if($queryupdate && $queryupdate && $hapus) {
        header('location:transaksi.php');
    } else {
        header('location:index.php');
    }
}
// Close Data Transaksi

// =========================================================

// Open Data Transaksi Detail
// Insert Transaksi Detail
if(isset ($_POST['tambahdetail'])){
    $idt = $_POST ['idt'];
    $kode_obat = $_POST ['kode_obat'];
    $jumlah_obat = $_POST ['jumlah_obat'];

    // Hitung Stok
    $hitung1 = mysqli_query($c, "SELECT * FROM tbl_obat WHERE kode_obat = '$kode_obat' ");
    $hitung2 = mysqli_fetch_array($hitung1);
    $stoksekarang = $hitung2['stok_obat'];

    if($stoksekarang >= $jumlah_obat){
        // kurangi stok
        $selisih = $stoksekarang-$jumlah_obat;
        
        // stok cukup
        $insert = mysqli_query($c,"INSERT INTO tbl_detail_transaksi (kode_transaksi, kode_obat, jumlah_obat) values('$idt', '$kode_obat', '$jumlah_obat')");

        $update = mysqli_query($c, "UPDATE tbl_obat SET stok_obat='$selisih' WHERE kode_obat='$kode_obat'");

        if($insert&&$update) {
            header('location:transaksi_detail.php?idt='.$idt);
        } else {
            header('location:transaksi.php');
        }
    } else {
        // Stok kurang
        echo '
        <script>
        alert("Stok Tidak Cukup");
        window.location.href="transaksi_detail.php?idt='.$idt.'"
        </script>
        ';
    }
    
    // $insert = mysqli_query($c,"INSERT INTO tbl_detail_transaksi (kode_transaksi, kode_obat, jumlah_obat) values('$idt', '$kode_obat', '$jumlah_obat')");

    // if($insert) {
    //     header('location:transaksi_detail.php?idt='.$idt);
    // } else {
    //     header('location:transaksi.php');
    // }
}
// Edit Transaksi Detail
if(isset ($_POST['editdetail'])){
    $kdd = $_POST ['kdd'];
    $idt = $_POST ['idt'];
    $kode_obat = $_POST ['kode_obat'];
    $nama_obat = $_POST ['nama_obat'];
    $jumlah_obat = $_POST ['jumlah_obat'];

    // jml sekarang
    $jml1 = mysqli_query($c, "SELECT * FROM tbl_detail_transaksi WHERE kode_detail = '$kdd'");
    $jml2 = mysqli_fetch_array($jml1);
    $jmlskg = $jml2['jumlah_obat'];

    // stok sekarang
    $stok1 = mysqli_query($c, "SELECT * FROM tbl_obat WHERE kode_obat = '$kode_obat'");
    $stok2 = mysqli_fetch_array($stok1);
    $stokskg = $stok2['stok_obat'];

    if($jumlah_obat >= $jmlskg){
        $selisih = $jumlah_obat - $jmlskg;
        $jmlstk = $stokskg - $selisih;

        $query1 = mysqli_query($c, "UPDATE tbl_detail_transaksi SET jumlah_obat = '$jumlah_obat' WHERE kode_detail = '$kdd'");
        $query2 = mysqli_query($c, "UPDATE tbl_obat SET stok_obat = '$jmlstk' WHERE kode_obat = '$kode_obat'");

        if($query1 && $query2){
            header('location:transaksi_detail.php?idt='.$idt);
        } else {
            header('location:transaksi.php');
        }

    } else {
        $selisih = $jmlskg - $jumlah_obat;
        $jmlstk = $stokskg + $selisih;

        $query1 = mysqli_query($c, "UPDATE tbl_detail_transaksi SET jumlah_obat = '$jumlah_obat' WHERE kode_detail = '$kdd'");
        $query2 = mysqli_query($c, "UPDATE tbl_obat SET stok_obat = '$jmlstk' WHERE kode_obat = '$kode_obat'");

        if($query1 && $query2){
            header('location:transaksi_detail.php?idt='.$idt);
        } else {
            header('location:transaksi.php');
        }
    }

    // $edit = mysqli_query($c, "UPDATE tbl_detail_transaksi SET jumlah_obat='$jumlah_obat' WHERE kode_transaksi = '$idt' AND kode_obat = '$kode_obat'");

    // if($edit) {
    //     header('location:transaksi_detail.php?idt='.$idt);
    // } else {
    //     header('location:transaksi.php');
    // }
}

// Delete Transaksi Detail
if(isset($_POST['hapustransaksidetail'])) {
    $kdd = $_POST ['kdd'];
    $idt = $_POST ['idt'];
    $kode_obat = $_POST ['kode_obat'];

    // Hitung jumlah
    $cek1 = mysqli_query($c, "SELECT * FROM tbl_detail_transaksi WHERE kode_detail = '$kdd'");
    $cek2 = mysqli_fetch_array($cek1);
    $jmlskg = $cek2['jumlah_obat'];

    // Cek stok
    $cek3 = mysqli_query($c, "SELECT * FROM tbl_obat WHERE kode_obat = '$kode_obat'");
    $cek4 = mysqli_fetch_array($cek3);
    $stokskg = $cek4['stok_obat'];

    $hitungs = $stokskg+$jmlskg;

    $update = mysqli_query($c, "UPDATE tbl_obat SET stok_obat = '$hitungs' WHERE kode_obat = '$kode_obat'");
    $hapus = mysqli_query($c, "DELETE FROM tbl_detail_transaksi WHERE kode_transaksi ='$idt' AND kode_obat ='$kode_obat'");

    if($update&&$hapus) {
        header('location:transaksi_detail.php?idt='.$idt);
    } else {
        header('location:transaksi.php');
    }


    // $hapus = mysqli_query($c, "DELETE FROM tbl_detail_transaksi WHERE kode_transaksi ='$idt' AND kode_obat ='$kode_obat'");

    // if($hapus) {
    //     header('location:transaksi_detail.php?idt='.$idt);
    // } else {
    //     header('location:transaksi.php');
    // }
}

// Close Data Transaksi Detail

?>