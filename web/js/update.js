
$('#usernameInput').on('keyup',function () {
    const inputValue = $(this).val();
    $('.updateTitle').text(`Buenas ${inputValue}`);  
});

