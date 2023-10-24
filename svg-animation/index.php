<!DOCTYPE html>
<html>
    <head>
        <title>SVG Animations | Line Animation</title>
        <style type="text/css">
            svg #map-pin {
                transition: all 0.3s ease-in-out;
                animation: bouncePin 2.5s forwards infinite;
            }

            svg #gear-icon, svg #dollar-icon, svg #box-icon {
                transition: all 0.3s ease-in-out;
                transform-origin: 50% 50%;
                transform-box: fill-box;
                transform: scale(0);
            }
            .process-row-wrap.visible svg #gear-icon {
                animation: popGear 3s forwards;
            }
            .process-row-wrap.visible svg #dollar-icon {
                animation: popDollar 3s forwards;
            }
            .process-row-wrap.visible svg #box-icon {
                animation: popBox 3s forwards;
            }

            @keyframes bouncePin {
                86%   { transform: translateY(0); }
                93%  { transform: translateY(-50px); }
                100% { transform: translateY(0); }
            }

            @keyframes popGear {
                17%   { transform: scale(0); }
                20%   { transform: scale(1); }
                100%   { transform: scale(1); }
            }

            @keyframes popDollar {
                33%   { transform: scale(0); }
                36%   { transform: scale(1); }
                100%   { transform: scale(1); }
            }

            @keyframes popBox {
                25%   { transform: scale(0); }
                28%   { transform: scale(1); }
                100%   { transform: scale(1); }
            }


            svg #Eth, svg #BTC, svg #Salesforce, svg #IBM, svg #SAP, svg #Infor, svg #Solana {
                transition: all 0.25s ease-in-out;
                transform-origin: 50% 50%;
                transform-box: fill-box;
                fill: #030e22;
                opacity: 0;
                transform: scale(0.5);
            }
            .lg-visible svg #Eth {
                animation: opEth 8s forwards;
            }
            .lg-visible svg #BTC {
                animation: opBTC 8s forwards;
            }
            .lg-visible svg #Salesforce {
                animation: opSalesforce 8s forwards;
            }
            .lg-visible svg #IBM {
                animation: opIBM 8s forwards;
            }
            .lg-visible svg #SAP {
                animation: opSAP 8s forwards;
            }
            .lg-visible svg #Infor {
                animation: opInfor 8s forwards;
            }
            .lg-visible svg #Solana {
                animation: opSolana 8s forwards;
            }


            @keyframes opEth {
                14%   { opacity: 0; transform: scale(0.5); }
                16%  { opacity: 1; transform: scale(1); }
                100%  { opacity: 1; transform: scale(1); }
            }
            @keyframes opSAP {
                19%   { opacity: 0; transform: scale(0.5); }
                21%  { opacity: 1; transform: scale(1); }
                100%  { opacity: 1; transform: scale(1); }
            }
            @keyframes opSalesforce {
                24%   { opacity: 0; transform: scale(0.5); }
                26%  { opacity: 1; transform: scale(1); }
                100%  { opacity: 1; transform: scale(1); }
            }
            @keyframes opIBM {
                29%   { opacity: 0; transform: scale(0.5); }
                31%  { opacity: 1; transform: scale(1); }
                100%  { opacity: 1; transform: scale(1); }
            }
            @keyframes opSolana {
                34%   { opacity: 0; transform: scale(0.5); }
                36%  { opacity: 1; transform: scale(1); }
                100%  { opacity: 1; transform: scale(1); }
            }
            @keyframes opInfor {
                39%   { opacity: 0; transform: scale(0.5); }
                41%  { opacity: 1; transform: scale(1); }
                100%  { opacity: 1; transform: scale(1); }
            }
            @keyframes opBTC {
                44%   { opacity: 0; transform: scale(0.5); }
                46%  { opacity: 1; transform: scale(1); }
                100%  { opacity: 1; transform: scale(1); }
            }

            #logos-unfold-row:not(.lg-visible) #logos-fold > path:not(#a-logo), #logos-unfold-row:not(.lg-visible) #logos-fold > line {
                opacity: 0;
            }
            .lg-visible line#Line26, .lg-visible path#Line28, .lg-visible path#Line29, .lg-visible path#Line31, .lg-visible path#Line33, .lg-visible path#Line34, .lg-visible path#Line35 {
                transition: all 0.3s ease-in-out;
                opacity: 1;
                animation: popLines 0.3s linear forwards;
                animation-delay: 4s;
                /*stroke-dasharray: 400;
                stroke-dashoffset: 400;*/
            }
            path#a-logo, g#Rectangle22 {
                transform-origin: 50% 50%;
                transform-box: fill-box;
                transition: all 0.3s ease-in-out;
                opacity: 0;
            }
            .lg-visible path#a-logo, .lg-visible g#Rectangle22 {
                animation: opLogo 8s forwards;
            }

            @keyframes popLines {
                100%  { stroke-dashoffset: 0; }
            }

            @keyframes opLogo {
                8%   { opacity: 0; transform: scale(1.2); }
                11%  { opacity: 1; transform: scale(1); }
                100%  { opacity: 1; }
            }
        </style>
    </head>

    <body>
        <h1>SVG Animation</h1>
        <?php
            echo file_get_contents("logo-unfold.svg");
        ?>

        <script type="text/javascript">
            document.onreadystatechange = function () {
                if (document.readyState !== "complete") {
                    var Line26 = document.querySelector('#Line26');
                    // get the line length/width
                    var Line26_length = Line26.getTotalLength();
                    // set the length and give it an offset to hide the line initially
                    Line26.setAttribute('style', 'stroke-dasharray:'+Line26_length+'; stroke-dashoffset:'+Line26_length+';');
                    
                    var Line28 = document.querySelector('#Line28');
                    var Line28_length = Line28.getTotalLength();
                    Line28.setAttribute('style', 'stroke-dasharray:'+Line28_length+'; stroke-dashoffset:'+Line28_length+';');
                    
                    var Line29 = document.querySelector('#Line29');
                    var Line29_length = Line29.getTotalLength();
                    Line29.setAttribute('style', 'stroke-dasharray:'+Line29_length+'; stroke-dashoffset:'+Line29_length+';');
                    
                    var Line31 = document.querySelector('#Line31');
                    var Line31_length = Line31.getTotalLength();
                    Line31.setAttribute('style', 'stroke-dasharray:'+Line31_length+'; stroke-dashoffset:'+Line31_length+';');
                    
                    var Line33 = document.querySelector('#Line33');
                    var Line33_length = Line33.getTotalLength();
                    Line33.setAttribute('style', 'stroke-dasharray:'+Line33_length+'; stroke-dashoffset:'+Line33_length+';');
                    
                    var Line34 = document.querySelector('#Line34');
                    var Line34_length = Line34.getTotalLength();
                    Line34.setAttribute('style', 'stroke-dasharray:'+Line34_length+'; stroke-dashoffset:'+Line34_length+';');
                    
                    var Line35 = document.querySelector('#Line35');
                    var Line35_length = Line35.getTotalLength();
                    Line35.setAttribute('style', 'stroke-dasharray:'+Line35_length+'; stroke-dashoffset:'+Line35_length+';');
                }
            };
        </script>
    </body>
</html>