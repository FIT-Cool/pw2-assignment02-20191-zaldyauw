<?php
$id = filter_input(INPUT_GET, 'id');
if (isset($id)) {
    $insurance = getInsurance($id);
}

$submitted = filter_input(INPUT_POST, 'btnUpdate');
if (isset($submitted)) {
    $name = filter_input(INPUT_POST, 'txtName');
    updateInsurance( $id    , $name);

    header("location:index.php?menu=i");
}
?>

<form method="post" id="usrform">
    <fieldset>
        <legend>Update Insurance</legend>
        <label for="txtNameIdx" class="form-label"></label>

        <b>Class Name</b><br>
        <input type="text" id="txtNameIdx" name="txtName"
               placeholder="Class Name" autofocus required
               class="form-input" size="80"
               value="<?php echo $insurance['name_class']?>"><br><br>
        <br>

        <input type="submit" name="btnUpdate" value="Update Insurance" class="button-primary">
    </fieldset>
</form>
