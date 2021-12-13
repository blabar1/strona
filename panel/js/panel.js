$(document).ready(function () {
    $(".data-table").each(function (_, table) {
        $(table).DataTable();
    });
});

function addSpec(){
    document.getElementById('allspec').innerHTML+= document.getElementById('spec').outerHTML;
}