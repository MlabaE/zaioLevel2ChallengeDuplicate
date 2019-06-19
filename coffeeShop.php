<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>coffee shop</title>
    </head>
    <body>
        <p id="demo"></p>
        
        <script>
            function myCoffee(number){
                
                var coffee = ["French Roast","Colombian","Kona"];
                
      switch(number){
        case 1: 
            return coffee[0];
        break;
        case 2: 
            return coffee[1];
        break;
        case 3: 
            return coffee[2];
        break;
            }
            
    }
    
    document.getElementById("demo").innerHTML = myCoffee(1);
                 
        </script>
    </body>
</html>
