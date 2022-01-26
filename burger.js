let s = 3.0;
// add lettuce 

var lettuce = document.getElementById("lettuce");
lettuce.addEventListener('change', add);

// add onion 

var onion = document.getElementById("onion");
onion.addEventListener('change', add);

// add tomato 

var tomato = document.getElementById("tomato");
tomato.addEventListener('change', add);
//add cheese
var cheese = document.getElementById("Yes");
cheese.addEventListener('change', add);  

// add potato
var potato = document.getElementById("potato");
potato.addEventListener('change', add);
 //add prezel
 var prezel = document.getElementById("prezel");
 prezel.addEventListener('change', add);

 //add sesame
 var sesame = document.getElementById("sesame");
 sesame.addEventListener('change', add);

 //add ketchup
 var ketchup = document.getElementById("ketchup");
 ketchup.addEventListener('change', add);
 //add mayo
 var mayo = document.getElementById("mayo");
 mayo.addEventListener('change', add);
 //add mustard
 var mustard = document.getElementById("mustard");
 mustard.addEventListener('change', add);

function add(e){
    if(this.checked){
        s+=1;
    }
    else{
        s-=1;
    }
    
}



var amount = document.getElementById('amount');
amount.addEventListener('input',nbr);
function nbr(e){
    let n= e.target.value;
    if(e.target.value>30){
        alert('the limit amount is 30. If you are satisfied with 30 enter ok ');
    }
    s*=(parseFloat(n));
}


// check
var sub = document.getElementById('send');
sub.addEventListener('click', check);
function check(e){
    e.preventDefault();
    document.getElementById("chekmoney").innerText= s;
}