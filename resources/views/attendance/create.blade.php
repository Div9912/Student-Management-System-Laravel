<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Attendance</title>
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body class="bg-dark">
    <div class="container my-5 py-5">
        <div class="card">
            <div class="card-body">
                <h2 class="heading" style="text-align: center;">Attendance Sheet</h2>

                <form action="" method="POST">
                    @csrf
                    <div class="table-responsive">

                        <table class="table table-bordered table-sm" id="checkboxTable">
                            <thead class="table-dark">
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Student Name</th>
                                    <th class="text-center" id="date1"></th>
                                    <th class="text-center" id="date2"></th>
                                    <th class="text-center" id="date3"></th>
                                    <th class="text-center" id="date4"></th>
                                    <th class="text-center" id="date5"></th>
                                    <th class="text-center" id="date6"></th>

                                    <th class="text-center">No Of Days Present</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($student) && count($student) > 0)
                                @foreach ($student as $key => $student)
                                <tr>
                                    <td class="text-center">{{$key+1}}</td>
                                    <td class="text-center">{{$student->name}}</td>
                                    <td class="text-center"><input type="checkbox" class="checkbox" id="checkbox1-{{$key}}"></td>
                                    <td class="text-center"><input type="checkbox" class="checkbox" id="checkbox2-{{$key}}"></td>
                                    <td class="text-center"><input type="checkbox" class="checkbox" id="checkbox3-{{$key}}"></td>
                                    <td class="text-center"><input type="checkbox" class="checkbox" id="checkbox4-{{$key}}"></td>
                                    <td class="text-center"><input type="checkbox" class="checkbox" id="checkbox5-{{$key}}"></td>
                                    <td class="text-center"><input type="checkbox" class="checkbox" id="checkbox6-{{$key}}"></td>
                                    <td class="text-center"> <span class="selected">0</span></td>
                                </tr>
                                @endforeach

                                @else
                                <tr>
                                    <td colspan="2">No students found.</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </form>
                <a href="{{route('student.index')}}" class="btn btn-info float-end px-2 mx-1">Back</a>
                <button id='downloadexcel' class="btn btn-primary float-end px-2 mx-1">Generate Report</button>
            </div>
        </div>
    </div>



    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">

    </script>
</body>


</html>-->