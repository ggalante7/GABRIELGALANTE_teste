function limpar(){
    document.getElementById("Motorista").reset();
    document.getElement
};

function validarMotorista(){
    if(document.Motorista.nome == ""){
        return false;
    } else {
        if(document.Motorista.cpf == ""){
        return false;
    } else {
        if(document.Motorista.data == ""){
        return false;
    }else{
        if(document.Motorista.carro == ""){
        return false;
    }
    }
    }
    }
};

$(document).ready(function(){
    $('#busca').keyup(function(){
        
        $('form').submit(function(){
            var dados = $this.serialize();
            $.ajax  ({
                url:'buscaMotorista.php',
                type:'POST',
                dataType: 'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                }
            });
            return false;
        });

        $('form').trigger('submit');
    });

});

$(document).ready(function(){
    $('#busca').keyup(function(){
        
        $('form').submit(function(){
            var dados = $this.serialize();
            $.ajax  ({
                url:'buscaPassageiro.php',
                type:'POST',
                dataType: 'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                }
            });
            return false;
        });

        $('form').trigger('submit');
    });

});

$(document).ready(function(){
    $('#busca').keyup(function(){
        
        $('form').submit(function(){
            var dados = $this.serialize();
            $.ajax  ({
                url:'buscaCorrida.php',
                type:'POST',
                dataType: 'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                }
            });
            return false;
        });

        $('form').trigger('submit');
    });

});