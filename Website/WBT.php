<html lang="en">

<head>
	<title>WBT chart</title>
	<link rel="stylesheet" type="text/css" href="wbt.css">
<!-- this code is here to load library for the drag function (for the box)-->
	        <script src="http://www.google.com/jsapi" type="text/javascript"></script>
        <script type="text/javascript" >
           google.load("jquery", "1.6.3");
           google.load("jqueryui", "1.8.16");
        </script>
        <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/base/jquery-ui.css"/>
        <script src="dragndrop.js" type="text/javascript"></script>
<!--library code ends here-->	
</head>
<body>
<?php
	include("MAINheader.php")
?>
	<script type="text/javascript" src="wz_dragdrop.js"></script>
<div id="wrapper">
	<div id="menu">
		<h2>main menu</h2><br>
			<a>Box</a>
				<div id="drag1" class="drag">


					<form id="draggable2" action="demo_form.asp">
						<label for="male">Task</label>
							<textarea id="usrname" name="usrname" rows="3" style="font-family: Arial" style="font-size: 22px" ></textarea><br>
					</form> 
				</div>


				<a>Arrow</a>
						<div id="arrow">
							<img src="arrow-right.jpg" id="arrow2" class="home" src="img_trans.gif">
							<img src="arrow-left.jpg" id="arrow3" class="home" src="img_trans.gif">
							<img src="arrow-up.jpg" id="arrow4" class="home2" src="img_trans.gif">
							<img src="arrow-down.jpg" id="arrow5" class="home2" src="img_trans.gif">
							<button onclick="myFunction()">Arrow help</button>
						<script>
							function myFunction()
							{
							alert("hold 'shift' and drag to resize arrows");
							}
						</script>



	<button onclick="printFunction()">Print</button>

<script>
function printFunction()
{
window.print();
}
</script>





						</div>
	</div>
							<h1 style="text-align:center; ">Work Breakdown Tree</h1>
							<link href="style.css">
								<div class="col" id ="droppable">

								</div>
]





	<script type="text/javascript">
	<!--
	SET_DHTML("arrow2"+COPY+50+RESIZABLE+CURSOR_HAND,"arrow3"+COPY+50+RESIZABLE+CURSOR_HAND,"arrow4"+COPY+50+RESIZABLE+CURSOR_HAND,"arrow5"+COPY+50+RESIZABLE+CURSOR_HAND);
	//-->
	</script>

	<div id="footer">INSE4C
			</div>
	
	
</div>
</body>
</html>
