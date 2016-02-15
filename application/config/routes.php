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

$route['default_controller'] = "home/index";
$route['404_override'] = 'home/notfound';

$route['haanhdon'] = "admin/index";
$route['gioi-thieu'] = "home/intro";
$route['khoa-hoc'] = "home/education";
$route['khoa-hoc/([a-zA-Z0-9-_]+)/(:num)'] = "home/subjects/index";
$route['lich-hoc'] = "home/times/index";
$route['lich-hoc/([a-zA-Z0-9-_]+)'] = "home/times/view/(:num)";
$route['cong-nghe'] = "home/technology";
$route['cong-nghe/(:num)'] = "home/technology/index/(:num)";
$route['cong-nghe/([a-zA-Z0-9-_]+)-(:num)'] = "home/technology/category";
$route['cong-nghe/([a-zA-Z0-9-_]+)-(:num)/(:num)'] = "home/technology/category/(:num)";
$route['lien-he'] = "home/contact";
$route['hoc-php'] = "home/content/index";
$route['hoc-php/(:num)'] = "home/content/index/(:num)";
$route['hoc-php/([a-zA-Z0-9-_]+)-(:num)'] = "home/content/view/(:num)";
$route['danh-gia-cua-hoc-vien'] = "home/customer/index";
$route['danh-gia-cua-hoc-vien/(:num)'] = "home/customer/index/(:num)";
$route['hoi-dap'] = "home/ask/index";
$route['hoi-dap/(:num)'] = "home/ask/index/(:num)";
$route['hoi-dap/([a-zA-Z0-9-_]+)-(:num)'] = "home/ask/view/(:num)";
$route['hoi-dap/([a-zA-Z0-9-_]+)'] = "home/ask/askcate";
$route['hoi-dap/([a-zA-Z0-9-_]+)/(:num)'] = "home/ask/askcate/(:num)";
$route['([a-zA-Z0-9-_]+)'] = "home/category/index";
$route['([a-zA-Z0-9-_]+)/(:num)'] = "home/category/index/(:num)/";
$route['([a-zA-Z0-9-_]+)/([a-zA-Z0-9-_]+)-(:num)'] = "home/posts/view/(:num)";
$route['tin-cong-nghe/([a-zA-Z0-9-_]+)/(:num)'] = "home/technology/view/(:num)";
$route['viet-danh-gia'] = "home/customer/add";
$route['tags/([a-zA-Z0-9-_]+)'] = "home/tags/index";

$route['gui-cau-hoi'] = "home/ask/send";
$route['hoi-dap/thanh-cong'] = "home/ask/complete";
$route['dang-nhap'] = "home/verify/index";
$route['dang-ky'] = "home/user/register";
$route['dang-ky-thanh-cong'] = "home/user/complete";
$route['kick-hoat-tai-khoan'] = "home/verify/active";
$route['quen-mat-khau'] = "home/user/forgot";
$route['doi-mat-khau'] = "home/user/changepass";
$route['logout'] = "home/verify/logout";

/* End of file routes.php */
/* Location: ./application/config/routes.php */