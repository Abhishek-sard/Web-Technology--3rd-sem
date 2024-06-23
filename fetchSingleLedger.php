<?php
$hostname = 'localhost';
$username = 'root';
$password="";
$database = 'debit_credit-tracker';
//check if the ID parameter is provided
if (isset($_GET['ledger_id'])) {
    $ledger_id = intval($_GET['ledger_id']);

    //prepare the SQL query to fetch the ledger entry
    $fetch_ledger_query = "SELECT * FROM `ledger` WHERE `id` = $ledger_id";
    $fetch_ledger_result = $conn->query($fetch_ledger_query);

    //fetch the result
    if ($fetch_ledger_result->num_rows>0) {
        $ledger_id = $fetch_ledger_result->fetch_assoc();
    }
    else {
        echo "NO ID PROVIDED";
    }
    //close the databse connection
    $conn_close();
}