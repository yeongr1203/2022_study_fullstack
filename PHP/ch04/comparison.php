<?PHP
  $a = 123;
  $b = 456;
  $c = 123.0;

  if ($a == $b)
    print "1. $a 값이 $b 값과 같습니다. <br>";
  if ($a != $b)
    print "2. $a 값이 $b 값과 같지않습니다. <br>";
  if ($a < $b)
    print "3. $a 값이 $b 값보다 작습니다. <br>";
  if ($a > $b)
    print "4. $a 값이 $b 값보다 큽니다. <br>";
  if ($a <= $b)
    print "5. $a 값이 $b 값보다 작거나 같습니다. <br>";
  if ($a >= $b)
    print "6. $a 값이 $b 값보다 크거나 같습니다. <br>";
  if ($a === $b)
    print "7. $a 값이 $b 값과 동일합니다. <br>";

  if ($a == $c)
    print "8. $a 값이 $c 값과 같습니다. <br>";
  if ($a === $c)
    print "9. $a 값이 $c 값과 동일합니다. <br>";


// 답.
// 1.FALSE
// 2.TRUE
// 3.TRUE
// 4.FALSE
// 5.TRUE
// 6.FALSE
// 7.FALSE
// 8.TRUE
// 9.FALSE

?>