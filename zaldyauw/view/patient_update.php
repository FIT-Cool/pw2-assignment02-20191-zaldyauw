<?php

//  Block below for fetch data
$medrecnum = filter_input(INPUT_GET, 'medrecnum');
if (isset($medrecnum)) {
    $patient = getPatient($medrecnum);
}

$submitted = filter_input(INPUT_POST, 'btnUpdate');
if (isset($submitted)) {
    $citid = filter_input(INPUT_POST, 'txtCitid');
    $name = filter_input(INPUT_POST, 'txtName');
    $address = filter_input(INPUT_POST, 'txtAddress');
    $birthpla = filter_input(INPUT_POST, 'txtBirpla');
    $birthdate = filter_input(INPUT_POST, 'txtBirdate');
    $insid = filter_input(INPUT_POST, 'txtId');
    updatePatient($medrecnum, $citid, $name, $address, $birthpla, $birthdate, $insid);

    header("location:index.php?menu=p");
}

?>

<form method="post" id="usrform">
    <fieldset>
        <legend>Update Patient</legend>
        <label for="txtNameIdx" class="form-label"></label>

        <b>Citizen ID Number</b><br>
        <input type="text" id="txtNameIdx" name="txtCitid"
               placeholder="Citizen ID Number" autofocus required
               class="form-input" size="80"
               value="<?php echo $patient['citizen_id_number'];?>"><br><br>
        <b>Name</b><br>
        <input type="text" id="txtNameIdx" name="txtName"
               placeholder="Name" autofocus required
               class="form-input" size="80"
               value="<?php echo $patient['name'];?>"><br><br>
        <b>Address</b><br>
        <input type="text" id="txtNameIdx" name="txtAddress"
               placeholder="Address" autofocus required
               class="form-input" size="80"
               value="<?php echo $patient['address'];?>"><br><br>
        <b>Birth Place</b><br>
        <input type="text" id="txtNameIdx" name="txtBirpla"
               placeholder="Birth Place" autofocus required
               class="form-input" size="80"
               value="<?php echo $patient['birth_place'];?>"><br><br>
        <b>Birth Date</b><br>
        <input type="date" id="txtNameIdx" name="txtBirdate"
               placeholder="Birthdate" autofocus required
               class="form-input" size="80"
               value="<?php echo $patient['birth_date'];?>"><br><br>
        <b>Insurance</b><br>
        <input type="number" id="txtNameIdx" name="txtId"
               placeholder="Insurance" autofocus required
               class="form-input" size="80"
               value="<?php echo $patient['insurance_id'];?>"><br><br>
        <br>
        <input type="submit" name="btnUpdate" value="Update Patient" class="button-primary">
    </fieldset>
</form>
