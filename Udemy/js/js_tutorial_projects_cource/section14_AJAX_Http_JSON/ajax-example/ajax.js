// lesson 248 - 249 XML
console.log('lesson 248 - 249 XML');

const btn = document.querySelector('.btn');
const info = document.querySelector('.info');

function getData(url) {
    const ajax = new XMLHttpRequest();
    console.log(ajax);
    
    ajax.open('GET',url,true);

    ajax.onload = function() {
        if(this.status === 200) {
            info.textContent = this.responseText;
        } 
        else {
            console.log(this.statusText);
        }
    }

    ajax.send();
}

btn.addEventListener('click',function(){
    getData('info.txt')
});


const btn2 = document.querySelector('.btn2');
const cartInfo = document.querySelector('.cartInfo');
const cartItem = document.querySelector('.cartItem');

btn2.addEventListener('click',function(){
    cartData('cart.json');
})

function cartData(url) {
    const ajax = new XMLHttpRequest();
    // console.log(ajax);
    ajax.open('GET',url,true);

    ajax.onload = function() {
        if(this.status === 200) {
            const data = JSON.parse(this.responseText);
            cartInfo.innerHTML = `
                <p>${data.cartInfo.name}</p>
                <p>${data.cartInfo.store}</p>
            `;

            let display = '';
            const specialtems = data.cartItems.filter((item=> item.price > 1))
            specialtems.forEach((item)=>{
                display += `
                    <div class="success">
                        <p>item id: ${item.id}</p>
                        <p>item name: ${item.name}</p>
                        <p>item price: ${item.price}</p>
                    </div>
                `;

                cartItem.innerHTML = display
            })
        } else {
            console.log(this.statusText);
        }
    }

    ajax.send();
}