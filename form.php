<form action="form.php" method="post">
<input name="value1" type="number" value="" placeholder="enter first number">
<br>
<input name="value2" type="number" value="" placeholder="enter second number">
<br>
<select name="operation">
   <option value="add">Add</option>
   <option value="sub">Subtract</option>
   <option value="mul">Multiply</option>
   <option value="div">Divide</option>
</select>
<br>
<input type="submit">
<br>
<?php
$value1=$_POST["value1"];
$value2=$_POST["value2"];
$operation=$_POST["operation"];

if($operation=="add")
{
	$result=(int)$value1+(int)$value2;
}
elseif($operation=="sub")
{
	$result=(int)$value1-(int)$value2;
}
elseif($operation=="mul")
{
	$result=(int)$value1*(int)$value2;
}
elseif($operation=="div")
{
	$result=(int)$value1/(int)$value2;
}

?>
<textarea name="result" rows="10" col="30">
<?php echo $result; ?>
</textarea>
</form>


