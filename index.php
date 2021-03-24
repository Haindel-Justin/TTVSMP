<?php
    //require('keys.php');
    //require('database/database.php');
    //require('twitch/twitch.php');
    //gatherChannels($conn);

?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title> TTVSMP </title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <nav class="site-header py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 d-none d-md-inline-block nav_a" href="ttvsmp.com">Home</a>
            <a class="btn disabled py-2 d-none d-md-inline-block" href="#">Creators</a>
            <a class="py-2 d-none d-md-inline-block" target="_blank" href="https://map.ttvsmp.com/index.html">Map</a>
            <a class="btn disabled py-2 d-none d-md-inline-block" href="#">Merchandise</a>
            <a class="py-2 d-none d-md-inline-block" target="_blank" href="https://dedicatedmc.io">Server Host</a>
        </div>
    </nav>
    <div class="header overflow-hidden text-center bg-light">
        <div class="col-md-5 py-5 mx-auto">
            <h1 class="display-4 font-weight-normal">Welcome to TTVSMP</h1>
            <p class="lead m-0 font-weight-normal">60+ of the best content creators Twitch has to offer, all packed into 1 Minecraft server.</p>
        </div>
    </div>
    <div class="container-fluid px-0 d-md-flex flex-md-equal w-100">
        <div class="bg-dark text-center text-white overflow-hidden col-md-6 col-sm-12">
            <a href="https://dedicatedmc.io/" target="_blank" ><img src="https://dedicatedmc.io/wp-content/uploads/2019/10/DedicatedMC.io-3-%E2%80%93-5-4.png" class="img-fluid" alt="Dedicated Mc" style="width:75%"></a>
        </div>
        <div class="bg-primary text-center text-white overflow-hidden col-md-6 col-sm-12">
            <div class="col-md-12 py-3 mx-auto">
                <h2 class="display-5">What is TTVSMP</h2>
                <p class="lead m-0">TTVSMP is a Streamer-Exclusive Minecraft server featuring 40+ Content Creators from all corners of the internet.
                    You have to be live when playing on TTVSMP at all times, you can find a list of all streamers here, as well as on the Discord. We hope you enjoy.</p>
            </div>
        </div>
    </div>
    <div class="creators container-fluid px-0 d-md-flex flex-md-equal w-100 flex-grow-1 float-left">
        <div class="bg-light overflow-hidden col-md-6 col-sm-12">
            <h2 class="display-5 text-center font-weight-normal">The Creators</h2>
            <?php
            //$result = getCreators($conn);
            //if($result->num_rows > 0) {
               // while($row = $result->fetch_assoc()) {
                        ?>
                            <div class="col-md-3 col-sm-6 float-left">
                                <div class="col-lg-10 float-left">
                                    <a class="d-none d-md-inline-block" href="<?php //echo $row["Link"]; ?>" target="_blank"><h5 class="display-5 font-weight-normal"> <?php //echo $row["Username"]; ?> </h5></a>
                                </div>
                                <?php
                                    //if(getLiveStreamers($row)) {
                                        ?>
                                        <div class="col-lg-2 float-left">
                                            <div class="live rounded-circle d-md-inline-block"></div>
                                        </div>
                                        <?php
                                    //}
                                ?>
                            </div>
                        <?php
                    //}
            //}
            ?>
        </div>
        <div class="bg-light overflow-hidden px-0 col-md-6 col-sm-12">
            <iframe class="embed-responsive-item overflow-hidden" src="https://map.ttvsmp.com/index.html"></iframe>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
