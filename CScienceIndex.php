<!doctype html>

	<head>
		<link rel="stylesheet" href="CScience.css" />
	</head>
	
			<title>Welcome to C-Science!</title>
	
	<navbar>
	 <!-- home history  topics  learning  support  careers -->
	 <ul>
  <li><a href="CScienceIndex.php">home page</a></li>
  <li><a href="CScienceLearn.php">Learn</a></li>
  <li><a href="CScienceHis.php">History</a></li>
  <li><a href="CScienceCareer.php">Compunting fields</a></li>
   <li><a href="CScienceSupp.php">Computer science help</a></li>
   <li><a href="CScienceTopics.php">Computer science Topics</a></li>
</ul>
	</navbar>


<body>
  <?php
	    require_once ('functions.php');
    ?>
<div>
        <label>Change Webpage To:</label>
            <button type="button" onclick="makePink('Pink');">Pink</button>
            <button type="button" onclick="makeWhite('White');">White</button>

            <script>
                function makePink(){
                    document.body.style.backgroundColor = "Pink";
                }//makePink()

                const g_pinkBack = document.getElementById("Pink");
                g_pinkBack.onclick = makePink;

                function makeWhite(){
                    document.body.style.backgroundColor = "White";
                }//makePurple()

                const g_whiteBack = document.getElementById("White");
                g_whiteBack.onclick = makeWhite;

            </script>

<h2> This is the home page of C-Science, you're one stop site for computer science basics</h2>
<div class="grid-container">
  <div class="item1" id="qdiv">Quotes
	<?php
try{
    require_once('functions.php');
    $dbconn = getConnection();

    $sqlQuery = "SELECT * FROM CSQuotes ";
    $queryResult = $dbconn->query($sqlQuery);
	
    $quotes = "SELECT quotes FROM CSQuotes";
    $queryResult->bindParam(2, $quotes);


#	$row = $queryResult->fetch_object()
	$queryResult->execute();
	
	while($row = $queryResult->fetch(PDO::FETCH_ASSOC)) {
		echo "<p> $row[quotes] </p>";
	}
}
catch (Exception $e) {
    echo "<p> query failed: " . $e->getMessage() . "</p>\n";
}
?>
<img src="istockphoto-1396854514-612x612.jpg" alt="comp stock photo" width="450" height="300">

  </div>
	
  
  <div class="item2">Top computer science questions
  <h1> What is computer science?</h1>
  <p> Computer science is the study of computers and computing as well as their theoretical and practical applications. Computer science applies the principles of mathematics, engineering, and logic to a plethora of functions, including algorithm formulation, software and hardware development, and artificial intelligence.</p>
  <h1> what can you do with computer science?</h1>
  <p>  Computer science is applied to a wide range of disciplines that include modeling simulations such as the impacts of climate change and the Ebola virus, creating art and visualization through graphics rendering, and simulating a human interface through artificial intelligence and machine learning. </p>
  <h1> How do I learn computer science?  </h1>
  <p>  Many universities across the world offer degrees that teach students the basics of computer science theory and the applications of computer programming. Additionally, the prevalence of online resources and courses makes it possible for many people to self-learn the more practical aspects of computer science (such as coding, video game development, and app design). </p>
  <img src="istockphoto-1175691444-612x612.jpg" alt="comp stock photo" width="600" height="500">
</div>
	
	</div>	
		
</div>
	
		
	</body>
</html>
