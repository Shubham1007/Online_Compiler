<?php
?>
<html>
	<head>
		<title>Online Compiler for Off-Campus Students</title>
		<style>
		#resets
		{
			text-decoration:none;			
		}
		#whole
		{
				padding-left:300px;
		}
		
		</style>
	</head>

	<body>
	<div id="whole">
		<div id="content">
			<table class="code">
				<td class="code">	<br>
				<form action="compile.php" method="post" id="form">
					<center><font face="verdana" color="red" ><strong>Select Language of Interest:</strong></font> 
						<select name="language" id="language">
							<option style="color:blue;" value="c">C</option>
							<option style="color:red;" value="cpp">C++</option>
							<option style="color:green;" value="java">Java</option>
							<option style="color:brown;" value="glib">Graphics</option>
							<option style="color:grey;" value="nvcc">NVCC</option>
							
						</select></center>
					<br /><br /><br />
					
					<font  size="4%" face="verdana"><strong>Enter Your code here:<br/></strong></font>
					<br/><br />
					<textarea name="code" rows=15 cols=100 onkeydown=insertTab(this,event) id="code"></textarea><br/>
					<span id="errorCode" class="error"></span><br/><br/>
					<font  size="4%" face="verdana"><strong>Sample Input please:<br/></strong><br /><br /></font>
					<textarea name="input" rows=7 cols=100 id="input"></textarea><br/><br/>
					<input type="submit" value="Submit" id="submit">
					<input type="reset" value="Reset" id="resets"><br/>
				</form>
				</td>
		</div>

	</div>
	
	</body>
</html>
