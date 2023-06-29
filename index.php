<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max and the brave</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="item">
            <h1>Max and the brave</h1>
            <h4>การผจญภัยของแม็กซ์</h4>
            <br>
            <p> แม็กซ์เป็นคนเข้มแข็งและกล้าหาญ อยู่มาวันหนึ่ง แม็กซ์ได้ตื่นมาอยู่ในป่าลึกลับที่แทบจะเข้าไปไม่ถึง <br>
                และมีอันตราย แม็กซ์ก็ตั้งใจแน่วแน่ที่จะหาทางออกเขาเดินทางไปทั่วป่า ขณะที่เขาเดินทางลึกเข้าไปในป่า<br>
                แม็กซ์ก็พบกับอันตรายทุกประเภท ตั้งแต่สัตว์ดุร้ายไปจนถึงหุบเขาที่ทรยศ ในที่สุด หลังจากสิ่งที่ดูเหมือนชั่วนิรันดร์ แม็กซ์ก็มาถึงฝูงมอนสเตอร์ เขาพุ่งทะลุประตู ดาบในมือ และเผชิญหน้ากับสิ่งมีชีวิตที่น่ากลัว ในการต่อสู้ที่ดุเดือด แม็กซ์ต่อสู้อย่างสุดกำลังและท้ายที่สุด เขาก็ได้รับชัยชนะ  </p>
                <a href="index.php?file=file/max the brave.rar">Download</a>
                <ul>
                <li>
                    <a href= "install.php">วิธีการติดตั้ง</a>
                </li>
                <li>
                    <a href="htplay.php">วิธีการเล่น</a>
                </li>
            </ul>
    </div>
</body>
</html>

<?php
if(isset($_GET["file"])){
  header("Content-Disposition: attachment; filename = " . basename($_GET["file"]));
  readfile($_GET["file"]);
  exit();
}
