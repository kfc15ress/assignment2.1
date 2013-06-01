
<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="author" content="Robert M. Erickson">
 <title>CS 142 Advanced Web Design: CSS and Usability</title>
 <meta name="description" content="This course provides an in depth exploration of the foundation of  Cascading Style Sheets and covering Web Usability to help you create a pleasing user experience for visitors to your site."/>
<!-- https://www.uvm.edu/~rerickso/education/classes/2013_Summer/css/base.css -->
<!-- css/base.css -->
<link href="ejgould.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/print.css" rel="stylesheet" type="text/css" media="print" />
<link rel="shortcut icon" href="https://www.uvm.edu/~rerickso/education/classes/2013_Summer/favicon.ico" >
<!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/sin/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript">
<!--
// keeps us from getting framed
		if (top.location != self.location) {
			top.location.replace(self.location)
		}
window.onresize = function() { document.getElementById("screenSize").innerHTML = " " + window.innerWidth + " x " + window.innerHeight; }
//-->
</script>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-32182956-1']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();
</script>
</head>

<body id="syllabus">
<div id="wrapper"> <!-- Main wrapper for CSS --> 
<div id="candyWrapper"> <!-- all the header info wrapper for CSS --> 
<header> <!-- ************ header ************ -->
		<h1 id="classtitle">
<a href="http://www.uvm.edu/~cems/cs/?Page=default.php">CS</a> 142 
<a href="syllabus.php?classRegNum=60649" class="url">Advanced Web Design: CSS and Usability</a> - 2013
</h1>
<nav id="toolmenu"><span id="screenSize"></span><ol>
<li><a href="https://bb.uvm.edu/webapps/portal/frameset.jsp" target="_blank">Blackboard</a></li>
<li><a href="http://www.uvm.edu/~rerickso/education/classesITeach.php">Classes</a></li>
<li><a href="https://myuvm.uvm.edu/cp/home/displaylogin" target="_blank">MyUVM</a></li>
</ol></nav>
</header> <!-- ************ end header  ************ -->

<div id="studentInfo"> <!-- %^%^%^%^%^ studentInfo %^%^%^%^%^ -->
<span id="studentName">
Student: ejgould
</span>
<span id="studentGrade"  style="color: red;" >Current <a href="grades.php">Grade</a>: 0</span>
<span id="classRank">
Rank: 9 of 8
</span>
</div> <!-- %^%^%^%^%^ student info %^%^%^%^%^ -->

<nav id="mainMenu"> <!-- %^%^%^%^%^%^%^%^%^%^%^%^ Navigation %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^% -->
<ol>
<li class="menuLink"><a href="assignments.php">Assignments</a></li>
<li class="menuLink"><a href="calendar.php?abWeek=10">Calendar</a></li>
<li class="menuLink"><a href="lectures.php">Lectures</a></li>
<li class="menuLink"><a href="sick.php">Sick</a></li>
<li class="menuLink activeLink"><a href="syllabus.php">Syllabus</a></li>
<li class="menuLink"><a href="submitAssignment.php">Submit Assignment</a></li>
</ol>
</nav> <!-- navigation -->
<!-- place admin menu code here -->
</div> <!-- ends candyWrapper -->
<section id="mainContent"> <!-- ######################## main Content ######################## --><h1>Syllabus</h1>
<p>60649 MTWRF starting at 12:00 to 12:00 in room Online</p>
<table>
<colgroup>
<colgroup>
<colgroup>
<colgroup>
<tr>
    <th colspan="4">Instructor</th> 
</tr>

<tr>
    <th>Name</th>
    <th>Email</th>
	  <th>Office Hours</th>
		<th rowspan="2">
		<a href="http://www.facebook.com/mtnbob" title="Bob Erickson"><img 
src="facebook.png"  
alt="facebook profile" class="noBorder" /></a>
		<br />
		
<!-- linked in page -->
<a href="http://www.linkedin.com/in/robertmerickson" >
          <img src="http://www.linkedin.com/img/webpromo/btn_profile_bluetxt_80x15.png" width="80" height="15" alt="View Robert Erickson's profile on LinkedIn" class="noBorder" />
    </a>
<!-- end linked in -->		
</th>
    </tr>

<tr>
<td>
Robert Erickson</td>
<td class='hideText'>robert.erickson@uvm.edu</td>
<td >Online - </td>
</tr>
<tr>
    <th colspan="4">Teaching Assistants</th> 
    </tr>

    <tr>
       <th>Name</th>
		   <th>Email</th>
		   <th>Office Hours</th>
		   <th>Responsibilities</th>
    </tr>

<tr>
<td>Eric H. Newbury</td>
<td class='hideText'>enewbury@uvm.edu</td>
<td>Online - </td>
<td>Grader  <br /></td>
</tr>
</table>
<h2>Description</h2>
<p>This course provides an in depth exploration of the foundation of  Cascading Style Sheets and covering Web Usability to help you create a pleasing user experience for visitors to your site.</p>
<p>URL: https://www.uvm.edu/~rerickso/education/classes/2013_Summer/cs142/syllabus.htmlclassRegNum=60649</p><h2>Learning Objectives</h2>
<ul>
	<li>Be able to map out the structure of a web page.</li>
	<li>A solid foundation of the CSS Rules</li>
	<li>Ability to use CSS rules to create the look for your site.</li>
	<li>Understand what Web Usability is.</li>
	<li>Perform a Usability Test on a web site.</li>
	<li>Practice usability in the design and implementation of your site.</li>
</ul>

<h2>Required Materials</h2>


<p><strong>Book:</strong></p>
<p><a target="_blank" href="http://www.oreilly.com/catalog/csstdg3">CSS The Definitive Guide</a> by Eric Meyer ISBN-10: 0-596-52733-0</p> 

<p><a  target="_blank" href="http://www.sensible.com/index.html">Don't Make Me Think</a> by Steve Krug ISBN: 0-7897-2310-7</p> 

<p><strong>Web Sites: </strong></p>
<ul>
    <li><a target="_blank" href="http://www.html-5-tutorial.com/index.htm">HTML5 – A tutorial for beginners</a></li>
    <li><a target="_blank" href="http://www.w3schools.com/">W3 Schools</a> HTML, xHTML, html5 and CS2 tutorials</li>
</ul>
 

<p><strong>Tools: </strong></p>
<ul>
<li><a target="_blank" href="http://jigsaw.w3.org/css-validator/">W3 CSS Validator</a></li>

<li><a target="_blank" href="http://validator.w3.org/">W3 HTML 5 Validator</a></li>

<li><a target="_blank" href="https://www.uvm.edu/software/">Mozilla FireFox</a> (or Google Chrome) web browser. Requires UVM account.</li>

<li><a target="_blank" href="https://addons.mozilla.org/en-US/firefox/addon/1843">Firebug</a> add on for Mozilla Firefox (or Chrome extensions). This is used to view CSS rules on your site.</li>


<li>Different size <a  target="_blank" href="http://www.responsinator.com/">resolutions</a></li>

<li>Different <a  target="_blank" href="http://browsershots.org/">browsers</a>

<!--<li>JavaScript <a href="http://www.netmagazine.com/tutorials/javascript-debugging-beginners">help</a></li>-->

<li class="indent"><a  target="_blank" href="https://www.uvm.edu/software/">An FTP program (for example WINSCP for PC's or Fugu for Macs)</a> - you will need your zoo username and password first (used for sending (ftp) files from your home to the lab computers). If you prefer to use a web site (at uvm: <a href="https://www.uvm.edu/filetransfer/">https://www.uvm.edu/filetransfer/</a> )</li>
</ul>

<p>Software: Web editing tools (your choice) Some examples:</p>
<ol>
	<li><a  target="_blank" href="http://netbeans.org/">Netbeans</a></li>
	<li>PC: <a  target="_blank" href="http://www.chami.com/html-kit/">HTML Kit</a></li>
	<li>MAC: <a  target="_blank" href="http://www.barebones.com/products/textwrangler/">TextWrangler</a></li>
	<li>MAC: <a  target="_blank" href="http://speckyboy.com/2008/09/22/28-excellent-free-mac-apps-for-graphic-and-web-designers/">graphic and web design tools</a></li>
</ol>



<h2>Course Expectations</h2>

<p>You will be expected to download programs and install them on your home computer (or use the computer lab on campus). All assignments will be checked via the WWW so you will need to learn how to ftp and set permissions.</p>

<p>For online courses you are required to make a post for each topic before the next topic is started. Your post needs to be a minium of 100 words related to the subject to let me know that you are checking the pages.</p>

<p>The texts and websites are there for you to read, do so, there is no way i can provide that much detail in lecture notes.</p>
<h2>Grading Policy:<a id="participation"></a><a id="classAssignments"></a></h2>
<table id="grading">
	<tr>
		<th><a id="Homework">Homework</a></th>
	<td>55 % </td>
</tr>
	<tr>
		<th><a id="Project">Project</a></th>
	<td>25 % </td>
</tr>
	<tr>
		<th><a id="Attendance">Attendance</a></th>
	<td>10 % </td>
</tr>
<tr><th>Total </th>
		<th><span style="background-color: #ff0000;">90</span> % </th>
	</tr>
</table>
<!-- 
//############################################################################
//
// This page is for the syllabus and displaces the commong policies. the 
// grading policy should be last thing in the syllabus.hmtl file.
//
//############################################################################
// %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^% 
-->
<p>It will be your responsibility to insure that your assignment has been graded and recorded (grades will be posted on the www) correctly. After two weeks time you can not question your grade. Be sure to look at the comments and see if you understand why it is wrong before asking. <span class="highlightRed">You should contact the grader (via email) first</span> before asking the instructor. If after speaking with grader your question is not resolved then contact the instructor.</p>

<p>Notice the three colors for your grades, <span class="NotGraded">Not Graded</span>, <span class="GradingStarted">Grading in progress</span> and <span class="GradesReleased">Grades Released</span>. You will not see your grade until the grades get released. Only grades that are released are counted in your current grade. If you have a zero and a ton of comments their is a good chance we could not grade your site and you should contact the grader asap. Usually the first comment will explain it all.</p>

<p>Since Finals bring out personality changes to even the most pleasant individuals, I will not review grades with a student starting a week before finals and including finals week.</p>

<p>When you check your grades online you will notice several links at the top. <span class="highlightRed">It is important to note that clicking your name will take us to your web site</span> and that is what we will be checking when we grade online assignments (just like the class list page). Click it. If you cannot see your files neither can we. Keep in mind though that anything you place in the public_html folder will be viewable if someone types in the your url unless you have set the permissions otherwise. 
<br /><br />Email notification will provide you with an email message to your UVM account when your assignment is graded and when you are not present for class.</p>

<!-- // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^ -->
<h3><a id="attendance">Attendance</a></h3>


<p>Class attendance is mandatory and is part of your grade. If for any reason you cannot attend class you are required to submit a note via the course website (calendar or sick pages) before class time. You may notify me up to seven days in advance.  You are not permitted to miss more than 7 classes (excuse or no excuse), if you do you forfeit your entire attendance grade. During the last week of classes, attendance is mandatory period. There may be times during the semester when attendance is also mandatory. Being present is worth one point, <span class="highlightRed">late is 80%</span>, <span class="highlightRed">submit notification is 75%</span>.</p>

<p><span class="highlightRed">Online class attendance</span> will be judged based on your posts about that lecture topic and a posting in a web review once we start them (ie you must post weekly (daily for summer classes)). Two postings in one week do not count towards two weeks of attendance. </p>

<!-- // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^ -->
<h3>Submit Assignments</h3>
<p><strong>All assignments must be submitted to get graded</strong>. All assignments are due by noon on the date listed on the calendar. The process is simple:</p>
<ol>
	<li>FTP your files to your uvm account in the correct folder.</li>
	<li>On the course page click on submit assignment.</li>
	<li>Choose the assignment you wish to submit for grading (the list of your files will be displayed.</li>
	<li>Agree to the terms of submission.</li>
    <li>Hit submit and you are all set. An email confirmation will be sent to your UVM email account.
</ol>

<!-- // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^ -->
<h3>Late Policy:</h3>
<p>You will be allowed <span class="highlightRed">one&nbsp;late&nbsp;submission&nbsp;all&nbsp;semester,&nbsp;at&nbsp;10%&nbsp;off</span>, see instructor for details BEFORE assignment is due. <span class="highlightRed">No&nbsp;late&nbsp;assignment</span> will be accepted after the last day of classes. The final project <span class="highlightRed">cannot&nbsp;be&nbsp;submitted&nbsp;late</span>. Once you submit a late assignment it will trigger the process to get that assignment graded.</p>

<!-- // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^ -->

<h3>Email Policy</h3>

<p>Since email has become so overloaded i request that you don't send me email unless you need to. So all questions should be asked in class (posted on the discussion board for online classes. you can post your questions anonymously (these will of course not count as attendance)). This way everyone gets the benefit of the question and answer.</p>

<p>There will be times when you do need to email (oh just highlight where my email should be up above, its there, i just made the color white so you don't see it) please follow these rules:</p>

<ol>
  <li>Subject: CS142 your reason:<ul><li>Attendance</li><li>Grade</li></ul></li>
  <li>Message: please keep your message short<ul><li>clear</li><li>to the point</li><li>try not to ramble and at the same time try not to leave any information out</li><li>It is always helpful if you have submitted the assignment and provide a url link if it is to your website</li></ul></li>
</ol>

<h3>Lab Open Times:</h3>

<p>Votey Labs are open 24/7 during the academic year, 7am to 10pm on holidays (<a href="http://www.cems.uvm.edu/uvmpages/labsched.php">see schedule</a>). The Votey building is locked at 10pm everyday, you will need to use your student access card to get into the building. If you are enrolled in my class than you should have access to the building with your card. If you cannot get into the building or the actual lab is locked please call police services 656-FIRE (3473) they should let you in (you will need UVM ID of course. There is a campus phone on the outside of Kalkin (on the Fleming museum corner)</p>

<h3>Class Etiquette:</h3>
<p> Be on Time. Leaving in the middle of class for any reason is <b>rude</b> and unacceptable. If you must leave early please ask first.</p>

<h3>Electronic Devices:</h3>
<p><strong>No Cell phones, laptops or other electronic devices</strong> allowed (except in the online class :). They need to be turned off during class. If your phone rings (or vibrates loud enough for me to hear it) you will lose your attendance points for the day. If it happens during an exam time, all points up to that time. This also includes checking to see who calls you, texting your friends, or checking email (cell or laptop) during class time.</p>

<h3>Online Etiquette:</h3>
<p> Check the discussions daily, reply each week (summer daily) to each topic BEFORE the next topic is posted. Take your time to provide well written comments and questions as it is part of your grade.</p>

<!--<p>For general computer problems please see:<br /></p>
<ul>
	<li>PC problems - See Victor, Votey 235</li>
	<li>Unix or account problems - See Jim, Votey 235 NOTE: For account problems you will need valid identification.</li>
	<li>If you have trouble submitting your assignment please email me BEFORE the deadline.</li>
</ul>
-->

<!-- // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^ -->
<h3>Religious Holidays:</h3>
<p>Students have the right to practice the religion of their choice. Each semester students should submit in writing to their instructors by the end of the second full week of classes their documented religious holiday schedule for the semester. Faculty must permit students who miss work for the purpose of religious observance to make up this work. See <a href="http://www.interfaithcalendar.org/">Interfaith Calendar</a> or see the <a href="http://www.vtfishandwildlife.com/Calendar_of_events.cfm?eventcat=hunt&amp;daterange=future">Vermont Calendar.</a> Additional University of Vermont policies may be found at: <a href="http://www.uvm.edu/academics/catalogue2011-12/?Page=allpolicies.php&amp;SM=policymenu.html&amp;category=academic_policies&amp;policy=Rights%20and%20Responsibilities%20of%20Undergraduate%20Students"> UVM Policies</a> </p>
<!-- // %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^ -->
<!-- Academic honesty policy should now follow -->
<!-- //#######################################################################
//
// this page displays the academic policy, text should be that adopted by the 
// department though i am not sure how often it gets updated.
//
//############################################################################
-->

<h2>Academic Honesty Policy</h2>

<p>The Computer Science Department rigorously enforces the <a href="http://www.uvm.edu/~uvmppg/ppg/student/acadintegrity.pdf">Code of Academic Integrity Policy</a> as outlined in the <a href="http://www.uvm.edu/policies/student/studentcode.pdf">Code of Rights and Responsibilities and University Policies</a>. At the first suspicion of violation of this policy, the case will be immediately forwarded to the Coordinator of Academic Integrity.  The typical sanction for a violation is a grade of an "XF" in the course.  A second violation typically results in dismissal from the University.</p>

<p>Your assignments will be electronically compared to everyone else's. If you assist someone in cheating you are guilty as well (this year or next). You must type and format your assignments yourself, starting an assignment or copying and pasting, from someone else's assignment is a case of academic dishonesty and will be treated as such. Each work submitted must be your own work, no collaboration is allowed.</p>

<p>The only external programming code you are allowed to use are the examples I give you. <span class="highlightRed">Any other external code (ie found from a google search etc) is considered academic dishonesty and will be treated as such.</span> If you feel the need to use free code or shareware code please consult with your instructor PRIOR to using it.</p></section> <!-- ########### main Content ########### -->
<footer>
<p>Web designed by: <span id="author"></span>
</p>
</footer> <!-- end footer -->
</div> <!-- id="wrapper" --> 
</body>
</html>