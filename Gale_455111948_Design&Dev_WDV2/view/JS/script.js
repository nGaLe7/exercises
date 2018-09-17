

// https://www.w3schools.com/jquery/default.asp 

// probable solution for show/hide elements https://support.zendesk.com/hc/en-us/articles/203661316-Hide-or-show-HTML-based-on-user-s-role-or-group 


// possible solution for show/hide elements with $_SESSION https://stackoverflow.com/questions/19110684/php-ajax-how-to-show-hide-div-on-session-variable-value/19111020 
// or in php https://forums.adobe.com/thread/962783

/*    Examples of code, not suited for this. 

  
 function processForm(enterForm) {
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
}

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

//$('output').load(url);
//console.log(url);

}

function populateData() {
    //console.log('change');
    document.getElementById('pcode').value = document.getElementById('pcode_list').value;
}


*/