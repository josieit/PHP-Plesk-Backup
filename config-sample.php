<?php
/**
 * @package     PHP-Plesk-Backup
 * @copyright   2017 Serena Villa. All rights reserved.
 * @license     GNU GPL version 3; see LICENSE
 * @link        http://www.josie.it
 */

$config = [

  "hostname" => "", //hostname of the machine where we are performing the backup

  //ftp settings of the remote server where we want to store the backup
  "ftp_host" => "",
  "ftp_username" => "",
  "ftp_pass" => "",

  //mysql settings of the machine where we want to perform the backup
  "mysql_host" => "localhost",
  "mysql_user" => "admin",
  "mysql_pass" => "",
  "mysql_port" => "8306",

  "basedir" => "/backup", //base directory to be used for backup on remote ftp
  "date_format" => date("m_d_Y"), //to be used in file names
  "max_file_life" => 40 //in days

];