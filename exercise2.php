<form 
action="exercise2.php"
method="post">
       <h2>Calculator</h2>
       Input first number:<br><br> 
       <input type="text" name="n1>"><br><br>
       Input second number:<br><br>
       <input type="text" name="n2"><br><br>
       <input type="submit" name="add" value="+">
       <input type="submit" name="diff" value="-">
       <input type="submit" name="prod" value="*">
       <input type="submit" name="quo" value="/">
</form>

<?php
    if(isset ($_POST['add']))
    {
       $n1 = $_POST['n1'];
       $n2 = $_POST['n2'];
       $add = $n1 + $n2;
       echo "Sum: ".$add;
    }
    if(isset ($_POST['diff']))
    {
       $n1 = $_POST['n1'];
       $n2 = $_POST['n2'];
       $diff = $n1 - $n2;
       echo "Difference: ".$diff;
    }
    if(isset ($_POST['prod']))
    {
       $n1 = $_POST['n1'];
       $n2 = $_POST['n2'];
       $prod = $n1 * $n2;
       echo "Product: ".$prod;
    }
    if(isset ($_POST['quo']))
    {
       $n1 = $_POST['n1'];
       $n2 = $_POST['n2'];
       $quo = $n1 / $n2;
       echo "Quotient: ".$quo;
    }

?>