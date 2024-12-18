<!DOCTYPE html>
<html lang="en">
<head>
   
<!-- เพิ่ม bootstrap -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง ภาษา PHP</title>
<!-- เพิ่ม sweetalert -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">
<!-- เพิ่มfont -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@100..700&family=Charm:wght@400;700&family=Pridi:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    body {
         font-family: "Charm", serif;
         font-weight: 400;
         font-style: normal;
         margin-left: 100px;
    }
  </style>
</head>

<body>
    <h1>การเขียนโปรเเกรมด้วย PHP </h1>
    664485014 นายศุภณัฐ ตามใจเพียร <br>
    หมู่เรียน 66/96 <br>

    <div class="alert alert-info">
  <strong>สำเร็จเเล้วววววว!</strong> Indicates a successful or positive action.
</div>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- เพิ่ม sweetalert -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert').click(function() {
                Swal.fire(
                    'Success!',
                    'You clicked the button!',
                    'success'
                );
            });
        });
    </script>
<!-- alert2 -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert2').click(function() {
                Swal.fire(
                    'Bad!',
                    'You clicked the button!',
                    'success'
                );
            });
        });
    </script>
<button type="button" class="btn btn-success">กดยอมรับ</button>
<button type="button" class="btn btn-danger">ยกเลิก</button>
<br><br>
<div class="card bg-info text-white">
    <div class="card-body">เย้!</div>
  </div>
  <br>

  <div class="card" style="width:400px">
  <img class="card-img-top" src="พีท.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">พีท ศุภณัฐ</h4>
    <p class="card-text">พยายามให้ตาย ก็ไม่สบายอยู่ดี</p>
    <a href="https://www.npru.ac.th/index.php" class="btn btn-primary">เพิ่มเติม</a>
  </div>
</div>
<button type="button" class="btn btn-info" id="alert">ทดสอบใช้งงาน sweetalert</button>
<button type="button" class="btn btn-danger" id="alert2">cancer</button>

</html>