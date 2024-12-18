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
    <h2>โปรเเกรมบันทึกข้อมูลดูเเลสุขภาพ</h2>
    <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">คุณนอนกี่ชั่วโมงต่อวัน</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">สัญชาติของคุณ</label>
    <input type="text" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">คุณมีโรคประจำตัวไหม</label>
    <input type="text" class="form-control" id="inputAddress">
    <br>
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">อาหารที่คุณชอบกินที่คิดว่ามีประโยชน์</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="เมนูอาหารที่ครบอาหาร5หมู่">
    <br>
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">ดื่มน้ำมากพอไหมต่อวัน</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">ออกกำลังกายกี่วันต่อสัปดาห์</label>
    <select id="inputState" class="form-select">
      <option selected>ทุกวัน</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">ข้อเสนอเเนะ</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-4">
  <label for="inputAddress" class="form-label">คุณทานของหวานบ่อยเเค่ไหน</label>
    <input type="text" class="form-control" id="inputAddress">
    <br>
  </div>
  <div class="col-3">
  <label for="inputAddress" class="form-label">ใน1วันคุณขยับร่างกายบ่อยเเค่ไหน</label>
    <input type="text" class="form-control" id="inputAddress">
    <br>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">ให้คะเเนนความพึงพอใจ</label>
    <input type="text" class="form-control" id="inputZip">
    <br>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check
      </label>
    </div>

</form>
<br>
<h1>พัฒนาโดย</h1>
    664485014 นายศุภณัฐ ตามใจเพียร <br>
    หมู่เรียน 66/96 <br>

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
    
<br>
<button type="submit" class="btn btn-success"id="alert">Submit</button>
<button type="reset" class="btn btn-danger"id="alert2">Cancer</button>

</html>