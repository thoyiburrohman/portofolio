$(".dropdown-item").click(function () {
    if ($(this).data("bs-theme-value") === "dark") {
        localStorage.setItem("theme", "dark");
        $("html").attr("data-bs-theme", "dark");
        $("#btn").html(' <i class="far fa-moon "></i>');
    }
    if ($(this).data("bs-theme-value") === "light") {
        localStorage.removeItem("theme");
        $("html").attr("data-bs-theme", "light");
        $("#btn").html(' <i class="far fa-sun "></i>');
    }
});

if (localStorage.getItem("theme", "dark") != null) {
    $("html").attr("data-bs-theme", "dark");
    localStorage.setItem("theme", "dark");
    $("#btn").html(' <i class="far fa-moon "></i>');
} else {
    $("html").attr("data-bs-theme", "light");
    localStorage.removeItem("theme");
    $("#btn").html(' <i class="far fa-sun "></i>');
}
