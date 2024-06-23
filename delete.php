<?php
$hostname = 'localhost';e
$username = 'root';
$password="";
$database = 'debit_credit-tracker';
//check if the ID parameter is provided
if(isset($_GET['ledger_id'])){
    $ledger_id = $_GET['ledger_id'];

    //prepare the sql query to delete the ledger entry
    $delete_ledger_query = "DELETE FROM `ledger` WHERE 'id'= $ledger_id ";
    $delete_ledger_result = $conn->query($delete_ledger_query);

    //Execute the query and check if it was sucessful
    if ($delete_ledger_query == true) {
        header('location:/web-tech/index.php');
    }else{
        echo "Error deleting ledger entry:", $stmt->error;
    }
    //close the statement
    $stmt->close();
}else{
    echo "No ID provided.";
}
//close the database-connection
$conn->close();
?>
