<?php
 
    include_once "mailer.php";
    td_delete_expired_listings();
 
    mail_for_scheduler_fb(">>>fb download started>>>>>>>>>>>>>>>");


    include_once( ETKINIX_PLUGIN_PATH . 'fb_event_download_core.php' );
    $pages = array("KucukBeyogluGroup","kucukciftlikpark","kikiortakoy","LifeParkistanbul","istanbullutfikirdar.icec","MachineClub","MamaShelterIstanbul","masklivemusic","menthamentha","minimuzikhol","vernonbeyoglu","beyoglumuaf","murekkepp","nayahistanbul","oldcitycomedyclub","Hasbihal.com.tr","congresiumankara","passagepubankara","AnkaraMeydanSahnesi","191418711043875");
    $categories = array("Konser");
    for($i=0;$i<sizeof($pages);$i++){
       array_push($categories, "Konser");
    }
    
    get_events($pages, $categories);

    $errorOutput = "";

    mail_for_scheduler_fb("END OF 3>>".$errorOutput);

    include_once( THEME_DOCUMENT_ROOT . '/inc/td-delete-expired-listings.php' );
    td_delete_expired_listings();

?>
