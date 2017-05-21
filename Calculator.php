<?php
if (isset($_GET['x'])) {
    $x = $_GET['x'];
    $op = $_GET['op'];
    $y = $_GET['y'];
    if ($op == '+') {
        $r = $x + $y;
    } else if ($op == '-') {
        $r = $x - $y;
    } else if ($op == '*') {
        $r = $x * $y;
    } else if ($op == '/') {
        $quotient = intval($x / $y);
        $remainder = $x % $y;
        $r = "{$quotient}...{$remainder}";
    }
}
?>
<html>
<head>
    <title>Simple Calculator</title>
</head>

<body>
<form>
    <input type="text" name = "x" value="<?php echo $x ?>" required
           onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <select name="op" value="<?php echo $op ?>">
        <option <?php if($_GET['op'] == '+') echo "selected"; ?>>+</option>
        <option <?php if($_GET['op'] == '-') echo "selected"; ?>>-</option>
        <option <?php if($_GET['op'] == '*') echo "selected"; ?>>*</option>
        <option <?php if($_GET['op'] == '/') echo "selected"; ?>>/</option>
    </select>
    <input type="text" name = "y" value="<?php echo $y ?>" required
           onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
    <input type="submit" value="=" />
    <?php
    echo $r;
    ?>
</form>
</body>
</html>
