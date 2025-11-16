window.onload = () => {
    document.querySelector(".appear").classList.add("show");
}
const btn = document.getElementById('downloadBtn');

setInterval(() => {
    if (btn.style.opacity === "0.5") {
        btn.style.opacity = "1";
    } else {
        btn.style.opacity = "0.5";
    }
}, 600);