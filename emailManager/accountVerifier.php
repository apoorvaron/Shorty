<?php

require __DIR__ . '/mailConnection.php';

function verifyEmail($info){
    /*
    
        $info = [
            email => "example@test.com",
            link => "verification Link",

        ]

    */

    $template = '
        <div id="wrapper" style="
            font-family : arial; 
            padding: 20px 20px 20px 40px;
            border-left: 5px solid #adadad;
        ">
            <p style="font-size: 15px;">Hello Dear,</p>

            <p style="font-size: 15px;">Thank you for trusting our platform, you are just one step away from verifing you email.</p>

            <p style="font-size: 15px;">Please verify yourself by clicking on the below button</p>

            <div>
                <a href="{{ link }}" id="verify_btn" style="
                    text-decoration: none;
                    background: #0e1d34;
                    color: #fff;
                    font-weight:bold;
                    padding: 0 15px;
                    line-height: 40px;
                    border-radius: 5px;
                    display: inline-block;
                    margin: 30px auto;
                ">Verify Now</a>
            </div>

            <p style="font-size: 15px;">In case the above button doesn\'t work, please use below link:</p>

            <a href="{{ link }}">{{ link }}</a>

            <p class="info" style="
                color: #666;
                font-size: 13px;
                text-align:center;
                width: 80%;
                margin:20px auto;
            ">This email is sent to <b>{{ email }}</b>, if it was not you then ignore it.</p>

            <div id="regards" style="
                font-size: 14px;
                margin: 0;
                line-height: 17px;
                color: #444;
            ">
                <p>Best Regards, </p>
                <p>Team Shorty</p>
            </div>
        </div>';

    $plainTemplate = "Hello Dear,\n";
    $plainTemplate .= "Thank you for trusting our platform, you are just one step away from verifing you email.\n";
    $plainTemplate .= "Please verify yourself by opening below link in you browser:\n\n";
    $plainTemplate .= "{{ link }}\n\n";
    $plainTemplate .= "This email is sent to {{ email }}, if it was not you then ignore it.";

    foreach($info as $key => $value) {
        $template = str_replace("{{ $key }}", $value, $template);
        $plainTemplate = str_replace("{{ $key }}", $value, $plainTemplate);
    }

    $mail = new MailSender();

    $mail->addSubject("This is a Verification link from Shorty");
    $mail->addHTMLBody($template);
    $mail->addAltBody($plainTemplate);

    $mail->addRecipent($info['email']);
    $mail->setFrom("account@shrty.rf.gd", "Account Team");
    $mail->addReplyTo("no-reply@shrty.rf.gd", "No Reply");

    return $mail->send();
}
?>

