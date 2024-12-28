```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) { //Check if the element is numeric
      $sum += $number; 
    } else {
      //Handle non-numeric values appropriately, e.g., log an error or skip them
      error_log('Non-numeric value encountered: ' . $number);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculateSum($numbers);
echo "Sum: " . $sum; 
```