<html>
<head>
  <link rel="stylesheet" type = "text/css" href="style1.css">
  <img src="logo1.png" alt="Logo" style="width:200px;height:70px">
  <h1> OPS Server Check List </h1>
</head>

<body>
<form class"formcs" action="postEntries.php" method="get">
<table id="t01">
    <tr>
      <th>CheckList</th>
      <th>OPS-IDF Floor 1</th>
      <th>OPS-IDF Floor 2</th>
      <th>OPS-IDF Floor 3</th>
    </tr>
    <tr>
      <td>Condensation/Water found on A/C unit, or Wall</td>
      <td>

      <input type="radio" name="choice1" value="Yes"> Yes<br><input type="radio" name="choice1" value="No" required> No</td>
      <td>
      <input type="radio" name="choice2" value="Yes"> Yes<br><input type="radio" name="choice2" value="No" required> No</td>
      <td>
      <input type="radio" name="choice3" value="Yes"> Yes<br><input type="radio" name="choice3" value="No" required> No</td>
    </tr>
    <tr>
      <td>Tempature Check Wall Sensor &lt 70</td>
      <td>
      <input type="radio" name="choice4" value="Yes"> Yes<br>
      <input type="radio" name="choice4" value="No" required> No</td>
      <td>
      <input type="radio" name="choice5" value="Yes"> Yes<br>
      <input type="radio" name="choice5" value="No" required> No</td>
      <td>
      <input type="radio" name="choice6" value="Yes"> Yes<br>
      <input type="radio" name="choice6" value="No" required> No</td>
    </tr>
    <tr>
      <td>A/C Wall unit Blowing Cold Air</td>
      <td>
      <input type="radio" name="choice7" value="Yes"> Yes<br>
      <input type="radio" name="choice7" value="No" required> No</td>
      <td>
      <input type="radio" name="choice8" value="Yes"> Yes<br>
      <input type="radio" name="choice8" value="No" required> No</td>
      <td>
      <input type="radio" name="choice9" value="Yes"> Yes<br>
      <input type="radio" name="choice9" value="No" required> No</td>
    </tr>
    <tr>
      <td>Check UPC Load &amp Battery:
      Load &lt 50%
      Battery = 100%</td>
      <td>
      <input type="radio" name="choice10" value="Yes"> Yes<br>
      <input type="radio" name="choice10" value="No"required> No</td>
      <td>
      <input type="radio" name="choice11" value="Yes"> Yes<br>
      <input type="radio" name="choice11" value="No" required> No</td>
      <td>
      <input type="radio" name="choice12" value="Yes"> Yes<br>
      <input type="radio" name="choice12" value="No" required> No</td>
    </tr>
  </table>
<div class = "normalcs" style="margin: auto; text-align: right;">
  <input type="checkbox" name="normal" value=""
  style="border-radius: 12px;
  font-size: 16px;
  padding: 13px 28px;
  background-color: #e8e7e3;
  color: #053c93;
  border: 1px solid black;">Normal
</div>
<br>
<br>
  <div class="Namecs" style="width: 100%; margin: auto; text-align: center;" >
    <label for="name"></label>
    <input type="text" name="name" placeholder="                   Name" style="border-radius: 12px; " required>
<br>
    <label for="notes"></label>
    <textarea name="notes" rows="5" cols="50" placeholder=" Enter Any Notes..." style="border-radius: 12px;"></textarea>
</div>
<br>
  <div>
      <label for="submit">
    <input type="submit" class="Submitcs" name="submit" value="Submit" id="submit" style="border-radius: 12px;
    font-size: 16px;
    padding: 13px 28px;
    background-color: #e8e7e3;
    color: #053c93;
    border: 1px solid black;
    margin:auto; display:block;
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
    ">
</div>
</form>
    <form action ="view.php">
        <input type = "submit" name = "view" value = "View All Records" style="border-radius: 12px;
        font-size: 16px;
        background-color: #e8e7e3;
        color: #053c93;
        border: 1px solid black;
        padding: 15px 32px;
        margin:auto; display:block;
        box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
        ">
    </form>
</body>
</html>

<?php  ?>
