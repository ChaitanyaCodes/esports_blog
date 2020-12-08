function setbackground() {
    // window.setTimeout("setbackground()", 80); //  milliseconds delay

    var index = Math.round(Math.random() * 3);

    var ColorValue = "FFFFFF"; // default color - white (index = 0)

    if (index == 1)
        ColorValue = "radial-gradient( circle farthest-corner at 10% 20%,  rgba(153,103,186,1) 41.2%, rgba(0,113,227,1) 90% );";
    if (index == 2)
        ColorValue = "linear-gradient( 111.6deg,  rgba(174,68,223,1) 27.3%, rgba(246,135,135,1) 112.7% );";
    if (index == 3)
        ColorValue = "linear-gradient( 110.6deg,  rgba(179,157,219,1) 7%, rgba(150,159,222,1) 47.7%, rgba(24,255,255,1) 100.6% );";
    // if (index == 4)
    //     ColorValue = "0000FF";
    // if (index == 5)
    //     ColorValue = "00FFFF";
    // if (index == 6)
    //     ColorValue = "FFFF00";
    // if (index == 7)
    //     ColorValue = "CC66FF";
    // if (index == 8)
    //     ColorValue = "3366FF";
    // if (index == 9)
    //     ColorValue = "CCCCCC";

    console.log("Working");
    document.getElementsById("card")[0].style.backgroundImage = ColorValue;

}