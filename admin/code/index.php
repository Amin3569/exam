<?php

require_once('../config/tce_config.php');
$pagelevel = K_AUTH_INDEX;
require_once('../../shared/code/tce_authorization.php');
require_once('tce_page_header.php');

echo '<div style="direction:ltr;text-align:left;border:1px solid black; padding:5px; margin:10px; background-color:#DDEEFF; color:#000000; width:95%; margin-left:auto; margin-right:auto; font-weight:bold; font-size:100%;"><center>SMART ONLINE EXAM MAKER AND CHECKER PLATFORM</center></div>'.K_NEWLINE;


// Display test limits (if any)

$limits = '';
if (K_REMAINING_TESTS !== false) {
    // count
    $limits .= '<tr';
    if (K_REMAINING_TESTS <= 0) {
        $limits .= ' style="text-align:right;background-color:#FFCCCC;" title="'.$l['w_over_limit'].'"';
    } else {
        $limits .= ' style="text-align:right;background-color:#CCFFCC;" title="'.$l['w_under_limit'].'"';
    }
    $limits .= '><td style="text-align:left;">'.$l['w_total'].'</td><td>&nbsp;</td><td>&nbsp;</td><td>'.K_REMAINING_TESTS.'</td></tr>';
}
$now = time();
$enddate = date(K_TIMESTAMP_FORMAT, $now);
if (K_MAX_TESTS_DAY !== false) {
    // day limit (last 24 hours)
    $startdate = date(K_TIMESTAMP_FORMAT, ($now - K_SECONDS_IN_DAY));
    $numtests = F_count_rows(K_TABLE_TESTUSER_STAT, 'WHERE tus_date>=\''.$startdate.'\' AND tus_date<=\''.$enddate.'\'');
    $limits .= '<tr';
    if ((K_MAX_TESTS_DAY - $numtests) <= 0) {
        $limits .= ' style="text-align:right;background-color:#FFCCCC;" title="'.$l['w_over_limit'].'"';
    } else {
        $limits .= ' style="text-align:right;background-color:#CCFFCC;" title="'.$l['w_under_limit'].'"';
    }
    $limits .= '><td style="text-align:left;">'.$l['w_day'].'</td><td>'.K_MAX_TESTS_DAY.'</td><td>'.$numtests.'</td><td><strong>'.(K_MAX_TESTS_DAY - $numtests).'</strong></td></tr>';
}
if (K_MAX_TESTS_MONTH !== false) {
    // month limit (last 30 days)
    $startdate = date(K_TIMESTAMP_FORMAT, ($now - K_SECONDS_IN_MONTH));
    $numtests = F_count_rows(K_TABLE_TESTUSER_STAT, 'WHERE tus_date>=\''.$startdate.'\' AND tus_date<=\''.$enddate.'\'');
    $limits .= '<tr';
    if ((K_MAX_TESTS_MONTH - $numtests) <= 0) {
        $limits .= ' style="text-align:right;background-color:#FFCCCC;" title="'.$l['w_over_limit'].'"';
    } else {
        $limits .= ' style="text-align:right;background-color:#CCFFCC;" title="'.$l['w_under_limit'].'"';
    }
    $limits .= '><td style="text-align:left;">'.$l['w_month'].'</td><td>'.K_MAX_TESTS_MONTH.'</td><td>'.$numtests.'</td><td><strong>'.(K_MAX_TESTS_MONTH - $numtests).'</strong></td></tr>';
}
if (K_MAX_TESTS_YEAR !== false) {
    // year limit (last 365 days)
    $startdate = date(K_TIMESTAMP_FORMAT, ($now - K_SECONDS_IN_YEAR));
    $numtests = F_count_rows(K_TABLE_TESTUSER_STAT, 'WHERE tus_date>=\''.$startdate.'\' AND tus_date<=\''.$enddate.'\'');
    $limits .= '<tr';
    if ((K_MAX_TESTS_YEAR - $numtests) <= 0) {
        $limits .= ' style="text-align:right;background-color:#FFCCCC;" title="'.$l['w_over_limit'].'"';
    } else {
        $limits .= ' style="text-align:right;background-color:#CCFFCC;" title="'.$l['w_under_limit'].'"';
    }
    $limits .= '><td style="text-align:left;">'.$l['w_year'].'</td><td>'.K_MAX_TESTS_YEAR.'</td><td>'.$numtests.'</td><td><strong>'.(K_MAX_TESTS_YEAR - $numtests).'</strong></td></tr>';
}
if (strlen($limits) > 0) {
    echo '<table style="border: 1px solid #808080;margin-left:auto; margin-right:auto;"><tr><th colspan="4" style="text-align:center;">'.$l['w_remaining_tests'].'</th></tr><tr style="background-color:#CCCCCC;"><th>'.$l['w_limit'].'</th><th>'.$l['w_max'].'</th><th>'.$l['w_executed'].'</th><th>'.$l['w_remaining'].'</th></tr>'.$limits.'</table><br />'.K_NEWLINE;
}

echo $l['d_admin_index'];

require_once('tce_page_footer.php');

//============================================================+
// END OF FILE
//============================================================+
