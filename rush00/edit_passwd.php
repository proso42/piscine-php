<?php
include "header.php";
?>
<form method=POST action="edit_data_base_passwd.php">
	<div class="Sign_rect">
		<p align="center" class="Ident">Change le secret de ton Poney</p>
		<span class="Ident">Ancien secret :</span><input style="margin-left:51px" type="text" name="old_passwd" value=""/>
		</br>
		<span class="Ident">Nouveau secret :</span><input style="margin-left:27px" type="text" name="new_passwd" value=""/>
		</br>
		<span class="Ident">Confirmation :</span><input style="margin-left:60px" name="confirm_passwd" value=""/>
		</br></br></br>
		<input style="margin-left:220px" type="submit" name="submit" value="Changer le secret">
	</div>
</form>
<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</html>
