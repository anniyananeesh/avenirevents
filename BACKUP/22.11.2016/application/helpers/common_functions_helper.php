<?php
/*
|
| This file contains common functions used in Admin panel and User Side
| This Helper file is autolaoded in autoload file
|
|--------------------------------------------------------------------------
| This function Return Date Formated
|--------------------------------------------------------------------------
*/
		function dateFormat($date){
			return date("d M, Y", strtotime($date));
		}	
		
		function datetimeFormat($date){
			return date("D d M Y, g:i A", strtotime($date));
		}
		
		function dayOnly($date){
			return date("d", strtotime($date));
		}
		function monthOnly($date){
			return date("M", strtotime($date));
		}
		function dateFormatDayName($date){
			return date("l j  F , Y", strtotime($date));
		}
			
/*
|--------------------------------------------------------------------------
| This function switch language
|--------------------------------------------------------------------------
*/		
		function switch_url($lang, $old_lang){
			$CI =& get_instance();
			$uri = $CI->uri->uri_string();
			if ($uri != "")
			{
				$exploded = explode('/', $uri);
				if($exploded[0] == $old_lang)
				{
					$exploded[0] = $lang;
				}
				$uri = implode('/',$exploded);
			}else{
				$uri = $lang;
			}
			return $uri;
		}
/*
|--------------------------------------------------------------------------
| This function Return yourtube string
|--------------------------------------------------------------------------
*/
		function get_video_code($video_src){
		/*
		$test1 = '<iframe width="425" height="349" src="http://www.youtube.com/embed/tmpElLEhJH4" frameborder="0" allowfullscreen></iframe>';
		$test2 = '<object width="425" height="349"><param name="movie" value="http://www.youtube.com/v/tmpElLEhJH4?version=3&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/tmpElLEhJH4?version=3&amp;hl=en_US" type="application/x-shockwave-flash" width="425" height="349" allowscriptaccess="always" allowfullscreen="true"></embed></object>';	
		$test3 = '<iframe width="425" height="349" src="http://www.youtube.com/embed/tmpElLEhJH4?rel=0" frameborder="0" allowfullscreen></iframe>';
		$test4 = 'http://www.youtube.com/watch?v=tmpElLEhJH4&feature=related';
		$test5 = 'http://youtu.be/LT1bcx3Bpp4';
		*/		
		
		$str1 = "iframe";
		$str2 = "?rel";
		$str3 = "object";
		$str4 = "/v/";
		$str5 = "?v=";
		$str6 = ".be/";
		
		if (strpos($video_src, $str1)){
			if (strpos($video_src, $str2)){
				$ar1 = explode('/embed/',$video_src);
				$ar2 = $ar1[1];
				$ar3 = explode('?', $ar2);
				$ar4 = $ar3[0];	
				return $ar4; 							
			}else{
				//$video_src = stripslashes($video_src);
				$ar1 = explode('/embed/',$video_src);
				$ar2 = $ar1[1];
				$ar3 = explode('"', $ar2);
				$ar4 = $ar3[0];	
				return $ar4; 	
			}
		}elseif (strpos($video_src, $str3)){
			if (strpos($video_src, $str4)){
				$ar1 = explode('/v/',$video_src);
				$ar2 = $ar1[1];
				$ar3 = explode('?', $ar2);
				$ar4 = $ar3[0];	
				return $ar4; 							
			}
		}elseif (strpos($video_src, $str5)){
			$ar1 = explode('?v=',$video_src);
			$ar2 = $ar1[1];
			$ar3 = explode('&', $ar2);
			$ar4 = $ar3[0];
			return $ar4; 
		}elseif (strpos($video_src, $str6)){
			$ar1 = explode('.be/',$video_src);
			$ar2 = $ar1[1];
			return $ar2; 
		}
					
	}
/*
|--------------------------------------------------------------------------
| This function Return Paging
|--------------------------------------------------------------------------
*/
		function user_side_paging($limit, $total_records, $base_url, $uri_segment){
			$config['per_page'] 		= $limit;
			$config['uri_segment'] 	= $uri_segment;
			$config['total_rows'] 	= $total_records;
			$config['base_url'] 		= $base_url;
			$config['next_link'] = "Next";
			$config['next_tag_open'] = '<span style="color:#FFFFFF; border:solid 1px #C1343D; padding:5px; background-color:#FAEBEC; margin-right:3px;font-family:arial">';
			$config['next_tag_close'] = '</span>';
			
			$config['prev_link'] = 'Previous';
			$config['prev_tag_open'] = '<span style="color:#FFFFFF; border:solid 1px #C1343D; padding:5px; background-color:#FAEBEC; margin-right:3px;font-family:arial ">';
			$config['prev_tag_close'] = '</span>';
			
			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<span style="color:#FFFFFF; border:solid 1px #C1343D; padding:5px; background-color:#FAEBEC; margin-right:3px;font-family:arial ">';
			$config['first_tag_close'] = '</span>';
			
			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<span style="color:#FFFFFF; border:solid 1px #C1343D; padding:5px; background-color:#FAEBEC; margin-right:3px;font-family:arial ">';
			$config['last_tag_close'] = '</span>';
			
			$config['cur_tag_open'] = '<span style="border:solid 1px #C1343D; padding:5px; line-height:35px; margin-bottom:10px; margin-top:10px text-decoration:none; margin-right:3px;color:#FFF;font-family:arial; background:#C1343D;">';
			$config['cur_tag_close'] = '</span>';
			
			$config['num_tag_open'] = '<span style="border:solid 1px #C1343D; padding:5px; background-color:#FAEBEC; margin-right:3px;font-family:arial">';
			$config['num_tag_close'] = '</span>';
	
			return $config;
		}		
/*
|--------------------------------------------------------------------------
| This function return how many records
|--------------------------------------------------------------------------
*/
		function display_records_userside($total_records, $offset, $paging){
			if (empty($total_records))
				return "No record found!";
			else {
				$retstr .= "<b>".$total_records."</b> Jobs. Showing <b>";
				if ($total_records>$offset) {
					$retstr .=  $offset+1;
					$retstr .=  " </b>to<b> ";
					if ($offset >= $total_records- $paging) { 
					  $retstr .=  $total_records; 
					} else { 
						if ($paging==""){
							$retstr .=  $total_records;
						}else{
								 $retstr .=  $offset+ $paging;
						}
					}
				} else { 
					$retstr .=  $offset+1;
					$retstr .=  " - ". $total_records;
					$retstr .=  " of ". $total_records ." Jobs";		
				}
				$retstr .= "</b>";
				return $retstr;
			}
		}
		
		
		
		
		
		
		function resize1($imagePath,$opts=null){
	$imagePath = urldecode($imagePath);
	# start configuration
	$cacheFolder = './cache/'; # path to your cache folder, must be writeable by web server
	$remoteFolder = $cacheFolder.'remote/'; # path to the folder you wish to download remote images into

	$defaults = array('crop' => false, 'scale' => 'false', 'thumbnail' => false, 'maxOnly' => false, 
	   'canvas-color' => 'transparent', 'output-filename' => false, 
	   'cacheFolder' => $cacheFolder, 'remoteFolder' => $remoteFolder, 'quality' => 90, 'cache_http_minutes' => 20);

	$opts = array_merge($defaults, $opts);    

	$cacheFolder = $opts['cacheFolder'];
	$remoteFolder = $opts['remoteFolder'];

	$path_to_convert = 'convert'; # this could be something like /usr/bin/convert or /opt/local/share/bin/convert
	
	## you shouldn't need to configure anything else beyond this point

	$purl = parse_url($imagePath);
	$finfo = pathinfo($imagePath);
	$ext = $finfo['extension'];

	# check for remote image..
	if(isset($purl['scheme']) && ($purl['scheme'] == 'http' || $purl['scheme'] == 'https')):
		# grab the image, and cache it so we have something to work with..
		list($filename) = explode('?',$finfo['basename']);
		$local_filepath = $remoteFolder.$filename;
		$download_image = true;
		if(file_exists($local_filepath)):
			if(filemtime($local_filepath) < strtotime('+'.$opts['cache_http_minutes'].' minutes')):
				$download_image = false;
			endif;
		endif;
		if($download_image == true):
			$img = file_get_contents($imagePath);
			file_put_contents($local_filepath,$img);
		endif;
		$imagePath = $local_filepath;
	endif;

	if(file_exists($imagePath) == false):
		$imagePath = $_SERVER['DOCUMENT_ROOT'].$imagePath;
		if(file_exists($imagePath) == false):
			return 'image not found';
		endif;
	endif;

	if(isset($opts['w'])): $w = $opts['w']; endif;
	if(isset($opts['h'])): $h = $opts['h']; endif;

	$filename = md5_file($imagePath);

	// If the user has requested an explicit output-filename, do not use the cache directory.
	if(false !== $opts['output-filename']) :
		$newPath = $opts['output-filename'];
	else:
        if(!empty($w) and !empty($h)):
            $newPath = $cacheFolder.$filename.'_w'.$w.'_h'.$h.(isset($opts['crop']) && $opts['crop'] == true ? "_cp" : "").(isset($opts['scale']) && $opts['scale'] == true ? "_sc" : "").'.'.$ext;
        elseif(!empty($w)):
            $newPath = $cacheFolder.$filename.'_w'.$w.'.'.$ext;	
        elseif(!empty($h)):
            $newPath = $cacheFolder.$filename.'_h'.$h.'.'.$ext;
        else:
            return false;
        endif;
	endif;

	$create = true;

    if(file_exists($newPath) == true):
        $create = false;
        $origFileTime = date("YmdHis",filemtime($imagePath));
        $newFileTime = date("YmdHis",filemtime($newPath));
        if($newFileTime < $origFileTime): # Not using $opts['expire-time'] ??
            $create = true;
        endif;
    endif;

	if($create == true):
		if(!empty($w) and !empty($h)):

			list($width,$height) = getimagesize($imagePath);
			$resize = $w;
		
			if($width > $height):
				$resize = $w;
				if(true === $opts['crop']):
					$resize = "x".$h;				
				endif;
			else:
				$resize = "x".$h;
				if(true === $opts['crop']):
					$resize = $w;
				endif;
			endif;

			if(true === $opts['scale']):
				$cmd = $path_to_convert ." ". escapeshellarg($imagePath) ." -resize ". escapeshellarg($resize) . 
				" -quality ". escapeshellarg($opts['quality']) . " " . escapeshellarg($newPath);
			else:
				$cmd = $path_to_convert." ". escapeshellarg($imagePath) ." -resize ". escapeshellarg($resize) . 
				" -size ". escapeshellarg($w ."x". $h) . 
				" xc:". escapeshellarg($opts['canvas-color']) .
				" +swap -gravity center -composite -quality ". escapeshellarg($opts['quality'])." ".escapeshellarg($newPath);
			endif;
						
		else:
			$cmd = $path_to_convert." " . escapeshellarg($imagePath) . 
			" -thumbnail ". (!empty($h) ? 'x':'') . $w ."". 
			(isset($opts['maxOnly']) && $opts['maxOnly'] == true ? "\>" : "") . 
			" -quality ". escapeshellarg($opts['quality']) ." ". escapeshellarg($newPath);
		endif;

		$c = exec($cmd, $output, $return_code);
        if($return_code != 0) {
            error_log("Tried to execute : $cmd, return code: $return_code, output: " . print_r($output, true));
            return false;
		}
	endif;

	# return cache file path
	return str_replace($_SERVER['DOCUMENT_ROOT'],'',$newPath);
	
}
		

?>