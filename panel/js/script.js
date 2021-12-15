function  stateChagne(id){
  $.ajax({
    url: 'Zamówienia-pracownik.php',
    type: 'POST',
    data: {
        'order': id,
        'status': document.getElementById('jd'+id).value
    },            
});
}


$(document).ready(function () {
  $(".data-table").each(function (_, table) {
    $(table).DataTable();
  });
});

$(document).on('change', '.file-input', function () {


  var filesCount = $(this)[0].files.length;

  var textbox = $(this).prev();

  if (filesCount === 1) {
    var fileName = $(this).val().split('\\').pop();
    textbox.text(fileName);
  } else {
    textbox.text(filesCount + ' files selected');
  }



  if (typeof (FileReader) != "undefined") {
    var dvPreview = $("#divImageMediaPreview");
    dvPreview.html("");
    $($(this)[0].files).each(function () {
      var file = $(this);
      var reader = new FileReader();
      reader.onload = function (e) {
        var img = $("<img />");
        img.attr("style", "width: 100%; height:100%;");
        img.attr("src", e.target.result);
        dvPreview.append(img);
      }
      reader.readAsDataURL(file[0]);
    });
  } else {
    alert("This browser does not support HTML5 FileReader.");
  }


});


$(document).on('change', '.file-input-gallery', function () {


  var filesCount = $(this)[0].files.length;

  var textbox = $(this).prev();

  if (filesCount === 1) {
    var fileName = $(this).val().split('\\').pop();
    textbox.text(fileName);
  } else {
    textbox.text(filesCount + ' files selected');
  }



  if (typeof (FileReader) != "undefined") {
    var dvPreview = $("#divImageMediaPreview-gallery");
    dvPreview.html("");
    var ile = 1;
    $($(this)[0].files).each(function () {
      var file = $(this);
      var reader = new FileReader();
      reader.onload = function (e) {

        var img = $("<div class='number-gallery'>" + "Zdjęcie nr." + ile + "</div><img class='img'/>");
        img.attr("style", "width: 30%; height:30%; padding:9px;");
        img.attr("src", e.target.result);
        dvPreview.append(img);
        ile++;
      }
      reader.readAsDataURL(file[0]);
    });
  } else {
    alert("This browser does not support HTML5 FileReader.");
  }


});

$(document).on('change', '.file-input-category', function () {


  var filesCount = $(this)[0].files.length;

  var textbox = $(this).prev();

  if (filesCount === 1) {
    var fileName = $(this).val().split('\\').pop();
    textbox.text(fileName);
  } else {
    textbox.text(filesCount + ' files selected');
  }



  if (typeof (FileReader) != "undefined") {
    var dvPreview = $("#divImageMediaPreview3");
    dvPreview.html("");
    $($(this)[0].files).each(function () {
      var file = $(this);
      var reader = new FileReader();
      reader.onload = function (e) {
        var img = $("<img />");
        img.attr("style", "width: 100%; height:100%;");
        img.attr("src", e.target.result);
        dvPreview.append(img);
      }
      reader.readAsDataURL(file[0]);
    });
  } else {
    alert("This browser does not support HTML5 FileReader.");
  }


});
const togglePassword = document.querySelector('#add_user_toggle');
const password = document.querySelector('#add_user');
togglePassword.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  // toggle the eye / eye slash icon
  this.classList.toggle('bi-eye');
});
{/* <i class="bi bi-eye-slash" id="add_user_toggle" ></i> */ }

