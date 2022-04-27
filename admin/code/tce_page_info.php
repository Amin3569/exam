<?php


require_once('../config/tce_config.php');

$pagelevel = K_AUTH_ADMIN_INFO;
require_once('../../shared/code/tce_authorization.php');

$thispage_title = $l['t_page_info'];
require_once('../code/tce_page_header.php');

require_once('tce_page_header.php');

echo '<div class="container">'.K_NEWLINE;

echo ''.$l['d_tcexam_desc'].'<br />'.K_NEWLINE;

echo '<ul class="credits">'.K_NEWLINE;
echo '<li><strong>'.$l['w_author'].':</strong>ASTU STUDENTS</li>'.K_NEWLINE;


echo '<a href="# title="'.$l['m_new_window_link'].'"></a></li>'.K_NEWLINE;
echo '</ul>'.K_NEWLINE;



echo '<p>SmartExam is a higly custumizable and efficient online examination system that support many types of examination questions with bulk import function,</p>'.K_NEWLINE;



// display credit logos
//echo '<a href="http://www.php.net"><img src="../../images/credits/poweredby_php_88x31.png" alt="Powered by PHP" width="88" height="31" /></a>'.K_NEWLINE;
//echo '<a href="http://www.mysql.com"><img src="../../images/credits/poweredbymysql_88x31.png" alt="Powered by MySQL" width="88" height="31" /></a>'.K_NEWLINE;
//echo '<a href="http://www.postgresql.org"><img src="../../images/credits/poweredbypgsql_88x31.png" alt="Powered by PostgreSQL" width="88" height="31" /></a>'.K_NEWLINE;


require_once('tce_page_footer.php');

//============================================================+
// END OF FILE
//============================================================+
