
const calculateNewHeight = () => {
  const header = document.getElementsByTagName("header")[0];
  const fullHeightSection = document.getElementById("full-height");
  const sectionStyle = fullHeightSection.currentStyle || window.getComputedStyle(fullHeightSection);
  const heightOfRemainingPage = window.innerHeight - header.offsetHeight - parseFloat(sectionStyle.marginTop);
  fullHeightSection.style.height = `${heightOfRemainingPage}px`;
};

addEventListener("resize", calculateNewHeight);
addEventListener("load", calculateNewHeight);
