<?php
$conn = mysqli_connect("localhost", "root", "","nambolu");
if(!$conn){
    echo "koneksi database gagal";
}