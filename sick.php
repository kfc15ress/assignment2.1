

<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="author" content="Robert M. Erickson">
 <title>CS 142 Advanced Web Design: CSS and Usability</title>
 <meta name="description" content="This course provides an in depth exploration of the foundation of  Cascading Style Sheets and covering Web Usability to help you create a pleasing user experience for visitors to your site."/>
<!-- https://www.uvm.edu/~rerickso/education/classes/2013_Summer/css/base.css -->
<!-- css/base.css -->
<link href="clbaldwi.css" rel="stylesheet" type="text/css" media="screen" />
<link href="print.css" rel="stylesheet" type="text/css" media="print" />
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

<body id="sick">
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
Student: clbaldwi
</span>
<span id="studentGrade" >Current <a href="grades.php">Grade</a>: 88</span>
<span id="classRank">
Rank: 12 of 8
</span>
</div> <!-- %^%^%^%^%^ student info %^%^%^%^%^ -->

<nav id="mainMenu"> <!-- %^%^%^%^%^%^%^%^%^%^%^%^ Navigation %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^% -->
<ol>
<li class="menuLink"><a href="assignments.php">Assignments</a></li>
<li class="menuLink"><a href="calendar.php?abWeek=10">Calendar</a></li>
<li class="menuLink"><a href="lectures.php">Lectures</a></li>
<li class="menuLink activeLink"><a href="sick.php">Sick</a></li>
<li class="menuLink"><a href="syllabus.php">Syllabus</a></li>
<li class="menuLink"><a href="submitAssignment.php">Submit Assignment</a></li>
</ol>
</nav> <!-- navigation -->
<!-- ######################## adminMenu ######################## -->
<nav id='adminMenu' class='menu gradesPage'>
<ol>
		<li class="menuAdmin menuLink"><a href="sample.php">Attendance</a></li>
		<li class="menuAdmin menuLink"><a href="sample.php">Class List</a></li>
		<li class="menuAdmin menuLink"><a href="sample.php">Grading Criteria</a></li>
		<li class="menuAdmin menuLink"><a href="sample.php">Enter Grades</a></li>
		<li class="menuAdmin menuLink"><a href="sample.php">Class Report</a></li>
		<li class="menuAdmin menuLink"><a href="sample.php">Group Report</a></li>
		<li class="menuAdmin menuLink"><a href="sample.php">Summary</a></li>
	</ol>
</nav>
<!-- ######################## adminMenu ######################## -->
</div> <!-- ends candyWrapper -->
<section id="mainContent"> <!-- ######################## main Content ######################## -->
<script type="text/javascript"><!-- 
function setCallIn(reason){   switch(reason)   {   case 19:     document.getElementById("butSubmit").value="Call in Sick";     break;   case 16:     document.getElementById("butSubmit").value="Take a Personal Day";     break;   case 13:     document.getElementById("butSubmit").value="I have a Game Today";     break;   case 11:     document.getElementById("butSubmit").value="I have finsihed lab";     break;   } } 
//--> 
</script> <form method='post' name='callInSick' id='callInSick' action=''><fieldset class="form"><fieldset class="given"><p>Student: Crystal L. Baldwin</p>	<input type="hidden" id="student" name="student" value="clbaldwi"/><p>Date: June 4, 2013</p>	<input type="hidden" id="dateSick" name="dateSick" value="June 4, 2013"/><p>CRN: 60649 - CS 142 Advanced Web Design: CSS and Usability</p>	<input type="hidden" id="crn" name="crn" value="60649"/></fieldset><fieldset class="radio">   <legend>Reason</legend>   <label><input type="radio" id="optSick" name="optReason" value="S" onclick="javscript:setCallIn(19);"                 tabindex="231" checked="checked" />Sick</label>   <label><input type="radio" id="optPersonal" name="optReason" value="P" onclick="javscript:setCallIn(16);"        tabindex="233" />Personal Day</label>   <label><input type="radio" id="optPersonal" name="optReason" value="G" onclick="javscript:setCallIn(13);"        tabindex="233" />Game Day</label></fieldset>	<fieldset><label for="txtComments" class="required">Comments (not required) </label><textarea id="txtComments" name="txtComments" tabindex="271" cols="40" rows="5" onfocus="this.select()"></textarea></fieldset><fieldset><label for="butSubmit">An email will be sent to you for your records. </label><input type="submit" id="butSubmit" name="butSubmit" value="Call in Sick"            tabindex="991" class="button"/></fieldset></fieldset></form></section> <!-- ########### main Content ########### -->
<footer>
<p>Web designed by: <span id="author"></span>
</p>
</footer> <!-- end footer -->
</div> <!-- id="wrapper" --> 
</body>
</html>