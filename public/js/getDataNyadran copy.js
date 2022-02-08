
url=""
$.ajax({
    url: "http://103.179.56.179/api/nyadran/all?per_page=2&page=1",
    cache: false,
    success: function(response){
        pageLength = response.data.last_page
        //page
        pagination_html = "<li class='page-first'><a>«</a></li>"
        for(i=0; i<pageLength;i++){
            index = i+1
            if(index==1){
                pagination_html += "<li class='page' id='index_"+index+"' value='"+index+"'><a class='active-pagination'>"+index+"</a></li>" 
            }else{
                pagination_html += "<li class='page' id='index_"+index+"' value='"+index+"'><a class=''>"+index+"</a></li>" 
            }
        }
        pagination_html += "<li class='page-last'><a>»</a></li>"
        $("#pagination").html(pagination_html)
        
        $(document).on("click", "li.page", function(){
            $this = $(this)
            page = $this.val()
            $(".page > a").removeClass("active-pagination")
            $this.children().addClass("active-pagination")
            url = "http://103.179.56.179/api/nyadran/all?per_page=2&page="+page
            GetData(url)
        })
        $(document).on("click", "li.page-first", function(){
            url = response.data.first_page_url
            $(".page > a").removeClass("active-pagination")
            $("#index_1").children().addClass("active-pagination")
            GetData(url)
        })
        $(document).on("click", "li.page-last", function(){
            $(".page > a").removeClass("active-pagination")
            $("#index_"+response.data.last_page).children().addClass("active-pagination")
            url = response.data.last_page_url
            GetData(url)
        })
    }
});


function GetData(url){
    var settings = {
        "url": url,
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
            data = response.data.data;
            console.log(response.data)
            //table
            nyadran_table = ""
            for (i = 0; i < data.length; i++) {
                nomer = i + 1
                if (i % 2 === 0) {
                    oddeven = 'odd'
                }
                else {
                    oddeven = 'even'
                }
                nyadran_table += "<div> <div class='d-flex " + oddeven + "'> <div class='content-div w-5'>" + nomer + ".</div> <div class='content-div arwah-name'>" + toTitleCase(data[i].name) + "</div> <div class='content-div'> " + toTitleCase(data[i].address) + "</div>"
                for (k = 0; k < data[i].arwahs.length; k++) {
                    if (k > 0) {
                        nyadran_table += "<div class='d-flex " + oddeven + "'> <div class='content-div w-5'></div> <div class='content-div arwah-name transparent'>" + toTitleCase(data[i].name) + "</div> <div class='content-div'> </div> <div class='content-div'>" + toTitleCase(data[i].arwahs[k].arwah_type) + "." + toTitleCase(data[i].arwahs[k].arwah_name) + "</div> <div class='content-div'>" + toTitleCase(data[i].arwahs[k].arwah_address) + "</div> </div>"
                    } else {
                        nyadran_table += "<div class='content-div'>" + toTitleCase(data[i].arwahs[k].arwah_type) + "." + toTitleCase(data[i].arwahs[k].arwah_name) + "</div> <div class='content-div'>" + toTitleCase(data[i].arwahs[k].arwah_address) + "</div></div>"
                    }
                }
                nyadran_table += "</div>"
            }
            // for(i=0; i<400; i++){
            $("#table-content").html(nyadran_table)
            // }
            lengthRow = $(".odd").length
            lengthRow += $(".even").length
        });
    }
    
    
    $(document).ready(function () {
        $("#search-arwah").on("keyup", function () {
            var value = $(this).val().toLowerCase();
            $(".table-content").filter(function () {
                $(this).toggle($(this).find(".arwah-name").text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    
    $(document).ready(function () {
        url = "http://103.179.56.179/api/nyadran/all?per_page=2&page=1"
        GetData(url)
    });
    
    var stat = {
        "url": "http://103.179.56.179/api/nyadran/statistik",
        "method": "GET",
        "timeout": 0,
    };
    
    $.ajax(stat).done(function (response) {
        stats = response.data;
        $("#stats").html("Total sender : " + response.data.total_sender + " Orang. Total Arwah : "+ response.data.total_arwah )
    });
    
    