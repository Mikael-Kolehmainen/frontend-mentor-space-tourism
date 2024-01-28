const technologySwitch = document.getElementById("technology-switch");
const technologyOptions = technologySwitch.children;
let technologyData;

const handleTechnologySwitch = async (e) => {
  await fetchTechnologyData();
  const technologyItem = technologyData[e.target.id-1];

  document.getElementById("technology-title").innerText = technologyItem.title;
  document.getElementById("technology-description").innerText = technologyItem.description;
  const technologyItemImage = document.getElementById("technology-image");
  technologyItemImage.src = technologyItem.image;
  technologyItemImage.alt = technologyItem.name;

  for (const crewOption of technologyOptions) {
    crewOption.classList.remove("active");
  }
  technologyOptions[e.target.id-1].classList.add("active");
};

const fetchTechnologyData = async () => {
  if (!technologyData) {
    technologyData = await (await fetch("/src/public_site/js/technology.json")).json();
  }
  return;
};

for (const crewOption of technologyOptions) {
  crewOption.addEventListener("click", handleTechnologySwitch);
}
