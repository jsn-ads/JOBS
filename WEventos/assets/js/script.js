function carregarBairro(obj){
     
    var item = obj.value;
    $("#setor").html(''); // limpa quando não tem resultado

    if(item != ''){

        $.ajax({
            'url':"http://localhost/JOB/PROJETOSWEB/WEventos/fornecedor/carregar_setor/"+item,
            'type':'GET',
            'dataType':'json',
            success:function(json){
                 var html = '';
    
                for(var i in json){
                    html += '<option value="'+json[i].id+'">'+json[i].nome+'</option>';
                }
    
                $("#setor").html(html);
    
            }
        });

    }
   
}



function carregarEmpresa(obj){
     
    var item = obj.value;

    if(item != ''){

        $.ajax({
            'url':"http://localhost/JOB/PROJETOSWEB/WEventos/contrato/carregarEmpresa/"+item,
            'type':'GET',
            'dataType':'json',
            success:function(json){

                for(var i in json){
                    contato = '<input id="a-contato" class="form-control t" type="text" name="a-contato" value="'+json[i].contato+'" readonly="true">';
                    rg = '<input id="a-rg" class="form-control t" type="text" name="a-rg" value="'+json[i].rg+'" readonly="true">';
                    cpf = '<input id="a-cpf" class="form-control t" type="text" name="a-cpf" value="'+json[i].cpf+'" readonly="true">';
                    cnpj = '<input id="a-cnpj" class="form-control t" type="text" name="a-cnpj" value="'+json[i].cnpj+'" readonly="true"></input>';
                    tel = '<input id="a-tel" class="form-control t" type="text" name="a-tel" value="'+json[i].tel+'" readonly="true"></input>';
                    cel = '<input id="a-cel" class="form-control t" type="text" name="a-cel" value="'+json[i].cel+'" readonly="true"></input>';
                    cel2 = '<input id="a-cel2" class="form-control t" type="text" name="a-cel2" value="'+json[i].cel2+'" readonly="true"></input>';
                    rua = '<input id="a-rua" class="form-control t" type="text" name="a-rua" value="'+json[i].rua+'" readonly="true"></input>';
                    num = '<input id="a-num" class="form-control t" type="text" name="a-num" value="'+json[i].numero+'" readonly="true"></input>';
                    com = '<input id="a-com" class="form-control t" type="text" name="a-com" value="'+json[i].complemento+'" readonly="true"></input>';
                    setor = '<input id="a-setor" class="form-control t" type="text" name="a-setor" value="'+json[i].setor+'" readonly="true"></input>';
                    cidade = '<input id="a-cidade" class="form-control t" type="text" name="a-cidade" value="'+json[i].cidade+'" readonly="true"></input>';
                }
    
                $("#aa-contato").html(contato);
                $("#aa-rg").html(rg);
                $("#aa-cpf").html(cpf);
                $("#aa-cnpj").html(cnpj);
                $("#aa-tel").html(tel);
                $("#aa-cel").html(cel);
                $("#aa-cel2").html(cel2);
                $("#aa-rua").html(rua);
                $("#aa-num").html(num);
                $("#aa-com").html(com);
                $("#aa-setor").html(setor);
                $("#aa-cidade").html(cidade);
                

            }
        });
    }
   
}


function carregarCliente(obj){

    var item = obj.value;

    if(item != ''){

        $.ajax({
            'url':'http://localhost/JOB/PROJETOSWEB/WEventos/contrato/carregarCliente/'+item,
            'type':'GET',
            'dataType':'json',
            success:function(json){

                for(var i in json){
                    cpf = '<input id="b-cpf" class="form-control t" type="text" name="b-cpf" value="'+json[i].cpf+'" readonly="true">';
                    cnpj = '<input id="b-cnpj" class="form-control t" type="text" name="b-cnpj" value="'+json[i].cnpj+'" readonly="true">';
                    email = '<input id="b-email" class="form-control t" type="text" name="b-email" value="'+json[i].email+'" readonly="true">';
                    instagran = '<input id="b-instagran" class="form-control t" type="text" name="b-instagran" value="'+json[i].instagran+'" readonly="true">';
                    rua = '<input id="b-rua" class="form-control t" type="text" name="b-rua" value="'+json[i].rua+'" readonly="true"></input>';
                    num = '<input id="b-num" class="form-control t" type="text" name="b-num" value="'+json[i].numero+'" readonly="true"></input>';
                    com = '<input id="b-com" class="form-control t" type="text" name="b-com" value="'+json[i].complemento+'" readonly="true"></input>';
                    setor = '<input id="b-setor" class="form-control t" type="text" name="b-setor" value="'+json[i].setor+'" readonly="true"></input>';
                    cidade = '<input id="b-cidade" class="form-control t" type="text" name="b-cidade" value="'+json[i].cidade+'" readonly="true"></input>';
                }

                $('#bb-cpf').html(cpf);
                $('#bb-cnpj').html(cnpj);
                $('#bb-email').html(email);
                $('#bb-instagran').html(instagran);
                $('#bb-rua').html(rua);
                $('#bb-num').html(num);
                $('#bb-com').html(com);
                $('#bb-setor').html(setor);
                $('#bb-cidade').html(cidade);

            }
        });
    }else{

    }
}

function carregarEvento(obj){
     
    var item = obj.value;

    $("#c-data").html(''); // limpa quando não tem resultado
    
    if(item != ''){

        $.ajax({
            'url':'http://localhost/JOB/PROJETOSWEB/WEventos/contrato/carregarEvento/'+item,
            'type':'GET',
            'dataType':'json',

            success:function(json){
                
                var data = '<option value="">SELECT DATA</option>';
                
                for(var i in json){
                    data+= '<option value="'+json[i].id+'">'+json[i].data_evento+'</option>';
                }
    
                $('#c-data').html(data);
    
            }
        });

    }
   
}

function getEvento(obj){
     
    var item = obj.value;

    $("#cc-nome").html(''); // limpa quando não tem resultado

    if(item != ''){

        $.ajax({
            'url':'http://localhost/JOB/PROJETOSWEB/WEventos/contrato/getEvento/'+item,
            'type':'GET',
            'dataType':'json',

            success:function(json){
                
                var nome = '';

                for(var i in json){
                    nome += '<input id="c-nome" class="form-control t" type="text" name="c-nome" value="'+json[i].nome+'" readonly="true">';
                }
    
                $('#cc-nome').html(nome);
    
            }
        });

    }
   
}

function getCargo(obj){

    var item = obj.value;

    if(item != ''){

        $.ajax({
            'url':'http://localhost/JOB/PROJETOSWEB/WEventos/contrato/getCargo/'+item,
            'type':'GET',
            'dataType':'json',

            success:function(json){

                var dados = '<option value="">SELECT CARGO</option>';

                for(var i in json){
                    dados += '<option value="'+json[i].id+'">'+json[i].descricao+'</option>';
                }

                $('#d-cargo').html(dados);
            }

        });
    }
}

function getFornecedor(obj){

    var item = obj.value;

    if(item != ''){
        $.ajax({
            'url':'http://localhost/JOB/PROJETOSWEB/WEventos/contrato/getFornecedor/'+item,
            'type':'GET',
            'dataType':'json',

            success:function(json){

                var dados = '<option value="">SELECT FORNECEDOR</option>';

                for (var i in json) { 
                    dados += '<option value="'+json[i].id+'/'+json[i].fid+'">'+json[i].nome+'</option>';        
                }

                $('#e-forn').html(dados);

            }
        });
    }

}

function getProduto(obj){

    var id = obj.value.split('/');

    var idprod = id[0];
    var idfor = id[1];


    if(idprod != '' && idfor != ''){
        $.ajax({
            'url':'http://localhost/JOB/PROJETOSWEB/WEventos/contrato/getProduto/'+idprod+'/'+idfor,
            'type':'GET',
            'dataType':'json',

            success:function(json){

                var custo = '';
                var venda = '';

                for(var i in json){
                    custo = '<input id="" class="form-control t" type="text" name="" value="'+json[i].valor_custo+'" readonly="true">';
                    venda = '<input id="" class="form-control t" type="text" name="" value="'+json[i].preco+'" readonly="true">';
                }

                $('#ee-custo').html(custo);
                $('#ee-venda').html(venda);
                
            }
        });
    }
}

$(function(){

    $('#addFunc').on('click',function(e){
        
        var funcionario = $('#d-fun').val();
        var cargo = $('#d-cargo').val();

        if(funcionario != '', cargo != ''){

            $.ajax({
                'url':'http://localhost/JOB/PROJETOSWEB/WEventos/contrato/addFuncionario/'+funcionario+'/'+cargo,
                'type':'GET',
                'dataType':'json',

                success:function(json){

                    var html = '';

                    for(var i in json){
                        html +="<div class='row'>"
                                    +"<div class='col'>"
                                        +"<div class='form-group' id=''>"
                                            +"<input id='d-nome' class='form-control t' type='text' name='d-nome[]' readonly='true' value='"+json[i].nome+"'>"
                                        +"</div>"
                                    +"</div>"
                                    +"<div class='col-2'>"
                                        +"<div class='form-group' id=''>"
                                            +"<input id='d-desc' class='form-control t' type='text' name='d-desc[]' readonly='true' value='"+json[i].descricao+"'>"
                                        +"</div>"
                                    +"</div>"
                                    +"<div class='col-2'>"
                                        +"<div class='form-group' id=''>"
                                            +"<input id='d-valor' class='form-control t' type='text' name='d-valor[]' readonly='true' value='"+json[i].valor+"'>"
                                        +"</div>"
                                    +"</div>"
                                    +"<div class='col-2'>"
                                        +"<div class='form-group'>"
                                            +"<button id='func-remove' class='btn  btn-outline-dark btn-func-cargo'>Remover</button>"
                                        +"</div>"
                                    +"</div>"
                                +"</div>";
                    }

                    $('#addfuncionario').append(html);

                    $('#d-cargo').val('');
                }
            });
        }
        e.preventDefault();
    });

    $('#addProd').on('click',function(e){
        
        var id = $('#e-forn').val().split('/');
        var idProduto = id[0];
        var idFornecedor = id[1];
        var qtd = $('#e-qtd').val();
        
        if(id != '' && id != null && qtd != '' && qtd != null){

            $.ajax({
                'url':'http://localhost/JOB/PROJETOSWEB/WEventos/contrato/getProduto/'+idProduto+'/'+idFornecedor,
                'type':'GET',
                'dataType':'json',

                success:function(json){

                    var html = '';

                    for(var i in json){

                            html += "<div class='row'>"
                                        +"<div class='col-4'>"
                                            +"<div class='form-group' id=''>"
                                                +"<input id='e-nome' class='form-control t' type='text' name='e-nome[]' readonly='true' value='"+json[i].nome+"'>"
                                            +"</div>"
                                        +"</div>"
                                        +"<div class='col-4'>"
                                            +"<div class='form-group' id=''>"
                                                +"<input id='e-desc' class='form-control t' type='text' name='e-desc[]' readonly='true' value='"+json[i].descricao+"'>"
                                            +"</div>"
                                        +"</div>"
                                        +"<div class='col-1'>"
                                            +"<div class='form-group' id=''>"
                                                +"<input id='e-valor' class='form-control t' type='text' name='e-valor[]' readonly='true' value='"+json[i].preco+"'>"
                                            +"</div>"
                                        +"</div>"
                                        +"<div class='col-1'>"
                                            +"<div class='form-group' id=''>"
                                                +"<input id='e-qt' class='form-control t' type='text' name='e-qt[]' readonly='true' value='"+qtd+"'>"
                                            +"</div>"
                                        +"</div>"
                                        +"<div class='col-2'>"
                                            +"<div class='form-group'>"
                                                +"<button  href='' id='func-remove' class='btn  btn-outline-dark btn-func-cargo'>Remover</button>"
                                            +"</div>"
                                        +"</div>"
                                    +"</div>";
                        
                                    
                    }

                    $('#addproduto').append(html);
                    $('#e-qtd').val('');

                }

            });
        }

        e.preventDefault();
    });

    $(document).on('click','#func-remove',function(e){
        
        $(this).parent().parent().parent().remove();

        e.preventDefault();
    });


    $('#carregar-submit').on('click',function(){

        var x = [];

        x += $('.d-nome').val();

        alert(x);

    });

});

//Mascaras
$(function(){

    $('#nome').keyup(function(){
        this.value = this.value.replace(/[^A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]/g,'');
    });

    $('#valor').mask('000.000.000.000.000,00', {reverse: true});;
    $('#rg').mask('0000000', {reverse: true});
    $('#cpf').mask('000.000.000-00', {reverse: true});
    $('#cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('#tel').mask('(00)0000-0000');
    $('#cel').mask('(00)0 0000-0000');
    $('#cel2').mask('(00)0 0000-0000');
    $('#num').mask('0000');
    $('#municipal').mask('000000000000');
    $('#estadual').mask('000000000000');

});

//adicionar_produto
$(function(){
    
    $('#produto-submit').on('click',function(e){
       
       var desc = $('#descricao').val();
       var valor = $('#valor').val();

       if(desc == '' || desc == null){
            $('#descricao').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
       }
       
       if(valor == '' || valor == null){
            $('#valor').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
       }
    });

    $('#cidade-submit').on('click',function(e){

        var nome = $('#nome').val();
        
        if(nome == '' || nome == null){
            $('#nome').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }
    });

    $('#bairro-submit').on('click', function(e){
         
        var id_cidade = $("#cidade").val();
        var nome = $('#nome').val();

        if(id_cidade == '' || id_cidade == null){
            $('#cidade').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(nome == '' || nome == null){
            $('#nome').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }
    });

    $('#fornecedor-submit').on('click', function(e){

        var nome = $('#nome').val();
        var contato = $('#contato').val();
        var cnpj = $('#cnpj').val();
        var rua = $('#rua').val();
        var cidade = $('#cidade').val();
        var setor = $('#setor').val();

        if(nome == '' || nome == null){
            $('#nome').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(contato == '' || contato == null){
            $('#contato').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(cnpj == '' || cnpj == null){
            $('#cnpj').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(cidade == '' || cidade == null){
            $('#cidade').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(setor == '' || setor == null){
            $('#setor').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(rua == '' || rua == null){
            $('#rua').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }
    });

    $('#cliente-submit').on('click',function(e){

        var nome = $('#nome').val();
        var cidade = $('#cidade').val();
        var setor = $('#setor').val();
        var rua = $('#rua').val();
        var cpf = $('#cpf').val();
        var cnpj = $('#cnpj').val();

        if(nome == '' || nome == null){
            $('#nome').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(cidade == '' || cidade == null){
            $('#cidade').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(setor == '' || setor == null){
            $('#setor').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(rua == '' || rua == null){
            $('#rua').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(cpf == '' || cpf == null){
            if(cnpj == '' || cnpj == null){
                $('#cnpj').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
                $('#cpf').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
                e.preventDefault();
            }
        }
    });

    $('#evento-cliente-submit').on('click', function(e){

        var cliente = $('#cliente').val();
        var data = $('#data').val();
        var nome = $('#nome').val();

        if(cliente == '' || cliente == null){
            $('#cliente').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(data == '' || data == null){
            $('#data').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(nome == '' || nome == null){
            $('#nome').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

    });

    $('#produto-fornecedor-submit').on('click',function(e){

        var produto = $('#produto').val();
        var fornecedor = $('#fornecedor').val();
        var valor = $('#valor').val();

        if(produto == '' || produto == null){
            $('#produto').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(fornecedor == '' || fornecedor == null){
            $('#fornecedor').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(valor == '' || valor == null){
            $('#valor').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }
        
    });

    $('#funcionario-submit').on('click', function(e){
        
        var nome = $('#nome').val();
        var cpf = $('#cpf').val();
        var cel = $('#cel').val();
        var cel2 = $('#cel2').val();

        if(nome == '' || nome == null){
            $('#nome').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(cpf == '' || cpf == null){
            $('#cpf').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }
       
    });

    $('#cargo-submit').on('click', function(e){

        var nome = $('#nome').val();
        var valor = $('#valor').val();

        if(nome == '' || nome == null){
            $('#nome').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(valor == '' || valor == null){
            $('#valor').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

    });

    $('#funcionario-cargo-submit').on('click',function(e){

        var funcionario = $('#funcionario').val();
        var cargo = $('#cargo').val();

        if(funcionario == '' || funcionario == null){
            $('#funcionario').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(cargo == '' || cargo == null){
            $('#cargo').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }
    });

    $('#banco-submit').on('click', function(e){

        var banco = $('#nome').val();

        if(banco == '' || banco == null){
            $('#nome').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

    });

    $('#empresa-submit').on('click', function(e){

        var empresa = $('#empresa').val();
        var nome = $('#nome').val();
        var cnpj = $('#cnpj').val();
        var tel = $('#tel').val();
        var cidade = $('#cidade').val();
        var setor = $('#setor').val();
        var rua = $('#rua').val();

        if(empresa == '' || empresa == null){
            $('#empresa').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(nome == '' || nome == null){
            $('#nome').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(cnpj == '' || cnpj == null){
            $('#cnpj').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(tel == '' || tel == null){
            $('#tel').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(cidade == '' || cidade == null){
            $('#cidade').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(setor == '' || setor == null){
            $('#setor').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

        if(rua == '' || rua == null){
            $('#rua').css('background-color','rgb(252,191,191)').css('border','solid 1px red');
            e.preventDefault();
        }

    });
});


