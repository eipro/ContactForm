<?php


if (!empty($_POST)) {
    class Telegram
    {

        const CHAT_ID = user id;
        const TOKEN = 'your bot token';

        public static function sendMessage($message)
        {
            $url = "https://api.telegram.org/bot" . self::TOKEN . "/sendMessage?chat_id=" . self::CHAT_ID;
            $url = $url . "&text=" . urlencode($message);
            $ch = curl_init();
            $optArray = array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true
            );
            curl_setopt_array($ch, $optArray);
            $result = curl_exec($ch);
            curl_close($ch);
        }

    }

    Telegram::sendMessage(
        ' 💎 پیام جدید از فرم تماس 💎 '
        . "\n" . '---------------'
        . "\n" . ' نام: ' . $_POST['Name']
        . "\n" . ' نام خانوادگی: ' . $_POST['famliy']
        . "\n" . 'ایمیل: ' . $_POST['email']
        . "\n" . 'پیام: ' . $_POST['msg']
    );

    header('Location: success.php');
} else {
    header('Location: Failed.php');
}
