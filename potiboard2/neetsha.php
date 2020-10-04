<?php
/**
 * Created by PhpStorm.
 * User: maju
 * Date: 2020/10/05
 * Time: 0:26
 */

// 新都社連携

class Neetsha
{
	public static function delNeetshaOekakiLog ($board, $res_id) {
		print file_get_contents("https://neetsha.jp/oekaki/log/del_log.php?board={$board}&del={$res_id}");
	}

	public static function importNeetshaOekakiLog () {
		file_get_contents("https://neetsha.jp/oekaki/log/import_current_img_and_tree.php");
	}
}



