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
  <h2 class="mb-4">แก้ไขข้อมูลลูกค้า</h2>
  <form id="addDataForm" method="POST" action="{{route('update',$edit_user->id)}}">
    @csrf
    <div class="form-group">
      <label for="name">ชื่อลูกค้า:</label>
      <input type="text" class="form-control" name="name" value="{{$edit_user->name}}">
    </div>
    <div class="form-group">
      <label for="img">ภาพประกอบ:</label><br>
      @if($edit_user->img)
          <img src="{{ asset(Storage::url($edit_user->img)) }}" alt="Customer Image" style="max-width: 100px;">
      @else
          <p>ไม่มีรูปภาพ</p>
      @endif
  </div>
  
  <div class="form-group">
      <label for="img">สลิปโอนเงิน:</label><br>
      @if($edit_user->slip)
          <img src="{{ asset(Storage::url($edit_user->slip)) }}" alt="Customer Slip" style="max-width: 300px;">
      @else
          <p>ไม่มีสลิปโอนเงิน</p>
      @endif
  </div>
  

    <div class="form-group">
      <label for="model">รหัสบัตรประจำตัวประชาชน:</label>
      <input type="text" class="form-control" name="user_id" value="{{$edit_user->user_id}}">
    </div>

    <div class="form-group">
      <label for="address">ที่อยู่:</label>
      <textarea type="text" class="form-control" name="address">{{$edit_user->address}}</textarea>
    </div>
    <div class="form-group">
      <label for="contact">ติดต่อ:</label>
      <textarea type="text" class="form-control" name="contact">{{$edit_user->contact}}</textarea>
    </div>
    <div class="form-group">
      <label for="model">โมเดลโทรศัทพ์:</label>
      <input type="text" class="form-control" name="model_phone" value="{{$edit_user->model_phone}}">
    </div>
    <div class="form-group">
      <label for="repair">การซ่อม:</label>
      <textarea type="text" class="form-control" name="repair_change_parts">{{$edit_user->repair_change_parts}}</textarea>
    </div>
    <div class="form-group">
      <label for="price">ราคาประเมิน:</label>
      <input type="text" class="form-control" name="estimate_price" value="{{$edit_user->estimate_price}}">
    </div>
    <div class="form-group">
      <label for="price">ราคาจริง:</label>
      <input type="text" class="form-control" name="true_price" value="{{$edit_user->true_price}}">
    </div>
    <div class="form-group">
      <label for="price">รหัสพัสดุ:</label>
      <input type="text" class="form-control" name="th_" value="{{$edit_user->th_}}">
    </div>
    <div class="form-group">
      <label for="status">สถานะ:</label>
      <select class="form-control" name="status" value="{{$edit_user->status}}">
        <option value="0" {{$edit_user->status == 0 ? 'selected' : ''}}>รับซ่อม โปรดส่งพัสดุ</option>
        <option value="1" {{$edit_user->status == 1 ? 'selected' : ''}}>รอการชำระเงิน</option>
        <option value="2" {{$edit_user->status == 2 ? 'selected' : ''}}>รอตรวจสอบ</option>
        <option value="3" {{$edit_user->status == 3 ? 'selected' : ''}}>กำลังซ่อม</option>
        <option value="4" {{$edit_user->status == 4 ? 'selected' : ''}}>ซ่อมเสร็จ</option>
        <option value="5" {{$edit_user->status == 5 ? 'selected' : ''}}>กำลังจัดส่งพัสดุ</option>
        <option value="6" {{$edit_user->status == 6 ? 'selected' : ''}}>ส่งสำเร็จ</option>
      </select>
    </div>
    {{-- <div class="form-group">
      
      

      <label for="date">Entry Date:</label>
      <input type="date" class="form-control" name="created_at">
    </div> --}}
    <div class="form-group">
      <label for="date">เวลาเข้าซ่อม:</label>
      <input type="datetime-local" class="form-control" name="created_at" value="{{$edit_user->created_at}}">
    </div>

    <div class="form-group">
        <label for="date">เวลาซ่อมเสร็จ:</label>
        <input type="datetime-local" class="form-control" name="updated_at" value="{{$edit_user->updated_at}}">
    </div>

    <button type="submit" class="btn btn-primary">ตกลง</button>
    <button type="button" class="btn btn-danger ab" onclick="window.history.back();">ยกเลิก</button>

  </form>
</div>

</body>
</html>
