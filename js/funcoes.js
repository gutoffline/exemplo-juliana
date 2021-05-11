function ConsultarModelos(){

    $.ajax({
        url : "consulta-modelos.php",
        type : 'get',
        data : {
             marca : document.querySelector("#marca").value,
        }
   })
   .done(function(opcoes_modelo){
        document.querySelector("#modelo").innerHTML = opcoes_modelo;
   })
}