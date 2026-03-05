<form method="post">
  <label>Quantity :</label>
  <input type="number" name="qte">
  <label>Prix :</label>
  <input type="number" name="prix">
  <button type="submit">ok</button>
</form>
<?php
function calcPrice($qte, $prix)
{
  $total = $prix * $qte;
  if ($qte > 10) {
    $total -= $total * 0.10;
  }
  return $total;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $qte = $_POST["qte"] ?? "";
  $prix = $_POST["prix"] ?? "";
  if (!empty($qte) && !empty($prix)) {
    if ($qte > 0 && $prix > 0) {
      echo "Total : " . calcPrice($qte, $prix);
    } else {
      echo "Doit être positif";
    }
  } else {
    echo "Non valide";
  }
}
?>