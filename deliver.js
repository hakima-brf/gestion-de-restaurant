var ok=document.getElementById('ok');
    sub.addEventListener('click', check);
    function check(e){
        e.preventDefault();
        document.getElementById("ok").innertext= deliverd;
        document.getElementById("ok").style.backgroundColor= green;
    }