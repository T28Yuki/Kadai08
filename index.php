<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div>
        <h1>店舗登録フォーム</h1>
    </div>

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="tempo">
            <fieldset>
                <legend>店舗登録フォーム</legend>
                <label>店番：<input type="text" name="tempo_no"></label><br>
                <label>店舗名：<input type="text" name="tempo_name"></label><br>
                <label>郵便番号：<input type="text" name="postcode"></label><br>
                <label>住所：<input type="text" name="address"></label><br>
                <label>電話番号：<input type="text" name="phone_no"></label><br>
                <label>開店日：<input type="date" name="open_date"></label><br>
                <label>閉店日：<input type="date" name="close_date"></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->

</body>

</html>