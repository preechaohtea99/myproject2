<?php
	//--switch01.php
$username="manager";
switch($username)
{
	case "manager":
		echo"ยินดีต้อนรับ คุณ <FONT COLOR=red>$username</FONT> คือผู้จัดการ<br>";
		break;
	case "admin":
		echo"ยินดีต้อนรับ คุณ <FONT COLOR=green>$username</FONT> คือผู้ดูแลระบบ<br>";
		break;
	case"webmaster":
		echo"ยินดีต้อนรับ คุณ <FONT COLOR=#FF6600>$username</FONT> คือผู้ดูแลเว็บไซต์<br>";
		break;
	default:
		echo"ยินดีต้อนรับ คุณ <FONT COLOR=pink>$username</FONT> คือผู้ใช้งาน<br>";
}
?>