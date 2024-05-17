<?php
function loadtemplate($fileName, $templateVars) {
    ob_start();
    require $fileName;
    $output = ob_get_clean();

    return $output;
}



function insert($pdo, $table, $record) {
    $keys = array_keys($record);
    
    $values = implode(', ', $keys);
    $valuesWithColon = implode(', :', $keys);
    
    $query = 'INSERT INTO ' . $table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';
    
    $stmt = $pdo->prepare($query);
    
    
    $stmt->execute($record);
}

function find($pdo, $table, $field, $value) {
    $stmt = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $field . ' = :value');
    $criteria = [
        'value' => $value
    ];
    $stmt->execute($criteria);
    
    return $stmt->fetchAll();
}

function findAll($pdo, $table) {
    $stmt = $pdo->prepare('SELECT * FROM ' . $table );
    $stmt->execute();
    return $stmt->fetchAll();
}


function update($pdo, $table, $record, $primaryKey) {
    $query = 'UPDATE ' . $table . ' SET ';$parameters = [];
    foreach ($record as $key => $value) {
        $parameters[] = $key . ' = :' .$key;
    }
    $query .= implode(', ', $parameters);
    $query .= ' WHERE ' . $primaryKey . ' = :primaryKey';
    $record['primaryKey'] = $record[$primaryKey];
    $stmt = $pdo->prepare($query);
    $stmt->execute($record);
}

function save($pdo, $table, $record, $primaryKey) {
    if (empty($record[$primaryKey])) {
        unset($record[$primaryKey]);
    }
    try {
        insert($pdo, $table, $record);
    }
    catch (Exception $e) {
        update($pdo, $table, $record, $primaryKey);
    }
}


class DatabaseTable {
    public function find($pdo, $table, $field, $value) {
    $stmt = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $field . ' = :value');
    $criteria = [
    'value' => $value
    ];
    $stmt->execute($criteria);
    return $stmt->fetchAll();
    }
    public function delete($pdo, $table, $field, $value) {
    $stmt = $pdo->prepare('DELETE FROM ' . $table . ' WHERE ' . $field . ' = :value');
    $criteria = [
    'value' => $value
    ];
    $stmt->execute($criteria);
    }
    }

?>