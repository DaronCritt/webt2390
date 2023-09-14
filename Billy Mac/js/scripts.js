$("button").click(function() {
    $("#accordion").slideToggle();
});
 
$("#slide1").click(function () {
    $("img").last().attr("src", "images/menu-items/menu1.png");
});

$("#slide2").click(function () {
    $("img").last().attr("src", "images/menu-items/menu2.png");
});

$("#slide3").click(function () {
    $("img").last().attr("src", "images/menu-items/menu3.jpg");
});

$("#slide4").click(function () {
    $("img").last().attr("src", "images/menu-items/menu4.jpg");
});

$("#slide5").click(function () {
    $("img").last().attr("src", "images/menu-items/menu5.png");
});

$("#slide6").click(function () {
    $("img").last().attr("src", "images/menu-items/menu6.png");
});

$("#slide7").click(function () {
    $("img").last().attr("src", "images/menu-items/menu7.png");
});

$("#slide8").click(function () {
    $("img").last().attr("src", "images/menu-items/menu8.png");
});

$("#slide9").click(function () {
    $("img").last().attr("src", "images/menu-items/menu9.jpg");
});

$("#slide10").click(function () {
    $("img").last().attr("src", "images/menu-items/menu10.jpg");
});

$( function() {
    $( "#accordion" ).accordion();
  } );