
<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="author" content="Robert M. Erickson">
 <title>CS 142 Advanced Web Design: CSS and Usability</title>
 <meta name="description" content="This course provides an in depth exploration of the foundation of  Cascading Style Sheets and covering Web Usability to help you create a pleasing user experience for visitors to your site."/>
<!-- https://www.uvm.edu/~rerickso/education/classes/2013_Summer/css/base.css -->
<!-- css/base.css -->
<link href="clbaldwi.css" rel="stylesheet" type="text/css" media="screen" title="custom"/>
<link href="base.css" rel="stylesheet" type="text/css" title="base" />
<link href="print_clbaldwi.css" rel="stylesheet" type="text/css" media="print" />
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

<body id="calendar">
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
<span id="studentGrade" >Current <a href="grades.php">Grade</a>: 87</span>
<span id="classRank">
Rank: 13 of 8
</span>
</div> <!-- %^%^%^%^%^ student info %^%^%^%^%^ -->

<nav id="mainMenu"> <!-- %^%^%^%^%^%^%^%^%^%^%^%^ Navigation %^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^% -->
<ol>
<li class="menuLink"><a href="assignments.php">Assignments</a></li>
<li class="menuLink activeLink"><a href="calendar.php?abWeek=10">Calendar</a></li>
<li class="menuLink"><a href="lectures.php">Lectures</a></li>
<li class="menuLink"><a href="sick.php">Sick</a></li>
<li class="menuLink"><a href="syllabus.php">Syllabus</a></li>
<li class="menuLink"><a href="submitAssignment.php">Submit Assignment</a></li>
</ol>
</nav> <!-- navigation -->
<!-- place admin menu code here -->
</div> <!-- ends candyWrapper -->
<section id="mainContent"> <!-- ######################## main Content ######################## --><h2>Calendar</h2><table class='vcalendar'>
<tr id='attendanceRow'>
<th>Attendance for: clbaldwi</th><td class='Present'>Present</td><td class='Late'>Late</td><td class='Sick'>Sick</td><td class='Personal'>Personal</td><td class='Absent'>Absent</td><td class='labComplete'>LabComplete</td></tr>
<tr id='monthTitle'>
<th colspan='2'><a href='/~rerickso/education/classes/2013_Summer/calendar.php?date=1367553600'>&lt;-- Prev</a></th>
<th id='thismonth' colspan='3'>June - 2013</th>
<th colspan='2'><a href='/~rerickso/education/classes/2013_Summer/calendar.php?date=1372824000'>Next --&gt;</a></th>
</tr>
<tr id='days'>
<th title='Sunday' class='sun'>Sunday</th>
<th title='Monday' class='mon'>Monday</th>
<th title='Tuesday' class='tue'>Tuesday</th>
<th title='Wednesday' class='wed'>Wednesday</th>
<th title='Thursday' class='thu'>Thursday</th>
<th title='Friday' class='fri'>Friday</th>
<th title='Saturday' class='sat'>Saturday</th>
</tr>
<tr>
<td class='prevMonth May days Sun'><div class='date '>26</div></td>
<td class='prevMonth May days Mon'><div class='date '>27</div><div class="event vevent INFO ">Memorial Day</div>
</td>
<td class='prevMonth May days Tue'><div class='date Present'>28</div><div class="event vevent lecture "><a class="url" href="lecture.php?lid=156">CSS: Ch 8, 9, 10</a></div>
<div class="event vevent assignment "><a class="url" href="displayAssign.php?pid=148447">Styling a Resume</a></div>
</td>
<td class='prevMonth May days Wed'><div class='date Present'>29</div><div class="event vevent lecture "><a class="url" href="lecture.php?lid=157">CSS: Ch 11, 12, 13</a></div>
</td>
<td class='prevMonth May days Thu'><div class='date Present'>30</div><div class="event vevent lecture "><a class="url" href="lecture.php?lid=158">CSS: Ch 14</a></div>
</td>
<td class='prevMonth May days Fri'><div class='date '>31</div></td>
<td class='currentMonth Jun days Sat'><div class='date '>1</div></td>
</tr><tr><td class='currentMonth Jun days Sun'><div class='date '>2</div></td>
<td class='currentMonth Jun atoday Mon'><div class='date '>3</div></td>
<td class='currentMonth Jun days Tue'><a class="callInSick" href="sick.php?dateValue=1370318400"><img alt="Call in sick" src="images/sick.jpg" /></a><div class='date '>4</div></td>
<td class='currentMonth Jun days Wed'><a class="callInSick" href="sick.php?dateValue=1370404800"><img alt="Call in sick" src="images/sick.jpg" /></a><div class='date '>5</div></td>
<td class='currentMonth Jun days Thu'><a class="callInSick" href="sick.php?dateValue=1370491200"><img alt="Call in sick" src="images/sick.jpg" /></a><div class='date '>6</div></td>
<td class='currentMonth Jun days Fri'><a class="callInSick" href="sick.php?dateValue=1370577600"><img alt="Call in sick" src="images/sick.jpg" /></a><div class='date '>7</div></td>
<td class='currentMonth Jun days Sat'><div class='date '>8</div></td>
</tr><tr><td class='currentMonth Jun days Sun'><div class='date '>9</div></td>
<td class='currentMonth Jun days Mon'><a class="callInSick" href="sick.php?dateValue=1370836800"><img alt="Call in sick" src="images/sick.jpg" /></a><div class='date '>10</div><div class="event vevent lecture ">WU: 1, 2</div>
<div class="event vevent assignment "><a class="url" href="displayAssign.php?pid=148449">Redsign the Course Web Site</a></div>
</td>
<td class='currentMonth Jun days Tue'><div class='date '>11</div><div class="event vevent lecture ">WU: 3, 4</div>
</td>
<td class='currentMonth Jun days Wed'><div class='date '>12</div><div class="event vevent lecture ">WU: 5, 6</div>
</td>
<td class='currentMonth Jun days Thu'><div class='date '>13</div></td>
<td class='currentMonth Jun days Fri'><div class='date '>14</div><div class="event vevent assignment ">Before and After</div>
</td>
<td class='currentMonth Jun days Sat'><div class='date '>15</div></td>
</tr><tr><td class='currentMonth Jun days Sun'><div class='date '>16</div></td>
<td class='currentMonth Jun days Mon'><div class='date '>17</div><div class="event vevent lecture ">WU: 7, 8</div>
</td>
<td class='currentMonth Jun days Tue'><div class='date '>18</div><div class="event vevent lecture ">WU: 9,10, 11</div>
</td>
<td class='currentMonth Jun days Wed'><div class='date '>19</div><div class="event vevent assignment ">Attendance</div>
</td>
<td class='currentMonth Jun days Thu'><div class='date '>20</div></td>
<td class='currentMonth Jun days Fri'><div class='date '>21</div><div class="event vevent assignment ">Web Usability Testing</div>
</td>
<td class='currentMonth Jun days Sat'><div class='date '>22</div></td>
</tr><tr><td class='currentMonth Jun days Sun'><div class='date '>23</div></td>
<td class='currentMonth Jun days Mon'><div class='date '>24</div></td>
<td class='currentMonth Jun days Tue'><div class='date '>25</div></td>
<td class='currentMonth Jun days Wed'><div class='date '>26</div></td>
<td class='currentMonth Jun days Thu'><div class='date '>27</div></td>
<td class='currentMonth Jun days Fri'><div class='date '>28</div><div class="event vevent assignment ">Final Project Due: 07:30 - 10:15 AM</div>
</td>
<td class='currentMonth Jun days Sat'><div class='date '>29</div></td>
</tr><tr><td class='currentMonth Jun days Sun'><div class='date '>30</div></td>
<td class='nextMonth Jul days Mon'><div class='date '>1</div></td>
<td class='nextMonth Jul days Tue'><div class='date '>2</div></td>
<td class='nextMonth Jul days Wed'><div class='date '>3</div></td>
<td class='nextMonth Jul days Thu VACA'><div class='date '>4</div><div class="event vevent VACA ">Fourth of July</div>
</td>
<td class='nextMonth Jul days Fri'><div class='date '>5</div></td>
<td class='nextMonth Jul days Sat'><div class='date '>6</div></td>
</tr></table></section> <!-- ########### main Content ########### -->
<footer>
<p>Web designed by: <span id="author"></span>
</p>
</footer> <!-- end footer -->
</div> <!-- id="wrapper" --> 
</body>
</html>