<?php

	putenv("PATH=C:\Program Files\Java\jdk-19\bin");

	$CC="javac";
	$out="java Main";
	$code=$_POST["code"];
	$input=$_POST["input"];
	$filename_code="Main.java";
	$filename_in="input.txt";
	$filename_error="error.txt";
	$runtime_file="runtime.txt";
	$executable="*.class";
	$command=$CC." ".$filename_code."\nEOF";	
	$command_error=$command." 2>".$filename_error;
	$runtime_error_command=$out." 2>".$runtime_file;

	//if(trim($code)=="")
	//die("The code area is empty");
	file_put_content($filename_code,$code);
	file_put_content($filename_in,$input);
	// $file_code=fopen($filename_code,"w+");
	// fwrite($filename_code,$code);
	// fclose($filename_code);
	// $file_in=fopen($filename_in,"w+");
	// fwrite($filename_in,$input);
	// fclose($filename_in);
	// exec("cacls  $executable /g everyone:f"); 
	// exec("cacls  $filename_error /g everyone:f");	

	shell_exec($command_error);
	$error=file_get_contents($filename_error);

	if(trim($error)=="")
	{
		if(trim($input)=="")
		{
			shell_exec($runtime_error_command);
			$runtime_error=file_get_contents($runtime_file);
			$output=shell_exec($out);
		}
		else
		{
			shell_exec($runtime_error_command);
			$runtime_error=file_get_contents($runtime_file);
			$out=$out." < ".$filename_in."\nEOF";
			$output=shell_exec($out);
		}
		//echo "<pre>$runtime_error</pre>";
		//echo "<pre>$output</pre>";
		echo "$output";
		  //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else if(!strpos($error,"error"))
	{
		echo "<pre>$error</pre>";
		if(trim($input)=="")
		{
			$output=shell_exec($out);
			echo "<pre>$output</pre>";
		}
		else
		{
			$out=$out." < ".$filename_in."\nEOF";
			$output=shell_exec($out);
			echo "<pre>$output</pre>";
		}
		//echo "<pre>$output</pre>";
		echo "$output";
		  //echo "<textarea id='div' class=\"form-control\" name=\"output\" rows=\"10\" cols=\"50\">$output</textarea><br><br>";
	}
	else
	{
		echo "<pre>$error</pre>";
	}
	exec("del $filename_code");
	exec("del *.txt");
	exec("del $executable");
?>
