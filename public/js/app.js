
 var select = document.getElementById('risikostufe');

/* document.getElementById('frist').innerHTML = Zusatztage(); */

function Zusatztage(){

    document.getElementById('frist').innerHTML = 'helo';
    
    console.log(date);

    switch(select){

        case 'sehr tief': frist+= 360; break;
        case 'tief': frist+=180; break;
        case 'hoch': frist-=120; break;
        case 'sehr hoch': frist-=240; break;

    }
    
    
    console.log(frist);

}
