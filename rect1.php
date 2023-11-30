<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .rectangle-container {
      display: flex;
      justify-content: space-between; /* Adjust as needed */
    }

    .rectangle {
      position: relative;
      width: 200px; /* Adjust the width as needed */
      height: 100px; /* Adjust the height as needed */
      background-color: #3498db; /* Adjust the background color as needed */
      margin: 20px;
      box-sizing: border-box; /* Include padding and border in the box size */
    }

    .top,
    .bottom {
      position: absolute;
      width: 100%;
      height: 10px; /* Adjust the thickness of the top and bottom borders as needed */
      background-color: #2980b9; /* Adjust the border color as needed */
    }

    .top {
      top: 0;
    }

    .bottom {
      bottom: 0;
    }

    .left,
    .right {
      position: absolute;
      width: 10px; /* Adjust the thickness of the left and right borders as needed */
      height: 100%;
      background-color: #2980b9; /* Adjust the border color as needed */
    }

    .left {
      left: 0;
    }

    .right {
      right: 0;
    }
  </style>
</head>
<body>

<?php
$numberOfRectangles = 4;

echo '<div class="rectangle-container">';
for ($i = 0; $i < $numberOfRectangles; $i++) {
    echo '<div class="rectangle">';
    echo '<div class="top"></div>';
    echo '<div class="right"></div>';
    echo '<div class="bottom"></div>';
    echo '<div class="left"></div>';
    echo '</div>';
}
echo '</div>';
?>

</body>
</html>
