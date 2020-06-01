<?php

function logo($onClickStr) {
    echo '
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 770 284">
            <defs>
                <linearGradient id="grad1" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" style="stop-color:#FFFF00;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#FFFFFF;stop-opacity:1" />
                </linearGradient>
            </defs>
            <defs>
                <linearGradient id="grad2" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" style="stop-color:#0E6F03;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#C4DA32;stop-opacity:1" />
                </linearGradient>
            </defs>
            <defs>
                <linearGradient id="grad3" x1="100%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" style="stop-color:#000000;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#B5A8AE;stop-opacity:1" />
                </linearGradient>
            </defs>
            <defs>
                <linearGradient id="grad4" x1="0%" y1="0%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#980006;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#E7AEAf;stop-opacity:1" />
                </linearGradient>
            </defs>
            <defs>
                <linearGradient id="grad5" x1="100%" y1="100%" x2="0%" y2="100%">
                    <stop offset="0%" style="stop-color:#C8C8C8;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#FCFCFC;stop-opacity:1" />
                </linearGradient>
            </defs>
            <defs>
                <linearGradient id="grad6" x1="0%" y1="100%" x2="100%" y2="0%">
                    <stop offset="0%" style="stop-color:#15AEA9;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#C6EAE8;stop-opacity:1" />
                </linearGradient>
            </defs>
            <defs>
                <linearGradient id="grad7" x1="100%" y1="100%" x2="0%" y2="0%">
                    <stop offset="0%" style="stop-color:#8E01A0;stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#7069FD;stop-opacity:1" />
                </linearGradient>
            </defs>
            <rect x="2" y="2" width="204" height="280" fill="url(#grad1)" />
            <rect x="4" y="4" width="85" height="85" fill="url(#grad2)" stroke-width="4" stroke="black" />
            <rect x="119" y="4" width="85" height="85" fill="url(#grad3)" stroke-width="4" stroke="black" />
            <rect x="4" y="110" width="85" height="85" fill="url(#grad4)" stroke-width="4" stroke="black" />
            <rect x="119" y="110" width="85" height="85" fill="url(#grad5)" stroke-width="4" stroke="black" />
            <rect x="4" y="195" width="85" height="85" fill="url(#grad6)" stroke-width="4" stroke="black" />
            <rect x="119" y="195" width="85" height="85" fill="url(#grad7)" stroke-width="4" stroke="black" />
            <text x="240" y="70" style="font-family: Verdana, Tahoma, sans-serif; font-weight: bold; font-size:75; stroke:#000000; fill:#000000;">Castlemilk</text>
            <text x="240"  y="170" style="font-family: Verdana, Tahoma, sans-serif; font-weight: bold; font-size:75; stroke:#000000; fill:#000000;">Community</text>
            <text x="240"  y="270" style="font-family: Verdana, Tahoma, sans-serif; font-weight: bold; font-size:75; stroke:#000000; fill:#000000;">Church</text>
            <rect x="2" y="2" width="766" height="280" fill="blue" opacity="0" onclick="'.$onClickStr.'" />
        </svg> '
    ;
}


function menuIcon($onClickStr) {
    echo '
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 284 284">
            <line x1="34" y1="82" x2="250" y2="82" style="stroke:#404040;stroke-width:20"stroke-linecap="round" />
            <line x1="34" y1="142" x2="250" y2="142" style="stroke:#404040;stroke-width:20"stroke-linecap="round" />
            <line x1="34" y1="202" x2="250" y2="202" style="stroke:#404040;stroke-width:20"stroke-linecap="round" />
            <rect x="2" y="2" width="280" height="280" fill="blue" opacity="0.5" onclick="'.$onClickStr.'" />
        </svg> '
    ;
}



?>
