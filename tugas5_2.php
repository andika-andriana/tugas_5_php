<?php
$input1_1 = "Ayo";
$input1_2 = "Belajar";
$input2_1 = "Bersama";
$input2_2 = "Niomic";
$concat_1 = $input1_1." ".$input1_2;
$concat_2 = $input2_1." ".$input2_2;
$concatFinal = $concat_1." ".$concat_2;

printf("
<h1>Operator String</h1>
<table border=1>
  <thead>
    <tr>
      <th>Input 1</th>
      <th>Input 2</th>
      <th>Hasil</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>Ayo</td>
    <td>Belajar</td>
    <td>$concat_1</td>
    </tr>
    <tr>
    <td>Bersama</td>
    <td>Niomic</td>
    <td>$concat_2</td>
    </tr>
  </tbody>
</table>
<p>Gabungan: $concatFinal :)</p>
")
?>
