const cakeContents = document.getElementsByClassName('cake-contents')[0]; //get the cake content div 
const items = [
    {
        "image": "img/Wedding/1.jpeg",
        "name": "Wedding Cake",
        "desc": "Lorem ipsum",
        "price": "Starting at ₱20",
    },
    {
        "image": "img/Wedding/1.jpeg",
        "name": "Wedding Cake",
        "desc": "Lorem ipsum",
        "price": "Starting at ₱20",
    },
    {
        "image": "img/Wedding/1.jpeg",
        "name": "Wedding Cake",
        "desc": "Lorem ipsum",
        "price": "Starting at ₱20",
    },
    {
        "image": "img/Wedding/1.jpeg",
        "name": "Wedding Cake",
        "desc": "Lorem ipsum",
        "price": "Starting at ₱20",
    },
    {
        "image": "img/Wedding/1.jpeg",
        "name": "Wedding Cake",
        "desc": "Lorem ipsum",
        "price": "Starting at ₱20",
    },
    {
        "image": "img/Wedding/1.jpeg",
        "name": "Wedding Cake",
        "desc": "Lorem ipsum",
        "price": "Starting at ₱20",
    }
];

items.forEach(items => {
    console.log();
    const itemDiv = document.createElement('div');
    const itemImgDiv = document.createElement('div');
    const itemNameDiv = document.createElement('div');
    const itemDescDiv = document.createElement('div');
    const itemPriceDiv = document.createElement('div');
    const img = document.createElement('img');
    const h3 = document.createElement('h3');
    const p1 = document.createElement('p');
    const p2 = document.createElement('p');

    itemDiv.className = 'item cake-item';
    cakeContents.appendChild(itemDiv);

    itemImgDiv.className = 'item-img';
    itemNameDiv.className = 'item-name';
    itemDescDiv.className = 'item-description';
    itemPriceDiv.className = 'item-price';

    itemDiv.appendChild(itemImgDiv);
    itemDiv.appendChild(itemNameDiv);
    itemDiv.appendChild(itemDescDiv);
    itemDiv.appendChild(itemPriceDiv);

    img.src = items.image;
    h3.innerText = items.name;
    p1.innerText = items.desc;
    p2.innerText = items.price;

    itemImgDiv.appendChild(img);
    itemNameDiv.appendChild(h3);
    itemDescDiv.appendChild(p1);
    itemPriceDiv.appendChild(p2);
});