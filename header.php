<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
   
             
   
</head>
<body>


    <?php
        function isActive($check){
            $requested_uri = $_SERVER['REQUEST_URI'];

            $search = strpos($requested_uri, $check);

            if($search !== false) {
                return 'active';
            }
        }

        $menus = [
            'index.php' => 'Home',
            'details.php' => 'Details',
            'contact.php' => 'Contact us',
            'about.php' => 'About'
        ];

    
    ?>


    <div class="navbar-area">
        <div class="container">
            <div class="navbar flex">
                <div class="logo">
                    <h2>Jacky</h2>
                </div>
                <div class="menu">
                    <ul class="flex">
                       <?php
                            foreach($menus as $key => $value) : 
                        ?>
                        <li>
                            <a class="<?php echo isActive ($key); ?>" href="<?php echo $key ; ?>"><?php echo $value ; ?></a>
                        </li>
                        <?php endforeach; ?>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
