
/* ==================Regex================== */


let product_name = document.querySelector("body > div > main > div > div > form > div.user-details > div.form-box > div:nth-child(1) > input[type=text]");
let product_category = document.querySelector("body > div > main > div > div > form > div.user-details > div.form-box > div:nth-child(2) > input[type=text]");
let product_quantity = document.querySelector("body > div > main > div > div > form > div.user-details > div.form-box > div:nth-child(3) > input[type=number]");
let product_price = document.querySelector("body > div > main > div > div > form > div.user-details > div.form-box > div:nth-child(4) > input[type=number]");
let product_description = document.querySelector("#description");
let addButton = document.querySelector("body > div > main > div > div > form > div.button > input.submit");
let formX =document.querySelector("#formX");



addButton.addEventListener('click', () => {
  // event.preventDefault();
  var x =0;
  if (!/^\w+$/.test(product_name.value)) {
    alert('product name invalid');
    x +=1;
    return;
  }

  if (!/^[A-Za-z]+$/.test(product_category.value)) {
    alert('category invalid');
    x +=1;
    return;
  }

  if (!/^\d+$/.test(product_quantity.value)) {
    alert('quantity invalid');
    x +=1;
    return;
  }

  if (!/^\d+(\.\d{2})?$/.test(product_price.value)) {
    alert('price invalid');
    x +=1;
    return;
  }

  if (!/^\w+$/.test(product_description.value)) {
    alert('description invalid');
    x +=1;
    return;
  }

  if (x == 0){
    formX.submit();
  }

});