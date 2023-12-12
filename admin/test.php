<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hiển thị Section và Value</title>
  <style>
    .hidden {
      display: none;
    }
  </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['section'])) {
    $selectedSection = $_POST['section'];
    $selectedValue = htmlspecialchars($selectedSection); // Chống XSS
     $name = $selectedSection;
    
    echo "$name";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="myForm">
    <label for="sectionSelect">Chọn một section:</label>
    <select id="sectionSelect" name="section">
       
    <?php
                      require '../../connect.php';
                      $query = mysqli_query($conn, "select * from  tbl_danhmuc");
                      while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <option value="section1">
                          #<?php echo $row['tendanhmuc'] ?>
                        </option>
                        <?php
                      }
                      ?>
      
    </select>
</form>

<script>
document.getElementById('sectionSelect').addEventListener('change', function() {
    document.getElementById('myForm').submit();
});
</script>

</body>
</html>
