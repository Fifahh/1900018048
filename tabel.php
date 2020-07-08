    <!DOCTYPE html>
    <html>
    <head>
    <title>Jadwal Les</title>
    <style>
    body {
      background-color: #FFF0F5;
    }
    </style>
    </head>
    <body>

    <body>
        <h1><center>Jadwal Les Kelas Online</center></h1>
        
        <?php 
         $nama=$tempat= $alamat=$kelamin=$agama=$kelas=$asal =$SMA=$Motivasi =" ";
        if($_SERVER['REQUEST_METHOD'] == "POST" ){
            $name = $_POST['name']; 
            $tempat = $_POST['tempat'];
            $TTL = $_POST['TTL'];
            $kelamin= $_POST['kelamin'];
            $agama = $_POST['Agama'];
            $kelas = $_POST['kelas'];
            $alamat = $_POST['Alamat'];
            $asal = $_POST['sekolah'];
            $Motivasi = $_POST['Motivasii'];
            $Paket = $_POST['Paket'];
            

            $fileopen = fopen("siswaLes.txt", "a+");

            fputs($fileopen, "$name | $tempat | $alamat| $TTL  | $kelamin |$agama |$kelas | $asal | $Paket | $Motivasi \n");
            fclose($fileopen);

        }
        
    ?>
    <table border="4" bgcolor="lavender" align="center" height="400" width="400" >
    <tr>
    <td>
    <?php
            $fileopen = fopen("siswaLes.txt", "a+");
            while($list = fgets($fileopen,200)){
            $batas = explode("|", $list);
            echo "<tr><td>Nama  </td><td>: $batas[0]</td></tr>";
            echo "<tr><td>Tempat  </td><td>: $batas[1]</td></tr>";
            echo "<tr><td>Alamat  </td><td>: $batas[2]</td></tr>";
            echo "<tr><td>Tanggal lahir  </td><td>: $batas[3]</td></tr>";
            echo "<tr><td>Jenis kelamin  </td><td>: $batas[4]</td></tr>";
            echo "<tr><td>Agama  </td><td>: $batas[5]</td></tr>";
            echo "<tr><td>Kelas  </td><td>: $batas[6]</td></tr>";
            echo "<tr><td>Sekolah  </td><td>: $batas[7]</td></tr>";
            echo "<tr><td>Motivasi  </td><td>: $batas[8]</td></tr>";
            echo "<tr><td>Paket  </td><td>: $batas[9]</td></tr>";
        }
           
    ?>
    </td>
    </tr>
        
    </table>
    </body>
    </html>
