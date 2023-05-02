<?php
	if (isset($_POST['nilai'])) {
		$nilai = $_POST['nilai'];

		switch (true) {
			case ($nilai >= 90 && $nilai <= 100):
				echo "Nilai Anda adalah A";
				break;
			case ($nilai >= 80 && $nilai < 90):
				echo "Nilai Anda adalah B";
				break;
			case ($nilai >= 70 && $nilai < 80):
				echo "Nilai Anda adalah C";
				break;
			case ($nilai >= 0 && $nilai < 70):
				echo "Nilai Anda adalah D";
				break;
			default:
				echo "Nilai tidak valid";
				break;
		}
	}
	?>