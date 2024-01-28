class Menu
{
  menuName;
  menuData;
  switchElement;
  optionElements;

  constructor(menuName)
  {
    this.menuName = menuName;
    this.switchElement = document.getElementById(`${menuName}-switch`);
    this.optionElements = this.switchElement.children;
    for (const optionElement of this.optionElements) {
      optionElement.addEventListener("click", async (e) => {
        await this.handleSwitch(e);
      });
    }
  }

  async handleSwitch(e)
  {
    await this.fetchData();

    const clickedOptionId = e.target.id - 1;
    const optionData = this.menuData[clickedOptionId];

    document.getElementById(`${this.menuName}-title`).innerText = optionData.title;
    const menuNameTitleElement = document.getElementById(`${this.menuName}-name`);
    if (menuNameTitleElement) {
      menuNameTitleElement.innerText = optionData.name;
    }
    document.getElementById(`${this.menuName}-description`).innerText = optionData.description;
    const optionImage = document.getElementById(`${this.menuName}-image`);
    optionImage.src = optionData.image;
    optionImage.alt = optionData?.name || optionData.title;

    for (const optionElement of this.optionElements) {
      optionElement.classList.remove("active");
    }
    this.optionElements[clickedOptionId].classList.add("active");
  }

  async fetchData()
  {
    if (!this.menuData) {
      this.menuData = await (await fetch(`/src/public_site/js/data/${this.menuName}.json`)).json();
    }
    return;
  }
}
