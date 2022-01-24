$("#new-quote").on("click", function() {
    $.ajax({
        type: "GET",
        success: function(data) {
            const quote = $(data).find("#quote");
            const author = $(data).find("#author");
            $("#quote").html(quote);
            $("#author").html(author);
        }
    });
});