
function risikoberechnung(){
    var frist = 480;
    var select = document.getElementById('risiko');
    var value = select.options[select.selectedIndex].value;

   switch(value){
    case 'sehr tief':
        frist+=360;
    break;
    case 'tief':
        frist+=180;
    break;
    case 'hoch':
        frist-=120;
    break;
    case 'sehr hoch':
        frist-=240;
    break;

   }

}