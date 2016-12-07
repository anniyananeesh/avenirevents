<?php

			$image_path = "http://" .$_SERVER["HTTP_HOST"]."/images";
			$txt_site_name = $_SERVER["HTTP_HOST"];
			$host_url = "http://" .$_SERVER["HTTP_HOST"]."/en";

$contact_email = "<body leftmargin='0' topmargin='0' style='background-color:#E2E2E2'>
<table border='0' cellSpacing='0' cellPadding='0' width='100%' leftmargin='0' topmargin='0'>
  <tbody>
    <tr>
      <td vAlign='top' align='center'><table width='700' border='0' align='center' cellpadding='0' cellspacing='0' bgColor='#E2E2E2'>
          <tr>
            <td align='left' valign='top'>&nbsp;</td>
          </tr>
          <tr>
            <td align='center' valign='top'><table width='600' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td align='left' valign='bottom' style='background-color:#4D924F;font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='background-color:#B83954'><table width='600' border='0' align='center' cellpadding='10' cellspacing='2'>
                      <tr>
                        <td align='left' valign='middle' style='font-family:Georgia;font-size:18px;color:#FFF;font-style:italic'>Ahjar Perfumes</td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle'><table width='100%' border='0' align='center' cellpadding='10' cellspacing='5' bgcolor='#FFF'>
                      <tr>
                        <td align='left' valign='top' style='color:#555'><p><font face='Verdana, Arial, Helvetica, sans-serif' size='2'><font size='5'>D</font><b>ear 
                            Administrator,</b></font></p>
                          <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>A user contacted you from <strong>$txt_site_name</strong> (Contact us Form). 
                            Please review the user's Questions/Comments.<br>
                            <br>
                            Below are details: <strong><br>
                              --------------------<br>
  <br>
  </strong><strong> Full Name :</strong> $full_name<br>
  <strong>Email :</strong> $email<br>
  <strong>Phone :</strong> $phone<br>
  <strong>Question/Comments :</strong> $comments<br />
  <br />
                            Wishing you the 
                            best.</font></p>
                          <p><font face='Verdana, Arial, Helvetica, sans-serif' size='5'>S</font><font face='Verdana, Arial, Helvetica, sans-serif' size='2'><b>incerely,</b><br />
                        <font color='#000066'><a href='http://$txt_site_name' style='color:#555'>$txt_site_name</a></font></font></p></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='background-color:#B83954;font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='background-color:#FFF'><table width='600' border='0' align='center' cellpadding='10' cellspacing='2'>
                      <tr>
                        <td align='left' valign='middle' style='font-family:Georgia;font-size:11px;color:#666;font-style:italic'>This mail is automatically sent to you by $txt_site_name. Please do not reply to this email. <br />
                          This has been generated upon request and not a part of spam mails.</td>
                      </tr>
                    </table></td>
                </tr>


                <tr>
                  <td align='left' valign='bottom'>&nbsp;</td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td align='left' valign='top'>&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </tbody>
</table>
</body>";


$reset_pwd = "<body leftmargin='0' topmargin='0' style='background-color:#E2E2E2'>
<table border='0' cellSpacing='0' cellPadding='0' width='100%' leftmargin='0' topmargin='0'>
  <tbody>
    <tr>
      <td vAlign='top' align='center'><table width='700' border='0' align='center' cellpadding='0' cellspacing='0' bgColor='#E2E2E2'>
          <tr>
            <td align='left' valign='top'>&nbsp;</td>
          </tr>
          <tr>
            <td align='center' valign='top'><table width='600' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td align='left' valign='bottom' style='background-color:#4D924F;font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='background-color:#B83954'><table width='600' border='0' align='center' cellpadding='10' cellspacing='2'>
                      <tr>
                        <td align='left' valign='middle' style='font-family:Georgia;font-size:18px;color:#FFF;font-style:italic'>Avenir Events</td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle'><table width='100%' border='0' align='center' cellpadding='10' cellspacing='5' bgcolor='#FFF'>
                      <tr>
                        <td align='left' valign='top' style='color:#555'><p><font face='Verdana, Arial, Helvetica, sans-serif' size='2'><font size='5'>D</font>ear<b> 
                            $name,</b></font></p>
                          <p>Your new password is : $rstPwd<br>
                             
                            Wishing you the 
                            best.</p>
                          <p><font face='Verdana, Arial, Helvetica, sans-serif' size='5'>S</font><font face='Verdana, Arial, Helvetica, sans-serif' size='2'><b>incerely,</b><br />
                        <font color='#000066'><a href='http://$txt_site_name' style='color:#555'>$txt_site_name</a></font></font></p></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='background-color:#B83954;font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='background-color:#FFF'><table width='600' border='0' align='center' cellpadding='10' cellspacing='2'>
                      <tr>
                        <td align='left' valign='middle' style='font-family:Georgia;font-size:11px;color:#666;font-style:italic'>This mail is automatically sent to you by $txt_site_name. Please do not reply to this email. <br />
                          This has been generated upon request and not a part of spam mails.</td>
                      </tr>
                    </table></td>
                </tr>


                <tr>
                  <td align='left' valign='bottom'>&nbsp;</td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td align='left' valign='top'>&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </tbody>
</table>
</body>";

$company_reg_email = "<body leftmargin='0' topmargin='0' style='background-color:#E2E2E2'>
<table border='0' cellSpacing='0' cellPadding='0' width='100%' leftmargin='0' topmargin='0'>
  <tbody>
    <tr>
      <td vAlign='top' align='center'><table width='700' border='0' align='center' cellpadding='0' cellspacing='0' bgColor='#E2E2E2'>
          <tr>
            <td align='left' valign='top'>&nbsp;</td>
          </tr>
          <tr>
            <td align='center' valign='top'><table width='600' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td align='left' valign='bottom' style='background-color:#4D924F;font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='background-color:#B83954'><table width='600' border='0' align='center' cellpadding='10' cellspacing='2'>
                      <tr>
                        <td align='left' valign='middle' style='font-family:Georgia;font-size:18px;color:#FFF;font-style:italic'>Avenir Events</td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle'><table width='100%' border='0' align='center' cellpadding='10' cellspacing='5' bgcolor='#FFF'>
                      <tr>
                        <td align='left' valign='top' style='color:#555'><p><font face='Verdana, Arial, Helvetica, sans-serif' size='2'><font size='5'>D</font>ear<b> 
                            $name,</b></font></p>
                          <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Thanks for registering with us<br>
                             
                            Wishing you the 
                            best.</font></p>
                          <p><font face='Verdana, Arial, Helvetica, sans-serif' size='5'>S</font><font face='Verdana, Arial, Helvetica, sans-serif' size='2'><b>incerely,</b><br />
                        <font color='#000066'><a href='http://$txt_site_name' style='color:#555'>$txt_site_name</a></font></font></p></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='background-color:#B83954;font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='background-color:#FFF'><table width='600' border='0' align='center' cellpadding='10' cellspacing='2'>
                      <tr>
                        <td align='left' valign='middle' style='font-family:Georgia;font-size:11px;color:#666;font-style:italic'>This mail is automatically sent to you by $txt_site_name. Please do not reply to this email. <br />
                          This has been generated upon request and not a part of spam mails.</td>
                      </tr>
                    </table></td>
                </tr>


                <tr>
                  <td align='left' valign='bottom'>&nbsp;</td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td align='left' valign='top'>&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </tbody>
</table>
</body>";


$registration_email = "<body leftmargin='0' topmargin='0' style='background-color:#E2E2E2'>
<table border='0' cellSpacing='0' cellPadding='0' width='100%' leftmargin='0' topmargin='0'>
  <tbody>
    <tr>
      <td vAlign='top' align='center'><table width='700' border='0' align='center' cellpadding='0' cellspacing='0' bgColor='#E2E2E2'>
          <tr>
            <td align='left' valign='top'>&nbsp;</td>
          </tr>
          <tr>
            <td align='center' valign='top'><table width='600' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td align='left' valign='bottom' style='background-color:#4D924F;font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='background-color:#B83954'><table width='600' border='0' align='center' cellpadding='10' cellspacing='2'>
                      <tr>
                        <td align='left' valign='middle' style='font-family:Georgia;font-size:18px;color:#FFF;font-style:italic'>Avenir Events</td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle'><table width='100%' border='0' align='center' cellpadding='10' cellspacing='5' bgcolor='#FFF'>
                      <tr>
                        <td align='left' valign='top' style='color:#555'><p><font face='Verdana, Arial, Helvetica, sans-serif' size='2'><font size='5'>D</font>ear<b> 
                            $full_name,</b></font></p>
                          <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>Thanks for registering with us<br>
                            <br>
                            Below are your registration details: <strong><br>
                              --------------------<br>
  <br>
  </strong><strong> Code :</strong> $code<br>
  <strong>Name :</strong> $full_name<br>
  <strong>Email :</strong> $email<br>
  <strong>Phone :</strong> $phone<br> 
  <br />
                            Wishing you the 
                            best.</font></p>
                          <p><font face='Verdana, Arial, Helvetica, sans-serif' size='5'>S</font><font face='Verdana, Arial, Helvetica, sans-serif' size='2'><b>incerely,</b><br />
                        <font color='#000066'><a href='http://$txt_site_name' style='color:#555'>$txt_site_name</a></font></font></p></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='background-color:#B83954;font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='background-color:#FFF'><table width='600' border='0' align='center' cellpadding='10' cellspacing='2'>
                      <tr>
                        <td align='left' valign='middle' style='font-family:Georgia;font-size:11px;color:#666;font-style:italic'>This mail is automatically sent to you by $txt_site_name. Please do not reply to this email. <br />
                          This has been generated upon request and not a part of spam mails.</td>
                      </tr>
                    </table></td>
                </tr>


                <tr>
                  <td align='left' valign='bottom'>&nbsp;</td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td align='left' valign='top'>&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </tbody>
</table>
</body>";


$appointment_email = "<body leftmargin='0' topmargin='0' style='background-color:#E2E2E2'>
<table border='0' cellSpacing='0' cellPadding='0' width='100%' leftmargin='0' topmargin='0'>
  <tbody>
    <tr>
      <td vAlign='top' align='center'><table width='700' border='0' align='center' cellpadding='0' cellspacing='0' bgColor='#E2E2E2'>
          <tr>
            <td align='left' valign='top'>&nbsp;</td>
          </tr>
          <tr>
            <td align='center' valign='top'><table width='600' border='0' cellspacing='0' cellpadding='0'>
                <tr>
                  <td align='left' valign='bottom' style='background-color:#4D924F;font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='background-color:#B83954'><table width='600' border='0' align='center' cellpadding='10' cellspacing='2'>
                      <tr>
                        <td align='left' valign='middle' style='font-family:Georgia;font-size:18px;color:#FFF;font-style:italic'>Ahjar Perfumes</td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle'><table width='100%' border='0' align='center' cellpadding='10' cellspacing='5' bgcolor='#FFF'>
                      <tr>
                        <td align='left' valign='top' style='color:#555'><p><font face='Verdana, Arial, Helvetica, sans-serif' size='2'><font size='5'>D</font><b>ear 
                            Administrator,</b></font></p>
                          <p><font size='2' face='Verdana, Arial, Helvetica, sans-serif'>A user requested an appointment from <strong>$txt_site_name</strong> (Appointment Form). 
                            Please review the user's Questions/Comments.<br>
                            <br>
                            Below are details: <strong><br>
                              --------------------<br>
  <br>
  </strong><strong> Full Name :</strong> $full_name<br>
  <strong>Email :</strong> $email<br>
  <strong>Phone :</strong> $phone<br>
  <strong>Appointment Date :</strong> $appointment_date<br>
  <strong>Prefered Time :</strong> $preferred_time<br>
  <strong>Question/Comments :</strong> $comments<br />
  <br />
                            Wishing you the 
                            best.</font></p>
                          <p><font face='Verdana, Arial, Helvetica, sans-serif' size='5'>S</font><font face='Verdana, Arial, Helvetica, sans-serif' size='2'><b>incerely,</b><br />
                        <font color='#000066'><a href='http://$txt_site_name' style='color:#555'>$txt_site_name</a></font></font></p></td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='background-color:#B83954;font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='bottom' style='font-size:2px;height:2px;'>&nbsp;</td>
                </tr>
                <tr>
                  <td align='left' valign='middle' style='background-color:#FFF'><table width='600' border='0' align='center' cellpadding='10' cellspacing='2'>
                      <tr>
                        <td align='left' valign='middle' style='font-family:Georgia;font-size:11px;color:#666;font-style:italic'>This mail is automatically sent to you by $txt_site_name. Please do not reply to this email. <br />
                          This has been generated upon request and not a part of spam mails.</td>
                      </tr>
                    </table></td>
                </tr>


                <tr>
                  <td align='left' valign='bottom'>&nbsp;</td>
                </tr>
              </table></td>
          </tr>
          <tr>
            <td align='left' valign='top'>&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </tbody>
</table>
</body>";

?>