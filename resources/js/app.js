// import "./bootstrap";
import "flowbite";
// import "./sidebar";
// import "./charts";

//import './bootstrap';
import.meta.glob(["../images/**/*.svg"]);

// dark-mode
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}
