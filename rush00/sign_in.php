<?php
include "header.php";
?>
	<form method="POST" action="connect.php">
		<div class="Sign_rect">
			<p class="Ident" align="center">Selle ton poney</p>
			<span class="Ident">Nom du poney:</span><input style="margin-left:76px" type="text" name="login" value=""/>
			</br>
			<span class="Ident">Secret du Poney:</span> <input style="margin-left:50px" type="text" name="passwd" value=""/>
			</br>
			<input class="but-submit" type="submit" name"submit" value="En selle !"/>
			</br></br></br></br>
			<a class="Ident" href="register.php">Pas enore de poney ?</a>
		</div>
	</form>
	<div style="height:120px;"></div><footer><div>&copy; lowczarc & proso 2018 </div></footer>
</body>
</html>
