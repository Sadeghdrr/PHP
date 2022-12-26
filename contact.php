<html dir="rtl" lang="fa-IR">


<head>

    <meta content=”text/html;charset=utf-8″ http-equiv=”Content-Type”>
    <meta charset=utf-8>

    <link rel="stylesheet" type="text/CSS" href="myStyle.CSS" />
    <script src="question.js"></script>

    <title>
        my resume
    </title>

</head>


<body>

    <p id="title">
        <b>My Resume</b>
    </p>

    <p class="navigationbar">
        <a href="index.html">صفحه اصلی </a>
        &nbsp &nbsp &nbsp &nbsp
        <a href="معرفی.html">معرفی</a>
        &nbsp &nbsp &nbsp &nbsp
        <a href="مهارت ها و توانمندی ها.html">مهارت ها و توامندی ها</a>
        &nbsp &nbsp &nbsp &nbsp
        <a href="افتخارات و دستآوردها.html">افتخارات و دستآوردها</a>
        &nbsp &nbsp &nbsp &nbsp
        <a href="contact.php">تماس با من </a>
    </p>

    <p id="wherearewe">
        <b>تماس با من</b>
    </p>

    <form method="post" action="">
        <label for="name"> نام و نام خانوادگی: </label>
        <input type="text" name="name">
        <br>
        <label for="email"> ایمیل: </label>
        <input type="text" name="email">
        <br>
        <label for="message"> متن پیام: </label>
        <textarea name="message" ></textarea>
        <input type="submit" value="ارسال" id="but">
    </form>

    <!-- <button onclick="Confirmation()" id="but">ارسال</button> -->

    <footer>
        My Resume<a href="index.html"> Link</a><br>
        Email: Sadegh.sg.sn@gmail.com<br>
        Phone Num: 09152179474<br>
        Telegram ID: SadeghSN157
    </footer>

</body>


</html>


<?php
$txtfiles = glob('./Message/*.txt');
$num = count($txtfiles) + 1;

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$file = fopen("./Message/$num.txt", "w");
fwrite($file , "$name\n" . "$email\n" . "$message");
fclose($file);
?>