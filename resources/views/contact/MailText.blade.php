<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test send email</title>
</head>
<body>
    <?php echo date("Y年m月d日");?>
    <p>お問い合わせいただき有難うございます。</p>
    <p>お問い合わせいただいた内容は下記のとおりです。</p>
    <p>ご確認ください。</p>

    --------------------------------------<br>
    【名前】　　　　　：{{$name}}<br>
    【メールアドレス】：{{$email}}<br>
    【お問合せ内容】　：<br>
    {{$content}}<br>
    --------------------------------------<br>

    もし間違いがある場合はこちらの連絡先までご連絡ください。<br>
    よろしくお願い致します。
</body>
</html>