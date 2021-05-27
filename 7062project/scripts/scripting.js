//On Load
$(function() {
    console.log("jquery and DOM is loaded");
    $("#enter-log-in").hide();
    $("#active-on-click").hide();
    $(".burger-expand").hide();
    $("#enter-log-in-burger").hide();
    $("#table-view").hide();
    $("#view-monster-cards").hide();
    $("#update-party-form").hide();
});

//Navbar functions!!
$(function() {
    //Click Log In button
    $("#log-in").click(function() {
        $("#enter-log-in").show();
    });

    //Click Cancel Button
    $(".control-cancel").click(function() {
        $("#enter-log-in").hide();
    });

    $(".navbar-burger").click(function() {
        $(".navbar-burger").hide();
        $("#active-on-click").show();
        $(".burger-expand").show();
    });

    $("#active-on-click").click(function() {
        $(".navbar-burger").show();
        $("#active-on-click").hide();
        $(".burger-expand").hide();
    });

    $("#burger-log-in").click(function() {
        $("#enter-log-in-burger").show();
    });

    $("#burger-control-cancel").click(function() {
        $("#enter-log-in-burger").hide();
    });
});

/* Monster Manual Scripts */

/* Table/Card Functions */
$(function() {
    //On Load
    //click card-view
    $("#card-view").click(function() {
        $("#card-view").hide();
        $("#view-monster-table").hide();
        $("#table-view").show();
        $("#view-monster-cards").show();
    })

    //click table-view
    $("#table-view").click(function() {
        $("#card-view").show();
        $("#view-monster-table").show();
        $("#table-view").hide();
        $("#view-monster-cards").hide();
    })
});

/* Search Function */
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#monsterTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

/* Update Party Form */
$(function() {
    $("#update-party").click(function() {
        $("#update-party-form").show();
    })
});