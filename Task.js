$(document).ready(function() {
    $('select').formSelect();
    pocetak()
    button()
    ubaci()
});

function button() {
    $('.fixed-action-btn').floatingActionButton();
    $('.modal').modal();
};



function pocetak() {
    $.ajax({
        url: "http://127.0.0.1/Task2/users.php",
        type: "POST",
        dataType: "json",
        success: function(response_data) {

        },
        error: function() {
            alert("Error");
        }
    });
}

function ubaci() {



}