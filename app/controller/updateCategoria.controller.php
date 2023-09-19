<script>
    $(document).ready(() => {
        $("#actualizar").click(() => {
            let id = $("#id").val()
            let nombre = $("#nombre").val()

            if (!nombre) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un nombre"
                })
                return false
            }


            $.ajax({
                url: "./app/model/process/updateCategoria.process.php",
                data: {
                    id,
                    nombre
                },
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Categoria actualizada',
                        text: "Categoria actualizada con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                    }).then((result) => {
                        window.location = "./createCategoria"
                    })
                },
                error: () => {
                    Swal.fire({
                        icon: "error",
                        text: "Error al actualizar categoria!"
                    })
                }
            })
        })
    })
</script>