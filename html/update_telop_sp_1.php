<!DOCTYPE html>
<head>
	<title>retort-pack</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/update_telop_sp_1.css">
	
</head>

<!-- List of valiables.
	$db_connect -> Database connect instance.
	$db_host -> Database Host IP Address.
	$db_user -> Database User.
	$db_password -> Database User's Password.
	$db_name -> Database's Name.
	$menu_sql -> SQL.
	$sql_result -> exec SQL Result.
	$menu_info -> Selected menu information.
-->

	<body>
			<?php
				require './batch/connect_to_db.php';
			?>

		<div id="master">
			<form action="./update_telop_sp_2.php" method="POST">
                <p>テロップ更新</p>
                <input type="text" name="message" id="message_input">
                <br><br><br>
			    <input type="submit" id="submit_btn" value="この内容で更新する">
			</form>

			<!-- <input type="button" value="最初へ戻る" onClick="location.href='update_sp_2.php'"> -->
		</div>
	</body>
</html>
