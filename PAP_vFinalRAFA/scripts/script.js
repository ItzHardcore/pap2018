function hover(id){
    var div = document.getElementById("about");
    
    if(id == 1){
        
        div.innerHTML = "Rafael Carmo<br> <a align='center'> Aluno do 12º Gestão e Programação de Sistemas Informáticos.</a> <br> <br> <a> Foi o desenvolvidor do website da Vigillance.</a> <br> <a> Gosta de programação apesar de querer seguir outro rumo aliás da engenharia informática.";
        
}
else if(id == 2){
div.innerHTML = "Bruno Silva<br> <a align='center'> Aluno do 12º Gestão e Programação de Sistemas Informáticos.</a> <br> <br> <a> Bom programador, com uma visão ampla para programação. </a> <br> <a> Foi o desenvolvidor da aplicação para a visualização em tempo real das câmaras. </a> <br> <a> Gosta bastante de programação e pretende ser Engenheiro Informático.</a>";
}
   
}
function unhover(){
    var div = document.getElementById("about");
    div.innerHTML = "";
}