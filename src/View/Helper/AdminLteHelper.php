<?php
namespace AdminLteCake\View\Helper;

use Cake\View\Helper;

class AdminLteHelper extends Helper
{

    public $helpers = array('Html', 'Form');

    public function buildMainMenu(\AdminLteCake\Core\MenuItem $menu)
    {
        debug($menu);
        $output = null;

        if(!$menu->subItems){
            return true;
        }

        foreach($menu->subItems as $subItem){
            $icon = null;
            $text = null;
            $subItems = null;

            if($subItem->icon){
                $icon = $this->Html->tag('i', '', ['class' => $subItem->icon]);
            }

            if($subItem->text){
                $text = $this->Html->tag('span', $subItem->text);
            }

            if($subItem->url){
                $link = $this->Html->link($icon . $text, $subItem->url, ['escape' => false]);
            } else {
                $link = $this->Html->link($icon . $text, "#", ['escape' => false]);
            }

            if($subItem->subItems){
                foreach($subItem->subItems as $subItem){
                    $subItems .= $this->buildMainMenu($subItem);
                }
            }

            $output .= $this->Html->tag('li', $link . $subItems, ['class' => 'treeview']);
        }

        return $output;
    }
}


// <li class="treeview">
// <a href="#">
//     <i class="fa fa-dashboard"></i>
//     <span>Dashboard</span>
//     <span class="pull-right-container">
//         <i class="fa fa-angle-left pull-right"></i>
//     </span>
// </a>
// <ul class="treeview-menu">
//     <li>
//         <a href="../../index.html">
//             <i class="fa fa-circle-o"></i> Dashboard v1</a>
//     </li>
//     <li>
//         <a href="../../index2.html">
//             <i class="fa fa-circle-o"></i> Dashboard v2</a>
//     </li>
// </ul>
// </li>