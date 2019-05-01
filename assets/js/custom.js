document.addEventListener("DOMContentLoaded", () => {
    startSwitcheryAtStart();
});

const startSwitcheryAtStart = () => {
    const checkboxElements = document.querySelectorAll(".js-switch");
    [...checkboxElements].map(ele => {
        const switchery = new Switchery(ele);
    });
};