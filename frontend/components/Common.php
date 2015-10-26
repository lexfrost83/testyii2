<?
namespace frontend\components;

use yii\base\Component;

class Common extends Component

{
    const EVENT_NOTIFY = 'notify_admin';

    public function sendMail($subject, $text, $emailFrom = 'fkg83@i.ua', $nameFrom = 'Advert')
    {

        if (\Yii::$app->mail->compose()
            ->setFrom(['lex@email.com.ua' => 'Advert'])
            ->setTo([$emailFrom => $nameFrom])
            ->setSubject($subject)
            ->setHtmlBody($text)
            ->send()
        ) {
            $this->trigger(self::EVENT_NOTIFY);
            return true;
        }
    }

    public function notifyAdmin($event)
    {

        echo "Notify Admin";
    }
}