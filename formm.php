<html>
<head><title>Form Pendaftaran Akun Les Online</title></head>
<style>
  body {
      background-color: #FFF0F5;
    }
.error {color: #FF0000;}
</style>
<body>
  <form method="POST" action="tabel.php">
  <?php
$name_pesan= $tempat_pesan= $Tanggal_pesan= $alamat_pesan= $kelamin_pesan= $Agama_pesan= $kelas_pesan= $sekolah_pesan= $motivasi_pesan= $paket_pesan="";
$name = $tempat= $Tanggal= $Alamat= $kelamin= $Tanggal= $Agama= $kelas= $sekolah= $motivasi= $paket="";

//Cek apakah ada kiriman form dari method post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  //Cek apakah field name kosong ?
  if (empty($_POST["name"])) {
    $name_pesan = "Isi nama lengkap ";
  } else {
    $name = htmlspecialchars($_POST["name"]);
  }    
    if (empty($_POST["tempat"])) {
    $tempat_pesan = "Tempat lahir harus diisi";
  } else {
    $tempat = htmlspecialchars($_POST["tempat"]);
  
  }
    if (empty($_POST["Alamat"])) {
    $alamat_pesan = "Alamat harus diisi";
  } else {
    $Alamat = htmlspecialchars($_POST["Alamat"]);
  }    
  if (empty($_POST["kelamin"])) {
    $kelamin_pesan = "Kelamin harus dipilih";
  } else {
    $kelamin = htmlspecialchars($_POST["kelamin"]);
  }
  if (empty($_POST["Agama"])) {
    $Agama_pesan = "Agama harus dipilih";
  } else {
    $Agama= htmlspecialchars($_POST["Agama"]);
  }    
    if (empty($_POST["kelas"])) {
    $kelas_pesan = "Inputan kelas berupa angka";
  } else {
    $kelas = htmlspecialchars($_POST["kelas"]);
  }    
  if (empty($_POST["sekolah"])) {
    $sekolah_pesan = "Sekolah harus diisi dengan kombinasi angka dan huruf";
  } else {
    $sekolah = htmlspecialchars($_POST["sekolah"]);
  }    

}
?>

<table border="4" bgcolor="lavender" align="center" height="400" width="400" >
<tr>
<td>

<b><font color="blue" size="5"> PRIMAGAMA PALANGKARAYA </font></b>
<p> Primagama menyediakan kelas les online untuk pelajar SMA/MA untuk menunjang proses pembelajaran online. Silahkan mengisi data sebagai berikut untuk pendaftaran les online ini. </p>

<label><b>Nama lengkap </b></label><br> 
<input type="text" Name="name" size="46" >
<span class="error">* <?php echo $name_pesan;?></span>
<br>  

<label><b>Tempat lahir</b></label><br>  
<input type="text" Name="tempat" size="46" >
<span class="error">* <?php echo $tempat_pesan;?></span> <br>

<label><b>Tanggal Lahir</b></label><br> 
<input name="TTL" type="date"/><br>

<label><b>Alamat</b></label><br>  
<input type="text" Name="Alamat" size="46" >
<span class="error">* <?php echo $alamat_pesan;?></span> <br>

<label><b>Jenis kelamin</b></label><br> 
<input type="radio" name="kelamin" <?php if (isset($kelamin) && $kelamin=="perempuan") echo "checked";?> value="perempuan">perempuan
<input type="radio" name="kelamin" <?php if (isset($kelamin) && $kelamin=="laki-laki") echo "checked";?> value="laki-laki">laki-laki
<span class="error">* <?php echo $kelamin_pesan;?></span><br>

<label><b>Agama</b></label><br> 
<select name="Agama">
  <option>-</option>
  <option>Islam</option>
  <option>Kristen</option>
  <option>Katolik</option>
  <option>Hindu</option>
  <option>Budha</option>
</select>
<span class="error">* <?php echo $Agama_pesan;?></span>
  <br>

<label><b>Kelas</b></label><br> 
<input type="number" Name="kelas" size="46" placeholder="Hanya isi dengan angka">
<span class="error">* <?php echo $kelas_pesan;?></span> <br>

<label><b>Asal sekolah</b></label><br>  
<input type="text" Name="sekolah" size="46" placeholder="kombinasi huruf dan angka">
<span class="error">* <?php echo $sekolah_pesan;?></span><br>


<div class="form-group">
  <label><b>Motivasi</b></label>
  <label for="Motivasi" /label><br>
  <textarea name="Motivasii" placeholder="Motivasi mengikuti les"></textarea>
</div>

<label><b>Paket les</b></label>
<select name="Paket">
<option>-</option>
<option value="Mata Pelajaran IPA">Mata Pelajaran IPA : Matematika Wajib, Matematika peminatan,Kimia, Fisika dan Biologi</option>
<option value="Mata Pelajaran IPS">Mata Pelajaran IPS : Matematika Wajib, Geografi, Sejarah, dan Akutansi</option>
<option value="Mata Pelajaran Bahasa">Mata Pelajaran Bahasa : Bahasa Indonesia, Bahasa Inggris, Bahasa Jerman, Bahasa Jepang dan Bahasa Mandarin</option>
<option value="Mata Pelajaran Agama">Mata Pelajaran Agama : Aqidah akhlak, Fiqih, Sejarah Islam, Quran Hadits, Bahasa Arab</option>
</select>
<br><br>

<div >
     <input type="submit" value="Kirim" />
     <input type="reset" value="Reset" onclick="return confirm('Data yang anda input akan dihapus?')">
    </div><br><br>
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $tempat;
echo "<br>";
echo $Alamat;
echo "<br>";
echo $kelamin;
echo "<br>";
echo $Tanggal;
echo "<br>";
echo $Agama;
echo "<br>";
echo $kelas;
echo "<br>";
echo $sekolah;
echo "<br>";
echo $motivasi;
echo "<br>";
echo $paket;
echo "<br>";
?>
</td>
</tr>
</table>
</body>
</html>
