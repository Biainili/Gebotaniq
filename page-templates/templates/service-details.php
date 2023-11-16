<script>
    const menuItems = [
        { name: "Ծալքաթիթեղ", href: "calatitexmy" },
        { name: "Մետաղական Կղմինդր", href: "metaxakan-kxmindmy" },
        { name: "Պրինտեկ", href: "printekmy" },
        { name: "Կցակարային Տանիք", href: "falc-taniqmy" },
        { name: "Սայդինգ", href: "sidingmy" },
        { name: "Հարթ Թիթեղ", href: "hart-titexmy" },
        { name: "Պտուտակներ", href: "ptutaknermy" },
        { name: "Ջրահեռացման Համակարգեր", href: "jraheracman-hamakargmy" },
        { name: "Սենդվիչ Պանել", href: "sendvich-panelnermy" },
        { name: "ՍԻՊ պանել", href: "sip-panelmy" },
        { name: "Մետաղական Ամրան", href: "metaxakan-amranmy" },
        { name: "Ամրալար / Փշալար", href: "amralar-pshalar" },
        { name: "Շվելերներ", href: "shvelerner" },
        { name: "Քառ․ / Ուղղանկյուն Խողովակներ", href: "xoxovakner" },
        { name: "Ցանցեր", href: "tsantser" },
        { name: "Գիպսաստվարաթուղթ", href: "gipsastvaratuxt" },
        { name: "Պրոֆիլներ", href: "profilner" },
        { name: "Փափուկ Կղմինդր Ruflex", href: "papuk-kxmindr-ruflex" },
        { name: "Եզրահատ Տախտակ", href: "ezrahat-taxtak" },
        { name: "Հանքաբամբակ", href: "hanqabambak" },
    ];

        const currentUrl = window.location.pathname;

        const menuList = document.querySelector(".container-menu ul");

        menuItems.forEach((item, index) => {
    const listItem = document.createElement("li");

    const menuItemLink = document.createElement("a");
    menuItemLink.href = item.href;

    const spanElement = document.createElement("span");
    spanElement.textContent = ">";

    menuItemLink.appendChild(document.createTextNode(item.name + "   "));
    menuItemLink.appendChild(spanElement);
    menuItemLink.appendChild(document.createTextNode(" "));

    const isActive = currentUrl.includes(item.href);

    if (isActive) {
        menuItemLink.classList.add("active");
    }

    listItem.appendChild(menuItemLink);
    menuList.appendChild(listItem);

    // Добавляем <hr> после элемента с индексом 3 (например)
    if (index === 9 || index === 16 || index === 17) {
        const hrElement = document.createElement("hr");
        hrElement.classList.add("menu-line");
        menuList.appendChild(hrElement);
    }
});


</script>