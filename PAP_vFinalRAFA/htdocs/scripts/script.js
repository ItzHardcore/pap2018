function hover(id){
    var div = document.getElementById("about");
    
    if(id == 1){
        
        div.innerHTML = "Rafa<br> <a align='center'> Aluno do 12º Gestão e Programação de Sistemas de Informação.</a> <br> <a> Programação não é o seu forte mas foi o desenvolvidor do website da Vigillance.</a>     ";
        
    }
    else if(id == 2){
        div.innerHTML = "Bruno<br> <a align='center'> Aluno do 12º Gestão e Programação de Sistemas de Informação.</a> <br> <a> Bom programador, com bons cálculos matemáticos. É um aluno totalmente diferente do Rafael mas ambos são trabalhadores</a>";
    }
}
function unhover(){
    var div = document.getElementById("about");
    div.innerHTML = "";
}