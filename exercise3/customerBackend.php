<?php
  echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
  integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous" />';
  echo '<link href = "style.css" rel="stylesheet" type="text/css" />';

  $username = $_POST["username"];
  $password = $_POST["password"];

  echo "<h4>Thank you for your purchase, " . $username . "!</h4>";
  echo "<h6>By the way, your password is " . $password . ".</h6>";
  echo "<br><br>Here is your receipt:<br>";

  $itemNames = array('Wands','Cards','Suits');
  $prices = array(3.50, 6.00, 250.00);
  $quantities = array($_POST["wands"], $_POST["cards"], $_POST["suits"]);

  $shipping_option = $_POST["shipping"];
  $shipping_cost = 0.00;
  $shipping_name = "Express";

  if($shipping_option == "5")
  {
    $shipping_cost = 5.00;
    $shipping_name = "Three Day";
  }
  else if($shipping_option == "50")
  {
    $shipping_cost = 50.00;
    $shipping_name = "Overnight";
  }

  $total_cost = $shipping_cost;
  for($i=0; $i<count($itemNames); $i++)
  {
    $total_cost += $prices[$i]*$quantities[$i];
  }

  echo "<table>";
  echo "<tr>";
  echo '<td class="green"/><td class="green"><b>Quantity</b></td><td class="green"><b>Cost Per Item</b></td><td class="green"><b>Subtotal</b></td>';
  echo "</tr>";
  for($i = 0; $i<count($itemNames); $i++)
  {
   echo "<tr>";
   echo "<td class='green'><b>" . $itemNames[$i] . "</b></td>";
   echo "<td>" . $quantities[$i] ."</td>";
   echo "<td>$" . number_format($prices[$i], 2) ."</td>";
   echo "<td>$" . number_format($prices[$i]*$quantities[$i], 2) . "</td>";
   echo "</tr>";
  }
  echo "<tr>";
  echo "<td class='green'><b>Shipping</b></td>";
  echo '<td class="special">' . $shipping_name . "</td><td class='special' /><td>$" . number_format($shipping_cost, 2) . "</td>";
  echo "</tr>";
  echo "<tr>";
  echo '<td class="special3"/><td class="special2"><b>Total Cost</b></td><td class="special2"/>';
  echo "<td class='green'>$" . number_format($total_cost, 2) . "</td>";
  echo "</tr>";
  echo "</table>";

?>
