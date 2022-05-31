<?php



// $koneksi = mysqli_connect("localhost","root","","secreatmsg");

$koneksi = mysqli_connect("sql204.epizy.com", "epiz_31836249", "9o2gcW3NMD1XHH", "epiz_31836249_secreatmsg1");

$kopirek = "Yazz";

$update = "Update date : 31-05-2022";

$peringatan = "Mohon maaf apabila websitenya lemot, jika tidak tampil apa-apa, bisa refresh aja halamannya. Terima kasih.";

$hubungi = "Jika ada kendala, bisa hubungi saya di whatsapp saya <a href='https://api.whatsapp.com/send?phone=6281290215655' target='_blank'>081290215655</a>";

function query($query){

    global $koneksi;



    $result = mysqli_query($koneksi, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)){

        $rows[] = $row;

    }

    return $rows;

}



function tambahpost($data){

    global $koneksi;



    $nama = $data["nama"];

    $tgl = $data["tgl"];



    $query = "INSERT INTO postingan VALUES ('', '$nama', '$tgl')";



    mysqli_query($koneksi, $query);



    return mysqli_affected_rows($koneksi);

}



function tambahKomen($data){

    

    global $koneksi;

   $komen = $data['pesan'];

   $idP = $data['idPesan'];

   $idPostingan = $data["idPostingan"];

    

   // proses insert komentar ke database

   $query = "INSERT INTO komentar VALUES ('', '$idP', '$idPostingan', '$komen')";

   $hasil = mysqli_query($koneksi, $query);

}

function hapuspostingan($id){
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM postingan where idPostingan = $id"); // ini akan menghapus data dari table mahasiswa yg idnya sesuai dengan yg kita inginkan
    return mysqli_affected_rows($koneksi);
}

function hapuspesan($id, $idP){
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM pesan1 WHERE idPostingan=$id AND idPesan = $idP"); // ini akan menghapus data dari table mahasiswa yg idnya sesuai dengan yg kita inginkan
    return mysqli_affected_rows($koneksi);
}



?>