<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['(:any)_management'] 		  	= $this->config->item('admin_folder')."/$1_management/index";
$route['(:any)_management/a'] 			= $this->config->item('admin_folder')."/$1_management/index/a";
$route['(:any)_management/e'] 			= $this->config->item('admin_folder')."/$1_management/index/e";
$route['(:any)_management/d/(:num)']            = $this->config->item('admin_folder')."/$1_management/index/d/(:num)";
$route['(:any)_management/(:any)'] 		= $this->config->item('admin_folder')."/$1_management/$2";

$route['adminlogin']				= $this->config->item('admin_folder')."/login";
$route['adminlogout']				= $this->config->item('admin_folder')."/logout";
$route['adminhome']				= $this->config->item('admin_folder')."/admin_home";

$route['forgotpassword']   			= $this->config->item('admin_folder')."/forgot_password";
$route['admin_change_password']   		= $this->config->item('admin_folder')."/change_password";

$route['(:any)-(:any)'] 		  	= "/$1_$2";
$route['(:any)-(:any)-(:any)']                  = "/$1_$2_$3";

$route['^category/(:num)/[a-zA-Z0-9-_/\-]+$'] 	= "/category/index/$1/$2";

$route['default_controller'] 			= "home";
$route['404_override'] 				= "errors";

$route['^ar/page/(.+)$']                             = "page/index/$1";
$route['^en/page/(.+)$']                             = "page/index/$1";
$route['^fr/page/(.+)$']                             = "page/index/$1";

$route['^ar/(.+)$']                             = "$1";
$route['^en/(.+)$']                             = "$1";
$route['^fr/(.+)$']                             = "$1";

$route['^ar$']                                  = $route['default_controller'];
$route['^en$']                                  = $route['default_controller'];
$route['^fr$']                                  = $route['default_controller'];

$page = $_SERVER['REQUEST_URI'];
if (trim($page) == "/index.php") {
    header("Location: ".HOST_URL."/en");
    exit;
}

/* End of file routes.php */
/* Location: ./application/config/routes.php */
