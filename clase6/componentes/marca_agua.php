<?php
		$image = "../imagenes/correo.jpg";
		$marca_agua = "../imagenes/marca.png";


		$img = imagecreatefrompng($marca_agua);
		$extraer_formato = substr($image, -3);
		$extraer_formato = strtolower($extraer_formato);

		switch($extraer_formato) {
			case 'gif':
				$img2 = imagecreatefromgif($image);
				break;
			case 'jpg':
				$img2 = imagecreatefromjpeg($image);
				break;
			case 'png':
				$img2 = imagecreatefrompng($image);
				break;
			default:
				
				break;
				
		}

		imagecopy($img2, $img, (imagesx($img2)/2), (imagesy($img2)/2), (imagesx($img)/2), (imagesy($img)/2), imagesx($img)/2, imagesy($img)/2);

		header("Content-Type: image/jpeg");
		imagejpeg($img2);
		imagedestroy($img);
		imagedestroy($img2);

		?>