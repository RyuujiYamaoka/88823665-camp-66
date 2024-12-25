<!DOCTYPE html>
<heml lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>ตารางสูตรคูณ</title>
</head>
<body>
    <div class ="container">
        <h1 class ="col h2 text-center">แสดงตารางสูตรคูณ</h1>
        <form method="post" action="http://localhost/88823665-camp-66/php_03.php">
        <label for="number">ระบุแม่สูตรคูณ:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $my_var = intval($_POST['number']);
        if($my_var>0){
            echo "<h2>แม่สูตรคูณของ $my_var </h2>";
                for($i= 1 ;$i<=12 ;$i++){
                    echo $my_var."x".$i."=".($my_var*$i)."<br>";
        }
    }else{
        echo "<p style ='color: red;'>กรุณาใส่ค่าที่มากกว่า 0</p>";
    }
}
?>
<div>
</body>
</html>