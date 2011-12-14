<?php
 $title = "SIGCSE 2012 - Supporter Sessions";
 $onload = "pageLoad('attendees', 'attendeesSupporterSessions');";
 include("../parts/top.php");
?>

<div class="SectionHeader"><div class="Full">
<h1>SIGCSE 2012 - Supporter Sessions</h1>
</div></div>

<ul>
 <li><strong>Thursday, March 1, 2012</strong><ul>
  <li><a href="#google">3:45PM – 5:00PM - Google</a></li>
 </ul></li>
 <li><strong>Friday, March 2, 2012</strong><ul>
  <li><a href="#google">1:45PM – 3:00PM - Google</a></li>
 </ul></li>
</ul>

<div class="SectionHeader"><div class="Full">
<h2><a name="google">Google</a></h2>
</div></div>

<p><strong>All Things Google and Education</strong><br/>
Thursday, March 1, 2012 – 3:45PM – 5:00PM<br/>
Margaret Johnson, Director of University Relations and Education, Google Inc.
</p>

<p>Google believes that all students should have the opportunity to become active creators of tomorrow's technology.  Through our diverse set of education efforts, we invest in the next generation of computer scientists and engineers, providing opportunities for all students to engage more directly in technology.</p>
<p>Google’s mission is to organize the world's information and make it universally accessible and useful. With regard to education, our goal is to leverage Google's strengths and infrastructure to increase access to high-quality, open educational content and technology.</p>
<p>During this session, you will learn about all of Google's education initiatives with a focus on those related to Computer Science.</p>

<p><strong>The MIT Center for Mobile Learning and the Future of App Inventor</strong><br/>
Friday, March 2, 2012 – 1:45 – 3:00PM<br/>
Hal Abelson, Class of 1922 Professor of Computer Science and Engineering MIT<br/>
Mark Friedman, Former App Inventor Project Lead Google</p>

<p>The MIT Media Lab applies an unorthodox research approach to envision the impact of emerging technologies on everyday life—including technologies used in education.  Through a generous grant from Google, the Media Lab recently expanded on this work by establishing the MIT Center for Mobile Learning led by Hal Abelson, Mitch Resnick, and Eric Kopfler.  The Center’s work revolves around the principle that mobile technology can fulfill its potential to enhance education only if  teachers and learners can create new mobile technologies, not merely experience them as consumers.</p>
<p>This session will discuss the Center’s three new initiatives:<ol>
<li>Scratch, used by millions of students and teachers, is a media-based programming tool that introduces young people to computing in an way that emphasizes creativity and sharing.  Later this spring, the Center will be releasing browser-based Scratch 2.0, which extends Scratch to the Web and to Web services. </li>
<li>TaleBlazer, from the Center’s Scheller Teacher Education Program, is a location-based augmented reality mobile gaming platform, where people use blocks programming to create behaviors for characters in the game. </li>
<li>App Inventor is a programming tool that makes it easy, even for beginners, to create applications for Android phones.  App Inventor was incubated at Google Research, and has been transferred to the Center, which is continuing its development as an open source system and providing it as an open service for educational use.</li>
</ol></p>


<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>