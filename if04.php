<?php
	//--if04.php
	$score = 80;
	if( $score >= 80 )
	{
		echo "คุณได้เกรด A";
	}else if( $score >= 70 )
	{
		echo "คุณได้เกรด B";
	}else if( $score >= 60 )
	{
		echo "คุณได้เกรด C";
	}else if( $score >= 50 )
	{
		echo "คุณได้เกรด D";
	}else if( $score < 50 )
	{
		echo "คุณได้เกรด F";
	}
?>