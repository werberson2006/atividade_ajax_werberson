window.onload = function() {

    $("#form").on("submit", function(e){
        e.preventDefault();

        let data = {
            nome: $("#nome").val(),
            senha: $("#senha").val()
        };

        $.ajax({
            method:"POST",
            url:"dados.php",
            data:data
        }).always((response)=>{
            console.log(response);
            document.getElementById("demo").innerHTML = response;
        });
    });
}
