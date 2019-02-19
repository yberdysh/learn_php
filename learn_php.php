<!-- php notes -->

<!-- can be inside of HTML, ie: -->
<?php $user = "John"; ?>
<html>
<head></head>
<body>
Hello <?php echo $user; ?>!
</body>
</html>

<!-- variables defined with $ -->
<? php
  $x = 1;
  $y = "foo";
  $z = True;

  // string interpolation is putting variable directly inside double quotes
  $name = "Jake";
  echo "Your name is $name";

  // arrays are zero-indexed:
  $odd_numbers = [1,3,5,7,9];
  $first_odd_number = $odd_numbers[0];
  print_r($odd_numbers); /*prints array */

  // useful functions:
  count($odd_numbers); /*like length*/
  end($odd_numbers); /*gets last item, or can use count -1 index */
  array_push($numbers, 4); /*push into a given array */
  array_pop($numbers)
  array_unshift($numbers, 0);
  array_shift($numbers);
  array_merge($odd_numbers, $even_numbers); /*concat two arrays*/
  sort($numbers); /*sorts in place*/
  array_slice($numbers, 3) /*like slice in JS*/
  array_slice($numbers, 3, 2) /*like splice in JS, last number tells how many to remove, doesn't mutate, just returns that slice */
  array_splice($numbers, 3, 2) /*will actually mutate and take out from array*/
?>


