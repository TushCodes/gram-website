<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Gram SCS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Gram SCS" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/css_slider.css" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext" rel="stylesheet">
</head>

<body>
    <!-- header -->
    <header id="home">
        <?php include('header.php'); ?>
    </header>
    <!-- navigation -->
    <div class="main-top">
        <?php include('menu.php'); ?>
    </div>
    <!-- about -->
        <section class="w3ls-bnrbtm py-2" id="about">
        <?php 
            $json_data = file_get_contents('./data/banner-images.json');
            $banner = json_decode($json_data, true);
            $image_url = $banner['banners'][0]['image_url']; 
            $description = $banner['banners'][0]['description']; 
            echo '<img src="' . $image_url . '" alt="' . $description . '" width="100%">';
        ?>
        <div class="container py-xl-1 py-lg-1">
            <div class="row">
                <div class="col-lg-12 pl-xl-1 mt-lg-0 mt-1">
                    <h3 style="padding:10px 0px;">Iot Product Solution</h3>
                    <p style="padding-bottom:10px;">
                        We believe that every customer has a right to get error free services. Though there are chances of error when humans work, but the case is not with computers. So, we have brought in IoT based solutions for our customers so as to neglect errors in each phase of the logistic solution we provide. Your responsibility is ours and our responsibility is to provide modern services so as to maximise your efficiency in the market. This is done with a whole bunch of experimentation and invention in our state-of-art IoT laboratories and under surveillance of the experts in the field employing the power of computation to solve real problems.
                    </p>
                    <p>
                        <img src="images/iot-1.jpg" width="100%">
                    </p>
                    <p>
                        <img src="images/iot-2.jpg" width="100%">
                    </p>
                    <p>
                        <img src="images/iot-3.jpg" width="100%">
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer class="bg-colors py-5">
        <?php include('footer.php'); ?>
    </footer>
    <!-- copyright -->
    <div class="copyright-w3ls py-4">
        <?php include('copy.php'); ?>
    </div>
    <!-- move top icon -->
    <a href="#home" class="move-top text-center"></a>
</body>

</html>
