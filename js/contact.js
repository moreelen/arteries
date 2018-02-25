jQuery('#form_contact').submit(function(){ // Form submit
    console.log("Click");

    // Functions
    function isValidEmailAddress(email) {
        var pattern = new RegExp(/[a-z0-9!#$%&'*+=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i);
        return pattern.test(email);
    };

    // Some variables
    var submit = 0;
    var requareName = true;
    var name = jQuery('#user_name').val();
    var mail = jQuery('#user_email').val();
    var comment = jQuery('#user_comment').val();

    // Form validation
    // Name validate
    if( name.length < 1) {
        submit++;
        requareName = false;
    } else {
    }
    // Email validate
    if(!isValidEmailAddress(mail)) {
        submit++;
    } else {
        submit--;
    }

    // Send form data
    var data = jQuery(this).serialize();
    if( submit < 1 && requareName != false ) {  
    console.log("Sending.");  
        jQuery.ajax({
            type: 'POST',
            url: "/wp-admin/admin-ajax.php",
            data: data + '&action=contacts_form',
            success: function (data) {
                jQuery("#user_name, #user_email, #user_phone, #user_comment").val('');
                console.log("Success!");
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log("Fail...");
            }
        });
    }
});