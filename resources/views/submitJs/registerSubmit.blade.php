<script>
    let registerFormSubmitted = false;
    
    jQuery('#registerForm').submit(function(e){
        if (registerFormSubmitted) {
            return true; // Allow submission after reCAPTCHA
        }
        
        e.preventDefault();
        
        const submitBtn = document.getElementById('registerFormSubmit');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = 'Verifying...';
        submitBtn.disabled = true;
        
        // Execute reCAPTCHA v3
        grecaptcha.ready(function() {
            grecaptcha.execute('6LczXeQrAAAAAA6_iOZ6PXtD86gQrFT_WFujtvCy', {action: 'register_form'}).then(function(token) {
                // Add token to form
                let tokenInput = document.getElementById('recaptcha_token');
                if (!tokenInput) {
                    // Create the token input if it doesn't exist
                    tokenInput = document.createElement('input');
                    tokenInput.type = 'hidden';
                    tokenInput.name = 'recaptcha_token';
                    tokenInput.id = 'recaptcha_token';
                    document.getElementById('registerForm').appendChild(tokenInput);
                }
                tokenInput.value = token;
                
                submitBtn.innerHTML = 'Sending...';
                
                // Now submit via AJAX
                jQuery.ajax({
                    url: "{{url('registerForm_submit')}}",
                    data: jQuery('#registerForm').serialize(),
                    type: 'post',
                    success: function(result){
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        
                        if (result.status === 'success') {
                            $("#statusSuccessModal").modal('show');
                            document.getElementById("registerForm").reset();
                        } else {
                            $("#statusErrorsModal").modal('show');
                            // Show specific error message if available
                            if (result.message && result.message.includes('reCAPTCHA')) {
                                alert('Security verification failed. Please try again.');
                            }
                        }
                    },
                    error: function(xhr, status, error) {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                        $("#statusErrorsModal").modal('show');
                        console.error('Form submission error:', error);
                    }
                });
                
            }).catch(function(error) {
                // Reset button on reCAPTCHA error
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                alert('Security verification failed. Please try again.');
                console.error('reCAPTCHA error:', error);
            });
        });
    })


    // Fetch the url page name

    document.addEventListener("DOMContentLoaded", function() {
        // Get the current URL
        var currentURL = window.location.href;
        
        // Extract the last segment of the URL
        var lastSegment = currentURL.substr(currentURL.lastIndexOf('/') + 1);
        
        // Set the value of the page_name input field
        var pageNameInput = document.getElementById('pageNameInput');
        if (pageNameInput) {
            pageNameInput.value = lastSegment;
        }
    });

    jQuery('#contactForm').submit(function(e){
        document.getElementById('contactSubmit').innerHTML = 'Submitting...';
        document.getElementById('contactSubmit').disabled = true;
        e.preventDefault();
        jQuery.ajax({
            url: "{{url('contactForm_submit')}}",
            data: jQuery('#contactForm').serialize(),
            type: 'post',
            success: function(result){
                //console.log(result);
                if (result.status === 'success') {
                    
                    $("#statusSuccessModal").modal('show');
                    document.getElementById("contactForm").reset();
                    document.getElementById('contactSubmit').innerHTML = 'Submit Now';
                    document.getElementById('contactSubmit').disabled = false;
                    //alert(result.message); 
                } else {
                    $("#statusErrorsModal").modal('show');
                    document.getElementById("contactForm").reset();
                    document.getElementById('contactSubmit').innerHTML = 'Submit Now';
                    document.getElementById('contactSubmit').disabled  = false;
                    //alert(result.message); 
                }
            }
        })
    })

    jQuery('#getQuote').submit(function(e){
        document.getElementById('quote_submit').innerHTML = 'Submitting...';
        document.getElementById('quote_submit').disabled = true;
        e.preventDefault();
        jQuery.ajax({
            url: "{{url('contactForm_submit')}}",
            data: jQuery('#getQuote').serialize(),
            type: 'post',
            success: function(result){
                // console.log(result);
                if (result.status === 'success') {
                    
                    $("#statusSuccessModal").modal('show');
                    document.getElementById("getQuote").reset();
                    document.getElementById('quote_submit').innerHTML = 'Submit Now';
                    document.getElementById('quote_submit').disabled = false;
                    //alert(result.message); 
                } else {
                    $("#statusErrorsModal").modal('show');
                    document.getElementById("getQuote").reset();
                    document.getElementById('quote_submit').innerHTML = 'Submit Now';
                    document.getElementById('quote_submit').disabled  = false;
                    //alert(result.message); 
                }
            }
        })
    })
    
    //----------- Leads -------------
    
    jQuery('#qurieSubmitForm').submit(function(e){
        
        
        document.getElementById('qurieSubmit').innerHTML = 'Sending...';
        document.getElementById('qurieSubmit').disabled = true;
        e.preventDefault();
        jQuery.ajax({
            url: "{{url('query_submit')}}",
            data: jQuery('#qurieSubmitForm').serialize(),
            type: 'post',
            success: function(result){
                //console.log(result);
                if (result.status === 'success') {
                    
                    $("#statusSuccessModal").modal('show');
                    document.getElementById("qurieSubmitForm").reset();
                    document.getElementById('qurieSubmit').innerHTML = 'Send Message';
                    document.getElementById('qurieSubmit').disabled = false;
                    //alert(result.message); 
                } else {
                    $("#statusErrorsModal").modal('show');
                    document.getElementById("qurieSubmitForm").reset();
                    document.getElementById('qurieSubmit').innerHTML = 'Send Message';
                    document.getElementById('qurieSubmit').disabled = false;
                    //alert(result.message); 
                }
            }
        })
    })
</script>