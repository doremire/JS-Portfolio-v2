<?php
$to = "contact@doremire-server.com"; // 送信先メールアドレス
$subject = "テストメール"; // メールの件名
$message = "これはテストメールです。"; // メールの本文
$headers = "From: 0804tank@gmail.com"; // 送信元メールアドレス

// メールを送信する
$mail_sent = mail($to, $subject, $message, $headers);

// メールの送信結果を確認する
if ($mail_sent) {
  echo "メールを送信しました。";
} else {
  echo "メールの送信に失敗しました。";
}

?>