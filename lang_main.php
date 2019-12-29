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

global $users, $torrents, $seeds, $leechers, $percent, $FORUMLINK, $BASEURL, $SITENAME;

// $language['rtl']='rtl'; // if your language is  right to left then uncomment this line
// $language['charset']='ISO-8859-1'; // uncomment this line with specific language charset if different than tracker's one

$language['ACCOUNT_CONFIRM']='Konto kinnitus '.$SITENAME.' lehel.';
$language['ACCOUNT_CONGRATULATIONS']='Õnnitleme, et teie konto on nüüd kehtiv!<br />Nüüd sa saad <a href="index.php?page=login">sisse logida</a> oma kontoga.';
$language['ACCOUNT_CREATE']='Loo konto';
$language['ACCOUNT_DELETE']='Kustuta konto';
$language['ACCOUNT_DETAILS']='konto üksikasjad';
$language['ACCOUNT_EDIT']='Redigeeri kontot';
$language['ACCOUNT_MGMT']='Konto haldamine';
$language['ACCOUNT_MSG']='Tere,'."\n\n".'See kiri saadeti, kuna keegi on taotlenud meie saidil selle e-posti aadressiga kontot.'."\n".'Kui te ei soovi seda ignoreerida, siis kinnitage konto.'."\n\n".'Parimate soovidega, meeskond.';
$language['ACTION']='Tegevus';
$language['ACTIVATED']='Aktiivne';
$language['ACTIVE']='Olek';
$language['ACTIVE_ONLY']='Ainult aktiivne';
$language['ADD']='Lisa';
$language['ADDED']='Lisatud';
$language['ADMIN_CPANEL']='Administraatori juhtpaneel';
$language['ADMINCP_NOTES']='Siin saate oma träkkeri kõiki sätteid reguleerida...';
$language['ALL']='Kõik';
$language['ALL_SHOUT']='All Shouts';
$language['ANNOUNCE_URL']='Tracker announce url:';
$language['ANONYMOUS']='Anonüümne';
$language['ANSWER']='Vastus';
$language['AUTHOR']='Autor';
$language['AVATAR_URL']='Profiilipilt (url): ';
$language['AVERAGE']='Keskmine';
$language['BACK']='Tagasi';
$language['BACK_LIST']='Tagasi torrentide loendisse';
$language['BAD_ID']='Vale ID!';
$language['BCK_USERCP']='Tagasi kasutajapaneeli';
$language['BLOCK']='Blokeeri';
$language['BODY']='Body';
$language['BOTTOM']='alt';
$language['BY']='By';
$language['CANT_DELETE_ADMIN']='It&rsquo;s teist administraatorit pole võimalik kustutada!';
$language['CANT_DELETE_NEWS']='You&rsquo;re pole õiguseid, kustuta uudised!';
$language['CANT_DELETE_TORRENT']='You&rsquo;re pole õiguseid seda torrenti kustutama!...';
$language['CANT_DELETE_USER']='You&rsquo;re pole õiguseid kasutajaid kustutada!';
$language['CANT_DO_QUERY']='Can&rsquo;t tee SQL päringut - ';
$language['CANT_EDIT_TORR']='You&rsquo;re pole luba torrenti redigeerida!';
$language['CANT_FIND_TORRENT']='Can&rsquo;t torrent faili leidmine!';
$language['CANT_READ_LANGUAGE']='Can&rsquo;t lugege keelefaili!';
$language['CANT_SAVE_CONFIG']='Can&rsquo;t salvestage seaded faili config.php';
$language['CANT_SAVE_LANGUAGE']='Can&rsquo;t salvestage keelefail';
$language['CANT_WRITE_CONFIG']='Hoiatus: couldn&rsquo;t write config.php!';
$language['CATCHUP']='Märgi kõik loetuks';
$language['CATEGORY']='Kat.';
$language['CATEGORY_FULL']='Kategooria';
$language['CENTER']='keskel';
$language['CHANGE_PID']='Muutke PID';
$language['CHARACTERS']='characters';
$language['CHOOSE']='Valige';
$language['CHOOSE_ONE']='vali üks';
$language['CLICK_HERE']='kliki siia';
$language['CLOSE']='sulge';
$language['COMMENT']='Kom.';
$language['COMMENT_1']='Kommenteeri';
$language['COMMENT_PREVIEW']='Comment&rsquo;s Eelvaade';
$language['COMMENTS']='Kommentaarid';
$language['CONFIG_SAVED']='Palju õnne, uus konfiguratsioon salvestati edukalt';
$language['COUNTRY']='Riik';
$language['CURRENT_DETAILS']='Praegused üksikasjad';
$language['DATABASE_ERROR']='Andmebaasi viga.';
$language['DATE']='Kuupäev';
$language['DB_ERROR_REQUEST']='Andmebaasi viga. Taotlust ei saa täita.';
$language['DB_SETTINGS']='Database&rsquo;s seaded';
$language['DEAD_ONLY']='Ainult surnud';
$language['DELETE']='Kustuta';
$language['DELETE_ALL_READED']='Kustuta kõik loetud';
$language['DELETE_CONFIRM']='Kas soovite selle kindlasti kustutada/eemaldada?';
$language['DELETE_TORRENT']='Kustuta Torrent';
$language['DELFAILED']='Kustutamine ebaõnnestus';
$language['DESCRIPTION']='Kirjeldus';
$language['DONT_NEED_CHANGE']='Peate don&rsquo;t sätteid muutma!';
$language['DOWN']='Al';
$language['DOWNLOAD']='Lae alla';
$language['DOWNLOAD_TORRENT']='Laadige alla Torrent';
$language['DOWNLOADED']='Alla laaditud';
$language['EDIT']='Redigeeri';
$language['EDIT_LANGUAGE']='Redigeeri keelt';
$language['EDIT_POST']='Redigeeri postitust';
$language['EDIT_TORRENT']='Redigeeri Torrenti';
$language['EMAIL']='E-post';
$language['EMAIL_SENT']='Näidatud e-posti aadressile on saadetud e-kiri<br />oma konto kinnitamiseks klõpsake lisatud lingil.';
$language['EMAIL_VERIFY']='e-posti konto värskendus aadressil '.$SITENAME;
$language['EMAIL_VERIFY_BLOCK']='Kinnituskiri on saadetud';
$language['EMAIL_VERIFY_MSG']='Tere,'."\n\n".'See meilisõnum on saadetud, kuna olete taotlenud muudatust e-posti aadressile, mida hetkel säilitatakse. Klõpsake muudatuse täitmiseks alloleval lingil.'."\n\n".'Parimate soovidega, meeskond.';
$language['EMAIL_VERIFY_SENT1']='<br /><center>Kinnitusmeil on saadetud aadressile:<br /><br /><strong><font color="red">';
$language['EMAIL_VERIFY_SENT2']='</font></strong><br /><br />Tellimiseks peate klõpsama e-kirjas kaasas olevale lingile<br />et värskendada oma e-posti aadressi. E-kiri peaks saabuma 10 minuti jooksul<br />(tavaliselt kohe), ehkki mõned e-posti pakkujad võivad selle rämpspostiks märkida<br />nii et kontrollige kindlasti oma rämpsposti kausta can&rsquo;t.<br /><br />';
$language['ERR_500']='HTTP/1.0 500 Volitamata juurdepääs!';
$language['ERR_AVATAR_EXT']='Kahjuks on pilt doesn&rsquo;t olemas või failitüüp on vale (lubatud on ainult gif-, jpg-, bmp- või png-pildid).';
$language['ERR_BAD_LAST_POST']='';
$language['ERR_BAD_NEWS_ID']='Vigane uudise ID!';
$language['ERR_BODY_EMPTY']='Body cannot be empty!';
$language['ERR_CANT_CONNECT']='Can&rsquo;t ühendage kohaliku MySQL serveriga';
$language['ERR_CANT_OPEN_DB']='Can&rsquo;t avatud andmebaas';
$language['ERR_COMMENT_EMPTY']='Kommentaar ei tohi olla tühi!';
$language['ERR_DB_ERR']='Andmebaasi viga. Selle kohta pöörduge administraatori poole.';
$language['ERR_DELETE_POST']='Kustuta postitus. Tervislikkuse kontroll: kavatsete postituse kustutada. Klõpsake nuppu';
$language['ERR_DELETE_TOPIC']='Kustuta teema. Tervise mõistlikkuse kontroll: kustutate teemat. Klõpsake nuppu';
$language['ERR_EMAIL_ALREADY_EXISTS']='See meil on juba meie andmebaasis!';
$language['ERR_EMAIL_NOT_FOUND_1']='E-posti aadress';
$language['ERR_EMAIL_NOT_FOUND_2']='andmebaasist ei leitud.';
$language['ERR_ENTER_NEW_TITLE']='Peate sisestama uue pealkirja!';
$language['ERR_FORUM_NOT_FOUND']='Foorumit ei leitud';
$language['ERR_FORUM_UNKW_ACT']='Foorumi viga: tundmatu toiming';
$language['ERR_GUEST_EXISTS']='"Külaline" on piiratud kasutajanimi. Te ei saa registreeruda kui "Külaline"';
$language['ERR_IMAGE_CODE']='Turvakood ei kattu';
$language['ERR_INS_TITLE_NEWS']='Peate sisestama mõlemad pealkirjad JA uudised';
$language['ERR_INV_NUM_FIELD']='Vale numbriväli(väljad) kliendilt';
$language['ERR_INVALID_CLIENT_EVENT']='Kehtetu sündmus= kliendilt.';
$language['ERR_INVALID_INFO_BT_CLIENT']='BitTorrenti kliendilt saadud vigane teave';
$language['ERR_INVALID_IP_NUMB']='Vale IP-aadress. Peab olema standardne punktiline koma (hostinimed pole lubatud)';
$language['ERR_LEVEL']='Vabandust, teie tase ';
$language['ERR_LEVEL_CANT_POST']='Teil ei ole lubatud selles foorumis postitada.';
$language['ERR_LEVEL_CANT_VIEW']='Teil ei ole seda teemat lubatud vaadata.';
$language['ERR_MISSING_DATA']='Puuduvad andmed!';
$language['ERR_MUST_BE_LOGGED_SHOUT']='You must be logged in to shout...';
$language['ERR_NO_BODY']='No body text';
$language['ERR_NO_NEWS_ID']='New&rsquo;s ID-d ei leitud!';
$language['ERR_NO_POST_WITH_ID']='ID-ga postitust pole ';
$language['ERR_NO_SPACE']='Teie kasutajanimi ei tohi sisaldada tühikut, palun asendage tühik nt allkriipsuga:<br /><br />';
$language['ERR_NO_TOPIC_ID']='Teema ID-d ei tagastatud';
$language['ERR_NO_TOPIC_POST_ID']='Postituse ID-ga pole seotud ühtegi teemat';
$language['ERR_NOT_AUTH']='You&rsquo;re pole volitatud!';
$language['ERR_NOT_FOUND']='Ei leitud...';
$language['ERR_NOT_PERMITED']='Pole lubatud';
$language['ERR_PASS_LENGTH_1']='Teie salasõna peab olema vähemalt';
$language['ERR_PASS_LENGTH_2']='tähemärki pikk.';
$language['ERR_PASSWORD_INCORRECT']='Salasõna on vale';
$language['ERR_PERM_DENIED']='Õigused puuduvad';
$language['ERR_PID_NOT_FOUND']='Laadige torrent uuesti alla. PID süsteem on aktiivne ja seda torrentist ei leitud';
$language['ERR_RETR_DATA']='Viga andmete hankimisel!';
$language['ERR_SEND_EMAIL']='Meilisõnumeid ei saa saata. Selle vea kohta pöörduge administraatori poole.';
$language['ERR_SERVER_LOAD']='Serveri koormus on praegu väga suur. Palun oodake ja proovige uuesti...';
$language['ERR_SPECIAL_CHAR']='<font color="black">Teie kasutajanimi ei tohi sisaldada erimärke, näiteks:<br /><br /><font color="red"><strong>* &#63; &#60; &#62; &#64; &#36; &#38; &#37; jne.</strong></font></font><br />';
$language['ERR_SQL_ERR']='SQL Viga';
$language['ERR_SUBJECT']='Peate sisestama teema.';
$language['ERR_TOPIC_ID_NA']='Teema ID puudub';
$language['ERR_TOPIC_LOCKED']='Teema on lukus';
$language['ERR_TORRENT_IN_BROWSER']='See fail on mõeldud BitTorrenti klientidele.';
$language['ERR_UPDATE_USER']='Kasutaja andmeid ei saa värskendada. Selle vea kohta pöörduge administraatori poole.';
$language['ERR_USER_ALREADY_EXISTS']='There&rsquo;s selle nimega kasutaja on olemas!';
$language['ERR_USER_NOT_FOUND']='Vabandust, kasutajat ei leitud';
$language['ERR_USER_NOT_USER']='You&rsquo;re ei ole õiguseid teisele user&rsquo;s paneelile juurde pääsema!';
$language['ERR_USERNAME_INCORRECT']='Kasutajanimi on vale';
$language['ERROR']='Viga';
$language['ERROR_ID']='Vea ID';
$language['FACOLTATIVE']='valikuline';
$language['FILE']='Fail';
$language['FILE_CONTENTS']='Faili sisu';
$language['FILE_NAME']='Faili nimi';
$language['FIND_USER']='Leia kasutaja';
$language['FINISHED']='Valmis';
$language['FORUM']='Foorum';
$language['FORUM_ERROR']='Foorumi viga';
$language['FORUM_INFO']='Foorumi teave';
$language['FORUM_MIN_CREATE']='Min klassi loomine';
$language['FORUM_MIN_READ']='Min klassi lugemine';
$language['FORUM_SEARCH']='Foorumite otsing';
$language['FORUM_N_TOPICS']='N. Teemad';
$language['FORUM_N_POSTS']='N. Postitused';
$language['FRM_DELETE']='Kustuta';
$language['FRM_LOGIN']='Logi sisse';
$language['FRM_PREVIEW']='Eelvaade';
$language['FRM_REFRESH']='Värskenda';
$language['FRM_RESET']='Lähtesta';
$language['FRM_SEND']='Saada';
$language['FRM_CONFIRM']='Kinnita';
$language['FRM_CANCEL']='Tühista';
$language['FRM_CLEAN']='Puhas';
$language['GLOBAL_SERVER_LOAD']='Globaalne serveri koormus (kõik praeguse serveri veebisaidid)';
$language['GO']='Mine';
$language['GROUP']='Grupp';
$language['GUEST']='Külaline';
$language['GUESTS']='Külalised';
$language['HERE']='siin';
$language['HISTORY']='Ajalugu';
$language['IF_YOU_ARE_SURE']='kui olete kindel.';
$language['IM_SURE']='I&rsquo;m Kindel';
$language['IN']='sisse';
$language['INF_CHANGED']='Informatsioon on muutunud!';
$language['INFINITE']='Inf.';
$language['INFO_HASH']='Info Hash';
$language['INS_NEW_PWD']='Sisestage uus salasõna!';
$language['INS_OLD_PWD']='Sisestage vana salasõna!';
$language['INSERT_DATA']='Sisestage kõik üleslaadimiseks vajalikud andmed.';
$language['INSERT_NEW_FORUM']='Sisestage uus foorum';
$language['INVALID_ID']='It&rsquo;s pole kehtiv ID. Vabandust!';
$language['INVALID_INFO_HASH']='Kehtetu teabe räsi väärtus.';
$language['INVALID_PID']='Vale PID';
$language['INVALID_TORRENT']='Träkkeri viga: vigane torrent';
$language['KEYWORDS']='Märksõnad';
$language['LAST_EXTERNAL']='Viimane välise torrentide värskendus tehti ';
$language['LAST_NEWS']='Viimased uudised';
$language['LAST_POST_BY']='Viimane postitus kasutajalt';
$language['LAST_SANITY']='Viimane mõistlikkuse kontroll tehti ';
$language['LAST_TORRENTS']='Viimased torrentid';
$language['LAST_UPDATE']='Viimane uuendus';
$language['LASTPOST']='Viimane postitus';
$language['LEECHERS']='tõmbajad';
$language['LEFT']='vasak';
$language['LOGIN']='Logi sisse';
$language['LOGOUT']='Logi välja';
$language['MAILBOX']='Sõnumid';
$language['MANAGE_NEWS']='Halda uudiseid';
$language['MEMBER']='Kasutaja';
$language['MEMBERS']='Kasutajaid';
$language['MEMBERS_LIST']='Kasutajalist';
$language['MINIMUM_100_DOWN']='(allalaaditud vähemalt 100 MB)';
$language['MINIMUM_5_LEECH']='vähemalt 5 tõmbajaga, välja arvatud surnud torrent';
$language['MINIMUM_5_SEED']='minimaalselt 5 jagajat';
$language['MKTOR_INVALID_HASH']='makeTorrent: Saadi kehtetu räsi';
$language['MNU_ADMINCP']='Admin Paneel';
$language['MNU_ANNOUNCEMENT']='Meeskonna Teated';
$language['MNU_FORUM']='Foorum';
$language['MNU_HOME']='Avaleht';
$language['MNU_MEMBERS']='Liikmed';
$language['MNU_NEWS']='Uudised';
$language['MNU_STATS']='Lisastatistika';
$language['MNU_TORRENT']='Torrentid';
$language['MNU_UCP_CHANGEPWD']='Muuda salasõna';
$language['MNU_UCP_HOME']='User&rsquo;s CP Home';
$language['MNU_UCP_IN']='Sinu PM sisse';
$language['MNU_UCP_INFO']='Muuda profiili';
$language['MNU_UCP_NEWPM']='Uus PM';
$language['MNU_UCP_OUT']='Sinu PM välja';
$language['MNU_UCP_PM']='Sinu PM kast';
$language['MNU_UPLOAD']='Laadi torrent';
$language['MNU_HNR_Cleaner']='HitnRun Puhastaja';
$language['MNU_CHATSPY']='Chat Spy';
$language['MNU_REP']='Maine';
$language['MORE_SMILES']='Veel emotikone';
$language['MORE_THAN']='Rohkem kui ';
$language['MORE_THAN_2']='leitud üksused, kuvatakse esimesena';
$language['NA']='N/A';
$language['NAME']='Nimi';
$language['NEED_COOKIES']='Märkus: Sisselogimiseks peate lubama küpsised.';
$language['NEW_COMMENT']='Lisage oma kommentaar...';
$language['NEW_COMMENT_T']='Uus kommentaar';
$language['NEWS']='uudised';
$language['NEWS_DESCRIPTION']='Uudised:';
$language['NEWS_INSERT']='Sisestage oma uudised';
$language['NEWS_PANEL']='Uudistepaneel';
$language['NEWS_TITLE']='Pealkiri:';
$language['NEXT']='Järgmine';
$language['NO']='Ei';
$language['NO_BANNED_IPS']='Keelatud IP puuduvad';
$language['NO_COMMENTS']='Kommentaarid puuduvad...';
$language['NO_FORUMS']='Foorumeid ei leitud!';
$language['NO_MAIL']='teil pole uut posti.';
$language['NO_MESSAGES']='PM-i ei leitud...';
$language['NO_NEWS']='pole uudiseid';
$language['NO_PEERS']='Pole peerusi';
$language['NO_RECORDS']='Vabandust, nimekiri on tühi...';
$language['NO_TOPIC']='Teemasid ei leitud';
$language['NO_TORR_UP_USER']='Selle kasutaja üles laaditud torrentit pole';
$language['NO_TORRENTS']='Pole siin ühtegi torrenti...';
$language['NO_USERS_FOUND']='Kasutajaid ei leitud!';
$language['NOBODY_ONLINE']='Kedagi ei ole kohal';
$language['NONE']='Puudub';
$language['NOT_ALLOW_ACCESS']='Sorry You don&rsquo;t have Permission to access this page!!!!';
$language['NOT_ADMIN_CP_ACCESS']='You&rsquo;re not authorized to access the admin panel!';
$language['NOT_ALLOW_DOWN']='ei ole lubatud alla laadida';
$language['NOT_AUTH_DOWNLOAD']='You&rsquo;re ei ole allalaadimiseks õiguseid. Vabandust...';
$language['NOT_AUTH_VIEW_NEWS']='You&rsquo;re ei ole õiguseid vaadata uudiseid!';
$language['NOT_AUTHORIZED']='You&rsquo;re ei ole õiguseid vaadata';
$language['NOT_AUTHORIZED_UPLOAD']='You&rsquo;re ei ole üleslaadimiseks õiguseid!';
$language['NOT_AVAILABLE']='N/A';
$language['NOT_MAIL_IN_URL']='See ei olnud e-posti aadress, mis selles URL-is oli';
$language['NOT_POSS_RESET_PID']='It&rsquo;s PID-i ei ole võimalik lähtestada! <br />Võtke ühendust administraatoriga...';
$language['NOW_LOGIN']='Nüüd küsitakse sinult sisselogimist';
$language['NUMBER_SHORT']='#';
$language['OLD_PWD']='Vana salasõna';
$language['ONLY_REG_COMMENT']='Kommentaare saavad lisada ainult registreeritud kasutajad!';
$language['OPT_DB_RES']='Andmebaasi tulemuse optimeerimine';
$language['OPTION']='Võimalus';
$language['PASS_RESET_CONF']='parooli lähtestamise kinnitus';
$language['PEER_CLIENT']='Klient';
$language['PEER_COUNTRY']='Riik';
$language['PEER_ID']='Peer ID';
$language['PEER_LIST']='Peers List';
$language['PEER_PORT']='Port';
$language['PEER_PROGRESS']='Edusammud';
$language['PEER_STATUS']='Olek';
$language['PEERS']='peers';
$language['PEERS_DETAILS']='Klõpsake siin, et vaadata peerude üksikasju';
$language['PICTURE']='Pilt';
$language['PID']='PID';
$language['PLEASE_WAIT']='Palun oota...';
$language['PM']='PM';
$language['POSITION']='Asend';
$language['POST_REPLY']='Saada vastus';
$language['POSTED_BY']='Postitas';
$language['POSTED_DATE']='Postitatud';
$language['POSTS']='Postitusi';
$language['POSTS_PER_DAY']='%s postitusi päevas';
$language['POSTS_PER_PAGE']='Postitusi ühel lehel';
$language['FORUM_BANNED']='Foorum keelatud';
$language['PREVIOUS']='Eelmine';
$language['PRIVATE_MSG']='Privaatsõnum';
$language['PWD_CHANGED']='Salasõna muudetud!';
$language['QUESTION']='Küsimus';
$language['QUICK_JUMP']='Kiirhüpe';
$language['QUOTE']='Tsiteeri';
$language['RANK']='Rank';
$language['RATIO']='Suhe';
$language['REACHED_MAX_USERS']='Maksimaalne kasutajate arv on saavutatud';
$language['READED']='Loe';
$language['RECEIVER']='Vastuvõtja';
$language['RECOVER_DESC']='Kasutage allolevat vormi, et salasõna lähtestada ja konto andmed teile tagasi saata.<br />(Peate vastama kinnitusmeilile.)';
$language['RECOVER_PWD']='Salasõna taastamine';
$language['RECOVER_TITLE']='Unustatud kasutajanime või salasõna taastamine';
$language['REDIRECT']='if your browser doesn&rsquo;t have javascript enabled, click';
$language['REDIRECT2']='If your browser doesn&rsquo;t have javascript enabled, click <a href="%s">here</a>.';
$language['REDOWNLOAD_TORR_FROM']='Laadige torrent alla saidilt';
$language['REGISTERED']='Registreeritud';
$language['REGISTERED_EMAIL']='Registreeritud meiliaadress';
$language['REMOVE']='Eemalda';
$language['REPLIES']='Vastused';
$language['REPLY']='Vasta';
$language['RESULT']='Tulemus';
$language['RETRY']='Uuesti proovima';
$language['RETURN_TORRENTS']='Tagasi torrentite nimekirja juurde';
$language['REVERIFY_CONGRATS1']='<center><br />Palju õnne, teie e-posti aadress on kinnitatud ja edukalt muudetud<br /><br /><strong>Alates: <font color="red">';
$language['REVERIFY_CONGRATS2']='</strong></font><br /><strong>Kuni: <font color="red">';
$language['REVERIFY_CONGRATS3']='</strong></font><br /><br />';
$language['REVERIFY_FAILURE']='<center><br /><strong><font color="red"><u>Vabandame, kuid see URL ei ole kehtiv</u></strong></font><br /><br />Iga kord, kui proovite oma e-posti muuta, genereeritakse uus juhuslik number<br />kui you&rsquo;re seda sõnumit näeb, siis you&rsquo;ve püüdis tõenäoliselt teie e-posti aadressi muuta<br />more than once and you are using an old url.<br /><br /><strong>Please wait until you&rsquo;re absolutely sure you haven&rsquo;t received the new<br />verification email before attempting to change your email again.</strong><br /><br />';
$language['REVERIFY_MSG']='If you attempt to change your email address you will be sent a verification link to the email address you wish to change it to.<br /><br /><font color="red"><strong>The email address on your record will not update until you verify the new address by clicking the link.</strong></font>';
$language['RIGHT']='right';
$language['SEARCH']='Otsing';
$language['SEEDERS']='jagajaid';
$language['SEEN']='Nähtud';
$language['SELECT']='Valige...';
$language['SENDER']='Saatja';
$language['SENT_ERROR']='Saatmise Viga';
$language['SHORT_C']='C'; //Shortname for Completed
$language['SHORT_L']='L'; //Shortname for Leechers
$language['SHORT_S']='S'; //Shortname for Seeders
$language['SHOUTBOX']='ShoutBox';
$language['SIZE']='Suurus';
$language['SORRY']='Vabandust';
$language['SORTID']='Sortid';
$language['SPEED']='Kiirus';
$language['STICKY']='Kleeps';
$language['SUB_CATEGORY']='Alamkategooria';
$language['SUBJECT']='Teema';
$language['SUBJECT_MAX_CHAR']='Teema on piiratud ';
$language['SUC_POST_SUC_EDIT']='Postitust muudeti edukalt.';
$language['SUC_SEND_EMAIL']='Kinnitusmeil saadeti aadressile';
$language['SUC_SEND_EMAIL_2']='Palun oodake mõni minut, kuni kiri saabub.';
$language['SUCCESS']='Edukas';
$language['SUMADD_BUG']='Tracker bug calling summaryAdd';
$language['TABLE_NAME']='Tabeli nimi';
$language['TIMEZONE']='Ajatsoon';
$language['TITLE']='Pealkiri';
$language['TOP']='top';
$language['TOP_10_ACTIVE']='Kõige aktiivsemat 10 torrenti';
$language['TOP_10_BEST_SEED']='10 parimalt jagatud torrenti';
$language['TOP_10_BSPEED']='10 Torrents Best Speed';
$language['TOP_10_DOWNLOAD']='Allalaadijate TOP 10';
$language['TOP_10_SHARE']='Top 10 Best Sharers';
$language['TOP_10_UPLOAD']='Üleslaadijate TOP 10';
$language['TOP_10_WORST']='Top 10 Worst Sharers';
$language['TOP_10_WORST_SEED']='10 Torrents Worst Seeders';
$language['TOP_10_WSPEED']='10 Torrents Worst Speed';
$language['TOP_TORRENTS']='Most Popular Torrents';
$language['TOPIC']='Teema';
$language['TOPICS']='Teemasid';
$language['TOPICS_PER_PAGE']='Teemasid lehe kohta';
$language['TORR_PEER_DETAILS']='Torrent peers details';
$language['TORRENT']='Torrent';
$language['TORRENT_ANONYMOUS']='Üles laaditud anonüümselt';
$language['TORRENT_CHECK']='Laske träkkeril torrentfailist teavet hankida ja seda kasutada.';
$language['TORRENT_DETAIL']='Torrent&rsquo;s details';
$language['TORRENT_FILE']='Torrenti Fail';
$language['TORRENT_SEARCH']='Torrentite otsimine';
$language['TORRENT_STATUS']='Olek';
$language['TORRENT_UPDATE']='Uuendamine, palun oodake...';
$language['TORRENTS']='torrenteid';
$language['TORRENTS_PER_PAGE']='Torrenteid lehe kohta';
$language['TRACK_DB_ERR']='Träkkeri/andmebaasi viga. Üksikasju vaata logist.';
$language['TRACKER_INFO']=$users.' users, tracking '.$torrents.' torrents ('.$seeds.' seeds, '.$leechers.' leechers, '.$percent.'%)';
$language['TRACKER_LOAD']='Träkkeri koormus';
$language['TRACKER_SETTINGS']='Tracker&rsquo;s Seaded';
$language['TRACKER_STATS']='Träkkeri Statistika';
$language['TRACKING']='tracking';
$language['TRAFFIC']='Liiklus';
$language['UCP_NOTE_1']='Siin saate oma postkasti manageerida ja kirjutada teistele kasutajatele PM-i,';
$language['UCP_NOTE_2']='Seadistuste jne haldamine ning muutmine...';
$language['UNAUTH_IP']='Volitamata IP-aadress.';
$language['UNKNOWN']='tundmatu';
$language['UPDATE']='Uuenda';
$language['UPFAILED']='Üleslaadimine ebaõnnestus';
$language['UPLOAD_IMAGE']='Lae pilt üles';
$language['UPLOAD_LANGUAGE_FILE']='Laadige üles keelefail';
$language['UPLOADED']='Üles laaditud';
$language['UPLOADER']='Üleslaadija';
$language['UPLOADS']='Üleslaadimine';
$language['URL']='URL';
$language['USER']='Kasutaja';
$language['USER_CP']='Minu paneel';
$language['OPEN_PANEL']='Ava paneel';
$language['CLOSE_PANEL']='Sulge paneel';
$language['USER_CP_1']='Kasutaja juhtpaneel';
$language['USER_DETAILS']='Kasutaja üksikasjad';
$language['USER_EMAIL']='Kehtiv e-post';
$language['USER_ID']='Kasutaja ID';
$language['USER_JOINED']='Liitunud';
$language['USER_LASTACCESS']='Viimati kohal';
$language['USER_LEVEL']='Koht';
$language['USER_LOCAL_TIME']='User&rsquo;s Kohalik aeg';
$language['USER_NAME']='Kasutaja';
$language['USER_PASS_RECOVER']='Salasõna/kasutaja taastamine';
$language['USER_PWD']='Salasõna';
$language['AUTO_LOGOUT']='Logi automaatselt välja pärast 15-minutilist passiivsust';
$language['USERS_SEARCH']='Kasutajate otsing';
$language['VIEW_DETAILS']='Vaata detaile';
$language['VIEW_TOPIC']='Vaata teemat';
$language['VIEW_UNREAD']='Kuva lugemata';
$language['VIEWS']='Vaatamisi';
$language['VISITOR']='Külastaja';
$language['VISITORS']='Külastajad';
$language['WAIT_ADMIN_VALID']='Peaksite ootama administraatori kinnitust...';
$language['WARNING']='Hoiatus!';
$language['WELCOME']='Teretulemast';
$language['WELCOME_ADMINCP']='Tere tulemast administraatori juhtpaneeli';
$language['WELCOME_BACK']='Teretulemast tagasi';
$language['WELCOME_UCP']='Tere tulemast oma kasutaja juhtpaneeli';
$language['WORD_AND']='ja';
$language['WORD_NEW']='Uus';
$language['WROTE']='kirjutas';
$language['WT']='WT';
$language['X_TIMES']='korda';
$language['YES']='Jah';
$language['LAST_IP']='Viimane IP';
$language['FIRST_UNREAD']='Goto esimene lugemata postitus';
$language['MODULE_UNACTIVE']='Nõutav moodul ei ole aktiivne!';
$language['MODULE_NOT_PRESENT']='Vajalikku moodulit ei ole olemas!';
$language['MODULE_LOAD_ERROR']='Nõutav moodul näib olevat vale!';

$language["CUSTOM_TITLE"]="Kohandatud pealkiri";

// Seed Bonus -->
$language["BONUS_INFO1"]="Here you can exchange your Bonus Points (current ";
$language["BONUS_INFO2"]="(If the buttons are deactivated, you do not have enough to trade!)";
$language["BONUS_INFO3"]="What do I get points for?";
$language["BONUS_INFO3a"]="For every hour the system registers you as seeder";
$language["BONUS_INFO3b"]="<b>(uploading at";
$language["BONUS_INFO3c"]="KB/s or faster)</b>";
$language["BONUS_INFO3d"]="you will receive";
$language["BONUS_INFO3e"]="<b>(Up to a maximum of";
$language["BONUS_INFO3f"]="points per hour)</b>";
$language["BONUS_INFO4"]="points";
$language["BONUS_INFO4a"]="point";
$language["BONUS_INFO5"]="per torrent";
$language["BONUS_INFO6"]="You will receive";
$language["BONUS_INFO7"]="for each new torrent you upload. <b>(Subject to a";
$language["BONUS_INFO8"]="hour delay to give us time to check the torrent.)</b>";
$language["BONUS_INFO9"]="for each comment you make on a torrent.";
$language["BONUS_INFO10"]="for each post you make in the forum.";
$language["BONUS_INFO11"]="for each shout you make in the shoutbox.";
$language["BONUS_INFO12"]="for every hour you spend listening to our shoutcast radio stream.";
$language["WHAT_ABOUT"]="What is this about?";
$language["POINTS"]="Points";
$language["EXCHANGE"]="Exchange";
$language["GB_UPLOAD"]=" GB Upload";
$language["CHANGE_CUSTOM_TITLE"]="Change custom title (price - ";
$language["NO_CUSTOM_TITLE"]="none";
$language["UP_TO_VIP"]="Upgrade rank to VIP";
$language["FOR"]="for";
$language["NEED_MORE_POINTS"]="[need more points]";
$language["CHANGE_USERNAME"]="Change username (price - ";
$language["NEVER_EXPIRE"]="Never expire";
$language["SB_MAKE_A_GIFT"]="Make a points gift to another member";
$language["BAD_DATA"]="Bad post data!";
$language["GIFT_TOO_BIG"]="Your gift too big, the maximum individual gift is";
$language["GIFT_USER_NOT_FOUND"]="The user you want to send a gift to is not found in our database!";
$language["GIFT_NOT_ENOUGH"]="You don't have that many points!";
$language["GIFT_PM_SUBJ_1"]="You've received a gift!";
$language["GIFT_PM_SUBJ_2"]="You've sent a gift!";
$language["GIFT_PM_REC_1"]="has sent you a gift of";
$language["GIFT_PM_REC_2"]="bonus points. Please be sure to send a thank you."."\n\n".((substr($FORUMLINK,0,3)=="smf" || $FORUMLINK=="ipb")?"[img]".$BASEURL."/images/smilies/thumbsup.gif[/img]":":thumbsup:");
$language["GIFT_PM_SEND_1"]="This PM is to confirm you sent";
$language["GIFT_PM_SEND_2"]="a gift of";
$language["GIFT_PM_SEND_3"]="bonus points. These points have now been deducted from your total and transferred to";
$language["GIFT_PM_SEND_4"]="\n\n".((substr($FORUMLINK,0,3)=="smf" || $FORUMLINK=="ipb")?"[img]".$BASEURL."/images/smilies/thumbsup.gif[/img]":":thumbsup:");
$language["GIFT_PM_SYS"]="\n\n"."[b][color=red]This is a system PM so please don't respond![/color][/b]";
$language["BONUS_VIP_CONFIRM"]="Are you sure you want to exchange for";
$language['SB_CONTROL']='Seed Bonus Control';
$language['SB_NAME']='Name';
$language['SB_ITEM']='Item';
$language['SB_UPLOAD']='Lae üles';
$language['SB_USED_POINTS']='Used Points';
$language['SB_DATE']='Date';
// <-- Seed Bonus

// Donation History by DiemThuy -->
$language['DON_HISTORIE']='Need liikmed hoiavad selle saidi elus! Aitäh, sõbrad';
$language['NO_DON_HIST'] = 'Toetuste ajalugu ei ole veel saadaval';
$language['DON_HIST'] = 'Toetuse ajalugu';
$language['DON_AMT'] = 'Toetuse summa';
$language['DONATIONS'] = 'Toetamine';
$language['DON_CONFIRM'] = 'Saime teie toetuse, aitäh Teile!';
$language['DONATION'] = 'Toetus';
$language['USERNAME'] = 'Kasutajanimi';
$language['AMOUNT'] = 'Summa';
// <-- Donation History by DiemThuy


$language['TR_TIMED_RANK_SET'] = 'Timed Rank Settings';
$language['TR_NEW_RANK'] = 'New Rank';
$language['TR_OLD_RANK'] = 'Old Rank';
$language['TR_TIME_TO_EXP'] = 'Time to expire';
$language['TR_WEEK'] = 'Week';
$language['TR_WEEKS'] = 'Weeks';
$language['TR_ONE_MONTH'] = 'One Month';
$language['TR_HALF_YEAR'] = 'Half Year';
$language['TR_ONE_YEAR'] = 'One Year';
$language['TR_TWO_YEARS'] = 'Two Years';
$language['TR_SUBJECT'] = 'Your rank has changed!';
$language['TR_MSG_PART_1'] = 'Your rank has changed to';
$language['TR_MSG_PART_2'] = 'this is a timed rank and it will expire';
$language['TR_MSG_PART_3'] = 'after that you will get your old rank';
$language['TR_MSG_PART_4'] = 'back';
$language['TR_MSG_PART_5'] = 'This is an automated system message so DO NOT reply!';
$language['TR_UNAUTH'] = 'Unauthorised access!';
$language['TR_ID_OR_LEV_INV'] = 'id or level invalid!';
$language['TR_NOT_OWN_RANK'] = "You can't change your own rank";
$language['TR_NOT_HIGHER'] = "You can't change a users rank to a level higher than your own.";
$language['TR_NOT_HIGHER_2'] = "You can't edit a member with a rank higher than or equal to your own.";
$language['TR_BOTH_THE_SAME'] = "You can't change the rank to the same thing it is currently.";
$language["TR_EXP_SUBJ"] = "Your timed rank has expired!";
$language["TR_EXP_MSG_1"] = "Your rank has changed back to";
$language["TR_EXP_MSG_2"] = "[color=red][b]This is an automated system message so DO NOT reply![/b][/color]";
$language['TR_MONTH'] = 'Kuu';
$language['TR_MONTHS'] = 'Kuud';
$language['TR_YEAR'] = 'Aasta';
$language['TR_YEARS'] = 'Aastat';
$language['TR_DAY'] = 'Päev';
$language['TR_DAYS'] = 'Päeva';

//GOLD
$language["GOLD_TYPE"]="Torrenti tüüp";
$language["GOLD_PICTURE"]="Gold picture";
$language["SILVER_PICTURE"]="Silver picture";
$language["BRONZE_PICTURE"]="Bronze picture";
$language["GOLD_DESCRIPTION"]="Gold description";
$language["SILVER_DESCRIPTION"]="Silver description";
$language["BRONZE_DESCRIPTION"]="Bronze description";
$language["CLASSIC_DESCRIPTION"]="Classic description";
$language["GOLD_LEVEL"]="Who can add gold/silver torrents";
$language["IS_GOLD"]="Gold";
$language["IS_SILVER"]="Silver";
$language["IS_BRONZE"]="Bronze";
$language["IS_ALL"]="Free";
$language["GOLD_PERCENT"]="Gold download percentage";
$language["SILVER_PERCENT"]="Silver download percentage";
$language["BRONZE_PERCENT"]="Bronze download percentage";
$language["GOLD_FL"]="Free Leech";

$language['FL_TO'] = 'to';
$language['FL_NOT_TODAY'] = 'Mitte täna';
$language['FL_FREE_LEECH'] = 'Free Leech';
$language['FL_START_TIME'] = 'Next Happy Hour Starts';
$language['FL_ITS_HH'] = 'It\'s Happy Hour';


$language["FILE_UPLOAD_TO_BIG"]="File size to big for upload!! Limit";
$language["IMAGE_WAS"]="Image size";
$language["MOVE_IMAGE_TO"]="Could not move image to";
$language["CHECK_FOLDERS_PERM"]="Please check the folder permissons and try again.";
$language["ILEGAL_UPLOAD"]="Ilegal upload!! This is not a image<br>Please press back and try again";
$language["IMAGE"]="Image";
$language["SCREEN"]="Screenshots";

$language["AFR_PM_1"] = "At some point in the past you downloaded";
$language["AFR_PM_2"] = "This torrent no longer has any seeds and";
$language["AFR_PM_3"] = "would like to download it, if you still have those files on your computer please can you join the torrent as a seed.".'\n\n'."Thank You".'\n\n'."[color=red][b]THIS IS AN AUTOMATED SYSTEM MESSAGE SO PLEASE DON'T REPLY[/b][/color]".'\n';
$language["AFR_PM_SUBJ"] = "Reseed Request";
$language["AFR_INFO_1"] = "Reseed requested";
$language["AFR_INFO_2"] = "A PM has been sent to all members who have completed this torrent.";
$language["AFR_ERR_1"] = "Reseed Error";
$language["AFR_ERR_2"] = "Someone has already done a reseed request on this torrent within the last 5 days.";
$language["AFR_RESEED"] = "Request a Reseed";

$language['AUTORANK_STATE']='Autorank State';
$language['AUTORANK_POSITION']='Autorank Position';
$language['AUTORANK_MIN_UPLOAD']='Autorank (Up/Down)load Trigger';
$language['AUTORANK_IN_BYTES']=' (in bytes)';
$language['AUTORANK_MIN_RATIO']='Autorank Ratio Trigger';
$language['AUTORANK_SMF_MIRROR']='SMF Forums Rank Mirror';
$language['AUTORANK_IPB_MIRROR']='IPB Forums Rank Mirror';
$language['AUTORANK_SMF_LIST']='<b><u>Current SMF Group List from the database</u></b><br />';
$language['AUTORANK_IPB_LIST']='<b><u>Current IPB Group List from the database</u></b><br />';

$language['AUTORANK_PM_DEMOTE_SUBJ']='You have been demoted';
$language['AUTORANK_PM_PROMOTE_SUBJ']='You have been promoted';

$language['AUTORANK_PM_GREET']='Hello';

$language['AUTORANK_PM_DEMOTE_1']='As a result of your tracker stats decreasing you have been automatically demoted from the rank of';
$language['AUTORANK_PM_DEMOTE_2']='to the rank of';
/* If you want to add some kind of "get your act together" type message, you can add it below. */
$language['AUTORANK_PM_DEMOTE_3']='';

$language['AUTORANK_PM_PROMOTE_1']='As a result of your tracker stats increasing you have been automatically promoted from the rank of';
$language['AUTORANK_PM_PROMOTE_2']='to the rank of';
/* If you want to add some kind of "congratulations, keep it up" type message, you can add it below. */
$language['AUTORANK_PM_PROMOTE_3']='';

// Report users & Torrents by DiemThuy -->
$language["REP_ALLUSERS"] = "Make a report";
$language["REP_ADMIN"]="Reported Users & Torrents Administration";
$language["REP_SUC_REP"] = "Successfully Reported";
$language["REP_STAFF_WILL_CHECK"] = "A member of staff will look into the problem as soon as possible";
$language["REP_ALR_REP"] = "You have already reported";
$language["REP_ERR"] = "Report Error";
$language["REP_INV_ID"] = "Invalid User ID";
$language["REP_NO_STAFF"] = "Staff can't be reported";
$language["REP_NOT_SELF"] = "you can't report yourself";
$language["REP_USER"] = "Report User";
$language["REP_TORR"] = "Report Torrent";
$language["REP_CONF_1"] = "Are you sure you would like to report";
$language["REP_CONF_2"] = "Please note, this is <b>not</b> to be used to report Hit & Runners, this is done by the tracker itself<br /><br /><b>Reason</b>";
$language["REP_CONF_3"] = "Reason";
$language["REP_INV_TORR"] = "Invalid Torrent ID";
$language["REP_NEED_REASON"] = "You must enter a reason for the report";
$language['REP_BY'] = 'Reported By';
$language['REP_REPORTING'] = 'Reporting';
$language['REP_TYPE'] = 'Type';
$language['REP_REASON'] = 'Reason';
$language['REP_DEALT_WITH'] = 'Dealt With';
$language['REP_MARK'] = 'Mark As Dealt With';
$language['REP_REPORTS'] = 'Reports';
// <-- Report users & Torrents by DiemThuy

$language['BOOT_EXP'] = 'Your Ban time has expired!';
$language['BOOT_EXP_MSG'] = 'You are no longer Banned , please be careful to not make the same mistake again!';
$language['BOOT_GIVE'] = 'You got Booted!';
$language['BOOT_GIVE_REA'] = 'The reason You got booted is:';
$language['BOOT_GIVE_WHO'] = 'By:';
$language['BOOT_GIVE_EXP'] = 'Expire Date';
$language['BOOT_RM_SUB'] = 'Your Ban is canceled!';
$language['BOOT_RM_MSG'] = 'Your Ban is now canceled!';
$language['BOOT_DISABLED'] = 'DISABLED USER!';
$language['BD'] = 'Ban Data';
$language['RFB'] = 'Reason for the Ban';
$language['ET'] = 'Expire Time';
$language['AB'] = 'added by';
$language["RB"] = "Remove Ban";
$language["BS"] = "Ban Settings";
$language["AM"] = "Admin Menu";
$language["BT"] = "Ban Time";
$language["BM"] = "Ban Motivation";


$language["IMDB_UL_FORM"] = "&nbsp;(optional)&nbsp;<b>tt<b><input type='text' name='imdb' size='10' maxlength='200' />&nbsp; The numbers after tt in the url.";
$language["IMDB_EDIT_FORM"] = "The numbers after tt in the url.";
$language["IMDB_NOT_ADDED"] = "No IMDB ID has been added..";
$language["IMDB_RESIZE_ERR"] = "Resizable window will not work without Javascript.<br />Please enable Javascript or view the Info in a new window";
$language["IMDB_EXTRA"] = "IMDB Extra";
$language["IMDB_MORE_INFO"] = "More Info";
$language["IMDB_COVER"] = "Cover";
$language["IMDB_NO_PHOTO"] = "No photo available";
$language["IMDB_LANGUAGES"] = "Languages";
$language["IMDB_GENRE"] = "Genre";
$language["IMDB_ALL_GENRES"] = "All Genres";
$language["IMDB_RATING"] = "Rating";
$language["IMDB_VOTES"] = "Votes";
$language["IMDB_TAGLINE"] = "Tagline";
$language["IMDB_PLOT_OUTLINE"] = "Plot Outline";
$language["IMDB_PLOT"] = "Plot";
$language["IMDB_TAGLINES"] = "Taglines";
$language["IMDB_YEAR"] = "Year";
$language["IMDB_RUNTIME"] = "Runtime";
$language["IMDB_MINUTES"] = "minutes";
$language["IMDB_CACHE_CON"] = "IMDB Cache Contents";
$language["IMDB_MOV_DET"] = "Movie Details";
$language["IMDB_PAGE"] = "IMDB page";
$language["IMDB_NO_PHOTO"] = "No photo available";
$language["IMDB_AKA"] = "Also known as";
$language["IMDB_SEASONS"] = "Seasons";
$language["IMDB_AGE_CLASS"] = "Age Classification";
$language["IMDB_COUNTRY"] = "Country";
$language["IMDB_COLORS"] = "Colors";
$language["IMDB_SOUND"] = "Sound";
$language["IMDB_DIRECTOR"] = "Director";
$language["IMDB_WRITING_BY"] = "Writing By";
$language["IMDB_WRITER"] = "Writer";
$language["IMDB_ROLE"] = "Role";
$language["IMDB_PRODUCED_BY"] = "Produced By";
$language["IMDB_PRODUCER"] = "Producer";
$language["IMDB_MUSIC"] = "Music";
$language["IMDB_MUSICIAN"] = "Musician";
$language["IMDB_ACTOR"] = "Actor";
$language["IMDB_CAST"] = "Cast";
$language["IMDB_PLOT_OUTLINE"] = "Plot Outline";
$language["IMDB_PLOT"] = "Plot";
$language["IMDB_EPISODE"] = "Episode";
$language["IMDB_EPISODES"] = "Episodes";
$language["IMDB_SEASON"] = "Season";
$language["IMDB_ORIG_AIR_DATE"] = "Original Air Date";
$language["IMDB_USER_COMMENTS"] = "User Comments";
$language["IMDB_MOVIE_QUOTES"] = "Movie Quotes";
$language["IMDB_TRAILERS"] = "Trailers";
$language["IMDB_CR_CRED"] = "Crazy Credits";
$language["IMDB_CR_CRED_1"] = "We know about";
$language["IMDB_CR_CRED_2"] = "One of them reads";
$language["IMDB_GOOFS"] = "Goofs";
$language["IMDB_GOOFS_1"] = "Here comes one of them";
$language["IMDB_TRIVIA"] = "Trivia";
$language["IMDB_TRIVIA_1"] = "There are";
$language["IMDB_TRIVIA_2"] = "entries in the trivia list - like these";
$language["IMDB_TRIVIA_3"] = "trivia records. Some examples";
$language["IMDB_SOUNDTRACKS"] = "Soundtracks";
$language["IMDB_SOUNDTRACK"] = "Soundtrack";
$language["IMDB_SOUNDTRACKS_1"] = "soundtracks listed - like these";
$language["IMDB_CREDIT"] = "Credit";
$language["IMDB_CAUSE"] = "Cause";
$language["IMDB_BIRTH_NAME"] = "Birth Name";
$language["IMDB_NICKNAMES"] = "Nickname(s)";
$language["IMDB_BODY_HEIGHT"] = "Body Height";
$language["IMDB_SPOUSES"] = "Spouse(s)";
$language["IMDB_SPOUSE"] = "Spouse";
$language["IMDB_PERIOD"] = "Period";
$language["IMDB_COMMENT"] = "Comment";
$language["IMDB_KIDS"] = "Kids";
$language["IMDB_MINI_BIO"] = "Mini Bio";
$language["IMDB_TM"] = "Trademarks";
$language["IMDB_SALARY"] = "Salary";
$language["IMDB_MOVIE"] = "Movie";
$language["IMDB_CHAR"] = "Character";
$language["IMDB_PUBL"] = "Publications";
$language["IMDB_AUTHOR"] = "Author";
$language["IMDB_TITLE"] = "Title";
$language["IMDB_ISBN"] = "ISBN";
$language["IMDB_BIO_MOVIES"] = "Biographical movies";
$language["IMDB_INTERVIEW"] = "Interview";
$language["IMDB_INTERVIEWS"] = "Interviews";
$language["IMDB_DETAILS"] = "Details";
$language["IMDB_PERF_SEARCH"] = "Performing IMDB search for";
$language["IMDB_NAME"] = "Name";
$language["IMDB_SCAN"] = "Scanning IMDB...";
$language["IMDB_SEARCH"] = "Imdb";
$language["IMDB_VIEW"]="View on IMDB";
$language["IMDB_GENRE"]="Genre";

//RULES
$language["RULES_SORT"]="Rule num(sort)";
$language["RULES"]="Reeglid";
$language["RULE"]="Reegel";
$language["RULE_ALL"]="Kõik reeglid";
$language["MNU_RULES"]="Reeglid";
$language["RULES_ADD"]="Sisesta reegel";


// Seedbox
$language["SB_HS_TORRENT"] = "high speed torrent";
$language["SB_SEEDBOX"] = "Seedbox";
$language["SB_SS_SETTINGS"] = "Show Seedbox Settings";
$language["SB_MITU"] = "Minimum rank to use";
// Seedbox

$language["ANN_NEW_USER"] = "[color=red]WELCOME[/color] to our new user:";
$language["ANN_NEW_TORR"] = "[color=red]NEW UPLOAD[/color]:";
$language["ANN_ADDED_BY"] = "[color=red]ADDED BY[/color]:";

$language["DOB"]="Date of Birth";
$language["STICKY_TORRENT"]="<b>Sticky</b>";
$language["STICKY_TORRENT_EXPLAIN"]="(Always on top of the torrent list)";


// Helpdesk
$language["HELPDESK"]="Tugi";
$language["HD_WEEK"]="week";
$language["HD_WEEKS"]="weeks";
$language["HD_DAY"]="day";
$language["HD_DAYS"]="days";
$language["HD_HOUR"]="hour";
$language["HD_HOURS"]="hours";
$language["HD_MIN"]="min";
$language["HD_MINS"]="mins";
$language["HD_SORRY"]="Sorry";
$language["HD_NOT_AUTHORIZED"]="You are not authorized to view this.";
$language["HD_RTF"]="Read the FAQ";
$language["HD_RTF2"]="First read the [b]FAQ[/b] and then start asking questions!";
$language["HD_STF"]="Search forums";
$language["HD_STF2"]="Search the [b]FORUMS[/b] please.";
$language["HD_DN"]="Die n00b";
$language["HD_DN2"]="Die n00b! even my grandma knows how to do that!";
$language["HD_ON"]="on";
$language["HD_PROBLEM"]="Problem";
$language["HD_SOLVED"]="Solved";
$language["HD_ANSWER"]="Answer";
$language["HD_IGNORED"]="Ignored";
$language["HD_BB"]="<b>BB tags</b> are <b>allowed</b>";
$language["HD_IGNORE"]="IGNORE";
$language["HD_ADDED"]="Added";
$language["HD_ADDEDBY"]="Added by";
$language["HD_SOLVEDBY"]="Solved - by";
$language["HD_SOLVEDIN"]="Solved In";
$language["HD_DELPROB"]="Delete solved and/or ignored problems";
$language["HD_S_FAST"]="Solved Fast";
$language["HD_S_INTIME"]="Solved in Time";
$language["HD_S_LATE"]="Solved too late";
$language["HD_S_REPLIES"]="Standard Replies";
$language["HD_USE"]="Use";
$language["HD_MSG1"]="[color=red][b]From the $SITENAME HELPDESK [/b][/color]";
$language["HD_MSG2"]="regards";
$language["HD_MSG3"]="staff member";
$language["HD_HELP_DESK"]="Help desk";
$language["HD_MSG_SENT"]="Message sent! Please await your reply.";
$language["HD_WELCOME_1"]="welcome staff member";
$language["HD_WELCOME_2"]="there are";
$language["HD_WELCOME_3"]="unanswered questions waiting";
$language["HD_WELCOME_MSG"]="Here you can ask your questions and post your problems but before using the <b>Helpdesk</b> please check if your question has already been answered in the <a href=index.php?page=forum><b>Forum</b></a> first.";
$language["HD_HELPME"]="Help me!";
// Helpdesk


// Torrent Request
$language['RF']='Request Filled';
$language['VR']='Taotle';
$language['R']='Lisa taotlus';
$language['VV']='View Votes';
$language['RD']='Request Details';
$language['RE']='Redigeeri taotlust';
$language['TJ']='Take Job';
$language['RS']='Reset';
$language['FTJ']='filled the job!';
$language['OTJ']='is on the job!';
$language['RDT']='Kuupäev:';
$language['RTT']='Tänud';
$language['RFU']='Filled URL';
$language['R_EMPTY_HASH']='Info hash not filled!';
$language['R_EMPTY_URL']='Type full direct torrent URL, i.e. http://www.mysite.com/index.php?page=torrent-details&id=813.. (you can only copy/paste from another window) or modify existing URL of torrent ID!';
$language['R_HASH_INFO']=''.$BASEURL.'/index.php?page=torrent-details&id=<font color=red>5bdf70f0ec21084be7edc0754157e5058441cebf</font>';
$language["TRAV_AV_REQ"] = "Available Requests for";
$language["TRAV_POS_REQ"] = "Posted Requests";
$language["TRAV_REM"] = "Remaining";
$language["TRAV_IYFAR"] = "If you fulfill a request, you will receive";
$language["TRAV_ANR"] = "Add New Request";
$language["TRAV_VMR"] = "View my requests";
$language["TRAV_HFR"] = "Hide Filled Requests";
$language["TRAV_SEEDB_P"] = "seedbonus points";
$language["TRAV_SORTBY"] = "Sort by";
$language["TRAV_NAME"] = "Nimi";
$language["TRAV_VOTES"] = "Votes";
$language["TRAV_TYPE"] = "Tüüp";
$language["TRAV_DATE_A"] = "Date Added";
$language["TRAV_ADDEDBY"] = "Added By";
$language["TRAV_FILLED"] = "Filled";
$language["TRAV_FILLEDBY"] = "Filled By";
$language["TRAV_DISPLAY"] = "Display";
$language["TRAV_SEARCH"] = "Search";
$language["TRAV_GO"] = "Go";
$language["TRAV_NOBODY"] = "nobody";
$language["TRAV_OFF_MESS"] = "Offline Message";
$language["TRAV_REQ_OFF"] = "The request section is offline on the moment";
$language["TRAV_ALREADY_VOTED"] = "<p>You've already voted for this request, only 1 vote for each request is allowed</p><p>Back to <a href=index.php?page=viewrequests><b>view requests</b></a></p>";
$language["TRAV_SUC_VOTED"] = "Successfully voted";
$language["TRAV_SUC_VOTED_1"] = "Successfully voted for request";
$language["TRAV_SUC_VOTED_2"] = "Back to <a href=index.php?page=viewrequests><b>view requests</b></a>";
$language["TRAV_REQUEST"] = "Request";
$language["TRAV_EDIT"] = "redigeeri";
$language["TRAV_INFO"] = "Info";
$language["TRAV_ADDED"] = "Added";
$language["TRAV_REQBY"] = "Requested By";
$language["TRAV_VOTE_FT"] = "Vote For This";
$language["TRAV_HTFAR"] = "How To Fill A Request";
$language["TRAV_HTFAR_1"] = "Type <b>full</b> direct torrent URL, i.e. http://www.mysite.com/index.php?page=torrent-details&id=813.. (you can only copy/paste from another window) or modify existing URL of torrent ID...";
$language["TRAV_VOTE"] = "Vote";
$language["TRAV_TDTUH"] = "TYPE-DIRECT-TORRENT-URL-HERE";
$language["TRAV_SEND"] = "Send";
$language["TRAV_ED_REQ"] = "Edit Request";
$language["TRAV_CATEG"] = "Category";
$language["TRAV_DESC"] = "Description";
$language["TRAV_TORR_FILE"] = "Torrent File";
$language["TRAV_DESC2"] = "description";
$language["TRAV_EDIT"] = "edit";
$language["TRAV_SUBMIT"] = "Submit";
$language["TRAV_NOTAUTH"] = "Either you are not authorized or this is a bug, please report it to the site staff!";
$language["TRAV_WAS_FB"] = "was filled by";
$language["TRAV_TORR_DL1"] = "The torrent can be downloaded from the following link";
$language["TRAV_TORR_DL2"] = "Don't forget to thank the uploader."."\n\n"."If for some reason this is not what you want, please reset this by clicking";
$language["TRAV_TORR_DL3"] = "[b]DO NOT[/b] click the link unless you are absolutely sure you want to reset the request.";
$language["TRAV_HERE"] = "HERE!";
$language["TRAV_REQFILLED"] = "Your torrent request is filled!";
$language["TRAV_HNBSF_1"] = "has now been successfuly filled here";
$language["TRAV_HNBSF_2"] = "User";
$language["TRAV_HNBSF_3"] = "has recieved a PM about this upload.<br /><br /><b>Is this is an accident?</b><br /><br />No worries, but please";
$language["TRAV_HNBSF_4"] = "<b>CLICK HERE</b></a> to reset this request.<br /><b>WARNING</b> do not click this unless you really want to reset this request!";
$language["TRAV_THANKS"] = "<br /><br />Thanks for filling out this request :)<br /><br />Go back to<a href=index.php?page=viewrequests><b>View Requests</b></a>";
$language["TRAV_SUC_RESET"] = "Successfully Reset";
$language["TRAV_CANNOT"] = "cannot reset a request that you didn't make";
$language["TRAV_TOP5"] = "Top 5 Requests";
$language["TRAV_CAT"] = "Cat";
$language["TRAV_REQBY2"] = "Request By";
$language["TRAV_REQDET"] = "Request Details";
$language["TRAV_REQNAME"] = "Request Name";
$language["TRAV_NOADD1"] = "Sorry but your rank";
$language["TRAV_NOADD2"] = "is not allowed to post Requests";
$language["TRAV_SEARCHFIRST"] = "Search if the torrent already exists before adding a request";
$language["TRAV_IN"] = "in";
$language["TRAV_ALL"] = "all";
$language["TRAV_INCDEAD"] = "Including Dead Torrents";
$language["TRAV_SEARCH"] = "Search";
$language["TRAV_ADDNEW"] = "Add a new Request";
$language["TRAV_SELCAT"] = "Select Category";
$language["TRAV_MUSTSELECTONE"] = "You must select at least one request to delete.";
$language["TRAV_REQDELETED"] = "Request Deleted";
$language["TRAV_GOBACK"] = "Go back to<a href=index.php?page=viewrequests><b>Requests</b></a>";
$language["TRAV_NOAUTH"] = "No Authorisation";
$language["TRAV_NOTALLOWED"] = "Not Allowed";
$language["TRAV_REACHEDMAX"] = "Sorry, You just reached your max number of Requests";
$language["TRAV_MUSTADDTITLE"] = "You must add a title!";
$language["TRAV_MUSTCHOOSECAT"] = "You must choose a category!";
$language["TRAV_MUSTADDDESC"] = "You must add a description!";
$language["TRAV_NEWREQUEST"] = "New Request";
$language["TRAV_WATTRS"] = "was added to the Request section";
$language["TRAV_VOTEFORTHIS"] = "Vote For This";
$language["TRAV_NOWTFOUND"] = "Nothing Found";
$language["TRAV_AGO"] = "ago";
$language["DOH_URL"]="Type full direct torrent URL, i.e. ".$BASEURL."/index.php?page=torrent-details&id=813.. (you can only copy/paste from another window) or modify existing URL of torrent ID!";
// Torrent Request



$language["NOT_USER_CLASS"]="<h2>Sorry</h2><p>You must be registered to be able to buy tickets.</p>";
$language["CANNOT_SELL_CLOSED"]="Sorry, I cannot sell you any tickets! The lottery is closed!";
$language["LOTTERY"]="Lottery";
$language["LOTT_LIMIT_PURCHASE"]="The max number of tickets you can purchase is";
$language["LOTT_LIMIT_BUY"]="The max number of tickets allowed to buy is";
$language["LOTTERY_PM_SUBJECT"]="You have won a prize in the lottery";
$language["LOTTERY_PM_MESSAGE"]="Congratulations you have won a prize on our Lottery. Your prize has been added to your account.";
$language['RESET_PID'] = 'Reset PID';

$language["SB_BANNED"] = "<br /><center><img src='images/denied.gif'><br />Sorry you are banned from using the Shout Box!<br />You will need to speak to a member of staff";


$language["LED_WELCOME"] = '** Welcome **';
$language["LED_TO"] = '++ To ++';
$language["LED_UPLOADED"] = 'you have uploaded';
$language["LED_ERR"] = 'If you were using a Java-enabled browser, you would see an animated scrolling text sign that looks like this:';
$language["LED_ACT_TOR"] = 'Active Torrents';
$language["LED_LAST_VISIT"] = 'Last Visit';
$language["LED_CURRTIME"] = 'The current time is';
$language["LED_TODAYIS"] = 'Today is';

$language["GRAB_YDT"] = "Your Downloaded Torrents";
$language["GRAB_AL_DOWN"] = "Already Downloaded!!";
$language["GRAB_STILL_ACTIVE"] = "still active";
$language["GRAB_NOT_ACTIVE"] = "not active";

$language['TORRENT_OPTIONS']='Search in';
$language['FIL']='Filename';
$language['FILDES']='File & Descr';
$language['DES']='Description';
$language['SUBC']='Sub Cat.';

# Language definitions added by TreetopClimber.
$language['EXTRA']='extra';
$language['DROPDOWN']='dropdown';
$language['ALTLOGIN']='altlogin';
$language['KC_DROPDOWN']='kc dropdown';
$language['KC_TOP']='kc top';
$language['KC_MIDDLE']='kc middle';
$language['KC_FOOTER']='kc footer';
$language["DJ_SETTINGS"]="Dj Settings";
$language['TORRENT_MENU']='Torrent Menu';
$language['USER_MENU']='User Menu';
$language['USER_LINKS']='User Links'; # New User Link, for all those other links.
$language['ADMIN_MENU']='FM Admin'; # New FM Admin Menu Link
$language['ADMIN_ACCESS']='Tracker Admin'; # changed name to tracker admin since we are using FM
$language['STAFF_ACCESS']='Staff';
$language['UPLOAD_LINK']='Torrent Upload';
$language['ADAREA']='ads';
# End

// Sport Betting - Start
$language["SB_BETTING"] = "Betting";
$language["SB_SITE_BETTING"] = "Site Betting";
$language["SB_NO_BETS_ATM"] = "No bets at the moment";
$language["SB_CURR_BETS"] = "Current Bets";
$language["SB_BET_ADMIN"] = "Bet Admin";
$language["SB_WAGERS"] = "Wagers";
$language["SB_TL"] = "Top list";
$language["SB_INFO"] = "Info";
$language["SB_BET"] = "Bet";
$language["SB_CHECK_LATER"] = "<i>Unfortunately, there are no active bets right now. Come back later! :)</i>";
$language["SB_TGCTNO"] = "This game closes to new bets:";
$language["SB_TIME_LEFT"] = "Time remaining";
$language["SB_MINUTES"] = "minutes";
$language["SB_ACC_DEN"] = "Access Denied!!";
$language["SB_SILLY_RABBIT"] = "Silly Rabbit";
$language["SB_NO_OPT"] = "Enter at least one option ya nugget!";
$language["SB_ADMIN"] = "Admin";
$language["SB_BET_INFO"] = "Bet Info";
$language["SB_END_BETS"] = "End Bets";
$language["SB_BET_TITLE"] = "Bet title";
$language["SB_BETTING_ON"] = "Betting On";
$language["SB_ENTER_WAGER"] = "Enter your wager here";
$language["SB_ENDTIME"] = "Endtime";
$language["SB_MINS"] = "mins";
$language["SB_HOUR"] = "hour";
$language["SB_HOURS"] = "hours";
$language["SB_DAY"] = "day";
$language["SB_DAYS"] = "days";
$language["SB_WEEK"] = "week";
$language["SB_WEEKS"] = "weeks";
$language["SB_ORDERING"] = "Ordering";
$language["SB_BY_ID"] = "By ID";
$language["SB_BY_ODDS"] = "By Odds";
$language["SB_SUBMIT"] = "Submit";
$language["SB_CREATOR"] = "Creator";
$language["SB_SET_ACTIVE"] = "Set Active";
$language["SB_ADD_OPTIONS"] = "Add options";
$language["SB_GAMES"] = "Games";
$language["SB_TOP_LIST"] = "Top List";
$language["SB_POINTS"] = "Points";
$language["SB_WINNER"] = "Winner";
$language["SB_LOSER"] = "Loser";
$language["SB_POSITION"] = "Position";
$language["SB_SORRY"] = "Sorry";
$language["SB_NO_ACCESS"] = "You are not permitted to view this page.";
$language["SB_NO_ACT_GAMES"] = "You have no active games.";
$language["SB_BET_OPT"] = "Bet Option";
$language["SB_ODDS"] = "Odds";
$language["SB_POY_PAY"] = "Potential payout";
$language["SB_AMOUNT_WAGERED"] = "Amount wagered";
$language["SB_CANT_DEL_1"] = "You can't delete a game that people have already placed bets on.";
$language["SB_CANT_DEL_2"] = "Click here";
$language["SB_CANT_DEL_3"] = "to delete the game and refund any bets that have already been placed.";
$language["SB_CANT_DEL_4"] = "You're trying to delete an option that people have already placed bets on. You'll need to";
$language["SB_CANT_DEL_5"] = "Once you've done this you can recreate the game with new options.";
$language["SB_ADD_BETS"] = "Add Bets";
$language["SB_WARNING"] = "! Warning !";
$language["SB_CLICK_TO_PAY"] = "Click on the winning option, to pay out the winners!";
$language["SB_BET_RES"] = "Betting results";
$language["SB_NO_POST"] = "No post found";
$language["SB_BET_WIN"] = "Bet win!";
$language["SB_BET_PROFIT"] = "Bet profit +";
$language["SB_PM_MESS_1"] = "You have just accrued";
$language["SB_PM_MESS_2"] = "Bonus Points on Bet!"."\n"."You played";
$language["SB_PM_MESS_3"] = "points on";
$language["SB_PM_MESS_4"] = "Option";
$language["SB_PM_MESS_5"] = "which gave";
$language["SB_PM_MESS_6"] = "times the bet!"."\n\n";
$language["SB_PM_MESS_7"] = "\n\n"."To see the full results of the Bet follow this link:"."\n\n";
$language["SB_FOR_MESS_1"] = "Number of bets wagered on the game";
$language["SB_FOR_MESS_2"] = "Total Bonus points in the turnover of the game";
$language["SB_FOR_MESS_3"] = "Winning option";
$language["SB_FOR_MESS_4"] = "The game was ended by";
$language["SB_FOR_MESS_5"] = "Options and odds";
$language["SB_FOR_MESS_6"] = "Top 20 Winners";
$language["SB_FOR_MESS_7"] = "Bonus Points";
$language["SB_FOR_MESS_8"] = "to";
$language["SB_FOR_MESS_9"] = "who invested";
$language["SB_FOR_MESS_10"] = "Top 20 Losers";
$language["SB_PM_MESS2_1"] = "Unfortunately it turned out that your investment in";
$language["SB_PM_MESS2_2"] = "did not yield any dividends!"."\n"."Better luck next time!"."\n\n";
$language["SB_BET_LOSS"] = "Bet loss!";
$language["SB_CREATE_BETS"] = "Create Bets";
$language["SB_BONUS"] = "Bonus";
$language["SB_BETINF"] = "Bet information!";
$language["SB_BETINF_MSG"] = "Site-Bet is an odds / betting system that is similar to other real betting sites on the web.<br />If you are not at home with betting systems it will still be easy to understand.<br /><br /><li>With Site-Bet you use your seed bonus points only.</li><li>When you bet points on a result, you'll get the points you bet multiplied by the odds of your choice.</li><li>Your efforts are binding and can not be undone.</li><li>The odds are variable.</li><li>The odds and the payment amount for profits can be increased or reduced by adding your wager.</li><br />It is the result after full time that counts, so what you waiting on? Start betting now!<br /><br /><b>Banks keep 3% of paying profits, only to control the inflation of bonus points.</b>";
$language["SB_BAD_ID"] = "No game with that ID.";
$language["SB_NO_BON_LOG"] = "No bonus log with similar message.";
$language["SB_OP_LOG_1"] = "Number of operations and bonus logs entered did not match.";
$language["SB_OP_LOG_2"] = "vs."; // Short for versus
$language["SB_OP_LOG_3"] = "Fuck it...";
$language["SB_OP_LOG_4"] = "Do it anyway";
$language["SB_RET_POINTS_1"] = "You have got back the";
$language["SB_RET_POINTS_2"] = "Points you bet on";
$language["SB_RET_POINTS_3"] = "It was reset because of errors or unfinished/unplayed matches.";
$language["SB_BET_REBATE"] = "Betting Rebate";
$language["SB_BBAS"] = "Bet-bonus at stake";
$language["SB_SOFTBET"] = "Softbet";
$language["SB_MY_GAMES"] = "My Games";
$language["SB_AMOUNT"] = "Amount";
$language["SB_CANT_UNDO"] = "Note that you cannot undo this";
$language["SB_NOT_ENOUGH_POINTS"] = "You don't have enough bonus points!";
$language["SB_BET_TOO_LOW"] = "You can't bet zero or under!";
$language["SB_MAX_BET_1"] = "The maximum bet is";
$language["SB_MAX_BET_2"] = "bonus points!";
$language["SB_ALREADY_BET"] = "You've already invested in this game!";
$language["SB_ADD_OPT_TO_BET"] = "Add options to your wager!";
$language["SB_OPT_TXT"] = "Option text";
$language["SB_ADD_TO_GAME"] = "Add to game";
$language["SB_ADD_1X2"] = "Add 1, X, 2";
$language["SB_SAVE_CHANGES"] = "Save Changes";
$language["SB_CLICK"] = "Click";
$language["SB_HERE"] = "Here";
$language["SB_DEL_GAME"] = "to delete the game.";
$language["SB_DEL_AND_REPAY"] = "to delete the game and repay everyone's points.";
$language["SB_SHOUT_1"] = "[color=red]New Bet[/color]";
$language["SB_SHOUT_2"] = " - Endtime: ";
$language["SB_SHOUT_3"] = "Go to Bet";
$language["SB_OPTIONS"] = "Options";
// Sport Betting - End

// Torrents Limit
$language["TORRENTS_LIMIT"] = "Torrents Limit";
$language["ENTER_NEG"] = "Enter a negative value eg <b><span style='color:#0000FF'>-1</span></b> to reset to the default for the rank";

// Enhanced Waiting Time
$language["WAITING_TIME"] = "Waiting Time (hours)";

// Auto Duplicate Torrent Checker
$language["TOP_MATCHES"] = "These are the top matches in our database based upon the torrent filename, please ensure you are not uploading a duplicate torrent before proceeding.";

// Whois
$language["WHOIS"] = "Whois";

// Ban Button
$language["ERR_REG_IP_BANNED"] = "I'm sorry but due to abuse, registrations from your IP address are currently banned!";
$language["DTBAN"]="IP Ban";

// Torrent Nuked/Requested
$language["TNR_REL_REQ"]="This release was requested.";
$language["TNR_REQUESTED"]="Requested";
$language["TNR_NUKED"]="Nuked";

// Torrent moderation
$language["TMOD_APR1"] = "your torrent";
$language["TMOD_APR2"] = "is approved!";
$language["TMOD_APR3"] = "\n\n"."[color=red][b]Do not reply, this is an automatic message.[/b][/color]";
$language["TMOD_SOR1"] = "Sorry";
$language["TMOD_SOR2"] = "but";
$language["TMOD_SOR3"] = "has been rejected for the following reason";
$language["TMOD_SOR4"] = "\n\n"."[color=red][b]Do not reply, this is an automatic message.[/b][/color]";
$language["TMOD_SEN1"] = "Your message has been sent.";
$language["TMOD_SEN2"] = "You have to give a reason.";
$language["TMOD_OK"] = "OK";
$language["TMOD_BAD"] = "Bad";
$language["TMOD_UM"] = "Unmoderated";
$language["TMOD_S_MOD"] = "Mod.";
$language["TMOD_S_CAT"] = "Cat.";
$language["TMOD_Dl"] = "Dl";
$language["TMOD_NOTORR"] = "No torrents unmodered.";
$language["ACP_ADD_WARN"]="Torrent moderation resaons";
$language["WARN_TITLE"]="Title of reason";
$language["WARN_TEXT"]="Explain reason";
$language["WARN_ADD_REASON"]="Add new reason";
$language["TRUSTED"]="Trusted";
$language["TRUSTED_MODERATION"]="Trusted moderation";
$language["TORRENT_STATUS"]="Torrent status";
$language["TORRENT_MODERATION"]="Moderation";
$language["MODERATE_TORRENT"] = "Moderate";
$language["MODERATE_STATUS_OK"] = "Ok";
$language["MODERATE_STATUS_BAD"] = "Bad";
$language["MODERATE_STATUS_UN"] = "Unmoderated";
$language["FRM_CONFIRM_VALIDATE"] = "Reset to unmoderated";
$language["MODERATE_PANEL"] = "Mod Torrent Panel";
$language["TMOD_EDIT_TO_RESEND"] = "<br/>(Edit to resend for validation)";
$language["TMOD_APPROVED_BY"] = "Approved by";
$language["TMOD_REJECTED_BY"] = "Rejected by";

// Uploader Medals
$language["UM_BRONZE"] = "Bronze Medal";
$language["UM_SILVER"] = "Silver Medal";
$language["UM_GOLD"] = "Gold Medal";
$language["UM_UPL_MED"] = "Upload Medal";
$language["UM_MED"] = "Med";
$language["UM_NICK"] = "Nickname";
$language["UM_TOR"] = "Tor";
$language["UM_UP_COUNT_1"] = "Upload count (last";
$language["UM_UP_COUNT_2"] = "days)";
$language["UM_NOTHING_TO_SEE"] = "nothing to see here!";

// NFO Hack
$language["NFO_NFO"] = "NFO";
$language["NFO_NOT_NFO"] = "Not an nfo file!";
$language["NFO_NOT_VALID"] = "Not a valid nfo or too small!";
$language["NFO_CANT_MOVE"] = "Error moving nfo file!";
$language["NFO_UNCHECK"] = "<b>Uncheck</b> to remove or upload a new nfo";
$language["NFO_OPTION"] = "Optionally choose to browse for an nfo file";
$language["NFO_SHOW_HIDE"] = "Show | Hide NFO";

// Teams Hack
$language["TEAMS_TEAM"]="Team";
$language["TEAM_ERROR"]="You don't seem to have permission to view this file";
$language['WS_WARNED_USER'] = 'WARNED USER!';
$language['WS_WARN_REMOVED_SUBJECT'] = 'Your Warning time has expired!!';
$language['WS_WARN_REMOVED_MESSAGE'] = 'You are no longer Warned, please be careful to not make the same mistake again!!';
$language['WS_WD'] = 'Warning Data';
$language['WS_RFW'] = 'Reason for increasing the Warning';
$language['WS_ET'] = 'Expire Time';
$language['WS_WT_PLURAL'] = 'Warned Times';
$language['WS_WAB'] = 'Warn added by';
$language['WS_AM'] = 'Admin Menu';
$language['WS_RW'] = 'Remove Warning';
$language['WS_WS'] = 'Warning Settings';
$language['WS_WT'] = 'Warn Time';
$language['WS_D'] = 'Day';
$language['WS_W'] = 'Week';
$language['WS_W_PLURAL'] = 'Weeks';
$language['WS_Y'] = 'Year';
$language['WS_WM'] = 'Warn Motivation';
$language['WS_WC_SUBJ'] = 'Warning level decreased';
$language['WS_WC_MSG'] = 'We have decreased your Warning level for the following reason';
$language['WS_WCF'] = 'Warning canceled for';
$language['WS_WR'] = 'Warning removed';
$language['WS_YHRAW'] = 'Warning level increased';
$language['WS_TRFW'] = 'We have increased your Warning level for the following reason';
$language['WS_EDFW'] = 'Expire date for the warning';
$language['WS_WU'] = 'Warned User';
$language['WS_R'] = 'Reason';
$language['WS_WARNED_USERS'] = 'Warned users';
$language['WS_WL'] = 'Warning Level';
$language['WS_WARN'] = 'Warn';

// More Warn system definitions
$language['WS_SEND_PM'] = "PM user";
$language['WS_CANT_WARN'] = "You can't warn yourself!";
$language["WS_UNK_TYPE"] = "Unknown Type!";
$language['WS_SUBMIT'] = "Submit";
$language['WS_MUST_GIVE_REASON'] = "You must give a reason for the warning!";
$language['WS_RFRW'] = 'Reason for decreasing the Warning';
$language["WS_CANT_DEC"] = "You cannot decrease the warning level any further!";
$language["WS_CANT_INC"] = "You cannot increase the warning level any further!";
$language["WS_WARN_EXP"] = "Warn Expiry (days)";
$language["WS_BLANK_4_INF"] = "(Leave Blank for a Permanant warning)";
$language["WS_AUTO_MSG"] = "[b][color=red]This is an automated message, please do not respond[/color][/b]";
$language["WS_YOUR_CUR_LEV"] = "Your current warn level is";
$language["WS_DEC_IN_DAYS_1"] = "As long as you don't receive any further warnings your warn level will decrease automatically in";
$language["WS_DEC_IN_DAYS_2"] = "days.";
$language["WS_WARNLOG"] = "Warn Log";
$language["WS_NEXT_AUTO_DOWNGRADE"] = "Next automatic downgrade";
$language["WS_WARNED_BY"] = "Warned By";
$language["WS_NOTES"] = "Notes";
$language["WS_NOTHING_2_C"] = "Nothing to see here!";
$language["WS_LOGS_4"] = "Saved warn logs for";
$language["WS_INC_WL"] = "Increased Warning Level";
$language["WS_DEC_WL"] = "Decreased Warning Level";
$language['WS_INC'] = "Increase warning level";
$language['WS_DEC'] = "Decrease warning Level";
$language["WS_AUTO_REASON"] = "Automatic Warn Level Decrease";
$language["WS_WARNED_ON"] = "Warned on";
$language["WS_REP_ON"] = "Reprieved on";
$language["WS_REP_BY"] = "Reprieved By";
$language["WS_WHY_BOOTED"] = "Automatic boot for reaching the maximum warn level";

// Circling Last Torrents
$language["CIRC_NEW_REL"] = "Newest Releases";
$language["CIRC_NO_TORR"] = "Currently no torrents...";
$language["CIRC_SEEDERS"] = "Seeders";
$language["CIRC_LEECHERS"] = "Tõmbajaid";

//Private Shouts
$language['SHOUTBOXP']='Private Shouts';

// Block Comments
$language["BC_AB_ERR"] = "Abuse Error";
$language["BC_U_R_BANNED"] = "You are banned from making comments due to abuse!! If you think this is a mistake please contact a member of staff.";
$language["BC_COM_LOCKED"] = "Comments are locked";
$language["BC_OVERALL_ABUSE"] = "Due to abuse, comment posting has been disabled on this torrent!";

// Account Parked
$language["PARK_PARKED"] = "(Parked)";
$language["PARK_ACC_PARKED"] = "Account Parked";
$language["PARK_ACC_PARKED_INFO_1"] = "Your account is currently parked. To unpark your account please";
$language["PARK_ACC_PARKED_INFO_2"] = "click here";
$language["PARK_PARK_ACC"] = "Park Account";

// Hit & Run
$language["HNR_BLOCK_SETTINGS"] = "Hit & Run Block Settings";
$language["HNR_EVENT_DATE"] = "Did a HIT & RUN on";
$language["USERNAME"] = "Username";
$language["SEEDING_TIME"] = "Seeding Time";
$language["NO_HR"] = "No Hit & Runners found";
$language["HNR_WARN_DEC"] = "Automatic Hit & Run decrease!";
$language["HNR_WARN_INC"] = "Automatic Hit & Run increase!";
$language["HNR_CANT_DOWN"] = "You are not permitted to download any new torrents due to your Hit & Run record, to unlock torrent downloads you will need to seed what you've already downloaded!";

// Low Ratio Warn & Ban System
$language["RAT_SUBJ"] = "Low Ratio Warning!";
$language["RAT_SUBJ_2"] = "Low Ratio Warning Two!";
$language["RAT_SUBJ_3"] = "Final Low Ratio Warning!";
$language["RAT_NOTHING_YET"] = "Nothing to see yet";
$language["RAT_WARN_X"] = "warn x";
$language["RAT_BANNED"] = "banned";

// Hide Online Status
$language["HOS_INV_2_OTHERS"] = "Invisible to other users";
$language["HOS_HIDDEN"] = "Peidetud";

// Upload Multiplier
$language["UPM_UPL_MULT"] = "Upload Multiplier";
$language["UPM_RANK_INV"] = "Rank Invalid";

// Proxy / Blacklist
$language['CHANGE_CONFIRM']='Are you sure you want to change this users download rights?';
$language['CHANGED']='Change';

//Auto Images
$language["IMG_SUCCESS"]="<center><h4>Image Succesfully Processed!<br>Click the Image to insert into the Description.</h4></center>";
$language["IMG_INFO"]="<center>Images Searched against your File Name. Click to use.</center>";

// New Comment Layout
$language["NCL_COM_EDIT"] = "Comment Edit";

//FAQ
$language["MNU_FAQ"]="K.K.K.";
$language["FAQ_NAME"]="Faq group name";
$language["FAQ_TEXT"]="Faq group description";
$language["FAQ_SORT_INDEX"]="Faq group sort index";
$language["FAQ_ADD"]="Insert Faq group";
$language["FAQ_QUESTION"]="Faq question";
$language["FAQ_ANSWER"]="Answer";
$language["FAQ_QUESTION_ADD"]="Insert Faq guestion/answer";
$language["FAQ_QUESTION_SEARCH_ALL"]="Search all...";
$language["FAQ_AGREE"]="I have read and agree to follow the terms set out in this FAQ.";

// Torrent Bookmarks
$language["TB_FAV"] = "Torrentite järjehoidja";
$language["TB_BOOKMARK"] = "Bookmark This Torrent";
$language["BOOKMARK"]="Your Bookmarked Torrents";
$language["ADDB"]="Bookmark";
$language["TB_DOWN"] = "Down";
$language["TB_BOOKMARKED"] = "Bookmarked";
$language["TB_ALREADY_BOOK"] = "Torrent already bookmarked";
$language["TB_NO_TORR_EXISTS"] = "No torrent exists for the supplied info hash";
$language["TB_NOTHING_TO_SEE"] = "Nothing to see here yet";

// Birthday hack
$language["DOB"]="Date of Birth";
$language["DOB_FORMAT"]="<b>Päev (PP) / Kuu (KK) / Aasta (AAAA)</b>";
$language["USER_AGE"]="Vanus";
$language["HB_SUBJECT"]="Palju Õnne sünnipäevaks";
$language["HB_MESSAGE_1"]=":hbd:\n\nYour account has been credited with ";
$language["HB_MESSAGE_2"]=" of upload credit. (";
$language["HB_MESSAGE_3"]=" GB for every year of your life). The staff of $SITENAME wish you all the best for the future.\n\n:yay:";
$language["ERR_BORN_IN_FUTURE"]="Time Traveller huh? You can't be born in the future!";
$language["ERR_DOB_1"]="I don't believe you are ";
$language["ERR_DOB_2"]=" aastat vana.";
$language["INVALID_DOB_1"]="Entered date of birth (";
$language["INVALID_DOB_2"]=") is invalid";

$language["CANT_VIEW_PAGE"] = "I'm sorry, you are not permitted to view this page!";

$language["UN_ADDED_BY"] = "Added By";
$language["UN_NOTE"] = "Note";
$language["UN_NOTES"] = "Notes";
$language["UN_ADD_NOTE"] = "Add Note";

$language['REALCOUNTRY']='IP riik';
//advanced torrent search extra
$language['UPLS']='Üleslaadijad';

$language["UN_BONUS_GENERAL_1"]="has spent";
$language["UN_BONUS_GENERAL_2"]="bonus points on";
$language["UN_VIP_RANK"]=" a VIP rank.";
$language["UN_ONE_INV"]="one invite.";
$language["UN_THREE_INV"]="three invites.";
$language["UN_FIVE_INV"]="five invites.";
$language["UN_GIFT_SEND_1"]="has sent";
$language["UN_GIFT_SEND_2"]="a gift of";
$language["UN_GIFT_SEND_3"]="bonus points.";
$language["UN_GIFT_REC_1"]="has received a gift of";
$language["UN_GIFT_REC_2"]="bonus points from";
$language["UN_UL_CREDIT"]="of upload credit.";
$language["UN_UL_USERNAME"]="a username change to";
$language["UN_UL_TITLE"]="the custom title of";
$language["UN_DONATE_1"]="has made a donation of";
$language["UN_DONATE_2"]="and received";
$language["UN_DONATE_3"]="of upload credit";
$language["UN_DONATE_4"]="VIP rank until";
$language["UN_DONATE_5"]="days";
$language["UN_DONATE_6"]="VIP rank for a further";
$language["UN_DONATE_7"]="as this member is staff their rank was not affected.";
$language["UN_DONATE_8"]="Freeleech slots.";
$language["UN_WLEV_INC"]="Warn Level increased, refer to the Warn Log for more details";
$language["UN_WLEV_DEC"]="Warn Level decreased, refer to the Warn Log for more details";
$language["UN_AUTORANK_1"]="has had his/her rank automatically changed from";
$language["UN_AUTORANK_2"]="to";
$language["UN_AUTORANK_3"]="by Autorank";
$language["UN_AUTORANK_4"]="U";    // Short for Uploaded
$language["UN_AUTORANK_5"]="D";    // Short for Downloaded
$language["UN_AUTORANK_6"]="SR";   // Short for Share Ratio
$language["UN_AUTORANK_7"]="Inf."; // Short for Infinite
$language["UN_BOOTED"]="has been automatically booted for reaching the maximum warn level";
$language["UN_MAN_BOOTED_1"]="has been manually booted until";
$language["UN_MAN_BOOTED_2"]="for";
$language["UN_UNBOOTED"]="has been manually unbooted";
$language["UN_BAN_BUT_1"]="has been banned via the Ban Button for";

//end of month paypal setting diemthuy
$language["AADS_AUTO"] ="Auto set new month";
//for forced faq.
$language["SUBMIT"] ="Submit";

$language["STAFF_COMMENT"]="Staff comment";

$language["QUAR_PM_SUBJ"]="Suspected Hacking Attempt";
$language["QUAR_PM_MSG_1"]="tried to upload a file containing php code. This file was quarantined";
$language["QUAR_PM_MSG_2"]="It is however possible this is a false negative so please check this file with a hex editor or something before banning this user."."\n\n"."This attempt was made via";
$language["QUAR_OUTPUT"]="Your attempt to upload a file containing php code has been thwarted and you have been reported to the site Owner!";
$language["QUAR_ERR"]="Quarantine Error";

$language["QUAR_DIR_PROBLEM_1"]="Quarantine Directory";
$language["QUAR_DIR_PROBLEM_2"]="does not exist, please set a valid Quarantine Directory in [b]Admin Panel-->Security Suite Settings[/b]";
$language["QUAR_DIR_PROBLEM_3"]="is not writable, please CHMOD to 0777";
$language["QUAR_UNABLE"]="Unable to quarantine file due to unforseen error, please check your other PM's for details of how to resolve this issue";
$language["QUAR_NOT_SET"]="Directory not set";

$language["QUAR_TMP_FILE_MISS"]="Can't find the temp file!";


$language["UIMG"]="Kasutaja pildid & Pealkirjas";
$language["UIMG_NO_ICONS"]="Teil pole veel kasutajaikoone";
$language["UIMG_TM_NO_ICONS"]="Sellel liikmel pole veel kasutaja ikoone";
$language["UIMG_MSG_1"]="Tere tulemast";
$language["UIMG_MSG_2"]="siin näete kõiki saadaolevaid kasutaja pilte/pealkirju, sealhulgas teie enda pilte (kui teil neid on)";
$language["UIMG_MSG_3"]="Sinu kasutaja pildid";
$language["UIMG_USR_ICONS"]="Kasutajaikoonid";
$language["UIMG_USR_IMGS"]="Kasutaja pildid";

//shoutbox clean
$language["SHOUT_CLEANED"]="[b]Shoutbox Just got cleaned![/b][IMG]".$BASEURL."/images/sweep.gif[/IMG]";

$language["ERR_PASS_TOO_WEAK_1"]="Your password is too weak.<br />For security reasons it must contain at least";
$language["ERR_PASS_TOO_WEAK_1A"]="The password is too weak.<br />For security reasons it must contain at least";
$language["ERR_PASS_TOO_WEAK_2"]="lower case letter";
$language["ERR_PASS_TOO_WEAK_2A"]="lower case letters";
$language["ERR_PASS_TOO_WEAK_3"]="upper case letter";
$language["ERR_PASS_TOO_WEAK_3A"]="upper case letters";
$language["ERR_PASS_TOO_WEAK_4"]="number";
$language["ERR_PASS_TOO_WEAK_4A"]="numbers";
$language["ERR_PASS_TOO_WEAK_5"]="symbol";
$language["ERR_PASS_TOO_WEAK_5A"]="symbols";
$language["ERR_PASS_TOO_WEAK_6"]="Here is a strong password you may want to use";
$language["SECSUI_ACC_PWD_1"]="Your password needs:";
$language["SECSUI_ACC_PWD_1A"]="The password needs:";
$language["SECSUI_ACC_PWD_2"]="To be at least";
$language["SECSUI_ACC_PWD_3"]="character in length";
$language["SECSUI_ACC_PWD_3A"]="characters in length";
$language["SECSUI_ACC_PWD_4"]="To have at least";
$language["SECSUI_ACC_PWD_5"]="lower case letter";
$language["SECSUI_ACC_PWD_5A"]="lower case letters";
$language["SECSUI_ACC_PWD_6"]="upper case letter";
$language["SECSUI_ACC_PWD_6A"]="upper case letters";
$language["SECSUI_ACC_PWD_7"]="number";
$language["SECSUI_ACC_PWD_7A"]="numbers";
$language["SECSUI_ACC_PWD_8"]="symbol";
$language["SECSUI_ACC_PWD_8A"]="symbols";

$language["DIRECT_LINK"]="Direct Download<br />(valid url)";
$language["DIRECT_DOWNLOAD"]="Direct Download";

$language["AM_ABOUT_ME"] = "Minust";

$language["MTS_ANNURL"] = "Announce URL";
$language["MTS_SEED"] = "Jagajaid";
$language["MTS_LEECH"] = "Tõmbajaid";
$language["MTS_DOWN"] = "Downloaded";

$language["LAST_LOCATION"]="Last location";
$language["WHEN_LOCATION"]="When";
$language["WATCH_LOG"]="Watch Log";

$language["PARTNERS"]="Our Partners";
$language["PAR_SURE_DEL"]="Are you sure you want to delete this partner?";
$language["PAR_BANNER"]="Banner";
$language["PAR_NAME"]="Name";
$language["PAR_LINK"]="Link";
$language["PAR_ADDEDBY"]="Added By";
$language["PAR_EDDEL"]="Edit/Delete";
$language["PAR_NO_PART"]="No partners so far...";
$language["PAR_NO_PART_2"]="No partner with that id";
$language["PAR_ADD_NEW"]="Add A New Partner";
$language["PAR_TITLE"]="Title";
$language["PAR_BAN_URL"]="Banner URL";
$language["PAR_LINK"]="Link";
$language["PAR_3RD_PARTY"]="Some sites disable hotlinking of images so it is recommended to host it on a third party site.";
$language["PAR_UPDATE"]="Update";
$language["PAR_ED_PART"]="Edit Partner";
$language["PAR_CUR_BAN"]="Current Banner";
$language["PAR_BACK"]="Back";

//kcdmenu bars
$language['details_similar_torrents'] = "Similar torrents";
$language['details_name'] = "Name";
$language['details_seeders'] = "Seeders";
$language['details_leechers'] = "Leechers";
$language['details_size'] = "Size";
$language['details_date'] = "Added";
$language['imdb'] = "IMDB Info";
$language['files'] = "Failid";
$language['comments'] = "Comments";
$language['trackerlist'] = "Tracker List";
$language['cast'] = "Cast & Crew";
$language['plot'] = "Plot";
$language['imdbcomments'] = "IMDB User Comments ";
$language['quotes'] = "Quotes";
$language['trivia'] = "Trivia";
$language['media'] = "Media & Audio";
$language['usercomments'] = "Members Comments";


$language["SHORT_EXTERNAL"]="EXT";
$language["LOGS_PHP"]="PHP Error Log";
$language["LOGS_LINE_AMT"]="<b>Line amount:</b>";
$language["LOGS_LINE_AMT_1"]="<b>How many lines to show of the log</b>";
$language["LOGS_COOLY_NAME"]="<b>Log Name:</b>&nbsp;The name you wish to call your logs. Think of something authentic.";
$language["LOGS_COOLY_NAMES"]="This will be the same name for each log apart from the date stamp.";
$language["LOGS_COOLY_PATH"]="<b>Log Path:</b>&nbsp;Above doc root would be a good choice \"if possible\" no forward slash<br /> and folder must be writable.If you have an open basedir restriction you are best to keep the current path.";
$language["LOGS_COOLY_PATHS"]="Recommended:";
$language["LOGS_COOLY_NOTE"]="<b>If u change path to another doc root dir be sure to copy the .htaccess to the new dir.</b>";
$language["LOGS_COOLY_LIST"]="The list of old logs in your folder.";
$language["LOGS_COOLY_FLUSH"]="Flush out</a> old logs";
$language['SSL'] = "Force SSL:";
$language['SSL_DESC'] = "&nbsp;Force a Secure Connection in Site.";
$language['ADDTHIS_SHARE']='Share';
$language['ADDTHIS_SHARE2']='Share with friends';

$language["REFRESH_PEERS"]="Refresh Peers";

$language["SB_GET_1_INV"]="Get 1 Invite";
$language["SB_GET_3_INV"]="Get 3 Invites";
$language["SB_GET_5_INV"]="Get 5 Invites";
$language["SB_SHORT_MAXIMUM"]="Max.";
$language["SB_DECREASE_HNR"]="Remove oldest Hit & Run";
$language["SB_OLDEST_HNR"]="Your oldest Hit & Run";
$language["SB_NO_HNR"]="No Hit & Runs found";

$language["HNR_NOT_ENOUGH"]="Not enough bonus points to purchase a Hit & Run removal";
$language["HNR_ABBREVIATION"]="H&Rs";

$language["SP_SHOW_PORN"] = "Show Porn?";

$language["PRIVATE"]="Private Profile";
$language["PP_PRIVATE"]="Private";
$language["PP_PUBLIC"]="Public";
$language["PP_PROFILE"]="Profile";

$language["LANGUAGE"]="Language";
$language["LANG_ARB"]="arabic";
$language["LANG_BAN"]="Bangla";
$language["LANG_BUL"]="Bulgarian";
$language["LANG_CHI"]="Chinese";
$language["LANG_CZE"]="Czech";
$language["LANG_DAN"]="Danish";
$language["LANG_DUT"]="Dutch";
$language["LANG_ENG"]="English";
$language["LANG_ENG_USA"]="English USA";
$language["LANG_ENG_GB"]="English GB";
$language["LANG_FIN"]="Finnish";
$language["LANG_FRE"]="French";
$language["LANG_QUE"]="French Canadian";
$language["LANG_GER"]="German";
$language["LANG_GRE"]="Greek";
$language["LANG_HUN"]="Hungarian";
$language["LANG_IRI"]="Irish";
$language["LANG_ITA"]="Italian";
$language["LANG_POL"]="Polish";
$language["LANG_POR-BR"]="Portuguese-BR";
$language["LANG_POR-PT"]="Portuguese-PT";
$language["LANG_ROM"]="Romanian";
$language["LANG_RUS"]="Russian";
$language["LANG_SER"]="Serbocroatian";
$language["LANG_SPA"]="Spanish";
$language["LANG_SWE"]="Swedish";
$language["LANG_TUR"]="Turkish";
$language["LANG_VIE"]="Vietnamese";

$language['MPLAYER']='Media Clip';
$language['MPLAYERNON']='Media Clip Not Available';

$language["SIGNATURE"]="Forum Signature";

$language["TOT_MOST_ONLINE"]="Top 10 Online Times";
$language["TOT_TIME_IS"]="Your total online time is";
$language["TOT_ONLINE_TIME"]="Online Time";

$language["LDB_AGO_LEG"]="Ago Legend: d=day, w=week, m=min, h=hour, s=second.";
$language["LDB_AGO_NTSH"]="Nothing to see here";
$language["LDB_DB_EMPTY"]="The database is empty";

$language["IMGUP_DIM_TOO_BIG_1"]="Sorry, your image dimensions are too big.<br />The maximum dimensions are:";
$language["IMGUP_DIM_TOO_BIG_2"]="Pixels.<br /><br />Your image is:";
$language["IMGUP_DIM_TOO_BIG_3"]="Pixels.<br /><br />Please resize your image and try again.";

// Friends DT
$language["FL_FRIENDLIST"]="Friendlist";
$language["FL_UNFRIEND"]="Are you sure you want to unfriend this user?";
$language["FL_REFRIEND"]="Are you sure you want to be friends with this user?";
$language["FL_REJECT"]="Are you sure you want to reject this users offer of friendship?";
$language["FL_REMOVE"]="Are you sure you want to delete this pending friendship request?";
$language["FL_FPENDING"]="Pending Requests";
$language["FL_FFRIEND"]="Friend Requests";
$language["FL_FAVATAR"]="Avatar";
$language["FL_FUN"]="User Name";
$language["FL_FUL"]="User Level";
$language["FL_FRD"]="Request Date";
$language["FL_FFD"]="Friends Since";
$language["FL_FFF"]="Friends of";
$language["FL_FRDD"]="Reject Date";
$language["FL_FRU"]="Reject User";
$language["FL_FCONF"]="Confirmed Friends";
$language["FL_FREJ"]="Rejected Users";
$language["FL_FRR"]="Remove Request";
$language["FL_FSTAT"]="Status";
$language["FL_FRE"]="Re-Friend";
$language["FL_FUF"]="Un-Friend";
$language["FL_FATF"]="Add To Friends";
$language["FL_FMF"]="Mutual Friend";
$language["FL_W2BF"]="Want to be Friends";
$language["FL_FRREQ"]="Friendship Request!";
$language["FL_W2BF2"]="wants to be friends with you."."\n\n"."Please go to your friendlist to accept or reject this request";
$language["FL_AUTOMSG"]="\n\n"."[b][color=red]AUTOMATIC SYSTEM MESSAGE - PLEASE DON'T REPLY !![/color][/b]";
$language["FL_ALRFR"]="This member is already a friend of yours.";
$language["FL_SELFFR"]="You can't be friends with yourself, right?";
$language["FL_REQDEL"]="Friendship Request Deleted!";
$language["FL_DELREQ_1"]="has deleted the friendship request."."\n\n"."It's therefore a pretty good bet that";
$language["FL_DELREQ_2"]="doesn't want to be friends after all."."\n\n"."For that reason you will no longer see";
$language["FL_DELREQ_3"]="in your request list any more.";
$language["FL_FRACC_SUBJ"]="Friendship Accepted!";
$language["FL_FRACC_MSG"]="has accepted your friendship request.";
$language["FL_FRCOMMON"]="\n\n"."You can see in your friendlist that the status has changed.";
$language["FL_CHANGEDMIND"]="wants to be friends with you again"."\n\n"."Go to your friend list to accept or reject this request";
$language["FL_FRREJ_SUBJ"]="Friendship Rejected!";
$language["FL_FRREJ_MSG"]="has rejected your friendship."."\n\n"."You can see in your friendlist that the status has changed.";
$language["FL_NOPENFRO"]="You have no outgoing friend requests pending right now!";
$language["FL_NOPENFRI"]="You have no incoming friend requests pending right now!";
$language["FL_OFFLINE"]="Offline";
$language["FL_ONLINE"]="Online";
$language["FL_NOFRIENDS"]="You have no friends right now!";
$language["FL_NOREJECTS"]="You have no rejected or ex-friends right now!";
$language["FL_FRIENDS"]="Friends";
$language["FL_THISISU"]="This is you!";
$language["FL_HASNOFRIENDS"]="This user has no friends right now!";

$language["BUMP_THIS_TORR"]="Bump to the top";

$language["ARC_NEW"]="New";
$language["ARC_ARC"]="Archived";
$language["ARC_UPLOAD_TYPE"]="Upload type";
$language["ARC_ERR_NO_ARC"]="You don't have permission to view the details of Archived torrents!";
$language["ARC_ERR_NO_NEW"]="You don't have permission to view the details of New torrents!";
$language["ARC_ERR_NO_BOTH"]="You don't have permission to view the details of New or Archived torrents!";

$language["FLS_FREE_SLOTS"]="Freeleech Slots";
$language["FLS_DONATE_INFO_1"]="Get <span style='color:red;'>one</span> Freeleech slot for every";
$language["FLS_DONATE_INFO_2"]="you donate.<br />(These can be used to create Custom Free torrents of your own choosing)";
$language["FLS_LOCKED"]="Locked";
$language["FLS_UNLOCKED"]="Unlocked";
$language["FLS_CUSTOM_FL"]="Custom freeleech";
$language["FLS_ALREADY_HAVE"]="You already have this torrent selected as a custom freeleech torrent";
$language["FLS_NONE_REMAINING"]="You have no freeleech slots remaining";
$language["FLS_FREE_BY_OTHER"]="This torrent is already free by other means.";
$language["FLS_PLS_CONFIRM"]="Please confirm your action";
$language["FLS_R_U_SURE1"]="Are you sure you want to use a freeleech slot on this torrent?<br />You have";
$language["FLS_R_U_SURE2A"]="freeleech slot remaining.";
$language["FLS_R_U_SURE2B"]="freeleech slots remaining.";
$language["FLS_USED_SLOT1"]="Used freeleech slot on the";
$language["FLS_USED_SLOT2"]="torrent";
$language["FLS_USED_SLOT3"]="Return to torrents";
$language["TOW_NONE_ATM"]="<b>No torrent of the week at the moment!</b>";
$language["TOW_SEEDS"]="jagajaid";
$language["TOW_LEECH"]="tõmbajaid";
$language["TOW_EXPIRES"]="Expires:";
$language["CAPTCHA_ERROR"]="The reCAPTCHA wasn't entered correctly. Go back and try it again." ."(reCAPTCHA said:";
$language["TCOM_AUTOPM_1"]="has added a comment to your torrent";
$language["TCOM_AUTOPM_2"]="This is an automated system message."."\n"."If you wish to turn it off please edit your tracker profile.";
$language["TCOM_AUTOPM_SUBJ"]="Torrent Comment Added";
$language["TCOM_COMMENTPM"]="Comment Notification";
$language["ERR_NAME_BANNED"]="This username is banned";
$language["NO_POLLS"]="<b>No polls at the moment!</b>";
$language["TOTAL_VOTES"]="Total votes";
$language["DISCUSS_POLL"]="Discuss/vote in this Poll";
$language["BONUS_INFO13"]="You will receive an additional";
$language["BONUS_INFO14"]="per hour if you are seeding an archived torrent.";
$language["FLS_BONUS_GET"]="Get 1 Freeleech slot";
$language["FLS_NOT_ENOUGH"]="You don't have enough bonus points to get a Freeleech slot!";
$language["FLS_SLOTS"]="Freeleech slots";
$language["ERR_NEEDS_RECONFIG_1"]="The rank permissions for";
$language["ERR_NEEDS_RECONFIG_2"]="hack need reconfiguring.";
$language["ERR_NEEDS_RECONFIG_3"]="Please inform the site administrators of this error message.";
$language["AUTOTOPIC_CLICK_HERE"]="click here";
$language["TVDB_EP_NAME"]="Episode Name";
$language["TVDB_GUESTS"]="Guest Stars";
$language["TVDB_AIRED"]="Aired";
$language["TVDB_NETWORK"]="Network";
$language["TVDB_SHOW_AIRS"]="Show Airs";
$language["TVDB_AIRS_1"]="at";
$language["TVDB_AIRS_2"]="for";
$language["TVDB_AIRS_3"]="minutes";
$language["TVDB_NO_OVERVIEW"]="[No episode overview added]";
$language["TVDB_UL_TITLE"]="TheTVDB Series ID";
$language["TVDB_UL_1"]="(Optional)";
$language["TVDB_UL_2"]="The number after <span style='color:lime;font-weight:bold;'>&id=</span>, eg for <a href='http://thetvdb.com/?tab=series&id=79349' target='_blank'>Dexter</a> (http://thetvdb.com/?tab=series&id=<span style='color:lime;font-weight:bold;'>79349</span>).";
$language["SYSTEM_USER"]="System";

$language["PRUNE_WARN_SUBJ"]="Account prune warning";
$language["PRUNE_WARN_SUBJ2"]="Account pruned";
$language["PREUS_PKA"]="<span style='color:lime;'>Previously Known As:</span>";
$language["PREUS_PUN"]="Previous username?";
$language["IBD_NEED_TO_INTRODUCE_1"]="In order to download torrents from this tracker you must first";
$language["IBD_NEED_TO_INTRODUCE_2A"]="create a new";
$language["IBD_NEED_TO_INTRODUCE_2B"]="add to our";
$language["IBD_NEED_TO_INTRODUCE_3"]="introduction topic.<br /><br />You can do this";
$language["MAGNET_DOWN_USING"]="Download this torrent using magnet";
$language["PFET_NO_UPLOAD_1"]="Your rank (";
$language["PFET_NO_UPLOAD_2"]=") does not have permission to upload external torrents to this tracker.";
$language["ETH_START_DATE"]="Started";
$language["ETH_COMP_DATE"]="Completed";
$language["ETH_LAST_ACTION"]="Last Action";
$language["NOT_AUTH_REQ"]="You are not authorised to view this section.";

$language["MNU_FHOST"]="Failide majutamine";
$language["FHOST"]="Failide majutamine";
$language["DEL_REASON"] = "Reason for Torrent Deletion:";
$language['DEL_SUBJECT'] = 'Your torrent has been deleted';
$language['DEL_BODY1'] = 'Hi';
$language['DEL_BODY2'] = 'Your torrent';
$language['DEL_BODY3'] = 'has been deleted from the tracker for the following reason:';

$language['PERMISSIONS']='Permissions';
$language["NOT_ACCESS_TORR_DETAILS"]="You don't have access to torrent details in that category!";
$language["NOT_ACCESS_TO_DOWNLOADS"]="You don't have access to download torrents from that category!";

$language['ALL_USER_UPLOADS']='All Uploads From This Uploader';

$language["USER_EDIT"]="It has been over 24 hours since you uploaded this torrent. Edit is now disabled. If you still want to change something you need to contact a staff member";
$language["USER_DELETE"]="It has been over 24 hours since you uploaded this torrent. Delete is now disabled. If you still want to change something you need to contact a staff member";

$language['REP']='Maine';

$language['NOTEPAD']=' Märkmik ';
$language['NOTEPAD1']='(';
$language['NOTEPAD2']=')';
$language['NOTEPAD3']=' märkmed';
$language['NOTE_ADD_NEW']='Lisa uus personaalne märge';
$language['NOTE_DATETIME']='Kuupäev/Aeg';
$language['NOTE_DEL_ERR']='You must select at least one note to delete.';
$language['NOTE_EDIT']='Edit';
$language['NOTE_EDIT_ERROR']="You shouldn't try to edit other people's notes !";
$language['NOTE_ID']='ID';
$language['NOTE_NOTE']='Note';
$language['NOTE_VIEW']='Read';
$language['NOTE_READ_ERROR']="You shouldn't try to read other people's notes !";
$language['NOTE_VIEW_MORE']='View more notes';

$language['stderr_error']='Error';
$language['stderr_only_coder']='Only site-coders can do this! And you know it!';
$language['stderr_no_na']='You can\'t choose NA option!';
$language['stderr_invalid_id']='Invalid ID';
$language['stderr_only_staff_can_view']='Only staff can view bugs';
$language['stderr_missing']='Your missing something?';
$language['stderr_problem_20']='We can\'t use a problem text there is less then 20 chars.';
$language['stderr_title_10']='We can\'t use a title there is less then 10 chars.';
$language['stderr_sucess']='Success';
$language['stderr_sucess_2']='Your bug has been sent to our coder.<br/>You have choosen priority: %s';
$language['stderr_something_is_wrong']='There was a error.. Please try again.';
$language['low']='Low';
$language['high']='High';
$language['veryhigh']='Very High';
$language['fixed']='Fixed';
$language['ignored']='Ignored';
$language['select_one']='Select one';
$language['fix_problem']='Fix this problem';
$language['ignore_problem']='Ignore this problem';
$language['title']='Title';
$language['added']='Added';
$language['by']='By';
$language['priority']='Priority';
$language['problem_bug']='Problem (Bug)';
$language['status']='Status';
$language['coder']='Coder';
$language['proper_title']='Please choose a proper title.';
$language['describe_problem']='Describe the problem as best as possible';
$language['only_veryhigh_when']='Choose only very high if the bug really is a problem for using the site.';
$language['submit_btn_fix']='Fix!';
$language['submit_btn_send']='Send this bug!';
$language['go_back']='Go back';
$language['h1_count_bugs']="There is <font color='#FF0000'>%s</font> new bug%s. Please check them";
$language['delete_when']='All solved bugs will be deleted 3 weeks after the date it was added.';
$language['no_bugs']='There is no bugs =]. Good coder we have xD';
$language['MNU_BUGS']='Report a Bug';

$language["GROUP_STYLE"]="Group Style";
$language["REC_BY"] = "Recommended by";


//Uploader Request Form
$language['ACP_ULR']='Uploader Request Settings';
$language['UPLOADER_SETTINGS']='Uploader Request PM Settings';
$language['STAFF_ID']='Staff ID to send PM to';
$language['SEND_STAFF']='Send to all staff';
$language['ULR']='Uploader Request Form';
$language['UPLOADER_ENABLED']='Enabled';
$language['UPLOADER_DISABLED']='Disabled';
$language['ATTENTION']='ATTENTION!';
$language['Uploader_MSG']='If you want to be a uploader on this site , fill in this form please';
$language['QUESTION_1']='Connection?';
$language['QUESTION_2']='What you intend to upload?';
$language['QUESTION_3']='Torrent Source?';
$language['QUESTION_4']='Do you upload on other site(s) & wich?';
$language['QUESTION_5']='Do you know how to make a torrent?';
$language['QUESTION_6']='Do you know to make rar archives?';
$language['QUESTION_7']='Do you know how to make SFV?';
$language['QUESTION_8']='Do you know how to make NFO?';
$language['QUESTION_9']='Do you have access to Scene rips?';
$language['QUESTION_10']='Why do you wanna upload on this site?';
$language['QUESTION_11']='Where have you heard about this site?';
$language['QUESTION_12']='Have you read the upload rules and do you agree to them?';
$language['QUESTION_13']='Can you upload at least 1 torrent per week?';
$language['QUESTION_14']='I understand I have to seed my torrents till there are at least 2 other seeds!';
$language['UPLOADER_YES']='Yes';
$language['UPLOADER_NO']='No';
$language['UP_SPEED']='- upload speed';
$language['DOWN_SPEED']='- download speed';

//Client Logging
$language['CLIENT_PORT']='Client/Port Info';
$language['CLIENT']='Client';
$language['PORT']= 'Port';

//Give Points to Uploader
$language['POINTS_GIVEN']= 'Points given to this torrent of which';
$language['IN_TOTAL']= 'In Total';
$language['FROM_YOU']= 'from you.<br /><br />By clicking on the coins you can give points to the uploader of this torrent.<br /><br />';
$language['SEND_POINTS']= 'Send Points'; 
$language['POINTS_1']= '10 Points';
$language['POINTS_2']= '20 Points';
$language['POINTS_3']= '50 Points';
$language['POINTS_4']= '100 Points';
$language['POINTS_5']= '200 Points';
$language['POINTS_6']= '500 Points';
$language['POINTS_7']= '1000 Points';

$language["MNU_MASS_EMAIL"]="Mass Email";
?>