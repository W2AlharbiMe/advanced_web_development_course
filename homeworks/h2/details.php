
<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بيانات الطالب <?php echo $_GET['name'] ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5" style="direction: rtl;text-align: right;">
        <a href="index.php" class="d-flex align-items-center" style="text-decoration: none;"><span style="font-size: 2rem;">&rarr;</span> عودة للصفحة السابقة</a>
        <table class="table table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">الاسم</th>
                    <th scope="col">الرقم التدريبي</th>
                    <th scope="col">الفترة</th>
                    <th scope="col">البريد الإلكتروني</th>
                    <th scope="col">درجة الاختبار الاول</th>
                    <th scope="col">درجة الاختبار الثاني</th>
                    <th scope="col">درجة الاختبار الثالث</th>
                    <th scope="col">حاضر؟</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row"><?php echo $_GET['name']; ?></td>
                    <td><?php echo $_GET['id']; ?></td>
                    <td><?php echo $_GET['when']; ?></td>
                    <td><?php echo $_GET['email']; ?></td>
                    <td><?php echo $_GET['firstScore']; ?></td>
                    <td><?php echo $_GET['secondScore']; ?></td>
                    <td><?php echo $_GET['thirdScore']; ?></td>
                    <td><?php echo isset($_GET['status']) ? 'نعم' : 'لا'; ?></td>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>
