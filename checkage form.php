...........................................
checkage.php
.........................................

<?php

$age=$_GET["myage"];

// $papers="";
// if(!empty($_GET["papers"])){
// $papers="yes";
// }

// $message=($age>18)?"YES":"NO";
// echo "$message";

// check if checkbox empty
// ternary operator

$papers=empty($_GET["papers"])?"":"yes";


if($age<=0){
    echo "INVALID AGE";
}

else if($age==17 && $papers=="yes"){
    echo "ELIGIBLE FOE CNIC<br>SPECIAL CASE";
}

else if($age>=18 && $age<=55) {
    //nested for 17years old
    echo "ELIGIBLE FOR CNIC <br>5 YEARS";
}
else if($age>=55 ){
    echo"ELIGIBLE FOR CNIC <BR>PERMENANT";
}
else {
    echo "NOT ELIGIBLE FOR CNICs";
}

?>


........................................
inter link/form.php
.......................................
<HTML>
<HEAD>
<TITLE>Personal Details</TITLE>
</HEAD>
<BODY>
<H4>Please enter thr information</H4>
<FORM action="checkage.php" method="GET">
<table>
<tr>
<td>Name:</td>
<td><input type="text" name="myname"> </td>
</tr>

<td>age:</td>
<td><input type="myage" name="myage"> </td>
</tr>

<tr>
<td><input type="checkbox" name="papers" id="papers"> </td>
</tr>
</table>
<br>
<input type="submit" value="Submit">
</FORM>
</BODY>
</HTML>


