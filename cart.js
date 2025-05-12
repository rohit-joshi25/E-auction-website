document.addEventListener("DOMContentLoaded", function () {
    function loadCart() {
        fetch("get_cart.php")
            .then(response => response.json())
            .then(data => {
                document.getElementById("cart-count").textContent = data.total_items || 0;
                updateCartModal(data.cart_items);
            })
            .catch(error => console.error("Error loading cart:", error));
    }

    function updateCartModal(cartData) {
        let cartList = document.getElementById("cart-items");
        let cartTotal = document.getElementById("cart-total");
        let totalPrice = 0;
        cartList.innerHTML = "";
    
        if (!cartData || cartData.length === 0) {
            cartList.innerHTML = "<li>Your cart is empty.</li>";
        } else {
            cartData.forEach((item, index) => {
                totalPrice += item.price * item.quantity;
                cartList.innerHTML += `
                    <li style="margin-bottom: 10px;">
                        <strong>${item.name}</strong> - ₹${item.price} x ${item.quantity}
                        <button class="remove-item btn btn-sm btn-danger" data-index="${index}">Remove</button>
                    </li>`;
            });
        }
    
        cartTotal.innerText = `Total: ₹${totalPrice}`;
    
        // 🔧 Attach event listeners after HTML is added
        attachRemoveEventListeners();
    }

    function attachRemoveEventListeners() {
        document.querySelectorAll(".remove-item").forEach(button => {
            button.addEventListener("click", function () {
                let index = this.getAttribute("data-index");
                removeItem(index);
            });
        });
    }

    function removeItem(index) {
        fetch("remove_from_cart.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: `index=${index}`
        })
        .then(response => response.json())
        .then(data => {
            loadCart();
        })
        .catch(error => console.error("Error removing item:", error));
    }

    document.querySelectorAll(".add-to-cart").forEach(button => {
        button.addEventListener("click", function () {
            let itemName = this.getAttribute("data-name");
            let itemPrice = this.getAttribute("data-price");
            let itemImage = this.getAttribute("data-image");

            fetch("add_to_cart.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: `item_name=${encodeURIComponent(itemName)}&item_price=${encodeURIComponent(itemPrice)}&item_image=${encodeURIComponent(itemImage)}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.status === "success") {
                    alert("Item added to cart!");
                    loadCart();
                } else {
                    alert("Error adding item.");
                }
            });
        });
    });

    let cartModal = document.getElementById("cart-modal");
    let cartDropdown = document.getElementById("cart-dropdown");
    let closeModal = document.querySelector(".close");

    if (cartDropdown) {
        cartDropdown.addEventListener("click", function (event) {
            event.preventDefault();
            cartModal.style.display = "block";
            loadCart();
        });
    }

    if (closeModal) {
        closeModal.addEventListener("click", function () {
            cartModal.style.display = "none";
        });
    }

    window.onclick = function (event) {
        if (event.target == cartModal) {
            cartModal.style.display = "none";
        }
    };

    let checkoutButton = document.getElementById("checkout");

    if (checkoutButton) {
        checkoutButton.addEventListener("click", function () {
            fetch("get_cart.php")
                .then(response => response.json())
                .then(data => {
                    if (data.total_items === 0) {
                        alert("Your cart is empty!");
                        return;
                    }
                    window.location.href = "checkout.php";
                })
                .catch(error => console.error("Error processing checkout:", error));
        });
    }
    data.forEach(painting => {
        let option = document.createElement("option");
        option.value = painting.id;
        option.textContent = `#${painting.id} - ${painting.name} by ${painting.artist}`;
        select.appendChild(option);
    });
    

    loadCart();
});
