<?php 
	mysql_connect("", "fwrdcom", "6cg5W5f9Pf") or (mysql_error());
	mysql_select_db("fwrdcom_wp");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<!-- <img src="http://ia.media-imdb.com/images/M/MV5BMjE0Nzg0MzA4N15BMl5BanBnXkFtZTcwOTE4NTU3OQ@@._V1_SX300.jpg" alt=""> -->
	<?php 
		$image     = 'http://ia.media-imdb.com/images/M/MV5BMjE0Nzg0MzA4N15BMl5BanBnXkFtZTcwOTE4NTU3OQ@@._V1_SX300.jpg';
		$mime_type = pathinfo($image, PATHINFO_EXTENSION); //$ext will be gif
		
		$imageData = base64_encode( file_get_contents($image) );
		
		// Format the image SRC :  data:{mime};base64,{data};
		$src       = 'data: image/'.$mime_type.';base64,'.$imageData;

		// Echo out a sample image
		echo '<img src="' . $src . '">';
	?>

	<?php 

	?>
</body>
</html>