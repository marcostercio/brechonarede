/* 
 funçao para esconder login
 */
$(document).ready(function () {

    $("ul a[href='" + location.href.substring(location.href.lastIndexOf("/") + 1, 255) + "'] li").addClass("marcar");

});

$(document).ready(function () {
    $('.loginlink').click(function () {
        $('.login').slideToggle(500);
    });
});
function confirmAlt() {
    if (confirm('Você tem certeza que deseja alterar?')) {
        return true;
    } else {
        return false;
    }

}

function confirmDel() {
    if (confirm('Você deseja mesmo Excluir?')) {
        return true;
    } else {
        return false;
    }


}
$(document).ready(function(){
    $('#precomin,#precomax').click(function(){
     $('#sexo').attr('disabled',true);
    });
   
    $('#sexo').click(function(){
    $('#precomin,#precomax').attr('disabled',true); 
    
    });
    
});
////pagina produto
//$(document).ready(function () {
//    $('.fechar').hide();
//    $('#sexo').click(function () {
//        $('#precomin').fadeOut("slow");
//        $('#precomax').fadeOut("slow");
//        $('#nomeproduto').fadeOut("slow");
//        $('.fechar').fadeIn("slow");
//    });
//
//    $('#precomin,#precomax').click(function () {
//        $('#sexo').fadeOut();
//        $('#nomeproduto').fadeOut();
//        $('.fechar').fadeIn("slow");
//    });
//
//
//    $('#nomeproduto').click(function () {
//        $('#sexo').fadeOut();
//        $('#precomin').fadeOut("slow");
//        $('#precomax').fadeOut("slow");
//        $('.fechar').fadeIn("slow");
//    });
//
//    $('.fechar').click(function () {
//        $('#precomin').fadeIn("slow");
//        $('#precomax').fadeIn("slow");
//        $('#nomeproduto').fadeIn("slow");
//        $('#sexo').fadeIn("slow");
//        $('.fechar').hide();
//
//    });
//});




//var menu = document.getElementsByClassName('menu');
//var link = document.getElementsByTagName('li')[0].onclick =function(){
//    console.log(link.length);
////    document.getElementsByTagName('li')[0].className.replace='marcar';
//    this.class='marcar';
//    alert('funfando');
//};

//$(document).ready(function () {
//    $('li').click(function () {
//        $('li.active').removeClass("active"); //aqui removemos a class do item anteriormente clicado para que possamos adicionar ao item clicado
//        $(this).addClass("active"); //aqui adicionamos a class ao item clicado
//    });
//});


////document.getElementsByTagName('a')(0).onlick=function(){
//document.getElementsByTagName('a').style.color='red';
////    this.style.background='red';
////};
////document.getElementsByClassName('conteudo').innerHTML='teste';

$(document).ready(function () {
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    $('.cep').mask('00000-000');
    $('.phone').mask('0000-0000');
    $('.phone_with_ddd').mask('(00) 0000-0000');
    $('.phone_us').mask('(000) 000-0000');
    $('.mixed').mask('AAA 000-S0S');
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
    $('.money2').mask("#.##0,00", {reverse: true});
    $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/, optional: true
            }
        }
    });
    $('.ip_address').mask('099.099.099.099');
    $('#precomin').mask('099,00');
    $('.percent').mask('##0,00%', {reverse: true});
    $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
    $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.fallback').mask("00r00r0000", {
        translation: {
            'r': {
                pattern: /[\/]/,
                fallback: '/'
            },
            placeholder: "__/__/____"
        }
    });
    $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
});
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function () {
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}
//ajax
function fecharbusca(recebe) {
    document.getElementById('resultadopesquisatopo').style.display = 'none';
}
function busca(str) {
//    var campoBusca = document.getElementById('barrapesquisa');
//  

    var campoBusca = document.querySelector('#barrapesquisa');

    if (str != "" && str.length > 3) {

        var resultado = document.getElementById('resultadopesquisatopo');
        resultado.style.display = 'block';
        if (window.XMLHttpRequest) {

            var objt = new XMLHttpRequest();

        } else {
            var objt = new ActiveXObject("Microsoft.XMLHTTP");
        }
        objt.onreadystatechange = function () {
            if (this.readyState !=4) {
                document.getElementById('resultadopesquisatopo').innerHTML = '<p>Carregando...</p>';
            }
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('resultadopesquisatopo').innerHTML = this.responseText;
            } 
//            else {
//                document.getElementById('resultadopesquisatopo').innerHTML = '<p>Erro ao pesquisar</p>';
//            }
        }
        objt.open('GET', "controle/controladorPesquisarBarra.php?p=" + str, true);
        objt.send();
    } else {
        document.getElementById('resultadopesquisatopo').style.display = 'none';

        return;
    }
}
function validarEstoque(){
var valor = document.forms['quantidade'].value;
var maximo = document.forms['quantidade'].max-lenght;

if(valor>maximo){

return false;
}
else{
return true;    
}
}

