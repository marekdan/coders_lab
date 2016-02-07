document.addEventListener('DOMContentLoaded', function () {

    var allDiv = document.querySelectorAll('.listContainer');

    for (var i = 0; i < allDiv.length; i++) {

        allDiv[i].addEventListener('mouseover', function () {
            var child = this.firstElementChild; //bierze ul
            var childTab = child.children; //bierze elementy li

            for(var j=0; j<childTab.length; j++){
                childTab[j].style.backgroundColor = 'green';
            }

            child.firstElementChild.style.backgroundColor = 'red';
            child.lastElementChild.style.backgroundColor = 'blue';

        });
    }

});