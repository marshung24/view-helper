<?php
/**
 * 表單元素建構輔助函式庫 - 元件(Element)抽像類別
 *
 * @author Mars Hung <tfaredxj@mail.com> 2018-09-23
 *
 */
namespace marshung\view\form\element\abstracts;

abstract class Element
{

    /**
     * Map Cache
     * 
     * @var array
     */
    protected static $_map = [];

    /**
     * 初始化函式
     */
    public abstract static function init();
}