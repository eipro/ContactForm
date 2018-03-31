<!doctype html>
<html lang="FA-IR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>فرم تماس </title>
</head>
<body>
<div id="main">
    <h1> فرم تماس </h1>
    <form method="post" action="tele.php">
        <input type="text" name="Name" placeholder=" نام " required>
        <input type="text" name="famliy" placeholder=" نام خانوادگی ">
        <input type="email" name="email" placeholder=" ایمیل " required>
        <textarea rows="8" cols="60" name="msg" required ></textarea>
        <input type="submit" value="ارسال پیام"><input type="reset" value="تصحیح">
    </form>
</div>

</body>
</html>