const products = {
    "tos": {
        title: "MyPCStore's Terms of Service",
        description: "This is the work-in-progress page for the Terms of Service (TOS) of MyPCStore.",
    },
    "privacy-policy": {
        title: "MyPCStore's Privacy Policy",
        description: "This is the work-in-progress page for the Privacy Policy of MyPCStore.",
    },
    "your-data": {
        title: "MyPCStore's Data Sharing Policy",
        description: "This is the work-in-progress page for the Data Sharing Policy of MyPCStore.",
    }
    // Add more data as needed
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

// Function to load company details
function loadProductDetails() {
    const params = getQueryParams();
    const detail = products[params.product];

    if (detail) {
        document.getElementById('data-name').textContent = detail.title;
        document.getElementById('data-description').innerHTML = detail.description;
    } else {
        // Handle case where company detail is not found
        document.querySelector('.product-details').innerHTML = '<p>Company Detail not found.</p>';
    }
}

// Load company details when the page loads
window.onload = loadProductDetails;