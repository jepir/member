<?php
include("./dbcon.php");

$num = $_POST["num"];
$name = $_POST["name"];
$major = $_POST["major"];
$addr = $_POST["addr"];

$sql = "INSERT INTO member (snum, sname, smajor, saddr)
VALUES ('$num', '$name', '$major', '$addr')";

if (mysqli_query($conn, $sql)) {
  echo "레코드가 저장되었습니다. 저장되었습니다.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>

<div>
<a href="./input.php">회원입력</a>
</div>

<div>
<a href="./list.php">회원정보</a>
</div>
