<?php
try {
	// include the file for the database connection
	require_once('functions.php');
	// get database connection
	$dbconn = getConnection();

	// store the sql for a random quote, the sql wraps things using concat in an html 'wrapper'
	$sql = "select concat('<p>&#8220;',quotation,'&#8221;<br /><span class=\"author\">',author,'</span></p>') as quote from ct_quotations order by rand() limit 1";

	// execute the query
	$rsQuote = $dbconn->query($sql);

	// get the one offer returned
	$quote = $rsQuote->fetchObject();

	// display the offer
	echo $quote->quote;
}
catch (Exception $e) {
	echo "<p>Problem " . $e->getMessage()."</p>\n";
}
?>
