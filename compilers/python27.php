<?php

header('Access-Control-Allow-Origin: *');  
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
@$email = $request->email; 
@$email1 = $request->input;

$decode=rawurldecode($email);
$decode1 =rawurldecode($email1);


	$CC="python2.7";
	//$out="./a.out";
	$code=$decode;
	$input=$decode1;
	$filename_code="main.py";
	$filename_in="input.txt";
	$filename_error="error.txt";
	//$executable="a.out";
	$command=$CC." ".$filename_code;	
	$command_error=$command." 2>".$filename_error;

	//if(trim($code)=="")
	//die("The code area is empty");
	
	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	//exec("chmod 777 $executable"); 
	exec("chmod 777 $filename_error");

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($command);
		}
		else
		{
			$command=$command." < ".$filename_in;
			$output=shell_exec($command);
		}
		// echo "<pre>$output</pre>";

		@$myObj->name = $output;
$myJSON = json_encode($myObj);
echo $myJSON;	
	}
	else
	{
		// echo "<pre>$error</pre>";

		@$myObj->name = $error; 
$myJSON = json_encode($myObj);
echo $myJSON;	
	}
	exec("rm $filename_code");
	exec("rm *.txt");
?>
