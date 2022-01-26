let s = 3.0;
// add pepperoni 

var pepperoni = document.getElementById("pepperoni");
pepperoni.addEventListener('change', add);

// add onion 

var onion = document.getElementById("onion");
onion.addEventListener('change', add);

// add Mushroom 

var Mushroom = document.getElementById("Mushroom");
Mushroom.addEventListener('change', add);
// add anchoivies 

var anchoivies = document.getElementById("anchoivies");
anchoivies.addEventListener('change', add);
// add jelapeno 

var jelapeno = document.getElementById("jelapeno");
jelapeno.addEventListener('change', add);
// add supreme 

var supreme = document.getElementById("supreme");
supreme.addEventListener('change', add);
// add sausage 

var sausage = document.getElementById("sausage");
sausage.addEventListener('change', add);

// add peppers 

var peppers = document.getElementById("peppers");
peppers.addEventListener('change', add);







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

