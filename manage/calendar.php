<?php

/**
 *    Zenbership
 *    http://www.zenbership.com/
 *    (c) 2012, Castlamp.
 *
 *    Purpose: User management page.
 *
 *    WARNING!
 *    DO NOT EDIT THIS FILE!
 *    To change the calendar's
 *    apperance, please edit the
 *    program templates from the
 *    "Integration" section of the
 *    admin control panel.
 *
 */
require "../admin/sd-system/config.php";
header('Location: ' . PP_URL . '/manage/');
exit;

/*
// Load the basics
require "../admin/sd-system/config.php";

// Check a user's session
$session = new session;
$ses = $session->check_session();

if ($ses['error'] == '1') {
    $session->reject('login',$ses['ecode']);
    exit;
} else {

    if (empty($_GET['year'])) {
        $year = date('Y');
    } else {
        $year = $_GET['year'];
    }
    if (empty($_GET['month'])) {
        $month = date('m');
    } else {
        $month = $_GET['month'];
    }


    $data['put_dates'] = array(
        '2013-02-24' => array(
            'Subscription Renewal'
        ),
        '2013-02-27' => array(
            'Event'
        ),
    );


    $calendar = new calendar($year,$month,$data,'user');

    pa($calendar->links);

    $changes = array(
        'calendar' => $calendar->output,
        'next_link' => $calendar->links['next_link'],
        'prev_link' => $calendar->links['prev_link'],
        'next_month' => $calendar->links['next_month'],
        'prev_month' => $calendar->links['prev_month'],
        'title' => $calendar->links['title'],
    );
    $wrapper = new template('manage_calendar',$changes,'1');
    echo $wrapper;
    exit;
}
*/

