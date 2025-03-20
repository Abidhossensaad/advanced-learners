<?php
$routes = [
    '/' => 'HomeController@index',
    '/courses' => 'CourseController@showCourses',
    '/student/dashboard' => 'StudentController@dashboard',
    '/admin/dashboard' => 'AdminController@dashboard',
    '/login' => 'AuthController@login',
];
?>