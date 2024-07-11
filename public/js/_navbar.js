let isOpen = false;

function handleHamburgerClick() {
    let closedHamBurgerIcon = document.querySelector(".hamburger > .closedIcon");
    let openedHamBurgerIcon = document.querySelector(".hamburger > .openedIcon");
    let navItemContainer = document.querySelector(".navbar > .navItemContainer");

    if (isOpen) {
        closedHamBurgerIcon.style["display"] = "none";
        openedHamBurgerIcon.style["display"] = "block";
        navItemContainer.style["display"] = "flex";
        navItemContainer.style["flex-direction"] = "column";
    }

    if (!isOpen) {
        closedHamBurgerIcon.style["display"] = "block";
        openedHamBurgerIcon.style["display"] = "none";
        navItemContainer.style["display"] = "none";
        if (window.matchMedia("(min-width: 768px)").matches) {
            navItemContainer.style["display"] = "flex";
        }
    }
}

let dropdownNavItems = document.querySelectorAll(".dropdownContainer");
for (let x of dropdownNavItems) {
    let dropdownBtn = x.querySelector(":first-child")
    let dropdown = x.querySelector(".subNavItemContainer");
    dropdown.style["display"] = "none";
    dropdownBtn.addEventListener("touchstart", () => {
        let windowWidth = window.innerWidth;
        if(dropdown.style["display"] == "flex"){
            dropdown.style["display"] = "none";
        }
        else{
            dropdown.style["width"] = "100%";
            dropdown.style["display"] = "flex";
            dropdown.style["top"] = "100%";
            dropdown.style["left"] = "0";
            dropdown.style["height"] = "fit-content";
            // if(window.matchMedia("(min-width: 768px)").matches){
                dropdown.style["position"] = "absolute";
            // }
        }

        if(window.innerWidth > windowWidth){
            dropdown.style["right"] = "0";
            dropdown.style["left"] = "auto";
        }
        else{
            dropdown.style["right"] = "auto";
            dropdown.style["left"] = "0";
        }
    })
    x.addEventListener("mouseenter", () => {
            let windowWidth = window.innerWidth;
            dropdown.style["width"] = "100%";
            dropdown.style["display"] = "flex";
            dropdown.style["top"] = "100%";
            dropdown.style["left"] = "0";
            dropdown.style["height"] = "fit-content";
            dropdown.style["position"] = "absolute";

        if(window.innerWidth > windowWidth){
            dropdown.style["right"] = "0";
            dropdown.style["left"] = "auto";
        }
        else{
            dropdown.style["right"] = "auto";
            dropdown.style["left"] = "0";
        }
    });
    x.addEventListener("mouseleave", () => {
            dropdown.style["display"] = "none";
    });
}

let hamBurger = document.querySelector(".hamburger");
hamBurger.addEventListener("mousedown", () => {
    isOpen = !isOpen;
    handleHamburgerClick(isOpen);
});
handleHamburgerClick((isOpen));