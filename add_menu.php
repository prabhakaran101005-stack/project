/* Import Cinzel from Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&display=swap');

/* General Styles */
body {
    font-family: sans-serif; /* readable body text */
    margin: 0;
    padding: 0;
    background-color: white; /* body background white */
    color: #333;
}

header {
    background-color: #8B4513; /* brown header */
    color: white;
    padding: 1rem;
    font-family: 'Cinzel', serif; /* elegant header font */
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 1rem;
}

nav a {
    color: white;
    text-decoration: none;
    font-family: 'Cinzel', serif; /* nav links use Cinzel */
}

main {
    padding: 2rem;
    max-width: 1200px;
    margin: 0 auto;
    font-family: sans-serif; /* readable body text */
}

/* Buttons */
.btn {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    cursor: pointer;
    border-radius: 4px;
    font-family: sans-serif; /* keep readable */
    transition: background-color 0.3s;
}

.btn:hover {
    background-color: #218838;
}

footer {
    text-align: center;
    padding: 1rem;
    background-color: #8B4513; /* brown footer */
    color: white;
    position: fixed;
    width: 100%;
    bottom: 0;
    font-family: 'Cinzel', serif; /* elegant footer font */
}

/* Hero Section */
.hero {
    text-align: center;
    padding: 4rem 0;
    font-family: 'Cinzel', serif; /* decorative hero font */
    font-size: 2.5rem; /* larger for emphasis */
}

/* Menu */
.menu-items {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.item {
    background: white; /* card background */
    padding: 1rem;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    width: calc(33% - 1rem);
    min-width: 250px;
    font-family: sans-serif; /* readable body text */
}

.item input {
    width: 60px;
    margin-right: 0.5rem;
    font-family: sans-serif;
}

/* Cart and Orders */
.cart, .orders, .admin {
    background: white; /* panels background */
    padding: 1rem;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    font-family: sans-serif;
}

#cart-items, #order-history, #admin-menu, #admin-orders {
    margin-top: 1rem;
}

.cart-item, .order-item {
    display: flex;
    justify-content: space-between;
    padding: 0.5rem 0;
    border-bottom: 1px solid #ddd;
    font-family: sans-serif;
}

/* Responsive */
@media (max-width: 768px) {
    .menu-items {
        flex-direction: column;
    }
    .item {
        width: 100%;
    }
}
