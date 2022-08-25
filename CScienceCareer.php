<!doctype html>
<html land="en">
	<head>
	<link rel="stylesheet" href="CScience.css" >
		<title>Welcome to C-Science!</title>
	</head>
	
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
	<body>
		<h1> This is the careers page of C-Science, find career potentials</h1><br>
		
		<p> It can be difficult at times to think of the career potential of a computer sciecne degree, but we're here to provide you with some guidance and inspiration </p><br>
		<p> First stop which may be helpful to you is to look at the <a href="CScienceTopics.php"style='font-size:2em'>Computer science Topics</a> page. </p>

		<p> Another useful website is <a href="https://www.prospects.ac.uk/"style='font-size:2em'>Prospects</a> this can help with if you are struggling with knowing what you want to do in the future even if its not computer sciecne related. </p>
		
<!-- prospects.ac.uk, linked in -->		
		
	</body>
</html>