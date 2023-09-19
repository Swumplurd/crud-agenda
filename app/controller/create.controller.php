
<script>
    $(document).ready(() => {
        $("#crear").click(() => {
            let nombre = $("#nombre").val()
            let telefono = $("#telefono").val()
            let email = $("#email").val()
            let categoria = $("#categoria").val()
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

            if (!email) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un email"
                })
                return false
            }

            $.ajax({
                url: "./app/model/process/create.process.php",
                data: {
                    nombre,
                    telefono,
                    email,
                    categoria
                },
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Contacto guardado',
                        text: "Contacto guardado con exito!",
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
                        text: "Error al agregar contacto!"
                    })
                }
            })
        })
    })
</script>