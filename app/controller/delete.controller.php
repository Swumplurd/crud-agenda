
<script>
    const eliminar = (id) => {
        Swal.fire({
            title: '¿Estas seguro de eliminar el contacto?',
            text: "No podras recuperar el contacto si lo borras!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Borrarlo'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "./app/model/process/delete.process.php",
                    data: {
                        id
                    },
                    type: "POST",
                    success: () => {
                        Swal.fire({
                            title: 'Contacto eliminado',
                            text: "Borraste el contacto con exito",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Ok'
                        }).then((result) => {
                            location.reload()
                        })
                    },
                    error: () => {
                        Swal.fire({
                            title: 'No se pudo elimiar',
                            text: "no borraste el contacto",
                            icon: 'error'
                        })
                    }
                })
            }
        })
    }
</script>