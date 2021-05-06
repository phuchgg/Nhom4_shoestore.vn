function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInputSearch");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdownSearch");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
function showResult(){
	resultSearch.style.display="block";
}
function hideResult(){
	resultSearch.style.display="none";
}