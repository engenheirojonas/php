//toda vez que a página index do painel for carregada, ele vai chamar a função listar() atraves da linha 19 do codigo do arquivo usuario.php

$(document).ready(function() {    
    listar();    
} );

function listar(p1, p2, p3, p4, p5){	
    /**a ajax é um reflexo que vai sempre ser executado por tras da pagina sem precisar dar um refresh ou atualizaçao da pagina*/

    $.ajax({
        url: 'paginas/' + pag + "/listar.php",
        method: 'POST',
        data: {p1, p2, p3, p4, p5},
        dataType: "html",

            //quando a requisição for bem sucedida, ele vai executar a função de sucesso e vai colocar o resultado dentro da div listar
        success:function(result){
            $("#listar").html(result);
            $('#mensagem-excluir').text('');
        }
    });
}



    //função de inserir
function inserir(){   
    $('#mensagem').text('');
    $('#titulo_inserir').text('Inserir Registro');
    $('#modalForm').modal('show'); 
    limparCampos();
}



$("#form").submit(function () {

    event.preventDefault();
    var formData = new FormData(this);

    $.ajax({
        url: 'paginas/' + pag + "/salvar.php",
        type: 'POST',
        data: formData,

        success: function (mensagem) {
            $('#mensagem').text('');
            $('#mensagem').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {

                $('#btn-fechar').click();
                listar();          

            } else {

                $('#mensagem').addClass('text-danger')
                $('#mensagem').text(mensagem)
            }


        },

        cache: false,
        contentType: false,
        processData: false,

    });

});


/*

function excluir(id){	
    $('#mensagem-excluir').text('Excluindo...')
    
    $.ajax({
        url: 'paginas/' + pag + "/excluir.php",
        method: 'POST',
        data: {id},
        dataType: "html",

        success:function(mensagem){
            if (mensagem.trim() == "Excluído com Sucesso") {            	
                listar();
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
}





function ativar(id, acao){	
    $.ajax({
        url: 'paginas/' + pag + "/mudar-status.php",
        method: 'POST',
        data: {id, acao},
        dataType: "html",

        success:function(mensagem){
            if (mensagem.trim() == "Alterado com Sucesso") {
                listar();
            } else {
                $('#mensagem-excluir').addClass('text-danger')
                $('#mensagem-excluir').text(mensagem)
            }
        }
    });
}

*/