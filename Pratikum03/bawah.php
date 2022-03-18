<div class="row bg-light pt-3">
    <div class="col-12">
        <p>Sistem Penilaian Mahasiswa Nurul Fikri</p>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <p>Form Nilai Mahasiswa</p>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form method="POST">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                <div class="col-5">
                    <input id="nama" name="nama" placeholder="masukan nama lengkap" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Select</label>
                <div class="col-5">
                    <select id="select" name="select" class="custom-select">
                        <option value="ddp">Dasar - Dasar Program</option>
                        <option value="pemweb">Pemrograman Web II</option>
                        <option value="bd">Basis Data</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                <div class="col-3">
                    <input id="nilai_uts" name="nilai_uts" placeholder="masukan nilai uts" type="text"
                        class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                <div class="col-3">
                    <input id="nilai_uas" name="nilai_uas" placeholder="masukan nilai uas" type="text"
                        class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas</label>
                <div class="col-3">
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="masukan nilai tugas" type="text"
                        class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="proses" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <?php
                    require_once "libfungsi.php";
                    $proses = isset($_POST['proses']) ? $_POST['proses'] : '';
                    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
                    $matkul = isset($_POST['matkul']) ? $_POST['matkul'] : '';
                    $nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
                    $nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
                    $nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

                    echo "Nama Lengkap : $nama";
                    echo "<br>Mata Kuliah : $matkul";
                    echo "<br>Nilai UTS : $nilai_uts";
                    echo "<br>Nilai UAS : $nilai_uas";
                    echo "<br>Nilai Tugas : $nilai_tugas";
                    $nilai_ahir = persentase($nilai_uts, $nilai_uas, $nilai_tugas);
                    $kelulusan = lulus($nilai_ahir);
                    $grade_nilai = grade($nilai_ahir);
                    $predikat_nilai = predikat($grade_nilai);
                    echo "<br>Nilai Akhir : $nilai_ahir";
                    echo "<br>Status : $kelulusan";                    
                    echo "<br>Grade Nilai : $grade_nilai"; 
                    echo "<br>Predikat Nilai : $predikat_nilai";                     
                ?>
    </div>
</div>
<div class="row">
    <div class="col-12 bg-light pt-3">
        <p>Develop by Mahasiswa STT NF</p>
    </div>
</div>
</div>
</body>

</html>