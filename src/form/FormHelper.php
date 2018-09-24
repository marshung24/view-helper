<?php
/**
 * 表單元素建構輔助函式庫
 * 
 * 設定檔格式：
 * 
 * $config = [
 *  'config' => [
 *      'element' => 'input',
 *      'default' => '',
 *  ],
 *  'defined' => [
 *      'type' => 'text,password,number,email,url,range,date,datetime,time,month',
 *      $attribute => $attrValue,
 *  ],
 * ];
 * 
 * 
 * @author Mars Hung <tfaredxj@mail.com> 2018-09-19
 *
 */
namespace marshung\view\form;

class FormHelper
{
    
    /**
     * Constructor
     */
    public function __construct()
    {}
    
    /**
     * *********************************************
     * ************** Public Function **************
     * *********************************************
     */
    
    
    // text,password,number,email,url,range,date,datetime,time,month
    public function render($config)
    {
        $el = isset($config['config']['element']) ? $config['config']['element'] : '';
        
        if (empty($el)) {
            throw new \Exception('Element error !', 400);
        }
        
        $class = '\\' . __NAMESPACE__.'\\element\\' . ucfirst($el);
        $el = $class::render($config);
        
        
//         echo __NAMESPACE__;
    }
    
}