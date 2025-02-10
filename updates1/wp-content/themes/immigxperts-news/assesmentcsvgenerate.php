<?php 
include('../../../wp-load.php');
if(isset($_POST['dcsv'])){
	// output headers so that the file is downloaded rather than displayed
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=data.csv');

// create a file pointer connected to the output stream
$output = fopen('php://output', 'w');

// output the column headings
fputcsv($output, array('ID', 'Date', 'first Name', 'Last Name', 'Email', 'Number', 'Best Time to Talk', 'Age', 'Industry', 'Nomination', 'Experience', 'Qualification','Applicant Resume', 'Spouse Resume'));

// fetch the data
$mm=$_REQUEST['month'];
//$yy=$_REQUEST['year'];
$rows = mysql_query("select * from wp_assesment where MONTH(as_date) = $mm order by as_date DESC") or die(mysql_error());

// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);

}
?>