(function filterCategories() {
    $(".category-filter").on("change", "input", function filterCategories() {
        var categoryChecks = $(".category-filter .category-filter-checkbox:checked"),
            categories = [],
            articles = $(".articles article");

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
                $(".category-filter-warning").show();
                return;
            }
        } else {
            $('[data-category="category-all"]').prop("checked", false);
        }

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
