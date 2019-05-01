document.addEventListener("DOMContentLoaded", () => {
    startSwitcheryAtStart();

    updateTodoState();
});
const checkboxElements = document.querySelectorAll(".js-switch");

const startSwitcheryAtStart = () => {
    [...checkboxElements].map(checkbox => {
        const switchery = new Switchery(checkbox);
    });
};

const updateTodoState = () => {
    $("body").on("change", ".js-switch", function() {
        const complated = $(this).prop("checked");
        const url = $(this).data("url");
        $.post(url, { complated: complated }, function() {});
    });
};