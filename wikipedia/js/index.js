$(document).ready(function() {
    $("#search").click(function() {
        const searchTerm = $("#searchTerm").val();
        const url = "https://pl.wikipedia.org/w/api.php?action=opensearch&search=" + searchTerm + "&format=json&callback=?";

        $.ajax({
            type: "GET",
            url: url,
            async: false,
            dataType: "json",
            success: function(data) {
                $("#output").html("");
                for (let i = 0; i < data[1].length; i++) {
                    $('#output').append("<li><a href=" + data[3][i] + " target='_blank'>" + data[1][i] + "</a><p>" + data[2][i] + "</p></li>");
                }
            },
            error: function(errorMessage) {
                alert("Error");
            }
        });
    });
});
$(document).keypress(function(e) {
    if (e.which == 13) {
        if ($('#searchTerm').is(':focus')) {
            $('#search').click();
        }
    }
});