<script>
    $(document).ready(() => {
        $("#session_open").click(() => {
            $.ajax({
                type: "POST",
                data: {
                    session: parseInt(Math.random() * 10)
                },
                url: "./app/model/process/sessionOpen.process.php",
                success: (response) => {
                    window.location = "./read"
                }
            });
        })
    })
</script>