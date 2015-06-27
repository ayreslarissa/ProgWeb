var jogador = "1";
var tamanhoTabela = 11;
construir_tabela();


function construir_tabela(){

    
    var tabela = document.getElementById("tabelaQ");

    for (var linha = 0; linha < tamanhoTabela; linha++){

        var row = tabela.appendChild(document.createElement("tr"));        
        
        for(var coluna = 0; coluna < tamanhoTabela; coluna++){

            var col = tabela.appendChild(document.createElement("td"));
            col.setAttribute("id", "elemento:" + linha + ";" + coluna);        

            if(linha%2 == 0 && coluna%2 == 0){ //PONTO

                var img = document.createElement("img");
                img.setAttribute("id", linha + ";" + coluna);
            
                img.setAttribute("src", "squares/d.gif");
                img.setAttribute("alt", "ponto");
            
                col.appendChild(img);
                
            } 

            if (linha%2 === 0 && coluna%2 === 1){ //BARRA HORIZONTAL NÃO CHECADA
                
                var img = document.createElement("img");
                img.setAttribute("id", linha + ";" + coluna);
                img.setAttribute("data-status", "hnaomarcada");

                img.setAttribute("src", "squares/h0.gif");
                img.setAttribute("alt", "hbar");

            
              img.onclick = mudaCorHorizontal;

                col.appendChild(img);   
                
            }
            
            if (linha%2 === 1 && coluna%2 === 0){ //BARRA VERTICAL NÃO CHECADA

               var img = document.createElement("img");
            img.setAttribute("id", linha + ";" + coluna);
            img.setAttribute("data-status", "vnaomarcada");

            img.setAttribute("src", "squares/v0.gif");
            img.setAttribute("alt", "vbar");

            img.onclick = mudaCorVertical;

            col.appendChild(img);        
                                      
             }

            if (linha%2 === 1 && coluna%2 === 1){

                var img = document.createElement("img");
                img.setAttribute("id", linha + ";" + coluna);
                img.setAttribute("data-changed", "no");

                img.setAttribute("src", "squares/p0.gif");
                img.setAttribute("alt", "img");

                col.appendChild(img);   
             }
             row.appendChild(col);

        }                                       
    }
}

function mudaCorHorizontal(e) {
    
    if ((e.target.getAttribute("data-status")) != "hmarcado") {
        e.target.setAttribute("src", "squares/h1.gif");
        e.target.setAttribute("data-status", "hmarcado");
        var id = e.target.getAttribute("id");
    
        verificaQuadradoFechado(id, e);
        trocaJogador();
        

    }
}

function mudaCorVertical(e) {
    
    if ((e.target.getAttribute("data-status") != "vmarcado")) {
        e.target.setAttribute("src", "squares/v1.gif");
        e.target.setAttribute("data-status", "vmarcado");
        var id = e.target.getAttribute("id");

        verificaQuadradoFechado(id, e);
        trocaJogador();
        
    }
}

function trocaJogador() {
    if (jogador == "1") {
        jogador = "2";
    } else {
        jogador = "1";
    }
}

function contaPontos(jogador) {
    if (jogador == "1") {
        var pontosAtuais = parseInt(document.getElementById("pontosJ1").innerHTML);
        document.getElementById("pontosJ1").innerHTML = pontosAtuais + 1;
    } else {
        var pontosAtuais = parseInt(document.getElementById("pontosJ2").innerHTML);
        document.getElementById("pontosJ2").innerHTML = pontosAtuais + 1;
    }
}

function verificaQuadradoFechado (id,e){

    var linha = parseInt(e.path[0].id.split(';')[0]);            
    var coluna = parseInt(e.path[0].id.split(';')[0]);    

    // Verifica a horizontal
    if ((e.target.getAttribute("data-status")) == "hmarcado") {
        e.target.setAttribute("data-status", "hchecado");
        
        if ((linha + 1 ) < tamanhoTabela) {
            
            if (document.getElementById((linha + 2) + ";" + coluna).getAttribute("src") == "squares/h1.gif") {
                
                if (document.getElementById((linha + 1) + ";" + (coluna - 1)).getAttribute("src") == "squares/v1.gif") {
                    
                    if (document.getElementById((linha + 1) + ";" + (coluna + 1)).getAttribute("src") == "squares/v1.gif") {
                        var p = trocaJogador();

                        
                        if (p == "1") {
                            document.getElementById((linha + 1) + ";" + coluna).setAttribute("src", "squares/p1.gif");
                            contaPontos("1");
                        } else {
                            document.getElementById((linha + 1) + ";" + coluna).setAttribute("src", "squares/p2.gif");
                            contaPontos("2");
                        }
                    }
                }
            } 
        }

        if ((linha - 1 ) > 0) {
            
            if (document.getElementById((linha - 2) + ";" + coluna).getAttribute("src") == "squares/h1.gif") {
                
                if (document.getElementById((linha - 1) + ";" + (coluna - 1)).getAttribute("src") == "squares/v1.gif") {
                    
                    if (document.getElementById((linha - 1) + ";" + (coluna + 1)).getAttribute("src") == "squares/v1.gif") {
                        var p = trocaJogador();
                        
                        
                        if (p == "1") {
                            document.getElementById((linha - 1) + ";" + coluna).setAttribute("src", "squares/p1.gif");
                            contaPontos("1");
                        } else {
                            document.getElementById((linha - 1) + ";" + coluna).setAttribute("src", "squares/p2.gif");   
                            contaPontos("2");
                        }
                    }
                }
            }
        }
    }

    // Checa vertical
    else if ((e.target.getAttribute("data-status")) == "vmarcado") {
        e.target.setAttribute("data-status", "vchecado");
      
        if ((coluna + 1 ) < tamanhoTabela) {
          
            if (document.getElementById((linha) + ";" + (coluna + 2)).getAttribute("src") == "squares/v1.gif") {
             
                if (document.getElementById((linha - 1) + ";" + (coluna + 1)).getAttribute("src") == "squares/h1.gif") {
                    
                    if (document.getElementById((linha + 1) + ";" + (coluna + 1)).getAttribute("src") == "squares/h1.gif") {
                        var p = trocaJogador();
                        
                      
                        if (p == "1") {
                            document.getElementById((linha) + ";" + (coluna + 1)).setAttribute("src", "squares/p1.gif");
                            contaPontos("1");
                        } else {
                            document.getElementById((linha) + ";" + (coluna + 1)).setAttribute("src", "squares/p2.gif");
                            contaPontos("2");
                        }
                    }
                }
            } 
        }

     
        if ((coluna - 1 ) > 0) {
           
            if (document.getElementById((linha) + ";" + (coluna - 2)).getAttribute("src") == "squares/v1.gif") {
                
                if (document.getElementById((linha - 1) + ";" + (coluna - 1)).getAttribute("src") == "squares/h1.gif") {
                   
                    if (document.getElementById((linha + 1) + ";" + (coluna - 1)).getAttribute("src") == "squares/h1.gif") {
                        var p = trocaJogador();
                        
                        
                        if (p == "1") {
                            document.getElementById((linha) + ";" + (coluna - 1)).setAttribute("src", "squares/p1.gif");
                            contaPontos("1");
                        } else {
                            document.getElementById((linha) + ";" + (coluna - 1)).setAttribute("src", "squares/p2.gif"); 
                            contaPontos("2");
                        }
                    }
                }
            }
        }
    } 
} 