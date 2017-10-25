<?php
//--if03.php
$name="manager";
if($name=="manager")
	{
	echo"ยินดีต้อนรับ คุณ <FONT COLOR=red>$name</FONT> คือผู้จัดการ<br>";
	echo"<a href='http://www.arnut.com'>ไปเว็บArnut.com</a>";
	}
	elseif ($name=="admin")
	{
	echo"ยินดีต้อนรับ คุณ <FONT COLOR=green>$name</FONT> คือผู้ดูแลระบบ";
	}
	elseif ($name=="webmaster")
	{
	echo"ยินดีต้อนรับ คุณ <FONT COLOR=#330099>$name</FONT> คือผู้ดูแลเว็บไซต์";
	}
	else
	{
	echo"ยินดีต้อนรับ คุณ $name คือผู้ใช้งาน";
	}
?>