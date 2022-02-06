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
        
        // $(document).ready(function () {
        //     $('#table-nyadran').DataTable({
        // });
        
        console.log(data)
        nyadran_table = ""
        for (i = 0; i < data.length; i++) {
            nomer = i + 1
            if (i % 2 === 0) {
                oddeven = 'even'
            }
            else {
                oddeven = 'odd'
            }
            nyadran_table += "<tr class='" + oddeven + "'><td>" + nomer + ".</td><td class='name-arwah'>" + toTitleCase(data[i].name) + "</td><td>" + toTitleCase(data[i].address) + "</td>"
            for (k = 0; k < data[i].arwahs.length; k++) {
                if (k > 0) {
                    nyadran_table += "<tr class=" + oddeven + "><td></td><td class='transparent'>"+toTitleCase(data[i].name)+"</td><td></td><td>" + data[i].arwahs[k].arwah_type + ". " + toTitleCase(data[i].arwahs[k].arwah_name) + "</td><td>" + toTitleCase(data[i].arwahs[k].arwah_address) + "</td></tr>"
                } else {
                    nyadran_table += "<td>" + data[i].arwahs[k].arwah_type + ". " + toTitleCase(data[i].arwahs[k].arwah_name) + "</td><td>" + toTitleCase(data[i].arwahs[k].arwah_address) + "</td></tr>"
                }
            }
        }
        $("#table-arwah").html(nyadran_table)
    });
    
    $(document).ready(function(){
        $("#search-arwah").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#table-arwah tr").filter(function() {
                $(this).toggle($(this).find("td:eq(1)").text().toLowerCase().indexOf(value) > -1)
            });
        });
        
       
    });
    
    
    
    //   $( document ).ajaxComplete(function( event, request, settings ) {
    //     let rows = []
    //     $('#table-nyadran tbody tr').each(function(i, row) {
    //         return rows.push(row);
    //     });
        
    //     $('#pagination').pagination({
    //         dataSource: rows,
    //         pageSize: 10,
    //         callback: function(data, pagination) {
    //             $('tbody').html(data);
    //         }
    //     })    
    //   });