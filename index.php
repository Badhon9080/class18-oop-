<?php
  
 // $carName = 'Tesla';
 class Car {
    
    //property
    //*access modifieR!
    
    // public $carName = 'Tesla';
    /*
    public $carName = null;
    public $speed = 'normal';
    public $type= 'normal';
    */
   //magic methodS!
     // construct method
     
     function __construct(
        public  $carName,
        public  $speed, 
       // public $type,
       public string | int $type,
        protected  $color,
        )
     {
      
     }
/*
     function __destruct()
     {
          echo "i am running fast <br>";  
     }
*/
    //* Methods 
    function goingForward(){
        echo "The $this->carName is going $this->speed forward <br>";
    }

    function goingBacKward(){
        echo "The $this->carName is going bacKward! <br>";
    }





    function GetCarType(){
        echo "This $this->carName is $this->type <br>";
    }
    

 }
 class SuperCar extends Car {
     function getColor(){
        echo $this->color;
     }


 }




// $tesla = new Car("Tesla z10", 250, 'electric', 'red');
// $tesla->carName = "Tesla x10"; 
// $tesla->speed = "very Fast"; 
// $tesla->type = "electric car";
 //echo $tesla->carName;
// $tesla->goingForward();
// $tesla->goingBacKward();
// $tesla->GetCarType();
 // $tesla->goingBacKward('Tesla');
// $tesla->goingBacKward('Tesla');
$ferari = new  SuperCar(
    'ferari 50',
    'very fast',
    'motor',
    'yellow'
);
 echo $ferari->getColor();
// $toyata = new Car();
// $toyata->carName = "Toyata 500";
// echo $toyata->carName;
// $toyata->goingForward("Toyata", 'slow');
// $toyata->goingBacKward();
?>