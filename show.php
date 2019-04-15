<?php


$x=$_GET["data"];

$sun=fopen($x,"r");
$ss=fread($sun,filesize($x));	



$data=$ss;

			$alpha=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"," "];
		$value=["1","~","3","`","4","!","5","@","6","#","7","$","8","%","9","^","0",".","/","(",")",":","|","+","_","{","<"];

		$data_s=strtolower($data);

		for($i=0;$i<27;$i++)
		{
			$data_o=strtolower($alpha[$i]);
			$data_c=$value[$i];

			$main_data=str_replace($data_c,$data_o,$data_s);
			$data_s=$main_data;
			
		}


		echo "<p>$main_data</p>";

fclose($sun);

?>