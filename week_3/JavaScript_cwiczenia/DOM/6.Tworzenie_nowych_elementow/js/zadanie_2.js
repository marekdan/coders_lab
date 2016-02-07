document.addEventListener('DOMContentLoaded', function () {

    document.addEventListener('DOMContentLoaded', function () {
        var btn = document.querySelector('#addBtn');

        btn.addEventListener('click', function () {

            var inputOrder = document.getElementById('orderId').value;
            var inputItem = document.getElementById('item').value;
            var inputQuantity = document.getElementById('quantity').value;

            var table = document.getElementById('orders');
            var firstTr = table.querySelector('tr');
            var newTr = firstTr.cloneNode(true);
            newTr.children[0].innerHTML = inputOrder;
            newTr.children[1].innerHTML = inputItem;
            newTr.children[2].innerHTML = inputQuantity;

            table.appendChild(newTr);
        });
    });

});
