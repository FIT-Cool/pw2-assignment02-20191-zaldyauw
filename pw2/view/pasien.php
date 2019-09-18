<?php
$add = filter_input(INPUT_POST, 'btnSubmit');
if (isset($add)) {
    $no = filter_input(INPUT_POST, 'txtNo');
    $id = filter_input(INPUT_POST, 'txtID');
    $name = filter_input(INPUT_POST, 'txtName');
    $alamat = filter_input(INPUT_POST, 'txtAlamat');
    $kota = filter_input(INPUT_POST, 'txtKota');
    $tanggal = filter_input(INPUT_POST, 'txtTanggal');
    $jenis = filter_input(INPUT_POST, 'NamaAsuransi');
    addPasien($no, $id, $name, $alamat, $kota, $tanggal, $jenis);
}
?>
<br/>
<br/>
<Form action="" method="post">
    <fieldset>
        <legend><b>Tambah Pasien</b></legend>
        <table>
            <tr>
                <td>No Pasien</td>
                <td>:</td>
                <td><input type="text" placeholder="No Pasien" name="txtNo"></td>
            </tr>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><input type="text" placeholder="ID Pasien" name="txtID"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" placeholder="Nama Pasien" name="txtName"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" placeholder="Alamat Pasien" name="txtAlamat"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" placeholder="Tempat Lahir Pasien" name="txtKota"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="txtTanggal"></td>
            </tr>
            <tr>
                <td>Jenis Asuransi</td>
                <td>:</td>
                <!-- <input type="text" placeholder="Jenis Asuransi" name="txtJenis"> -->
                <td><select name="NamaAsuransi">
                        <?php
                        $dataasuransi = getAllAsuransi();
                        foreach ($dataasuransi as $asuransi) {
                            echo '<option value="' . $asuransi['id'] . '">' . $asuransi['name_class'] . '</option>';
                        }
                        ?>
                    </select>
                </td>
            </tr>
        </table>
        <br/>
        <button type="submit" name="btnSubmit">ADD</button>
    </fieldset>
</Form>
<br/>
<br/>
<table id="myTable" text-align="center">
    <thead>
    <tr>
        <th>Nomor Checkup</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Tempat Ulang Tahun</th>
        <th>Tanggal Ulang Tahun</th>
        <th>Nomor Telephone</th>
        <th>Photo</th>
        <th>Asuransi</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $data = getAllPasien();
    foreach ($data as $datapasien) {
        echo '<tr>';
        echo '<td>' . $datapasien['med_record_number'] . '</td>';
        echo '<td>' . $datapasien['citizen_id_number'] . '</td>';
        echo '<td>' . $datapasien['name'] . '</td>';
        echo '<td>' . $datapasien['address'] . '</td>';
        echo '<td>' . $datapasien['birth_place'] . '</td>';
        echo '<td>' . $datapasien['birth_date'] . '</td>';
        echo '<td>' . $datapasien['phone_number'] . '</td>';
        echo '<td>' . $datapasien['photo'] . '</td>';
        echo '<td>' . $datapasien['name_class'] . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>