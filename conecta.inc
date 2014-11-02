<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?PHP
	function conecta_bd()
	{
		$link = mysqli_connect('mysql.hostinger.com.br', 'u784500201_root', 'aacb08TUBf', 'u784500201_escol');
		if($link){
			return($link);
		}
		return (FALSE);
	}
?>
</body>
</html>