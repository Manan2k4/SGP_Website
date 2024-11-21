let cartItems = JSON.parse(localStorage.getItem('cart')) || [];

// Display cart items on page load
const cartContainer = document.getElementById('cart-items');
cartItems.forEach(item => {
    const cartItemElement = document.createElement('div');
    cartItemElement.className = 'cart-item';
    cartItemElement.innerHTML = `
        <p>${item.name} - ${item.price}</p>
    `;
    cartContainer.appendChild(cartItemElement);
});

// Add to cart functionality to store items in localStorage
function addToCart(product) {
    cartItems.push(product);
    localStorage.setItem('cart', JSON.stringify(cartItems));
}
