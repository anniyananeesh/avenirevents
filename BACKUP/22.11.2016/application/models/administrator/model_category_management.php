<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Model_category_management extends MY_Model{
		
		protected $table_name = TBL_CATEGORY;
/*
|--------------------------------------------------------------------------
| This function Returns all the records
|--------------------------------------------------------------------------
*/
		public function example(){
			/*$this->db->select('*');
			$this->db->from($this->table_name);
			if (isset($param_array)){
				$this->db->where($param_array);
			}
			$this->db->limit($limit, $offset);
			$this->db->order_by($sort, $by);
			$query = $this->db->get();
			//print($this->db->last_query());
			return $query->result();*/
		}

/*
|--------------------------------------------------------------------------
| This function Returns List Box for Category
|--------------------------------------------------------------------------
*/

		protected $spaceChar  		= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; // spaces
		protected $txtArrow_ar   	= "&crarr;&nbsp;"; // Arrow For arabic only
		protected $txtArrow_en   	= "&rarr;&nbsp;"; // Arrow For English only 
		protected $countSpace 		= 1;

		public function getFullCatListAdmin($cat_id,$language,$cat_id_selected){
   	
			global $spaceChar;  	// important so that variable can be used in function
			global $txtArrow_ar;	// important
			global $txtArrow_en;	// important
			global $countSpace;		// important because we need to count number of spaces
			
			if (empty($language) or $language=="" or $language==NULL){ $language="en"; }
			if ($language=="en"){ $arrow = $txtArrow_en; }else{ $arrow = $txtArrow_ar; }
			if ($cat_id == "" or $cat_id== NULL){ $cat_id=0; }
			
			$where_array1["parent_id"] = $cat_id;
			$data_cat1 = $this->get_all_records(array("parent_id"=>$cat_id), '100000','0','orderby','ASC');
			
			foreach ($data_cat1 as $key=>$value){
				
				$cat_id1 = $value->id;
				$data_cat2 = $this->get_all_records(array("parent_id"=>$cat_id1), '100000','0','orderby','ASC');

				?>
				<option value="<?=$cat_id1;?>" <? if ($cat_id1==$cat_id_selected){ echo 'selected="selected"'; } ?> ><?php for ($j=0; $j<$countSpace; $j++) { echo $this->spaceChar; }; echo $this->txtArrow_en.$value->category_name_en;?></option>
				<?php 
				
				if (count($data_cat2)>0) {
					$countSpace++;
					$this->getFullCatListAdmin($cat_id1,$language,$cat_id_selected); // recursive calling function for sub categories
					$countSpace--;
				}
			}
		}
		
		
		public function getCategoryList($parent_id, $cid){
			$cat_array = "";
			$loopvar = $parent_id;
										
			$array_inc=0;
			$first_data = $this->get_details($cid);
			$first_parent_id 			= $first_data->parent_id;
			$cat_array[$array_inc] 		= $first_data->category_name_en;
			$catid_array[$array_inc] 	= $first_data->id;
			
			if ($first_parent_id!=0){
			
				$finished = false;
				$array_inc=1;
				while(!$finished){
					
					$get_data = $this->get_details($loopvar);
					$pid = $get_data->parent_id;
					
					if ($pid == 0){
						$cat_array[$array_inc] = $get_data->category_name_en;
						$catid_array[$array_inc] = $get_data->id;
						$finished = true;								
					}else{
						$cat_array[$array_inc] = $get_data->category_name_en;
						$catid_array[$array_inc] = $get_data->id;
						$loopvar=$pid;
						$array_inc++;
					}
					
				}//end while
			
			}
			
			for ($j=count($cat_array); $j>=0; $j--){
				$optionName .= $cat_array[$j]."&nbsp;/&nbsp;";
										
				$optionVal = $catid_array[0];
				//if ($cat_array[$j]!=""){ $optionName .= "/";	}	
			}
			
			
			$return_array;
			$return_array["cat_list"] = $optionName;
			$return_array["cat_val"] = $optionVal;
			return $return_array;
		}	
		
		
		
				
	}//class