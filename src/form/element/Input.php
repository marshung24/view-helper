<?php
/**
 * 表單元素建構輔助函式庫 - input
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
namespace marshung\view\form\element;

class Input extends \marshung\view\form\element\abstracts\Element
{
    
    /**
     * *********************************************
     * ************** Public Function **************
     * *********************************************
     */
    
    /**
     * 初始化函式
     */
    public static function init()
    {
        // 對映表建構 - 基礎屬性結構
        self::attributeMapBuilder();
    }
    
    // text,password,number,email,url,range,date,datetime,time,month
    public static function render($config)
    {
        // 初始化函式
        self::init();
        
        // 參數處理
        $default = isset($config['config']['default']) ? $config['config']['default'] : '';
        $defined = isset($config['defined']) ? $config['defined'] : [];
        $defined = array_merge(self::$_map['attribute'], $defined);
        
        // 屬性
        $attributes = '';
        foreach ($defined as $attr => $value) {
            $attributes .= $attr . '="' . $value . '" ';
        }
        
        // HTML 語法建構
        $code = '<input ' . $attributes . '/>';
        echo $code;
        return $code;
    }
    
    /**
     * ***********************************************
     * ************** Vaildate Function **************
     * ***********************************************
     */
    
    protected static function vaildType($type)
    {
        
    }
    
    /**
     * **********************************************
     * ************** Private Function **************
     * **********************************************
     */
    
    protected static function text()
    {}
    
    protected static function checkbox()
    {}
    
    protected static function radio()
    {}
    
    
    
    /**
     * **************************************************
     * ************** Map Builder Function **************
     * **************************************************
     */
    
    /**
     * 對映表建構 - 基礎屬性結構
     * 
     * @return array
     */
    protected static function attributeMapBuilder()
    {
        return self::$_map['attribute'] = [
            'type' => 'text',
            'class' => '',
            'name' => '',
            'value' => '',
        ];
    }
}