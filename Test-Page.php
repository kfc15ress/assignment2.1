
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

<body id="displayAssign">
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
<li class="menuLink activeLink"><a href="assignments.php">Assignments</a></li>
<li class="menuLink"><a href="calendar.php?abWeek=10">Calendar</a></li>
<li class="menuLink"><a href="lectures.php">Lectures</a></li>
<li class="menuLink"><a href="sick.php">Sick</a></li>
<li class="menuLink"><a href="syllabus.php">Syllabus</a></li>
<li class="menuLink"><a href="submitAssignment.php">Submit Assignment</a></li>
</ol>
</nav> <!-- navigation -->
<nav id='adminMenu' class='menu gradesPage'>
<ol>
		<li class="menuAdmin menuLink"><a href="attendance.php">Attendance</a></li>
		<li class="menuAdmin menuLink"><a href="classList.php">Class List</a></li>
		<li class="menuAdmin menuLink"><a href="gradingCriteria.php">Grading Criteria</a></li>
		<li class="menuAdmin menuLink"><a href="grades.php">Enter Grades</a></li>
		<li class="menuAdmin menuLink"><a href="reportClass.php">Class Report</a></li>
		<li class="menuAdmin menuLink"><a href="reportGroup.php">Group Report</a></li>
		<li class="menuAdmin menuLink"><a href="gradesSummary.php">Summary</a></li>
	</ol>
</nav>
</div> <!-- ends candyWrapper -->
<section id="mainContent"> <!-- ######################## main Content ######################## --><div id="slide"><h1>Assignment: Redsign the Course Web Site</h1><h2>DUE: 2013-06-10</h2><h2>Category: Homework, Weight: 20%</h2><h2>Group number 1 presenting on 2013-06-10 at 08:00:00</h2><ol class='groupMembers'><li>Crystal L. Baldwin: clbaldwi@uvm.edu</li><li>Evan J. Gould: ejgould@uvm.edu</li></ol><h2>Folder Name: assignment2.1</h2><p>Link to your assignment (when you have it posted): <a href='http://www.uvm.edu/~ejgould/cs142/assignment2.1' target='_blank'>http://www.uvm.edu/~ejgould/cs142/assignment2.1</a></p> <h1>Assignment #2: Style the course pages</h1> 

<p>Study the class web sites layout and style sheet. For this assignment you will be creating a new look for the site. You cannot modify the html only the CSS style sheet (w3c.org standards of course). Keep in mind the different devices that we use today (desktop, laptop, tablet, phone etc).</p>

<ol>
    <li>Email your group members and get together to brainstorm ideas and identify strengths and weakness of the group.
    </li>
    <li>Create a drawing of the layout noting the div tags, classes and IDs that you will have access to. You will need to make this drawing an image (post it and submit it) as part of the assignment. Name it (assign2 folder assumed): cs142-layout.jpg (you can have more than one drawing, just use a naming convention for ex: cs142-layout-1.jpg). This would be the time to look over the html and if you think you will need any changes present the changes in class before next Friday.</li>
    

    <li>Design your own group look for the site.  Pretty much anything goes, move things around, add backgrounds whatever. I consider this the same as <a target="_blank" href="http://www.csszengarden.com/">CSS Zen Garden</a> only for the class web site. My goal is to collect the designs and allow students to choose whatever design they want. Be sure to name this style sheet <b>ejgould.css</b></li>

    <li>Create a print style sheet so your documents look somewhat reasonable printed. Name this style sheet <b>print_ejgould.css</b></li>

    <li>Be sure to include links to all files via your main index page. Each group member should have all the files on their site (they will of course be the same files) and each group member will need to submit the assignment.</li>

    <li>I am planning on doing peer grading but possible with presentations in class.</li>

    <li>I will be setting the default CSS to the one you design, till you make one you will have in effect no style sheet. Be sure to place your style sheet so it is accessible by this url:
<br /><br />
	
http://www.uvm.edu/~ejgould/cs142/assign2/ejgould.css<br /><br />
<br /><br />
</li>

<!--<li>Be sure to create a page that has a a link to your style by passing the value in the url like this:
<br /><br />
https://www.uvm.edu/~rerickso/education/classes/2013_Spring/syllabus.php?classRegNum=60649&amp;cssScreen=http://www.uvm.edu/~ejgould/cs142/assign2/ejgould.css&amp;cssPrint=http://www.uvm.edu/~ejgould/cs142/assign2/print-ejgould.css
<br /><br />as this is how I will be able to view your styles.
</li>
-->
<li>As always all css must pass Check Validation: <a target="_blank" href="https://www.uvm.edu/~rerickso/education/classes/2013_Spring/checkValidation.php?student=ejgould&folder=cs142&assignment=assign2">CSS validation</a>
</li>

<li>Be sure to provide a style for the Admin Menu. To see what the admin menu looks like save any page's source code and add the html code just after:
    
    <!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;color:black;background:white;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #1e90ff; font-weight: bold">&lt;/nav&gt;</span> <span style="color: #aaaaaa; font-style: italic">&lt;!-- navigation --&gt;</span>
<span style="color: #aaaaaa; font-style: italic">&lt;!-- place admin menu code here --&gt;</span>
</pre></div>

    
Otherwise many of your designs will be ruined when we look at it.<br /><br />
<!-- HTML generated using hilite.me --><div style="background: #ffffff; overflow:auto;width:auto;color:black;background:white;border:solid gray;border-width:.1em .1em .1em .8em;padding:.2em .6em;"><pre style="margin: 0; line-height: 125%"><span style="color: #aaaaaa; font-style: italic">&lt;!-- ######################## adminMenu ######################## --&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;nav</span> <span style="color: #1e90ff">id=</span><span style="color: #aa5500">&#39;adminMenu&#39;</span> <span style="color: #1e90ff">class=</span><span style="color: #aa5500">&#39;menu gradesPage&#39;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;ol&gt;</span>
		<span style="color: #1e90ff; font-weight: bold">&lt;li</span> <span style="color: #1e90ff">class=</span><span style="color: #aa5500">&quot;menuAdmin menuLink&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;&lt;a</span> <span style="color: #1e90ff">href=</span><span style="color: #aa5500">&quot;sample.php&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>Attendance<span style="color: #1e90ff; font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
		<span style="color: #1e90ff; font-weight: bold">&lt;li</span> <span style="color: #1e90ff">class=</span><span style="color: #aa5500">&quot;menuAdmin menuLink&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;&lt;a</span> <span style="color: #1e90ff">href=</span><span style="color: #aa5500">&quot;sample.php&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>Class List<span style="color: #1e90ff; font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
		<span style="color: #1e90ff; font-weight: bold">&lt;li</span> <span style="color: #1e90ff">class=</span><span style="color: #aa5500">&quot;menuAdmin menuLink&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;&lt;a</span> <span style="color: #1e90ff">href=</span><span style="color: #aa5500">&quot;sample.php&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>Grading Criteria<span style="color: #1e90ff; font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
		<span style="color: #1e90ff; font-weight: bold">&lt;li</span> <span style="color: #1e90ff">class=</span><span style="color: #aa5500">&quot;menuAdmin menuLink&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;&lt;a</span> <span style="color: #1e90ff">href=</span><span style="color: #aa5500">&quot;sample.php&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>Enter Grades<span style="color: #1e90ff; font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
		<span style="color: #1e90ff; font-weight: bold">&lt;li</span> <span style="color: #1e90ff">class=</span><span style="color: #aa5500">&quot;menuAdmin menuLink&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;&lt;a</span> <span style="color: #1e90ff">href=</span><span style="color: #aa5500">&quot;sample.php&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>Class Report<span style="color: #1e90ff; font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
		<span style="color: #1e90ff; font-weight: bold">&lt;li</span> <span style="color: #1e90ff">class=</span><span style="color: #aa5500">&quot;menuAdmin menuLink&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;&lt;a</span> <span style="color: #1e90ff">href=</span><span style="color: #aa5500">&quot;sample.php&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>Group Report<span style="color: #1e90ff; font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
		<span style="color: #1e90ff; font-weight: bold">&lt;li</span> <span style="color: #1e90ff">class=</span><span style="color: #aa5500">&quot;menuAdmin menuLink&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;&lt;a</span> <span style="color: #1e90ff">href=</span><span style="color: #aa5500">&quot;sample.php&quot;</span><span style="color: #1e90ff; font-weight: bold">&gt;</span>Summary<span style="color: #1e90ff; font-weight: bold">&lt;/a&gt;&lt;/li&gt;</span>
	<span style="color: #1e90ff; font-weight: bold">&lt;/ol&gt;</span>
<span style="color: #1e90ff; font-weight: bold">&lt;/nav&gt;</span>
<span style="color: #aaaaaa; font-style: italic">&lt;!-- ######################## adminMenu ######################## --&gt;</span>
</pre></div>

<li>Lastly we will talk more about this assignment in class so that will be your time to ask questions and clarify the assignment</li>

<li>You will be graded on the quality of <a href="peerGrade.php"> your peer grading</a>.</li>

</ol>

</div> <!--  id="slide" --><div id="studentComments">
  <p id="commentHeader">Discussions - 0 Comments</p>
<form action="model/process.php" method="post" id="frmComment">
<fieldset class="wrapper">
<legend> ejgould</legend>
<input type="hidden" name="hidUsername" value="ejgould" />
<input type="hidden" name="t" value="a" />
<input type="hidden" name="id" value="148449" />
<textarea id="txtComments" name="txtComments" tabindex="10" onfocus="this.select()" required></textarea>
<input type="submit" id="butSubmit" name="butSubmit" value="Submit" tabindex="20" class="button"/>
</fieldset>
</form>
</div> <!-- ends studentComments--></section> <!-- ########### main Content ########### -->
<footer>
<p>Web designed by: <span id="author"></span>
</p>
</footer> <!-- end footer -->
</div> <!-- id="wrapper" --> 
</body>
</html>