
 var select = document.getElementById('risikostufe');


/* document.getElementById('frist').innerHTML = Zusatztage(); */

function Zusatztage(){


    function addDays(date, days){
        var result = new Date(date);
        result.setDate(result.getDate() + days);
        return result;
    }

    function reduceDays(date, days){
        var result = new Date(date);
        result.setDate(result.getDate() - days);
        return result;
    }


    var date = new Date();
    date = addDays(date, 480); 


    switch(select){

        case 'sehr tief': date = addDays(date, 840); break;
        case 'tief': date = addDays(date, 180); break;
        case 'hoch':date = reduceDays(date, 120); break;
        case 'sehr hoch': date = reduceDays(date, 240); break;

    }
    console.log(date);

/*     document.getElementById('frist').innerHTML = date;
 */    
    /* console.log(frist); */

}
