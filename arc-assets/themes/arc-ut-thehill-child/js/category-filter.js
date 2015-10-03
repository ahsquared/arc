(function filterCategories() {
    $(".category-filter").on("change", "input", function filterCategories() {
        var categoryChecks = $(".category-filter input:checked"),
            categories = [],
            articles = $(".articles article");

        categoryChecks.each(function () {
            categories.push($(this).attr("class"));
        });
        console.log(categoryChecks, categories);
        articles.hide();
        articles.each(function () {
            var i;
            for (i = 0; i < categories.length; i++) {
                if ($(this).hasClass(categories[i])) {
                    $(this).show();
                    break;
                }
            }
        });
    });
})();
