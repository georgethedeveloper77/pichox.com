<?php
// +------------------------------------------------------------------------+
// | @author georgethedeveloper
// | @author_url 1: http://www.playtubescript.com
// | @author_url 1: http://www.georgethedeveloper.com
// | @author_email: info@georgethedeveloper   
// +------------------------------------------------------------------------+
// | PlayTube - The Ultimate Video Sharing Platform
// | Copyright (c) 2017 PlayTube. All rights reserved.
// +------------------------------------------------------------------------+
require __DIR__ . '/../../assets/libs/PHPMailer/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer;