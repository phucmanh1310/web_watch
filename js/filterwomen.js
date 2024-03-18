let list = document.getElementById('list');
    let filter = document.querySelector('.filter');
    let count = document.getElementById('count');

    let listProducts = [
        {
            id: 1,
            name: 'CASIO BABY-G BGD-565U-4 – Nữ – Mặt Số 37.9mm  Chống Nước 10 ATM',
            price: 2349600,
            quantity: 30,
            image: './image_manh/BGD-565U-4.webp',
            nature: {
                color: ['white', 'black'],
                size: ['37.9 '],
                type: 'BABY-G'
            },  
            link: 'product-single-new.html'
        },
        {
            id: 2,
            name: 'CASIO BABY-G BGD-565U-7 – Nữ – Mặt Số 37.9mm  Chống Nước 10 ATM',
            price: 2349600,
            quantiy: 30,
            image: './image_manh/BGD-565U-7.webp',
            nature: {
                color: ['white', 'black', 'grey'],
                size: ['37.9'],
                type: 'BABY-G'
            },
            link: 'product-single-new.html'
          
        },
        {
            id: 3,
            name: 'CASIO BABY-G BGD-565US-7 – Nữ – Mặt Số 37.9mm  Chống Nước 10 ATM',
            price: 2349600,
            quantiy: 30,
            image: './image_manh/BGD-565US-7.webp',
            nature: {
                color: ['black'],
                size: ['37.9'],
                type: 'BABY-G'
            },
            link: 'product-single-new.html'
        },
        {
            id: 4,
            name: 'CASIO LTP-1302D-7A1 - Nữ – Mặt Số 32mm, Chống Nước 5 ATM',
            price:  1077600,
            quantiy: 30,
            image: './image_manh/LTP-1302D-7A1.webp',
            nature: {
                color: ['black', 'blue'],
                size: ['30.2'],
                type: 'LTP'
            },
            link: 'product-single-new.html'
        },
        {
            id: 5,
            name: 'CASIO LTP-B140D-7AV – Nữ – Mặt Số 26.5mm, Chống Nước 5 ATM',
            price: 1302500,
            quantiy: 30,
            image: './image_manh/LTP-B140D-7AV.webp',
            nature: {
                color: ['brown'],
                size: ['26.5'],
                type: 'LTP'
            },  link: 'product-single-new.html'
        },
        {
            id: 6,
            name: 'CASIO LTP-E139D-2BV – Nữ  – Mặt Số: 32mm – Chống Nước: 5 ATM',
            price: 1513600,
            quantiy: 30,
            image: './image_manh/LTP-E139D-2BV.webp',
            nature: {
                color: ['white', 'black'],
                size: ['32'],
                type: 'LTP'
            },
            link: 'product-single-new.html'
        },
        {
            id: 7,
            name: 'CASIO SHEEN SHE-4554D-8A – Nữ – Mặt Số 30mm , Chống Nước 5 ATM',
            price: 2704800,
            quantiy: 30,
            image: './image_manh/SHE-4554D-8A.webp',
            nature: {
                color: ['white', 'black'],
                size: ['30'],
                type: 'SHEEN'
            },
            link: 'product-single-new.html'
        },
        {
            id: 8,
            name: 'CASIO SHEEN SHE-4554GYM-8A – Nữ – Mặt Số 30mm , Chống Nước 5 ATM',
            price:  3868800,
            quantiy: 30,
            image: './image_manh/SHE-4554GYM-8A.webp',
            nature: {
                color: ['white'],
                size: ['30'],
                type: 'G-SHOCK'
            },
            link: 'product-single-new.html'
        },
        {
            id: 9,
            name: 'CASIO SHEEN SHE-4560D-7A – Nữ – Mặt Số 32.1mm , Chống Nước 5ATM',
            price:  2704800,
            quantiy: 30,
            image: './image_manh/SHE-4560D-7A.webp',
            nature: {
                color: ['white'],
                size: ['32.1'],
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
