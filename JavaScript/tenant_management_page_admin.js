$("#message").show().delay(5000).fadeOut(70);

const delete_btn = document.getElementById("delete_btn");
const cancel_btn = document.getElementById("cancel_btn");
const delete_form = document.getElementById("delete_form");

delete_btn.addEventListener("click",   () => {
    if (delete_form.style.display === "none") {
        delete_form.style.display = "block";
    } else {
        delete_form.style.display = "none";
    }
});

cancel_btn.addEventListener("click",   () => {
    if (delete_form.style.display === "none") {
        delete_form.style.display = "block";
    } else {
        delete_form.style.display = "none";
    }
});


// jquery
$(document).ready(function(){
    $("#message").show().delay(1000).fadeOut();
    $(document).on("change", "#room_typ", function() {
        var getRoomType = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'getFloorNumberAjax.php',
            data: {roomTyp:getRoomType},
            success: function(data){
                $('#flr_num').html(data);
            }
        });
    });

    $(document).on("change", "#room_typ", function() {
        var getRoomType = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'getRoomInfoAjax.php',
            data: {roomTyp:getRoomType},
            success: function(data){
                $('#reservation_container3').html(data);
            }
        });
    });

    $(document).on("change", "#flr_num", function() {
        var getRoomType = $("#room_typ").val()
        var getFloor = $(this).val();
        $.ajax({
            type: 'POST',
            url: 'getRoomNumberAjax.php',
            data: {room_type:getRoomType,flr_num:getFloor},
            success: function(data){
                $('#room_num').html(data);
            }
        });
    });

    $(document).on("change", "#room_num", function() {
        var getRoomType = $("#room_typ").val()
        var getFloor = $("#flr_num").val();
        var getRoom = $(this).val();

        console.log(getRoomType);
        console.log(getFloor);
        console.log(getRoom);

        $.ajax({
            type: 'POST',
            url: 'getAvailabilityAjax.php',
            data: {room_type:getRoomType,flr_num:getFloor, room_num:getRoom},
            success: function(data){
                $('#reservation_container5').html(data);
            }
        });
    });
});