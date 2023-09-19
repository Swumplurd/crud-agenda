<script>
    $(document).ready(() => {
        $("#actualizar").click(() => {
            let id = $("#id").val()
            let nombre = $("#nombre").val()
            let telefono = $("#telefono").val()
            let email = $("#email").val()

            if (!nombre) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un nombre"
                })
                return false
            }

            if (!telefono) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un telefono"
                })
                return false
            }

            if (!email) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un email"
                })
                return false
            }

            $.ajax({
                url: "./app/model/process/update.process.php",
                data: {
                    id,
                    nombre,
                    telefono,
                    email,
                },
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Contacto actualizado',
                        text: "Contacto actualizado con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                    }).then((result) => {
                        window.location = "./read"
                    })
                },
                error: () => {
                    Swal.fire({
                        icon: "error",
                        text: "Error al actualizar contacto!"
                    })
                }
            })
        })
    })
</script>