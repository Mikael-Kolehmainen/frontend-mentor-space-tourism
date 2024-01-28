const crewSwitch = document.getElementById("crew-switch");
const crewOptions = crewSwitch.children;
let crewData;

const handleCrewMemberSwitch = async (e) => {
  await fetchCrewData();
  const crewMember = crewData[e.target.id-1];

  document.getElementById("crew-member-title").innerText = crewMember.title;
  document.getElementById("crew-member-name").innerText = crewMember.name;
  document.getElementById("crew-member-description").innerText = crewMember.description;
  const crewMemberImage = document.getElementById("crew-member-image");
  crewMemberImage.src = crewMember.image;
  crewMemberImage.alt = crewMember.name;

  for (const crewOption of crewOptions) {
    crewOption.classList.remove("active");
  }
  crewOptions[e.target.id-1].classList.add("active");
};

const fetchCrewData = async () => {
  if (!crewData) {
    crewData = await (await fetch("/src/public_site/js/crew.json")).json();
  }
  return;
};

for (const crewOption of crewOptions) {
  crewOption.addEventListener("click", handleCrewMemberSwitch);
}
