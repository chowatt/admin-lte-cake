<?php 
use AdminLteCake\Core\MenuItem;
use AdminLteCake\Core\Dog;
?>
<!DOCTYPE html>
<html>
    <?php
    /**
    Available Blocks

    content
    footer
    userPanel
    searchForm
    **/
    ?>

<?php
    $options = [
        'headerText' => "MAIN NAVIGATION"
    ];
        
    $items = [
        [
            'text' => 'Dashboard',
            'type' => 'menu',
            'icon' => 'fa fa-dashboard',
            'items' => [
                [
                    'text' => 'Dashboard v1',
                    'url' => ['plugin' => 'FormBuilder', 'controller' => 'forms', 'action' => 'index'],
                    'type' => 'item',
                    'icon' => 'fa fa-circle-o',
                ],[
                    'text' => 'Dashboard v2',
                    'url' => ['plugin' => 'FormBuilder', 'controller' => 'forms', 'action' => 'index'],
                    'type' => 'item',
                    'icon' => 'fa fa-circle-o',
                ]
            ],
        ]
    ];

    $mainMenu = new MenuItem($options, $items);
    debug($mainMenu);

        ?>   

<head>
    <?= $this->Element('AdminLte/head');?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?= $this->Element('AdminLte/header');?>

        <?= $this->Element('AdminLte/main_sidebar', ['menu' => $mainMenu]);?>

        <div class="content-wrapper">

            <section class="content">
                <?= $this->fetch('content');?>
                <?= $this->fetch('footer');?>
            </section>

        </div>

        <footer class="main-footer">
            <?= $this->Fetch('footer');?>
        </footer>

        <?= $this->Element('AdminLte/sidebar');?>

        <div class="control-sidebar-bg"></div>
    </div>
   

    

<?= $this->Element('AdminLte/foot');?>
</body>

</html>