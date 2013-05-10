#!/usr/bin/php
<?php

include('lib/xmpplogin.php');

$xmpp=new OC_xmpp_login('marti','acs.li','bosqueazul','http://owncloud.acs.li/http-bind/');
$xmpp->doLogin();
