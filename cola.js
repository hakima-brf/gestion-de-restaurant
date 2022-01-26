let s = 0.0;
var amount = document.getElementById('amount');
amount.addEventListener('input',nbr);
var amount1 = document.getElementById('amount1');
amount1.addEventListener('input',nbr1);
var amount2 = document.getElementById('amount2');
amount2.addEventListener('input',nbr2);
var amount3 = document.getElementById('amount3');
amount3.addEventListener('input',nbr34);
var amount4 = document.getElementById('amount4');
amount4.addEventListener('input',nbr34);
var amount5 = document.getElementById('amount5');
amount5.addEventListener('input',nbr34);
function nbr(e){
    
    
    let n= e.target.value;
    
    s+=(1*(parseFloat(n)));
    
}
function nbr1(e){
    let n= e.target.value;
    
    
    s+=(0.5*(parseFloat(n)));
}
function nbr2(e){
    let n= e.target.value;
    
    
    s+=(0.6*(parseFloat(n)));
}
function nbr34(e){
    let n= e.target.value;
    
    
    s+=(0.79*(parseFloat(n)));
    
}



// check
var sub = document.getElementById('send');
sub.addEventListener('click', check);
function check(e){
    e.preventDefault();
    document.getElementById("chekmoney").innerText= s;
}