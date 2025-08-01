<?php
require '../function/functions.php';
if (isset($_POST['type'])) {

    $slug = basename(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH));

    if ($slug === 'index' || $slug === '') {
        $thankyou_url = 'https://hoisolutions.com/thank-you';
    } else {
        //if modal form then check cta classes and add calltoaction accordingly
        $calltoaction = "";
        $form_type = $_POST['type'];
        $cta = $_POST['cta'];

        if($form_type == "modalForm" || $form_type == "contactModal"){
            if($slug == 'saas-development' || $slug == 'magento-development' || $slug == 'crm-web-portal' || $slug == 'about-us' || $slug == 'services' || $slug == 'website-design-and-development' || $slug == 'mobile-app-development' || $slug == 'web-application-development' || $slug == 'blockchain-development' || $slug == 'game-development' || $slug == 'custom-website-design-and-development' || $slug == 'full-stack-developmentt' || $slug == 'shopify-website-development' || $slug == 'custom-software-development' || $slug == 'react-native-development' || $slug == 'b2b-and-b2c-web-portals' || $slug == 'python-development' || $slug == 'ecommerce-website-development' || $slug == 'wordpress-design-and-development' || $slug == 'website-maintenance' || $slug == 'ios-app-development' || $slug == 'android-app-development' || $slug == 'cross-platform-app-development' || $slug == 'shopify-website-development' || $slug == 'full-stack-development' || $slug == 'dapp-development' || $slug == 'nft-marketplace-development' || $slug == 'nft-consulting-services' || $slug == 'crm-web-portal' || $slug == 'b2b-and-b2c-web-portals' || $slug == 'portfolio' || $slug == 'web-development-nj' || $slug == 'reviews' ){
                if (strpos($cta, 'form-1')) { 
                    $calltoaction = "cta-1";
                }elseif(strpos($cta, 'form-2')){
                    $calltoaction = "cta-2";
                }elseif(strpos($cta, 'form-3')){
                    $calltoaction = "cta-3";
                }elseif(strpos($cta, 'form-4')){
                    $calltoaction = "cta-4";
                }elseif(strpos($cta, 'form-5')){
                    $calltoaction = "cta-5";
                }elseif(strpos($cta, 'form-6')){
                    $calltoaction = "cta-6";
                }elseif(strpos($cta, 'form-7')){
                    $calltoaction = "cta-7";
                }elseif(strpos($cta, 'form-8')){
                    $calltoaction = "cta-8";
                }elseif(strpos($cta, 'form-9')){
                    $calltoaction = "cta-9";
                }
            }

            if($calltoaction != ""){
                $calltoaction = '&cta='.$calltoaction;
            }
        }

        $thankyou_url = 'https://hoisolutions.com/thank-you?refpage=' . $slug . '&formtype='.strtolower($_POST['type']).$calltoaction;
    }

    $_POST['page'] = $_SERVER['HTTP_REFERER'];
    date_default_timezone_set("Asia/Karachi");
    $current_month = date('m');
    $contents = implode(PHP_EOL, $_SERVER);
    $contents .= PHP_EOL . PHP_EOL;
    //Save string to log, use FILE_APPEND to append.
    file_put_contents('./log_'.date("j.n.Y").'.log', $contents, FILE_APPEND);
    
    if (isset($_POST["web_form"]) && $_POST['web_form'] == (number_format($current_month) - 1) ){
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
    }
    header('Location: ' . $thankyou_url);
}


if (isset($_POST['illustration'])) {
    $_POST['page'] = $_SERVER['HTTP_REFERER'];
    date_default_timezone_set("Asia/Karachi");
    $current_month = date('m');
    $contents = implode(PHP_EOL, $_SERVER);
    $contents .= PHP_EOL . PHP_EOL;
    //Save string to log, use FILE_APPEND to append.
    file_put_contents('./log_'.date("j.n.Y").'.log', $contents, FILE_APPEND);

    if (isset($_POST["web_form"]) && $_POST['web_form'] == (number_format($current_month) - 1) ){    
	    switch ($_POST['illustration']) {
		case 'illustrativeForm':
		    illustrativeForm($_POST, $connection);
		    break;
	    }
    }
    header('Location: https://hancockghostwriters.com/illustration-thank-you');
}
