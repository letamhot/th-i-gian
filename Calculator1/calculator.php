<!DOCTYP html>
<html>
	<head>
	<link rel="stylesheet" href="style.css">
		<title>Calculator</title>
		
	</head>
	<body>
        <form action="calculator.view.php" method="post" >
		<table>
			<tr>
				<th>Calculator</th>
			</tr> 
			
			<tr>
				<th>Enter your First num</th>
				<th><input type="number" name="fn" value=""/></th>
			</tr> 
			<tr>
				<th>Enter your Second num</th>
				<th><input type="number" name="sn" value=""/></th>
			</tr>
			<tr>
				<th>Select Your Choice</th>
				<th>
				<select name="ch">
                <option value="addition">Addition</option>
                        <option value="subtract">Subtract</option>
                        <option value="multiply">Multiply</option>
                        <option value="share">Share</option>
				</select>
				</th>
			</tr>
			<tr>
				<th colspan="2">
				<input type="submit" 
				name="save" value="Show Result"/>
				</th>
			</tr>
		</table>
		</form>
	</body>
</html>