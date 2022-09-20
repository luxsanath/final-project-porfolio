<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Deco</title>
	
		<link rel="shortcut icon" type ="x-icon" href="images/lu.jpg">
		
    <link rel="stylesheet" href="css/3-theme.css">


</head>
<body>
    <?php
    if (isset($_POST["date"])) {
      require "Booknow.php";
      if ($_BKN->save(
        $_POST["date"], $_POST["slot"], $_POST["name"],
        $_POST["email"], $_POST["tel"], $_POST["notes"])) {
        echo "<div class='ok'>Order saved.</div>";
      } else { echo "<div class='err'>".$_BKN->error."</div>"; }
    }
    ?>
    <h1
	<div class="container">
    <form id="bknForm" method="post" target="_self">
      <label for="cus_name">Name</label>
      <input type="text" required name="name" value=""/>

      <label for="cus_email">Email</label>
      <input type="email" required name="email" value=""/>

      <label for="cus_tel">Telephone Number</label>
      <input type="text" required name="tel" value=""/>

      <label for="cus_notes">Notes (if any)</label>
      <input type="text" name="notes" value=""/>

      <?php
      $mindate = date("Y-m-d");
      ?>
      <label>Decorations Date</label>
      <input type="date" required id="res_date" name="date"
             min="<?=$mindate?>">

      <label>Decorations Slot</label>
      <select name="slot">
        <option value="morning">Morning</option>
        <option value="evening">Evening</option>
		<option value="night">Night</option>

      </select>

      <input type="submit" value="Submit"/>
    </form>
	</div>
	
</body>
</html>