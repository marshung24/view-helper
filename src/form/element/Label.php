<?php
/**
 * 表單元素建構輔助函式庫 - input
 * 
 * 設定檔格式：
 * 
 * $config = [
 *  'config' => [
 *      'element' => 'input',
 *      'type' => 'text,password,number,email,url,range,date,datetime,time,month',
 *      'default' => '',
 *  ],
 *  'defined' => [
 *      $attribute => $attrValue,
 *  ],
 * ];
 * 
 * 
 * @author Mars Hung <tfaredxj@mail.com> 2018-09-19
 *
 */
namespace marshung\view\form\element;

class Label extends \marshung\view\form\element\abstracts\Element
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
        $code = '<label ' . $attributes . '></label>';
        echo $code;
        return $code;
    }
    
    /**
     * ***********************************************
     * ************** Vaildate Function **************
     * ***********************************************
     */
    
    /**
     * **********************************************
     * ************** Private Function **************
     * **********************************************
     */
    
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
            'class' => '',
            'for' => '',
        ];
    }
}