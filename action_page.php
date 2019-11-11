<html>
<body>
<form action="#prints" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
	
	<div id="prints" style="">
		<?php 
			$name=$_POST["name"]; 
			$email=$_POST["email"]; 
			echo $name, $email;
		?>
		
	</div>

</body>
</html>