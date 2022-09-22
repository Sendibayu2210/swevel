const mobileScreen = window.matchMedia("(max-width: 990px )");
$(document).ready(function () {
  $(".sidebar-nav-dropdown-toggle").click(function () {
    $(this)
      .closest(".sidebar-nav-dropdown")
      .toggleClass("show")
      .find(".sidebar-nav-dropdown")
      .removeClass("show");
    $(this).parent().siblings().removeClass("show");
  });
  $(".menu-toggle").click(function () {
    if (mobileScreen.matches) {
      $(".sidebar").toggleClass("mobile-show");
    } else {
      $(".admin-menu").toggleClass("dashboard-compact");
      let icon = $(this).find("i");
      if (icon.hasClass("fa-bars")) {
        icon.removeClass("fa-bars").addClass("fa-angles-right");
      } else {
        icon.removeClass("fa-angles-right").addClass("fa-bars");
      }
    }
  });

  closeNav = function () {
    let content = $(".main-content") || $(".sidebar");
    $("#search-phone").click(function () {
      $("#search-toolbar").addClass("d-flex");
    });
    content.click(function () {
      if ($("#search-toolbar").hasClass("d-flex")) {
        $("#search-toolbar").removeClass("d-flex");
      }
    });
    let mobbileNav = $(".admin-menu").find(".mobile-show");
    $(".main-content").click(function () {
      if (mobbileNav) {
        $(".sidebar").removeClass("mobile-show");
      }
    });
  };
  closeNav();
});



class CustomSelect {
  constructor(originalSelect) {
    this.originalSelect = originalSelect;
    this.customSelect = document.createElement("div");
    this.customSelect.classList.add("select");

    this.originalSelect.querySelectorAll("option").forEach((optionElement) => {
      const itemElement = document.createElement("div");

      itemElement.classList.add("select__item");
      itemElement.textContent = optionElement.textContent;
      this.customSelect.appendChild(itemElement);

      if (optionElement.selected) {
        this._select(itemElement);
      }

      itemElement.addEventListener("click", () => {
        if (
          this.originalSelect.multiple &&
          itemElement.classList.contains("select__item--selected")
        ) {
          this._deselect(itemElement);
        } else {
          this._select(itemElement);
        }
      });
    });

    this.originalSelect.insertAdjacentElement("afterend", this.customSelect);
    this.originalSelect.style.display = "none";
  }

  _select(itemElement) {
    const index = Array.from(this.customSelect.children).indexOf(itemElement);

    if (!this.originalSelect.multiple) {
      this.customSelect.querySelectorAll(".select__item").forEach((el) => {
        el.classList.remove("select__item--selected");
      });
    }

    this.originalSelect.querySelectorAll("option")[index].selected = true;
    itemElement.classList.add("select__item--selected");
  }

  _deselect(itemElement) {
    const index = Array.from(this.customSelect.children).indexOf(itemElement);

    this.originalSelect.querySelectorAll("option")[index].selected = false;
    itemElement.classList.remove("select__item--selected");
  }
}

document.querySelectorAll(".custom-select").forEach((selectElement) => {
  new CustomSelect(selectElement);
});