document.addEventListener("DOMContentLoaded", () => {
  const wrapper = document.querySelector(".scroll-wrapper");
  const container = wrapper.querySelector(".scroll-container");
  const track = wrapper.querySelector(".scroll-track");
  const dots = wrapper.querySelectorAll(".dot-group");
  const trailFill = wrapper.querySelector(".trail-fill");

  const totalDots = dots.length;
  const maxScrollX = track.scrollWidth - container.clientWidth;

  window.addEventListener("scroll", () => {
    const wrapperTop = wrapper.offsetTop;
    const wrapperHeight = wrapper.offsetHeight;
    const scrollY = window.scrollY;
    const windowHeight = window.innerHeight;

    const startScroll = wrapperTop;
    const endScroll = wrapperTop + wrapperHeight - windowHeight;

    if (scrollY >= startScroll && scrollY <= endScroll) {
      const progress = (scrollY - startScroll) / (endScroll - startScroll);

      // Horizontal scroll
      track.style.transform = `translateX(-${progress * maxScrollX}px)`;

      // Determine current step
      const currentIndex = Math.round(progress * (totalDots - 1));

      // Update active dot
      dots.forEach((dot, i) => {
        dot.classList.toggle("active", i === currentIndex);
      });

      // Animate trail fill
      const fillPercent =
        ((progress * (totalDots - 1)) / (totalDots - 1)) * 100;
      trailFill.style.width = `${fillPercent}%`;
    }
  });
});
