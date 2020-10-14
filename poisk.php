<?php

$search_q=$_POST['search'];

$l= mysqli_connect('localhost', 'root', '', 'magaz');

$search_q = trim($search_q);

$search_q = strip_tags($search_q);

$q= mysqli_query($l,"SELECT name LIKE '%$search_q%'");

$itog=mysqli_fetch_assoc($q);

while ($itog = mysqli_fetch_assoc($q)) {

printf("%s (%s)\n",$itog["name"]);

}

mysqli_free_result($q);

mysqli_close($l);

?>
