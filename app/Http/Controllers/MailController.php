<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send(Request $request)
    {
        $subject = 'New lead(studiodance.com.ua)';
        $mailto = "danceplusart@gmail.com";

        if ( $request->title != "" ) {
            $title = $request->title;
        } else {
            $title = NULL;
        }

        if ( $request->name != "" ) {
            $name = $request->name;
        } else {
            $name = NULL;
        }

        if ( $request->phone != "" ) {
            $phonenum = $request->phone;
        } else {
            $phonenum = NULL;
        }

        if ( $request->step1 != "" ) {
            $step1 = $request->step1;
        } else {
            $step1 = NULL;
        }

        if ( $request->step2 != "" ) {
            $step2 = $request->step2;
        } else {
            $step2 = NULL;
        }

        if ( $request->step3 != "" ) {
            $step3 = $request->step3;
        } else {
            $step3 = NULL;
        }

        if ( $request->step4 != "" ) {
            $step4 = $request->step4;
        } else {
            $step4 = NULL;
        }

        $text = "Форма: $title <br><br>";

        if ($name != NULL) { $text .= "Ім'я: $name <br>"; }
        if ($phonenum != NULL) { $text .= "Телефон:  $phonenum <br>"; }
        if ($step1 != NULL) { $text .= "Підбираєте танці для себе чи для дитини?:  $step1 <br>"; }
        if ($step2 != NULL) { $text .= "Скільки Вам/дитині років?:  $step2 <br>"; }
        if ($step3 != NULL) { $text .= "Чи займались раніше танцями?:  $step3 <br>"; }
        if ($step4 != NULL) { $text .= "Який напрямок Вам більше всього подобається?:  $step4 <br>"; }

        \Mail::send([], [], function ($message) use ($text, $subject, $mailto) {
            $message->setBody($text, 'text/html');
            $message->subject($subject);
            $message->to($mailto);
        });
        return exit("ok");
    }
}
