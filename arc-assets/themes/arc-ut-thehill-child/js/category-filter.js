(function filterCategories() {
    var categoryFilter = $(".category-filter"),
        articles = $(".articles article");
    if (categoryFilter.length === 0) {
        return;
    }
    categoryFilter.on("change", "input", function filterCategories() {
        var categoryChecks = $(".category-filter .category-filter-checkbox:checked"),
            categories = [];

        // make an array of all selected categories
        categoryChecks.each(function () {
            categories.push($(this).attr("data-category"));
        });

        // show a help message if no categories selected
        if (categories.length === 0) {
            $(".category-filter-warning").show();
        } else {
            $(".category-filter-warning").hide();
        }

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
    categoryFilter.on("click", ".check-all", function checkAllCategories() {
        // check all boxes and show all articles
        articles.show();
        $(".category-filter .category-filter-checkbox").prop("checked", true);
    });
    categoryFilter.on("click", ".uncheck-all", function uncheckAllCategories() {
        // uncheck all boxes and hide all articles
        articles.hide();
        $(".category-filter input").prop("checked", false);
        $(".category-filter-warning").show();
    });
})();
