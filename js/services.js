console.log("service page");

const { gsap } = window;

gsap.timeline()
    .set(".menu", { autoAlpha: 1 })
    .from(".menu__item-innertext", {
        delay: 1,
        duration: 0.85,
        xPercent: 25,
        yPercent: 125,
        stagger: 0.095,
        skewY: gsap.utils.wrap([-5, 5]), // Reduced skew for smaller screens
        ease: "expo.out",
    })
    .set(".menu", { pointerEvents: "all" });

gsap.defaults({
    duration: 0.55,
    ease: "expo.out",
});

const menuItems = document.querySelectorAll(".menu__item");

menuItems.forEach((item) => {
    const imageWrapper = item.querySelector(".menu__item-image_wrapper");

    let itemBounds = item.getBoundingClientRect();

    const onMouseEnter = () => {
        gsap.set(imageWrapper, {
            scale: 0.7, // Smaller scale for mobile
            xPercent: 20,
            yPercent: 40,
            rotation: -10,
        });

        gsap.to(imageWrapper, { opacity: 1, scale: 0.9, yPercent: 0, rotation: 0 });
    };

    const onMouseLeave = () => {
        gsap.to(imageWrapper, {
            opacity: 0,
            yPercent: -40,
            xPercent: 20,
            scale: 0.7,
            rotation: -10,
        });
    };

    const onMouseMove = ({ x, y }) => {
        const imageWrapperBounds = imageWrapper.getBoundingClientRect();
        const yOffset = gsap.utils.mapRange(
            0,
            1.5,
            -100,
            100, // Smaller offset for mobile
            itemBounds.top / imageWrapperBounds.height
        );

        gsap.to(imageWrapper, {
            duration: 1,
            x: x - itemBounds.left - imageWrapperBounds.width / 1.8, // Adjusted width ratio for mobile
            y: y - itemBounds.top - imageWrapperBounds.height / 2 - yOffset,
        });
    };

    const onTouchMove = (event) => {
        const touch = event.touches[0];
        onMouseMove({ x: touch.clientX, y: touch.clientY });
    };

    const onTouchEnd = () => {
        onMouseLeave();
    };

    item.addEventListener("mouseenter", onMouseEnter);
    item.addEventListener("mouseleave", onMouseLeave);
    item.addEventListener("mousemove", onMouseMove);
    item.addEventListener("touchstart", onMouseEnter);
    item.addEventListener("touchmove", onTouchMove);
    item.addEventListener("touchend", onTouchEnd);

    window.addEventListener("resize", () => {
        itemBounds = item.getBoundingClientRect();
    });
});

// Ensure GSAP animations adjust for mobile breakpoints
const setMobileFriendly = () => {
    const isMobile = window.innerWidth <= 768;

    if (isMobile) {
        gsap.set(".menu__item", { scale: 0.9, margin: "1em 0" }); // Adjust spacing for mobile
        gsap.set(".menu__item-image_wrapper", { maxWidth: "300px", maxHeight: "300px" }); // Smaller images
    }
};
