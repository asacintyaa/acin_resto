
<?php 
        include 'connect.php';
        
        if(isset($_POST['submit'])) {
         
      
        $nama =$_POST['Nama'];
        $email = $_POST['Email'];   
    
        $tanggal =$_POST['tanggal'];  
        $bulan =$_POST['bulan']; 
        $tahun =$_POST['tahun'];
        $jk =$_POST['JenisKelamin'];
        $pass = $_POST['Password'];
          
            $query = "INSERT INTO restoo VALUES (NULL, '$nama', '$pass', '$email', '$jk', '$tanggal', '$bulan', '$tahun')";
            $input = mysqli_query($dbconnect, $query);
            
            if(!$input) {
                die ("query gagal dijalankan: ".mysqli_errno($dbconnect). " - ".mysqli_error($dbconnect));
            }
          header("location:daftar.php");
        } 
?>
    