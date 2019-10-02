<?php

function getAllInsurance() {
    $link = createMySQLConnection();
    $query = 'SELECT * FROM insurance;';
    $result = $link->query($query);
    $link = null;
    return $result;
}

function addInsurance($id, $name_class) {
    $link = createMySQLConnection();
    $link->beginTransaction();
    $query = 'INSERT INTO insurance(id, name_class) VALUES(?, ?)';
    $statement = $link->prepare($query);
    $statement->bindParam(1, $id, PDO::PARAM_INT);
    $statement->bindParam(2, $name_class, PDO::PARAM_STR);
    if ($statement->execute()) {
        $link->commit();
    } else {
        $link->rollBack();
    }
    $link = null;
}

function deleteInsurance($id) {
    $link = createMySQLConnection();
    $link->beginTransaction();
    $query = 'DELETE FROM insurance WHERE id = ?';
    $statement = $link->prepare($query);
    $statement->bindParam(1, $id, PDO::PARAM_INT);
    if ($statement->execute()) {
        $link->commit();
    } else {
        $link->rollBack();
    }
    $link = null;
}

function updateInsurance($id, $name) {
    $link = createMySQLConnection();
    $link->beginTransaction();
    $query = 'UPDATE insurance SET name_class = ? WHERE id = ?';
    $statement = $link->prepare($query);
    $statement->bindParam(1, $name, PDO::PARAM_STR);
    $statement->bindParam(2, $id, PDO::PARAM_INT);
    if ($statement->execute()) {
        $link->commit();
    } else {
        $link->rollBack();
    }
    $link = null;
}

function getInsurance($id) {
    $link = createMySQLConnection();
    $query = 'SELECT * FROM insurance WHERE id = ?';
    $statement = $link->prepare($query);
    $statement->bindParam(1, $id, PDO::PARAM_INT);
    $statement->execute();
    $result = $statement->fetch();
    $link = null;
    return $result;
}

?>