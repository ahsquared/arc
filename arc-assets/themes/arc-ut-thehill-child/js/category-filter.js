(function filterCategories() {
    $(".category-filter").on("change", "input", function filterCategories() {
        var categoryChecks = $(".category-filter input:checked"),
            categories = [],
            articles = $(".articles article");

        if ($(this).prop("checked")) {
            if ($(this).attr("data-category") === "category-all") {
                // check all boxes and show all articles
                articles.show();
                $(".category-filter .category-filter-checkbox").prop("checked", true);
                return;
            } else if ($(this).attr("data-category") === "category-none") {
                // uncheck all boxes and hide all articles
                articles.hide();
                $(".category-filter input").prop("checked", false);
                return;
            }
        } else {
            $('[data-category="category-all"]').prop("checked", false);
        }
        categoryChecks.each(function () {
            categories.push($(this).attr("data-category"));
        });
        // console.log(categoryChecks, categories);
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
