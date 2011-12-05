<?php
 $title = "SIGCSE 2012 - Attendees";
 $onload = "pageLoad('attendees', 'attendeesKeynotes');";
 include("../parts/top.php");
?>
<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 - Keynote Speakers</h1>
</div></div>

<ul>
 <li><a href="#thursday">Frederick P. Brooks, Jr.</a> (Thursday, March 1, 2012)</li>
 <li><a href="#friday">Hal Abelson</a> (Friday, March 2, 2012)</li>
 <li><a href="#saturday">Fernanda Viégas and Martin Wattenberg</a> (Saturday, March 3, 2012)</li>
</ul>

<div class="SectionHeader"><div class="Full">
<h2><a name="thursday">Frederick P. Brooks, Jr</a></h2>
</div></div>

<p>
<img src="/sigcse2012/attendees/images/brooks.jpg" align="left" class="headshot" />
<strong>Frederick P. Brooks, Jr.</strong><br/>
Kenan Professor of Computer Science<br/>
University of North Carolina at Chapel Hill</p>
<h4>The Teacher's Job is to Design Learning Experiences; not Primarily to Impart Information</h4>
<p>The primary job of the teacher is to make learning happen; that is a design task. Most of us learned most of what we know by what we did, not by what we heard or read. A corollary is that the careful designing of exercises, assignments, projects, even quizzes, makes more difference than the construction of lectures.</p>
<p>A second corollary is that project courses that go deeply into narrow aspects of a subject seem to stick longer and deeper than approaches aiming at comprehensive coverage. How to strike a balance?</p>
<p>I've taught a first software engineering laboratory course 22 times, and an advanced computer architecture course about ten times. Here are some techniques that work for me.</p>
<p><strong>About Frederick P. Brooks, Jr.</strong>:
UNC-Chapel Hill Kenan Professor Fred Brooks is a Chapel Hill native who grew up in Greenville NC. He’s been crazy about computers since teenage, in the ‘40’s. After his Ph.D. under Howard Aiken at Harvard, he joined IBM. In the ‘50’s, he was an architect of the IBM Stretch and Harvest supercomputers. In the ‘60’s, he was IBM’s Corporate Project Manager for the System/360, leading development of both the System/360 computer family hardware, and of the Operating System/360 software.</p>
<p>He founded the UNC Department of Computer Science in 1964 and chaired it for 20 years. His research has been in computer architecture, software engineering, and now interactive 3-D computer graphics ("virtual reality"). His best-known books are <em>The Mythical Man-Month</em> (1975,1995), <em>Computer Architecture</em> (with G.A. Blaauw, 1997), and <em>The Design of Design</em> (2010).</p>
<p>Dr. Brooks has received the National Medal of Technology, and the Turing Award of the ACM. He is a member of the National Academy of Sciences, the National Academy of Engineering, and a Foreign Member of the (British) Royal Academy of Engineering, which is more fun. A Christian, he chaired the Executive Committee for the Billy Graham Research Triangle Crusade in 1973.</p>

<div class="SectionHeader" style="clear: left;"><div class="Full">
<h2><a name="friday">Hal Ableson</a></h2>
</div></div>
<p>
<img src="/sigcse2012/attendees/images/halAbelson.jpg" align="left" class="headshot" />
<strong>Fernanda Viégas and Martin Wattenberg</strong><br/>
Class of 1922 Professor of Electrical Engineering and Computer Science Massachusetts Institute of Technology</p>

<p><strong>Winner of the 2012 SIGCSE Award for Outstanding Contribution to Computer Science Education</strong>
</p>

<div class="SectionHeader" style="clear: left;"><div class="Full">
<h2><a name="saturday">Fernanda Viégas and Martin Wattenberg</a></h2>
</div></div>
<p>
<img src="/sigcse2012/attendees/images/fm.jpg" align="left" class="headshot" />
<strong>Fernanda Viégas and Martin Wattenberg</strong><br/>
Google's "Big Picture" visualization research group in Cambridge, Massachusetts</p>
<h4>Through the Looking Glass: Talking about the World with Visualization</h4>
<p>Data visualization has historically been accessible only to the elite in academia, business, and government. It was "serious" technology, created by experts for experts. In recent years, however, web-based visualizations--ranging from political art projects to news stories--have reached audiences of millions.</p>
<p>What will this new era of data transparency look like--and what are the implications for technologists who work with data? To help answer this question, we report on recent research into public data analysis and visualization. Some of our results come from Many Eyes, a "living laboratory" web site where people may upload their own data, create interactive visualizations, and carry on conversations. We'll also show how the art world has embraced visualization. We'll discuss the future of visual literacy and what it means for a world where visualizations are a part of political discussions, citizen activism, religious discussions, game playing, and educational exchanges.</p>
<p><strong>About Fernanda Viégas and Martin Wattenberg</strong>: Fernanda Viégas and Martin Wattenberg lead Google's "Big Picture" visualization research group in Cambridge, Massachusetts.</p>
<p>Before joining Google, the two founded Flowing Media, Inc., a visualization studio focused on media and consumer-oriented projects. Prior to Flowing Media, they led IBM’s Visual Communication Lab, where they created the ground-breaking public visualization platform Many Eyes. The two became a team in 2003 when they decided to visualize Wikipedia, leading to the "history flow" project that revealed the self-healing nature of the online encyclopedia.</p>
<p>Viégas is known for her pioneering work on depicting chat histories and email. Wattenberg’s visualizations of the stock market and baby names are considered Internet classics. Viégas and Wattenberg are also known for their visualization-based artwork, which has been exhibited in venues such as the Museum of Modern Art in New York, London Institute of Contemporary Arts and the Whitney Museum of American Art.</p>

<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>