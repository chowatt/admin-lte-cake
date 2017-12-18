<?php

namespace AdminLteCake\Core;

use Cake\Log\Log;
use Cake\Error\Debugger;

class MenuItem {
    public $text = '';
    public $type = '';
    public $icon = '';
    public $url = null;
    public $subItems = null;
    public $order = 0;
    public $options = [];

    private $availableTypes = [
        'menu',
        'item',
        'separator',
    ];

    /**
	 * Class constructor
	 * 
	 * Setup HTML helper
	 *
	 * @param array $options
	 */
	public function __construct(array $options = [], array $items = []){
        //$this->ParseOptions($options);
		$this->subItems = $this->BuildMenuItems($items);
		return $this;
    } 

    public function new($text, $type, $icon, array $option = [])
    {

    }

    public function add (MenuItem $item)
    {

    }

    /**
	 * Option parser
	 *
	 * @param array $options
	 * @return void
	 */
	public function BuildMenuItems(array $items){
		if(empty($items) || !is_array($items)){
			return false;
        }

        $output = [];
        
		foreach($items as $item){
            $newItem = new MenuItem();

            foreach($item as $property => $value){
                if(property_exists ( $newItem , $property )){
                    $newItem->$property = $value;
                }
            }
        
            if(isset($item['items'])){
                $subItems = $this->BuildMenuItems($item['items']);
                $newItem->subItems = $subItems;
            }

            $output[] = $newItem;
        }

        return $output;
	}
}