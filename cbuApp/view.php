<?php

//This will allow User to Search All Records
if(isset($_GET['search'])){
    $valueToSearch = $_GET['valueToSearch'];
    $query = "SELECT * FROM `posts` WHERE CONCAT(`id`, `choice_one`, `choice_two`, `choice_three`,
    `choice_four`, `choice_five`, `choice_six`, `choice_seven`, `choice_eight`, `choice_nine`,
    `choice_ten`, `choice_eleven`, `choice_twelve`, `name`, `timestamp`, `notes`)
     LIKE '%".$valueToSearch."%'";
     $search_result = filterTable($query);
}
else {
  $query="SELECT * FROM `posts`";
  $search_result = filterTable($query);
}
//Function that allows users to query the database and search the records
function filterTable($query){
  $connect = mysqli_connect("localhost", "root", "", "cbuapp");
  $filter_Result = mysqli_query($connect, $query);
  return $filter_Result;
}

//This will make the csv file
if(isset($_POST["export"]))
 {
      $connect = mysqli_connect("localhost", "root", "", "cbuapp");
      header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename=ServerCheckList.csv');
      $output = fopen("php://output", "w");
      fputcsv($output, array(`id`, `name`, `timestamp`, `choice_one`, `choice_two`, `choice_three`,
      `choice_four`, `choice_five`, `choice_six`, `choice_seven`, `choice_eight`, `choice_nine`,
      `choice_ten`, `choice_eleven`, `choice_twelve`, `notes`));
      $query="SELECT * FROM `posts`";
      $result = mysqli_query($connect, $query);
      while($row = mysqli_fetch_assoc($result))
      {
           fputcsv($output, $row);
      }
      fclose($output);
 }
?>

<html>
<head>
  <link rel="stylesheet" href="style2.css">
  <img src="logo1.png" alt="Logo" style="width:200px;height:70px">
  <h1> Server Entries </h1>
</head>
<body>
<form action ="view.php" method="get">
  <input type ="text" name = "valueToSearch" placeholder="Value To Search">
  <input type="submit" name="search" value="Filter"><br><br>

<table id="t02">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Date</th>
      <th>Floor 1 Condensation</th>
      <th>Floor 2 Condensation</th>
      <th>Floor 3 Condensation</th>
      <th>Floor 1 Temp&lt70</th>
      <th>Floor 2 Temp&lt70</th>
      <th>Floor 3 Temp&lt70</th>
      <th>Floor 1 AC</th>
      <th>Floor 2 AC</th>
      <th>Floor 3 AC</th>
      <th>Floor 1 <br>Load&lt50% &amp Battery&#61 100%</th>
      <th>Floor 2 <br>Load&lt50% &amp Battery&#61 100%</th>
      <th>Floor 3 <br>Load&lt50% &amp Battery&#61 100%</th>
      <th>Notes</th>
    </tr>
      <?php while($row=mysqli_fetch_array($search_result)):?>
    <tr>
      <td><?php echo $row['id'];?></td>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['timestamp'];?></td>
      <td><?php echo $row['choice_one'];?></td>
      <td><?php echo $row['choice_two'];?></td>
      <td><?php echo $row['choice_three'];?></td>
      <td><?php echo $row['choice_four'];?></td>
      <td><?php echo $row['choice_five'];?></td>
      <td><?php echo $row['choice_six'];?></td>
      <td><?php echo $row['choice_seven'];?></td>
      <td><?php echo $row['choice_eight'];?></td>
      <td><?php echo $row['choice_nine'];?></td>
      <td><?php echo $row['choice_ten'];?></td>
      <td><?php echo $row['choice_eleven'];?></td>
      <td><?php echo $row['choice_twelve'];?></td>
      <td><?php echo $row['notes'];?></td>
    <?php endwhile;?>
    </tr>
  </table>
</form>
<form action = "app.php">
  <input type="submit" name = "appBtn" value = "Go Back to Form" style="border-radius: 12px;
  font-size: 20px;
  color: #053c93;
  padding: 13px 28px;
  border: 1px solid black;
  margin:auto; display:block;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
  ">
</form>
<form method="post" align="center">
    <input type="submit" name="export" value="CSV Export" class="btn btn-success"/>
</form>
</body>
</html>
