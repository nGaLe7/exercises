// http://api.jquery.com/load/

function loadDiv1() {
    $( "#loadScreen" ).load( "article.php");
    $( "#loadScreen").html( 'loading');
}

function loadDiv2() {
    $( "#loadScreen" ).load( "partners.php");
    $( "#loadScreen").html( 'loading');
}

function loadDiv3() {
    $( "#loadScreen" ).load( "users.php");
    $( "#loadScreen").html( 'loading');
}


// https://api.jquery.com/jquery.get/