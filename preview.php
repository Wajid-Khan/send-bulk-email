<?php  
// print_r($_POST['ids']);die;
if (isset($_POST['ids'])) 
{
	$selectedPosts = explode(',', $_POST['ids']);
	// $ids = (array)$ids;
	// echo var_dump($ids);die;
    foreach ($selectedPosts as $key => $postId) 
    {
        $api_url = 'https://livefit4ever.com/wp-json/wp/v2/posts/' . $postId;
        $ch = curl_init($api_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		if (curl_errno($ch)) 
		{
		    echo json_encode(array('error' => 'Curl error: ' . curl_error($ch)));
		} 
		else 
		{
		    $data[] = json_decode($response, true);
		}
    }
} 
else 
{
    echo 'No post IDs received.';
}

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="x-apple-disable-message-reformatting">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title></title>
      <style type="text/css">
         @media only screen and (min-width: 620px) {
         .u-row {
         width: 600px !important;
         }
         .u-row .u-col {
         vertical-align: top;
         }
         .u-row .u-col-33p33 {
         width: 199.98px !important;
         }
         .u-row .u-col-50 {
         width: 300px !important;
         }
         .u-row .u-col-100 {
         width: 600px !important;
         }
         }
         @media (max-width: 620px) {
         .u-row-container {
         max-width: 100% !important;
         padding-left: 0px !important;
         padding-right: 0px !important;
         }
         .u-row .u-col {
         min-width: 320px !important;
         max-width: 100% !important;
         display: block !important;
         }
         .u-row {
         width: 100% !important;
         }
         .u-col {
         width: 100% !important;
         }
         .u-col > div {
         margin: 0 auto;
         }
         }
         body {
         margin: 0;
         padding: 0;
         }
         table,
         tr,
         td {
         vertical-align: top;
         border-collapse: collapse;
         }
         p {
         margin: 0;
         }
         .ie-container table,
         .mso-container table {
         table-layout: fixed;
         }
         * {
         line-height: inherit;
         }
         a[x-apple-data-detectors='true'] {
         color: inherit !important;
         text-decoration: none !important;
         }
         table, td { color: #000000; } #u_body a { color: #0000ee; text-decoration: underline; } @media (max-width: 480px) { #u_content_heading_2 .v-container-padding-padding { padding: 50px 10px 0px 25px !important; } #u_content_heading_2 .v-text-align { text-align: center !important; } #u_content_text_2 .v-container-padding-padding { padding: 10px !important; } #u_content_text_2 .v-text-align { text-align: center !important; } #u_content_button_1 .v-text-align { text-align: center !important; } #u_content_heading_3 .v-container-padding-padding { padding: 10px 10px 0px !important; } #u_content_heading_3 .v-text-align { text-align: center !important; } #u_content_text_3 .v-text-align { text-align: center !important; } #u_content_button_2 .v-text-align { text-align: center !important; } #u_content_heading_4 .v-text-align { text-align: center !important; } #u_content_text_4 .v-text-align { text-align: center !important; } #u_content_button_3 .v-text-align { text-align: center !important; } #u_content_heading_5 .v-line-height { line-height: 100% !important; } #u_content_image_5 .v-container-padding-padding { padding: 10px 0px !important; } #u_content_image_7 .v-container-padding-padding { padding: 10px 0px 10px 10px !important; } }
      </style>
      <!--[if !mso]><!-->
      <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@600&display=swap" rel="stylesheet" type="text/css">
      <!--<![endif]-->
   </head>
   <body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #e7e7e7;color: #000000">
            <table id="u_body" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #e7e7e7;width:100%" cellpadding="0" cellspacing="0">
               <tbody>
                  <tr style="vertical-align: top">
                     <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">

<!------------------------- Logo & social icons ------------------------->
<div class="u-row-container" style="padding: 0px;background-color: transparent">
                                    <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                                       <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                                             <div style="background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                                   <!--<![endif]-->
                                                   <table id="u_content_heading_2" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                      <tbody>
                                                         <tr>
                                                            <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 10px 25px;font-family:arial,helvetica,sans-serif;" align="left">
                                                               

                                                    <!-- ////////////////////////////////////// -->
                                       <a href="https://livefit4ever.com/" target="_blank"><img src="https://livefit4ever.com/wp-content/uploads/2022/08/livefitforever-logo.jpg" style="width:55%;"></a>
                                                                     </td>
                                                                  </tr>
                                                                  </tbody>
                                                               </table>
                                                </div>
                                                <!--<![endif]-->
                                             </div>
                                          </div>
                                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                                          <div style="background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                          <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
                                          <table id="u_content_text_2" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                          <tr>
                                          <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:30px 20px 10px 10px;font-family:arial,helvetica,sans-serif;float: right;" align="left">
                                          <div class="v-text-align v-line-height" style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">

                                             <!-- ////////////////////////////////////// -->
                                 <div style="display: table; max-width:187px;">
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px">
            <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
            <a href="https://www.facebook.com/people/Livefit4ever/100083715931430/" title="Facebook" target="_blank">
            <img src="https://freeresources.in/emailer/assets/img/facebook.png" alt="Facebook" title="Facebook" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;width: 90%;">
            </a>
            </td></tr>
            </tbody></table>
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px">
            <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
            <a href="javascript:void(0)" title="Twitter" target="_blank">
            <img src="https://freeresources.in/emailer/assets/img/twitter.png" alt="Twitter" title="Twitter" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;width: 90%;">
            </a>
            </td></tr>
            </tbody></table>
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px">
            <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
            <a href="javascript:void(0)" title="LinkedIn" target="_blank">
            <img src="https://freeresources.in/emailer/assets/img/linkedin.png" alt="LinkedIn" title="LinkedIn" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;width: 90%;">
            </a>
            </td></tr>
            </tbody></table>
            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
            <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
            <a href="javascript:void(0)" title="Instagram" target="_blank">
            <img src="https://freeresources.in/emailer/assets/img/instagram.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important;width: 90%;">
            </a>
            </td></tr>
            </tbody></table>
            </div>
                                          </div>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>
                                          </div>
                                          </div>
                                          </div>
                        </div>
                        </div>
                        </div>
<!------------------------- Logo & social icons ------------------------->


<?php $i=1; if(!empty($data)): foreach($data as $d): ?>

<!---------------------------------First half Row Start------------------------------------------>
								<?php if($d['id'] == $selectedPosts[0]): ?>
                                 <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                    <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                                       <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                                          <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                             <div style="background-color: #ffffff;height: 100%;width: 100% !important;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                   <!--<![endif]-->
                                                   <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                      <tbody>
                                                         <tr>
                                                            <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
														<table width="100%" cellpadding="0" cellspacing="0" border="0">
														   <tr>
														      <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">


														      	<!-- ////////////////////////////////////// -->
														         <img align="center" border="0" src="<?php echo $d['yoast_head_json']['og_image'][0]['url'] ?>" alt="image" title="image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 580px;" width="580"/>
														      </td>
														   </tr>
														</table>
                                                            </td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                   <!--[if (!mso)&(!IE)]><!-->
                                                </div>
                                                <!--<![endif]-->
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
<!---------------------------------First half Row End------------------------------------------>


<!---------------------------------First Row Start------------------------------------------>
                                 <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                    <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                                       <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                                             <div style="background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                                   <!--<![endif]-->
                                                   <table id="u_content_heading_2" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                      <tbody>
                                                         <tr>
                                                            <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:50px 10px 10px 25px;font-family:arial,helvetica,sans-serif;" align="left">
                                                               

                                                    <!-- ////////////////////////////////////// -->
													<h1 class="v-text-align v-line-height" style="margin: 0px; color: #56b847; line-height: 130%; text-align: left; word-wrap: break-word; font-size: 25px; font-weight: 400;">
														<?php $cont = strip_tags($d['title']['rendered']); echo $cont; ?>
													</h1>
                                                                     </td>
                                                                  </tr>
                                                                  </tbody>
                                                               </table>
                                                </div>
                                                <!--<![endif]-->
                                             </div>
                                          </div>
                                          <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                                          <div style="background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                          <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
                                          <table id="u_content_text_2" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                          <tr>
                                          <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:42px 10px 10px;font-family:arial,helvetica,sans-serif;" align="left">
                                          <div class="v-text-align v-line-height" style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">

                                          	<!-- ////////////////////////////////////// -->
											<p style="line-height: 140%;">
												<?php $cont = strip_tags($d['excerpt']['rendered']); echo mb_strimwidth($cont, 0, 110, '...'); ?>
											</p>
                                          </div>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>
                                          <table id="u_content_button_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                          <tbody>
                                          <tr>
                                          <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                                          <div class="v-text-align" align="left">
                                          <a href="<?php echo $d['link'] ?>" target="_blank" class="v-button" style="box-sizing: border-box;display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #56b847; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;">

                                          		<!-- ////////////////////////////////////// -->
												<span class="v-line-height" style="display:block;padding:10px 40px;line-height:120%;"><span style="line-height: 16.8px;">Read More </span></span>
                                          </a>
                                          </div>
                                          </td>
                                          </tr>
                                          </tbody>
                                          </table>
                                          <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                                          </div>
                                          </div>
                        </div>
                        </div>
                        </div>
                    <?php endif; ?>
<!---------------------------------First Row End------------------------------------------>


<?php if($d['id'] != $selectedPosts[0] && ($d['id'] == $selectedPosts[1] || $d['id'] == $selectedPosts[3] || $d['id'] == $selectedPosts[5])): ?>
<!-----------------Second Row Start------------- First image then Content ------------------>

                        <div class="u-row-container" style="padding: 0px;background-color: transparent">
                           <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                              <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                                 <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                                    <div style="background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                       <!--[if (!mso)&(!IE)]><!-->
                                       <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                          <!--<![endif]-->
                                          <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                             <tbody>
                                                <tr>
                                                   <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:30px 10px 10px;font-family:arial,helvetica,sans-serif;" align="left">
														<table width="100%" cellpadding="0" cellspacing="0" border="0">
														   <tr>
														      <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">

														      	<!-- //////////////////////////// -->
														         <img align="center" border="0" src="<?php echo $d['yoast_head_json']['og_image'][0]['url'] ?>" alt="image" title="image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 218px;" width="218"/>
														      </td>
														   </tr>
														</table>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>

                     <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                     <div style="background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                     <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
                     <table id="u_content_heading_3" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                     <tbody>
                     <tr>
                     <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px 0px;font-family:arial,helvetica,sans-serif;" align="left">

                     	<!-- ///////////////////////////////////////////// -->
						<h1 class="v-text-align v-line-height" style="margin: 0px; color: #56b847; line-height: 140%; text-align: left; word-wrap: break-word; font-size: 22px; font-weight: 700;"><?php $cont = strip_tags($d['title']['rendered']); echo $cont; ?></h1>
                     </td>
                     </tr>
                     </tbody>
                     </table>
                     <table id="u_content_text_3" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                     <tbody>
                     <tr>
                     <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:2px 10px 10px;font-family:arial,helvetica,sans-serif;" align="left">
                     <div class="v-text-align v-line-height" style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">


                     	<!-- /////////////////////////////////////////////// -->
						<p style="line-height: 140%;">
							<?php $cont = strip_tags($d['excerpt']['rendered']); echo mb_strimwidth($cont, 0, 110, '...'); ?>
						</p>
                     </div>
                     </td>
                     </tr>
                     </tbody>
                     </table>
                     <table id="u_content_button_2" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                     <tbody>
                     <tr>
                     <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                     <!--[if mso]><style>.v-button {background: transparent !important;}</style><![endif]-->
                     <div class="v-text-align" align="left">
                     <a href="<?php echo $d['link']; ?>" target="_blank" class="v-button" style="box-sizing: border-box;display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #56b847; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;">
                     	<span class="v-line-height" style="display:block;padding:10px 40px;line-height:120%;">

                     	<!-- ///////////////////////////////////////////////// -->
						<span style="line-height: 16.8px;">Read More</span></span>
                     </a>
                     <!--[if mso]></center></v:roundrect><![endif]-->
                     </div>
                     </td>
                     </tr>
                     </tbody>
                     </table>
                     <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                     </div>
                     </div>
            </div>
            </div>
            </div>

<!---------------------------------Second Row End------------------------------------------>
<?php endif; ?>


<?php if($d['id'] != $selectedPosts[0] && ($d['id'] == $selectedPosts[2] || $d['id'] == $selectedPosts[4])): ?>
<!---------------------- Third Row Start ---- First content then image ----------------------->
            <div class="u-row-container" style="padding: 0px;background-color: transparent;">
               <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                  <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                                       <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                                          <div style="background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                             <!--[if (!mso)&(!IE)]><!-->
                                             <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                                <!--<![endif]-->
                                                <table id="u_content_heading_4" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                   <tbody>
                                                      <tr>
                                                         <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px 0px 30px;font-family:arial,helvetica,sans-serif;" align="left">

                                                         	<!-- /////////////////////////////// -->
															<h1 class="v-text-align v-line-height" style="margin: 0px; color: #56b847; line-height: 140%; text-align: left; word-wrap: break-word; font-size: 22px; font-weight: 700;">
																<?php $cont = strip_tags($d['title']['rendered']); echo $cont; ?>
															</h1>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                                <table id="u_content_text_4" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                   <tbody>
                                                      <tr>
                                                         <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:2px 10px 10px 30px;font-family:arial,helvetica,sans-serif;" align="left">
                                                            <div class="v-text-align v-line-height" style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">

                                                            	<!-- ////////////////////////// -->
																<p style="line-height: 140%;">
																	<?php $cont = strip_tags($d['excerpt']['rendered']); echo mb_strimwidth($cont, 0, 110, '...'); ?>
																</p>
                                                            </div>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                                <table id="u_content_button_3" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                   <tbody>
                                                      <tr>
                                                         <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 10px 30px;font-family:arial,helvetica,sans-serif;" align="left">
                                                            <div class="v-text-align" align="left">
                                                                     <a href="<?php echo $d['link']; ?>" target="_blank" class="v-button" style="box-sizing: border-box;display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #56b847; border-radius: 4px;-webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;">
                                                                     <span class="v-line-height" style="display:block;padding:10px 40px;line-height:120%;">


                                                                     	<!-- ////////////////// -->
																		<span style="line-height: 16.8px;">Read More <?php echo $i; ?></span></span>
                                                                     </a>
                                                                     <br>
                                                            </div>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                                <!--[if (!mso)&(!IE)]><!-->
                                             </div>
                                             <!--<![endif]-->
                                          </div>
                                       </div>
                                       <div class="u-col u-col-50" style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                                          <div style="background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                             <!--[if (!mso)&(!IE)]><!-->
                                             <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                                <!--<![endif]-->
                                                <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                   <tbody>
                                                      <tr>
                                                         <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:30px 10px 10px;font-family:arial,helvetica,sans-serif;" align="left">
													<table width="100%" cellpadding="0" cellspacing="0" border="0">
													   <tr>
													      <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">


													      	<!-- ////////////////////////////////////// -->
													         <img align="center" border="0" src="<?php echo $d['yoast_head_json']['og_image'][0]['url'] ?>" alt="image" title="image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 218px;" width="218"/>
													      </td>
													   </tr>
													</table>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                                <!--[if (!mso)&(!IE)]><!-->
                                             </div>
                                             <!--<![endif]-->
                                          </div>
                                       </div>
                  </div>
               </div>
            </div>

<!---------------------------------Third Row End------------------------------------------>
<?php endif; ?>

<?php $i++; endforeach; endif; ?>

<!---------------------------------Fourth Row Start------------------------------------------>
            <div class="u-row-container" style="padding: 0px;background-color: transparent">
               <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                  <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                                       <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                                          <div style="background-color: #ffffff;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                             <!--[if (!mso)&(!IE)]><!-->
                                             <div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                                                <!--<![endif]-->
                                                <!--[if (!mso)&(!IE)]><!-->
                                             </div>
                                             <!--<![endif]-->
                                          </div>
                                       </div>
                  </div>
               </div>
            </div>

<!---------------------------------Fourth Row End------------------------------------------>



<!---------------------------------Fifth Row Start------Social Icons--------------------------->

            <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row" style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
            <div style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
            <div class="u-col u-col-100" style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
            <div style="background-color: #56b847;height: 100%;width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
            <!--[if (!mso)&(!IE)]><!--><div style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
            <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
            <tbody>
            <tr>
            <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:15px 10px 10px;font-family:arial,helvetica,sans-serif;" align="left">
            <div align="center">
            <div style="display: table; max-width:287px;">

               <p style="text-align:center;color:#fff;font-weight: 500;">© Copyright Livefit4ever 2024.</p>
            </div>
            </div>
            </td>
            </tr>
            </tbody>
            </table>

            </div><!--<![endif]-->
            </div>
            </div>
            </div>
            </div>
            </div>
<!---------------------------------Fifth Row End------------------------------------------>
            </td>
            </tr>
            </tbody>
            </table>
   </body>
</html>
