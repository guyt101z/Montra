<?php 

namespace Core\Models;

/**
* 
*/
class SessionModel{

	public static $info = array();
	public static $session_id;
	public static $ip;
	public static $u_time;
	public static $file_id;

	public static $bots = array(
							'googlebot'	=>	'GoogleBot',
							'mediapartners'	=>	'Adsense',
							'msnbot'	=>	'MSN Search',
							'yahoo' 	=>	'Yahoo! Slurp',
							'ia_archiver'	=>	'Alexa',
							'is_archiver'	=>	'Archive.org',
							'gigabot'	=>	'Gigabot',
							'ask jeeves'=>	'Ask Jeeves',
							'sogou'		=>	'Sogou',
							'gaisbot'	=>	'Gaisbot',
							);
	public static $is_bot = false;


	
	//function __construct() 	{
	static function init() 	{
		self::user_ip(); // user IP
		self::$session_id = session_id(); // session ID
		self::$u_time = time(); // time

		if (isset($_SESSION['u_id']) && $_SESSION['user_agent'] == $_SERVER['HTTP_USER_AGENT'])
			self::load_user();
		elseif (isset($_COOKIE['key']))
			self::load_cookie();
		elseif (preg_match('#('. implode('|', array_keys(self::$bots)) .')#i', $_SERVER['HTTP_USER_AGENT'], $bot))
			self::load_bot(strtolower($bot[0]));
		else
			self::load_guest();
	}

/*

		// load user infromation from database
	static function load_user() {

		);

		$aUserResp =  self::$app->db->query("
			SELECT
				u.userid, u.username, u.email, u.status, u.usergroup, u.joined, u.played, u.comments, u.favourites, u.template, u.language, u.newpm, u.new_friend,
				s.session_id, s.time_updated, s.file_id,
				(SELECT count(pmid) FROM on_privatemessages WHERE userid = u.userid && status = '0') AS unread
			FROM
				on_users AS u
				LEFT JOIN on_sessions AS s ON (s.session_id = '". $this->session_id ."')
			WHERE
				u.userid = ". (int) $_SESSION['u_id'] ."
			LIMIT 1");


		var_dump($aUserResp);
		die();

		//$user_row = mysql_fetch_assoc($user_query);

		// no user found?
		if (empty($user_row) || $user_row['status'] == 0) {
			self::load_guest();
			return;
		}

		self::$info = array(
			'id'		=>	$user_row['userid'],
			'username'	=>	nohtml($user_row['username']),
			'email'		=>	nohtml($user_row['email']),
			'status'	=>	$user_row['status'],
			'group'		=>	(int) $user_row['usergroup'],
			'joined'	=>	$user_row['joined'],
			'played'	=>	$user_row['played'],
			'comments'	=>	$user_row['comments'],
			'favourites'=>	$user_row['favourites'],
			'template'	=>	(strlen($user_row['template']) > 0 && file_exists('templates/'. $user_row['template']) ? $user_row['template'] : $settings['template']),
			'language'	=>	(strlen($user_row['language']) > 0 && file_exists('languages/'. $user_row['language']) ? $user_row['language'] : $settings['language']),
			'newpm'		=>	$user_row['newpm'],
			'new_friend'=>	$user_row['new_friend'],
			'time_updated'=>$user_row['time_updated'],
			'file_id'	=>	$user_row['file_id'],
			'unread'	=>	$user_row['unread'],
		);

		if (empty($user_row['session_id']))
			$this->create_user_session();
		else
			$this->update_user_session();

		unset($user_row);
	}

	static function load_cookie(){
		
	}	

	static function load_bot(){

	}	
*/
	static function load_guest(){

		$guest_query = mysql_query("SELECT time_updated, played FROM on_sessions WHERE session_id  = '". $this->session_id ."' LIMIT 1");
		$guest_row = mysql_fetch_assoc($guest_query);

		$this->info = array(
			'id'		=>	0,
			'status'	=>	0,
			'group'		=>	0,
			'template'	=>	$settings['template'],
			'language'	=>	$settings['language'],
			'time_updated'=>$guest_row['time_updated'],
			'plays_left'=>	($settings['maxguestplays'] - $guest_row['played'])
		);

		if (empty($guest_row))
			$this->create_guest_session();
		else
			$this->update_guest_session();

	}



	static function user_ip() {
		var_dump("exprssee22ssion1");
    	if (getenv('HTTP_CLIENT_IP'))
        	self::$ip = getenv('HTTP_CLIENT_IP');
		elseif (getenv('HTTP_X_FORWARDED_FOR'))
        	self::$ip = getenv('HTTP_X_FORWARDED_FOR');
		elseif (getenv('HTTP_X_FORWARDED'))
			self::$ip = getenv('HTTP_X_FORWARDED');
		elseif (getenv('HTTP_FORWARDED_FOR'))
			self::$ip = getenv('HTTP_FORWARDED_FOR');
		elseif (getenv('HTTP_FORWARDED'))
			self::$ip = getenv('HTTP_FORWARDED');
		else
        	self::$ip = $_SERVER['REMOTE_ADDR'];        
	}




	// static public function getStatistic(){
	// 	//echo '<br>getStatistic';    	
	// }
}

$oSessionModel = new SessionModel();