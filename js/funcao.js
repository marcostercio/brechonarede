/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//alertas
function msgbox(mostrar,tipo){
  var alvo = document.getElementById('msg');
  if(tipo =='ok'){  
  $('#msg').fadeIn(1000);  
   alvo.innerHTML = mostrar;

setTimeout(function(){  $('#msg').fadeOut();},5000);
  }   
else if(tipo=='erro'){
 alvo.style.background='red'; 
 alvo.style.border='red';
 $('#msg').fadeIn(1000);  
   alvo.innerHTML = mostrar;

setTimeout(function(){  $('#msg').fadeOut();},5000);
}
else if(tipo=='aviso'){
 alvo.style.background='white'; 
 alvo.style.border='#ccc';
 alvo.style.color='#2a73ca';
 $('#msg').fadeIn(1000);  
   alvo.innerHTML = mostrar;

setTimeout(function(){  $('#msg').fadeOut();},5000);
}
}

//validar

//$(document).ready(function(){
//    $('#cadastro').validate({
//        rules:{
//        nome:{
//        required:true,   
//        minlength:5
//        },
//        email:{
//        required:true 
//        },
//         cpf:{
//         required:true
//        },
//         senha:{
//         required:true,
//         rangelegth:[4,10]
//        },
//         senharepetir:{
//         required:true,
//         equalTo:'#senha'
//        },
//         email:{
//         required:true,
//         email:true
//        }
//        },
//        messages:{
//            
//        }
//    });
//});