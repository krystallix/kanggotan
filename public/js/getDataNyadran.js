var settings = {
    "url": "http://103.179.56.179/api/nyadran/all",
    "method": "GET",
    "timeout": 0,
};

$.ajax(settings).done(function (response) {
    
        function toTitleCase(str) {
        return str.replace(
            /\w\S*/g,
            function (txt) {
                return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
            }
            );
        }
        
        data = response.data;
        nyadran_table = ""
        for (i = 0; i < data.length; i++) {
            nomer = i + 1
            if (i % 2 === 0) {
                oddeven = 'odd'
            }
            else {
                oddeven = 'even'
            }
            nyadran_table += "<div class='table-content'> <div class='d-flex "+ oddeven +"'> <div class='content-div w-5'>" + nomer + ".</div> <div class='content-div arwah-name'>"+ toTitleCase(data[i].name) + "</div> <div class='content-div'> "+ toTitleCase(data[i].address) + "</div>"
            for (k = 0; k < data[i].arwahs.length; k++) {
                if (k > 0) {
                    nyadran_table += "<div class='d-flex "+ oddeven +"'> <div class='content-div w-5'></div> <div class='content-div arwah-name transparent'>"+ toTitleCase(data[i].name) + "</div> <div class='content-div'> </div> <div class='content-div'>"+ toTitleCase(data[i].arwahs[k].arwah_type) +"."+ toTitleCase(data[i].arwahs[k].arwah_name) +"</div> <div class='content-div'>"+ toTitleCase(data[i].arwahs[k].arwah_address) +"</div> </div>"
                } else {
                    nyadran_table += "<div class='content-div'>"+ toTitleCase(data[i].arwahs[k].arwah_type) +"."+ toTitleCase(data[i].arwahs[k].arwah_name) +"</div> <div class='content-div'>"+ toTitleCase(data[i].arwahs[k].arwah_address) +"</div></div>"
                }
            }
            nyadran_table += "</div>"
        }
        // for(i=0; i<4000; i++){
            $("#table-header").after(nyadran_table)
        // }
        
    });
    
    $(document).ready(function(){
        $("#search-arwah").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".table-content").filter(function() {
                $(this).toggle($(this).find(".arwah-name").text().toLowerCase().indexOf(value) > -1)
            });
        });
        
       
    });