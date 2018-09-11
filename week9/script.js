document.getElementById('pcode').addEventListener('keyup', getData);
document.getElementById('pcode_list').addEventListener('change', populateData);
document.getElementById('pcode_list').addEventListener('click', populateData);

function getData() {
var getUrl = 'postcode.php?pcode=' + document.getElementById('pcode').value;
var htmlCode = '';
 $.ajax({
  type: "get",
   url: getUrl,
   dataType: 'json',
   success: function (msg) {
    for (var loop = 0;loop<msg.length;loop++) {
     htmlCode += '<option value="' + msg[loop].suburb + '">' + msg[loop].suburb + '</option>';
    }
     $('#pcode_list').html(htmlCode); 
    }
});


 /*       function processForm(enterForm) {
        $.ajax({
            type: "post",
            url: 'processform.php',
            data: $('#enterForm').serialize(),
            dataType:'html',
        success: function (msg) {
            $( "#divMessage" ).html( "add user complete" );
        }
    });
  //return false; // will always block entries to the database if left false
}*/

/*function doEmailCheck(enterForm) {
    var ajaxUrl = 'view.php?email=' + emailAddr;
       $.ajax({
           type: "get",
           url: ajaxUrl,
           dataType:'html',
       success: function (msg) {
           if(msg == 'user exists') {         
           $( "#errmsg" ).html( msg );}
           else {
               $( "#errmsg" ).html( '' );
           }
       }
   });
}*/


//$('output').load(url);
//console.log(url);

}

function populateData() {
    //console.log('change');
    document.getElementById('pcode').value = document.getElementById('pcode_list').value;
}

function loadDiv2() {
    $( "#loadScreen" ).load( "partners.php");
    $( "#loadScreen" ).html( 'loading');
}
