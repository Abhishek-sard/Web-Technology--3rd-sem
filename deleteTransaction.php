<?php
$hostname = 'localhost';
$username = 'root';
$password="";
$database = 'debit_credit-tracker';
//check if the ID parameter is provided
if(isset($_GET['transaction_id'])){
    $transaction_id = $_GET['transaction_id'];

    //prepare the sql query to delete the ledger entry
    $delete_transaction_query = "DELETE FROM `transaction` WHERE 'id'= $transaction_id ";
    $delete_transaction_result = $conn->query($delete_transaction_query);

    //Execute the query and check if it was sucessful
    if ($delete_transaction_query == true) {
        header('location:/web-tech/index.php');
    }else{
        echo "Error deleting transaction entry:", $stmt->error;
    }
    //close the statement
    $stmt->close();
}else{
    echo "No ID provided.";
}
//close the database-connection
$conn->close();
?>
