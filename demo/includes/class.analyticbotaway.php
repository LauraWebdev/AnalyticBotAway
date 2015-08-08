<?php
    /*
              AnalyticBotAway
            by Andreas Heimann
              @AndreasWebdev
    */

    class AnalyticBotAway {
        public $referer;
        
        public function __construct() {
            // get last visited page
            $referer = $_SERVER['HTTP_REFERER'];
            
            // array with common analyticbots
            $urlsArray = array( "buttons-for-website.com",
                                "buttons-for-your-website.com",
                                "videos-for-your-business.com",
                                "success-seo.com",
                                "semaltmedia.com",
                                "dailyrank.net",
                                "sitevaluation.org",
                                "100dollars-seo.com",
                                "forum69.info",
                                "best-seo-solution.com",
                                "best-seo-offer.com",
                                "semalt.semalt.com",
                                "semalt.com",
                                "7makemoneyonline.com",
                                "anticrawler.org",
                                "baixar-musicas-gratis.com",
                                "descargar-musica-gratis.net" );
            
            foreach($urlsArray as $url) {
                if(strpos($referer, $url) !== false) {              // is a bot
                    // return "404 - not found"
                    http_response_code(404);
                    // stop the whole page
                    exit();
                    return true;
                } else {                                            // is not a bot
                    return false;
                }
            }
        }
    }
?>
