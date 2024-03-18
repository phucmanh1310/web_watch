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
            name: 'Casio MTP-1302D-1A1VDF – Nam – Mặt Số 38.5 mm, Chống Nước 5ATM',
            price:  1347000 ,
            quantiy: 30,
            image: './image_manh/MTP-1302D-1A1VDF-1-.webp',
            nature: {
                color: ['black', 'blue'],
                size: ['38.5'],
                type: 'MTP'
            },
            link: 'product-single-new.html'
        },
        {
            id: 5,
            name: 'Casio MTP-1239D-7ADF – Nam – Mặt Số 38.5mm, Chống Nước 3ATM',
            price: 1245000,
            quantiy: 30,
            image: './image_manh/59_MTP-1239D-7ADF-1-.webp',
            nature: {
                color: ['brown'],
                size: ['38.5'],
                type: 'MTP'
            },  link: 'product-single-new.html'
        },
        {
            id: 6,
            name: ' Casio MTP-1375D-1AVDF – Nam  – Mặt Số: 42mm – Chống Nước: 5 ATM',
            price: 2177000,
            quantiy: 30,
            image: './image_manh/MTP-1375D-1AVDF-1-.webp',
            nature: {
                color: ['white', 'black'],
                size: ['42'],
                type: 'MTP'
            },
            link: 'product-single-new.html'
        },
        {
            id: 7,
            name: ' Casio MTP-1183E-7ADF – Nam – Mặt Số 38mm , Chống Nước 3ATM',
            price: 960000,
            quantiy: 30,
            image: './image_manh/MTP-1183E-7ADF-1-.webp',
            nature: {
                color: ['white', 'black'],
                size: ['38'],
                type: 'MTP'
            },
            link: 'product-single-new.html'
        },
        {
            id: 8,
            name: 'Casio MTP-1303D-7BVDF – Nam – Mặt Số 47mm , Chống Nước 5ATM',
            price: 1243000,
            quantiy: 30,
            image: './image_manh/MTP-1303D-7BVDF-1-.webp',
            nature: {
                color: ['white'],
                size: ['47'],
                type: 'MTP'
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
