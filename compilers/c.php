<?php

header('Access-Control-Allow-Origin: *');  
$str = "%23include%20%3Cstdio.h%3E%0A%23define%20SIZE%2010%0A%20%0A%20%0Aint%20ar%5BSIZE%5D%3B%0Aint%20top1%20%3D%20-1%3B%0Aint%20top2%20%3D%20SIZE%3B%0A%20%0A%2F%2FFunctions%20to%20push%20data%0Avoid%20push_stack1%20%28int%20data%29%0A%7B%0A%20%20if%20%28top1%20%3C%20top2%20-%201%29%0A%20%20%7B%0A%20%20%20%20ar%5B%2B%2Btop1%5D%20%3D%20data%3B%0A%20%20%7D%0A%20%20else%0A%20%20%7B%0A%20%20%20%20printf%20%28%22Stack%20Full%21%20Cannot%20Push%5Cn%22%29%3B%0A%20%20%7D%0A%7D%0Avoid%20push_stack2%20%28int%20data%29%0A%7B%0A%20%20if%20%28top1%20%3C%20top2%20-%201%29%0A%20%20%7B%0A%20%20%20%20ar%5B--top2%5D%20%3D%20data%3B%20%0A%20%20%7D%0A%20%20else%0A%20%20%7B%0A%20%20%20%20printf%20%28%22Stack%20Full%21%20Cannot%20Push%5Cn%22%29%3B%0A%20%20%7D%0A%7D%0A%20%0A%2F%2FFunctions%20to%20pop%20data%0Avoid%20pop_stack1%20%28%29%0A%7B%0A%20%20if%20%28top1%20%3E%3D%200%29%0A%20%20%7B%0A%20%20%20%20int%20popped_value%20%3D%20ar%5Btop1--%5D%3B%0A%20%20%20%20printf%20%28%22%25d%20is%20being%20popped%20from%20Stack%201%5Cn%22%2C%20popped_value%29%3B%0A%20%20%7D%0A%20%20else%0A%20%20%7B%0A%20%20%20%20printf%20%28%22Stack%20Empty%21%20Cannot%20Pop%5Cn%22%29%3B%0A%20%20%7D%0A%7D%0Avoid%20pop_stack2%20%28%29%0A%7B%0A%20%20if%20%28top2%20%3C%20SIZE%29%0A%20%20%7B%0A%20%20%20%20int%20popped_value%20%3D%20ar%5Btop2%2B%2B%5D%3B%0A%20%20%20%20printf%20%28%22%25d%20is%20being%20popped%20from%20Stack%202%5Cn%22%2C%20popped_value%29%3B%0A%20%20%7D%0A%20%20else%0A%20%20%7B%0A%20%20%20%20printf%20%28%22Stack%20Empty%21%20Cannot%20Pop%5Cn%22%29%3B%0A%20%20%7D%0A%7D%0A%20%0A%2F%2FFunctions%20to%20Print%20Stack%201%20and%20Stack%202%0Avoid%20print_stack1%20%28%29%0A%7B%0A%20%20int%20i%3B%0A%20%20for%20%28i%20%3D%20top1%3B%20i%20%3E%3D%200%3B%20--i%29%0A%20%20%7B%0A%20%20%20%20printf%20%28%22%25d%20%22%2C%20ar%5Bi%5D%29%3B%0A%20%20%7D%0A%20%20printf%20%28%22%5Cn%22%29%3B%0A%7D%0Avoid%20print_stack2%20%28%29%0A%7B%0A%20%20int%20i%3B%0A%20%20for%20%28i%20%3D%20top2%3B%20i%20%3C%20SIZE%3B%20%2B%2Bi%29%0A%20%20%7B%0A%20%20%20%20printf%20%28%22%25d%20%22%2C%20ar%5Bi%5D%29%3B%0A%20%20%7D%0A%20%20printf%20%28%22%5Cn%22%29%3B%0A%7D%0A%20%0Aint%20main%28%29%0A%7B%0A%20%20int%20ar%5BSIZE%5D%3B%0A%20%20int%20i%3B%0A%20%20int%20num_of_ele%3B%0A%20%0A%20%20printf%20%28%22We%20can%20push%20a%20total%20of%2010%20values%5Cn%22%29%3B%0A%20%0A%20%20%2F%2FNumber%20of%20elements%20pushed%20in%20stack%201%20is%206%0A%20%20%2F%2FNumber%20of%20elements%20pushed%20in%20stack%202%20is%204%0A%20%0A%20%20for%20%28i%20%3D%201%3B%20i%20%3C%3D%206%3B%20%2B%2Bi%29%0A%20%20%7B%0A%20%20%20%20push_stack1%20%28i%29%3B%0A%20%20%20%20printf%20%28%22Value%20Pushed%20in%20Stack%201%20is%20%25d%5Cn%22%2C%20i%29%3B%0A%20%20%7D%0A%20%20for%20%28i%20%3D%201%3B%20i%20%3C%3D%204%3B%20%2B%2Bi%29%0A%20%20%7B%0A%20%20%20%20push_stack2%20%28i%29%3B%0A%20%20%20%20printf%20%28%22Value%20Pushed%20in%20Stack%202%20is%20%25d%5Cn%22%2C%20i%29%3B%0A%20%20%7D%0A%20%0A%20%20%2F%2FPrint%20Both%20Stacks%0A%20%20print_stack1%20%28%29%3B%0A%20%20print_stack2%20%28%29%3B%0A%20%0A%20%20%2F%2FPushing%20on%20Stack%20Full%0A%20%20printf%20%28%22Pushing%20Value%20in%20Stack%201%20is%20%25d%5Cn%22%2C%2011%29%3B%0A%20%20push_stack1%20%2811%29%3B%0A%20%0A%20%20%2F%2FPopping%20All%20Elements%20From%20Stack%201%0A%20%20num_of_ele%20%3D%20top1%20%2B%201%3B%0A%20%20while%20%28num_of_ele%29%0A%20%20%7B%0A%20%20%20%20pop_stack1%20%28%29%3B%0A%20%20%20%20--num_of_ele%3B%0A%20%20%7D%0A%20%0A%20%20%2F%2FTrying%20to%20Pop%20From%20Empty%20Stack%0A%20%20pop_stack1%20%28%29%3B%0A%20%0A%20%20return%200%3B%0A%7D%0A";
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
@$email = $request->email;
@$email1 = $request->input;

$decode=utf8_encode(urldecode($str));
$decode1 =utf8_encode(urldecode($email1));

$CC="gcc";
$out="timeout 5s ./a.out";
$code=$decode;
$input=$decode1;
$filename_code="main.c";
$filename_in="input.txt";
$filename_error="error.txt";
$executable="a.out";
$command=$CC." -lm ".$filename_code;	
$command_error=$command." 2>".$filename_error;
$check=0;

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
// 		echo "<pre>$output</pre>";
@$myObj->name = $output;
$myJSON = json_encode($myObj);
echo $myJSON;	


}
else if(!strpos($error,"error"))
{
// echo "<pre>$error</pre>";


if(trim($input)=="")
{
    $output=shell_exec($out);
}
else
{
    $out=$out." < ".$filename_in;
    $output=shell_exec($out);
}
// 		echo "<pre>$output</pre>";
@$myObj->name = $output;
$myJSON = json_encode($myObj);
echo $myJSON;	
}
else
{
@$myObj->name = $error;
$myJSON = json_encode($myObj);
echo $myJSON;		

$check=1;
}
$executionEndTime = microtime(true);
$seconds = $executionEndTime - $executionStartTime;
// $seconds = sprintf('%0.2f', $seconds);
// echo "<pre>Compiled And Executed In: $seconds s</pre>";
if($check==1)
{
// echo "<pre>Verdict : CE</pre>";
}
else if($check==0 && $seconds>3)
{
// echo "<pre>Verdict : TLE</pre>";
}
else if(trim($output)=="")
{
// echo "<pre>Verdict : WA</pre>";
}
else if($check==0)
{
// echo "<pre>Verdict : AC</pre>";
}
exec("rm $filename_code");
exec("rm *.o");
exec("rm *.txt");
exec("rm $executable");
 ?>
 
