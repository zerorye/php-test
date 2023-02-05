<table>
  <tr>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
    <th>7</th>
    <th>8</th>
    <th>9</th>
</tr>
 
<?php
 
for ( $i = 2; $i <= 9; $i++ ) {
 
  print '<tr>';
  print '<th>' . $i . '</th>';
 
    for ( $j = 2; $j <= 9; $j++ ) {
      print '<td>' . $i*$j . '</td>';
    }
  print '</tr>' . "n";
}
 
?>
</table>
</body>

<style>

table {
  border-collapse: collapse;
  border: 1px solid black;
  border
}
th, td {
  border: 1px solid black;

</style>