<?php

$C = array();
$B = array();

// Additional information. It does not affect the work applications and website

$C['COMPANY_URL'] = "https://firesocial.amic.tech";

$B['APP_VENDOR'] = "firesocial.amic.tech";

// Data for the title of the website and copyright

$B['APP_NAME'] = "FireSocial";                   //
$B['APP_TITLE'] = "FireSocial";                  //
$B['APP_YEAR'] = "2021";                                // Year in footer

// Your domain (host) and url! See comments! Carefully!

$B['APP_HOST'] = "firesocial.amic.tech"; //edit to your domain, example (WARNING - without http:// and www): yourdomain.com
$B['APP_URL'] = "https://firesocial.amic.tech"; //edit to your domain url, example (WARNING - with http://): http://yourdomain.com

$B['API_KEY_SERVER'] = "";   //API KEY SERVER | to identify mobile application

// Your Database Information

$C['DB_HOST'] = ""; 	// use localhost for local work
$C['DB_USER'] = "";		// database user
$C['DB_PASS'] = "";	// database password						
$C['DB_NAME'] = "";		// databse name

/*

Default Realtime Database URL 
— PROJECT_ID-default-rtdb.firebaseio.com
 or
  PROJECT_ID-default-rtdb.REGION_CODE.firebasedatabase.app

You can find the URI for your Realtime Database at 
https://console.firebase.google.com/project/_/database. 

For recently created Firebase projects the default database URI usually has the format https://<project-id>-default-rtdb.firebaseio.com.

Databases in projects created before September 2020 had the default database URI 
https://<project-id>.firebaseio.com.


FIREBASE_DB_NAME = PROJECT_ID-default-rtdb 
OR 
FIREBASE_DB_NAME = PROJECT_ID-default-rtdb.REGION_CODE

*/
$C['FIREBASE_DB_NAME'] = "";       //Firebase databse name

/*
 Add the name of the Private Key with extension (.json) . See Documentation Section D-6                 
*/
$B['GOOGLE_SERVICE_ACCOUNT_JSON_FILE_NAME'] = ""; 
/* Private Key For Firebase Admin SDK 
* example : 
*$B['GOOGLE_SERVICE_ACCOUNT_JSON_FILE_NAME'] = "myproject-a07c7-firebase-adminsdk-mabpy-88d5993a07.json"; 
*/

$C['ERROR_SUCCESS'] = 0;

$C['ERROR_UNKNOWN'] = 100;

$C['USER_TYPE_0'] = "NORMAL";
$C['USER_TYPE_1'] = "VERIFIED";
$C['USER_TYPE_2'] = "ADMIN";
$C['USER_TYPE_3'] = "VIP";


$C['USER_GENDER_0'] = 0;
$C['USER_GENDER_1'] = 1;

$C['REPORT_REASON_1'] = "Outside the purpose of the application";
$C['REPORT_REASON_2'] = "Inappropriate";
$C['REPORT_REASON_3'] = "Indecent words";
$C['REPORT_REASON_4'] = "Disturbing";

// Translate this into your preferred language
$C['BODY_NOTIFICATION_REACTION'] = "You have a new reaction to your Feed.";

// This description will seen when you share link of one of the Feeds/Vip/Questions
// write short description of your app
$C['META_TAG_DESCRIPTION'] = "FireSocial is great a social Network. try it now";

// Add key words about your app idea (separated by , )
$C['META_TAG_KEYWORDS'] = "FireSocial , social , social Network , social Media";

$B['VIDEO_PATH'] = "video/"; //don`t edit this option
$B['VIDEO_IMAGE_PATH'] = "video_images/"; //don`t edit this option
$B['FEED_IMAGE_PATH'] = "feed_images/"; //don`t edit this option
$B['TEMP_PATH'] = "tmp/"; //don`t edit this option

$C['FILE_IMAGE_MAX_UPLOAD_SIZE'] = 3145728; //Max size for image file in bytes | For example 3mb = 3*1024*1024
$C['FILE_VIDEO_MAX_UPLOAD_SIZE'] = 14680064; //Max size for video file in bytes | For example 14mb = 14*1024*1024
