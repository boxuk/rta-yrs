<?php
    date_default_timezone_set('Europe/London');
    function url_get_contents($url) {
        if (!function_exists('curl_init')){ 
            die('CURL is not installed!');
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
    $res = array();
    $tr = array(
                    1362312000,
                    1357225200
                );
    $plc = $_GET['place'];
    $plc = str_replace(' ', '_', $plc);
    $wd = url_get_contents("http://api.wunderground.com/api/0bacfd293cdbf254/conditions/q/$plc.json");
    $wd = json_decode($wd);
    if (isset($wd->current_observation)) {
        $wu = $wd->current_observation;
        $ws = $wu->weather;
        $v = $wu->visibility_mi;
        $lt = $wu->display_location;
        $res['lat'] = $lt->latitude;
        $res['long'] = $lt->longitude;
        
        if (strpos($ws, 'Snow') !== false || strpos($ws, 'Ice') !== false || strpos($ws, 'Hail') !== false) {
            $w = 'snow';
        } else if (strpos($ws, 'Rain') !== false || strpos($ws, 'Drizzle') !== false || strpos($ws, 'Haze') !== false || strpos($ws, 'Spray') !== false) {
            $w = 'rain';
        } else if (strpos($ws, 'Mist') !== false || strpos($ws, 'Fog') !== false || strpos($ws, 'Dust') !== false || strpos($ws, 'Sand') !== false || strpos($ws, 'Thunderstorm') !== false) {
            $w = 'fog';
        } else if (strpos($ws, 'Cloud') !== false || strpos($ws, 'Clear') !== false || strpos($ws, 'Overcast') !== false) {
            $w = 'sun';
        } else {
            $res['value'] = '0';
            echo json_encode($res);
        }
        
        if (isset($w)) {
            $res['value'] = v($w, $tr, $v);
            echo json_encode($res);
        }
    } else {
        $res['value'] = '0';
        $res['long'] = '0';
        $res['lat'] = '0';
        echo json_encode($res);
    }
    function v($w, $tr, $v) {
        $tt = 0;
        foreach ($tr as $pt) {
            $ph = date('H', $pt);
            $tt += $ph;
        }
        $ta = ceil($tt / count($tr));
        
        if ($v < 0.01) {
            return '2';
        } else {
            if ($w == 'snow') {
                return '2';
            } else {
                if ($w == 'rain' || $w == 'fog') {
                    if (x($ta)) {
                        return '2';
                    } else {
                        return '1';
                    }
                } else {
                    return '0';
                }
            }
        }
    }
    
    function x($hour) {
        $t = time();
        $h = date('H', $t);
        $min = $hour - 1;
        $max = $hour + 1;
        if ($min < $h && $max > $h) {
            return true;
        } else {
            return false;
        }
    }