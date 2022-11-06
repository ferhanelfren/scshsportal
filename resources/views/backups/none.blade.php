<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($studentsinfo as $item)

        {{$item->school_year}} <br>
        {{$item->grade_level}} <br>
        {{$item->lrn_stat}} <br>
        {{$item->balikaral_stat}} <br>
        {{$item->student_lrn}} <br>

    @endforeach
</body>
</html>
