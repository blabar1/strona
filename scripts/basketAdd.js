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