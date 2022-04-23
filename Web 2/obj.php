<?php
require_once 'class_pasien.php';
require_once 'class_bmipasien.php';
require_once "form_bmi.php";
$pasien1 = new Pasien(121,'Ahmad',"L");
$pasien1->tmp_lahir = "Bogor";
$pasien1->email = "oplikhsan@gmail.com";
$pasien1->usia = 19;

$pasien2= new Pasien(122, 'Budi', "L");
$pasien2->tmmp_lahir = "Jakarta";
$pasien2->email = "budi123@gmail.com";
$pasien2->usia = 20;

$pasien3= new Pasien(123, 'Elsa', "P");
$pasien3->tmmp_lahir = "Jakarta";
$pasien3->email = "elsanur@gmail.com";
$pasien3->usia = 18;

$bmi1 = new Bmi(58, 168);
$nilai1 = $bmi1->nilai_bmi();
$bmi1->status_bmi();

$bmi2 = new Bmi(60, 165);
$bmi2->nilai_bmi();
$bmi2->status_bmi();

$bmi3 = new Bmi(48, 163);
$bmi3->nilai_bmi();
$bmi3->status_bmi();

$bmipasien1 = new BmiPasien($pasien1,$bmi1);
$bmipasien1->tanggal = "2022-04-9";

$bmipasien2 = new BmiPasien($pasien2,$bmi2);
$bmipasien2->tanggal = "2022-04-7";

$bmipasien3 = new BmiPasien($pasien3,$bmi3);
$bmipasien3->tanggal = "2022-04-8";

$_proses= isset($_POST['proses'])? $_POST['proses'] : '';        
$_id = isset($_POST['id'])? $_POST['id'] : '';        
$_nama = isset($_POST['nama'])? $_POST['nama'] : '';        
$_usia = isset($_POST['usia'])? $_POST['usia'] : '';        
$_gender = isset($_POST['gender'])? $_POST['gender'] : '';           
$_berat_badan = isset($_POST['berat_badan'])? $_POST['berat_badan'] : '';        
$_tinggi_badan = isset($_POST['tinggi_badan'])? $_POST['tinggi_badan'] : '';        
$_email = isset($_POST['email'])? $_POST['email'] : '';        
$_tanggal = isset($_POST['tanggal'])? $_POST['tanggal'] : '';  

$form_pasien = new Pasien($_id, $_nama, $_gender);
$form_pasien->email = $_email;
$form_pasien->usia = $_usia;

$bmi_pasien = new Bmi($_berat_badan, $_tinggi_badan);
$nilai =$bmi_pasien->nilai_bmi();
$bmi_pasien->status_bmi();

$hasil_bmipasien = new BmiPasien($form_pasien,$bmi_pasien);
$hasil_bmipasien->tanggal = $_tanggal;

 
$array =[$bmipasien1, $bmipasien2, $bmipasien3];
$array[] = $hasil_bmipasien;
?>
<?php
    if(isset($nilai)){
        echo  "<h2 style=text-align:center;font-weight:bold;margin-top:3%;>Nilai BMI anda adalah <span style=color:#2d87f3;> $nilai</span></h2>";
        if($nilai < 18.5){
             echo "<div style=text-align:center;><img src='dist/img/status/kurus.png' /> <p style=font-weight:bold;>Kekurangan Berat Badan <br><18.5 </p></div>" ;
            }elseif($nilai < 24.9){
                echo "<div style=text-align:center;><img src='dist/img/status/sehat.png' /> <p style=font-weight:bold;>Normal (ideal)<br>18.5 - 23.9</p></div>" ;
             }
            elseif($nilai < 26.9){
                echo "<div style=text-align:center;><img src='dist/img/status/kelebihan_bobot.png' /> <p style=font-weight:bold;>Kelebihan Bobot</p></div>" ;
             }
            elseif($nilai < 29.9){
                echo "<div style=text-align:center;><img src='dist/img/status/obesitas1.png' /> <p style=font-weight:bold;> Obesitas 1</p></div>" ;
             } else{
            echo "<div style=text-align:center;><img src='dist/img/status/obesitas2.png' /> <p style=font-weight:bold;>Obesitas 2</p></div>" ;
        }
        
       
}

?>


<h3 class="text-center">Hasil BMI Pasien</h3>
<table class="table table-bordered text-center" ;>
    <thead class="thead-light">
        <tr>
            <th>No</th>
            <th>Tanggal Periksa</th>
            <th>Id Pasien</th>
            <th>Nama Pasien</th>
            <th>email</th>
            <th>Gender</th>
            <th>Usia</th>
            <th>Berat(kg)</th>
            <th>Tinggi(cm)</th>
            <th>Nilai BMI</th>
            <th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach ($array as $obj){
        ?>
    </tbody>
    <tr>
        <td><?=$nomor?></td>
        <td><?=$obj->tanggal?></td>
        <td><?=$obj->pasien->id ?></td>
        <td><?=$obj->pasien->nama?></td>
        <td><?=$obj->pasien->email?></td>
        <td><?=$obj->pasien->gender?></td>
        <td><?=$obj->pasien->usia?></td>
        <td><?=$obj->bmi->berat_badan?></td>
        <td><?=$obj->bmi->tinggi_badan?></td>
        <td><?=$obj->bmi->nilai_bmi()?></td>
        <td><?=$obj->bmi->status_bmi()?></td>
    </tr>
    <?php
        $nomor++;
    }
    ?>
</table>

</div>
</body>

</html>