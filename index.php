<?php
include "connect.php";
// $query = "select * from pk_home where name";
// $result = mysqli_query($con,$query);
$sql = "SELECT * FROM pk_home";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
        echo $row['name'];
    }
} else {
    echo "0 results";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <script src="index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsenui.css">
    <link rel="stylesheet" href="https://unpkg.com/onsenui/css/onsen-css-components.min.css">
    <script src="https://unpkg.com/onsenui/js/onsenui.min.js"></script>
    <title>PK</title>
</head>
<body>
  <div class="container">
    
    <?php while($row=mysqli_fetch_array($result)){?>
    <?php } ?>
      <tr>
        <td><?php echo $row['name']?></td>
    </tr> 
  </div>
        <div class="toolbar">
                <div class="toolbar__left">
                </div>
              
                <div class="toolbar__center">
                  PK@Home
                </div>
              
                <div class="toolbar__right">
                        <span class="toolbar-button">
                                <i class="ion-navicon" style="font-size:32px; vertical-align:-6px;"></i>
                              </span>
                </div>
              </div>
    <div style="height: 200px; padding: 1px 0 0 0;">
        <div class="card card--material">
          <div class="card__title card--material__title">Add Customer Name</div>
          <span>
                <div class="input"><input class="text-input--material" placeholder="customer name" type="text" required></div>
                <br />
          <button class="button--large--cta" style="width: 95%; margin: 0 auto;">Submit</button>
        
        <tr>
          <td><?php echo $row['name']?></td>
        </tr>
        </div>
      </div>
</body>
</html>