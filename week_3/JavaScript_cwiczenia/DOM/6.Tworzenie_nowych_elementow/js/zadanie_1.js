document.addEventListener('DOMContentLoaded', function () {

    var button = document.querySelector('.button');

    button.addEventListener('click', function () {
        var menuList = document.querySelector('.menu');

        var newLi = document.createElement('li');

        var count = menuList.children.length;
        newLi.innerHTML = 'element ' + (count + 1) + ' w chwili tworzenia bylo ' + count + ' elementow';
        menuList.appendChild(newLi);

    });
});
