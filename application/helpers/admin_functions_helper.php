<?php
/*
|
| This file contains common functions used in Admin panel only
| This Helper file is autolaoded in autoload file
|
|--------------------------------------------------------------------------
| This function Return Log Description
|--------------------------------------------------------------------------
*/
		function getLogDetails($module_name, $record_id){
			$log_array = array (
				'insertDesc'		=>		" Inserted a new record in <b>".$module_name."</b> with ID = ".$record_id,
				'editDesc'			=>		" Edited a record in <b>".$module_name."</b> with ID = ".$record_id,
				'deleteDesc'		=>		" Delete a record in <b>".$module_name."</b> with ID = ".$record_id,
				'activeDesc'		=>		" Publish a record in <b>".$module_name."</b> with ID = ".$record_id,
				'deactiveDesc'		=>		" Unpublish a record in <b>".$module_name."</b> with ID = ".$record_id,
			);
			return $log_array;
		}
/*
|--------------------------------------------------------------------------
| This function return how many records
|--------------------------------------------------------------------------
*/
		function display_records($total_records, $offset, $paging){
			if (empty($total_records))
				return "No record found!";
			else {
				$retstr .= "<b>".$total_records."</b> Records. Showing <b>";
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
					$retstr .=  " of ". $total_records ." Records</b>";		
				}	
				$retstr .= "</b>";
				return $retstr;
			}
		}
/*
|--------------------------------------------------------------------------
| This function Return Paging
|--------------------------------------------------------------------------
*/
		function custom_pagination($limit, $total_records, $base_url, $uri_segment){
			$config['per_page'] 		= $limit;
			$config['uri_segment'] 	= $uri_segment;
			$config['total_rows'] 	= $total_records;
			$config['base_url'] 		= $base_url;
			$config['next_link'] = "Next";
			$config['next_tag_open'] = '<span style="color:#FFFFFF; border:solid 1px #066DA1; padding:5px; background-color:#DFEEFF; margin-right:3px;font-family:arial">';
			$config['next_tag_close'] = '</span>';
			
			$config['prev_link'] = 'Previous';
			$config['prev_tag_open'] = '<span style="color:#FFFFFF; border:solid 1px #066DA1; padding:5px; background-color:#DFEEFF; margin-right:3px;font-family:arial ">';
			$config['prev_tag_close'] = '</span>';
			
			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<span style="color:#FFFFFF; border:solid 1px #066DA1; padding:5px; background-color:#DFEEFF; margin-right:3px;font-family:arial ">';
			$config['first_tag_close'] = '</span>';
			
			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<span style="color:#FFFFFF; border:solid 1px #066DA1; padding:5px; background-color:#DFEEFF; margin-right:3px;font-family:arial ">';
			$config['last_tag_close'] = '</span>';
			
			$config['cur_tag_open'] = '<span style="border:solid 1px #066DA1; padding:5px; line-height:35px; margin-bottom:10px; margin-top:10px text-decoration:none; margin-right:3px;color:#FFF;font-family:arial; background:#066DA1;">';
			$config['cur_tag_close'] = '</span>';
			
			$config['num_tag_open'] = '<span style="border:solid 1px #066DA1; padding:5px; background-color:#DFEEFF; margin-right:3px;font-family:arial">';
			$config['num_tag_close'] = '</span>';
	
			return $config;
		}
		

?>