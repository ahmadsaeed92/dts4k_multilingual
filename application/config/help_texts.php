<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

$config['help_texts'] = array();

$config['help_texts']['overview'] = "DTS4K is a drive-thru statistics reporting application, developed and Marketed TechKnow Inc. The solution is deployed on timer devices. It is a tool for store managers and designated staff to run various reports to assist in reviewing performance on site.

It has reports ranging from individual car details to averages at different points in the drive-thru for various time periods. It also enables the users to compare the performances of any two days.

Following are its software requirements.

HTTP Server
PHP 5.5 or higher.
PHP-SQLITE3 extension library.";

$config['help_texts']['general'] = "<strong>Terms</strong>

Following are some terms used in this Help, with corresponding synonyms which you may be more familiar with in your Organization. 

Cash Window	Pay Window, Payment Window
Pickup Window	Serve Window, Service Window
Menu Window	Order Window

<strong>Login</strong>

Logins are centrally  controlled and Password will be provided by Techknow Team. On successful login user will be redirected to cars details report.

<strong>Logout</strong>

There is a logout link on the top right corner of every page so user can logout of the application from anywhere within the application. After logout the user will be redirected to login page. It is advised to Log Off the session once we are done with viewing reports.

Additionally the app has a built Auto Log of feature which logs out the user after a designated interval of inactivity. Currently this value is set at 10 minutes.

<strong>Menu Toggle</strong>

There is toggle button on menu which upon click hide and show the left menu alternatively.";

$config['help_texts']['cars_details'] = "Cars Details Report enables user to analyze how each car clocks its time at various points in the drive-thru.

User will select a start Date and Time from the Calendar and then he/she will select the End Date and Time from the next Calendar. The date range selected by the user should be a positive time-interval for which the report is to be generated. After selecting the Date Range user will need to click the “Generate Report Button” which will display the requested data.

In Summary it tells at what time a car arrived at the drive-thru and how much time it has spent on a window (Order, Pay, Serve), and time spent while waiting in queues.

The report comprises of the following columns.

1. Sr #	Serial No of the car in the report.
2. Arrival Time	Arrival Time of the car detected at the drive-thru.
3. Car In Lane	The Lane in which Car is present. Possible values A, B or Blank
4. Greet	Time taken to greet the car.
5. Menu         Time taken for the order.
6. Queue1	Time spent in queue between order point and cash point.
7. Cashier	Time spent on cash/payment window.
8. Queue2	Time spent in queue between cash point and serve point.
9. Pickup Window    Time spent on serve window.
10. Total	Total time spent by the car in drive-thru.";

$config['help_texts']['hourly_report'] = "Hourly Report enables user to analyze average and total time spent by cars during an hour selected by the user to give comparison for various points in the drive-thru.

User will need to select the Date and Hour from the calendar and click on “Generate Report Button” to run the report.
	
This report has 5 Groups each corresponds to an event in the drive thru i.e. Greet, Menu, Cash, Pickup and Total. Each section has its average time, total time and total cars. Average time is in MM:SS (Minutes and Seconds) format and Total Time is in HH:MM (Hour, Minutes) format. Within each group we also display the top 5 cars in terms of least time spent at the corresponding point, showing the Car #, Date and Time, and Time in seconds.

The report has another section called Goal Achieved. It has three sub-sections: Green Yellow and Red. Each shows percentage and number of cars lying in the subsequent section. User also have the option to change target value used for each goal section. You will need to re-generate the report to show results based on the revised targets.";

$config['help_texts']['daypart_report'] = "Day part Report enables user to analyze average and total time spent by cars during a selected “Day part”. This report will also give average for various points in the drive-thru.

User will need to select the Date from the calendar and Day part from a dropdown and then click on Generate Report Button to run the report.

This report has 5 Groups each corresponds to an event in the drive thru i.e. Greet, Menu, Cash, Pickup and Total. Each section has its average time, total time and total cars. Average time is in MM:SS (Minutes and Seconds) format and Total Time is in HH:MM (Hour, Minutes) format. Within each group we also display the top 5 cars in terms of least time spent at the corresponding point, showing the Car #, Date and Time, and Time in seconds.

The report has another section called Goal Achieved. It has three sub-sections: Green Yellow and Red. Each shows percentage and number of cars lying in the subsequent section. User also have the option to change target value used for each goal section. You will need to re-generate the report to show results based on the revised targets.";

$config['help_texts']['daily_report'] = "Daily Report enables user to analyze average and total time spent by cars during a selected Day. This report will also give average for various points in the drive-thru.

User will select the Date from the calendar and then need to click on Generate Report Button to run  the report.

This report has 5 Groups each corresponds to an event in the drive thru i.e. Greet, Menu, Cash, Pickup and Total. Each section has its average time, total time and total cars. Average time is in MM:SS (Minutes and Seconds) format and Total Time is in HH:MM (Hour, Minutes) format. Within each group we also display the top 5 cars in terms of least time spent at the corresponding point, showing the Car #, Date and Time, and Time in seconds.

The report has another section called Goal Achieved. It has three sub-sections: Green Yellow and Red. Each shows percentage and number of cars lying in the subsequent section. User also have the option to change target value used for each goal section. You will need to re-generate the report to show results based on the revised targets.";

$config['help_texts']['weekly_report'] = "Weekly Report enables user to analyze average and total time spent by cars during a week selected by the user at various points in the drive-thru.

User will select a Date representing start of the week from the calendar and then need to click on Generate Report Button to run the report. System will generate the report for 7 days (week) from the date selected by the user.

This report has 5 Groups each corresponds to an event in the drive thru i.e. Greet, Menu, Cash, Pickup and Total. Each section has its average time, total time and total cars. Average time is in MM:SS (Minutes and Seconds) format and Total Time is in HH:MM (Hour, Minutes) format. Within each group we also display the top 5 cars in terms of least time spent at the corresponding point, showing the Car #, Date and Time, and Time in seconds.

The report has another section called Goal Achieved. It has three sub-sections: Green Yellow and Red. Each shows percentage and number of cars lying in the subsequent section. User also have the option to change target value used for each goal section. You will need to re-generate the report to show results based on the revised targets.";

$config['help_texts']['monthly_report'] = "Monthly Report enables user to analyze average and total time spent by cars during a month selected by the user at various points in the drive-thru.

User will need to select the month and year from the dropdown and then click on Generate Report Button to run the report.

This report has 5 Groups each corresponds to an event in the drive thru i.e. Greet, Menu, Cash, Pickup and Total. Each section has its average time, total time and total cars. Average time is in MM:SS (Minutes and Seconds) format and Total Time is in HH:MM (Hour, Minutes) format. Within each group we also display the top 5 cars in terms of least time spent at the corresponding point, showing the Car #, Date and Time, and Time in seconds.

The report has another section called Goal Achieved. It has three sub-sections: Green Yellow and Red. Each shows percentage and number of cars lying in the subsequent section. User also have the option to change target value used for each goal section. You will need to re-generate the report to show results based on the revised targets.";

$config['help_texts']['yearly_report'] = "Yearly Report enables user to analyze average and total time spent by cars during a year selected by the user at various points in the drive-thru.

This report has 5 Groups each corresponds to an event in the drive thru i.e. Greet, Menu, Cash, Pickup and Total. Each section has its average time, total time and total cars. Average time is in MM:SS (Minutes and Seconds) format and Total Time is in HH:MM (Hour, Minutes) format. Within each group we also display the top 5 cars in terms of least time spent at the corresponding point, showing the Car #, Date and Time, and Time in seconds.

The report has another section called Goal Achieved. It has three sub-sections: Green Yellow and Red. Each shows percentage and number of cars lying in the subsequent section. User also have the option to change target value used for each goal section. You will need to re-generate the report to show results based on the revised targets.";

$config['help_texts']['custom_report'] = "Custom Report enables user to analyze average and total time spent by cars during a DateTime Range selected by the user at various points in the drive-thru.

This report has 5 Groups each corresponds to an event in the drive thru i.e. Greet, Menu, Cash, Pickup and Total. Each section has its average time, total time and total cars. Average time is in MM:SS (Minutes and Seconds) format and Total Time is in HH:MM (Hour, Minutes) format. Within each group we also display the top 5 cars in terms of least time spent at the corresponding point, showing the Car #, Date and Time, and Time in seconds.

The report has another section called Goal Achieved. It has three sub-sections: Green Yellow and Red. Each shows percentage and number of cars lying in the subsequent section. User also have the option to change target value used for each goal section. You will need to re-generate the report to show results based on the revised targets.";

$config['help_texts']['daywise_comparison_report'] = "Comparison Report enables user to compare the average time spent at various points of any two days selected by himself.

User will select Day 1 from the calendar and select Day 2 from the next Calendar and will need to click Generate Report Button.

Report has following columns to be compared for two days.

Date: 	Date/s selected by user.
Greet: 	Average Time Taken for Greeting the cars.
Menu: 	Average Time for taking the orders from cars.
Cash: 	Average time spent on cash window.
PUW: 	Average time spent on service window.
Total: 	Average Total time spent in drive-thru.
Cars: 	Total no of Cars.
Pull-ins: Cars that didn't appear at Order Window
Pull-outs: Cars which are drive-offs";

$config['help_texts']['hourly_comparison_report'] = "Comparison Report enables user to compare the average time spent at various points on hourly basis of any two days selected by himself.

User will select Day 1 from the calendar and select Day 2 from the next Calendar and will need to click Generate Report Button.

Report has following columns to be compared for two days.

Date: 	Date/s selected by user.
Greet: 	Average Time Taken for Greeting the cars.
Menu: 	Average Time for taking the orders from cars.
Cash: 	Average time spent on cash window.
PUW: 	Average time spent on service window.
Total: 	Average Total time spent in drive-thru.
Cars: 	Total no of Cars.
Pull-ins: Cars that didn't appear at Order Window
Pull-outs: Cars which are drive-offs";

$config['help_texts']['daypart_comparison_report'] = "Comparison Report enables user to compare the average time spent at various points on daypart basis of any two days selected by himself.

User will select Day 1 from the calendar and select Day 2 from the next Calendar and will need to click Generate Report Button.

Report has following columns to be compared for two days.

Date: 	Date/s selected by user.
Greet: 	Average Time Taken for Greeting the cars.
Menu: 	Average Time for taking the orders from cars.
Cash: 	Average time spent on cash window.
PUW: 	Average time spent on service window.
Total: 	Average Total time spent in drive-thru.
Cars: 	Total no of Cars.
Pull-ins: Cars that didn't appear at Order Window
Pull-outs: Cars which are drive-offs";

$config['help_texts']['settings'] = "On settings page user can view the timer settings for the following properties
        Timer Version
        Target Goals
        Dayparts
        Store Hours";

