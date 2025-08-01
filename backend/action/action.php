<?php
require '../function/functions.php';
if (isset($_POST['type'])) {
    $_POST['page'] = $_SERVER['HTTP_REFERER'];
    date_default_timezone_set("Asia/Karachi");
    switch ($_POST['type']) {
        case 'popup-form':
            popUpForm($_POST, $connection, $_REQUEST);
            break;
        case 'footerForm':
            footerForm($_POST, $connection);
            break;
        case 'formLong':
            nameEmailPhoneMessageForm($_POST, $connection);
            break;
        case 'formShort':
            nameEmailPhoneForm($_POST, $connection);
            break;
        case 'serviceForm':
            dropdownForm($_POST, $connection);
            break;
        case 'planForm':
            planForm($_POST, $connection);
            break;
        case 'questionnaire':
            questionnaire($_POST, $connection);
            break;
        case 'contactForm':
            contactForm($_POST, $connection);
            break;
        case 'modalForm':
            modalForm($_POST, $connection);
            break;
        case 'landingPageForm':
            landingNewForm($_POST, $connection);
            break;
        case 'landingForm':
            landingFooterForm($_POST, $connection);
            break;
        case 'signUpForm':
            signUpForm($_POST, $connection);
            break;
        case 'contactFormTwo':
            contactFormTwo($_POST, $connection);
            break;
        case 'emailForm':
            emailForm($_POST, $connection);
            break;
        case 'modalFormTwo':
            contactFormTwo($_POST, $connection);
            break;
        case 'branding':
            branding($_POST, $connection);
            break;
        case 'brandingAgency':
            nameEmailPhoneCountryForm($_POST, $connection);
            break;
        case 'publishingJourney':
            publishingJourney($_POST, $connection);
            break;
    }
    header('Location: https://hoisolutions.com/thank-you');
}

if (isset($_POST['illustration'])) {
    $_POST['page'] = $_SERVER['HTTP_REFERER'];
    date_default_timezone_set("Asia/Karachi");
    $current_month = date('m');
    $contents = implode(PHP_EOL, $_SERVER);
    $contents .= PHP_EOL . PHP_EOL;
    //Save string to log, use FILE_APPEND to append.
    file_put_contents('./log_' . date("j.n.Y") . '.log', $contents, FILE_APPEND);

    if (isset($_POST["web_form"]) && $_POST['web_form'] == (number_format($current_month) - 1)) {
        switch ($_POST['illustration']) {
            case 'illustrativeForm':
                illustrativeForm($_POST, $connection);
                break;
        }
    }
    header('Location: https://hancockghostwriters.com/illustration-thank-you');
}
