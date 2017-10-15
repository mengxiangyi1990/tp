<?php
namespace app\admin\controller;

class Mxl extends Admin{


public function index(){

    $dom = new \DOMDocument('1.0','utf-8');

    $dom->load("http://flash.weather.com.cn/wmaps/xml/sichuan.xml");

    $cityNodeList = $dom->getElementsByTagName('city');

    foreach ($cityNodeList as $cityNode){
       if($cityNode->getAttribute('centername') == '成都'){
           echo $cityNode->getAttribute('centername').'&nbsp;'.$cityNode->getAttribute('windState').'&nbsp;'.$cityNode->getAttribute('stateDetailed').'&nbsp;温度'.$cityNode->getAttribute('tem2').'°~'.$cityNode->getAttribute('tem1').'°';
       }
    }
    echo "<hr/>";
    $simpleXml = simplexml_load_file('http://flash.weather.com.cn/wmaps/xml/sichuan.xml');
    foreach ($simpleXml as $xml){
        if($xml['cityname'] == '成都'){
            echo $xml['cityname']."&nbsp;".$xml['windState']."&nbsp;".$xml['stateDetailed']."&nbsp;温度".$xml['tem2']."°~".$xml['tem1']."°";
        }
    }
    }
}