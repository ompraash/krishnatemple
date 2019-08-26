$(function () {
    // Get the form.
    var form = $('#newsletter-signup');
    // Get the messages div.
    var formMessages = $('#form-messages');
    // Set up an event listener for the contact form.

    $(form).submit(function (e) {
        // Stop the browser from submitting the form.
        e.preventDefault();
        // Serialize the form data.
        var formData = $(form).serialize();
        // Submit the form using AJAX.
        $.ajax({
            type: 'POST',
            url: $(form).attr('action'),
            data: formData
         })
    .done(function (response) {
        // Make sure that the formMessages div has the 'success' class.
        $(formMessages).removeClass('newserror');
        $(formMessages).addClass('newssuccess');
        // Set the message text.
        $(formMessages).text(response);
        // Clear the form.
        $('#newsemail').val('');
      })
    .fail(function (data) {
        // Make sure that the formMessages div has the 'error' class.
        $(formMessages).removeClass('newssuccess');
        $(formMessages).addClass('newserror');
        // Set the message text.
        if (data.responseText !== '') {
            $(formMessages).text(data.responseText);
        } else {
            $(formMessages).text('Oops! Sorry ... An error occured.');
        }
      });
    });
});



