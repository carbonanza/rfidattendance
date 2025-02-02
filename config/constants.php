<?php
// config/constants.php

// Site Information
define('SITE_NAME', 'RFID Attendance System');
define('SITE_VERSION', '1.0.0');
define('TIMEZONE', 'Asia/Manila');
date_default_timezone_set(TIMEZONE);

// Path Constants
define('BASE_PATH', dirname(__DIR__));
define('CONFIG_PATH', BASE_PATH . '/config');
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('ASSETS_PATH', BASE_PATH . '/assets');

// URL Constants
define('BASE_URL', 'http://localhost/rfidattendance');
define('ADMIN_URL', BASE_URL . '/admin');
define('USER_URL', BASE_URL . '/user');
define('AUTH_URL', BASE_URL . '/auth');
define('ASSETS_URL', BASE_URL . '/assets');

// Database Constants
define('DB_HOST', 'localhost');
define('DB_NAME', 'rfidattendance');
define('DB_USER', 'root');
define('DB_PASS', '');

// Session Constants
define('SESSION_NAME', 'rfidattendance');
define('SESSION_LIFETIME', 3600);
ini_set('session.gc_maxlifetime', SESSION_LIFETIME);
session_set_cookie_params(SESSION_LIFETIME);

// Device Constants
define('VERIFICATION_TIMEOUT', 30);
define('DISPLAY_TIMEOUT', 20); // 20 seconds for attendance display
define('RFID_TIMEOUT', 5); // 5 seconds between RFID scans

// LCD Messages
define('LCD_MESSAGES', [
    'READY' => 'Please scan your ID',
    'RFID_SUCCESS' => 'RFID Verified',
    'RFID_FAILED' => 'Invalid RFID',
    'RFID_REGISTERED' => 'RFID Registered',
    'RFID_EXISTS' => 'RFID Already Exists',
    'ON_TIME' => 'Welcome! On Time',
    'LATE' => 'You are Late',
    'TIME_OUT' => 'Goodbye! Time Out',
    'ERROR' => 'System Error'
]);

// Buzzer Tones
define('BUZZER_TONES', [
    'SUCCESS' => 'success_tone', // Short double beep
    'ERROR' => 'error_tone',     // Long single beep
    'LATE' => 'late_tone',       // Triple beep
    'WAIT' => 'wait_tone'        // Short single beep
]);