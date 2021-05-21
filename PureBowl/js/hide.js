const  previousBtn  =  document.getElementById('previousBtn');
const  nextBtn  =  document.getElementById('nextBtn');
const  finishBtn  =  document.getElementById('finishBtn');
const  content  =  document.getElementById('content');
const  bullets  =  [...document.querySelectorAll('.bullet')];
const  login  =  document.getElementById('login');

const MAX_STEPS = 4;
let currentStep = 1;
document.addEventListener('click',hide1);
function hide1()
{    if(currentStep===1)
    { document.getElementById("commande").style.display="none";
      document.getElementById("orders").style.display="block";
          document.getElementById("total").style.display="block";


           }

               else {document.getElementById("commande").style.display="block"; 
                document.getElementById("orders").style.display="none";
               document.getElementById("total").style.display="none";
             }

}
 document.addEventListener('mousemove',hide2);
 function hide2()
 {
  if(currentStep===1)
    {document.getElementById("commande").style.display="none";
   document.getElementById("delivery").style.display="none";
    document.getElementById("payment").style.display="none";
}
}


 document.addEventListener('click',hide3);
function hide3()
{
  if(currentStep===2)
    {document.getElementById("commande").style.display="block";
      document.getElementById("delivery").style.display="none";}

  else    { document.getElementById("commande").style.display="none";
 document.getElementById("delivery").style.display="block";}

 }
document.addEventListener('click',hide4);
function hide4()
{if(currentStep===3)
    document.getElementById("delivery").style.display="block";
  else     document.getElementById("delivery").style.display="none";
}

document.addEventListener('click',hide5);
function hide5()
{if(currentStep===4)
    document.getElementById("payment").style.display="block";
  else     document.getElementById("payment").style.display="none";
}


nextBtn.addEventListener('click',  ()  =>  {
    bullets[currentStep  -  1].classList.add('completed');
    currentStep  +=  1;
    previousBtn.disabled  =  false;
    if  (currentStep  ===  MAX_STEPS)  {
        nextBtn.disabled  =  true;
        finishBtn.disabled  =  false;
    }
    content.innerText  =  `Step Number ${currentStep}`;
});


previousBtn.addEventListener('click',  ()  =>  {
    bullets[currentStep  -  2].classList.remove('completed');
    currentStep  -=  1;
    nextBtn.disabled  =  false;
    finishBtn.disabled  =  true;
    if  (currentStep  ===  1)  {
        previousBtn.disabled  =  true;
       }

    
    content.innerText  =  `Step Number ${currentStep}`;
});

finishBtn.addEventListener('click',  ()  =>  {
    alert('Your delivery is in its way');
    
});