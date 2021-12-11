function basketAdd(id, i){
    $.ajax({
        url: 'basketAdd.php',
        type: 'POST',
        data: {
            'produkt': id,
            'ilosc': i
        },            
    });
    $("#basket").load(location.href + " #basket>*", "");
}

function basketDeleteAll(){
    $.ajax({
        url: 'basketAllDelete.php',
        type: 'POST',   
    });
    $("#basket").load(location.href + " #basket>*", "");
    $("#basket_con").load(location.href + " #basket_con>*", "");
}

function basketDelete(id){
    $.ajax({
        url: 'basketDelete.php',
        type: 'POST',
        data: {
            'produkt': id
        },            
    });
    $("#basket").load(location.href + " #basket>*", "");
    $("#basket_con").load(location.href + " #basket_con>*", "");
}

function basketMoreItem(id){
    $.ajax({
        url: 'basketMore.php',
        type: 'POST',
        data: {
            'produkt': id,
            'value': document.getElementById('s'+id).value
        },            
    });
    $("#basket").load(location.href + " #basket>*", "");
    $("#basket_con").load(location.href + " #basket_con>*", "");
}