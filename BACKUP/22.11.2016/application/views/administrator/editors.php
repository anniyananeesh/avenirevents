<?
	/*$Query = "SELECT * FROM ".TBL_CONFIGURATIONS;
	$Data  = selectFrom($Query);
		$editor_name  = $Data["editor"];
		$thumb_width_global  = $Data["thumb_width"];
		$thumb_height_global  = $Data["thumb_height"];
		
		
	if ($editor_name == "tinyMCE"){*/
?>
<script type="text/javascript" src="<?=HOST_URL?>/editors/tinyMCE/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
			mode : "specific_textareas",
       	editor_selector : "editor",
			elements : "ajaxfilemanager",
			theme : "advanced",
			plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
			
			theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,outdent,indent,|,undo,redo,|,link,unlink,anchor,image,cleanup,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,removeformat,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak",
		
			theme_advanced_buttons3_add_before : "",
			content_css : "<?=HOST_URL?>/css/eheadings.css",
			//theme_advanced_font_sizes: "10px,12px,13px,14px,16px,18px,20px",

			theme_advanced_buttons3_add : "media",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			extended_valid_elements : "hr[class|width|size|noshade]",
			file_browser_callback : "ajaxfilemanager",
			paste_use_dialog : false,
			theme_advanced_resizing : true,
			theme_advanced_resize_horizontal : true,
			apply_source_formatting : true,
			force_br_newlines : true,
			force_p_newlines : false,	
			relative_urls : false

		});

		function ajaxfilemanager(field_name, url, type, win) {
			var ajaxfilemanagerurl = "<?=HOST_URL?>/editors/tinyMCE/plugins/ajaxfilemanager/ajaxfilemanager.php";
			var view = 'detail';
			switch (type) {
				case "image":
				view = 'thumbnail';
					break;
				case "media":
					break;
				case "flash": 
					break;
				case "file":
					break;
				default:
					return false;
			}
            tinyMCE.activeEditor.windowManager.open({
                url: "<?=HOST_URL?>/editors/tinyMCE/plugins/ajaxfilemanager/ajaxfilemanager.php?view=" + view,
                width: 782,
                height: 440,
                inline : "yes",
                close_previous : "no"
            },{
                window : win,
                input : field_name
            });
            
		}
</script>

<? //}else if ($editor_name == "openWYSIWYG"){ ?>

<? //include($_SERVER['DOCUMENT_ROOT']."/editors/openWYSIWYG/scripts/wysiwyg.php"); ?>
<? // include($_SERVER['DOCUMENT_ROOT']."/editors/openWYSIWYG/scripts/wysiwyg-settings.php"); ?>
<!--<script type="text/javascript">
	
	//var mysettings = new WYSIWYG.Settings();
	//mysettings.DefaultStyle = "font-family: Tahoma; font-size: 14px; background-color: #FFFFFF";
	WYSIWYG.attach('all', full);
	//WYSIWYG.attach('textarea1', full);
	//WYSIWYG.attach('textarea2', full);
	
	
</script>
-->
<? //} ?>