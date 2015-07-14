<div class = "back-image right"></div>
<div class = "container page">

	<form id = "contact-form" action="mail" method="POST">
		<div id = "errors">
			<p><?php echo $error ?></p>
		</div>
		<table>
			<tr>
				<td><label>Name </label></td>
		 		<td><input type="text" name="name" value = "<?php echo $name ?>"></td>
		 	</tr>
			<tr>
				<td><label>Email </label></td>
		 		<td><input type="text" name="email" value = "<?php echo $email ?>"></td>
		 	</tr>	
		 	<tr>
				<td><label>Phone </label></td>
		 		<td><input type="text" name="phone" value = "<?php echo $phone ?>"></td>
		 	</tr>	
		 	<tr>
				<td><label>Message </label></td>
		 		<td><textarea name="message" rows="6" cols="25"><?php echo $message ?></textarea></td>
		 	</tr>		 	
		 	<tr>
		 		<td><input class = "submit" type="submit" value="Send"></td>
		 		<td></td>
		 	</tr>
		 </table>
	</form>

</div>

