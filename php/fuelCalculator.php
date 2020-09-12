<?php
/**
 * In this kata you will have to write a function that takes litres and 
 * pricePerLiter as arguments. Purchases of 2 or more litres get a discount of 
 * 5 cents per litre, purchases of 4 or more litres get a discount of 10 cents 
 * per litre, and so on every two litres, up to a maximum discount of 25 cents
 * per litre. But total discount per liter cannot be more than 25 cents. round
 * answer to 2 decimal places. Also you can guess that there will not be
 * negative or non-numeric inputs
 */

 function fuel_price($litres, $price_per_liter) {
    
    $discount = (round(($litres / 2)) * 5) * 0.01;
    if ($discount < 25){
    $summ = $litres * ($price_per_liter - $discount);

       return 'цена: ' . $summ . ' скидка- ' . $discount;
    }
}


echo "<pre>";
print_r(fuel_price(5, 1.23)); //5.65
echo '<br>';
print_r(fuel_price(8, 2.5)); //
echo '<br>';
print_r(fuel_price(5, 5.6)); //
echo "</pre>";
