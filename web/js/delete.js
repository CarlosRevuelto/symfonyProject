
$(document).ready(function() {
    $('#deletePath').click(function (e) { 
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: 'You will not be able to revert this',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if(result.isConfirmed){
                $.ajax({
                    type: "GET",
                    url: $('#deletePath').data("href"),
                    async: true,
                    success: function (response) {
                        if(response === 'Usuario Borrado Correctamente')
                        {
                            Swal.fire({
                            title: 'User deleted succesfully',
                            text: 'The account was deleted',
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Okay!'
                            }).then((result) => {
                                window.location.replace('http://localhost/symfonyFinalProject/finalProject/web/app_dev.php/usuario/login');
                                
                            })
                        }
                        
                    },
                    onerror: function(error){
                        console.error(error);
                    }
                });
            }
        })
    });
});
