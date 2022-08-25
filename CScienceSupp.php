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
		<h1> This is the support page of C-Science, find external sites to get support in your learning and knowledge<h1>

		<h2> Are you stuck with a problem? </h2>
		<img src="istockphoto-1350243113-612x612.jpg" alt="medium" width="300" height="300">
		<p> Do you need help finding some answers, instead of endless searchs on google? </p>
		<p> This page will provide you with the best websites to help you get the answers you are looking for </p><br>
		<img src="stack-overflow.png" alt="stack overflow" width="200" height="100">
		<h1> The obvious first choice of course is <a href="https://stackoverflow.com/"style='font-size:1em'>Stack Overflow</a> </h1> 
		<p> Stack Overflow is a forum for developers to ask questions and hopefully recieve answers from other developers </p>
		<p> Although a lot of the time the problem you have has already been asked and answered. </p>
		 <img src="medium.jpg" alt="medium" width="200" height="100">
		<h2> A site that has a lot of information articles that could also prove useful in your degree is <a href="https://medium.com/"style='font-size:1em'>Medium</a> </h2> 
		<p> Medium has a wide range of articles, covering a number of computer science related knowledge. So go check them out! </p>
		 <img src="w3school_profile.jpg" alt="w3schools" width="100" height="100">
		<h1> w3schools the website for websites! <a href="https://www.w3schools.com/"style='font-size:1em'>W3schools </a> </h1>
		<p>It's a great tool for building websites and learning how to build them with visual aids. It helps with specific issues with websites, find our link here! </p>
		
	</body>
</html>