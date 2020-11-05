<?php

namespace App\Services;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class Email
{
    /**
     * Envoi de mail.
     *
     * @param string $destinataire
     * @param string $sujet
     * @param string $template Template Blade à utiliser
     * @param array  $data Tableau contenant les données nécessaires
     */
    public static function send($destinataire, $sujet, $template, $data = [])
    {
        if (App::environment(['local', 'staging'])) {
            $sujet .= '[DEV: '. $destinataire .']';
            $destinataire = env('APP_EMAIL_DESTINATAIRE', 'oupoh.christian@gmail.com');
        }

        Mail::send($template, $data, function ($message) use ($sujet, $destinataire)
        {
            $message->to($destinataire);
            $message->from('admin@weboftoday.fr');
            $message->subject($sujet);
        });
    }
}
