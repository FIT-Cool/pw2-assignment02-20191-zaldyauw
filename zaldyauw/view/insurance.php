<?php

//  Block below for delete
$delCommand = filter_input(INPUT_GET, 'delcom');
if (isset($delCommand) && $delCommand == 1) {
    $id = filter_input(INPUT_GET, 'id');
    deleteInsurance($id);
}

//  Block below for insert
$submit = filter_input(INPUT_POST, 'btnSubmit');
if (isset($submit)) {
    $id = filter_input(INPUT_POST, 'txtId');
    $name = filter_input(INPUT_POST, 'txtName');
    addInsurance($id, $name);
}
?>

<form method="post" id="usrform">
    <fieldset>
        <legend>New Insurance</legend>
        <label for="txtNameIdx" class="form-label"></label>

        <b>ID</b><br>
        <input type="text" id="txtNameIdx" name="txtId" placeholder="ID" autofocus required class="form-input" size="80"><br><br>
        <b>Class Name</b><br>
        <input type="text" id="txtNameIdx" name="txtName" placeholder="Class Name" autofocus required class="form-input" size="80"><br><br>
        <br>

        <input type="submit" name="btnSubmit" value="Add Insurance" class="button-primary">
    </fieldset>
</form><br>

<table id="insurance" class="display">
    <thead>
        <tr>
            <th>ID</th>
            <th>Class Name</th>
            <th>Option</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $insurances = getAllInsurance();
        foreach ($insurances as $insurance) {
            echo '<tr>';
            echo '<td>' . $insurance['id'] . '</td>';
            echo '<td>' . $insurance['name_class'] . '</td>';
            echo '<td align="center"><button onclick="deleteInsurance(\'' . $insurance['id'] . '\');">Delete</button><button onclick="updateInsurance(\'' . $insurance['id'] . '\');">Update</button></td>';
            echo '</tr>';
        }
        ?>
    </tbody>
</table>