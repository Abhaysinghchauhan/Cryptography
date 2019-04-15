<?php

if(isset($_POST["cryt"]))
{
	$data=$_POST["data"];
	$file_name=$_POST["filename"];
	if($data=="")
	{
		header("location: index.php");
	}
	else
	{
		$alpha=["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"," "];
		$value=["1","~","3","`","4","!","5","@","6","#","7","$","8","%","9","^","0",".","/","(",")",":","|","+","_","{","<"];

		$data_s=strtolower($data);

		for($i=0;$i<27;$i++)
		{
			$data_o=strtolower($alpha[$i]);
			$data_c=$value[$i];

			$main_data=str_replace($data_o,$data_c,$data_s);
			$data_s=$main_data;
			
		}

		
		$open=fopen("Data/".$file_name.".txt","w");
		fwrite($open,$main_data);
		fclose($open);

		header("location: index.php?id=5");


	}

}
else
{
 	header("location: index.php");
}


?>