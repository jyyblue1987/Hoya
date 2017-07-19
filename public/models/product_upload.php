<?php

$output_dir = "../uploads/";
		$ret[]="invalid Id";
if(isset($_GET['id'])){
	$ret[]="invalid file";
	$id = $_GET['id'];
	if (isset($_FILES["myfile"]))
	{
		$ret = array();
		$error = $_FILES["myfile"]["error"];
		//You need to handle  both cases
		//If Any browser does not support serializing of multiple files using FormData() 
		if (!is_array($_FILES["myfile"]["name"])) //single file
		{
			$fileName = $_FILES["myfile"]["name"];
			$ext = pathinfo($fileName, PATHINFO_EXTENSION);	
			$filename1 = "fullproduction_back1.".$ext;
			switch($id){
				case 1:
					$filename1 = "fullproduction_back1.".$ext;
					break;
				case 2:
					$filename1 = "fullproduction_back2.".$ext;
					break;
				case 3:
					$filename1 = "fullproduction_back3.".$ext;
					break;
				case 4:
					$filename1 = "fullproduction_back4.".$ext;
					break;
				default:
					$filename1 = "fullproduction_back1.".$ext;
					break;
			}
			if(file_exists($output_dir . $filename1)){
				unlink($output_dir . $filename1);
			}
			move_uploaded_file($_FILES["myfile"]["tmp_name"], $output_dir . $filename1);
			$ret[] = $filename1;
		}
		else  //Multiple files, file[]
		{
			$fileCount = count($_FILES["myfile"]["name"]);
			for ($i = 0; $i < $fileCount; $i++)
			{
				$fileName = $_FILES["myfile"]["name"][$i];
				$ext = pathinfo($fileName, PATHINFO_EXTENSION);	
				$filename1 = "ad_".time().".".$ext;
				move_uploaded_file($_FILES["myfile"]["tmp_name"][$i], $output_dir . $filename1);
				$ret[] = $filename1;
			}
		}
		echo $ret[0];//json_encode($ret);
	}else{
		echo $ret[0];//json_encode($ret);
	}
}else{	
		echo $ret[0];//json_encode($ret);
}
?>