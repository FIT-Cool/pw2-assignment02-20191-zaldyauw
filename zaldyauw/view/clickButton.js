function deletePatient(medRecNum) {
    let confirmation = window.confirm("Are you sure to remove this patient?")
    if (confirmation) {
        window.location = "index.php?menu=p&delcom=1&medrecnum=" + medRecNum;
    }
}

function updatePatient(medRecNum) {
    window.location = "index.php?menu=pa_up&medrecnum=" + medRecNum;
}

function deleteInsurance(id) {
    let confirmation = window.confirm("Are you sure to remove this insurance?")
    if (confirmation) {
        window.location = "index.php?menu=i&delcom=1&id=" + id;
    }
}

function updateInsurance(id) {
    window.location = "index.php?menu=in_up&id=" + id;
}

function deleteUser(id) {
    let confirmation = window.confirm("Are you sure to remove this user?")
    if (confirmation) {
        window.location = "index.php?menu=u&delcom=1&id=" + id;
    }
}

function updateUser(id) {
    window.location = "index.php?menu=u_up&id=" + id;
}