<?php

/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
/* ~~~~~~~~~~ Shortcodes ~~~~~~~~~~ */
/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

    /* ~~~~~~~~~~ Button ~~~~~~~~~~ */

    function button_func( $atts, $content = "" ) {
        $return = '<a href="'.$atts['url'].'" class="campi-ya-kanzi-button campi-ya-kanzi-button__with-arrow campi-ya-kanzi-button__with-arrow--white';
        $return .= '">';

        $return .= $atts['text'].'<img src="'.get_template_directory_uri().'/images/icon__arrow--white.svg" alt="Icon Arrow" class="arrow svg"/></a>';

        return $return;
    }
    add_shortcode( 'button', 'button_func' );


    // /* ~~~~~~~~~~ Blockquote ~~~~~~~~~~ */

    // function blockquote_func( $atts, $content = "" ) {
    //     $return = '<blockquote class="blockquote">';
    //         $return .= '<div class="blockquote__content content">' .apply_filters('content', $content). '</div>';
    //         $return .= '<footer class="blockquote__footer">';
    //             $return .= '<cite class="blockquote__footer__cite d-block element-small-margin-top">~ '.$atts['cite'].'</cite>';
    //         $return .= '</footer>';
    //     $return .= '</blockquote>';

    //     return $return;
    // }
    // add_shortcode( 'blockquote', 'blockquote_func' );


    /* ~~~~~~~~~~ highlighted-text ~~~~~~~~~~ */

    function highlightedText_func( $atts, $content = "" ) {
        $return = '<span class="highlighted-text">';
            $return .= apply_filters('content', $content);
        $return .= '</span>';

        return $return;
    }
    add_shortcode( 'highlighted-text', 'highlightedText_func' );




add_action('admin_menu', 'xls_options_page');
function xls_options_page(){
	add_submenu_page('options-general.php','XLS Upload','XLS Upload','manage_options','xls_upload','xls_upload_page_html');
 }
 function xls_upload_page_html(){ ?>
	<h1>Upload File</h1>
	<small>Select only xls file type</small>
	<form name="xlsupload" method="post"  action="<?php xls_file_upload_dir();?>" enctype="multipart/form-data">
	<input type="file" name="xls_upload" onchange="validate_fileupload(this);" id="xls_upload">
	
	<input type="submit" name="xls_sunmit" value="Upload" class="button button-primary" onclick="return valid_form();">
	</form>
	<script type="text/javascript">
		function validate_fileupload(input_element){
			var el = document.getElementById("xls_upload");
			var fileName = input_element.value;
			var allowed_extensions = new Array("xls");
			var file_extension = fileName.split('.').pop(); 
			for(var i = 0; i < allowed_extensions.length; i++){
			if(allowed_extensions[i]==file_extension)
			{
			valid = true; // valid file extension
			return;
			}
			}
			alert("Invalid file tyle");
			valid = false;
		}
		function valid_form(){
		  return valid;
		}
	</script>
 <?php  }

  function xls_file_upload_dir(){
     if(isset($_REQUEST['xls_sunmit'])){
	    $uploads_dir =ABSPATH ."wp-content/themes/campi-ya-kanzi/inc/";
		$source = $_FILES['xls_upload']['tmp_name'];
		$destination = trailingslashit( $uploads_dir ).'rates.xls';
		move_uploaded_file( $source, $destination );
	  }
   }
  	/*
   *@ call action dbx_download_file
   */ 
	function dbx_download_file($token, $in_filepath, $out_filepath){
	
	$out_fp = fopen($out_filepath, 'w+');
	
	if ($out_fp === FALSE)
	{
	 echo "fopen error; can't open $out_filepath\n";
	  return (NULL);
	}	
	$url = 'https://content.dropboxapi.com/2/files/download';
	
	$header_array = array(
	'Authorization: Bearer ' . $token,
	'Content-Type:',
	'Dropbox-API-Arg: {"path":"' . $in_filepath . '"}'
	);
	
	$ch = curl_init();
	
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, TRUE);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header_array);
	curl_setopt($ch, CURLOPT_FILE, $out_fp);
	
	$metadata = null;
	 curl_setopt($ch, CURLOPT_HEADERFUNCTION, function ($ch, $header) use (&$metadata)
	{
	$prefix = 'dropbox-api-result:';
	if (strtolower(substr($header, 0, strlen($prefix))) === $prefix)
	{
	$metadata = json_decode(substr($header, strlen($prefix)), true);
	}
	return strlen($header);
	}
	);
	
	$output = curl_exec($ch);
		
   
	if ($output === FALSE){
	  echo "curl error: " . curl_error($ch);
	}
	
	 curl_close($ch);
	  fclose($out_fp);
	  return($metadata);
 }
 
    /*
   *@ call action download_xlsxsheet
   */ 
	add_action( 'init', 'download_xlsxsheet'); 
	function  download_xlsxsheet(){
	if ( ! wp_next_scheduled( 'download_xlsxsheet_hook' ) ) {
	  wp_schedule_event( time(), 'hourly', 'download_xlsxsheet_hook' );
	 } 
	}
	/*
   *@ call action download_xlsxsheet_hook
   */ 
	add_action( 'download_xlsxsheet_hook', 'download_xlsxsheet_function' );
	 
	 function download_xlsxsheet_function() {
	 
	   $token = "Tm3R2uG_dHAAAAAAAAAJHnK49-cUsADop9p5P9q_2QSnW7A9IxYcYDMPJUKEZi2Q";
	   $in_filepath = "/Campi ya Kanzi Team Folder/Bookings CyK and LLJ/Bookings CyK/booking spreadsheet Niels WTT edits.xlsx";
	   $out_filepath = ABSPATH ."wp-content/themes/campi-ya-kanzi/inc/booking.xlsx";
	   
	    dbx_download_file($token,$in_filepath,$out_filepath);
		
		return true;
	 } 
	/*
   *@ call action array2Table
   */ 
	function array2Table($data) {
	
	$re = '<table class="sheet-data">';     // starts html table	
		$x = 1;
		foreach($data as $row) {
		    
			if($x==11){break;}
			$re .= "<tr>\n";
			$y = 1;
			foreach($row as $cell) {
				$cell = htmlspecialchars($cell, ENT_QUOTES);
				if($cell=='House 1'){ $cell='Kanzi House';}
				$re .= " <td>$cell</td>\n";  
				$y++;
		}  
		$re .= "</tr>\n";
		
		$x++;
	}
		
	return $re .'</table>';     // ends and returns the html table
	}
  /*
   *@xlsTabAllData_func
   */  
  function xlsTabAllData_func() {
	/*Load excel reader lib*/
     date_default_timezone_set('UTC');
     include('XLSXReader.php');
	/*object of PhpExcelReader class*/
	$sFileName = ABSPATH ."wp-content/themes/campi-ya-kanzi/inc/booking.xlsx";
	
	$xlsx = new XLSXReader($sFileName);
	
	 
	$excel_data = '<div class="rates-wpdatatables">';  
	if (file_exists($sFileName)){
	  $sheetNames = $xlsx->getSheetNames();
	     $i=1;
		foreach($sheetNames as $sheetName) {
		$sheet = $xlsx->getSheet($sheetName);
		
		/*if ($i < 10){ $month = str_pad($i, 2, "0", STR_PAD_LEFT);}else{$month = $i;}*/
		 
		  $month = strtotime(htmlspecialchars($sheetName, ENT_QUOTES));
		 
		if(strtotime(date('F Y')) <= $month){
			
	    if($sheet->getData()) {	
			 $excel_data .='<div class="wpdatatable">';
			 $excel_data .= '<ul><li><img src="'.get_template_directory_uri().'/images/green-dots.png">&nbsp;&nbsp;Available</li>';
			 $excel_data .= '<li><img src="'.get_template_directory_uri().'/images/red-dots.png">&nbsp;&nbsp;Booked</li></ul>';	 	
			 $excel_data .= '<h2>'. htmlspecialchars($sheetName, ENT_QUOTES) .'</h2>';
			 $excel_data .= array2Table($sheet->getData());  
			 $excel_data .= '</div>';
			}
		 }
		 $i++;
		}
		
	   }else{
	    $excel_data .= 'The file ' . $sFileName . ' was not found'; 
	 }
	 
	$excel_data .= '<a href="#" class="loadmore" id="loadMore">Load More <svg xmlns="http://www.w3.org/2000/svg" height="20" width="25" viewBox="0 0 44.22 32.24" class="arrow svg replaced-svg"><defs><style>.cls-1{fill:#aa5e16}</style></defs><title>icon__arrow--primary-color</title><g id="Warstwa_2" data-name="Warstwa 2"><g id="icon__arrow--primary-color"><path id="Arrow_Forward" data-name="Arrow Forward" class="cls-1" d="M44.22 16.12a1.37 1.37 0 0 0-.41-1L30.12.44a1.28 1.28 0 0 0-1.93 0 1.48 1.48 0 0 0 0 2.05l11.33 12.16H1.38A1.35 1.35 0 0 0 0 16.12a1.35 1.35 0 0 0 1.38 1.47h38.14L28.19 29.74a1.48 1.48 0 0 0 0 2.05 1.28 1.28 0 0 0 1.93 0L43.8 17.14a1.37 1.37 0 0 0 .42-1.02z"></path></g></g></svg></a>';	
	$excel_data .= '</div>';
	
	return $excel_data;
   }
  add_shortcode( 'xlsTabAllData', 'xlsTabAllData_func' );
  

  function the_title_trim($title){
    $pattern[0] = '/Protected:/'; 
    $replacement[0] = ''; // Enter some text to put in place of Protected:
   return preg_replace($pattern, $replacement, $title);
  }
  add_filter('the_title', 'the_title_trim');
  
?>