<!DOCTYPE html>
<heml lang="en">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>เลขคี่หรือเลขคู่</title>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">ตรวจสอบเลขคู่หรือเลขคี่</h1>
        <form method="post" action="http://localhost/88823665-camp-66/php_04.php">
            <div class="mb-3">
                <label for="start" class="form-label">จุดเริ่มต้น (Start):</label>
                <input type="number" id="start" name="start" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="end" class="form-label">จุดสิ้นสุด (End):</label>
                <input type="number" id="end" name="end" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">ตรวจสอบ</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $start = intval($_POST['start']);
            $end = intval($_POST['end']);

            if ($start > $end) {
                echo "<p class='text-danger mt-3'>กรุณาใส่ค่า Start ให้น้อยกว่า End</p>";
            } else {
                echo "<h2 class='mt-4'>ผลลัพธ์จาก $start ถึง $end</h2>";
                echo "<table class='table table-bordered'>";
                echo "<head>
                        <tr>
                            <th>ตัวเลข</th>
                            <th>สถานะ</th>
                        </tr>
                      </head>";
                echo "<body>";
                for ($i = $start; $i <= $end; $i++) {
                    if ($i % 2 == 0) {
                        $status = "เลขคู่";
                    } else {
                        $status = "เลขคี่";
                    }
                    echo "<tr>
                            <td>$i</td>
                            <td>$status</td>
                          </tr>";
                }
                echo "</body>";
                echo "</table>";
            }
        }
        ?>
    </div>
</body>
</html>