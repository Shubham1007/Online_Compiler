<?php
	$CC="gcc";
	$out="a";
	$code=$_POST["code"];
	$input=$_POST["input"];
	$filename_code="main.c";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$executable="a";
	$command=$CC." -lm ".$filename_code;	
	$command_error=$command." 2>".$filename_error;
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
		echo "<pre>$output</pre>";
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
		echo "<pre>$output</pre>";
	}
	else
	{
		echo "<pre>$error</pre>";
	}
	exec("rm $filename_code");
	exec("rm *.o");
	exec("rm *.txt");
	exec("rm $executable");
?>