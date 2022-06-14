<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Patient</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body{
                direction: rtl;
                font-family: Calibri;
            }
        h2{
              font-weight: bolder;
              border: 5px solid black;
              border-top-left-radius: 50px;
              border-bottom-right-radius: 50px;
          }
        td a{
                color: black;
            }
        td a:hover{
                color: black;
            }
    </style>
</head>

<body>
<div class="container text-center">
    <h2 class="w-50 p-2 mb-2 ml-auto mr-auto mt-4">المرضى</h2>
    <table class="table table-striped table-bordered w-80 mr-auto ml-auto mt-4 mb-4">
        <thead>
        <tr>
            <th>رقم المريض</th>
            <th>اسم المريض</th>
            <th>عنوان المريض</th>
            <th>الجنس</th>
            <th>الهاتف</th>
            <th>العمر</th>
            <th>تعديل</th>
            <th>الحذف</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ppp as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->patient_name }}</td>
                <td>{{ $row->patient_address }}</td>
                <td>
                      @if($row->gender==1) ذكر
                      @elseif($row->gender==2) أنثى
                      @else غير محدد
                      @endif
                </td>
                <td>{{ $row->phone }}</td>
                <td>{{ $row->age }}</td>
                <td><a href="{{ route('patient.edit',$row->id) }}">تعديل</a></td>
                <td>
                    <form action="{{ route('patient.destroy',$row->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{ route('patient.create') }}" class="bg-primary text-center" style="
                                                                                    padding: 10px 20px;
                                                                                    color: #ebf4f8;
                                                                                    font-size: 20px;
                                                                                    text-decoration: none;
                                                                                    font-weight: bolder">ادخال مريض جديد</a>
</div>
</body>
</html>
