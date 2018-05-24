<?php 
	/** format tanggal Indo**/

	function tgl_indo($date)
	{
	/** ARRAY HARI DAN BULAN**/	
		$Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
			
	/** MEMISAHKAN FORMAT TANGGAL, BULAN, TAHUN, DENGAN SUBSTRING**/		
		$tahun = substr($date, 0, 4);
		$bulan = substr($date, 5, 2);
		$tgl = substr($date, 8, 2);
		$waktu = substr($date, 11, 5);
		
		$result = $tgl." ".$Bulan[(int)$bulan-1]." ".$tahun;
		return $result;
	}

	function rupiah($angka){
		return "Rp ".number_format($angka);
	}

?>