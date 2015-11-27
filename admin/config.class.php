<?php 
if (!(defined('_JEXEC')) { die( 'Direct Access to this location is not allowed.' ); }

if (defined('_uddeConfig')) 
{
	return true;
} 
else 
{
	define('_uddeConfig', 1);

	class uddeimconfigclass 
	{
		var $version = '2.6';
		var $cryptkey = 'uddeIMcryptkey';
		var $datumsformat = 'j M H:i';
		var $ldatumsformat = 'j F Y, H:i';
		var $emn_sendermail = 'webmaster';
		var $emn_sendername = 'Messaging';
		var $sysm_username = 'System';
		var $charset = 'ISO-8859-1';
		var $mailcharset = 'ISO-8859-1';
		var $emn_body_nomessage = '';
		var $emn_body_withmessage = '';
		var $emn_forgetmenot = '';
		var $export_format = '';
		var $showtitle = '';
		var $templatedir = 'default';
		var $quotedivider='__________';
		var $blockgroups = '';
		var $pubblockgroups = '';
		var $hideusers = '62';
		var $pubhideusers = '62';
		var $attachmentgroups = '';
		var $recaptchaprv = '';
		var $recaptchapub = '';
		var $allowedextensions = '';
		var $badwords = '';
		var $gravatard = '';
		var $gravatarr = 'g';
		var $groupsadmin = '';
		var $groupsspecial = '';

		var $ReadMessagesLifespan = 36524;
		var $UnreadMessagesLifespan = 36524;
		var $SentMessagesLifespan = 36524;
		var $TrashLifespan = 2;
		var $ReadMessagesLifespanNote = 0;
		var $UnreadMessagesLifespanNote = 0;
		var $SentMessagesLifespanNote = 0;
		var $TrashLifespanNote = 1;
		var $adminignitiononly = 1;
		var $pmsimportdone = 0;
		var $blockalert = 0;
		var $blocksystem = 0;
		var $allowemailnotify = 0;
		var $notifydefault = 0;
		var $popupdefault = 0;
		var $allowsysgm = 0;
		var $emailwithmessage = 0;
		var $firstwordsinbox = 40;
		var $longwaitingdays = 75;
		var $longwaitingemail = 0;
		var $maxlength = 2500;
		var $showcblink = 1;
		var $showmenulink = 0;
		var $showcbpic = 1;
		var $showonline = 1;
		var $allowarchive = 0;
		var $maxarchive = 100;
		var $allowcopytome = 1;
		var $trashoriginal = 1;
		var $perpage = 8;
		var $enabledownload = 0;
		var $inboxlimit = 0;
		var $showinboxlimit = 0;
		var $allowpopup = 0;
		var $allowbb = 1;
		var $allowsmile = 1;
		var $animated = 0;
		var $animatedex = 0;
		var $showmenuicons = 1;
		var $bottomlineicons = 1;
		var $actionicons = 1;
		var $showconnex = 0;
		var $showsettingslink = 2;
		var $connex_listbox=0;
		var $forgetmenotstart=0;
		var $showabout = 0;
		var $emailtrafficenabled = 0;
		var $getpiclink = 0;
		var $realnames = 0;
		var $cryptmode = 0;
		var $modeshowallusers = 1;
		var $useautocomplete = 0;
		var $allowmultipleuser = 1;
		var $connexallowmultipleuser = 1;
		var $allowmultiplerecipients = 1;
		var $showtextcounter = 1;
		var $allowforwards = 1;
		var $showgroups = 0;
		var $mailsystem = 0;
		var $searchinstring = 1;
		var $maxrecipients = 0;
		var $languagecharset = 0;
		var $usecaptcha = 0;
		var $captchalen = 4;
		var $pubfrontend = 0;
		var $pubfrontenddefault = 0;
		var $pubmodeshowallusers = 1;
		var $hideallusers = 0;
		var $pubhideallusers = 0;
		var $unblockCBconnections = 1;
		var $CBgallery = 0;
		var $enablelists = 0;
		var $maxonlists = 100;
		var $timedelay = 0;
		var $pubrealnames = 0;
		var $pubreplies = 0;
		var $pubemail = 0;
		var $csrfprotection = 0;
		var $trashrestriction = 0;
		var $replytruncate = 0;
		var $allowflagged = 0;
		var	$overwriteitemid = 0;
		var	$useitemid = 0;
		var	$timezone = 0;
		var $pubuseautocomplete = 0;
		var $pubsearchinstring = 1;
		var $mootools = 1;
		var $autoresponder = 0;
		var $autoforward = 0;
		var $rows = 10;
		var $cols = 60;
		var $width = 450;
		var $enablefilter = 0;
		var $enablereply = 0;
		var $enablerss = 0;
		var $showigoogle = 1;
		var $showhelp = 0;
		var $separator = 0;
		var $rsslimit = 20;
		var $restrictallusers = 0;
		var $trashoriginalsent = 0;
		var $reportspam = 0;
		var $checkbanned = 0;
		var $enableattachment = 0;
		var $maxsizeattachment = 16384;
		var $maxattachments = 3;
		var $fileadminignitiononly = 1;
		var $showlistattachment = 1;
		var $showmenucount = 0;
		var $encodeheader = 0;
		var $enablesort = 0;
		var $captchatype = 0;
		var $unprotectdownloads = 0;
		var $waitdays = 0;
		var $avatarw = 0;
		var $avatarh = 0;
		var $gravatar = 0;
		var $addccline = 0;
		var $modnewusers = 0;
		var $modpubusers = 0;
		var $restrictcon = 0;
		var $restrictrem = 0;
		var $stime = 0;
		var $dontsefmsglink = 0;
		var $enablepostbox = 0;
		var $postboxfull = 0;
		var $postboxavatars = 0;
		var $replytext = 1;
		// temporary variables
		var $flags = 0;
		var $userid = 0;
		var $usergid = Array();
		var $cbitemid = 0;
	}
}
