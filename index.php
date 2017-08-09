<?php

	function get_buttons()
	{
		$str='';
		$btns=array(

			1=>'Speichern'
			2=>'Abbrechen'
			3=>'Refresh'
			4=>'Löschen'
			5=>'Senden'
		);
		while(list($k,$v))=each($btns))
		{
			$str.='&nbsp;<input type="submit" value="'.$v.'" name="btn_'.$k.'" id="btn_'.$k.'"/>';
		}
		return $str;
	}

?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<div id="buttons_panel">
		<?php echo get_buttons(); ?>
	</body>
</html>
