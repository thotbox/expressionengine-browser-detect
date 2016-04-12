<?php

$plugin_info = array(
    'pi_name' => 'Thotbox: Browser Detect',
    'pi_author' =>'Shane Woodward',
    'pi_description' => 'HTTP_USER_AGENT browser detection',
    'pi_version' =>'1.1',
    'pi_usage' => browser_detect::usage()
);

class browser_detect {

    public function browser() {

        $this->EE =& get_instance();
        $agent = '';

        /* Internet Explorer 11 */

        if (strpos($_SERVER['HTTP_USER_AGENT'],'Trident/7.0')) {
            $agent = 'IE11';
        }

        /* Internet Explorer 6-10 */

        else if (strpos($_SERVER['HTTP_USER_AGENT'],'MSIE')) {
            if (strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 6')) {
                $agent = 'IE6';
            }
            else if (strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 7')) {
                $agent = 'IE7';
            }
            else if (strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 8')) {
                $agent = 'IE8';
            }
            else if (strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 9')) {
                $agent = 'IE9';
            }
            else if (strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 10')) {
                $agent = 'IE10';
            }
            else {
                $agent = 'IE';
            }
        }
        
        /* WebKit */

        else if (strpos($_SERVER['HTTP_USER_AGENT'],'WebKit')) {        
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Chrome')) {
                $agent = 'Chrome';
            }
            else if (strpos($_SERVER['HTTP_USER_AGENT'],'Safari')) {
                if (strpos($_SERVER['HTTP_USER_AGENT'],'iPad')) {
                    $agent = 'iPad';
                }
                else if (strpos($_SERVER['HTTP_USER_AGENT'],'iPhone')) {
                    $agent = 'iPhone';
                }
                else {
                    $agent = 'Safari';
                }
            }
            else {
                $agent = 'WebKit';
            }
        }

        /* Gecko */

        else if (strpos($_SERVER['HTTP_USER_AGENT'],'Gecko')) {
            if (strpos($_SERVER['HTTP_USER_AGENT'],'Firefox')) {
                $agent = 'Firefox';
            }
            else {
                $agent = 'Gecko';
            }
        }

        /* Presto */

        else if (strpos($_SERVER['HTTP_USER_AGENT'],'Presto')) {
            $agent = 'Presto';
        }

        /* Unknown */

        else {
            $agent = 'Unknown';
        }
            
        return $agent;

    }
    
    public function family() {

        $this->EE =& get_instance();
        $agent = '';

        /* Internet Explorer 11 */

        if (strpos($_SERVER['HTTP_USER_AGENT'],'Trident/7.0')) {
            $agent = 'IE11';
        }

        /* Internet Explorer 6-10 */

        else if (strpos($_SERVER['HTTP_USER_AGENT'],'MSIE')) {
            $agent = 'IE';
        }
        
        /* WebKit */

        else if (strpos($_SERVER['HTTP_USER_AGENT'],'WebKit')) {        
            $agent = 'WebKit';
        }

        /* Gecko */

        else if (strpos($_SERVER['HTTP_USER_AGENT'],'Gecko')) {
            $agent = 'Gecko';
        }

        /* Presto */

        else if (strpos($_SERVER['HTTP_USER_AGENT'],'Presto')) {
            $agent = 'Presto';
        }

        /* Unknown */

        else {
            $agent = 'Unknown';
        }
            
        return $agent;

    }

    public static function usage() {
        ob_start();
    ?>
        Use the {exp:browser_detect:browser} tag to output browser identifier.
        Use the {exp:browser_detect:family} tag output browser family.
    <?php
        $text = ob_get_contents();
        ob_end_clean();
        return $text;
    }

}

?>