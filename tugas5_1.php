<?php
$n1 = printf(false && false);
$n2 = printf(false && true);
$n3 = printf(true && false);
$n4  = true && true;

$or1 = printf(false || false);
$or2 = false || true;
$or3 = true || false;
$or4 = true || true;

printf("
<p>Tabel Logika</p>
<table border=1>
  <thead>
    <tr>
      <th>Input 1</th>
      <th>Input 2</th>
      <th>AND</th>
      <th>OR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>false</td>
    <td>false</td>
    <td>$n1</td>
    <td>$or1</td>
    </tr>
    <tr>
    <td>false</td>
    <td>true</td>
    <td>$n2</td>
    <td>$or2</td>
    </tr>
    <tr>
    <td>true</td>
    <td>false</td>
    <td>$n3</td>
    <td>$or3</td>
    </tr>
    <tr>
    <td>true</td>
    <td>true</td>
    <td>$n4</td>
    <td>$or4</td>
    </tr>
  </tbody>
</table>
")
?>
