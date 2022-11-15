
$(document).ready(function () {
    if($('#errorLoginDiv').length > 0){
        setTimeout(() => {
            $('#errorLoginDiv').remove();
        }, 3000);
    }
});