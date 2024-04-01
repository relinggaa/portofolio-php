<?php
$hostname="localhost";
$username="root";
$password="";
$database_name="dbporto";
$koneksi=mysqli_connect($hostname,$username,$password,$database_name);

if ($koneksi->connect_errno){
    echo "jancokk";
}


$pesan="";


function tampilData(){
    global $result;
    global $koneksi;
    $sql = "SELECT  * FROM contact";
    $result=$koneksi->query($sql);
    while($result->fetch_assoc()){
        return $result;
    }
 
} 
  




function simpanData($data){
    global $koneksi;
    global $pesan;
    if(isset($data["button"])){
    $namaLengkap=$data['nama-lengkap'];
    $email=$data["email"];
    $pesan=$data["pesan"];

    $sql="INSERT INTO contact (nama_lengkap,email,pesan)VALUES('$namaLengkap','$email','$pesan')";

    if($koneksi->query($sql)){
            $pesan="Pesan berhasil di kirim";
        }else{
            $pesan="Pesan gagal di kirim";
        }


}
}

function hapusData($id){
    global $result;
    global $koneksi;
    $sql = "DELETE FROM contact WHERE id='$id'";
    $result=$koneksi->query($sql);


    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Sukses Di Hapus')</script>";
        header("refresh:1;url=admin.php");
        
    } else {
        echo "<script>alert('Gagal Di Hapus')</script>";
        header("refresh:1;url=admin.php");
    
    }
}




?>