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
                border-color: #219ab3;
                border-style: solid;
                border-width: 1px;
                cursor: pointer;
                font-family: Courier New;
                color: #219ab3;
                font-size: 30px;
                padding: 5px 10px 5px 10px;
                text-decoration: none;
                display: inline-block;
                margin-bottom : 2.5px;
                transition: all 300ms linear;
                transition-delay: 0s;
                width: 70px;
                -moz-user-select: none; 
                -webkit-user-select: none; 
                -ms-user-select:none; 
                user-select:none;
                -o-user-select:none;
            }



            .btn:hover,
            .btn:focus {
                border: 1px solid #219ab3;
                outline: 0;
                color: #FFF;
                background-color: #219ab3;
            }

            .btn-reset {
                border-color: red;
                color: red;
                width: 100px;
            }

            .btn-reset:hover,
            .btn-reset:focus {
                border: 1px solid red;
                outline: 0;
                color: #FFF;
                background-color: red;
            }

            .btn-disable, .btn-disable:hover,
            .btn-disable:focus {
                border-color: grey;
                background-color: grey;
                color: white; 
                pointer-events: none;
                cursor: default;
            }
        </style>
    </head>

    <body>
    <center>
        <span><a id="10" class="btn">10%</a></span>
        <span><a id="25" class="btn">25%</a></span>
        <span><a id="40" class="btn">40%</a></span>
        <span><a id="60" class="btn">60%</a></span>
        <span><a id="70" class="btn">70%</a></span>
        <span><a id="75" class="btn">75%</a></span>
        <span><a id="90" class="btn">90%</a></span>
        <span><a id="100" class="btn">100%</a></span>
        
        <br/><br/><br/><br/>
        <span><a id="reset" class="btn btn-reset">Reset</a></span>
        <br/><br/><br/><br/><br/>
        <canvas class="loader"></canvas>
    </center>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/jquery.classyloader.js"></script>
<script>
    $(document).ready(function () {
        intializeLoader();
    });
</script>
<script type="text/javascript" src="js/controls.js"></script>

</html>
