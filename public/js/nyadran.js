
i=0
$(document).on("click", "#add-input-row", function(){
    i++
    input_arwah = "<div class='d-flex flex-row mt-4' id='input-arwah_"+i+"'> <div class='d-flex align-items-end'> <button class='btn-minus remove-row' type='button'><i class='bx icon-minus bxs-checkbox-minus'></i></button> </div> <div class='form-floating'> <select class='form-select form-input-nyadran' name='arwah_type[]' id='arwah_type_"+i+"'> <option>Bp.</option> <option>Ibu.</option> <option>Sdr.</option> </select> </div> <div class='d-flex align-items-center form-floating mx-2'> <input type='text' class='form-control form-input-nyadran' name='arwah_name[]' id='arwah_name_"+i+"' placeholder='Nama arwah'> <label for='arwah_name_0'>Nama Arwah</label> </div> <div class='d-flex align-items-center form-floating mx-1'> <input type='text' class='form-control form-input-nyadran' name='arwah_address[]' id='arwah_adress_"+i+"' placeholder='Alamat arwah'> <label for='arwah_adress_0'>Alamat Arwah</label> </div> </div>"
    $("#add-row-div").before(input_arwah)
})


$(document).on("click", ".remove-row", function(){
   $this = $(this)
   $this.parentsUntil('.form-login').remove() 
})

$(document).on("click", "#submit-input", function(){
    data = $("#form-nyadran").serializeArray()
    data = JSON.stringify(data)
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    token = sessionStorage.getItem('user')

    $.ajax({
      method: 'POST',
      url: '/nyadran/submit',
      data: 'token='+token+'&data=' + data,
      success: function (msg) {
        console.log(msg)

      },
      error: function (msg, textStatus) {
        console.log("fail send :" + msg.status);
      }
    });
})