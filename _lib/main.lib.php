<?php

function db_connect() {
	global $site;
	try {
		$dbh = new PDO(
			"mysql:host={$site->settings->dbhost};dbname={$site->settings->dbschema}", 
			$site->settings->dbuser, 
			$site->settings->dbpass
		);
		
		return $dbh;
	} catch (PDOException $e) {
		die("<pre>" . $e->getMessage() . "</pre>");
	}
	return null;
}

function defines() {
	define("NAV_INDEX", 	0);
	define("NAV_CONNECT", 	1);
	define("NAV_BLOG", 		2);
}

function navigation($h=NAV_INDEX) {
?>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topnavigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Joe Reid</a>
			</div>

			<div class="collapse navbar-collapse" id="topnavigation">
				<ul class="nav navbar-nav navbar-right">
					<li><a class="<?=($h == NAV_CONNECT) ? "nav-selected" : ""?>" href="/connect">Connect</a></li>
					<li><a class="<?=($h == NAV_BLOG) ? "nav-selected" : ""?>" href="/blog">Blog</a></li>
				</ul>
			</div>
		</nav>
<?
}

function register_hit() {
	global $site;
	
	if (isset($_SERVER['HTTP_REFERER']) && isset($_SERVER['http_host'])) {
		if (strpos($_SERVER['HTTP_REFERER'], $_SERVER['http_host']) === FALSE) {
			$sql = "UPDATE access SET hits = hits + 1 WHERE id = 0";
			$q = $site->db->prepare($sql);
			$q->execute();
		}
	}
}

function return_obj_fail($str) {
        $o = new StdClass();
        $o->result = "failure";
        $o->value = 0;
        $o->message = $str;
        return $o;
}

function return_obj_success() {
        $o = new StdClass();
        $o->result = "success";
        $o->value = 1;
        return $o;
}

?>