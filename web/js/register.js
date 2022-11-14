
$('#newUserEmail').on('keyup', function () {
    
    const emailInputValue = $(this).val();
    if(emailInputValue.length > 1)
    {
        $.ajax({
        type: "GET",
        url: $('#newUserEmail').data("href"),
        data: {data: emailInputValue},
        async: true,
            success: function (response) {
                if(response === 'Usuario No existe'){
                    if ( $('#notificationExists').length > 0) $('#notificationExists').remove();
                    $('#newUserEmail').after(`
                    <span class="text-success position-absolute" id="notificationExists">
                        Se puede utilizar este email
                    </span>`
                    );
                }else if(response ==='Usuario existe'){
                    if ( $('#notificationExists').length > 0) $('#notificationExists').remove();
                    $('#newUserEmail').after(`
                    <span class="text-danger position-absolute" id="notificationExists">
                        No se puede utilizar este email
                    </span>`
                    );
                }
            },
            onError: function(error){
                console.error(error);
            }
        });
    }
});
