<html>
<head><title>Form Pendaftaran Akun Les Online</title></head>
<style>
.error {color: #FF0000;}
</style>
<body>
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
<p> Primagama menyediakan kelas online untuk pelajar SMA/MA untuk menunjang proses pembelajaran online. Silahkan mengisi data sebagai berikut untuk pendaftaran. </p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

<input type="text" Name="name" size="46" placeholder="Nama Lengkap">
<span class="error">* <?php echo $name_pesan;?></span>

<input type="text" Name="tempat" size="46" placeholder="Tempat lahir">
<span class="error">* <?php echo $tempat_pesan;?></span> <br>

<label><b>Tanggal Lahir</b></label>
<input type="date"/><br>

<input type="text" Name="Alamat" size="46" placeholder="Alamat Rumah">
<span class="error">* <?php echo $alamat_pesan;?></span> <br>

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
  <br><br>

<input type="number" Name="kelas" size="46" placeholder="kelas">
<span class="error">* <?php echo $kelas_pesan;?></span> <br>

<input type="text" Name="sekolah" size="46" placeholder="Asal Sekolah"><br>
<span class="error">* <?php echo $sekolah_pesan;?></span><br>


<div class="form-group">
  <label for="Motivasi"><b>Motivasi mengikuti les:</b></label><br>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>

<p><b> Paket les </b></p>
<select name="SMA">
<option>-</option>
<option value="Mata Pelajaran IPA">Mata Pelajaran IPA : Matematika Wajib, Matematika peminatan,Kimia, Fisika dan Biologi</option>
<option value="Mata Pelajaran IPS">Mata Pelajaran IPS : Matematika Wajib, Geografi, Sejarah, dan Akutansi</option>
<option value="Mata Pelajaran Bahasa">Mata Pelajaran Bahasa : Bahasa Indonesia, Bahasa Inggris, Bahasa Jerman, Bahasa Jepang dan Bahasa Mandarin</option>
<option value="Mata Pelajaran Agama">Mata Pelajaran Agama : Aqidah akhlak, Fiqih, Sejarah Islam, Quran Hadits, Bahasa Arab</option>
</select>
<br><br>

<div >
     <input type="submit" value="Kirim" />
     <input type="reset" value="reset" onclick="return confirm('Data yang anda input akan dihapus?')">
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
</body>
</html>