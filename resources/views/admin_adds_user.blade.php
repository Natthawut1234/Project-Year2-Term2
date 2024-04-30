<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Data Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
  body {
    background-color: #f8f9fa;
    font-family: Arial, sans-serif;
  }
  .container {
    max-width: 1000px;
    margin: 30px auto;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
  }
  .form-group {
    margin-bottom: 20px;
  }
  .form-group label {
    font-weight: bold;
  }
  .form-control {
    border: 2px solid #ddd;
    border-radius: 5px;
  }
  .btn-primary {
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
  }
  .btn-primary:hover {
    background-color: #0056b3;
  }

  .ab {
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    position: relative; /* เพิ่มการกำหนดตำแหน่งเป็น relative */
    right: -2rem; /* ปรับค่า right เป็นค่าลบ */
}


</style>
</head>
<body>

<div class="container">
  <h2 class="mb-4">เพิ่มข้อมูลลูกค้า</h2>                               {{-- file  --}}
  <form id="addDataForm" method="POST" action="/insert" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">ชื่อลูกค้า:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter name">
    </div>

    <div class="form-group">
      <label for="image">ภาพประกอบ:</label>
      <input type="file" class="form-control" name="img" accept="image/*">
    </div>
    

    <div class="form-group">
      <label for="model">รหัสบัตรประจำตัวประชาชน</label>
      <input type="text" class="form-control" name="user_id" placeholder="Enter user id">
    </div>
    
    <div class="form-group">
      <label for="address">ที่อยู่:</label>
      <textarea type="text" class="form-control" name="address" placeholder="Enter address"></textarea>
    </div>
    <div class="form-group">
      <label for="contact">ติดต่อ:</label>
      <textarea type="text" class="form-control" name="contact" placeholder="Enter contact number"></textarea>
    </div>
    <div class="form-group">
      <label for="model">โมเดลโทรศัทพ์:</label>
      <input type="text" class="form-control" name="model_phone" placeholder="Enter mobile model">
    </div>
    <div class="form-group">
      <label for="repair">การซ่อมแซม:</label>
      <textarea type="text" class="form-control" name="repair_change_parts" placeholder="Enter repair details"></textarea>
    </div>
    <div class="form-group">
      <label for="price">ราคาประเมิน:</label>
      <input type="text" class="form-control" name="estimate_price" placeholder="Enter estimated price">
    </div>

    <div class="form-group">
      <label for="status">สถานะ:</label>
      <select class="form-control" name="status">
        <option value="0">รับซ่อม โปรดส่งพัสดุ</option>
        <option value="1">รอการชำระเงิน</option>
        <option value="2">รอตรวจสอบ</option>
        <option value="3">กำลังซ่อม</option>
        <option value="4">ซ่อมเสร็จ</option>
        <option value="5">กำลังจัดส่งพัสดุ</option>
        <option value="6">ส่งสำเร็จ</option>
      </select>
    </div>



    {{-- <div class="form-group">
      <label for="date">Entry Date:</label>
      <input type="date" class="form-control" name="created_at">
    </div> --}}
    <div class="form-group">
      <label for="date">เวลาเข้าซ่อม:</label>
      <input type="datetime-local" class="form-control" name="created_at">
    </div>
    <button type="submit" class="btn btn-primary">ตกลง</button>
    <button type="button" class="btn btn-danger ab" onclick="window.history.back();">ยกเลิก</button>
  </form>
</div>

</body>
</html>
