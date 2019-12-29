<?php
/////////////////////////////////////////////////////////////////////////////////////
// xbtit - Bittorrent tracker/frontend
//
// Copyright (C) 2004 - 2019  xbtitFM Team
//
//    This file is part of xbtitFM.
//
// Redistribution and use in source and binary forms, with or without modification,
// are permitted provided that the following conditions are met:
//
//   1. Redistributions of source code must retain the above copyright notice,
//      this list of conditions and the following disclaimer.
//   2. Redistributions in binary form must reproduce the above copyright notice,
//      this list of conditions and the following disclaimer in the documentation
//      and/or other materials provided with the distribution.
//   3. The name of the author may not be used to endorse or promote products
//      derived from this software without specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED
// WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
// MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
// IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
// TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
// PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
// LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
// NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
// EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//
////////////////////////////////////////////////////////////////////////////////////
$language['DELETE_READED']='Kinnita';
$language['USER_LANGUE']='Keel';
$language['USER_STYLE']='Stiil';
$language['CURRENTLY_PEER']='You&rsquo;re currently seeding or leeching some torrent.';
$language['STOP_PEER']='Peate oma kliendi seiskama.';
$language['USER_PWD_AGAIN']='Korda salasõna';
$language['EMAIL_FAILED']='E-posti saatmine ebaõnnestus!';
$language['NO_SUBJECT']='Teemat puudub';
$language['MUST_ENTER_PASSWORD']='<br /><font color="#FF0000"><strong>Ülaltoodud sätete muutmiseks peate sisestama oma salasõna.</strong></font>';
$language['ERR_PASS_WRONG']='Salasõna on tühi või vale, profiili ei saa värskendada.';
$language['MSG_DEL_ALL_PM']='Kui valite PM-d, mida ei loeta, siis neid ei kustutata';
$language['ERR_PM_GUEST']='Te ei saa saata PM-i külalistele ega endale!';


//INVITATION SYSTEM
global $SITENAME, $BASEURL, $SITEEMAIL, $btit_settings;

$language['ACCOUNT_CONFIRMED']='Konto on kinnitatud';
$language['CONFIRMED']='Kinnitatud';
$language['DATE_SENT']='Date Sent';
$language['ERR_EMAIL_ALREADY_EXISTS']='This e-mail address already exists in our database.';
$language['ERR_INVITATIONS_OFF']='Sorry, invitation system is deactivated.';
$language['MISSING_DATA']='Missing information!<br />Please, fill in all necessary fields.';
$language['INSERT_EMAIL']='Empty e-mail address field!';
$language['INSERT_MESSAGE']='Empty personal message field!';
$language['INVIT_CONFIRM']='Invitation Confirmed';
$language['INVIT_MSG']='Hello,'."\n\n".'You have been invited to join the '.$SITENAME.' community by';
$language['INVIT_MSG1']="\n\n".'If you want to accept this invitation, you\'ll need to click this link:'."\n\n".'';
$language['INVIT_MSG2']="\n\n".'You\'ll need to accept the invitation within '.$btit_settings['invitation_expires'].' days or else the link will become inactive.'."\n\n".'We at '.$SITENAME.' hope that you\'ll accept the invitation and join our great community!'."\n\n".'Personal message from';
$language['INVIT_MSG3']="\n\n".'----------------'."\n\n".'If you do not know the person who has invited you, please forward this email to '.$SITEEMAIL;
$language['INVIT_MSGCONFIRM']='Hello,'."\n".'Your account has been confirmed. You can now visit'."\n\n".$BASEURL.'/index.php?page=login'."\n\n".'and use your login information to log in. We hope you\'ll read the FAQ\'s and Rules before you start sharing files.'."\n\n".'Good luck and have fun on '.$SITENAME.'!'."\n\n\n".'----------------'."\n\n".'If you did not register for '.$SITENAME.', please forward this email to '.$SITEEMAIL;
$language['INVITATIONS']='Invitations';
$language['INVITE_SOMEONE_TO']='Send Invitation';
$language['MEMBERS_INVITED_BY']='Members Invited By You';
$language['MESSAGE']='Message';
$language['MNU_UCP_INVITATIONS']='Invitations';
$language["MNU_UCP_TOOLS"]='Tools';
$language['NO_INV']='No invitations left.';
$language['NO_INVITATIONS_OUT']='No invitations sent.';
$language['NO_NEED_CONFIRM_YET']='No invitations to confirm.';
$language['PENDING']='Pending';
$language['REMAINING']='Remaining';
$language['SENT_INVITATIONS']='Sent Invitations';
$language['STATUS']='Olek';
$language['WELCOME_UCP_INVITE']='Tere tulemast oma kutsete paneeli.<br />Siin võite saata kutseid, et teie sõbrad saaksid registreeruda meie saidil '.$SITENAME.'.<br />';

$language["HOS_HIDE_STATUS"] = "Peida kohalolek";

$language["TORRENTBAR"]="Torrent Bar";

$language["PM_BANNED"] = "Teil on PM süsteem keelatud!";
//sig sync
$language['SYNC_SIG']='Sünkrooni allkiri foorumisse?';
$language['SYNC_AV']='Sünkrooni avatar foorumi?';
$language['SIG']='Allkiri ([img]http://imageurl[/img])';
$language['SIG_PREV']='Allkirja eelvaade';
$language['SIG_CP']='Allkiri';
$language['SIG_EX']='Veel kasutaja sätteid'; # changed to take care of the other links in the menu which are friendlist, invitations & avatar upload so they are the same as in the dropdown menu # TT #

$language["MNU_UCP_AVATAR"] = "Avatari üleslaadimine";
$language["AVATAR_SUCCESS"] = "Avatar on edukalt üles laaditud!";
$language["AVATAR_FAILURE1"] = "Viga. Pildi suurus oli liiga suur! Mõõtmed on";
$language["AVATAR_FAILURE2"] = "Viga. Faili suurus oli liiga suur! Limiit on";
$language["AVATAR_FAILURE3"] = "Viga. Ilmnenud on teadmata põhjus!";
$language["AV_FEW_HEAD"] = "Avatari üleslaadimise reeglid";
$language["AV_FILE_SIZE"] = "Ärge laadige üles pilte, mis on suuremad kui";
$language["AV_IMAGE_SIZE"] = "Ärge laadige üles pilte, mis on suuremad kui";
$language["AV_FORBIDDEN"] = "Ärge laadige üles solvavat materjali";
$language["AV_NO_HEADER"] = "Olete juba pildi üles laadinud. Te ei saa enam pilte üles laadida.";
$language["AV_NO_1"] = "Laadisite hiljuti üles";
$language["AV_NO_2"] = "Kustutage see fail";
$language["AV_NO_3"] = "Link failile";

$language["UN_INV_SENT"] = "Invitation sent to";
$language["UN_INV_CONF"] = "has confirmed the registration of";

$language["PR_SHOW"] = "Kuva";
$language["PR_HIDE"] = "Peida";
$language["PROFILEVIEW"] = "Kuva/Peida Profiil";

$language["ADVRSS_CATLIST"]="Custom RSS Categories";
$language["ADVRSS_LIMIT"]="Custom RSS limit per category";
$language["ADVRSS_YOUR_FEED"]="Your custom RSS feed";
$language["DEF_CATS"]="Vaikimisi kategooriad:";
$language["MAR"]="Märgi loetuks";

$language["SUBSCRIBE"]="Torrent's Subscription";
$language["SUB_OK"]="You successfull subscribe torrent's upload for <a href=\"index.php?page=usercp&amp;do=subscribe&amp;action=change&amp;uid=".$CURUSER["uid"]."\">categories selected</a>";
$language["SUB_SUBJECT"]="Torrent's Subscription On $SITENAME";
$language["SUB_EMAIL"]="Hello,\nA new torrent \"%s\" has been uploaded in a category you subscript\n\nDetails: %s\nDownload: %s\n\nHappy Download\n$SITENAME";

?>