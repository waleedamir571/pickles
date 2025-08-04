<?php
require_once('../PHPMailer/class.phpmailer.php');
require_once('../PHPMailer/class.smtp.php');
require '../config/dbc.php';

function contactForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");

            $firstName = mysqli_real_escape_string($con, $payload['name']);
            $lastName = mysqli_real_escape_string($con, isset($payload['last_name']) ? $payload['last_name'] : '');
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,first_name,last_name,phone_no,email,message,created_at) VALUES('$page','$firstName','$lastName','$phone','$email','$message','$date')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $page . '</p>';
            $emailContent .= '<p>Name : ' . $firstName . $lastName . '</p>';
            $emailContent .= '<p>Email : ' . $email . '</p>';
            $emailContent .= '<p>Phone : ' . $phone . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent, 'Lead from info@devpickles.com', 'info@devpickles.com', 'info@devpickles.com', 'Dev Pickles', $email);


            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $page . " \n First-name : " . $firstName . " \n Last-name : " . $lastName . " \n Email : " . $email . " \n Phone : " . $phone . " \n Message : " . $message));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function sendEmails($name, $email, $adminSubject, $adminBody)
{
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = '.hostinger.com'; // Replace with your SMTP host
        $mail->SMTPAuth = true;
        $mail->Username = 'info@devpickles.com'; // email
        $mail->Password = 'CybertronLabs@2026'; // password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('info@devpickles.com', 'Dev Pickles');

        // Admin email
        $mail->addAddress('info@devpickles.com', 'Dev Pickles');
        $mail->isHTML(true);
        $mail->Subject = $adminSubject;
        $mail->Body = $adminBody;
        $mail->send();
        echo "Email sent successfully.";
        // header('Location: ../../thank-you.php');
        // exit();

    } catch (Exception $e) {
        echo "Email error: {$mail->ErrorInfo}";
    }
}


function emailForm($payload, $con)
{

    if (empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $email = mysqli_real_escape_string($con, $payload['email']);
            mysqli_query($con, "INSERT INTO leads(page,date,email) VALUES('$page','$date','$email')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $page . '</p>';
            $emailContent .= '<p>Email : ' . $email . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $page . " \n Email : " . $email));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function modalForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Message : " . $message));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


// for new landing pages
function landingNewForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Message : " . $message));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function popUpForm($payload, $con, $req)
{

    if (empty($payload['name']) || empty($payload['email']) || empty($payload['phone'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $question_1 = mysqli_real_escape_string($con, $req['question_1'] == "other" ? $req['q1-other'] : $req['question_1']);
            $question_2 = mysqli_real_escape_string($con, $req['question_2'] == "other" ? $req['q2-other'] : $req['question_2']);
            $question_3 = mysqli_real_escape_string($con, $req['question_3'] == "other" ? $req['q3-other'] : $req['question_3']);
            $question_4 = mysqli_real_escape_string($con, $req['question_4'] == "other" ? $req['q4-other'] : $req['question_4']);
            $question_5 = mysqli_real_escape_string($con, $req['question_5'] == "other" ? $req['q5-other'] : $req['question_5']);
            $question_6 = mysqli_real_escape_string($con, $req['question_6'] == "other" ? $req['q6-other'] : $req['question_6']);
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,question_1,question_2,question_3,question_4,question_5,question_6) VALUES('$page','$date','$name','$email','$phone','$question_1','$question_2','$question_3','$question_4','$question_5','$question_6')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $page . '</p>';
            $emailContent .= '<p>Name : ' . $name . '</p>';
            $emailContent .= '<p>Email : ' . $email . '</p>';
            $emailContent .= '<p>Phone : ' . $phone . '</p>';
            $emailContent .= '<p>What is your web design requirement? : ' . $question_1 . '</p>';
            $emailContent .= '<p>Which platform is your website built on? : ' . $question_2 . '</p>';
            $emailContent .= '<p>What industry do you operate in? : ' . $question_3 . '</p>';
            $emailContent .= '<p>When would you like the website to go live/be updated? : ' . $question_4 . '</p>';
            $emailContent .= '<p>What is your estimated budget for this project? : ' . $question_5 . '</p>';
            $emailContent .= '<p>How likely are you to make a hiring decision? : ' . $question_6 . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details. \n Page : $page  \n  \n Name : $name \n Email :  $email \n Phone : $phone \n What is your web design requirement? :  $question_1 \n Which platform is your website built on? : $question_2 \n What industry do you operate in? : $question_3 \n When would you like the website to go live/be updated? : $question_4 \n What is your estimated budget for this project? : $question_5 \n How likely are you to make a hiring decision? : $question_6 \n"));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


function footerForm($payload, $con)
{

    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $lastName = mysqli_real_escape_string($con, $payload['last_name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $serviceCategory = mysqli_real_escape_string($con, $payload['service_category']);
            $service = mysqli_real_escape_string($con, $payload['service']);
            $estimatedBudget = mysqli_real_escape_string($con, $payload['estimated_budget']);
            $expectedDate = mysqli_real_escape_string($con, $payload['expected_date']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,last_name,email,phone,service_category,service,estimated_budget,expected_date,message) VALUES('$page','$date','$name','$lastName','$email','$phone','$serviceCategory','$service','$estimatedBudget','$expectedDate','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Last-name : ' . $payload['last_name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Service-category : ' . $payload['service_category'] . '</p>';
            $emailContent .= '<p>Services : ' . $payload['service'] . '</p>';
            $emailContent .= '<p>Estimated-budget : ' . $payload['estimated_budget'] . '</p>';
            $emailContent .= '<p>Expected-date : ' . $payload['expected_date'] . '</p>';
            $emailContent .= '<p>Additional-detail : ' . $message . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Last-name : " . $payload['last_name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Service-category : " . $payload['service_category'] . " \n Services : " . $payload['service'] . " \n Estimated-budget : " . $payload['estimated_budget'] . " \n Expected-date : " . $payload['expected_date'] . " \n Additional-detail : " . $message));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

//Name Email Phone Message Form
function nameEmailPhoneMessageForm($payload, $con)
{

    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Message : " . $message));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


//Name Email Phone
function nameEmailPhoneForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone) VALUES('$page','$date','$name','$email','$phone')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone']));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function dropdownForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $serviceCategory = mysqli_real_escape_string($con, $payload['service_category']);
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,service_category) VALUES('$page','$date','$name','$email','$phone','$serviceCategory')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Interested-in : ' . $payload['service_category'] . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Interested-in : " . $payload['service_category']));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function planForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $serviceCategory = mysqli_real_escape_string($con, $payload['service_category']);
            $estimatedBudget = mysqli_real_escape_string($con, $payload['estimated_budget']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,service_category,estimated_budget,message) VALUES('$page','$date','$name','$email','$phone','$serviceCategory','$estimatedBudget','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Interested-in : ' . $payload['service_category'] . '</p>';
            $emailContent .= '<p>Estimated-budget : ' . $payload['estimated_budget'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Interested-in : " . $payload['service_category'] . " \n Estimated-budget : " . $payload['estimated_budget'] . " \n Message : " . $message));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


// QUESTIONNAIRE 
function questionnaire($payload, $con)
{
    if (empty($payload['name'])) {
        echo 'Empty Request';
    } else {
        try {
            // DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $aboutBusiness = mysqli_real_escape_string($con, $payload['about_business']);
            $websiteAddress = mysqli_real_escape_string($con, $payload['website_address']);
            $industry = mysqli_real_escape_string($con, $payload['industry']);
            $website = mysqli_real_escape_string($con, $payload['website']);
            $productServices = mysqli_real_escape_string($con, $payload['product_services']);
            $designPurpose = mysqli_real_escape_string($con, $payload['design_purpose']);
            $webNav = mysqli_real_escape_string($con, $payload['web_nav']);
            $referenceOne = mysqli_real_escape_string($con, $payload['reference_1'] ?: "none");
            $referenceTwo = mysqli_real_escape_string($con, $payload['reference_2'] ?: "none");
            $referenceThree = mysqli_real_escape_string($con, $payload['reference_3'] ?: "none");
            $webReq = mysqli_real_escape_string($con, $payload['web_req'] ?: "none");
            $techInformative = mysqli_real_escape_string($con, $payload['tech_informative'] ?: "none");
            $techEcommerce = mysqli_real_escape_string($con, $payload['tech_ecommerce'] ?: "none");
            $question_1 = mysqli_real_escape_string($con, $payload['question_1'] ?: "none");
            $question_2 = mysqli_real_escape_string($con, $payload['question_2'] ?: "none");
            $question_3 = mysqli_real_escape_string($con, $payload['question_3'] ?: "none");
            $question_4 = mysqli_real_escape_string($con, $payload['question_4'] ?: "none");
            $question_5 = mysqli_real_escape_string($con, $payload['question_5'] ?: "none");
            $question_6 = mysqli_real_escape_string($con, $payload['question_6'] ?: "none");
            $question_7 = mysqli_real_escape_string($con, $payload['question_7'] ?: "none");
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,about_business,website_address,industry,website,product_services,design_purpose,web_nav,reference_1,reference_2,reference_3,web_req,tech_informative,tech_ecommerce,question_1,question_2,question_3,question_4,question_5,question_6,question_7) VALUES('$page','$date','$name','$email','$phone','$aboutBusiness','$websiteAddress','$industry','$website','$productServices','$designPurpose','$webNav','$referenceOne','$referenceTwo','$referenceThree','$webReq','$techInformative','$techEcommerce','$question_1','$question_2','$question_3','$question_4','$question_5','$question_6','$question_7')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $page . '</p>';
            $emailContent .= '<p>Organization Name : ' . $name . '</p>';
            $emailContent .= '<p>Email : ' . $email . '</p>';
            $emailContent .= '<p>Phone : ' . $phone . '</p>';
            $emailContent .= '<p>Description of your business and its target audience : ' . $aboutBusiness . '</p>';
            $emailContent .= '<p>Website address if any : ' . $websiteAddress . '</p>';
            $emailContent .= '<p>Industry : ' . $industry . '</p>';
            $emailContent .= '<p>Website Status : ' . $website . '</p>';
            $emailContent .= '<p>What product / services do you offer? : ' . $productServices . '</p>';
            $emailContent .= '<p>What is your main purpose to design this Website? : ' . $designPurpose . '</p>';
            $emailContent .= '<p>What will be your Website navigation?</p>';
            $emailContent .= '<p>Web Navigation : ' . $webNav . '</p>';
            $emailContent .= '<p>What are your favorite / reference Websites?</p>';
            $emailContent .= '<p>Reference 1 : ' . $referenceOne . '</p>';
            $emailContent .= '<p>Reference 2 : ' . $referenceTwo . '</p>';
            $emailContent .= '<p>Reference 3 : ' . $referenceThree . '</p>';
            $emailContent .= '<p><strong>Type of website required</strong></p>';
            $emailContent .= '<p>Type of website required</p>';
            $emailContent .= '<p>Required : ' . $webReq . '</p>';
            $emailContent .= '<p>If informative</p>';
            $emailContent .= '<p>Required : ' . $techInformative . '</p>';
            $emailContent .= '<p>If E-Commerce, In Which Platform</p>';
            $emailContent .= '<p>E-commerce Platform : ' . $techEcommerce . '</p>';
            $emailContent .= '<p>Other Services Information / Add-ons</p>';
            $emailContent .= '<p>Do you want Live Social Feeds / Plugins connected? : ' . $question_1 . '</p>';
            $emailContent .= '<p>Do you need a Live Chat Plugin connected? : ' . $question_2 . '</p>';
            $emailContent .= '<p>Do you need Professional Content Writing services from us? : ' . $question_3 . '</p>';
            $emailContent .= '<p>Would you like us to provide Ongoing Support and Maintenance? : ' . $question_4 . '</p>';
            $emailContent .= '<p>Are you interested in Social Media Management (SMM)? : ' . $question_5 . '</p>';
            $emailContent .= '<p>Are you interested in Search Engine Optimization (SEO)? : ' . $question_6 . '</p>';
            $emailContent .= '<p>Do you have the Hosting or you want us to provide you Hosting services? : ' . $question_7 . '</p>';
            sendMultipleEmail($emailContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


function questionnaireTwo($payload, $con)
{

    if (empty($payload['name'])) {
        echo 'Empty Request';
    } else {
        try {
            // DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $company_name = mysqli_real_escape_string($con, $payload['company_name']);
            $address = mysqli_real_escape_string($con, $payload['address']);
            $city = mysqli_real_escape_string($con, $payload['city']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $webUrl = mysqli_real_escape_string($con, $payload['web_address']);
            $businessCategory = mysqli_real_escape_string($con, $payload['business_category']);
            $companyTagline = mysqli_real_escape_string($con, $payload['company_tagline']);
            $specialties = mysqli_real_escape_string($con, $payload['specialties']);
            $yearEstablished = mysqli_real_escape_string($con, $payload['year_established']);
            $paymentType = mysqli_real_escape_string($con, $payload['payment_type']);
            $brandCarried = mysqli_real_escape_string($con, $payload['brand_carried'] ?: "none");
            $affiliations = mysqli_real_escape_string($con, $payload['affiliations'] ?: "none");
            $shortDescription = mysqli_real_escape_string($con, $payload['message']);
            $referenceOne = mysqli_real_escape_string($con, $payload['reference_1'] ?: "none");
            $referenceTwo = mysqli_real_escape_string($con, $payload['reference_2'] ?: "none");
            $referenceThree = mysqli_real_escape_string($con, $payload['reference_3'] ?: "none");
            $referenceFour = mysqli_real_escape_string($con, $payload['reference_4'] ?: "none");
            $webUrlOne = mysqli_real_escape_string($con, $payload['web_url_one'] ?: "none");
            $webUrlTwo = mysqli_real_escape_string($con, $payload['web_url_two'] ?: "none");
            $webUrlThree = mysqli_real_escape_string($con, $payload['web_url_three'] ?: "none");
            $webUrlFour = mysqli_real_escape_string($con, $payload['web_url_four'] ?: "none");
            $keywordOne = mysqli_real_escape_string($con, $payload['keyword_one']);
            $keywordTwo = mysqli_real_escape_string($con, $payload['keyword_two']);
            $keywordThree = mysqli_real_escape_string($con, $payload['keyword_three']);
            $keywordFour = mysqli_real_escape_string($con, $payload['keyword_four']);
            $FTPAddress = mysqli_real_escape_string($con, $payload['ftp_address']);
            $FTPUsername = mysqli_real_escape_string($con, $payload['ftp_username']);
            $FTPPassword = mysqli_real_escape_string($con, $payload['ftp_password']);
            $CPANELPATH = mysqli_real_escape_string($con, $payload['c_panel']);
            mysqli_query($con, "INSERT INTO leads(page,date,name,address,city,phone,email,web_address,business_category,company_tagline,specialties,year_established,payment_type,brand_carried,affiliations,message,reference_1,reference_2,reference_3,reference_4,web_url_one,web_url_two,web_url_three,web_url_four,keywords,keyword_two,ftp_address,ftp_username,ftp_password,c_panel) VALUES('$page','$date','$company_name','$address','$city','$phone','$email','$webUrl','$businessCategory','$companyTagline','$specialties','$yearEstablished','$paymentType','$brandCarried','$affiliations','$shortDescription','$referenceOne,'$referenceTwo','$referenceThree','$referenceFour','$webUrlOne','$webUrlTwo','$webUrlThree','$webUrlFour','$keywordOne','$keywordTwo','$keywordThree','$keywordFour','$FTPAddress','$FTPUsername','$CPANELPATH')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $page . '</p>';
            $emailContent .= '<p><strong>CLIENT INFORMATION</strong></p>';
            $emailContent .= '<p>Company-name : ' . $company_name . '</p>';
            $emailContent .= '<p>Address : ' . $address . '</p>';
            $emailContent .= '<p>City : ' . $city . '</p>';
            $emailContent .= '<p>Phone : ' . $phone . '</p>';
            $emailContent .= '<p>Email : ' . $email . '</p>';
            $emailContent .= '<p>Web-URL : ' . $webUrl . '</p>';
            $emailContent .= '<p>Business-category : ' . $businessCategory . '</p>';
            $emailContent .= '<p>Company-tagline : ' . $companyTagline . '</p>';
            $emailContent .= '<p>Specialties : ' . $specialties . '</p>';
            $emailContent .= '<p>Year-established : ' . $yearEstablished . '</p>';
            $emailContent .= '<p>Payment-type : ' . $paymentType . '</p>';
            $emailContent .= '<p>Brand-carried : ' . $brandCarried . '</p>';
            $emailContent .= '<p>Affiliations : ' . $affiliations . '</p>';
            $emailContent .= '<p>Short-description : ' . $shortDescription . '</p>';
            $emailContent .= '<p><strong>TOP COMPETITORS</strong></p>';
            $emailContent .= '<p>Company-name-1 : ' . $referenceOne . ' & Website-URL : ' . $webUrlOne . '</p>';
            $emailContent .= '<p>Company-name-2 : ' . $referenceTwo . ' & Website-URL : ' . $webUrlTwo . '</p>';
            $emailContent .= '<p>Company-name-3 : ' . $referenceThree . ' & Website-URL : ' . $webUrlThree . '</p>';
            $emailContent .= '<p>Company-name-4 : ' . $referenceFour . ' & Website-URL : ' . $webUrlFour . '</p>';
            $emailContent .= '<p><strong>DESIRED KEYWORDS</strong></p>';
            $emailContent .= '<p>keyword-1 : ' . $keywordOne . '</p>';
            $emailContent .= '<p>keyword-2 : ' . $keywordTwo . '</p>';
            $emailContent .= '<p>keyword-3 : ' . $keywordThree . '</p>';
            $emailContent .= '<p>keyword-4 : ' . $keywordFour . '</p>';
            $emailContent .= '<p><strong>HOSTING LOGIN CREDENTIALS</strong></p>';
            $emailContent .= '<p>FTP-ADDRESS : ' . $FTPAddress . '</p>';
            $emailContent .= '<p>FTP-USERNAME : ' . $FTPUsername . '</p>';
            $emailContent .= '<p>FTP-PASSWORD : ' . $FTPPassword . '</p>';
            $emailContent .= '<p>C-PANEL PATH : ' . $CPANELPATH . '</p>';
            sendEmail($emailContent);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}



function landingFooterForm($payload, $con)
{

    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $serviceCategory = mysqli_real_escape_string($con, $payload['service_category']);
            $estimatedBudget = mysqli_real_escape_string($con, $payload['estimated_budget']);
            $expectedDate = mysqli_real_escape_string($con, $payload['expected_date']);
            $industry = mysqli_real_escape_string($con, $payload['industry']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,service_category,industry,estimated_budget,expected_date,message) VALUES('$page','$date','$name','$email','$phone','$industry','$serviceCategory','$estimatedBudget','$expectedDate','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Service-category : ' . $payload['service_category'] . '</p>';
            $emailContent .= '<p>Industry : ' . $payload['industry'] . '</p>';
            $emailContent .= '<p>Estimated-budget : ' . $payload['estimated_budget'] . '</p>';
            $emailContent .= '<p>Expected-date : ' . $payload['expected_date'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Service-category : " . $payload['service_category'] . " \n Industry : " . $payload['industry'] . " \n Estimated-budget : " . $payload['estimated_budget'] . " \n Expected-date : " . $payload['expected_date'] . " \n Message : " . $message));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function signUpForm($payload, $con)
{

    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone) VALUES('$page','$date','$name','$email','$phone')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone']));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function contactFormTwo($payload, $con)
{

    if (empty($payload['name']) || empty($payload['phone'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $firstName = mysqli_real_escape_string($con, $payload['name']);
            $lastName = mysqli_real_escape_string($con, $payload['last_name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,last_name,email,phone,message) VALUES('$page','$date','$firstName','$lastName','$email','$phone','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $page . '</p>';
            // $emailContent .= '<p>Date : ' . $date . '</p>';
            $emailContent .= '<p>First-name : ' . $firstName . '</p>';
            $emailContent .= '<p>Last-name : ' . $lastName . '</p>';
            $emailContent .= '<p>Email : ' . $email . '</p>';
            $emailContent .= '<p>Phone : ' . $phone . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $page . " \n First-name : " . $firstName . " \n Last-name : " . $lastName . " \n Email : " . $email . " \n Phone : " . $phone . " \n Message : " . $message));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function modalFormTwo($payload, $con)
{

    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Message : " . $message));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

// NEW PAGES

function branding($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $country = mysqli_real_escape_string($con, $payload['country']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,country,phone,message) VALUES('$page','$date','$name','$email','$country','$phone','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $page . '</p>';
            $emailContent .= '<p>Name : ' . $name . '</p>';
            $emailContent .= '<p>Email : ' . $email . '</p>';
            $emailContent .= '<p>Country : ' . $country . '</p>';
            $emailContent .= '<p>Phone : ' . $phone . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $page . " \n Name : " . $name . " \n Email : " . $email . " \n Country : " . $country . " \n Phone : " . $phone . " \n Message : " . $message));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

//Name Email Phone Country
function nameEmailPhoneCountryForm($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $country = mysqli_real_escape_string($con, $payload['country']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,country) VALUES('$page','$date','$name','$email','$phone','$country')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Country : ' . $payload['country'] . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Country : " . $payload['country']));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

function publishingJourney($payload, $con)
{
    if (empty($payload['name']) || empty($payload['phone'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $application_type = mysqli_real_escape_string($con, $payload['application_type']);
            $application_before = mysqli_real_escape_string($con, $payload['application_before']);
            $business_nature = mysqli_real_escape_string($con, $payload['business_nature']);
            $services_checkbox = mysqli_real_escape_string($con, implode(",", $payload['services']));

            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,application_type,application_before,business_nature,services) VALUES('$page','$date','$name','$email','$phone','$application_type','$application_before','$business_nature','$services_checkbox')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $page . '</p>';
            $emailContent .= '<p>Date : ' . $date . '</p>';
            $emailContent .= '<p>Which type of application you are looking for? : ' . $application_type . '</p>';
            $emailContent .= '<p>Do you have an application before? : ' . $application_before . '</p>';
            $emailContent .= '<p>What the nature of your business? : ' . $business_nature . '</p>';
            $emailContent .= '<p>What services are you looking for? : ' . $services_checkbox . '</p>';
            $emailContent .= '<p>Name : ' . $name . '</p>';
            $emailContent .= '<p>Email : ' . $email . '</p>';
            $emailContent .= '<p>Phone : ' . $phone . '</p>';
            sendEmail($emailContent);

            //SLACK NOTIFICATION
            if ($page !== null) {
                $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $page . " \n Which type of application you are looking for? : " . $application_type . " \n Do you have an application before? : " . $application_before . " \n What's the nature of your business? : " . $business_nature . " \n What services are you looking for? : " . $services_checkbox . " \n Name : " . $name . " \n Email : " . $email . " \n Phone : " . $phone));
                sendSlack($slackContent);
            }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}


function illustrativeForm($payload, $con)
{

    if (empty($payload['name']) || empty($payload['phone']) || empty($payload['email']) || empty($payload['message'])) {
        echo 'Empty Request';
    } else {
        try {
            //DB FIRST
            $page = isset($_POST['page']) ? $_POST['page'] : null; // Check if 'page' parameter is set
            $date = date("Y-m-d H:i:s");
            $name = mysqli_real_escape_string($con, $payload['name']);
            $email = mysqli_real_escape_string($con, $payload['email']);
            $phone = mysqli_real_escape_string($con, $payload['phone']);
            $message = mysqli_real_escape_string($con, clean($payload['message']));
            mysqli_query($con, "INSERT INTO leads(page,date,name,email,phone,message) VALUES('$page','$date','$name','$email','$phone','$message')") or die(mysqli_error($con));

            //EMAIL NOTIFICATION
            $emailContent = '<p>Page : ' . $payload['page'] . '</p>';
            $emailContent .= '<p>Name : ' . $payload['name'] . '</p>';
            $emailContent .= '<p>Email : ' . $payload['email'] . '</p>';
            $emailContent .= '<p>Phone : ' . $payload['phone'] . '</p>';
            $emailContent .= '<p>Message : ' . $message . '</p>';
            sendEmailIllustration($emailContent);

            // SLACK NOTIFICATION

            $slackContent = json_encode(array("text" => "Hi Team , \n\t We have received a new lead . Please check the following details.  \n \n Page : " . $payload['page'] . " \n Name : " . $payload['name'] . " \n Email : " . $payload['email'] . " \n Phone : " . $payload['phone'] . " \n Message : " . $message));
            sendSlack($slackContent, 'https://hooks.slack.com/services/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');

        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}

// --------------------------------------HELPERS------------------------------------------

function sendEmail(
    $message,
    $subject = 'Lead from info@devpickles.com',
    $to = 'info@devpickles.com',
    $cc1 = 'info@devpickles.com',
    $fromName = 'Dev Pickles',
    $userEmail = null,
    $userName = 'Valued User'
) {
    require_once('../PHPMailer/class.phpmailer.php');
    require_once('../PHPMailer/class.smtp.php');

    // === 1. Send Lead to You ===
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Username = 'info@devpickles.com';
    $mail->Password = 'CybertronLabs@2026';
    $mail->isHTML(true);
    $mail->setFrom('info@devpickles.com', $fromName);
    $mail->addAddress($to);
    $mail->addCC($cc1);
    $mail->Subject = $subject;
    $mail->Body = $message;

    if (!$mail->send()) {
        error_log('Lead email failed: ' . $mail->ErrorInfo);
    }

    // === 2. Auto-Reply to User (if valid email provided) ===
    if (!empty($userEmail) && filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
        $autoReply = new PHPMailer;
        $autoReply->isSMTP();
        $autoReply->Host = 'smtp.hostinger.com';
        $autoReply->Port = 587;
        $autoReply->SMTPDebug = 0;
        $autoReply->SMTPAuth = true;
        $autoReply->Username = 'info@devpickles.com';
        $autoReply->Password = 'CybertronLabs@2026';
        $autoReply->isHTML(true);
        $autoReply->setFrom('info@devpickles.com', $fromName);
        $autoReply->addAddress($userEmail);
        $autoReply->Subject = 'Dev Pickles has Received Your Message!';
        $autoReply->Body = "
            <p><strong>Dear {$userName},</strong></p>
            <p>Thank you for reaching out to Dev Pickles! Our team is reviewing your message and will get back to you within 24 hours.</p>
            <p>For quick answers, visit our <a href='https://hoisolutions.com/faq'>FAQ page</a>.</p>
            <br>
            <p><strong>Best regards,</strong><br>The Dev Pickles Team</p>
            <img src='https://hoisolutions.com/assets/images/logo-dark.png' alt='Dev Pickles' style='max-width: 200px;'>
            <p>Email: <a href='mailto:info@devpickles.com'>info@devpickles.com</a><br>
            Phone: <a href='tel:(949)323-3170'>(949) 323-3170</a><br>
            Address: 5000 Birch St., West Tower, Suite 3000, Newport Beach, CA 92660</p>
        ";

        if (!$autoReply->send()) {
            error_log('Auto-reply failed: ' . $autoReply->ErrorInfo);
        }
    }
}

//MULTIPLE EMAILS
function sendMultipleEmail($message, $subject = 'Lead from noreply@hoisolutions.com', $to = 'sales@hoisolutions.com', $fromName = 'HOI-Solutions')
{
    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'mail.hoisolutions.com';
    $mail->Port = 587;
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@hoisolutions.com';
    $mail->Password = 'w14(xmq{w53F';
    $mail->isHTML(true);
    $mail->From = 'noreply@hoisolutions.com';
    $mail->FromName = $fromName;
    $mail->AddAddress($to);
    // $mail->AddAddress($to2);
    // $mail->AddAddress($to3);
    // $mail->AddAddress($to4);
    $mail->Subject = $subject;
    $mail->Body = $message;
    if (!$mail->send()) {
        //echo 'Message could not be sent.';
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
        //exit;
    }
}

function sendEmailIllustration($message, $subject = 'Lead from noreply@hoisolutions.com', $to = 'sales@hoisolutions.com', $cc1 = 'marketing@hoisolutions.com', $fromName = 'HOI-Solutions')
{

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'mail.hoisolutions.com';
    $mail->Port = 587;
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = true;
    $mail->Username = 'noreply@hoisolutions.com';
    $mail->Password = 'w14(xmq{w53F';
    $mail->isHTML(true);
    $mail->From = 'noreply@hoisolutions.com';
    $mail->FromName = $fromName;
    $mail->AddAddress($to);
    $mail->AddCC($cc1);
    $mail->Subject = $subject;
    $mail->Body = $message;
    if (!$mail->send()) {
        //echo 'Message could not be sent.';
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
        //exit;
    }

    // Auto-reply email
    $autoReplySubject = 'Thank you for contacting Dev Pickles';
    $autoReplyMessage = "Thank you for getting in touch with Dev Pickles! Your message has been received, and we appreciate your interest. Our team is currently reviewing your inquiry and will get back to you as soon as possible.";
    $autoReply = new PHPMailer;
    $autoReply->isSMTP();
    $autoReply->Host = 'mail.hoisolutions.com';
    $autoReply->Port = 587;
    $autoReply->SMTPDebug = 0;
    $autoReply->SMTPAuth = true;
    $autoReply->Username = 'noreply@hoisolutions.com';
    $autoReply->Password = 'w14(xmq{w53F';
    $autoReply->isHTML(true);
    $autoReply->From = 'noreply@hoisolutions.com';
    $autoReply->FromName = $fromName;
    $autoReply->AddAddress($_POST["email"]);  // Send auto-reply to the same person who submitted the form	
    $autoReply->Subject = $autoReplySubject;
    $autoReply->Body = $autoReplyMessage;
    $autoReply->send();
}

//SEND SLACK
function sendSlack($data)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://hooks.slack.com/services/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');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, ['payload' => $data]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);
    return ($server_output);
}

// GET CURRENT REQUEST
function current_url()
{
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    return $url;
}

function clean($string)
{
    $string = str_replace(' ', '-', $string);

    return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}
