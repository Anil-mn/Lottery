var test,test1,Rup,all //variable declarations
function one(x){
    return document.getElementById(x); //function for all getelement
}
load=()=>{
    
     document.getElementById('demo').style.visibility='hidden';
     document.getElementById('bi').style.visibility='hidden';
     document.getElementById('btn').style.visibility='hidden';
     //Hidding elements

}
price=()=>{
    //price validation of lotteries
    var Rupees= document.getElementById('ticket').value;
    if(Rupees=='Monsoon Bumper'){
        Rup=200
        price='5 കോടി '}
     
    if(Rupees=='pournami'){
            Rup=30
           price='70,ലക്ഷം '}
    else if(Rupees=='pournami'){
        Rup=30
        price='70,ലക്ഷം '}

      else if(Rupees=='win win'){
            Rup=30
            price='65,ലക്ഷം '}
           else  if(Rupees=='sthre shakthi'){
                Rup=30
                price='60,ലക്ഷം '}
               else if(Rupees=='Akshaya'){
                    Rup=50
                    price='1 coroe'}
                   else  if(Rupees=='karunyaa'){
                        Rup=50
                        price='6 കോടി'}
       
        test = one("Rupees");  
        test.innerHTML ="<h3> ടിക്കറ്റിന്റെ വില   "+Rup+"</h3>";
        test1 = one("price");  
        test1.innerHTML ="<h3>  സമ്മാനത്തുക  "+price+"</h3>";
        document.getElementById('demo').style.visibility='Visible';
        document.getElementById('bi').style.visibility='Visible';
        document.getElementById('btn').style.visibility='hidden';
        document.getElementById('ne').style.visibility='hidden';
        document.getElementById('vai2').style.visibility='hidden';
        


}
vai=()=>{
    //availability of lottery number
    var ltnum= document.getElementById('num').value;
    if(ltnum=='kc-112346'){
        test = one("vai");  

        test.className='text-danger'
        test.innerHTML ="<h3>  Ticket is already booked try  another one </h3>";
        one('btn').style.visibility='hidden';
        one('ne').style.visibility='hidden';
        one('vai2').style.visibility='visible'
        one('vai2').innerHTML=ltnum
    }
    else{
        
        test = one("vai"); 
        test.className='text-success';
        test.innerHTML ="<h3>  Selected ticket is available  </h3>";
        one('btn').style.visibility='visible'
        one('ne').style.visibility='hidden';
        one('vai2').style.visibility='visible'
        one('vai2').innerHTML=ltnum
    }
all=ltnum 
       
}
bu=()=>{
    //Buying of lottery
    one('ne').style.visibility='visible'
    test = one("disp");  
       test.innerHTML ="<br><h3> you bought ticket number"+"  "+"  "+all+"  For rs   "+Rup+"  </h3>";
    
}
