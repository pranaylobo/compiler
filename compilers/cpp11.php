<?php

header('Content-Type: text/html; charset=UTF-8');

header('Access-Control-Allow-Origin: *'); 
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
@$email = $request->email; 
@$email1 = $request->input;


$decode=rawurldecode($email);
$decode1 =rawurldecode($email1);


	$CC="g++ --std=c++11";
	$out="timeout 5s ./a.out";
	$code=$decode;
$input=$decode1;
	$filename_code="main.cpp";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$executable="a.out";
	$command=$CC." -lm ".$filename_code;	
	$command_error=$command." 2>".$filename_error;

	//if(trim($code)=="")
	//die("The code area is empty");
	
	$file_code=fopen($filename_code,"w+");
	fwrite($file_code,$code);
	fclose($file_code);
	$file_in=fopen($filename_in,"w+");
	fwrite($file_in,$input);
	fclose($file_in);
	exec("chmod 777 $executable"); 
	exec("chmod 777 $filename_error");	

	shell_exec($command_error);
	$error=file_get_contents($filename_error);
	$executionStartTime = microtime(true);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
		//echo "<pre>$output</pre>";
			//   echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
			@$myObj->name = $output;
$myJSON = json_encode($myObj);
echo $myJSON;	
	}
	else if(!strpos($error,"error"))
	{
		echo "<pre>$error</pre>";
		if(trim($input)=="")
		{
			$output=shell_exec($out);
		}
		else
		{
			$out=$out." < ".$filename_in;
			$output=shell_exec($out);
		}
						// echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
						
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
	$executionEndTime = microtime(true);
	$seconds = $executionEndTime - $executionStartTime;
	$seconds = sprintf('%0.2f', $seconds);
	// echo "<pre>Compiled And Executed In: $seconds s</pre>";
	if($seconds>3)
	{
		// echo "<pre>Verdict : TLE</pre>";
	}
	else
	{
		// echo "<pre>Verdict : AC</pre>";
	}
	exec("rm $filename_code");
	exec("rm *.o");
	exec("rm *.txt");
	exec("rm $executable");
?>
