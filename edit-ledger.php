<?php
include './services/ledgerServices/fetchSingLeLedger.php';
//start output buffering to capture content for layout
ob_start();
?>
<form action="./services/ledgerServices/editLedger.php<?php echo isset($ledger_id)?'?ledger_id = ' .$ledger_id:'':?>"

<label for=""> Ledger Name</label>
<input type = "text" name="entity" value="<?php echo isset($ledger['entity']) ? htmlspecialchars($ledger['entity']):'';?>">
<button type="submit">Submit</button>
</form>
<?php 
$content = ob_get_clean();
include 'layout.php';
?>