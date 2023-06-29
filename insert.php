<?php

/**
 * 1. index.phpのフォームの部分がおかしいので、ここを書き換えて、
 * insert.phpにPOSTでデータが飛ぶようにしてください。
 * 2. insert.phpで値を受け取ってください。
 * 3. 受け取ったデータをバインド変数に与えてください。
 * 4. index.phpフォームに書き込み、送信を行ってみて、実際にPhpMyAdminを確認してみてください！
 */

//1. POSTデータ取得

exit; // この行を追加

$tempo_no = isset($_POST["tempo_no"]) ? $_POST["tempo_no"] : null;
$tempo_name = isset($_POST["tempo_name"]) ? $_POST["tempo_name"] : null;
$postcode = isset($_POST["postcode"]) ? $_POST["postcode"] : null;
$address = isset($_POST["address"]) ? $_POST["address"] : null;
$phone_no = isset($_POST["phone_no"]) ? $_POST["phone_no"] : null;
$open_date = isset($_POST["open_date"]) ? $_POST["open_date"] : null;
$close_date = isset($_POST["close_date"]) ? $_POST["close_date"] : null;

//2. DB接続します
try {
  //ID:'root', Password: xamppは 空白 ''
  $pdo = new PDO('mysql:dbname=gs_db2;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//３．データ登録SQL作成

// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO 
                        gs_bm_table(
                            tempo_no, tempo_name, postcode, address, phone_no, open_date, close_date
                          ) VALUES(
                            :tempo_no, :tempo_name, :postcode, :address, :phone_no, :open_date, :close_date
                            )");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR

$stmt->bindValue(':tempo_no', $tempo_no, PDO::PARAM_STR);
$stmt->bindValue(':tempo_name', $tempo_name, PDO::PARAM_STR);
$stmt->bindValue(':postcode', $postcode, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->bindValue(':phone_no', $phone_no, PDO::PARAM_STR);
$stmt->bindValue(':open_date', $open_date, PDO::PARAM_STR);
$stmt->bindValue(':close_date', $close_date, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: index.php");

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SQLに書き込み</title>
  <link rel="stylesheet" href="css/styles.css">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<!DOCTYPE html>

<body>
    <div class="center">
        <h1>登録完了</h1>

        <ul>
            <li><a class="button" href="index.php">登録画面に戻る</a></li>
            <li><a class="button" href="select.php">登録内容を確認</a></li>
        </ul>
    </div>
</body>

</html>
