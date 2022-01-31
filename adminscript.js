const adminTitleEdit = document.querySelector('.admin-title-edit');
const adminTitleCheckEdit = document.querySelector('.admin-title-check-edit');
const adminDescriptionEdit = document.querySelector('.admin-description-edit');
const adminDescriptionCheckEdit = document.querySelector('.admin-description-check-edit');
const adminPriceEdit = document.querySelector('.admin-price-edit');
const adminPriceCheckEdit = document.querySelector('.admin-price-check-edit');

adminTitleEdit.onclick = () => {
    modalTitle.style.border = '1px solid black'
    modalTitle.setAttribute('contenteditable', 'true');
    adminTitleCheckEdit.style.display = 'block';
    adminTitleEdit.style.display = 'none';
}

adminTitleCheckEdit.onclick = () => {
    modalTitle.style.border = 'none';
    modalTitle.setAttribute('contenteditable', 'false');
    adminTitleCheckEdit.style.display = 'none';
    adminTitleEdit.style.display = 'block';
}

adminDescriptionEdit.onclick = () => {
    modalDescription.style.border = '1px solid black'
    modalDescription.setAttribute('contenteditable', 'true');
    adminDescriptionCheckEdit.style.display = 'block';
    adminDescriptionEdit.style.display = 'none';
}

adminDescriptionCheckEdit.onclick = () => {
    modalDescription.style.border = 'none';
    modalDescription.setAttribute('contenteditable', 'false');
    adminDescriptionCheckEdit.style.display = 'none';
    adminDescriptionEdit.style.display = 'block';
}

adminPriceEdit.onclick = () => {
    modalPrice.style.border = '1px solid black'
    modalPrice.setAttribute('contenteditable', 'true');
    adminPriceCheckEdit.style.display = 'block';
    adminPriceEdit.style.display = 'none';
}

adminPriceCheckEdit.onclick = () => {
    modalPrice.style.border = 'none';
    modalPrice.setAttribute('contenteditable', 'false');
    adminPriceCheckEdit.style.display = 'none';
    adminPriceEdit.style.display = 'block';
}

const offerImg = document.querySelector('#offer-img');
const offerSubmit = document.querySelector('.offer-submit');

offerImg.onchange = () => {
    modalImg.src = URL.createObjectURL(offerImg.files[0]);
    offerSubmit.style.display = "block";
}