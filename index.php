<!DOCTYPE html>
<html>

    <head>
        <meta charset="windows-1252">
        <title></title>
        <style>
            .btn {
                background: transparent;
                -webkit-border-radius: 3;
                -moz-border-radius: 3;
                border-radius: 3px;
                border-color: #219ab3;;
                border-style: solid;
                border-width: 1px;
                cursor: pointer;
                font-family: Courier New;
                color: #219ab3;;
                font-size: 30px;
                padding: 5px 10px 5px 10px;
                text-decoration: none;
                display: inline-block;
                margin-bottom : 2.5px;
                transition: all 300ms linear;
                transition-delay: 0s;
                width: 70px;
            }



            .btn:hover,
            .btn:focus {
                border: 1px solid #219ab3;
                outline: 0;
                color: #FFF;
                background-color: #219ab3;
            }
        </style>
    </head>

    <body>
    <center>
        <span><a class="btn">10%</a></span>
        <span><a class="btn">25%</a></span>
        <span><a class="btn">40%</a></span>
        <span><a class="btn">60%</a></span>
        <span><a class="btn">70%</a></span>
        <span><a class="btn">75%</a></span>
        <span><a class="btn">90%</a></span>
        <span><a class="btn">100%</a></span>
        <br/><br/><br/><br/><br/><br/><br/><br/>
        <canvas class="loader"></canvas>
    </center>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/jquery.classyloader.js"></script>
<script>
    $(document).ready(function () {
        loaderObj = $('.loader').ClassyLoader({
            width: 200, // width of the loader in pixels
            height: 200, // height of the loader in pixels
            displayOnLoad: true,
            percentage: 50, // percent of the value, between 0 and 100
            speed: 100, // miliseconds between animation cycles, lower value is faster
            roundedLine: true, // whether the line is rounded, in pixels
            showRemaining: true, // how the remaining percentage (100% - percentage)
            fontFamily: 'Helvetica', // name of the font for the percentage
            fontSize: '50px', // size of the percentage font, in pixels
            showText: true, // whether to display the percentage text
            diameter: 90, // diameter of the circle, in pixels
            fontColor: 'rgba(33, 154, 179, 1)', // color of the font in the center of the loader, any CSS color would work, hex, rgb, rgba, hsl, hsla
            lineColor: 'rgba(33, 154, 179,1)', // line color of the main circle
            remainingLineColor: 'rgba(55, 55, 55, 0.2)', // line color of the remaining percentage (if showRemaining is true)
            lineWidth: 2, // the width of the circle line in pixels
            startFrom: 0
        });
    });
</script>


</html>
