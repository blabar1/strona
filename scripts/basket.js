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
    window.location.href = 'index.php';
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

function basketChange(id){
    $.ajax({
        url: 'basketChange.php',
        type: 'POST',
        data: {
            'produkt': id,
            'value': document.getElementById('s'+id).value
        },            
    });
    $("#basket").load(location.href + " #basket>*", "");
    $("#basket_con").load(location.href + " #basket_con>*", "");
}

function basketMore(id){
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

function delivery12(i){
    document.getElementById("dostawa").innerHTML = i+" zł";
    document.getElementById("wszystko").innerHTML = parseInt(document.getElementById('koszyk').value)+i+" zł";
    document.getElementById('total').value = parseInt(document.getElementById('koszyk').value)+i;
}