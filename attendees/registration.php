<?php
 $title = "SIGCSE 2012 - Registration";
 $onload = "pageLoad('attendees', 'attendeesRegistration');";
 include("../parts/top.php");
?>
<h1>SIGCSE 2012 Registration Gateway</h1>

<div class="GoodMessage">Registration is open, register at <a href="http://www.regonline.com/sigcse2012">www.regonline.com/sigcse2012</a></div>
      
<div class="SectionHeader"><div class="Full">
<h2>Registration</h2>
</div></div>
<br/>   

<p>As with past SIGCSE symposia, we are offering attendees three registration options: On-line, off-line, and on-site. Early registration for SIGCSE members is just $250 for registrations made by January 30, 2012. Details about late registration and many other symposium activity fees are available from our Symposium Fees page.</p>

<p><b>Parents</b>: Interested in bringing your kids to SIGCSE?  We will continue the tradition of "Kids' Camp" for fun and educational child care during SIGCSE.</p>


<div class="SectionHeader"><div class="Full">
<h2>Online and Offline (Remote) Registration</h2>
</div></div><br/>

<p><strong>Online registration is open at <a href="http://www.regonline.com/sigcse2012">www.regonline.com/sigcse2012</a></strong></p>

<p>Offline (register by mail) forms: <ul>
 <li><a href="/sigcse2012/attendees/downloads/SIGCSE_2012_RegistrationForm.pdf">Registration form as Adobe PDF</a></li>
 <li><a href="/sigcse2012/attendees/downloads/SIGCSE_2012_RegistrationForm.doc">Registration form as Microsoft Word (DOC) file</a></li>
</ul></p>

<div class="SectionHeader"><div class="Full">
<h2>On-Site Registration</h2>
</div></div><br/>

<p>Onsite registration will be open the following times:
<ul><li>Wed - 3:00 PM - 9:30 PM</li>
<li>Thu - 7:30 AM - 8:00 PM</li>
<li>Fri - 7:30 AM - 5:00 PM</li>
<li>Sat - 8:00 AM - 12:15 PM and 2:30 PM - 3:00 PM</li>
</ul>
</p>
<br/>


<?php
 $updated = filemtime( $_SERVER["SCRIPT_FILENAME"] );
 $mainPage = true;
 include("../parts/bottom.php");
?>