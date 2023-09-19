
<script>
    $(document).ready(() => {
        $("#crear").click(() => {
            let nombre = $("#nombre").val()

            if (!nombre) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un nombre"
                })
                return false
            }

            $.ajax({
                url: "./app/model/process/createCategoria.process.php",
                data: {
                    nombre,
                },
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Categoria guardada',
                        text: "Categoria guardada con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                    }).then((result) => {
                        location.reload()
                    })
                },
                error: () => {
                    Swal.fire({
                        icon: "error",
                        text: "Error al agregar categoria!"
                    })
                }
            })
        })
    })
</script>