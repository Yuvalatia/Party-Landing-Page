<!DOCTYPE html>
<html lang="he">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Yuval atia">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Ashkelon Party | Yuval Atia</title>
</head>
<body>
<span id="date"><?php echo date('l jS \of F Y h:i:s A'); ?></span>
<div class="container">
    <header>
        <img src="imgs/logo1.png" alt="logo">
    </header>
    <section class="main">
        <h1>פרטי האירוע</h1>
        <div class="row">
            <div class="gallery col-lg-4 col-md-12 col-sm-12">
                <div class="container">
                    <div id="pict" class="text-center rounded border border-light" >
                        <div id="pic-contant">
                            <div class="row">
                                <div id="left-arrow" class="arrow col-3"><i class="fas fa-angle-left"></i></div>
                                <div id="pic-text" class="col-6"><span></span></div>
                                <div id="right-arrow" class="arrow col-3"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <?php include ('eventDetails.php'); ?>
            </div>
        </div>
        <div class="container secondm">
            <div class="row">

                <div class="sqdual col-md-4">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-dark text-center">Ashkelon Party - לוח זמנים</li>
                        <?php
                        $items = [['time' => '20:00','title' => ' פתיחת שערים <i class="fas fa-chevron-left"></i>'],
                            ['time' => '21:00','title' => ' הפועה 1 <i class="fas fa-chevron-left"></i>'],
                            ['time' => '22:00','title' => ' הפועה 2 <i class="fas fa-chevron-left"></i>'],
                            ['time' => '23:00','title' => ' ערן זהבי המלך מגיע <i class="fas fa-futbol"></i>']];

                        foreach($items as $item){?>
                            <li class="list-group-item"><b><?php echo $item['time']; ?></b><?php echo $item['title']; ?></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
                <div class="date col-md-8">
                    <br><br>
                    <h2><span class="badge badge-danger">05/10/2019</span> תאריך האירוע</h2>
                    <h4>
                    <?php
                    // vars
                    $tareget = mktime(0,0,0,10,5,2019);
                    $current = time();

                    $diff = $tareget - $current;

                    // start calculate countdown
                    $days = floor($diff / 86400);
                    $hours = floor(floor($diff % 86400) / 3600);
                    $mins = floor(floor(floor($diff % 86400) % 3600) / 60);
                    $sec = floor(floor(floor($diff % 86400) % 3600) % 60);

                    echo "$days days $hours hours $mins minutes $sec seconds";

                    ?>
                    </h4>
                </div>

            </div>
        </div>
        <div class="container secondm">
            <div class="row">
                <div class="map col-md-6">
                    <h2>מיקום <i class="fas fa-map-marker-alt"></i></h2>
                    <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=300&amp;hl=en&amp;q=Israel%2CAshkelon+(Ashkelon%20Party)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Create a route on google maps</a></iframe></div><br />
                </div>
                <div class="shattle col-md-6">
                    <h2>שעות שאטלים <i class="fas fa-bus"></i></h2>
                    <table class="table table-secondary">
                        <thead>
                        <tr>
                            <th scope="col">שעות</th>
                            <th scope="col">כתובת</th>
                            <th scope="col">שם</th>
                            <th scope="col">#</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>19:00</td>
                            <td>הפרדס 33</td>
                            <td>יהודה עטיה</td>
                            <th scope="row">1</th>
                        </tr>
                        <tr>
                            <td>19:20</td>
                            <td>היכל הספורט</td>
                            <td>יובל עטיה</td>
                            <th scope="row">2</th>
                        </tr>
                        <tr>
                            <td>19:30</td>
                            <td>התפוז 8</td>
                            <td>משה פייגלין</td>
                            <th scope="row">3</th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <div class="container iconend">
        <div class="row">
            <div class="icons col-md-12">
                <a href="http://www.instgram.com"><img src="imgs/instagram.png" alt="instagram" class="icons"></a>
                <a href="http://www.facebook.com"><img src="imgs/facebook.png" alt="facebook" class="icons"></a>
                <a href="http://www.twitter.com"><img src="imgs/twitter.png" alt="twitter" class="icons"></a>
                <a href="http://www.youtube.com"><img src="imgs/youtube.png" alt="youtube" class="icons"></a>
                <a href="http://www.google.com"><img src="imgs/google-plus.png" alt="google-plus" class="icons"></a>
            </div>
        </div>
    </div>
</div>