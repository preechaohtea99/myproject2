<?php
//--login.php
$use= $_POST[ 'username'];
$password= $_POST[ 'password'];
if ($use=="admin") 
{
	echo "ยินดีต้อนรับคุณ" $use ".คุณคือผู้ดูแลระบบ";
	echo "<br><a href='admin/index.php'>ลิ้งค์ไปหน้า Backend</a>";
}
else if ($use=="ohtea") {
	echo "ยินดีต้อนรับคุณ" $use ".คุณคือสมาชิกชมรม";
	echo "<br><a href='home/index.php'>ลิ้งค์ไปหน้า Frontend</a>";
}
else {
	echo "ยินดีต้อนรับคุณ" $use ".คุณคือผู้ใช้งานทั่วไป";
	echo "<br><a href='../'>ลิ้งค์ไปหน้า User (myproject) </a>";
}


?>