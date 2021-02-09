<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5" style="direction: rtl;text-align: right;">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <form action="details.php" method="GET">
                    <div class="form-group">
                        <label for="name">اسمك</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="id">الرقم التدريبي</label>
                        <input type="number" class="form-control" id="id" name="id">
                    </div>

                    <div class="form-group">
                        <label for="when">الفترة:</label>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="when" id="morning" value="صباحي" checked>
                            <label class="form-check-label mr-1" for="morning">صباحي</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="when" id="evening" value="مسائي">
                            <label class="form-check-label mr-1" for="evening">مسائي</label>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="email">البريد الإ‘لكتروني</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="firstScore">درجة الاختبار الاول</label>
                        <input type="number" class="form-control" id="firstScore" name="firstScore">
                    </div>

                    <div class="form-group">
                        <label for="secondScore">درجة الاختبار الثاني</label>
                        <input type="number" class="form-control" id="secondScore" name="secondScore">
                    </div>


                    <div class="form-group">
                        <label for="thirdScore">درجة الاختبار الثاني</label>
                        <input type="number" class="form-control" id="thirdScore" name="thirdScore">
                    </div>


                    <div class="form-group">
                        <label for="semester">الفصل التدريبي</label>

                        <select class="form-control" name="semester">
                            <option value="الاول">الاول</option>
                            <option value="الثاني">الثاني</option>
                            <option value="الصيفي">الصيفي</option>
                        </select>

                    </div>


                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="status" name="status">
                        <label class="form-check-label mr-3" for="status">حاضر</label>
                    </div>


                    <button type="submit" class="btn btn-primary btn-block">ارسال</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>