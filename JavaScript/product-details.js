// Sample product data
const products = {
    "gtx-1660": {
        name: "NVIDIA GTX 1660 4GB",
        rating: "★★★☆☆",
        price: "₹20,549",
        description: "Performance graphics card suitable for gaming and video editing.",
        img: "../Images/Product Images/NVIDIA GTX 1660.jpg"
    },
    "intel-i5": {
        name: "Intel i5 14th Gen",
        rating: "★★★☆☆",
        price: "₹16,200",
        description: "Powerful processor for multitasking and gaming.",
        img: "../Images/Product Images/Intel Core i5.webp"
    },
    "rtx-3050-ti": {
        name: "NVIDIA RTX 3050 Ti 4GB",
        rating: "★★★★☆",
        price: "₹48,000",
        description: "High end graphics card for high fidelity gaming and performance.",
        img: "../Images/Product Images/NVIDIA RTX 3050.jpg"
    },
    "corsair-32gb": {
        name: "Corsair 32GB (8x4) 3200MHz Ram",
        rating: "★★★★☆",
        price: "₹14,500",
        description: "Corsair's all powerful 32GB Ram with a speed of 3200MHz.",
        img: "../Images/Product Images/Corsair 32 GB.webp"
    },
    "atx-motherboard": {
        name: "Asus ATX Motherboard",
        rating: "★★★☆☆",
        price: "₹9600",
        description: "Asus's ATX motherboard to bring together all of your PC components.",
        img: "../Images/Product Images/Asus ATX Mobo.jpg"
    },
    "rx-7900-gre": {
        name: "AMD Ryzen 7 9800X3D",
        rating: "★★★☆☆",
        price: "₹70,650",
        description: "Powerful processor for multitasking and gaming.",
        img: "../Images/Product Images/AMD Ryzen 7.jpg"
    },
    // Add more products as needed
};

// Function to get query parameters
function getQueryParams() {
    const params = {};
    window.location.search.substr(1).split('&').forEach(param => {
        const [key, value] = param.split('=');
        params[key] = decodeURIComponent(value);
    });
    return params;
}

// Function to load product details
function loadProductDetails() {
    const params = getQueryParams();
    const product = products[params.product];

    if (product) {
        document.getElementById('product-img').src = product.img;
        document.getElementById('product-name').textContent = product.name;
        document.getElementById('product-rating').textContent = product.rating;
        document.getElementById('product-price').textContent = product.price;
        document.getElementById('product-description').textContent = product.description;
    } else {
        // Handle case where product is not found
        document.querySelector('.product-details').innerHTML = '<p>Product not found.</p>';
    }
}

// Load product details when the page loads
window.onload = loadProductDetails;