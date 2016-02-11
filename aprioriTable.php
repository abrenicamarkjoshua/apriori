
<?php

//Frequent Itemsets
echo '<h1>Most frequent procedures</h1>';
$Apriori->printFreqItemsets();

// //Association Rules
 echo '<h1>Association Rules</h1>';
 $Apriori->printAssociationRules();


 //echo '<h3>Association Rules Array</h3>';
?>
<!-- <pre> -->
<?php 
//print_r($Apriori->getAssociationRules()); 
?>
<!-- </pre> -->
<?php
?>

