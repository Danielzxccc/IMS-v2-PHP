$(document).ready(() =>{
    $('#_login').on("submit", (e) =>{
        e.preventDefault();
        var data = $('#_login').serializeArray()
        $.ajax({
            url : "../auth/routes/login.php",
            method: "post",
            data : data,
            success: (res) => {
                console.log(res)
                if(res.success){
                    Swal.fire(
                        'Success',
                        `${res.message}`,
                        'success'
                    )
                    setTimeout(() => {
                        // window.location.href = "../"
                        alert('rawr');
                    },2000)
                }else{
                    Swal.fire(
                        'Failed',
                        `${res.message}`,
                        'error'
                    )
                }
            }
        });
    })
})