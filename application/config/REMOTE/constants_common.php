<?php
/*
|==========================================================================
| 						Website Settings
|==========================================================================
*/
define("SITE_NAME", "Avenir Event Management");
define("SITE_URL", "http://www.avenirevents.com/");
define("SITE_URL2", "www.avenirevents.com");
define("INFO_EMAIL", "avenir.website@gmail.com");
define("ADMIN_VERSION", "version 5.0.1");
define("NO_REPLY", "avenirevents.com");

define("EMAIL_SITE_NAME", "Avenir Event Management");
/*
|--------------------------------------------------------------------------
| 	General Paths
|--------------------------------------------------------------------------
*/
define("HTTP", "http://");
define("HTTP_HOST", $_SERVER["HTTP_HOST"]);
define("ROOT_PATH", $_SERVER['DOCUMENT_ROOT'] . '/');
define("ADMIN_IMG_FOLDER", "administrator");
define("ADMIN_CSS_FOLDER", "administrator");
define("ADMIN_VIEW_FOLDER", "administrator");

define("HOST_URL", HTTP . HTTP_HOST);
define("ADMIN_IMG_PATH", HTTP . HTTP_HOST . "/images/" . ADMIN_IMG_FOLDER);
define("ADMIN_CSS_PATH", HTTP . HTTP_HOST . "/css/" . ADMIN_CSS_FOLDER);
define("JS_PATH", HTTP . HTTP_HOST . "/js");
define("PLUGINS_PATH", HTTP . HTTP_HOST . "/plugins");
define("MISC_PATH", ROOT_PATH . "/misc");
define("CLASSES_PATH", ROOT_PATH . "/classes");
define("CLASSES_HOST_PATH", HTTP . HTTP_HOST . "/classes");
define("ADMIN_VIEW_PATH", ROOT_PATH . "/application/views/" . ADMIN_VIEW_FOLDER);

define("IMG_UP_PATH", ROOT_PATH . "/images/");
define("IMG_SHOW_PATH", HTTP . HTTP_HOST . "/images/");

define('GENERAL_IMAGE_UP_PATH', ROOT_PATH . '/images/general/');
define('GENERAL_THUMB_UP_PATH', ROOT_PATH . '/images/general/thumbs/');
define('GENERAL_IMAGE_PATH', HTTP . HTTP_HOST . '/images/general/');
define('GENERAL_THUMB_PATH', HTTP . HTTP_HOST . '/images/general/thumbs/');


define("CSS_PATH", HTTP . HTTP_HOST . "/css");
define("IMG_PATH", HTTP . HTTP_HOST . "/images");
define("INCLUDE_PATH", ROOT_PATH . "/application/views/include");
define('PDF_PATH', HTTP . HTTP_HOST . '/profile/');
define('MODEL_PROFILE', '/model/profile');

/*
|--------------------------------------------------------------------------
| 	Tables
|--------------------------------------------------------------------------
*/
define("TBL_ADMIN_RIGHTS", DBASE_MAIN . ".tbl_admin_rights");
define("TBL_ADMIN_MODULES", DBASE_MAIN . ".tbl_admin_modules");
define("TBL_ADMIN_LOGS", DBASE_MAIN . ".tbl_admin_logs");
define("TBL_ADMIN_SETTINGS", DBASE_MAIN . ".tbl_admin_settings");
define("TBL_HITS", DBASE_MAIN . ".tbl_hits");

define("VIEW_PATH", ROOT_PATH . "/application/views");

define("TBL_COUNTRY", DBASE_MAIN . ".tbl_country");
define("TBL_CITY", DBASE_MAIN . ".tbl_city");
define("TBL_CATEGORY", DBASE_MAIN . ".tbl_category");

define("TBL_TIMINGS", DBASE_MAIN . ".tbl_timings");
define('TBL_SUBSRIBERS', DBASE_MAIN . ".tbl_subscribers");
define('TBL_BRANCHES', DBASE_MAIN . ".tbl_branches");
/*
|--------------------------------------------------------------------------
| 						Admin Users Management
|--------------------------------------------------------------------------
*/
define("TBL_ADMIN_USERS", DBASE_MAIN . ".tbl_admin_users");
define("ADMIN_IMAGE_UP_PATH", ROOT_PATH . "/images/" . ADMIN_IMG_FOLDER . "/users/");
define("ADMIN_THUMB_UP_PATH", ROOT_PATH . "/images/" . ADMIN_IMG_FOLDER . "/users/thumbs/");
define("ADMIN_IMAGE_PATH", HTTP . HTTP_HOST . "/images/" . ADMIN_IMG_FOLDER . "/users/");
define("ADMIN_THUMB_PATH", HTTP . HTTP_HOST . "/images/" . ADMIN_IMG_FOLDER . "/users/thumbs/");
/*
|--------------------------------------------------------------------------
| 						Contents Management
|--------------------------------------------------------------------------
*/
define("TBL_CONTENTS", DBASE_MAIN . ".tbl_contents");
define("CONTENTS_IMAGE_UP_PATH", ROOT_PATH . "/images/contents/");
define("CONTENTS_THUMB_UP_PATH", ROOT_PATH . "/images/contents/thumbs/");
define("CONTENTS_IMAGE_PATH", HTTP . HTTP_HOST . "/images/contents/");
define("CONTENTS_THUMB_PATH", HTTP . HTTP_HOST . "/images/contents/thumbs/");
define('TBL_CATALOG', DBASE_MAIN . '.tbl_catalog');
/*
|--------------------------------------------------------------------------
| 						Services Management
|--------------------------------------------------------------------------
*/
define("TBL_SERVICES", DBASE_MAIN . '.tbl_services');
define('SERVICES_IMAGE_UP_PATH', ROOT_PATH . '/images/services/');
define('SERVICES_THUMB_UP_PATH', ROOT_PATH . '/images/services/thumbs/');
define('SERVICES_IMAGE_PATH', HTTP . HTTP_HOST . '/images/services/');
define('SERVICES_THUMB_PATH', HTTP . HTTP_HOST . '/images/services/thumbs/');
/*
|--------------------------------------------------------------------------
| 						Category Management
|--------------------------------------------------------------------------
*/
//define("TBL_CATEGORY",  				DBASE_MAIN.'.tbl_category');
define('CATEGORY_IMAGE_UP_PATH', ROOT_PATH . '/images/category/');
define('CATEGORY_THUMB_UP_PATH', ROOT_PATH . '/images/category/thumbs/');
define('CATEGORY_IMAGE_PATH', HTTP . HTTP_HOST . '/images/category/');
define('CATEGORY_THUMB_PATH', HTTP . HTTP_HOST . '/images/category/thumbs/');
/*
|--------------------------------------------------------------------------
| 						Doctors Management
|--------------------------------------------------------------------------
*/
define("TBL_PRODUCTS", DBASE_MAIN . ".tbl_products");
define("TBL_DEPARTMENTS", DBASE_MAIN . ".tbl_departments");
define("DOCTORS_IMAGE_UP_PATH", ROOT_PATH . "/images/doctors/");
define("DOCTORS_THUMB_UP_PATH", ROOT_PATH . "/images/doctors/thumbs/");
define("DOCTORS_IMAGE_PATH", HTTP . HTTP_HOST . "/images/doctors/");
define("DOCTORS_THUMB_PATH", HTTP . HTTP_HOST . "/images/doctors/thumbs/");
/*
|--------------------------------------------------------------------------
| 						Gallery Management
|--------------------------------------------------------------------------
*/
define("TBL_GALLERY", DBASE_MAIN . '.tbl_gallery');
define("TBL_GALLERY_IMAGES", DBASE_MAIN . '.tbl_gallery_images');
define("TBL_GALLERY_VIDEOS", DBASE_MAIN . '.tbl_gallery_videos');
define('GALLERY_IMAGE_UP_PATH', ROOT_PATH . '/images/gallery/');
define('GALLERY_THUMB_UP_PATH', ROOT_PATH . '/images/gallery/thumbs/');
define('GALLERY_IMAGE_PATH', HTTP . HTTP_HOST . '/images/gallery/');
define('GALLERY_THUMB_PATH', HTTP . HTTP_HOST . '/images/gallery/thumbs/');

//For E-catalog Images
define('CATALOG_IMAGE_UP_PATH', ROOT_PATH . '/images/catalog/');
define('CATALOG_THUMB_UP_PATH', ROOT_PATH . '/images/catalog/thumbs/');
define('CATALOG_IMAGE_PATH', HTTP . HTTP_HOST . '/images/catalog/');
define('CATALOG_THUMB_PATH', HTTP . HTTP_HOST . '/images/catalog/thumbs/');
/*
|--------------------------------------------------------------------------
| 						Category Management
|--------------------------------------------------------------------------
*/
define("TBL_TESTIMONIALS", DBASE_MAIN . '.tbl_testimonials');
define('TESTIMONIAL_IMAGE_UP_PATH', ROOT_PATH . '/images/testimonial/');
define('TESTIMONIAL_THUMB_UP_PATH', ROOT_PATH . '/images/testimonial/thumbs/');
define('TESTIMONIAL_IMAGE_PATH', HTTP . HTTP_HOST . '/images/testimonial/');
define('TESTIMONIAL_THUMB_PATH', HTTP . HTTP_HOST . '/images/testimonial/thumbs/');

/*
|--------------------------------------------------------------------------
| 						Banners Management
|--------------------------------------------------------------------------
*/
define("TBL_BANNERS", DBASE_MAIN . ".tbl_banners");
define("BANNERS_IMAGE_UP_PATH", ROOT_PATH . "/images/banners/");
define("BANNERS_THUMB_UP_PATH", ROOT_PATH . "/images/banners/thumbs/");
define("BANNERS_IMAGE_PATH", HTTP . HTTP_HOST . "/images/banners/");
define("BANNERS_THUMB_PATH", HTTP . HTTP_HOST . "/images/banners/thumbs/");
/*
|--------------------------------------------------------------------------
| 						News Management
|--------------------------------------------------------------------------
*/
define("TBL_NEWS", DBASE_MAIN . ".tbl_news");
define("NEWS_IMAGE_UP_PATH", ROOT_PATH . "/images/news/");
define("NEWS_THUMB_UP_PATH", ROOT_PATH . "/images/news/thumbs/");
define("NEWS_IMAGE_PATH", HTTP . HTTP_HOST . "/images/news/");
define("NEWS_THUMB_PATH", HTTP . HTTP_HOST . "/images/news/thumbs/");

/*
|--------------------------------------------------------------------------
| 						Models Management
|--------------------------------------------------------------------------
*/
define("TBL_MODELS", DBASE_MAIN . ".tbl_models");
define("MODELS_IMAGE_UP_PATH", ROOT_PATH . "/images/models/");
define("MODELS_THUMB_UP_PATH", ROOT_PATH . "/images/models/thumbs/");
define("MODELS_IMAGE_PATH", HTTP . HTTP_HOST . "/images/models/");
define("MODELS_THUMB_PATH", HTTP . HTTP_HOST . "/images/models/thumbs/");
define("TBL_MODEL_IMAGES", DBASE_MAIN . ".tbl_models_images");

/*
|--------------------------------------------------------------------------
| 						Clients Management
|--------------------------------------------------------------------------
*/
define("TBL_CLIENTS", DBASE_MAIN . ".tbl_clients");
define("CLIENT_IMAGE_UP_PATH", ROOT_PATH . "/images/clients/");
define("CLIENT_THUMB_UP_PATH", ROOT_PATH . "/images/clients/thumbs/");
define("CLIENT_IMAGE_PATH", HTTP . HTTP_HOST . "/images/clients/");
define("CLIENT_THUMB_PATH", HTTP . HTTP_HOST . "/images/clients/thumbs/");


/*
|--------------------------------------------------------------------------
| 						Reviews Management
|--------------------------------------------------------------------------
*/
define("TBL_REVIEWS", DBASE_MAIN . ".tbl_reviews");
define("REVIEWS_IMAGE_UP_PATH", ROOT_PATH . "/images/reviews/");
define("REVIEWS_THUMB_UP_PATH", ROOT_PATH . "/images/reviews/thumbs/");
define("REVIEWS_IMAGE_PATH", HTTP . HTTP_HOST . "/images/reviews/");
define("REVIEWS_THUMB_PATH", HTTP . HTTP_HOST . "/images/reviews/thumbs/");


define("MODELS_CV_UP_PATH", ROOT_PATH . "/images/cv/");
define("MODELS_CV_PATH", HTTP . HTTP_HOST . "/images/cv/");

define("TBL_LANGUAGE", DBASE_MAIN . '.tbl_languages');
define("TBL_LANGUAGE_MODELS", DBASE_MAIN . '.tbl_model_language');

/*
|--------------------------------------------------------------------------
| 						Company Management
|--------------------------------------------------------------------------
*/
define("TBL_COMPANY", DBASE_MAIN . '.tbl_company');
define("TBL_COMPANY_LANGUAGE" . DBASE_MAIN . ".tbl_company_language");
define("COMPANY_IMAGE_UP_PATH", ROOT_PATH . "/images/company/");
define("COMPANY_THUMB_UP_PATH", ROOT_PATH . "/images/company/thumbs/");
define("COMPANY_IMAGE_PATH", HTTP . HTTP_HOST . "/images/company/");
define("COMPANY_THUMB_PATH", HTTP . HTTP_HOST . "/images/company/thumbs/");
define("TBL_COMPANY_IMAGES", DBASE_MAIN . ".tbl_company_images");

define("COMPANY_CV_UP_PATH", ROOT_PATH . "/images/company/cv/");
define("COMPANY_CV_PATH", HTTP . HTTP_HOST . "/images/company/cv/");


/*
|--------------------------------------------------------------------------
| 						Stylist Management
|--------------------------------------------------------------------------
*/
define("TBL_STYLIST", DBASE_MAIN . '.tbl_stylist');
define("TBL_STYLIST_LANGUAGE" . DBASE_MAIN . ".tbl_stylist_language");
define("STYLIST_IMAGE_UP_PATH", ROOT_PATH . "/images/stylist/");
define("STYLIST_THUMB_UP_PATH", ROOT_PATH . "/images/stylist/thumbs/");
define("STYLIST_IMAGE_PATH", HTTP . HTTP_HOST . "/images/stylist/");
define("STYLIST_THUMB_PATH", HTTP . HTTP_HOST . "/images/stylist/thumbs/");
define("TBL_STYLIST_IMAGES", DBASE_MAIN . ".tbl_stylist_images");

define("STYLIST_CV_UP_PATH", ROOT_PATH . "/images/stylist/cv/");
define("STYLIST_CV_PATH", HTTP . HTTP_HOST . "/images/stylist/cv/");


/*
|--------------------------------------------------------------------------
| 						Hostess Management
|--------------------------------------------------------------------------
*/
define("TBL_HOSTESS", DBASE_MAIN . '.tbl_hostess');
define("TBL_HOSTESS_LANGUAGE" . DBASE_MAIN . ".tbl_hostess_language");
define("TBL_HOSTESS_IMAGES", DBASE_MAIN . ".tbl_hostess_images");

define("HOSTESS_IMAGE_UP_PATH", ROOT_PATH . "/images/hostess/");
define("HOSTESS_THUMB_UP_PATH", ROOT_PATH . "/images/hostess/thumbs/");
define("HOSTESS_IMAGE_PATH", HTTP . HTTP_HOST . "/images/hostess/");
define("HOSTESS_THUMB_PATH", HTTP . HTTP_HOST . "/images/hostess/thumbs/");

define("HOSTESS_CV_UP_PATH", ROOT_PATH . "/images/hostess/cv/");
define("HOSTESS_CV_PATH", HTTP . HTTP_HOST . "/images/hostess/cv/");

/*
|--------------------------------------------------------------------------
| 						Photographer Management
|--------------------------------------------------------------------------
*/
define("TBL_PHOTOGRAPHER", DBASE_MAIN . '.tbl_photographer');
define("TBL_PHOTOGRAPHER_LANGUAGE" . DBASE_MAIN . ".tbl_photographer_language");
define("TBL_PHOTOGRAPHER_IMAGES", DBASE_MAIN . ".tbl_photographer_images");

define("PHOTOGRAPHER_IMAGE_UP_PATH", ROOT_PATH . "/images/photographer/");
define("PHOTOGRAPHER_THUMB_UP_PATH", ROOT_PATH . "/images/photographer/thumbs/");
define("PHOTOGRAPHER_IMAGE_PATH", HTTP . HTTP_HOST . "/images/photographer/");
define("PHOTOGRAPHER_THUMB_PATH", HTTP . HTTP_HOST . "/images/photographer/thumbs/");

define("PHOTOGRAPHER_CV_UP_PATH", ROOT_PATH . "/images/photographer/cv/");
define("PHOTOGRAPHER_CV_PATH", HTTP . HTTP_HOST . "/images/photographer/cv/");


/*
|--------------------------------------------------------------------------
| 						Entertainer Management
|--------------------------------------------------------------------------
*/
define("TBL_ENTERTAINER", DBASE_MAIN . '.tbl_entertainer');
define("TBL_ENTERTAINER_LANGUAGE" . DBASE_MAIN . ".tbl_entertainer_language");
define("TBL_ENTERTAINER_IMAGES", DBASE_MAIN . ".tbl_entertainer_images");

define("ENTERTAINER_IMAGE_UP_PATH", ROOT_PATH . "/images/entertainer/");
define("ENTERTAINER_THUMB_UP_PATH", ROOT_PATH . "/images/entertainer/thumbs/");
define("ENTERTAINER_IMAGE_PATH", HTTP . HTTP_HOST . "/images/entertainer/");
define("ENTERTAINER_THUMB_PATH", HTTP . HTTP_HOST . "/images/entertainer/thumbs/");

define("ENTERTAINER_CV_UP_PATH", ROOT_PATH . "/images/entertainer/cv/");
define("ENTERTAINER_CV_PATH", HTTP . HTTP_HOST . "/images/entertainer/cv/");

?>
