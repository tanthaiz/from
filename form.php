<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แทนไท-610-16</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="p-4">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php
        $data = $_SERVER["REQUEST_METHOD"] === "POST";

        if ($data) {
            $name = htmlspecialchars($_POST['name']);
            $class = htmlspecialchars($_POST['class']);
            $number = htmlspecialchars($_POST['number']);
            $sex = isset($_POST['sex']) ? implode(', ', $_POST['sex']) : '';

        goto result;
        }
    ?>
    <div class="container">
        <form method="post" action="" class="mx-auto">
            <label class="mt-2">ชื่อ-สกุล: </label>
            <input type="text" name="name" class="form-control form-control-sm" required>
            <label class="mt-2">ชั้น: </label>
            <input type="text" name="class" class="form-control form-control-sm" required>
            <label class="mt-2">เลขที่: </label>
            <input type="text" name="number" class="form-control form-control-sm" required>
            <label class="mt-2">เพศ:</label>
            <select name="sex[]" class="form-control" multiple>
                <option value="ชาย">ชาย</option>
                <option value="หญิง">หญิง</option>
                <option value="อื่นๆ">อื่นๆ</option>
            </select>
            <button type="submit" class="btn btn-primary btn-sm d-block px-4 mx-auto mt-4">ส่งข้อมูล</button>
        </form>
    </div>
    
    <?php
    result:
    if ($data): ?>
        <div class="container mt-4">
            <h4>ข้อมูลที่กรอก:</h4>
            <p><strong>ชื่อ-สกุล:</strong> <?php echo $name; ?></p>
            <p><strong>ชั้น:</strong> <?php echo $class; ?></p>
            <p><strong>เลขที่:</strong> <?php echo $number; ?></p>
            <p><strong>เพศ:</strong> <?php echo $sex; ?></p>
            <a href="form.php" class="btn btn-primary btn-sm d-block px-4 mx-auto mt-4">กลับไปที่ฟอร์ม</a>
        </div>
    <?php endif; ?>
    //แทนไท จันทร์ขจร ม.6/10 เลขที่ 16
</body>
</html>