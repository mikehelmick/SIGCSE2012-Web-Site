<?php
 if (isset($_COOKIE['full_menu']))
   echo '<div class="GoodMessage"><p>You have the javascript menus disabled, <a href="/sigcse2012/unset_menu.php">click here to re-enable</a>.</p></div>';
?>

<div class="menu"><a id="home_menu" href="/sigcse2012/">SIGCSE | 2012</a></div>
<div class="menu"> 
 <a href="http://sigcse2012.blogspot.com">Blog</a> |
 <a href="https://plus.google.com/b/105068073150868262530/">Google+</a> |
 <a href="http://twitter.com/#!/sigcse2012">Twitter #sigcse</a></div>
<div class="menu"><a id="authors_menu" onclick="toggle_menu('authors');">Authors<img id="authors_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>	
<div id="authors_sub" class="submenu" style="<?php echo $menuStyle; ?>">
  <ul>
	<li><a id="cfp_menu" href="/sigcse2012/authors/index.php">Call for Participation</a></li>
	<li><a id="papers_menu" href="/sigcse2012/authors/papers.php">Papers</a></li>
	<li><a id="panels_menu" href="/sigcse2012/authors/panels.php">Panels</a></li>
	<li><a id="special_sessions_menu" href="/sigcse2012/authors/special_sessions.php">Special Sessions</a></li>
	<li><a id="student_research_menu" href="/sigcse2012/authors/student_research.php">Student Research Competition</a></li>
	<li><a id="workshops_menu" href="/sigcse2012/authors/workshops.php">Workshops</a></li>
	<li><a id="posters_menu" href="/sigcse2012/authors/posters.php">Posters</a></li>
	<li><a id="bof_menu" href="/sigcse2012/authors/bof.php">Birds of a Feather (BoF)</a></li>
  </ul>
  <hr/>
  <ul>	
	<li><a id="finalSubmission_menu" href="/sigcse2012/authors/final_submission.php">Final Submission Instructions</a></li>
	<li><a id="formatting_menu" href="/sigcse2012/authors/format.php">Formatting / Publication Guidelines</a></li>
	<li><a id="noshow_menu" href="/sigcse2012/authors/noshow.php">Presenter No-Show Policy</a></li>
	<li><a id="createPdf_menu" href="/sigcse2012/authors/creating_pdf.php">Creating PDFs</a></li>
	<li><a href="/sigcse2012/faq/submissions_faq.php">Authors FAQs</a></li>
  </ul>
</div>
<div class="menu"><a id="attendees_menu" onclick="toggle_menu('attendees');">Attendees<img id="attendees_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
<div id="attendees_sub" class="submenu" style="<?php echo $menuStyle; ?>">
  <ul>
	<li><a id="attendeesGeneral_menu" href="/sigcse2012/attendees/">General Information / Program</a></li>
	<li><a id="attendeesKeynotes_menu" href="/sigcse2012/attendees/keynotes.php">Keynote Speakers</a></li>
	<li><a id="attendeesSupporterSessions_menu" href="/sigcse2012/attendees/supporter_sessions.php">Supporter Sessions</a></li>
	<li><a id="attendeesWorkshops_menu" href="/sigcse2012/attendees/workshops.php">Workshop Schedule</a></li>
	<li><a id="attendeesPreSymposium_menu" href="/sigcse2012/attendees/pre_symposium_events.php">Pre-Symposium Events</a></li>
	<li><a id="attendeesRegistration_menu" href="/sigcse2012/attendees/registration.php">Registration</a></li>
	<li><a id="attendeesFees_menu" href="/sigcse2012/attendees/fees.php">Symposium Fees</a></li>
	<li><a id="attendeesRaleigh_menu" href="/sigcse2012/attendees/raleigh.php">About Raleigh</a></li>
	<li><a id="attendeesTravel_menu" href="/sigcse2012/attendees/travel.php">Travel Information</a></li>
	<li><a id="attendeesAccommodations_menu" href="/sigcse2012/attendees/accommodations.php">Accommodations</a></li>
	<li><a id="attendeesVisas_menu" href="/sigcse2012/attendees/visas.php">Visa Information</a></li>
	<li><a id="attendeesKidsCamp_menu" href="/sigcse2012/attendees/kids_camp.php">Kids Camp</a></li>
	<li><a id="attendeesFloorPlans_menu" href="/sigcse2012/attendees/floor_plans.php">Floor Plans</a></li>
  </ul>
</div>		
<div class="menu"><a id="reviewers_menu" onclick="toggle_menu('reviewers');">Reviewers<img id="reviewers_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
<div id="reviewers_sub" class="submenu" style="<?php echo $menuStyle; ?>">
  <ul>
	<li><a id="reviewerInformation_menu" href="/sigcse2012/reviewers/index.php">Reviewer Information</a></li>
	<li><a id="revGuidePapers_menu" href="/sigcse2012/reviewers/guide_papers.php">Paper Review Guide</a></li>
	<li><a id="revGuidePanels_menu" href="/sigcse2012/reviewers/guide_panels.php">Panel Review Guide</a></li>
	<li><a id="revGuideSpecialSessions_menu" href="/sigcse2012/reviewers/guide_sessions.php">Special Session Review Guide</a></li>
	<li><a id="revGuideWorkshops_menu" href="/sigcse2012/reviewers/guide_workshops.php">Workshop Review Guide</a></li>
	<li><a id="revGuideBOFs_menu" href="/sigcse2012/reviewers/guide_bofs.php">Birds of a Feathers (BOFs) Review Guide</a></li>
	<li><a id="revGuidePosters_menu" href="/sigcse2012/reviewers/guide_posters.php">Poster Review Guide</a></li>
  </ul>
  <hr/>
  <ul>
	<li><a id="metareviews_menu" href="/sigcse2012/reviewers/metareviews.php">Meta-reviews</a></li>
	<li><a href="/sigcse2012/faq/reviewers_faq.php">Reviewers FAQs</a></li>
  </ul>
</div>
<div class="menu"><a id="students_menu" onclick="toggle_menu('students');">Students<img id="students_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
<div id="students_sub" class="submenu" style="<?php echo $menuStyle; ?>">
  <ul>
	<li><a id="students_general_menu" href="/sigcse2012/students/index.php">How can I get Involved?</a></li>
	<li><a id="students_research_menu" href="/sigcse2012/authors/student_research.php">Student Research Competition</a></li>
	<li><a id="students_volunteer_menu" href="/sigcse2012/students/volunteer.php">Student Volunteers</a></li>
  </ul>
</div>
<div class="menu"><a id="exhibitors_menu" href="/sigcse2012/exhibitors/">Exhibitors/Supporters</a></div>
<div class="menu"><a id="faq_menu" onclick="toggle_menu('faq');">FAQ<img id="faq_status" src="/sigcse2012/images/arrow_down.png" align="absmiddle"></a></div>
<div id="faq_sub" class="submenu" style="<?php echo $menuStyle; ?>">
  <ul>
   <li><a id="submissionsFAQ_menu" href="/sigcse2012/faq/submissions_faq.php">Submissions FAQ</a></li>
   <li><a id="postersFAQ_menu" href="/sigcse2012/faq/posters_faq.php">Posters FAQ</a></li>
   <li><a id="reviewersFAQ_menu" href="/sigcse2012/faq/reviewers_faq.php">Reviewers FAQ</a></li>
   <li><a id="attendeesFAQ_menu" href="/sigcse2012/faq/attendees_faq.php">Attendees FAQ</a></li>
   <li><a id="studentsFAQ_menu" href="/sigcse2012/faq/students_faq.php">Students FAQ</a></li>
  </ul>
</div>
<div class="menu"><a id="committee_menu" href="/sigcse2012/committee/">Program Committee</a></div>
<hr/>

<?php
$sponsors = array("google_search.php");
shuffle($sponsors);
foreach ($sponsors as $sponsor) {
  include($sponsor);
}
?>

<hr/>
<g:plus href="https://plus.google.com/105068073150868262530" size="badge"></g:plus>
<hr/>

             <script src="http://widgets.twimg.com/j/2/widget.js" type="text/javascript"></script>
<script type="text/javascript">
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 6000,
  width: 250,
  height: 300,
  theme: {
    shell: {
      background: '#333333',
      color: '#ffffff'
    },
    tweets: {
      background: '#000000',
      color: '#ffffff',
      links: '#4aed05'
    }
  },
  features: {
    scrollbar: true,
    loop: false,
    live: true,
    hashtags: true,
    timestamp: true,
    avatars: true,
    behavior: 'all'
  }
}).render().setUser('sigcse2012').start();
</script>