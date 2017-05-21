<?php
if (isset($_GET['year'])) {
    $msg = 'Ordinary year.';
    $year = $_GET['year'];
    if ($year < 1752) {
        if ($year % 4 == 0) {
            $msg = 'Leap year.';
        }
    } else {
        if ($year % 4   == 0 && $year % 100  <> 0 ||
            $year % 400 == 0 && $year % 4000 <> 0) {
            $msg = 'Leap year.';
        }
    }
    $msg = "$year is $msg";
}
?>
<html>
<body>
<form>
    Please input a year:
    <input type="text" name = "year" required />
    <input type="submit" value="OK" /><br>
    <?php echo $msg; ?>
</form>
</body>
</html>
