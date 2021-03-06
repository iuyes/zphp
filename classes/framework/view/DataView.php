<?php

namespace framework\view;

use framework\view;


/**
 * 自适应view
 *
 * @package view
 */
class DataView {
    
    public static function getView($model = null, $displayMode='json', $fileName=null) {
        $displayMode = strtolower($displayMode);
        switch ($displayMode) {
            case 'bin':
                return new MsgpackView($model);
                break;
            case 'amf':
                return new AMFView($model);
                break;
            case 'xml':
                return new XMLView($model);
                break;
            case 'html':
                return new SmartyView($model, $fileName);
            default:
                return new JSONView($model);
        }
    }




}
