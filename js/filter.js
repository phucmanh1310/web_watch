let list = document.getElementById('list');
    let filter = document.querySelector('.filter');
    let count = document.getElementById('count');

    let listProducts = [
        {
            id: 1,
            name: 'Casio MTP-1381D-1AVDF – Nam – Mặt Số 39.9mm  Chống Nước 5 ATM',
            price: 1710000,
            quantity: 30,
            image: './image_manh/34_MTP-1381D-1AVDF-1.webp',
            nature: {
                color: ['white', 'black'],
                size: ['39.9'],
                type: 'MTP'
            },  
            link: 'product-single-new.html'
        },
        {
            id: 2,
            name: 'Casio MTP-1381L-9AVDF – Nam – Mặt Số 40mm, Chống Nước 5ATM',
            price: 1607000,
            quantiy: 30,
            image: './image_manh/9_MTP-1381L-9AVDF-1-.webp',
            nature: {
                color: ['white', 'black', 'grey'],
                size: ['40'],
                type: 'MTP'
            },
            link: 'product-single-new.html'
          
        },
        {
            id: 3,
            name: 'Casio MTP-V001L-1BUDF – Nam – Mặt Số 38mm, Chống Nước 3ATM',
            price: 648000,
            quantiy: 30,
            image: './image_manh/39_MTP-V001L-1BUDF-1-.webp',
            nature: {
                color: ['black'],
                size: ['38'],
                type: 'MTP'
            },
            link: 'product-single-new.html'
        },
        {
            id: 4,
            name: 'CASIO EDIFICE ECB-30DC-1B – Nam – Mặt Số 48.7mm, Chống Nước 5ATM',
            price:  4867500 ,
            quantiy: 30,
            image: './image_manh/ECB-30DC-1B.webp',
            nature: {
                color: ['black', 'blue'],
                size: ['48.7'],
                type: 'EDIFICE'
            },
            link: 'product-single-new.html'
        },
        {
            id: 5,
            name: 'CASIO EDIFICE EFR-S108D-3AV – Nam – Mặt Số 39.9mm, Chống Nước 3ATM',
            price: 3442500,
            quantiy: 30,
            image: './image_manh/EFR-S108D-3AV.webp',
            nature: {
                color: ['brown'],
                size: ['39.9'],
                type: 'EDIFICE'
            },  link: 'product-single-new.html'
        },
        {
            id: 6,
            name: 'CASIO EDIFICE EQS-950D-1AV– Nam  – Mặt Số: 44mm – Chống Nước: 10ATM',
            price: 4534500,
            quantiy: 30,
            image: './image_manh/EQS-950D-1AV.webp',
            nature: {
                color: ['white', 'black'],
                size: ['44'],
                type: 'EDIFICE'
            },
            link: 'product-single-new.html'
        },
        {
            id: 7,
            name: 'CASIO G-SHOCK DW-5600NNJ-2 – Nam – Mặt Số 38mm , Chống Nước 3ATM',
            price: 3084750,
            quantiy: 30,
            image: './image_manh/DW-5600NNJ-2.webp',
            nature: {
                color: ['white', 'black'],
                size: ['38'],
                type: 'G-SHOCK'
            },
            link: 'product-single-new.html'
        },
        {
            id: 8,
            name: 'CASIO G-SHOCK DW-6900NNJ-1 – Nam – Mặt Số 50mm , Chống Nước 5ATM',
            price: 3701250,
            quantiy: 30,
            image: './image_manh/DW-6900NNJ-1.webp',
            nature: {
                color: ['white'],
                size: ['50'],
                type: 'G-SHOCK'
            },
            link: 'product-single-new.html'
        },
        {
            id: 9,
            name: 'CASIO G-SHOCK DW-5600LS-7 – Nam – Mặt Số 42mm , Chống Nước 5ATM',
            price:  2517000,
            quantiy: 30,
            image: './image_manh/DW-5600LS-7.webp',
            nature: {
                color: ['white'],
                size: ['42'],
                type: 'G-SHOCK'
            },
            link: 'product-single-new.html'
        },
    
    ];
    let productFilter = listProducts;
    showProduct(productFilter);
    
    filter.addEventListener('submit', function(event){
        event.preventDefault();
        let valueFilter = event.target.elements;
        productFilter = listProducts.filter(item => {
            // check category
            if(valueFilter.category.value != ''){
                if(item.nature.type != valueFilter.category.value){
                    return false;
                }
            }
            // check size
            if(valueFilter.size.value != ''){
                if(!item.nature.size.includes(valueFilter.size.value)){
                    return false;
                }
            }
            // check name
            if(valueFilter.name.value != ''){
                if(!item.name.includes(valueFilter.name.value)){
                    return false;
                }
            }
            // check min price
            if(valueFilter.minPrice.value != ''){
                if(item.price < valueFilter.minPrice.value){
                    return false;
                }
            }
            //  check max price
            if(valueFilter.maxPrice.value != ''){
                if(item.price > valueFilter.maxPrice.value){
                    return false;
                }
            }
    
    
            return true;
        })
        showProduct(productFilter);
    })
    function showProduct(productFilter){
        count.innerText = productFilter.length;
        list.innerHTML = '';
        productFilter.forEach(item => {
            let newItem = document.createElement('div');
            newItem.classList.add('item');
          
            // create anchor tag
        let productLink = document.createElement('a');
        productLink.href =item.link // Đặt link tương ứng ở đây
            // create image
            let newImage = new Image();
            newImage.src = item.image;
            productLink.appendChild(newImage);
            newItem.appendChild(productLink);
            // create name product
            let newTitle = document.createElement('div');
            newTitle.classList.add('title');
            newTitle.innerText = item.name;
            newItem.appendChild(newTitle);
            // create price
            let newPrice = document.createElement('div');
            newPrice.classList.add('price');
            newPrice.innerText = item.price.toLocaleString() + ' đ';
            newItem.appendChild(newPrice);
    
            list.appendChild(newItem);
        });
    }
