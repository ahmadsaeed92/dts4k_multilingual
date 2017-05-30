<?php

defined('BASEPATH') OR exit('No direct script access allowed');

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
  |	https://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There are three reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router which controller/method to use if those
  | provided in the URL cannot be matched to a valid route.
  |
  |	$route['translate_uri_dashes'] = FALSE;
  |
  | This is not exactly a route, but allows you to automatically route
  | controller and method names that contain dashes. '-' isn't a valid
  | class or method name character, so it requires translation.
  | When you set this option to TRUE, it will replace ALL dashes in the
  | controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// Datetime Wise Reports
// Hour Report
$route['hourly'] = 'datetime_enterprise_report';
$route['hourly/generate_report'] = 'datetime_enterprise_report/generate_report';

// Daypart Report
$route['daypart'] = 'datetime_enterprise_report';
$route['daypart/generate_report'] = 'datetime_enterprise_report/generate_report';

// Day Report
$route['daily'] = 'datetime_enterprise_report';
$route['daily/generate_report'] = 'datetime_enterprise_report/generate_report';

// Week Report
$route['weekly'] = 'datetime_enterprise_report';
$route['weekly/generate_report'] = 'datetime_enterprise_report/generate_report';

// Month Report
$route['monthly'] = 'datetime_enterprise_report';
$route['monthly/generate_report'] = 'datetime_enterprise_report/generate_report';

// Year Report
$route['yearly'] = 'datetime_enterprise_report';
$route['yearly/generate_report'] = 'datetime_enterprise_report/generate_report';

// Custom Report
$route['custom'] = 'datetime_enterprise_report';
$route['custom/generate_report'] = 'datetime_enterprise_report/generate_report';

// END
// Comparison Reports
// Hour Comparsion Report
$route['hourly_comparison'] = 'comparison_reports';
$route['hourly_comparison/generate_report'] = 'comparison_reports/generate_report';

// Daypart Comparsion Report
$route['daypart_comparison'] = 'comparison_reports';
$route['daypart_comparison/generate_report'] = 'comparison_reports/generate_report';

// Day Comparsion Report
$route['daywise_comparison'] = 'comparison_reports';
$route['daywise_comparison/generate_report'] = 'comparison_reports/generate_report';

$route['logout'] = 'login/logout';
$route['switch_language'] = 'login/switch_language';
