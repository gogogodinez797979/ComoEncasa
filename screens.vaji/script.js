function showProduct(id) {
  var modal = document.getElementById('productModal');
  var productInfo = document.getElementById('productInfo');
  
  // Obtener información del producto mediante AJAX
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      productInfo.innerHTML = this.responseText;
      modal.style.display = "block";
    }
  };
  xhr.open("GET", "get_producto.php?id=" + id, true);
  xhr.send();
}

function closeModal() {
  document.getElementById('productModal').style.display = "none";
}