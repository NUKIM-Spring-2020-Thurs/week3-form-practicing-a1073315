<meta http-equiv="content-type" content="text/html; charset=utf-8">

<?php

$name=$_POST["name"];
$day=$_POST["birthday"];
$old=$_POST["years"];
$id=$_POST["id"];
$gender=$_POST["gender"];
$eat=$_POST["eat"];
$inf=$_POST["information"];
$inte=$_POST["inte"];

//$eat=$_POST["eat"];
//$int=$_POST["inte"];

echo "學生:" .$name."<br/>";
echo "生日:" .$day."<br/>";
echo "年齡:" .$old."<br/>";
echo "學號:" .$id."<br/>";
echo "性別:" .$gender."<br/>";
echo "飲食:" .$eat."<br/>";



$infcount=count($inf);
for($i=0;$i<$infcount;$i++)
		{
			echo "獲得資訊來源:".$inf[$i]."<br/>";
		}

$intecount=count($inte);
for($j=0;$j<$intecount;$j++)
		{
			echo "興趣的活動:".$inte[$j]."<br/>";
		}

$comment=$_POST["comment"];
echo nl2br($comment);


?>