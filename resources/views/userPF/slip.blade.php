<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Image Form</title>
</head>
<body>
    <div class="container">
        <h2>Upload Image Form</h2>
        <form id="addDataForm" method="POST" action="{{route('updateslip',$slip->id)}}" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" class="form-control" name="slip" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary" name="status" value="2">Upload</button>
        </form>
    </div>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center; /* จัดให้อยู่ตรงกลางแนวนอน */
            align-items: center; /* จัดให้อยู่ตรงกลางแนวตั้ง */
            height: 100vh; /* ทำให้กล่องกรอกข้อมูลอยู่ตรงกลางของหน้าจอ */
        }

        .container {
            width: 400px;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        input[type="file"] {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
        }

        button {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</body>
</html>
