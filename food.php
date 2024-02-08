 <?php
 do{
echo("..........restaurant of food......\n");

echo"1.pizza.........180rs\n";
echo"2.burger........120rs\n";
echo"3.dosa..........100rs\n";
echo"4.idli..........50rs\n";

$choice=readline("enter your choice\n");
switch($choice)
{
    case 1:echo"You have selected Pizza..\n";
            $price=180;
		    break; 
    case 2:echo"you have selected burger..\n";
            $price=120;
            break;
    case 3:echo"you have selected dosa..\n";
            $price=100;
              break; 
    case 4:echo"you have selected idli..\n";
            $price=50;
              break;
    
}
$quantity=readline("enter your quntity\n");
 $amount=$quantity*$price;

 echo "amount is:$amount\n";
 $another=readline("Do you have to place more order y / n?\n");
}while($another== 'Y'||$another =='y');
   
   

 ?> 



 

