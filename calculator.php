<?php
    require 'lib/site.inc.php';
    require 'lib/ProximityRacing/CalculatorView.php';
    $view = new ProximityRacing\GeneralView();
    $calculatorView = new ProximityRacing\CalculatorView();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $view->presentHeader("Calculator | Proximity Racing"); ?>
</head>

<body style="background-color: #050505;">
    <?php echo $view->presentNavbar(); ?>

    <div class="container-fluid padding">
        <div class="row text-white">
            <div class="col-md-12 text-center">
                <h1>Proximity Racing iRating Calculator</h1>
            </div>
            <div class="col-md-6 offset-3">
            <p class="mb-4">Ever wondered what your iRating would be like back then? Was the competition harder? Easier? We got the answers. We use web scrapers to grab precise data of drivers iRating over the years to build this calculator.</p>
                <form class="formstyle" action="post/calculator.php" method="POST">
                    <div class="form-group">
                        <label for="irating">Current iRating</label>
                        <input type="text" class="form-control" id="irating" name="irating"
                            placeholder="e.g. 1350" required>
                    </div>
                    <div class="form-group">
                        <label for="year">Year</label>
                        <select class="form-control" aria-label="Year select" id="year" name="year" required>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                        </select>
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">Calculate</button>
                    </div>
                </form>

                <?php echo $calculatorView->presentCalculated(); ?>
            </div>


            <div class="col-md-6 offset-3 gap">
                <h2 class="text-center mb-5">How it works</h2>
                <p>We made this as a tool to see how competitiveness has changes over the years. Personally, I always wondered if iRacing has gotten more competitive with the surge in subscriptions. Would a 2012 driver with 8000 iRating still be competitive with that iRating in 2021? Our calculator answers this question.</p>
                <p>Basically, our team gathered a large dataset of historic records of active iRacing users over the years and averaged the iRating over the years. When you input your iRating and select a year to calculate, the calculator takes the average iRating of the current year and divides it by the average iRating of the selected year.</p>
            </div>
            <div class="col-md-2 offset-5">
            <h2 class="text-center mb-5">Example</h2>
                <p><b>Current iRating</b>: 2500</p>
                <p><b>Year to calculate</b>: 2014</p>
                <p><b>Average iRating 2021</b>: 1847.841</p>
                <p><b>Average iRating 2014</b>: 2133.276</p>
                <p>1847.841/2133.276 = .866</p>
                <p>2500 * .866 = <b>2166 iRating</b></p>
            </div>

            <div class="col-md-2 offset-5 gap">
                <h2 class="text-center mb-5">Credits</h2>
                    <div class="credit"><p class="before-colon ml-3">Code: <span class="after-colon">Chris Nosowsky</span></p></div>
                    <div class="credit"><p class="before-colon ml-3">Dataset: <span class="after-colon">Michael Bianchini</span></p></div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <?php echo $view->footer(); ?>
</body>

</html>