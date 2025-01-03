let leadsArr = [];
$(document).ready(function() {
    $("#myleads").empty();
    $(".loader").show();
    var _token = $('input[name="_token"]').val();
    const obj = {_token};
    
    // Usage:
    getJSONResponse("getresponses",obj).then((data) => {
    leadsArr = data["leads"]["leadsArr"];
    displayLeads(leadsArr);
}).catch((error) => {
    //console.error('Failed to fetch leads:', error);  // Handle the error here
});      
});


$(document).on('click','.be_first',function() {
    $("#myleads").empty();
    $(".loader").show();
    const beFirstArr = $.grep(leadsArr, function(json) {
        return json.contacted === 0;
    });
    displayLeads(beFirstArr);    
});

$(document).on('click','.trail',function() {    
    let _token = $('input[name="_token"]').val();
    let trail_id = $(this).attr("trail_id");
    let lead_id = $(this).attr("lead_id");

    const obj = {_token,trail_id,lead_id};
    getJSONResponse("addleadstrail",obj).then((data) => {
        console.log(data);
    }).catch((error) => {
        console.error('Failed to fetch leads:', error);  // Handle the error here
    });         
});

$(document).on('click','#send_estimate',function() {    
    let _token = $('input[name="_token"]').val();    
    let lead_id = $(this).attr("lead_id");
    let estimate_amount = $("#estimate_amount").val();
    let estimate_type = $("#estimate_type").val();
    let respond_textarea_field = $("#respond_textarea_field").val();

    const obj = {_token,lead_id, estimate_amount, estimate_type, respond_textarea_field};
    getJSONResponse("updateestimate",obj).then((data) => {
        console.log(data);
    }).catch((error) => {
        console.error('Failed to update lead:', error);  // Handle the error here
    });         
});


$(document).on('click','.my_urgent',function() {
    $("#myleads").empty();
    $(".loader").show();
    const beFirstArr = $.grep(leadsArr, function(json) {
        return json.urgent === 1;
    });
    displayLeads(beFirstArr);      
});
$(document).on('click','.view_lead',function() {
    var _token = $('input[name="_token"]').val();
   let lead_id = $(this).attr("m");  
   const obj = {_token,lead_id};
   let details = ""; 

   getHTMLResponse("getresponsedetails",obj).then((data) => {
    details = data;
    $("#show_details").html(details);
    $('.view_lead').removeClass('m-border');
    $(this).addClass('m-border');
}).catch((error) => {
    details = 'There is an error : '+error;  // Handle the error here
});    
   $("#show_details").html(details);
}); 

$(document).on('click','#add_note',function() {
    var _token = $('input[name="_token"]').val();
   let lead_id = $(this).attr("m");  
   let description=$('#note_description').val();
   const obj = {_token,lead_id,description};
   getJSONResponse("addleadnote",obj).then((data) => {
   console.log(data);
    toast("success",data.message,5000);
    $('#ininfo').append('<div class="details flex-column flex-grow-1 ml-2 mb-4 p-3 border text-sm"><div class="details-top d-flex justify-content-between text-sm text-grey-400">'+
        '<div class="details-top-left flex-grow-1"> <div class="item-actor-name">Me</div></div><div class="details-top-right">'+
        '<div class="item-date">'+data.date_entered+'</div></div></div><div class="details-center"><p class="item-message mb-0 mt-1">'+data.note["description"]+"</p></div></div>");
    $('#note_description').val("");
}).catch((error) => {
    console.log('There is an error : '+error);  // Handle the error here
}); 
}); 

$(document).on('change','#status-select',function() {
    var _token = $('input[name="_token"]').val();
   let lead_id = $(this).attr("m");
   let status = $(this).val();   
   const obj = {_token,lead_id,status};
   console.log(obj)
   getJSONResponse("updatestatus",obj).then((data) => {
    console.log(data)
    toast("success",data.message,5000);
}).catch((error) => {
    console.log('There is an error : '+error);  // Handle the error here
}); 
});

const displayLeads = (json) =>{
    const beFirstArr = $.grep(leadsArr, function(obj) {
        return obj.contacted === 0;
    });
    const urgentArr = $.grep(leadsArr, function(obj) {
        return obj.urgent === 1;
    });
    $(".matching_leads").text(json.length);
    $("#be_first").text(beFirstArr.length);
    $("#my_urgent").text(urgentArr.length);

    for(key in json)
        {
            let lead_id = json[key]["lead_id"];
            let first_letter = json[key]["first_letter"];
            let first_name = json[key]["first_name"];
            let location = json[key]["location"];
            let time = json[key]["time"];
            let urgent = json[key]["urgent"];
            let is_phone_verified = json[key]["is_phone_verified"];
            let additional_details = json[key]["additional_details"];
            let frequent = json[key]["frequent"];
            let contacted = json[key]["contacted"];
            let description = json[key]["description"];
            let hiring_decision = json[key]["hiring_decision"];   
            let remender = json[key]["remender"];
            let service_name = json[key]["service_name"];
            let credits = json[key]["credits"];
            let leads_trail = json[key]["leads_trail"];
            $("#myleads").append(leadsTemplate(lead_id,first_letter,first_name,location,time,urgent,is_phone_verified,additional_details,frequent,description,contacted,remender,service_name,credits,hiring_decision,leads_trail));
          
        }
        if(json.length>0)
        {
           
            let _token = $('input[name="_token"]').val();
            let lead_idu =json[0]["lead_id"];
            
            let details = "";

            getHTMLResponse("getresponsedetails",{_token,lead_id:lead_idu}).then((data) => {
                details = data;
                $("#show_details").html(details);
                $('.view_lead').removeClass('m-border');
                $('.view_lead:first-child').addClass('m-border');
            }).catch((error) => {
                details = 'There is an error : '+error;  // Handle the error here
            });    
               $("#show_details").html(details);
        }
        $(".loader").hide();
}

const getJSONResponse = (url,obj) => {
    return new Promise((resolve, reject) => {        
        $.ajax({
            url: '/'+url,
            type: 'POST',
            data: obj,
            beforeSend: function() {
                $(".loader").show();
            },
            success: function(data) {
                resolve(data);  // Resolve the promise with the data
            },
            error: function(xhr, status, error) {
                //console.error('Error:', status, error);
                reject(error);  // Reject the promise if there's an error
            },
            complete: function() {
                $(".loader").hide();
            }
        });
    });
};
const getHTMLResponse = (url,obj) => {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: '/'+url,
            type: 'POST',
            data: obj,
            beforeSend: function() {
                $(".loader").show();
            },
            success: function(data) {
                resolve(data);  // Resolve the promise with the data
            },
            error: function(xhr, status, error) {
                //console.error('Error:', status, error);
                reject(error);  // Reject the promise if there's an error
            },
            complete: function() {
                $(".loader").hide();
            }
        });
    });
};




const leadsTemplate = (
    lead_id, first_letter, first_name, location, time, urgent, 
    is_phone_verified, additional_details, frequent, description, 
    contacted, remender, service_name, credits,hiring_decision,leads_trail
) => {

    let txt = "<button m='" + lead_id + "' class='view_lead'>" +
              "<div class='leads-list-item-card tw-p-6 tw-mx-4 tw-border-l-4 tw-border-transparent " +
              "tw-rounded-lg tw-bg-white hover:tw-bg-gray-50 tw-shadow-md hover:tw-shadow-lg' data-cy='lead-card-is-active-false'>" +
              "<div class='tw-flex tw-justify-between'>" +
              "<div class='tw-flex tw-relative LeadsListItem_blueDot__magSY'>" +
              "<div class='tw-mr-4'>" +
              "<div class='Avatar_base__iRlms Avatar_radiusFull__-VC23 Avatar_bgAF42FF__vTweJ' style='width: 40px; height: 40px;'>" +
              "<span class='tw-text-white tw-text-base tw-text-center'>" + first_letter + "</span>" +
              "</div></div>" +
              "<div class='tw-text-left'>" +
              "<p class='tw-m-0'><b>" + first_name + "</b></p>" +
              "<p class='tw-m-0 tw-font-gordita-regular tw-text-xs'>" + service_name + "</p>" +
              "<p class='tw-mt-1 tw-font-gordita-regular tw-text-xs tw-text-gray-500'></p>" +
              "</div></div>" +
              "<span class='tw-p-1 tw-m-0 tw-text-gray-600 tw-text-xs tw-font-gordita-regular " +
              "tw-bg-green-50 tw-h-fit tw-rounded'><svg width='14' height='14' viewBox='0 0 14 14' fill='none' xmlns='http://www.w3.org/2000/svg'><circle cx='7' cy='7' r='7' fill='#6C7191'></circle></svg>Pending</span>";

            txt += "</div><div class='tw-flex tw-flex-wrap tw-justify-start tw-items-center tw-gap-1 tw-mt-4' data-cy='value-badges'></div>";
            txt += " <div class='tw-flex tw-flex-col tw-p-2 tw-bg-gray-100 tw-rounded tw-text-xs tw-mt-4'>";
            
            txt += "  <span class='tw-text-left tw-mb-3 tw-text-xs tw-font-gordita-regular tw-flex tw-justify-start tw-items-end'><b><i class='bi bi-geo-alt'></i>" + location + "</b></span>";
            txt += "  <span class='tw-text-left tw-font-gordita-regular tw-text-gray-700'><i class='bi bi-list-check'></i>" + description + "</span>";
            txt += "</div> ";
            txt += "<div class='mt-2 px-2 py-2 latest-action bg-grey-50 flex-row justify-content-between align-items-center text-break text-xs rounded'>";
            txt += "  <span class='tw-text-left tw-mb-3'></span>";
            txt += "  <span class='tw-text-left tw-font-gordita-regular tw-text-gray-700' style='font-size: 0.8rem; display: flex; align-items: left;'><b><i class='bi bi-check-all'></i></b><span style='margin-left: 0.5rem;'><b>" + 'leads_trail' + "</b></span></span>";

            txt += "</div><div class='tw-flex tw-justify-between tw-mt-4'>";
            txt += "  <div class='tw-flex tw-justify-start tw-items-end' data-cy='lead-price'>";
          
            txt += "  </div>";
            txt += "  <div>";
            txt += "    <div>";
                   "<div></div>";
                   "<div></div>";
                   "</div><div><div><span>";
                   "";
     
            txt +="<span></span>";  

            txt += " </span></div></div></div></div></div></button>";                                    
    
 return txt;
};

$(document).on('click','.whatsap',function(){
let contact_number = $(this).attr("contact_number").replace('+','');
window.open('https://api.whatsapp.com/send/?phone='+contact_number+'&text&type=phone_number&app_absent=0', '_blank');
})

function toast(icon,txt,time)
{
    yoyoToast.fire({
        type: icon,
        title: 'Status',
        message: txt,
        timeout: time,
        position: 'top-right',
        timeoutFunction: ()=> {},   
    });
}