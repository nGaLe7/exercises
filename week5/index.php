<?php

session_start();

?>
<link rel="stylesheet" type="text/css" media="screen" href="styles.css"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="script.js"></script>
<ul>
 <li><a href="article.php" target="output" onclick="loadDiv1()">Articles</a></li>
 <li><a href="partners.php" target="output" onclick="loadDiv2()">Partners</a></li>
 <li><a href="users.php" target="output" onclick="loadDiv3()">User details</a></li>
</ul>



<iframe id="framedIt" name="output"></iframe>

<div id="loadScreen">

</div>