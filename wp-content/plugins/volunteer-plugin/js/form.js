jQuery(document).ready(function() {
    console.log("hi");
    jQuery( "#myForm" ).submit(function( event ) {
        event.preventDefault(); 
        $.ajax({
          url : "https://novice.clara.fi/api/2/organization/b698c430416bbafeb99414b5bde494ca/applicants.json", // end point
          type : "POST",
          dataType: 'json',
          headers: {
            'Content-Type': 'application/json'
          },
          
          data : JSON.stringify({ 
            first_name : $('#fname').val().trim(),
            last_name : $('#lname').val().trim(),
            email : $('#email').val().trim(),
            phone : $('#phone').val().trim(),
            service_id: 110062,
            consents: 14355
          }),
          
          // On success
          success : function(data) {
            console.log(data);
          },
          // On error
          error : function(jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);  // For debug purposes
              
          }
    
        });
    
    });
});
