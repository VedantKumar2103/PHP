<html><head>
<title>Image in PHP</title>
</head><body>
    <?php
    srand(microtime()*1000000);
    $num = rand(1,4);
    switch ($num) {
        case 1:
            $image_file = "https://cdn.visordown.com/styles/amp_1200/s3/field/image/2018_YAM_MT07_EU_DPBMC_STU_001_03_0.jpg?itok=1Uh42HSK";
            break;
        
        case 2:
            $image_file = "https://wallpaperaccess.com/full/13647.jpg";
            break;
        case 3:
            $image_file = "https://ai-s1.infcdn.net/screenshots_siandroid/1/16684/16684005_1.jpg";
            break;
        case 4:
            $image_file = "https://cdn.visordown.com/styles/amp_1200/s3/field/image/2018_YAM_MT07_EU_DPBMC_STU_001_03_0.jpg?itok=1Uh42HSK";
            break;
        default:
            echo "null no image ";
            break;
    }

    echo "Random Image: <img src =$image_file >";
    ?> 
</body>
</html>
