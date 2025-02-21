<?php

namespace App\Services; // ✅ Ensure this namespace is correct

use Kreait\Firebase\Factory;
use Kreait\Firebase\Messaging\CloudMessage;
use Kreait\Firebase\Messaging\Notification;


class FirebasePushNotification
{
    public static function sendNotification($title, $body, $deviceToken)
    {
      
//$r = config('firebase.credentials4');
/*$credentials = env('FIREBASE_CREDENTIALS', base_path('app/firebase/fortai-7d627-firebase-adminsdk-fbsvc-ef49925a5b.json'));

        $factory = (new Factory)->withServiceAccount($credentials);
      
        $messaging = $factory->createMessaging();

        $message = CloudMessage::withTarget('token', $deviceToken)
            ->withNotification(Notification::create($title, $body));

        return $messaging->send($message);*/
        
    }
}
