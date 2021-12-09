//CELULAR TABLET PC
function myFunction() {
    var c = document.querySelector("#dispositivos");
    c.style.width = "200px";
    c.style.height = "400px";
    console.log("uj")
}

function myFunctiona() {
    var c = document.querySelector("#dispositivos");
    c.style.width = "300px";
    c.style.height = "500px";
}

function myFunctionb() {
    var c = document.querySelector("#dispositivos");
    c.style.width = "500px";
    c.style.height = "300px";
}
//----------------------------------
//atualizando inframe 
function atualizainframe() {
    //atualizando inframe
    document.getElementById('dispositivos').src = document.getElementById('dispositivos').src
}
//setInterval(atualizainframe, 3000);


//modo escuro
function dark(){
    var d = document.querySelector("body");
    d.style.background = "black";

    var d = document.querySelector("#escuro");
    d.style.display = "block";

    var d = document.querySelector("#claro");
    d.style.display = "none";

    var d = document.querySelector("#escuro");
    d.style.color = "white";

    // var d = document.querySelector("#dispositivos");
    // d.style.border = " 5px solid white";
    
    var d = document.querySelector("#nav");
    d.style.background = "black ";

    var d = document.querySelector("#nav");
    d.style.boxShadow = "10px 10px 10px rgba(228, 226, 226, 0.178) ";

    var d = document.querySelector(".linksinput")
    d.style.background = "red";

}
//invertando modo escuro
function darkinvert(){
    var d = document.querySelector("body");
    d.style.background = "#F8F9FA";

    var d = document.querySelector("#escuro");
    d.style.display = "none";

    var d = document.querySelector("#claro");
    d.style.display = "block";

    var d = document.querySelector("#escuro");
    d.style.color = "black";

    var d = document.querySelector("#nav");
    d.style.background = "white ";

    var d = document.querySelector("#nav");
    d.style.boxShadow = "10px 10px 10px rgba(119, 119, 119, 0.178) ";
}

//Funções do menu
function inicio(){
    var d = document.querySelector("#inicio");
    d.style = "display:block;  transition:1s;";

    var d = document.querySelector("#conta");
    d.style.display = "none";

    var d = document.querySelector("#analise");
    d.style.left = "100%";

    var d = document.querySelector(".menu-1");
    d.style.color = "#46E8A9";


    var d = document.querySelector(".menu-2");
    d.style.color = "#4D4C4C";

    var d = document.querySelector(".menu-4");
    d.style.color = "#4D4C4C";
    var d = document.querySelector(".menu-5");
    d.style.color = "#4D4C4C";

    var d = document.querySelector("#ll");
    d.style.display= "inline-block";
   
    if (window.matchMedia("(min-width:800px)").matches) {
        d.style.display= "inline-block";
      } else {
        d.style.display= "none";
      }

}

function analise(){
    var d = document.querySelector("#analise");
    d.style.left = "0";
    
    var d = document.querySelector("#inicio");
    d.style.display = "none";

    var d = document.querySelector("#conta");
    d.style.display = "none";

    var d = document.querySelector(".menu-2");
    d.style.color = "#46E8A9";


    var d = document.querySelector(".menu-1");
    d.style.color = "#4D4C4C";

    var d = document.querySelector(".menu-4");
    d.style.color = "#4D4C4C";
    var d = document.querySelector(".menu-5");
    d.style.color = "#4D4C4C";

    var d = document.querySelector("#ll");
    d.style.display= "none";

}
function ver(){
    var d = document.querySelector("#inicio");
    d.style.display = "none";

    var d = document.querySelector("#analise");
    d.style.left = "100%";

    var d = document.querySelector("#conta");
    d.style.display = "none";

    var d = document.querySelector("#ll");
    d.style.display = "block";

    var d = document.querySelector(".menu-5");
    d.style.color = "#46E8A9";

    var d = document.querySelector(".menu-1");
    d.style.color = "#4D4C4C";

    var d = document.querySelector(".menu-2");
    d.style.color = "#4D4C4C";

    var d = document.querySelector(".menu-4");
    d.style.color = "#4D4C4C";

}
function conta(){
    var d = document.querySelector("#inicio");
    d.style.display = "none";

    var d = document.querySelector("#analise");
    d.style.left = "100%";

    var d = document.querySelector("#conta");
    d.style.display = "block";

    var d = document.querySelector(".menu-4");
    d.style.color = "#46E8A9";

    var d = document.querySelector(".menu-1");
    d.style.color = "#4D4C4C";

    var d = document.querySelector(".menu-2");
    d.style.color = "#4D4C4C";
    var d = document.querySelector(".menu-5");
    d.style.color = "#4D4C4C";

    var d = document.querySelector("#ll");
    d.style.display= "none";

}

//Verificando se os inpunts estão vazios, para mostra-lo 
//----------------------------------------------------------
namebtn = document.getElementById('namebtn').value;
nameurl = document.getElementById('nameurl').value;

if (namebtn || nameurl !== "" | null) {
    var d = document.querySelector("#card");
    d.style.display = "block";
}
//-----------------------------------------------------------

namebtna = document.getElementById('namebtna').value;
nameurla = document.getElementById('nameurla').value;

if (namebtna || nameurla !== "" | null) {
    var d = document.querySelector("#carda");
    d.style.display = "block";
}
//----------------------------------------------------------
namebtnb = document.getElementById('namebtnb').value;
nameurlb = document.getElementById('nameurlb').value;

if (namebtnb || nameurlb !== "" | null) {
    var d = document.querySelector("#cardb");
    d.style.display = "block";
}
//----------------------------------------------------------

namebtnc = document.getElementById('namebtnc').value;
nameurlc = document.getElementById('nameurlc').value;

if (namebtnc || nameurlc !== "" | null) {
    var d = document.querySelector("#cardc");
    d.style.display = "block";
}
//----------------------------------------------------------

namebtnd = document.getElementById('namebtnd').value;
nameurld = document.getElementById('nameurld').value;

if (namebtnd || nameurld !== "" | null) {
    var d = document.querySelector("#cardd");
    d.style.display = "block";
}
//----------------------------------------------------------

namebtne = document.getElementById('namebtne').value;
nameurle = document.getElementById('nameurle').value;

if (namebtne || nameurle !== "" | null) {
    var d = document.querySelector("#carde");
    d.style.display = "block";
}


function my() {
    //nesse processo verificamos se um dos 2 inpunts estão em branco, se estiver mostre-o
    var z = document.querySelector("#card");
    var a = document.querySelector("#carda");
    var b = document.querySelector("#cardb");
    var c = document.querySelector("#cardc");
    var d = document.querySelector("#cardd");
    var e = document.querySelector("#carde");
    var cardmais = document.querySelector("#mais");

    if (namebtn == "" | null && nameurl == "" | null && z.offsetParent === null) {
        z.style.display = "block";
    }

    else if (namebtna == "" | null && nameurla == "" | null && a.offsetParent === null) {
        a.style.display = "block";
    }

    else if (namebtnb == "" | null && nameurlb == "" | null && b.offsetParent === null) {
        b.style.display = "block";
    }

    else if (namebtnc == "" | null && nameurlc == "" | null && c.offsetParent === null) {
        c.style.display = "block";
    }

    else if (namebtnd == "" | null && nameurld == "" | null && d.offsetParent === null) {
        d.style.display = "block";
    }

    else if (namebtne == "" | null && nameurle == "" | null && e.offsetParent === null) {
        e.style.display = "block";
    }
    //Se caso não existir mais links para exibir
    else {
        mais.style.background = "red";
        // mais.style.boxShadow = " 0 0 2em rgba(153, 22, 22, 0.534)";

        //mostrando o alerta
        var alerta = document.querySelector("#alerta");
        alerta.style.animation = "1s alerta";
        alerta.style.display = "block";
        alerta.style.animation = "1s alerta";
        //escrevendo a mensagem no alerta
        const meuCabecalho = document.querySelector('#msg');
        meuCabecalho.textContent = 'Você chegou ao limite de Links';
        //tirar o alerta da tela depois de 8s
        setTimeout(function () { alerta.style.display = "none"; }, 8000);
    }
}
//Se apertar o X do alerta ele desaparece
function endalert() {
    alerta.style.display = "none";
}
function endalert2() {
    var poup = document.querySelector("#poup-up");
    var sombra = document.querySelector("#sombra");
    poup.style.display = "none";
    sombra.style.display = "none";
}

//-=----------------------------------------------Remover link LIXEIRA
var cardmais = document.querySelector("#cardmais");
function lixeiraa() {

    //deixando o inpunt vazio
    document.getElementById('namebtn').value = '';
    document.getElementById('nameurl').value = '';


    //display:none nos links
    var d = document.querySelector("#card");
    d.style.display = "none";
    mais.style.background = " #46E8A9";

    

    //Aqui eu envio a variavel  lixeiraa do JS para o PHP, para apagar os registros dos inpunts no DB
    var lixeiraa = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { lixeira1: lixeiraa },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

function lixeirab() {

    document.getElementById('namebtna').value = '';
    document.getElementById('nameurla').value = '';


    var d = document.querySelector("#carda");
    d.style.display = "none";
    mais.style.background = " #46E8A9";

    

    //Aqui eu envio a variavel  lixeiraa do JS para o PHP, para apagar os registros dos inpunts no DB
    var lixeirab = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { lixeira2: lixeirab },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

function lixeirac() {
    document.getElementById('namebtnb').value = '';
    document.getElementById('nameurlb').value = '';



    var d = document.querySelector("#cardb");
    d.style.display = "none";
    mais.style.background = " #46E8A9";


    //Aqui eu envio a variavel  lixeiraa do JS para o PHP, para apagar os registros dos inpunts no DB
    var lixeirac = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { lixeira3: lixeirac },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

function lixeirad() {
    document.getElementById('namebtnc').value = '';
    document.getElementById('nameurlc').value = '';

    var d = document.querySelector("#cardc");
    d.style.display = "none";
    mais.style.background = "rgb(45, 226, 121)";


    //Aqui eu envio a variavel  lixeiraa do JS para o PHP, para apagar os registros dos inpunts no DB
    var lixeirad = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { lixeira4: lixeirad },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

function lixeirae() {
    document.getElementById('namebtnd').value = '';
    document.getElementById('nameurld').value = '';

    var d = document.querySelector("#cardd");
    d.style.display = "none";
    mais.style.background = "rgb(45, 226, 121)";

    //Aqui eu envio a variavel  lixeiraa do JS para o PHP, para apagar os registros dos inpunts no DB
    var lixeirae = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { lixeira5: lixeirae },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

function lixeiraf() {
    document.getElementById('namebtne').value = '';
    document.getElementById('nameurle').value = '';
    mais.style.boxShadow = " 0 0 2em rgba(22, 153, 50, 0)";

    var d = document.querySelector("#carde");
    d.style.display = "none";


    //Aqui eu envio a variavel  lixeiraa do JS para o PHP, para apagar os registros dos inpunts no DB
    var lixeiraf = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { lixeira6: lixeiraf },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

//-=------------------------------------------------------------------
//VISIBILIDADE DOS LINKS
function eye1() {
    var d = document.querySelector("#eye-slash-1");
    d.style.display = "block";
    var d = document.querySelector("#eye-1");
    d.style.display = "none";

    var visible11 = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { visible1: visible11 },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

function eyeinvert() {
    var d = document.querySelector("#eye-1");
    d.style.display = "block";
    var d = document.querySelector("#eye-slash-1");
    d.style.display = "none";

    var visible1invert = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { visibleinvert1: visible1invert },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}


function eye2() {
    var d = document.querySelector("#eye-slash-2");
    d.style.display = "block";
    var d = document.querySelector("#eye-2");
    d.style.display = "none";

    var visible11 = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { visible2: visible11 },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

function eyeinvert2() {
    var d = document.querySelector("#eye-2");
    d.style.display = "block";
    var d = document.querySelector("#eye-slash-2");
    d.style.display = "none";

    var visible1invert = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { visibleinvert2: visible1invert },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}


function eye3() {
    var d = document.querySelector("#eye-slash-3");
    d.style.display = "block";
    var d = document.querySelector("#eye-3");
    d.style.display = "none";

    var visible11 = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { visible3: visible11 },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

function eyeinvert3() {
    var d = document.querySelector("#eye-3");
    d.style.display = "block";
    var d = document.querySelector("#eye-slash-3");
    d.style.display = "none";

    var visible1invert = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { visibleinvert3: visible1invert },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}


function eye4() {
    var d = document.querySelector("#eye-slash-4");
    d.style.display = "block";
    var d = document.querySelector("#eye-4");
    d.style.display = "none";

    var visible11 = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { visible4: visible11 },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

function eyeinvert4() {
    var d = document.querySelector("#eye-4");
    d.style.display = "block";
    var d = document.querySelector("#eye-slash-4");
    d.style.display = "none";

    var visible1invert = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { visibleinvert4: visible1invert },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}


function eye5() {
    var d = document.querySelector("#eye-slash-5");
    d.style.display = "block";
    var d = document.querySelector("#eye-5");
    d.style.display = "none";

    var visible11 = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { visible5: visible11 },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

function eyeinvert5() {
    var d = document.querySelector("#eye-5");
    d.style.display = "block";
    var d = document.querySelector("#eye-slash-5");
    d.style.display = "none";

    var visible1invert = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { visibleinvert5: visible1invert },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

function eye6() {
    var d = document.querySelector("#eye-slash-6");
    d.style.display = "block";
    var d = document.querySelector("#eye-6");
    d.style.display = "none";

    var visible11 = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { visible6: visible11 },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}

function eyeinvert6() {
    var d = document.querySelector("#eye-6");
    d.style.display = "block";
    var d = document.querySelector("#eye-slash-6");
    d.style.display = "none";

    var visible1invert = "";
    $.ajax({
        type: "post",
        url: "processamento/save.php",
        data: { visibleinvert6: visible1invert },
        dataType: "text",
        success: function (response) {
        }
    });
          //atualizando inframe
          setTimeout(function () {document.getElementById('dispositivos').src = document.getElementById('dispositivos').src  }, 1000);
}
//enviando dados em tempo real para o processamento em php, Para o armazenamento no DB
$("#namebtn").keyup(function (e) {
    var namebtn = $(this).val();
    $.post('processamento/processa.php', { 'namebtn': namebtn }, function (data) {
        $("#resultt").html(data);
    })
});
$("#nameurl").keyup(function (e) {
    var nameurl = $(this).val();
    $.post('processamento/processa.php', { 'nameurl': nameurl }, function (data) {
        $("#resultt").html(data);
    })
});
$("#namebtna").keyup(function (e) {
    var namebtna = $(this).val();
    $.post('processamento/processa.php', { 'namebtna': namebtna }, function (data) {
        $("#resultt").html(data);
    })
});
$("#nameurla").keyup(function (e) {
    var nameurla = $(this).val();
    $.post('processamento/processa.php', { 'nameurla': nameurla }, function (data) {
        $("#resultt").html(data);
    })
});
$("#namebtnb").keyup(function (e) {
    var namebtnb = $(this).val();
    $.post('processamento/processa.php', { 'namebtnb': namebtnb }, function (data) {
        $("#resultt").html(data);
    })
});
$("#nameurlb").keyup(function (e) {
    var nameurlb = $(this).val();
    $.post('processamento/processa.php', { 'nameurlb': nameurlb }, function (data) {
        $("#resultt").html(data);
    })
});
$("#namebtnc").keyup(function (e) {
    var namebtnc = $(this).val();
    $.post('processamento/processa.php', { 'namebtnc': namebtnc }, function (data) {
        $("#resultt").html(data);
    })
});
$("#nameurlc").keyup(function (e) {
    var nameurlc = $(this).val();
    $.post('processamento/processa.php', { 'nameurlc': nameurlc }, function (data) {
        $("#resultt").html(data);
    })
});
$("#namebtnd").keyup(function (e) {
    var namebtnd = $(this).val();
    $.post('processamento/processa.php', { 'namebtnd': namebtnd }, function (data) {
        $("#resultt").html(data);
    })
});
$("#nameurld").keyup(function (e) {
    var nameurld = $(this).val();
    $.post('processamento/processa.php', { 'nameurld': nameurld }, function (data) {
        $("#resultt").html(data);
    })
});
$("#namebtne").keyup(function (e) {
    var namebtne = $(this).val();
    $.post('processamento/processa.php', { 'namebtne': namebtne }, function (data) {
        $("#resultt").html(data);
    })
});
$("#nameurle").keyup(function (e) {
    var nameurle = $(this).val();
    $.post('processamento/processa.php', { 'nameurle': nameurle }, function (data) {
        $("#resultt").html(data);
    })
});
//TROCA DE SENHA
function updatesenha(){
    var senhaatual = document.getElementById("senhaatual").value
    var senhanova = document.getElementById("senhanova").value
    var senhanovabb = document.getElementById("senhanova2").value
    // var newnome = document.getElementById("nome_conta").value
    var newemail = document.getElementById("email_conta").value
    
    $.ajax({
        type: "post",
        url: "processamento/save.php",                                                 //novonome:newnome,
        data: { senhaatuala: senhaatual, senhanovaa:senhanova, senhanovab:senhanovabb, novoemail:newemail },
        dataType: "text",
        success: function (response) {
            alert(response)
                    //mostrando o alerta
        var alerta = document.querySelector("#alerta");
        alerta.style.animation = "1s alerta";
        alerta.style.display = "block";
        alerta.style.animation = "1s alerta";
        //escrevendo a mensagem no alerta
        const meuCabecalho = document.querySelector('#msg');
        meuCabecalho.textContent = 'sucesso';
        //tirar o alerta da tela depois de 8s
        setTimeout(function () { alerta.style.display = "none"; }, 8000);
        },
        error:function(){
        }
    });
}

//customização
    function background(){
        var backgroundcolor = document.getElementById("corfundo").value
        var backgroundbutom = document.getElementById("corbotoes").value
        var fontcolor = document.getElementById("fontcolor").value

        $.ajax({
            type: "post",
            url: "processamento/save.php",
            data: {fundo: backgroundcolor },
            dataType: "text",
            success: function (response) {
                //alert(response)
                atualizainframe();
            }
        });

        $.ajax({
            type: "post",
            url: "processamento/save.php",
            data: {corbotoes: backgroundbutom },
            dataType: "text",
            success: function (response) {
                //alert(response)
                atualizainframe();
            }
        });

        $.ajax({
            type: "post",
            url: "processamento/save.php",
            data: {colorfont: fontcolor },
            dataType: "text",
            success: function (response) {
                //alert(response)
                atualizainframe();
            }
        });
    }

    function nome_conta(){

        //mostrando o alerta
        var alerta = document.querySelector("#alerta");
        alerta.style.animation = "1s alerta";
        alerta.style.display = "block";
        alerta.style.animation = "1s alerta";
        //escrevendo a mensagem no alerta
        const meuCabecalho = document.querySelector('#msg');
        meuCabecalho.textContent = 'Você não pode mudar o nome de usuario.';
        //tirar o alerta da tela depois de 8s
        setTimeout(function () { alerta.style.display = "none"; }, 8000);
    }
